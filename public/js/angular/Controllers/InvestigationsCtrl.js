dashboardApp.controller('InvestigationsCtrl', function ($scope) {

    var APP_URL = $('#editForm').attr('action');

    $scope.editData = {};

    $scope.setDataEdit = function (data) {
        $scope.editData = data;
        $('#editForm').attr('action', APP_URL + '/' + data.id);
    }

    $scope.removeInvestigation = function (id) {
        $('#deleteForm').attr('action', APP_URL + '/' + id);
    }

    $scope.onKoboHumani = function () {
        $('.kobo-module').transition('fade');
        $('.kobo-login').transition('fade');
    }

    $scope.goBackToModule = function () {
        $('.kobo-login').transition('fade');
        $('.kobo-module').transition('fade');
    }

    $scope.showKoboData = function () {
        $('.kobo-login').transition('fade');
        $('.kobo-data').transition('fade');
    }


});