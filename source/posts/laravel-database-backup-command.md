---
extends: _layouts.posts
title: Laravel - Database Backup Command
description: Laravel - Database Backup Command
section: content
---

```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
	protected $signature = 'database:backup --output';

	protected $description = 'Backup MySQL database';

	protected $process;

	public function __construct()
	{
		parent::__construct();

		$backup_command = sprintf(
			'mysqldump -u%s -p%s %s > %s',
			config('database.connections.mysql.username'),
			config('database.connections.mysql.password'),
			config('database.connections.mysql.database'),
			storage_path('backups/backup_' . date('Y_m_d') . '.sql')
		);

		$this->process = Process::fromShellCommandline($backup_command);
	}

	public function handle()
	{
		try {
			$this->process->mustRun();

			if ($this->option('output')) {
				$this->info('Database backup has been created successfully.');
			}

		} catch (ProcessFailedException $exception) {

			$this->error('Failed to create a database backup, run using --output to see the error message.');

			if ($this->option('output')) {

				$this->error($exception->getMessage());
			}
		}
	}
}
```

Now we can run `php artisan database:backup` and it'll create a database dump in "/storage/backups" directory. If there's an error, we can run `php artisan database:backup --output` to see the error message.
