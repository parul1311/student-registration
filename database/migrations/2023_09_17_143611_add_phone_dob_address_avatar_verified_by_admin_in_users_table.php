<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneDobAddressAvatarVerifiedByAdminInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('avatar')->nullable()->after('password');
            $table->string('phone')->nullable()->after('password');
            $table->date('dob')->nullable()->after('password');
            $table->text('address')->nullable()->after('password');
            $table->boolean('verify_by_admin')->default(false)->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('dob');
            $table->dropColumn('address');
            $table->dropColumn('verify_by_admin');
        });
    }
}
