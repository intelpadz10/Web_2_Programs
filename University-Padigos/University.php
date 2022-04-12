<?php
    declare(strict_types=1);

    class University extends School{
        public function __construct(string $school){
            parent::__construct($school);
        }

        public function addCourseList(ClassSched $courseList): bool{
            $this->courseList[]=$courseList;
            return true;
        }

        public function getCourseList(): array{
            return $this->courseList;
        }
    }