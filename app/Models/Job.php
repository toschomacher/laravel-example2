<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function allJobs(): array {
        return [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '£50,000.00'
                ],
                [
                    'id' => '2',
                    'title' => 'Programmer',
                    'salary' => '£40,000.00'
                ],
                [
                    'id' => '3',
                    'title' => 'Teacher',
                    'salary' => '£45,000.00'
                ]
                ];
    }

    public static function findJob(int $id): array {
        $job = Arr::first(static::allJobs(), fn($job) => $job['id'] == $id);

        if (! $job){
            abort(404);
        }

        return $job;
    }
}
