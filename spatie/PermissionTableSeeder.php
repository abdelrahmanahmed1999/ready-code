<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'عرض المواد',
            'إضافة مادة',
            'تعديل مادة',
           'حذف مادة',

           'عرض الصلاحيات',
           'إضافة صلاحية',
           'تعديل صلاحية',
           'حذف صلاحية',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        $role = Role::create(['name' => 'مالك']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);

    }
}
