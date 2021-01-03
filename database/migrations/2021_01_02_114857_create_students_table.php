<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            #columns by default doesn't accept null,
            # so you should specify the nullable fields
            $table->id();  # id of the table (datatype bigint)
            #create columns (name, email, age, phone)
            $table->string("name"); #not null
            $table->string("email");  # not null
            $table->string("phone")->nullable();
            $table->integer("age")->default(10);
            $table->timestamps();  #created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
