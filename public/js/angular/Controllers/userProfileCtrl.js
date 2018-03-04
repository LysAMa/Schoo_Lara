dashboardApp.controller('UserProfileCtrl', function UserProfileCtrl($scope) {

    $scope.editProfile = false;
    $scope.profileData = {
        company: '',
        userName: '',
        email: '',
        firstName: '',
        lastName: '',
        adress: '',
        city: '',
        country: '',
        postalCode: '',
        aboutMe: ''
    };

    $scope.editInfoProfile = function () {
        $scope.editProfile = true;
    }



});