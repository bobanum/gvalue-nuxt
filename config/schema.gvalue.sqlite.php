<?php
return [
	'tables' => [
		'comment_result' => [
			'name' => 'comment_result',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'comment_id' => [
					'cid' => 1,
					'name' => 'comment_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'result_id' => [
					'cid' => 2,
					'name' => 'result_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'special_value' => [
					'cid' => 3,
					'name' => 'special_value',
					'type' => 'decimal(8, 2)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 4,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 5,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'comment' => [
					'name' => 'comment',
					'table' => 'comments',
					'type' => 1,
					'foreign_key' => 'comment_id',
				],
				'result' => [
					'name' => 'result',
					'table' => 'results',
					'type' => 1,
					'foreign_key' => 'result_id',
				],
			],
			'foreign_keys' => [
				'comment_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'comments',
					'from' => 'comment_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'result_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'results',
					'from' => 'result_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'comments' => [
			'name' => 'comments',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'wording' => [
					'cid' => 1,
					'name' => 'wording',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 2,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'details' => [
					'cid' => 3,
					'name' => 'details',
					'type' => 'TEXT',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'parameter_id' => [
					'cid' => 4,
					'name' => 'parameter_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'value' => [
					'cid' => 5,
					'name' => 'value',
					'type' => 'decimal(8, 2)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'relative' => [
					'cid' => 6,
					'name' => 'relative',
					'type' => 'tinyint(1)',
					'notnull' => 1,
					'dflt_value' => '\'1\'',
					'pk' => 0,
				],
				'proportional' => [
					'cid' => 7,
					'name' => 'proportional',
					'type' => 'tinyint(1)',
					'notnull' => 1,
					'dflt_value' => '\'0\'',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 8,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 9,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'comment_result' => [
					'name' => 'comment_result',
					'table' => 'comment_result',
					'type' => 2,
					'foreign_key' => 'comment_id',
				],
				'value' => [
					'name' => 'value',
					'table' => 'parameters',
					'type' => 1,
					'foreign_key' => 'value',
				],
				'parameter' => [
					'name' => 'parameter',
					'table' => 'parameters',
					'type' => 1,
					'foreign_key' => 'parameter_id',
				],
			],
			'foreign_keys' => [
				'value' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'parameters',
					'from' => 'value',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'course_semester' => [
			'name' => 'course_semester',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'course_id' => [
					'cid' => 1,
					'name' => 'course_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'semester_id' => [
					'cid' => 2,
					'name' => 'semester_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 3,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 4,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
				'course_semester_primary_key' => [
					'seq' => 0,
					'name' => 'course_semester_primary_key',
					'unique' => 1,
					'origin' => 'c',
					'partial' => 0,
				],
			],
			'relations' => [
				'semester' => [
					'name' => 'semester',
					'table' => 'semesters',
					'type' => 1,
					'foreign_key' => 'semester_id',
				],
				'course' => [
					'name' => 'course',
					'table' => 'courses',
					'type' => 1,
					'foreign_key' => 'course_id',
				],
				'groups' => [
					'name' => 'groups',
					'table' => 'groups',
					'type' => 2,
					'foreign_key' => 'course_semester_id',
				],
			],
			'foreign_keys' => [
				'semester_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'semesters',
					'from' => 'semester_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'course_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'courses',
					'from' => 'course_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'courses' => [
			'name' => 'courses',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'code' => [
					'cid' => 1,
					'name' => 'code',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'title' => [
					'cid' => 2,
					'name' => 'title',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 3,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 4,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'department_id' => [
					'cid' => 5,
					'name' => 'department_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 6,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 7,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'course_semester' => [
					'name' => 'course_semester',
					'table' => 'course_semester',
					'type' => 2,
					'foreign_key' => 'course_id',
				],
				'department' => [
					'name' => 'department',
					'table' => 'departments',
					'type' => 1,
					'foreign_key' => 'department_id',
				],
				'evaluations' => [
					'name' => 'evaluations',
					'table' => 'evaluations',
					'type' => 2,
					'foreign_key' => 'course_id',
				],
			],
			'foreign_keys' => [
				'department_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'departments',
					'from' => 'department_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'departments' => [
			'name' => 'departments',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'code' => [
					'cid' => 1,
					'name' => 'code',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'name' => [
					'cid' => 2,
					'name' => 'name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 3,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 4,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'school_id' => [
					'cid' => 5,
					'name' => 'school_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 6,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 7,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'courses' => [
					'name' => 'courses',
					'table' => 'courses',
					'type' => 2,
					'foreign_key' => 'department_id',
				],
				'school' => [
					'name' => 'school',
					'table' => 'schools',
					'type' => 1,
					'foreign_key' => 'school_id',
				],
				'students' => [
					'name' => 'students',
					'table' => 'students',
					'type' => 2,
					'foreign_key' => 'department_id',
				],
				'teachers' => [
					'name' => 'teachers',
					'table' => 'teachers',
					'type' => 2,
					'foreign_key' => 'department_id',
				],
			],
			'foreign_keys' => [
				'school_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'schools',
					'from' => 'school_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'evaluation_teacher' => [
			'name' => 'evaluation_teacher',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'evaluation_id' => [
					'cid' => 1,
					'name' => 'evaluation_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'teacher_id' => [
					'cid' => 2,
					'name' => 'teacher_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'role' => [
					'cid' => 3,
					'name' => 'role',
					'type' => 'INT',
					'notnull' => 1,
					'dflt_value' => '\'1\'',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 4,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 5,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'teacher' => [
					'name' => 'teacher',
					'table' => 'teachers',
					'type' => 1,
					'foreign_key' => 'teacher_id',
				],
				'evaluation' => [
					'name' => 'evaluation',
					'table' => 'evaluations',
					'type' => 1,
					'foreign_key' => 'evaluation_id',
				],
			],
			'foreign_keys' => [
				'teacher_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'teachers',
					'from' => 'teacher_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'evaluation_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'evaluations',
					'from' => 'evaluation_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'evaluations' => [
			'name' => 'evaluations',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'title' => [
					'cid' => 1,
					'name' => 'title',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'description' => [
					'cid' => 2,
					'name' => 'description',
					'type' => 'TEXT',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'course_id' => [
					'cid' => 3,
					'name' => 'course_id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'teacher_id' => [
					'cid' => 4,
					'name' => 'teacher_id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'parameter_id' => [
					'cid' => 5,
					'name' => 'parameter_id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 6,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 7,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'evaluation_teacher' => [
					'name' => 'evaluation_teacher',
					'table' => 'evaluation_teacher',
					'type' => 2,
					'foreign_key' => 'evaluation_id',
				],
				'parameter' => [
					'name' => 'parameter',
					'table' => 'parameters',
					'type' => 1,
					'foreign_key' => 'parameter_id',
				],
				'teacher' => [
					'name' => 'teacher',
					'table' => 'teachers',
					'type' => 1,
					'foreign_key' => 'teacher_id',
				],
				'course' => [
					'name' => 'course',
					'table' => 'courses',
					'type' => 1,
					'foreign_key' => 'course_id',
				],
			],
			'foreign_keys' => [
				'parameter_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'parameters',
					'from' => 'parameter_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'teacher_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'teachers',
					'from' => 'teacher_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'SET NULL',
					'match' => 'NONE',
				],
				'course_id' => [
					'id' => 2,
					'seq' => 0,
					'table' => 'courses',
					'from' => 'course_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'group_student' => [
			'name' => 'group_student',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'group_id' => [
					'cid' => 1,
					'name' => 'group_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'student_id' => [
					'cid' => 2,
					'name' => 'student_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 3,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 4,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'student' => [
					'name' => 'student',
					'table' => 'students',
					'type' => 1,
					'foreign_key' => 'student_id',
				],
				'group' => [
					'name' => 'group',
					'table' => 'groups',
					'type' => 1,
					'foreign_key' => 'group_id',
				],
			],
			'foreign_keys' => [
				'student_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'students',
					'from' => 'student_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'group_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'groups',
					'from' => 'group_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'groups' => [
			'name' => 'groups',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'number' => [
					'cid' => 1,
					'name' => 'number',
					'type' => 'int UNSIGNED',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'schedule' => [
					'cid' => 2,
					'name' => 'schedule',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'teacher_id' => [
					'cid' => 3,
					'name' => 'teacher_id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'course_semester_id' => [
					'cid' => 4,
					'name' => 'course_semester_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 5,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 6,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'group_student' => [
					'name' => 'group_student',
					'table' => 'group_student',
					'type' => 2,
					'foreign_key' => 'group_id',
				],
				'course_semester' => [
					'name' => 'course_semester',
					'table' => 'course_semester',
					'type' => 1,
					'foreign_key' => 'course_semester_id',
				],
				'teacher' => [
					'name' => 'teacher',
					'table' => 'teachers',
					'type' => 1,
					'foreign_key' => 'teacher_id',
				],
			],
			'foreign_keys' => [
				'course_semester_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'course_semester',
					'from' => 'course_semester_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'teacher_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'teachers',
					'from' => 'teacher_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'parameters' => [
			'name' => 'parameters',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'parent_id' => [
					'cid' => 1,
					'name' => 'parent_id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'wording' => [
					'cid' => 2,
					'name' => 'wording',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'description' => [
					'cid' => 3,
					'name' => 'description',
					'type' => 'TEXT',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'uuid' => [
					'cid' => 4,
					'name' => 'uuid',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'helpers' => [
					'cid' => 5,
					'name' => 'helpers',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => '\'\'',
					'pk' => 0,
				],
				'value' => [
					'cid' => 6,
					'name' => 'value',
					'type' => 'decimal(8, 2)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 7,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 8,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'comments' => [
					'name' => 'comments',
					'table' => 'comments',
					'type' => 2,
					'foreign_key' => 'parameter_id',
				],
				'evaluations' => [
					'name' => 'evaluations',
					'table' => 'evaluations',
					'type' => 2,
					'foreign_key' => 'parameter_id',
				],
				'parent' => [
					'name' => 'parent',
					'table' => 'parameters',
					'type' => 1,
					'foreign_key' => 'parent_id',
				],
				'parameters' => [
					'name' => 'parameters',
					'table' => 'parameters',
					'type' => 2,
					'foreign_key' => 'parent_id',
				],
				'results' => [
					'name' => 'results',
					'table' => 'results',
					'type' => 2,
					'foreign_key' => 'parameter_id',
				],
			],
			'foreign_keys' => [
				'parent_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'parameters',
					'from' => 'parent_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'results' => [
			'name' => 'results',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'parameter_id' => [
					'cid' => 1,
					'name' => 'parameter_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'student_id' => [
					'cid' => 2,
					'name' => 'student_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'value' => [
					'cid' => 3,
					'name' => 'value',
					'type' => 'decimal(8, 2)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'helpers' => [
					'cid' => 4,
					'name' => 'helpers',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 5,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 6,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'comment_result' => [
					'name' => 'comment_result',
					'table' => 'comment_result',
					'type' => 2,
					'foreign_key' => 'result_id',
				],
				'student' => [
					'name' => 'student',
					'table' => 'students',
					'type' => 1,
					'foreign_key' => 'student_id',
				],
				'parameter' => [
					'name' => 'parameter',
					'table' => 'parameters',
					'type' => 1,
					'foreign_key' => 'parameter_id',
				],
			],
			'foreign_keys' => [
				'student_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'students',
					'from' => 'student_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'parameter_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'parameters',
					'from' => 'parameter_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'SET NULL',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'schools' => [
			'name' => 'schools',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'name' => [
					'cid' => 1,
					'name' => 'name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 2,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 3,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'address' => [
					'cid' => 4,
					'name' => 'address',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => 'NULL',
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 5,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 6,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'departments' => [
					'name' => 'departments',
					'table' => 'departments',
					'type' => 2,
					'foreign_key' => 'school_id',
				],
				'semesters' => [
					'name' => 'semesters',
					'table' => 'semesters',
					'type' => 2,
					'foreign_key' => 'school_id',
				],
			],
			'foreign_keys' => [
			],
			'views' => [
				'index' => [
					'name' => 'schools__index',
					'columns' => [
						'id' => [
							'cid' => 0,
							'name' => 'id',
							'type' => 'INTEGER',
							'notnull' => 0,
							'dflt_value' => NULL,
							'pk' => 0,
						],
						'name' => [
							'cid' => 1,
							'name' => 'name',
							'type' => 'varchar(255)',
							'notnull' => 0,
							'dflt_value' => NULL,
							'pk' => 0,
						],
						'abbr' => [
							'cid' => 2,
							'name' => 'abbr',
							'type' => 'varchar(255)',
							'notnull' => 0,
							'dflt_value' => NULL,
							'pk' => 0,
						],
						'slug' => [
							'cid' => 3,
							'name' => 'slug',
							'type' => 'varchar(255)',
							'notnull' => 0,
							'dflt_value' => NULL,
							'pk' => 0,
						],
					],
					'indexes' => [
					],
					'relations' => [
					],
					'foreign_keys' => [
					],
				],
			],
		],
		'semesters' => [
			'name' => 'semesters',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'year' => [
					'cid' => 1,
					'name' => 'year',
					'type' => 'int UNSIGNED',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'label' => [
					'cid' => 2,
					'name' => 'label',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 3,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'school_id' => [
					'cid' => 4,
					'name' => 'school_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 5,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 6,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'course_semester' => [
					'name' => 'course_semester',
					'table' => 'course_semester',
					'type' => 2,
					'foreign_key' => 'semester_id',
				],
				'school' => [
					'name' => 'school',
					'table' => 'schools',
					'type' => 1,
					'foreign_key' => 'school_id',
				],
			],
			'foreign_keys' => [
				'school_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'schools',
					'from' => 'school_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'students' => [
			'name' => 'students',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'code' => [
					'cid' => 1,
					'name' => 'code',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'first_name' => [
					'cid' => 2,
					'name' => 'first_name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'last_name' => [
					'cid' => 3,
					'name' => 'last_name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 4,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'address' => [
					'cid' => 5,
					'name' => 'address',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'user_id' => [
					'cid' => 6,
					'name' => 'user_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'department_id' => [
					'cid' => 7,
					'name' => 'department_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 8,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 9,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'group_student' => [
					'name' => 'group_student',
					'table' => 'group_student',
					'type' => 2,
					'foreign_key' => 'student_id',
				],
				'results' => [
					'name' => 'results',
					'table' => 'results',
					'type' => 2,
					'foreign_key' => 'student_id',
				],
				'department' => [
					'name' => 'department',
					'table' => 'departments',
					'type' => 1,
					'foreign_key' => 'department_id',
				],
				'user' => [
					'name' => 'user',
					'table' => 'students',
					'type' => 1,
					'foreign_key' => 'user_id',
				],
				'students' => [
					'name' => 'students',
					'table' => 'students',
					'type' => 2,
					'foreign_key' => 'user_id',
				],
			],
			'foreign_keys' => [
				'department_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'departments',
					'from' => 'department_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'user_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'users',
					'from' => 'user_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'teachers' => [
			'name' => 'teachers',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'code' => [
					'cid' => 1,
					'name' => 'code',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'first_name' => [
					'cid' => 2,
					'name' => 'first_name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'last_name' => [
					'cid' => 3,
					'name' => 'last_name',
					'type' => 'NUMERIC',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 4,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'address' => [
					'cid' => 5,
					'name' => 'address',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'user_id' => [
					'cid' => 6,
					'name' => 'user_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'department_id' => [
					'cid' => 7,
					'name' => 'department_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 8,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 9,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'evaluation_teacher' => [
					'name' => 'evaluation_teacher',
					'table' => 'evaluation_teacher',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'evaluations' => [
					'name' => 'evaluations',
					'table' => 'evaluations',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'groups' => [
					'name' => 'groups',
					'table' => 'groups',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'user' => [
					'name' => 'user',
					'table' => 'teachers',
					'type' => 1,
					'foreign_key' => 'user_id',
				],
				'teachers' => [
					'name' => 'teachers',
					'table' => 'teachers',
					'type' => 2,
					'foreign_key' => 'user_id',
				],
				'department' => [
					'name' => 'department',
					'table' => 'departments',
					'type' => 1,
					'foreign_key' => 'department_id',
				],
			],
			'foreign_keys' => [
				'user_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'users',
					'from' => 'user_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'department_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'departments',
					'from' => 'department_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
		'users' => [
			'name' => 'teachers',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 1,
				],
				'code' => [
					'cid' => 1,
					'name' => 'code',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'first_name' => [
					'cid' => 2,
					'name' => 'first_name',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'last_name' => [
					'cid' => 3,
					'name' => 'last_name',
					'type' => 'NUMERIC',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 4,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'address' => [
					'cid' => 5,
					'name' => 'address',
					'type' => 'varchar(255)',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'user_id' => [
					'cid' => 6,
					'name' => 'user_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'department_id' => [
					'cid' => 7,
					'name' => 'department_id',
					'type' => 'INTEGER',
					'notnull' => 1,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'created_at' => [
					'cid' => 8,
					'name' => 'created_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
				'updated_at' => [
					'cid' => 9,
					'name' => 'updated_at',
					'type' => 'timestamp',
					'notnull' => 0,
					'dflt_value' => 'current_timestamp',
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
				'evaluation_teacher' => [
					'name' => 'evaluation_teacher',
					'table' => 'evaluation_teacher',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'evaluations' => [
					'name' => 'evaluations',
					'table' => 'evaluations',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'groups' => [
					'name' => 'groups',
					'table' => 'groups',
					'type' => 2,
					'foreign_key' => 'teacher_id',
				],
				'user' => [
					'name' => 'user',
					'table' => 'teachers',
					'type' => 1,
					'foreign_key' => 'user_id',
				],
				'teachers' => [
					'name' => 'teachers',
					'table' => 'teachers',
					'type' => 2,
					'foreign_key' => 'user_id',
				],
				'department' => [
					'name' => 'department',
					'table' => 'departments',
					'type' => 1,
					'foreign_key' => 'department_id',
				],
			],
			'foreign_keys' => [
				'user_id' => [
					'id' => 0,
					'seq' => 0,
					'table' => 'users',
					'from' => 'user_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
				'department_id' => [
					'id' => 1,
					'seq' => 0,
					'table' => 'departments',
					'from' => 'department_id',
					'to' => 'id',
					'on_update' => 'NO ACTION',
					'on_delete' => 'CASCADE',
					'match' => 'NONE',
				],
			],
			'views' => [
			],
		],
	],
	'views' => [
		'schools__index' => [
			'name' => 'schools__index',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'name' => [
					'cid' => 1,
					'name' => 'name',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'abbr' => [
					'cid' => 2,
					'name' => 'abbr',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'slug' => [
					'cid' => 3,
					'name' => 'slug',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
			],
			'foreign_keys' => [
			],
		],
		'users__index' => [
			'name' => 'users__index',
			'columns' => [
				'id' => [
					'cid' => 0,
					'name' => 'id',
					'type' => 'INTEGER',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'name' => [
					'cid' => 1,
					'name' => 'name',
					'type' => 'varchar(255)',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'email' => [
					'cid' => 2,
					'name' => 'email',
					'type' => 'varchar(191)',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
				'role' => [
					'cid' => 3,
					'name' => 'role',
					'type' => 'INT',
					'notnull' => 0,
					'dflt_value' => NULL,
					'pk' => 0,
				],
			],
			'indexes' => [
			],
			'relations' => [
			],
			'foreign_keys' => [
			],
		],
	],
	'updated_at' => 1705522548,
];