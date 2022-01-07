<?php

use App\Models\ProductRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('size_id')->nullable();
            $table->integer('quantity');
            $table->date('date');
            $table->string('status', 10)->default(ProductRequest::STOCK_IN);
            $table->string('utype')->default('MCV')->comment('ADM for Admin, MCV for Mobile Center, and CHV for City Hall');
            $table->timestamps();

            //foreign key
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_requests');
    }
}