<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>To-Do List</title>
        <meta name="description" content="Login Page">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div id="app"></div>

        @vite('resources/js/app.js') 
    </body>
</html>