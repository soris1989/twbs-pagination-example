$(function () {
    var url = "https://dummyjson.com/posts";
    var page = 1;
    var limit = 10;
    var xhr;

    var $pagination = $("#pagination-container");

    loadResults(page, limit);

    function loadResults(page = 1, limit = 10) {
        var skip = getSkip(page, limit);

        if (xhr && xhr.readyState != 4) {
            xhr.abort();
        }

        xhr = $.ajax({
            url: url,
            data: { limit: limit, skip: skip },
            success: function (data) {
                console.log(data);

                var totalPages = Math.ceil(data.total / limit);
                // $pagination.twbsPagination("destroy");
                $pagination.twbsPagination({
                    totalPages: totalPages,
                    initiateStartPageClick: false,
                    visiblePages: 5,
                    first: '<span aria-hidden="true">&laquo;</span>',
                    last: '<span aria-hidden="true">&raquo;</span>',
                    prev: '<span aria-hidden="true">&lsaquo;</span>',
                    next: '<span aria-hidden="true">&rsaquo;</span>',
                    onPageClick: function (event, currPage) {
                        loadResults(currPage, limit);
                    },
                });
            },
        });
    }

    function getSkip(page, limit) {
        return (page - 1) * limit;
    }
});
