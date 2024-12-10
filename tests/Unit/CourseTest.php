<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Course;

class CourseTest extends TestCase
{
    public function test_course_creation()
    {
        // Crear un curso
        $course = Course::create([
            'code' => 'IF460AIN',
            'name' => 'software II',
        ]);

        // Asegurar que el curso fue creado correctamente
        $this->assertDatabaseHas('courses', [
            'code' => 'IF460AIN',
            'name' => 'software II',
        ]);

        // Eliminar el curso
        $course->delete();

        // Verificar que el curso fue eliminado
        $this->assertDatabaseMissing('courses', [
            'code' => 'IF460AIN',
            'name' => 'software II',
        ]);
    }
}
