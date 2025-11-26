public function up()
{
    Schema::create('tareas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');  // ← Esta línea es crucial
        $table->boolean('completada')->default(false);
        $table->timestamps();
    });
}