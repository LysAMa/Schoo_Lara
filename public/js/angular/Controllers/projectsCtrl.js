dashboardApp.controller('ProjectsCtrl', function ($scope) {

    var APP_URL = $('#editForm').attr('action');

    $scope.init = function () {
        $scope.editData = {};

        $('.edit-btn').on('click', function () {
            //
            $scope.editData = JSON.parse($(this).val());

            $('#editForm').attr('action', APP_URL + '/' + $scope.editData.id);

        });

        $('.remove-btn').on('click', function () {
            var id = $(this).val();
            $('#deleteForm').attr('action', APP_URL + '/' + id);

        });
    }

    $scope.setDataEdit = function () {}

    $scope.init();



});