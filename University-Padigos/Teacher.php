<?php
    declare(strict_types=1);

    class Teacher{
        private string $teacherTitle="";
        private string $teacherFirstName;
        private string $teacherLastName;

        public function __construct(string $teacherTitle, string $teacherFirstName, string $teacherLastName){
            $this->teacherTitle=$teacherTitle;
            $this->teacherFirstName=$teacherFirstName;
            $this->teacherLastName=$teacherLastName;
        }
        public function getTeacherTitle(): string{
            return $this->teacherTitle;
        }

        public function getTeacherFirstName(): string{
            return $this->teacherFirstName;
        }

        public function getTeacherLastName(): string{
            return $this->teacherLastName;
        }
    }