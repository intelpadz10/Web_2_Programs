<?php
    declare(strict_types=1);

    class School{
        
        private string $school;
        
        private $courseList=[];       
        public function __construct(string $school){
            $this->school=$school;
        }

        public function getSchool(): string{
            return $this->school;
        }
    }