<?php
    declare (strict_types=1);

    class ClassSched extends Discipline{
        
        private $studentList=[];
        private $teacherList=[];
        private string $courseStartTime;
        private string $courseEndTime;

        public function __construct(string $courseNumber, string $courseName, string $courseStartTime, string $courseEndTime){
            parent::__construct($courseName, $courseNumber);
            $this->courseStartTime=$courseStartTime;
            $this->courseEndTime=$courseEndTime;
        }

        public function setTeacherList(Teacher $teacher):bool{
            $this->teacherList[]=$teacher;
            return true;
        }

        public function setStudentList(Student $studentList):bool{
            $this->studentList[]=$studentList;
            return true;
        }

        public function getTeacherList(): array{
            return $this->teacherList;
        }
        public function getStudentList(): array{
            return $this->studentList;
        }
        public function getcourseStartTime(): string{
            return $this->courseStartTime;
        }
        public function getcourseEndTime(): string{
            return $this->courseEndTime;
        }
    }