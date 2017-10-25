<?php
namespace app\controller\Admin;
use think\Controller;
class Admin extends Controller
{
  public function index()
  {
    return $this -> fetch();
  }
}
