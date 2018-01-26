<?php



use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;



class CreateTarievensTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()
    {

        Schema::create('tarievens', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');

            $table->string('subtitle');

            $table->string('price');

            $table->string('photo');      

            $table->string('link');

            $table->string('extra_info');
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

        Schema::dropIfExists('tarievens');

    }

}