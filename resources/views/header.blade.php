<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
    @livewireStyles
    <title>Adminer UI</title>
    <style>
        :root {
            --tblr-primary: #ff0000;
            /*--svg-color: var(--tblr-primary);*/
            --tblr-border-radius-lg: 18px;
        }
        .swal-modal {background-color: var(--tblr-bg-surface);}
        .swal-text, .swal-title {color: var(--tblr-gray-100);}
        .swal-text {font-size: 19px;}
        .swal-button--confirm {background-color: var(--tblr-primary);}
        .swal-button--confirm:hover {background-color: var(--tblr-danger-text-emphasis) !important;}
    </style>
</head>
<body data-bs-theme="dark">
