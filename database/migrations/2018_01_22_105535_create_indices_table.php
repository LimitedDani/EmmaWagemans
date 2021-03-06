<?php



/*

////////////////////////////////

//THIS IS THE INDEX MIGRATION!//

////////////////////////////////

*/



use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



class CreateIndicesTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('indices', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');

            $table->string('subtitle');

            $table->string('video1');

            $table->string('video2');

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

        Schema::dropIfExists('indices');

    }
}