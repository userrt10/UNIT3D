<?php
/**
 * NOTICE OF LICENSE
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 * @license    https://choosealicense.com/licenses/gpl-3.0/  GNU General Public License v3.0
 * @author     HDVinnie
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTwoStepAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twostep_auth', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned()->index();
            $table->string('authCode')->nullable();
            $table->integer('authCount');
            $table->boolean('authStatus')->default(false);
            $table->dateTime('authDate')->nullable();
            $table->dateTime('requestDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('twostep_auth');
    }
}
