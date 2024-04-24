<?php

namespace App\Enums;

enum TaskStatus: string {
    case TODO = 'to-do';
    case PROGRESS = 'in-progress';
    case REVIEW = 'in-review';
    case PENDING = 'pending';
    case COMPLETED = 'finished';
}