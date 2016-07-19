import * as gulp from 'gulp';
import * as gulpLoadPlugins from 'gulp-load-plugins';
import * as merge from 'merge-stream';
import { join } from 'path';
import { INJECTABLES, ENV, APP_DEST,  } from '../../config';

const plugins = <any>gulpLoadPlugins();

function copyNodeModules() {
  return gulp.src(INJECTABLES, { cwd: 'node_modules/**' })
    //.pipe(plugins.wait(2500))
    .pipe(gulp.dest('../public/node_modules'));
}

function copyBuiltFiles() {
  return gulp.src(join(APP_DEST, '**', '*'))
   // .pipe(plugins.wait(1500))
    .pipe(gulp.dest('../public'));
}

function createLaravelBlade() {
  return gulp.src('../public/index.html')
    .pipe(plugins.rename('angular.blade.php'))
    .pipe(gulp.dest('../resources/views'));
}

let stream = ENV === 'prod' ?
  merge(copyBuiltFiles(), createLaravelBlade())
  : merge(copyNodeModules(), copyBuiltFiles(), createLaravelBlade());

export = () => stream;
