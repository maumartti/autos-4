<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Artigas',
                'description' => 'Artigas es un departamento ubicado en el norte de Uruguay, en la frontera con Brasil. Es un lugar donde profesionales de diversas áreas atienden a pacientes en un entorno culturalmente diverso.',
                'country_id' => 1
            ],
            [
                'name' => 'Canelones',
                'description' => 'Canelones es un departamento que rodea la capital de Uruguay, Montevideo. Aquí, profesionales de la salud y otros rubros brindan sus servicios en una región que combina vida urbana y espacios naturales.',
                'country_id' => 1
            ],
            [
                'name' => 'Cerro Largo',
                'description' => 'Cerro Largo es un departamento situado en la región noreste de Uruguay. Profesionales de diversos campos atienden a pacientes en este lugar donde la agricultura y la ganadería también tienen un rol importante.',
                'country_id' => 1
            ],
            [
                'name' => 'Colonia',
                'description' => 'Colonia es un departamento con un encanto histórico que proviene de su fundación por los portugueses en el siglo XVII. Aquí, profesionales de diferentes rubros brindan sus servicios en un lugar de gran valor patrimonial y turístico.',
                'country_id' => 1
            ],
            [
                'name' => 'Durazno',
                'description' => 'Durazno es un departamento en el centro de Uruguay. Profesionales de la salud y otros ámbitos atienden a pacientes en este lugar donde se encuentran paisajes diversos que van desde colinas hasta ríos y lagos.',
                'country_id' => 1
            ],
            [
                'name' => 'Flores',
                'description' => 'Flores es un departamento en el sur de Uruguay, conocido por su belleza natural y su rica tradición gauchesca. Profesionales de diferentes rubros ofrecen sus servicios en este lugar donde la naturaleza y la cultura se entrelazan.',
                'country_id' => 1
            ],
            [
                'name' => 'Florida',
                'description' => 'Florida es un departamento situado en el centro-sur de Uruguay. Profesionales de la salud y otros campos brindan sus servicios en este lugar que tiene una rica historia y una comunidad acogedora.',
                'country_id' => 1
            ],
            [
                'name' => 'Lavalleja',
                'description' => 'Lavalleja es un departamento que se encuentra en la región sureste de Uruguay. Profesionales de diversas áreas atienden a pacientes en este lugar de colinas y sierras que ofrece vistas panorámicas y una conexión con la naturaleza.',
                'country_id' => 1
            ],
            [
                'name' => 'Maldonado',
                'description' => 'Maldonado es un departamento costero en el sureste de Uruguay. Aquí, profesionales de diferentes rubros brindan sus servicios en una región que combina playas espectaculares, centros turísticos y una rica vida cultural.',
                'country_id' => 1
            ],
            [
                'name' => 'Montevideo',
                'description' => 'Montevideo, la capital de Uruguay, es un departamento vibrante y cosmopolita. Aquí, profesionales de diversas áreas ofrecen sus servicios en un entorno urbano y culturalmente diverso.',
                'country_id' => 1
            ],
            [
                'name' => 'Paysandú',
                'description' => 'Paysandú es un departamento en el oeste de Uruguay, atravesado por el Río Uruguay. Profesionales de diferentes campos brindan sus servicios en este lugar con una historia rica y una comunidad que valora su identidad.',
                'country_id' => 1
            ],
            [
                'name' => 'Río Negro',
                'description' => 'Río Negro es un departamento situado en el oeste de Uruguay, a orillas del Río Uruguay. Profesionales de la salud y otros rubros ofrecen sus servicios en una región donde historia y naturaleza se entrelazan.',
                'country_id' => 1
            ],
            [
                'name' => 'Rivera',
                'description' => 'Rivera es un departamento en el norte de Uruguay, en la frontera con Brasil. Aquí, profesionales de diferentes ámbitos brindan sus servicios en un lugar que destaca por su historia y su influencia cultural fronteriza.',
                'country_id' => 1
            ],
            [
                'name' => 'Rocha',
                'description' => 'Rocha es un departamento en el este de Uruguay, conocido por sus playas vírgenes y su belleza natural. Profesionales de diferentes rubros ofrecen sus servicios en un lugar que atrae a turistas y amantes de la naturaleza.',
                'country_id' => 1
            ],
            [
                'name' => 'Salto',
                'description' => 'Salto es un departamento en el norte de Uruguay, bañado por las aguas del Río Uruguay. Profesionales de la salud y otros campos atienden a pacientes en este lugar que destaca por su termas y su rica historia.',
                'country_id' => 1
            ],
            [
                'name' => 'San José',
                'description' => 'San José es un departamento en el sur de Uruguay, situado en una región agrícola y ganadera. Profesionales de diferentes ámbitos ofrecen sus servicios en este lugar donde la producción y la comunidad se unen.',
                'country_id' => 1
            ],
            [
                'name' => 'Soriano',
                'description' => 'Soriano es un departamento en el suroeste de Uruguay, bañado por el Río Uruguay. Profesionales de diferentes campos brindan sus servicios en este lugar donde la historia y la belleza del río son aspectos destacados.',
                'country_id' => 1
            ],
            [
                'name' => 'Tacuarembó',
                'description' => 'Tacuarembó es un departamento en el norte de Uruguay, conocido por su fuerte tradición cultural y su conexión con la música folklórica. Profesionales de diversos ámbitos brindan sus servicios en este lugar de historia y pasión.',
                'country_id' => 1
            ],
            [
                'name' => 'Treinta y Tres',
                'description' => 'Treinta y Tres es un departamento en el este de Uruguay, marcado por su historia patriótica y su identidad cultural. Profesionales de diferentes rubros ofrecen sus servicios en este lugar que honra su nombre.',
                'country_id' => 1
            ]
        ];

        foreach ($departments as $department) {
            $department['url'] = $this->removeAccents($department['name']);
            State::create($department);
        }
    }

    public function removeAccents($str) {
        $replacePairs = array(
            'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
            'Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U',
            'ñ' => 'n', 'Ñ' => 'N'
        );
        $str = strtr($str, $replacePairs); // Eliminar acentos
        $str = strtolower($str); // Convertir a minúsculas
        $str = str_replace(' ', '-', $str); // Reemplazar espacios por guiones
        return $str;
    }
}
