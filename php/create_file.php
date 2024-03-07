<?php
//test if branch worked
class test_File{

    private string $name; 
    private string $mode; 
    private bool $use_path;
    private string $context = ''; 
    

    

    public function __construct($name, $mode, $use_path) {
        $this->name = $name;
        $this->mode = $mode;
        $this->use_path = $use_path;
    }

    public function read_file(){

    }

    public function create_file(){
       $this->file = fopen($this->name, $this->mode, $this->use_path); 

    }

    public function write_file($data){
        fwrite( );
    }

}

$file1 = new test_File("log\log.txt", 'w', true);
$file1->create_file(); 
$file1->write_file("hello");  


















