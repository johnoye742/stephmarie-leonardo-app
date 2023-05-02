<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <livewire:styles></livewire:styles>
</head>
<body>
    <livewire:add-less></livewire:add-less>
    {{ session() -> get('code') }}
    <!-- SCRIPTS -->
    <livewire:scripts></livewire:scripts>
</body>
</html>