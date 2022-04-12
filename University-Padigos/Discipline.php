<?php
    declare(strict_types=1);

    class Discipline{
        private string $courseName;
        private string $courseNumber;

        public function __construct(string $courseName, string $courseNumber){
            $this->courseName=$courseName;
            $this->courseNumber=$courseNumber;
        }

        public function getcourseName(): string{
            return $this->courseName;
        }

        public function getcourseNumber():string{
            return $this->courseNumber;
        }
    }