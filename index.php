<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>

    <!-- Jquery ui -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- Bootstrap core-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" />
    <!-- FontAwesome icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" />

    <!-- Custom Style -->
    <script src="./css/style.css?v=<?= time() ?>"></script>
</head>
<body>
    <div class="results">
        <div id=pagination-container class="pagination"></div>
        <div id="data"></div>
    </div>
    <!-- Jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jquery UI -->
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap 5 -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MomentJs -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <!-- PaginationJs -->
    <script type="text/javascript" src="./js/jquery.twbsPagination.min.js"></script>

    <!-- Custom Script -->
    <script src="./js/script.js?v=<?= time() ?>"></script>
</body>
</html>