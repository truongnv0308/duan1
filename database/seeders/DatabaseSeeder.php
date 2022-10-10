<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Exception;

class DatabaseSeeder extends BaseSeeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $this->activateAllPlugins();

        $this->call(UserSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(StaticBlockSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(WidgetSeeder::class);
        $this->call(ThemeOptionSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
