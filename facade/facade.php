<?php
class CoputerFacade{
    private $cpu;
    private $memory;
    private $hardDrive;
    
    public function_construct(){
        $this->cpu = new CPU();
        $this->hardDrive = new HardDrive();
    }

    public function start
}