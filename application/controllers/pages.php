<?php

/**
* 
*/
class Pages extends CI_Controller{
    
    public function view($page = 'home'){
        # code...
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //page not exist
            //invoke the function defined in CodeIgniter
            show_404();
        }

        //大写title中的第一个字母
        /**
         * view() 方法中的第二个参数是用来传递值给视图的。
         * 数组中的每个值都被定义成与它关键字相同的一个变量，
         * 如控制器中 $data['title'] 的值就等同于视图中变量$title。
         */
        $data['title'] = ucfirst($page);
        $this -> load ->view('templates/header',$data);
        $this -> load ->view('pages/'.$page,$data);
        $this -> load ->view('templates/footer',$data);
    }
}