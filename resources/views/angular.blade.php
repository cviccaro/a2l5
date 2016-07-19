<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to angular2-seed!</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/main.css?1468898927464">
  <!-- endinject -->
</head>
<body>

  <sd-app>Loading...</sd-app>

  <script>
  // Fixes undefined module function in SystemJS bundle
  function module() {}
  </script>

  <!-- shims:js -->
  <script src="/node_modules/core-js/client/shim.min.js?1468898927461"></script>
  <script src="/node_modules/systemjs/dist/system.src.js?1468898927462"></script>
  <!-- endinject -->

  
  <script>
    System.config({
  "defaultJSExtensions": true,
  "packageConfigPaths": [
    "/node_modules/*/package.json",
    "/node_modules/**/package.json",
    "/node_modules/@angular/*/package.json"
  ],
  "paths": {
    "app/main": "/app/main",
    "@angular/common": "node_modules/@angular/common/bundles/common.umd.js",
    "@angular/compiler": "node_modules/@angular/compiler/bundles/compiler.umd.js",
    "@angular/core": "node_modules/@angular/core/bundles/core.umd.js",
    "@angular/forms": "node_modules/@angular/forms/bundles/forms.umd.js",
    "@angular/http": "node_modules/@angular/http/bundles/http.umd.js",
    "@angular/platform-browser": "node_modules/@angular/platform-browser/bundles/platform-browser.umd.js",
    "@angular/platform-browser-dynamic": "node_modules/@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js",
    "@angular/router": "node_modules/@angular/router/index.js",
    "rxjs/*": "node_modules/rxjs/*",
    "app/*": "/app/*",
    "*": "node_modules/*"
  },
  "packages": {
    "rxjs": {
      "defaultExtension": "js"
    }
  }
})
  </script>
  

  <!-- libs:js -->
  <script src="/node_modules/zone.js/dist/zone.js?1468898927463"></script>
  <script src="/node_modules/rxjs/bundles/Rx.js?1468898927464"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <!-- endinject -->

  
  <script>
  System.import('app/main')
    .catch(function (e) {
      console.error(e,
        'Report this error at https://github.com/mgechev/angular2-seed/issues');
    });
  </script>
  

</body>
</html>
