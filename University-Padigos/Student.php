<?php
    declare(strict_types=1);

    class Student{
        private string $StudentFirstName;
        private string $StudentLastName;

        public function __construct(string $StudentLastName, string $StudentFirstName){
            $this->StudentFirstName=$StudentFirstName;
            $this->StudentLastName=$StudentLastName;
        }

        public function getStudentFirstName(): string{
            return $this->StudentFirstName;
        }

        public function getStudentLastName(): string{
            return $this->StudentLastName;
        }
    }