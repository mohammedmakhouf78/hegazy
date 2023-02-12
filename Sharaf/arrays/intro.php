<?php

$Permissionkeys = [
    'create',
    'update',
    'delete',
    'edit',
    'show',
    'index',
    'store'
];

$Tables = [
    'exam',
    'experience',
    'group',
    'groupDay',
    'groupStudent',
    'groupType',
    'lesson',
    'payment',
    'role',
    'student',
    'studentLesson',
    'studentLessonReview',
    'subject',
    'syllabus',
    'syllabusReview',
    'teacher',
    'user',
];

$allPermissions =[];

foreach ($Tables as $Table)
{
    foreach ($Permissionkeys as $key => $value )
    {
        $allPermissions[$Table][$value] =$Table ."-" . $value;
    }
    echo "\n";
}

print_r($allPermissions);

        
        
        
        
        
        // subject[
        //     'index' => 'index-subject',
        //     'create' => 'create-subject',
        //     'store' => 'store-subject',
        //     'edit' => 'edit-subject',
        //     'update' => 'update-subject',
        //     'delete' => 'delete-subject',
        // ]
          
