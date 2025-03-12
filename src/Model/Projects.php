<?php

namespace App\Model;

class Projects{
    public function __construct(
        private string $projectName,
        private string $projectDescription,
        private string $projectDeadline,
        private string $projectStatus,
    ) {
    
    }    
        public function getProjectName(): string {
            return $this->projectName;
        }

        public function getProjectDescription(): string {
            return $this->projectDescription;
        }

        public function getProjectDeadline(): string {
            return $this->projectDeadline;
        }

        public function getProjectStatus(): string {
            return $this->projectStatus;
        }
    }