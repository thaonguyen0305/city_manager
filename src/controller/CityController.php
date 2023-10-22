<?php
namespace controller;
use model\cityModel;

class CityController 
{
    public $cityModel;

    public function __construct()
    {
        $this->cityModel = new CityModel();
    }

    public function showPageCityList()
    {
        $city = $this->cityModel->getAllCity();
        include_once "./src/view/city/index.php";
    }
    public function deleteCity($id)
    {
        $city = $this->cityModel->delete($id);
        header("location: index.php?page=city&action=show-list");
    }
    public function showFormAdd()
    {
        include_once "./src/view/city/add.php";
    }
    public function storeCity()
    {
        $name=$_REQUEST['name'];
        $nation=$_REQUEST['nation'];
        $area=$_REQUEST['area'];
        $population=$_REQUEST['population'];
        $GDP=$_REQUEST['GDP'];
        $introduce=$_REQUEST['introduce'];
        if (!$name || !$nation || !$area || !$population || !$GDP || !$introduce) {
            header("location: index.php?page=city&action=add");
        } else {
        $this->cityModel->addCity($name,$nation,$area,$population,$GDP,$introduce);
        header("location: index.php?page=city&action=show-list");
        }
    }

    function showPageFormEdit($id)
    {
        $citys = $this->cityModel->findCityById($id);
        if (!$citys) {
            include_once "./src/view/error/404.php";
        } else{
            include_once "./src/view/city/edit.php";
        }
    }

    public function editCity($id)
    {
        $name = $_REQUEST['name'];
        $nation = $_REQUEST['nation'];
        $area = $_REQUEST['area'];
        $population = $_REQUEST['population'];
        $GDP = $_REQUEST['GDP'];
        $introduce = $_REQUEST['introduce'];

        $this->cityModel->updateCity($name,$nation,$area,$population,$GDP,$introduce, $id);
        header("location: index.php?page=city&action=show-list");
    }

    public function showInfoCity($id)
    {
        $citys = $this->cityModel->InfoCity($id);
        include_once "./src/view/city/info.php";
        
    }
}