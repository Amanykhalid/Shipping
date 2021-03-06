<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [

    'اللغات',
    'قائمة اللغات',
    'اضافة لغة',
    'حذف لغة',
    'تعديل لغة',
    'المستخدمين',
    'قائمة المستخدمين',
    'صلاحيات المستخدمين',
    
    ' سلايدرات',
    'اضافة سلايدر',
    'حذف سلايدر',
    'تعديل سلايدر',
    'تغير حالة سلايدر',

    ' الصفحات',
    'اضافة صفحة',
    'حذف صفحة',
    'تعديل صفحة',
    'تغير حالة صفحة',

    ' القوائم',
    'اضافة قائمة',
    'حذف قائمة',
    'تعديل قائمة',
    'تغير حالة قائمة',

    ' العروض',
    'اضافة عرض',
    'حذف عرض',
    'تعديل عرض',
    'تغير حالة عرض',

    ' التواصل',
    'اضافة اتصال',
    'حذف اتصال',
    'تعديل اتصال',
    'تغير حالة اتصال',

    'اضافة مستخدم',
    'تعديل مستخدم',
    'حذف مستخدم',

    'عرض صلاحية',
    'اضافة صلاحية',
    'تعديل صلاحية',
    'حذف صلاحية',
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}