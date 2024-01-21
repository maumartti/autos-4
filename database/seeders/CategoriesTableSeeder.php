<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Psicología',
            'url' => 'psicologia',
            'description' => 'La psicología es una disciplina fundamental en el campo de la salud mental que se dedica al estudio y comprensión de los procesos mentales y emocionales humanos. Su objetivo principal es analizar y entender el comportamiento humano, así como proporcionar herramientas para mejorar la calidad de vida de las personas. Esta categoría abarca una amplia gama de enfoques terapéuticos y técnicas diseñadas para ayudar a los individuos a enfrentar desafíos emocionales, mentales y conductuales.

            En el ámbito de la atención a los pacientes, los profesionales de la psicología se esfuerzan por brindar un entorno seguro y confidencial donde las personas pueden explorar sus pensamientos, emociones y experiencias personales. Los métodos de tratamiento pueden variar según las necesidades individuales y los enfoques terapéuticos preferidos del profesional.
            
            Algunas de las modalidades terapéuticas más comunes en psicología incluyen:
            
                Terapia Cognitivo-Conductual (TCC): Esta enfoque se centra en identificar patrones de pensamiento y comportamiento disfuncionales y reemplazarlos por patrones más saludables. Se utiliza para tratar una amplia gama de trastornos, como la ansiedad, la depresión y las fobias.
            
                Terapia Psicodinámica: Basada en la teoría psicoanalítica de Sigmund Freud, esta terapia se centra en explorar las influencias del inconsciente en el comportamiento y las emociones. Se busca comprender las relaciones pasadas y cómo influyen en la vida actual.
            
                Terapia de Aceptación y Compromiso (ACT): Esta terapia promueve la aceptación de las emociones y experiencias difíciles y ayuda a las personas a comprometerse con valores personales para vivir una vida más significativa.
            
                Terapia de Pareja y Familiar: Se enfoca en mejorar las relaciones interpersonales, ya sea en parejas o en el seno familiar, identificando patrones de comunicación y ofreciendo herramientas para resolver conflictos.
            
                Terapia Humanista: Esta terapia se centra en el crecimiento personal y el autodescubrimiento, haciendo hincapié en la autenticidad y la autorrealización.
            
            Los profesionales de la psicología, como psicólogos y psicoterapeutas, juegan un papel fundamental en ayudar a las personas a abordar cuestiones como la ansiedad, la depresión, el estrés, los trastornos alimentarios, la autoestima y muchos otros aspectos de la salud mental. El proceso de terapia puede variar en duración y frecuencia según las necesidades individuales.
            
            En la plataforma de software que mencionaste, se ofrece una herramienta para la gestión de consultorios de psicólogos y otros profesionales de la salud mental. Esta herramienta facilita la administración de citas, historias clínicas, facturación y otros aspectos operativos, permitiendo que los profesionales se concentren en brindar la mejor atención posible a sus pacientes.
            
            En resumen, la categoría de psicología engloba una amplia gama de enfoques terapéuticos diseñados para abordar cuestiones emocionales y mentales. Los profesionales de la psicología desempeñan un papel esencial en el bienestar mental de las personas al proporcionar un espacio seguro para la exploración y el crecimiento personal.'
        ]);
    }
}
