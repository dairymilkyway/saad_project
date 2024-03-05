<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>
    <style>
    body {
        background-image: url('/images/430837379_333900309104849_4293786303333364672_n.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
      }

    img {
        max-width: 100%;
        height: 100%;
        height:auto;
        background:#e0e2e4 ;
        background: radial-gradient(white 30%, #e0e2e4 70%);

    }

    .delete-btn {
        background-color: red !important;
    }

    .product-image {
        height: 300px;
        width: 300px;
    }

    .cart-image {
        height: 150px;
        width: 150px;
    }

    #cart_count{
        text-align:center;
        padding: 0 0.9rem 0.1rem 0.9rem;
        border-radius: 3rem;
    }
    .card shadow:hover {
        transform: translateY(-5px);
    }

    .shopping-cart{
      padding: 3% 0;
    }

    .cart-items+.cart-items{
       padding:2% 0;
    }

    .price-details h6{
        padding:3% 2%;
    }

    .search-form {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .search-input {
        width: 500px;
        border-radius: 5px;
    }

    .search-button {
        border-radius: 5px;
    }
    .navbar {
        background-color: #343a40;
        padding: 1rem;
    }

    .navbar a {
        color: white;
        margin-right: 10px;
    }

    .custom-create-button {
        color: black;
        background-color: white;
        border-color: white;
    }

    .custom-create-button:hover {
    background-color: #e9ecef;
    color: black;
    }

    .custom-edit-button{
        background-color: #5b9aa0;
        color: #fff;
    }
    .custom-apply {
        background-color: blue !important;
        color: black;
        border-color: blue;
    }

    .custom-delete-button{
        background-color: #c83349;
        color: #fff;
    }
    .custom-card {
            height: 400px;
            margin-bottom: 20px;
    }
    .custom-card img {
        height: 200px;
        width: auto;
    }

    .delete-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }

    .edit-btn {
        position: absolute;
        bottom: 10px;
        right: 30px;
    }
</style>
</head>
<body>
    @yield('body')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
