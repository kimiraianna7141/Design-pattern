<?php
class State{
    private $cpu;
    private $memory;
    private $hardDrive;
    
    public function_construct(){
        $this->cpu = new CPU();
        $this->hardDrive = new HardDrive();
    }
    
        public function startComputer() {
            $this->cpu->freeze();
            $this->hardDrive->read();
            $this->memory->load();
            $this->cpu->execute();
        }
    }