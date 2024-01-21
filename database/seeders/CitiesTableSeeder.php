<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $localidadesArtigas = [
            [
                'name' => 'Artigas',
                'description' => 'Artigas es la ciudad capital del departamento de Artigas, ubicada en el norte de Uruguay. Es un centro administrativo, comercial y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 1
            ],
            [
                'name' => 'Baltasar Brum',
                'description' => 'Baltasar Brum es una localidad en el departamento de Artigas, con una historia vinculada a la educación y la cultura. Profesionales de diferentes ámbitos brindan sus servicios en esta comunidad que busca un desarrollo sostenible.',
                'state_id' => 1
            ],
            [
                'name' => 'Bella Unión',
                'description' => 'Bella Unión es una ciudad fronteriza en el departamento de Artigas, cerca de la frontera con Brasil. Profesionales de diferentes rubros atienden a pacientes en esta ciudad que tiene un ambiente multicultural y comercial.',
                'state_id' => 1
            ],
            [
                'name' => 'Bernabé Rivera',
                'description' => 'Bernabé Rivera es una localidad en el departamento de Artigas, con una rica historia y tradiciones. Profesionales de distintas áreas brindan sus servicios en esta comunidad que valora su identidad.',
                'state_id' => 1
            ],
            [
                'name' => 'Colonia Palma',
                'description' => 'Colonia Palma es una localidad en el departamento de Artigas, que se destaca por su tranquilidad y entorno natural. Profesionales de diversos campos brindan servicios en esta comunidad que busca un equilibrio entre la vida urbana y rural.',
                'state_id' => 1
            ],
            [
                'name' => 'Cuareim',
                'description' => 'Cuareim es una localidad en el departamento de Artigas, con una conexión importante con la historia y el comercio de la región. Profesionales de diferentes rubros atienden a pacientes en esta comunidad que valora su pasado.',
                'state_id' => 1
            ],
            [
                'name' => 'Javier de Viana',
                'description' => 'Javier de Viana es una localidad en el departamento de Artigas, que se caracteriza por su tranquilidad y su entorno natural. Profesionales de diversas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 1
            ],
            [
                'name' => 'Las Piedras',
                'description' => 'Las Piedras es una localidad en el departamento de Artigas, que se destaca por su actividad agrícola y ganadera. Profesionales de distintos campos atienden a pacientes en esta comunidad que valora su identidad rural.',
                'state_id' => 1
            ],
            [
                'name' => 'Lorenzo Geyres',
                'description' => 'Lorenzo Geyres es una localidad en el departamento de Artigas, con una atmósfera tranquila y un entorno rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 1
            ],
            [
                'name' => 'Paisandú',
                'description' => 'Paisandú es una localidad en el departamento de Artigas, que se caracteriza por su actividad comercial y cultural. Profesionales de diferentes rubros atienden a pacientes en esta ciudad que tiene una rica oferta de servicios.',
                'state_id' => 1
            ],
            [
                'name' => 'San Eugenio',
                'description' => 'San Eugenio es una localidad en el departamento de Artigas, que se destaca por su tranquilidad y su vida rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 1
            ],
            [
                'name' => 'Sequeira',
                'description' => 'Sequeira es una localidad en el departamento de Artigas, que se caracteriza por su entorno natural y tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 1
            ],
            [
                'name' => 'Tomás Gomensoro',
                'description' => 'Tomás Gomensoro es una localidad en el departamento de Artigas, caracterizada por su tranquilidad y su conexión con la naturaleza. Profesionales de diversos campos ofrecen sus servicios en esta comunidad que valora la calidad de vida.',
                'state_id' => 1
            ],
            [
                'name' => 'Topador',
                'description' => 'Topador es una localidad en el departamento de Artigas, con un entorno natural y una atmósfera apacible. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que busca la armonía con la naturaleza.',
                'state_id' => 1
            ],
            [
                'name' => 'Tres Islas',
                'description' => 'Tres Islas es una localidad en el departamento de Artigas, que se destaca por su belleza natural y su ambiente tranquilo. Profesionales de distintas áreas atienden a pacientes en esta comunidad que valora su entorno.',
                'state_id' => 1
            ],
            // Continúa agregando arrays para cada una de las localidades restantes
        ];
        $localidadesCanelones = [
            [
                'name' => 'Canelones',
                'description' => 'Canelones es la ciudad capital del departamento de Canelones, ubicada en la región sur de Uruguay. Es un centro administrativo y cultural donde profesionales de diferentes áreas ofrecen servicios a la comunidad local.',
                'state_id' => 2
            ],
            [
                'name' => 'Santa Lucía',
                'description' => 'Santa Lucía es una localidad en el departamento de Canelones, con una rica historia y un ambiente tranquilo. Profesionales de diversas disciplinas brindan atención a los habitantes de esta comunidad.',
                'state_id' => 2
            ],
            [
                'name' => 'Las Piedras',
                'description' => 'Las Piedras es una localidad en el departamento de Canelones, que se destaca por su actividad comercial y su entorno urbano. Profesionales de distintos campos atienden a pacientes en esta ciudad en constante desarrollo.',
                'state_id' => 2
            ],   
            [
                'name' => 'Ciudad de la Costa',
                'description' => 'Ciudad de la Costa es una localidad en el departamento de Canelones, situada en la costa del Río de la Plata. Con una mezcla de urbanismo y naturaleza, profesionales de diversas áreas brindan servicios a la comunidad costera.',
                'state_id' => 2
            ],
            [
                'name' => 'Pando',
                'description' => 'Pando es una localidad en el departamento de Canelones, con un ambiente tranquilo y una actividad agrícola destacada. Profesionales de diferentes rubros atienden a pacientes en esta comunidad en constante desarrollo.',
                'state_id' => 2
            ],
            [
                'name' => 'La Paz',
                'description' => 'La Paz es una localidad en el departamento de Canelones, caracterizada por su ambiente rural y su belleza natural. Profesionales de distintas disciplinas brindan servicios a los habitantes de esta comunidad que busca la calidad de vida.',
                'state_id' => 2
            ],
            [
                'name' => 'Progreso',
                'description' => 'Progreso es una localidad en el departamento de Canelones, con una actividad comercial importante y un ambiente tranquilo. Profesionales de diversas áreas atienden a los habitantes de esta comunidad en crecimiento.',
                'state_id' => 2
            ],
            [
                'name' => 'Atlántida',
                'description' => 'Atlántida es una localidad en el departamento de Canelones, ubicada en la costa del Río de la Plata. Con una mezcla de turismo y residentes, profesionales de diferentes disciplinas brindan servicios en esta comunidad costera.',
                'state_id' => 2
            ],
            [
                'name' => 'Sauce',
                'description' => 'Sauce es una localidad en el departamento de Canelones, con un ambiente tranquilo y rural. Profesionales de distintos campos brindan atención a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 2
            ],
            [
                'name' => 'Suárez',
                'description' => 'Suárez es una localidad en el departamento de Canelones, con una mezcla de urbanismo y naturaleza. Profesionales de diversas áreas brindan servicios a los habitantes de esta comunidad que busca la calidad de vida.',
                'state_id' => 2
            ],
            [
                'name' => 'Empalme Olmos',
                'description' => 'Empalme Olmos es una localidad en el departamento de Canelones, caracterizada por su ambiente rural y su actividad agropecuaria. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad en crecimiento.',
                'state_id' => 2
            ],
            [
                'name' => 'San Ramón',
                'description' => 'San Ramón es una localidad en el departamento de Canelones, con un ambiente tranquilo y rural. Profesionales de distintos campos brindan atención a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 2
            ],
            [
                'name' => 'La Floresta',
                'description' => 'La Floresta es una localidad en el departamento de Canelones, ubicada en la costa del Río de la Plata. Con una mezcla de turismo y residentes, profesionales de diferentes disciplinas brindan servicios en esta comunidad costera.',
                'state_id' => 2
            ],
            [
                'name' => 'Migues',
                'description' => 'Migues es una localidad en el departamento de Canelones, con un ambiente tranquilo y rural. Profesionales de distintas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 2
            ],
            [
                'name' => 'Salinas',
                'description' => 'Salinas es una localidad en el departamento de Canelones, con una costa que atrae a turistas y residentes. Profesionales de diferentes campos brindan atención a los habitantes de esta comunidad que valora su entorno costero.',
                'state_id' => 2
            ],
            [
                'name' => 'Santa Rosa',
                'description' => 'Santa Rosa es una localidad en el departamento de Canelones, conocida por su historia y su entorno rural. Profesionales de diversas áreas brindan servicios a los habitantes de esta comunidad que valora su patrimonio cultural.',
                'state_id' => 2
            ],
            [
                'name' => 'Tala',
                'description' => 'Tala es una localidad en el departamento de Canelones, con una atmósfera tranquila y un ambiente rural. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca la calidad de vida.',
                'state_id' => 2
            ],
            [
                'name' => 'San Jacinto',
                'description' => 'San Jacinto es una localidad en el departamento de Canelones, que se destaca por su actividad agrícola y su tranquilidad. Profesionales de distintos campos brindan servicios en esta comunidad que valora su identidad rural.',
                'state_id' => 2
            ],
            [
                'name' => 'Toledo',
                'description' => 'Toledo es una localidad en el departamento de Canelones, con un ambiente tranquilo y un entorno rural. Profesionales de diferentes áreas brindan atención a los habitantes de esta comunidad que busca el equilibrio entre la vida urbana y rural.',
                'state_id' => 2
            ],
        ];
        $localidadesCerroLargo = [
            [
                'name' => 'Melo',
                'description' => 'Melo es la ciudad capital del departamento de Cerro Largo, ubicada en el noreste de Uruguay. Es un centro administrativo y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 3
            ],
            [
                'name' => 'Río Branco',
                'description' => 'Río Branco es una localidad en el departamento de Cerro Largo, cerca de la frontera con Brasil. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que tiene un ambiente multicultural.',
                'state_id' => 3
            ],
            [
                'name' => 'Fraile Muerto',
                'description' => 'Fraile Muerto es una localidad en el departamento de Cerro Largo, con una atmósfera tranquila y un entorno rural. Profesionales de distintos campos brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 3
            ],
            [
                'name' => 'Aceguá',
                'description' => 'Aceguá es una localidad en el departamento de Cerro Largo, ubicada en la frontera con Brasil. Profesionales de diversas áreas brindan servicios en esta comunidad que tiene una relación cercana con el país vecino.',
                'state_id' => 3
            ],
            [
                'name' => 'Arbolito',
                'description' => 'Arbolito es una localidad en el departamento de Cerro Largo, que se destaca por su tranquilidad y entorno natural. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 3
            ],
            [
                'name' => 'Isidoro Noblía',
                'description' => 'Isidoro Noblía es una localidad en el departamento de Cerro Largo, con una historia rica en tradiciones y cultura. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 3
            ],
            [
                'name' => 'Río Negro',
                'description' => 'Río Negro es una localidad en el departamento de Cerro Largo, con una ubicación estratégica cerca de la frontera con Brasil. Profesionales de distintos rubros atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 3
            ],
            [
                'name' => 'Arévalo',
                'description' => 'Arévalo es una localidad en el departamento de Cerro Largo, que se caracteriza por su historia y su identidad rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora sus tradiciones.',
                'state_id' => 3
            ],
            [
                'name' => 'Melense',
                'description' => 'Melense es una localidad en el departamento de Cerro Largo, con un ambiente tranquilo y rural. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 3
            ],
            [
                'name' => 'Paso de la Cruz',
                'description' => 'Paso de la Cruz es una localidad en el departamento de Cerro Largo, con una ubicación estratégica cerca de la frontera con Brasil. Profesionales de distintos rubros atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 3
            ],
            [
                'name' => 'Plácido Rosas',
                'description' => 'Plácido Rosas es una localidad en el departamento de Cerro Largo, con una historia que la vincula a la cultura y la tradición. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 3
            ],
            [
                'name' => 'Sarandí de Aceguá',
                'description' => 'Sarandí de Aceguá es una localidad en el departamento de Cerro Largo, con una ubicación fronteriza que la vincula a la ciudad brasileña de Aceguá. Profesionales de distintas áreas atienden a los habitantes de esta comunidad con intercambio cultural.',
                'state_id' => 3
            ],
            [
                'name' => 'Solís de Mataojo',
                'description' => 'Solís de Mataojo es una localidad en el departamento de Cerro Largo, con un entorno natural y tranquilo. Profesionales de diversas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 3
            ],
            [
                'name' => 'Tupambaé',
                'description' => 'Tupambaé es una localidad en el departamento de Cerro Largo, con una conexión importante con la historia de la región. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora su pasado.',
                'state_id' => 3
            ],
            [
                'name' => 'Vichadero',
                'description' => 'Vichadero es una localidad en el departamento de Cerro Largo, que se destaca por su tranquilidad y su vida rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 3
            ],
            [
                'name' => 'Yaguarón',
                'description' => 'Yaguarón es una localidad en el departamento de Cerro Largo, con un entorno natural y una atmósfera apacible. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que busca la armonía con la naturaleza.',
                'state_id' => 3
            ],
            [
                'name' => 'Yí',
                'description' => 'Yí es una localidad en el departamento de Cerro Largo, que se caracteriza por su tranquilidad y su identidad rural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 3
            ],
        ];
        $localidadesColonia = [
            [
                'name' => 'Colonia del Sacramento',
                'description' => 'Colonia del Sacramento es una ciudad histórica en el departamento de Colonia, Uruguay. Conocida por su arquitectura colonial y su influencia multicultural, atrae a visitantes de todo el mundo.',
                'state_id' => 4
            ],
            [
                'name' => 'Carmelo',
                'description' => 'Carmelo es una ciudad en el departamento de Colonia, con un encanto ribereño y un ambiente relajado. Es un destino popular para turistas y ofrece una variedad de actividades culturales y naturales.',
                'state_id' => 4
            ],
            [
                'name' => 'Nueva Helvecia',
                'description' => 'Nueva Helvecia es una localidad en el departamento de Colonia, conocida por su herencia suiza y su arquitectura característica. Profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 4
            ],
            [
                'name' => 'Juan Lacaze',
                'description' => 'Juan Lacaze es una ciudad en el departamento de Colonia, con una historia industrial y cultural. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que valora su identidad.',
                'state_id' => 4
            ],
            [
                'name' => 'Rosario',
                'description' => 'Rosario es una ciudad en el departamento de Colonia, ubicada junto al río Uruguay. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que tiene un ambiente costero.',
                'state_id' => 4
            ],
            [
                'name' => 'Tarariras',
                'description' => 'Tarariras es una ciudad en el departamento de Colonia, con una identidad rural y un entorno natural. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 4
            ],
            [
                'name' => 'Ombúes de Lavalle',
                'description' => 'Ombúes de Lavalle es una localidad en el departamento de Colonia, con un ambiente tranquilo y rural. Profesionales de distintas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 4
            ],
            [
                'name' => 'Nueva Palmira',
                'description' => 'Nueva Palmira es una ciudad en el departamento de Colonia, ubicada junto al río Uruguay y el Río de la Plata. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad portuaria.',
                'state_id' => 4
            ],
            [
                'name' => 'Conchillas',
                'description' => 'Conchillas es una localidad en el departamento de Colonia, con una atmósfera tranquila y un entorno rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 4
            ],
            [
                'name' => 'Florencio Sánchez',
                'description' => 'Florencio Sánchez es una ciudad en el departamento de Colonia, con un ambiente tranquilo y una rica historia. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su identidad cultural.',
                'state_id' => 4
            ],
            [
                'name' => 'La Paz',
                'description' => 'La Paz es una ciudad en el departamento de Colonia, con una ubicación estratégica junto al río San Juan. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad.',
                'state_id' => 4
            ],
            [
                'name' => 'Colonia Valdense',
                'description' => 'Colonia Valdense es una localidad en el departamento de Colonia, con una fuerte herencia valdense. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad cultural.',
                'state_id' => 4
            ],
            [
                'name' => 'Santa Ana',
                'description' => 'Santa Ana es una localidad en el departamento de Colonia, con un ambiente tranquilo y una atmósfera rural. Profesionales de distintos campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 4
            ],
            [
                'name' => 'Colonia Cosmopolita',
                'description' => 'Colonia Cosmopolita es una localidad en el departamento de Colonia, con un nombre que refleja su diversidad cultural. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad.',
                'state_id' => 4
            ],
            [
                'name' => 'El Semillero',
                'description' => 'El Semillero es una localidad en el departamento de Colonia, con un ambiente tranquilo y un entorno natural. Profesionales de diversas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 4
            ],
            [
                'name' => 'Ferrer',
                'description' => 'Ferrer es una localidad en el departamento de Colonia, con una historia que la vincula a la cultura y la tradición. Profesionales de diferentes campos brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 4
            ],
            [
                'name' => 'Los Pinos',
                'description' => 'Los Pinos es una localidad en el departamento de Colonia, con un ambiente tranquilo y una atmósfera rural. Profesionales de distintas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 4
            ],
            [
                'name' => 'Miguelete',
                'description' => 'Miguelete es una localidad en el departamento de Colonia, con una identidad rural y un entorno natural. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 4
            ],
            [
                'name' => 'Real de San Carlos',
                'description' => 'Real de San Carlos es una localidad en el departamento de Colonia, con una historia ligada al turismo y la cultura. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo local.',
                'state_id' => 4
            ],
            [
                'name' => 'Riachuelo',
                'description' => 'Riachuelo es una localidad en el departamento de Colonia, con un entorno natural y una atmósfera apacible. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 4
            ]
        ];
        $localidadesDurazno = [
            [
                'name' => 'Durazno',
                'description' => 'Durazno es la ciudad capital del departamento de Durazno, ubicada en el centro de Uruguay. Es un centro administrativo, cultural y comercial donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 5
            ],
            [
                'name' => 'Sarandí del Yí',
                'description' => 'Sarandí del Yí es una localidad en el departamento de Durazno, con una historia rica en tradiciones y cultura. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 5
            ],
            [
                'name' => 'Blanquillo',
                'description' => 'Blanquillo es una localidad en el departamento de Durazno, con un ambiente tranquilo y rural. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 5
            ],
            [
                'name' => 'Carmen',
                'description' => 'Carmen es una localidad en el departamento de Durazno, con una atmósfera tranquila y un entorno natural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 5
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una localidad en el departamento de Durazno, con un entorno rural y una historia vinculada al trabajo agropecuario. Profesionales de distintos campos brindan servicios en esta comunidad que busca el desarrollo sostenible.',
                'state_id' => 5
            ],
            [
                'name' => 'La Paloma',
                'description' => 'La Paloma es una localidad en el departamento de Durazno, que se destaca por su tranquilidad y su identidad rural. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 5
            ],
            [
                'name' => 'Pueblo Centenario',
                'description' => 'Pueblo Centenario es una localidad en el departamento de Durazno, con una historia ligada a su fundación y desarrollo. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad y tradiciones.',
                'state_id' => 5
            ],
            [
                'name' => 'Sarandí del Yí',
                'description' => 'Sarandí del Yí es una localidad en el departamento de Durazno, con una historia rica en tradiciones y cultura. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 5
            ],
            [
                'name' => 'Sarandí Grande',
                'description' => 'Sarandí Grande es una localidad en el departamento de Durazno, con una ubicación estratégica en el centro del país. Profesionales de distintos campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 5
            ],
            [
                'name' => 'Villa del Carmen',
                'description' => 'Villa del Carmen es una localidad en el departamento de Durazno, con un ambiente tranquilo y rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 5
            ],
            [
                'name' => 'Carlos Reyles',
                'description' => 'Carlos Reyles es una localidad en el departamento de Durazno, con una identidad marcada por su historia y cultura. Profesionales de diferentes ámbitos brindan servicios en esta comunidad que valora su patrimonio.',
                'state_id' => 5
            ],
            [
                'name' => 'Carmen',
                'description' => 'Carmen es una localidad en el departamento de Durazno, con una atmósfera tranquila y un entorno natural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 5
            ],
            [
                'name' => 'Durazno',
                'description' => 'Durazno es la ciudad capital del departamento de Durazno, ubicada en el centro de Uruguay. Es un centro administrativo, cultural y comercial donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 5
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una localidad en el departamento de Durazno, con un entorno rural y una historia vinculada al trabajo agropecuario. Profesionales de distintos campos brindan servicios en esta comunidad que busca el desarrollo sostenible.',
                'state_id' => 5
            ],
            [
                'name' => 'La Paloma',
                'description' => 'La Paloma es una localidad en el departamento de Durazno, que se destaca por su tranquilidad y su identidad rural. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 5
            ],
            [
                'name' => 'Pueblo Centenario',
                'description' => 'Pueblo Centenario es una localidad en el departamento de Durazno, con una historia ligada a su fundación y desarrollo. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad y tradiciones.',
                'state_id' => 5
            ],
            [
                'name' => 'Sarandí Grande',
                'description' => 'Sarandí Grande es una localidad en el departamento de Durazno, con una ubicación estratégica en el centro del país. Profesionales de distintos campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 5
            ],
            [
                'name' => 'Villa del Carmen',
                'description' => 'Villa del Carmen es una localidad en el departamento de Durazno, con un ambiente tranquilo y rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 5
            ],
            [
                'name' => 'Carlos Reyles',
                'description' => 'Carlos Reyles es una localidad en el departamento de Durazno, con una identidad marcada por su historia y cultura. Profesionales de diferentes ámbitos brindan servicios en esta comunidad que valora su patrimonio.',
                'state_id' => 5
            ]
        ];
        $localidadesFlores = [
            [
                'name' => 'Trinidad',
                'description' => 'Trinidad es una ciudad ubicada en el departamento de Flores, con una rica historia y cultura. Profesionales de diversas áreas brindan sus servicios en esta comunidad que valora su patrimonio.',
                'state_id' => 6,
            ],
            [
                'name' => 'Ismael Cortinas',
                'description' => 'Ismael Cortinas es una localidad en el departamento de Flores, con un ambiente tranquilo y rural. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 6,
            ],
            [
                'name' => 'Tranqueras',
                'description' => 'Tranqueras es una localidad en el departamento de Flores, que se destaca por su entorno natural y su atmósfera apacible. Profesionales de distintos rubros brindan servicios en esta comunidad que busca la armonía con la naturaleza.',
                'state_id' => 6,
            ],
            [
                'name' => 'Sarandí Grande',
                'description' => 'Sarandí Grande es una localidad en el departamento de Flores, con una ubicación estratégica y una rica historia. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su identidad.',
                'state_id' => 6,
            ],
            [
                'name' => 'Villa del Rosario',
                'description' => 'Villa del Rosario es una localidad en el departamento de Flores, con un ambiente tranquilo y un entorno rural. Profesionales de diferentes campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 6,
            ],
            [
                'name' => 'Andresito',
                'description' => 'Andresito es una localidad en el departamento de Flores, con una conexión importante con la región. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo y el bienestar de sus habitantes.',
                'state_id' => 6,
            ],
        ];
        $localidadesFlorida = [
            [
                'name' => 'Florida',
                'description' => 'Florida es la ciudad capital del departamento de Florida, ubicada en el centro-sur de Uruguay. Es un centro administrativo y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 7
            ],
            [
                'name' => 'Sarandí Grande',
                'description' => 'Sarandí Grande es una ciudad en el departamento de Florida, con una historia rica en tradiciones y cultura. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 7
            ],
            [
                'name' => 'Casupa',
                'description' => 'Casupa es una ciudad en el departamento de Florida, con un entorno natural y tranquilo. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 7
            ],
            [
                'name' => 'Cardal',
                'description' => 'Cardal es una ciudad en el departamento de Florida, que se destaca por su ambiente rural y tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => 'Fray Marcos',
                'description' => 'Fray Marcos es una ciudad en el departamento de Florida, con una ubicación estratégica cerca de otros centros urbanos. Profesionales de diversas áreas atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 7
            ],
            [
                'name' => 'Chamizo',
                'description' => 'Chamizo es una ciudad en el departamento de Florida, que se caracteriza por su tranquilidad y su vida rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => 'Nico Pérez',
                'description' => 'Nico Pérez es una ciudad en el departamento de Florida, con una conexión importante con la historia y la cultura de la región. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora su pasado.',
                'state_id' => 7
            ],
            [
                'name' => 'Reboledo',
                'description' => 'Reboledo es una ciudad en el departamento de Florida, que se destaca por su ambiente tranquilo y rural. Profesionales de diversas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 7
            ],
            [
                'name' => 'La Cruz',
                'description' => 'La Cruz es una ciudad en el departamento de Florida, ubicada en una zona de cruce de caminos. Profesionales de distintos campos brindan servicios en esta comunidad que tiene una ubicación estratégica.',
                'state_id' => 7
            ],
            [
                'name' => 'Mendoza',
                'description' => 'Mendoza es una ciudad en el departamento de Florida, con una atmósfera tranquila y un entorno natural. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que busca la calidad de vida.',
                'state_id' => 7
            ],
            [
                'name' => 'Santa Lucía',
                'description' => 'Santa Lucía es una ciudad en el departamento de Florida, con una ubicación estratégica cerca de otros centros urbanos. Profesionales de diversas áreas brindan servicios en esta comunidad que tiene intercambio comercial.',
                'state_id' => 7
            ],
            [
                'name' => 'Capilla del Sauce',
                'description' => 'Capilla del Sauce es una ciudad en el departamento de Florida, con una identidad cultural y tradicional. Profesionales de diferentes rubros brindan servicios en esta comunidad que valora su historia.',
                'state_id' => 7
            ],
            [
                'name' => 'Alejandro Gallinal',
                'description' => 'Alejandro Gallinal es una ciudad en el departamento de Florida, que se destaca por su tranquilidad y su vida rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => '25 de Mayo',
                'description' => '25 de Mayo es una ciudad en el departamento de Florida, con un ambiente tranquilo y rural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 7
            ],
            [
                'name' => 'Polanco del Yi',
                'description' => 'Polanco del Yi es una ciudad en el departamento de Florida, con un entorno natural y una atmósfera apacible. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que busca la armonía con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una ciudad en el departamento de Florida, con una ubicación en las proximidades de una formación geológica. Profesionales de distintos campos brindan servicios en esta comunidad que valora su entorno.',
                'state_id' => 7
            ],
            [
                'name' => 'Canelones Chico',
                'description' => 'Canelones Chico es una ciudad en el departamento de Florida, con una ubicación estratégica cerca de otros centros urbanos. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 7
            ],
            [
                'name' => 'Berrondo',
                'description' => 'Berrondo es una ciudad en el departamento de Florida, que se destaca por su tranquilidad y su vida rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => 'Independencia',
                'description' => 'Independencia es una ciudad en el departamento de Florida, con una identidad cultural arraigada. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su historia y tradiciones.',
                'state_id' => 7
            ],
            [
                'name' => 'Sarandí del Yi',
                'description' => 'Sarandí del Yi es una ciudad en el departamento de Florida, con un ambiente rural y tranquilo. Profesionales de distintos campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 7
            ],
            [
                'name' => 'Capilla del Cerro',
                'description' => 'Capilla del Cerro es una ciudad en el departamento de Florida, con una identidad cultural y tradicional. Profesionales de diferentes rubros brindan servicios en esta comunidad que valora su historia.',
                'state_id' => 7
            ],
            [
                'name' => 'Cerro Colorado',
                'description' => 'Cerro Colorado es una ciudad en el departamento de Florida, con una atmósfera tranquila y un entorno natural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 7
            ],
            [
                'name' => 'La Macana',
                'description' => 'La Macana es una ciudad en el departamento de Florida, con un ambiente rural y tranquilo. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 7
            ],
            [
                'name' => 'Veinticinco de Agosto',
                'description' => 'Veinticinco de Agosto es una ciudad en el departamento de Florida, que se destaca por su ambiente rural y tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 7
            ]
        ];
        $localidadesLavalleja = [
            [
                'name' => 'Minas',
                'description' => 'Minas es la ciudad capital del departamento de Lavalleja, ubicada en el sureste de Uruguay. Es un centro administrativo y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 8
            ],
            [
                'name' => 'José Pedro Varela',
                'description' => 'José Pedro Varela es una localidad en el departamento de Lavalleja, con una historia vinculada a la educación y la cultura. Profesionales de diferentes ámbitos brindan sus servicios en esta comunidad que busca un desarrollo sostenible.',
                'state_id' => 8
            ],
            [
                'name' => 'Solís de Mataojo',
                'description' => 'Solís de Mataojo es una localidad en el departamento de Lavalleja, con un entorno natural y tranquilo. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Mariscala',
                'description' => 'Mariscala es una localidad en el departamento de Lavalleja, que se destaca por su belleza natural y su ambiente tranquilo. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su entorno.',
                'state_id' => 8
            ],
            [
                'name' => 'Pirarajá',
                'description' => 'Pirarajá es una localidad en el departamento de Lavalleja, con una atmósfera tranquila y un entorno rural. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Zapicán',
                'description' => 'Zapicán es una localidad en el departamento de Lavalleja, que se caracteriza por su entorno natural y su vida rural. Profesionales de diferentes rubros brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 8
            ],
            [
                'name' => 'Blanes Viale',
                'description' => 'Blanes Viale es una localidad en el departamento de Lavalleja, con una historia que la vincula a la cultura y la tradición. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 8
            ],
            [
                'name' => 'Polanco Norte',
                'description' => 'Polanco Norte es una localidad en el departamento de Lavalleja, que se destaca por su tranquilidad y su ambiente rural. Profesionales de diversas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Villa Serrana',
                'description' => 'Villa Serrana es una localidad en el departamento de Lavalleja, con un entorno natural y tranquilo. Profesionales de distintos campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 8
            ],
            [
                'name' => '1928',
                'description' => '1928 es una localidad en el departamento de Lavalleja, con una ubicación estratégica cerca de otras localidades importantes. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 8
            ],
            [
                'name' => 'Estación Solís',
                'description' => 'Estación Solís es una localidad en el departamento de Lavalleja, con una ubicación importante en términos de transporte y comercio. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su conectividad.',
                'state_id' => 8
            ],
            [
                'name' => 'Illescas',
                'description' => 'Illescas es una localidad en el departamento de Lavalleja, con un entorno natural y una atmósfera tranquila. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Villa del Rosario',
                'description' => 'Villa del Rosario es una localidad en el departamento de Lavalleja, con una ubicación importante cerca de otros centros urbanos. Profesionales de diferentes ámbitos brindan sus servicios en esta comunidad que valora su conectividad.',
                'state_id' => 8
            ],
            [
                'name' => 'Chamizo',
                'description' => 'Chamizo es una localidad en el departamento de Lavalleja, que se caracteriza por su tranquilidad y su vida rural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 8
            ],
            [
                'name' => 'Villa Passano',
                'description' => 'Villa Passano es una localidad en el departamento de Lavalleja, con una ubicación estratégica cerca de otras localidades importantes. Profesionales de diferentes rubros brindan sus servicios en esta comunidad que valora su conectividad.',
                'state_id' => 8
            ],
            [
                'name' => 'Cerro de las Cuentas',
                'description' => 'Cerro de las Cuentas es una localidad en el departamento de Lavalleja, con un entorno natural y una atmósfera tranquila. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Batlle y Ordóñez',
                'description' => 'Batlle y Ordóñez es una localidad en el departamento de Lavalleja, que se destaca por su historia y su cultura. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 8
            ],
            [
                'name' => 'La Quebrada',
                'description' => 'La Quebrada es una localidad en el departamento de Lavalleja, con un entorno natural y una atmósfera tranquila. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 8
            ],
            [
                'name' => 'Colón',
                'description' => 'Colón es una localidad en el departamento de Lavalleja, con una ubicación estratégica cerca de otras localidades importantes. Profesionales de diferentes ámbitos atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 8
            ],
            [
                'name' => 'Garzón',
                'description' => 'Garzón es una localidad en el departamento de Lavalleja, que se caracteriza por su tranquilidad y su identidad rural. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 8
            ],
            [
                'name' => 'Soca',
                'description' => 'Soca es una localidad en el departamento de Lavalleja, con una ubicación estratégica cerca de otras localidades importantes. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 8
            ]
        ];
        $localidadesMaldonado = [
            [
                'name' => 'Maldonado',
                'description' => 'Maldonado es la ciudad capital del departamento de Maldonado, ubicada en la costa sureste de Uruguay. Es un centro administrativo, comercial y turístico donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 9
            ],
            [
                'name' => 'Punta del Este',
                'description' => 'Punta del Este es una ciudad turística en el departamento de Maldonado, conocida por sus playas, vida nocturna y eventos culturales. Profesionales de distintos rubros atienden a los visitantes y residentes de esta ciudad internacional.',
                'state_id' => 9
            ],
            [
                'name' => 'San Carlos',
                'description' => 'San Carlos es una ciudad en el departamento de Maldonado, con un ambiente tranquilo y un entorno natural. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 9
            ],
            [
                'name' => 'Piriápolis',
                'description' => 'Piriápolis es una ciudad balnearia en el departamento de Maldonado, reconocida por su belleza y su historia. Profesionales de distintas áreas atienden a los visitantes y residentes de esta comunidad que valora el turismo y la cultura.',
                'state_id' => 9
            ],
            [
                'name' => 'Pan de Azúcar',
                'description' => 'Pan de Azúcar es una ciudad en el departamento de Maldonado, rodeada de naturaleza y tranquilidad. Profesionales de diversos campos brindan servicios en esta comunidad que busca el equilibrio entre la vida urbana y rural.',
                'state_id' => 9
            ],
            [
                'name' => 'Aiguá',
                'description' => 'Aiguá es una ciudad en el departamento de Maldonado, con una ubicación pintoresca en las sierras. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora la naturaleza y la vida tranquila.',
                'state_id' => 9
            ],
            [
                'name' => 'Solís',
                'description' => 'Solís es una localidad en el departamento de Maldonado, ubicada cerca de la costa y del río. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que valora su entorno natural y su ambiente relajado.',
                'state_id' => 9
            ],
            [
                'name' => 'Gregorio Aznárez',
                'description' => 'Gregorio Aznárez es una localidad en el departamento de Maldonado, con una atmósfera tranquila y un entorno rural. Profesionales de diferentes campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 9
            ],
            [
                'name' => 'Garzón',
                'description' => 'Garzón es una localidad en el departamento de Maldonado, conocida por su ambiente artístico y gastronómico. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la cultura y la creatividad.',
                'state_id' => 9
            ],
            [
                'name' => 'José Ignacio',
                'description' => 'José Ignacio es una localidad en el departamento de Maldonado, famosa por su belleza natural y su ambiente sofisticado. Profesionales de diferentes rubros atienden a los visitantes y residentes de esta comunidad que busca el lujo y la tranquilidad.',
                'state_id' => 9
            ]
        ];
        $barriosMontevideo = [
            [
                'name' => 'Ciudad Vieja',
                'description' => 'Ciudad Vieja es un barrio histórico en el centro de Montevideo, Uruguay. Con calles empedradas, arquitectura colonial y una rica historia, es un punto de interés turístico y cultural. Además, cuenta con diversos profesionales de la salud y bienestar que atienden a los residentes y visitantes en un entorno encantador.',
                'state_id' => 10
            ],
            [
                'name' => 'Centro',
                'description' => 'El Centro de Montevideo es el corazón comercial y financiero de la ciudad. Con edificios emblemáticos, tiendas, restaurantes y una vida vibrante, es un área importante para los residentes y visitantes. Aquí encontrarás una amplia gama de profesionales de diversas disciplinas que ofrecen servicios de atención médica y bienestar.',
                'state_id' => 10
            ],
            [
                'name' => 'Pocitos',
                'description' => 'Pocitos es un barrio costero de Montevideo, Uruguay. Con playas, espacios verdes y una gran variedad de servicios, es una zona popular para vivir y disfrutar de la costa. En Pocitos, encontrarás profesionales de la salud y el bienestar que contribuyen al estilo de vida activo y saludable de la comunidad.',
                'state_id' => 10
            ],
            [
                'name' => 'Punta Carretas',
                'description' => 'Punta Carretas es un barrio residencial en Montevideo, conocido por su exclusividad y comodidades. Con su icónico shopping y cercanía a la rambla, es un lugar atractivo para vivir. Los residentes cuentan con acceso a profesionales de la salud y el bienestar que contribuyen a una alta calidad de vida.',
                'state_id' => 10
            ],
            [
                'name' => 'Parque Rodó',
                'description' => 'Parque Rodó es un barrio que rodea uno de los parques más grandes y emblemáticos de Montevideo. Con su laguna, espacios verdes y actividades culturales, es un lugar para el esparcimiento. En Parque Rodó, profesionales de diversas disciplinas atienden a la comunidad que busca un equilibrio entre la vida urbana y la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Cordón',
                'description' => 'El Cordón es un barrio céntrico y diverso en Montevideo. Con universidades, teatros, comercios y una mezcla de estilos arquitectónicos, es un punto de encuentro cultural. Profesionales de la salud y el bienestar se encuentran disponibles para atender a una población variada en esta zona dinámica.',
                'state_id' => 10
            ],
            [
                'name' => 'Tres Cruces',
                'description' => 'Tres Cruces es un barrio céntrico y de gran conectividad en Montevideo. Con su terminal de buses y su comercio, es un punto de partida para muchos viajes. Los profesionales de la salud y el bienestar en Tres Cruces ofrecen servicios a residentes y viajeros que pasan por esta concurrida zona.',
                'state_id' => 10
            ],
            [
                'name' => 'Buceo',
                'description' => 'Buceo es un barrio costero en Montevideo, con su puerto y su cercanía al mar. Ofrece espacios de recreación y deportes acuáticos. En Buceo, profesionales de diversas áreas de salud y bienestar están disponibles para atender a una comunidad que valora la vida junto al agua.',
                'state_id' => 10
            ],
            [
                'name' => 'Malvín',
                'description' => 'Malvín es un barrio residencial y costero en Montevideo, con una amplia rambla y playas. Es un lugar tranquilo para vivir y disfrutar de la naturaleza. Los profesionales de la salud y el bienestar en Malvín contribuyen al bienestar de los residentes que buscan una vida relajada junto al mar.',
                'state_id' => 10
            ],
            [
                'name' => 'Carrasco',
                'description' => 'Carrasco es un barrio exclusivo de Montevideo, conocido por su elegancia y estilo de vida de alto nivel. Los profesionales de la salud y el bienestar en Carrasco atienden a una comunidad que busca servicios de alta calidad en un entorno tranquilo y residencial.',
                'state_id' => 10
            ],
            [
                'name' => 'La Blanqueada',
                'description' => 'La Blanqueada es un barrio en Montevideo con una ubicación estratégica. Es conocido por su ambiente familiar y su conectividad. En La Blanqueada, profesionales de la salud y el bienestar ofrecen servicios a residentes que valoran la accesibilidad y la vida en comunidad.',
                'state_id' => 10
            ],
            [
                'name' => 'La Comercial',
                'description' => 'La Comercial es un barrio de Montevideo con una rica historia y un ambiente comercial. Profesionales de diversas áreas de salud y bienestar atienden a una comunidad que valora la diversidad y la autenticidad en su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'Brazo Oriental',
                'description' => 'Brazo Oriental es un barrio residencial en Montevideo, conocido por su tranquilidad y belleza arquitectónica. Los profesionales de la salud y el bienestar en Brazo Oriental brindan servicios a residentes que buscan una vida apacible y de calidad.',
                'state_id' => 10
            ],
            [
                'name' => 'Jacinto Vera',
                'description' => 'Jacinto Vera es un barrio en Montevideo con una identidad cultural rica y una atmósfera acogedora. Los profesionales de la salud y el bienestar en Jacinto Vera ofrecen servicios a una comunidad que valora la historia y el sentido de pertenencia.',
                'state_id' => 10
            ],
            [
                'name' => 'Prado',
                'description' => 'Prado es un barrio en Montevideo con amplios espacios verdes y un ambiente tranquilo. Es un lugar ideal para aquellos que buscan una conexión con la naturaleza. En Prado, profesionales de diversas áreas de salud y bienestar contribuyen al bienestar de los residentes.',
                'state_id' => 10
            ],
            [
                'name' => 'Villa Biarritz',
                'description' => 'Villa Biarritz es un barrio en Montevideo con una ubicación privilegiada cerca de la costa. Ofrece un entorno residencial y un estilo de vida tranquilo. Los profesionales de la salud y el bienestar en Villa Biarritz atienden a residentes que buscan calidad de vida.',
                'state_id' => 10
            ],
            [
                'name' => 'Villa Dolores',
                'description' => 'Villa Dolores es un barrio en Montevideo con una atmosfera residencial y familiar. Los profesionales de la salud y el bienestar en Villa Dolores ofrecen servicios a residentes que valoran la comunidad y el sentido de pertenencia.',
                'state_id' => 10
            ],
            [
                'name' => 'Malvín Norte',
                'description' => 'Malvín Norte es un barrio en Montevideo con una ubicación costera y una rambla pintoresca. Los profesionales de la salud y el bienestar en Malvín Norte atienden a una comunidad que busca calidad de vida en un entorno costero.',
                'state_id' => 10
            ],
            [
                'name' => 'Palermo',
                'description' => 'Palermo es un barrio en Montevideo con una identidad bohemia y cultural. Con su ambiente artístico, es un lugar de encuentro para profesionales de diversas disciplinas, incluyendo la salud y el bienestar.',
                'state_id' => 10
            ],
            [
                'name' => 'Unión',
                'description' => 'Unión es un barrio en Montevideo con una ubicación céntrica y una identidad histórica. En Unión, profesionales de la salud y el bienestar ofrecen servicios a una comunidad diversa que valora la accesibilidad y la riqueza cultural.',
                'state_id' => 10
            ],
            [
                'name' => 'Bella Vista',
                'description' => 'Bella Vista es un barrio en Montevideo con una vista panorámica al río. Ofrece un entorno residencial y tranquilo. Los profesionales de la salud y el bienestar en Bella Vista atienden a una comunidad que busca una vida apacible y de calidad.',
                'state_id' => 10
            ],
            [
                'name' => 'Capurro',
                'description' => 'Capurro es un barrio en Montevideo con una ubicación costera y una conexión importante con el río. Los profesionales de la salud y el bienestar en Capurro brindan servicios a residentes que valoran la vida junto al agua y la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Colón',
                'description' => 'Colón es un barrio en Montevideo con una identidad diversa y multicultural. Los profesionales de la salud y el bienestar en Colón atienden a una comunidad que valora la convivencia y la interculturalidad en su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'Manga',
                'description' => 'Manga es un barrio en Montevideo con una ubicación costera y una conexión con el río. Los profesionales de la salud y el bienestar en Manga brindan servicios a residentes que valoran la vida cerca del agua y la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Maroñas',
                'description' => 'Maroñas es un barrio en Montevideo con una identidad histórica y deportiva. Los profesionales de la salud y el bienestar en Maroñas atienden a una comunidad que valora la tradición y el espíritu deportivo en su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'Paso de la Arena',
                'description' => 'Paso de la Arena es un barrio en Montevideo con una atmósfera residencial y tranquila. Los profesionales de la salud y el bienestar en Paso de la Arena brindan servicios a residentes que buscan una vida apacible y de calidad.',
                'state_id' => 10
            ],
            [
                'name' => 'Peñarol',
                'description' => 'Peñarol es un barrio en Montevideo con una fuerte identidad cultural y deportiva. Los profesionales de la salud y el bienestar en Peñarol ofrecen servicios a una comunidad que valora la historia y la pasión por el fútbol.',
                'state_id' => 10
            ],
            [
                'name' => 'Reducto',
                'description' => 'Reducto es un barrio en Montevideo con una ubicación céntrica y acceso a importantes vías de transporte. Los profesionales de la salud y el bienestar en Reducto atienden a residentes que buscan accesibilidad y una vida urbana activa.',
                'state_id' => 10
            ],
            [
                'name' => 'Sayago',
                'description' => 'Sayago es un barrio en Montevideo con una atmosfera familiar y un ambiente tranquilo. Los profesionales de la salud y el bienestar en Sayago ofrecen servicios a residentes que valoran la vida en comunidad y el contacto con la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Villa Española',
                'description' => 'Villa Española es un barrio en Montevideo con una identidad histórica y tradicional. Los profesionales de la salud y el bienestar en Villa Española atienden a una comunidad que valora la historia y la autenticidad en su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'Villa García',
                'description' => 'Villa García es un barrio en Montevideo con una ubicación cercana a la costa. Los profesionales de la salud y el bienestar en Villa García brindan servicios a una comunidad que busca calidad de vida y una conexión con la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Villa Muñoz',
                'description' => 'Villa Muñoz es un barrio en Montevideo con una atmosfera residencial y tranquila. Los profesionales de la salud y el bienestar en Villa Muñoz atienden a residentes que valoran la vida apacible y la convivencia en comunidad.',
                'state_id' => 10
            ],
            [
                'name' => 'Casavalle',
                'description' => 'Casavalle es un barrio en Montevideo con una identidad cultural y comunitaria. Los profesionales de la salud y el bienestar en Casavalle ofrecen servicios a una comunidad que valora la unión y el sentido de pertenencia en su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'Jardines del Hipódromo',
                'description' => 'Jardines del Hipódromo es un barrio en Montevideo con una ubicación cercana al Hipódromo de Maroñas. Los profesionales de la salud y el bienestar en Jardines del Hipódromo brindan servicios a residentes que valoran la cercanía a espacios recreativos y deportivos.',
                'state_id' => 10
            ],
            [
                'name' => 'Flor de Maroñas',
                'description' => 'Flor de Maroñas es un barrio en Montevideo con una identidad residencial y familiar. Los profesionales de la salud y el bienestar en Flor de Maroñas atienden a una comunidad que busca una vida tranquila y con espacios para el esparcimiento.',
                'state_id' => 10
            ],
            [
                'name' => 'Ituzaingó',
                'description' => 'Ituzaingó es un barrio en Montevideo con una atmosfera tradicional y cultural. Los profesionales de la salud y el bienestar en Ituzaingó ofrecen servicios a residentes que valoran la historia y la identidad de su entorno.',
                'state_id' => 10
            ],
            [
                'name' => 'La Teja',
                'description' => 'La Teja es un barrio en Montevideo con una ubicación próxima al Río de la Plata. Los profesionales de la salud y el bienestar en La Teja atienden a una comunidad que busca una vida cerca del agua y con acceso a espacios naturales.',
                'state_id' => 10
            ],
            [
                'name' => 'Las Acacias',
                'description' => 'Las Acacias es un barrio en Montevideo con una identidad residencial y un ambiente tranquilo. Los profesionales de la salud y el bienestar en Las Acacias brindan servicios a residentes que buscan calidad de vida y cercanía con la naturaleza.',
                'state_id' => 10
            ],
            [
                'name' => 'Lezica',
                'description' => 'Lezica es un barrio en Montevideo con una atmosfera tranquila y un entorno residencial. Los profesionales de la salud y el bienestar en Lezica atienden a una comunidad que valora la vida en comunidad y la proximidad a espacios verdes.',
                'state_id' => 10
            ],
            [
                'name' => 'Piedras Blancas',
                'description' => 'Piedras Blancas es un barrio en Montevideo con una ubicación estratégica cerca del Aeropuerto Internacional de Carrasco. Los profesionales de la salud y el bienestar en Piedras Blancas atienden a residentes que buscan accesibilidad y comodidad.',
                'state_id' => 10
            ]
        ];
        $localidadesPaysandu = [
            [
                'name' => 'Paysandú',
                'description' => 'Paysandú es una ciudad en el departamento homónimo, ubicada en el noroeste de Uruguay. Con una rica historia y diversos profesionales que brindan sus servicios, es un centro administrativo y cultural de la región.',
                'state_id' => 11
            ],
            [
                'name' => 'Guichón',
                'description' => 'Guichón es una localidad en el departamento de Paysandú, con un ambiente tranquilo y rural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su identidad y el contacto con la naturaleza.',
                'state_id' => 11
            ],
            [
                'name' => 'Quebracho',
                'description' => 'Quebracho es una localidad en el departamento de Paysandú, con una ubicación estratégica cerca del río Uruguay. Profesionales de distintos rubros brindan servicios en esta comunidad con intercambio comercial y cultural.',
                'state_id' => 11
            ],
            [
                'name' => 'Chapicuy',
                'description' => 'Chapicuy es una localidad en el departamento de Paysandú, con una conexión importante con la agricultura y la ganadería. Profesionales de diversas áreas atienden a los habitantes de esta comunidad con vínculos rurales.',
                'state_id' => 11
            ],
            [
                'name' => 'Piedras Coloradas',
                'description' => 'Piedras Coloradas es una localidad en el departamento de Paysandú, cerca del río Uruguay. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora su relación con el agua y la naturaleza.',
                'state_id' => 11
            ],
            [
                'name' => 'Lorenzo Geyres',
                'description' => 'Lorenzo Geyres es una localidad en el departamento de Paysandú, con una historia que refleja la identidad rural de la región. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su tradición.',
                'state_id' => 11
            ],
            [
                'name' => 'Porvenir',
                'description' => 'Porvenir es una localidad en el departamento de Paysandú, con un ambiente tranquilo y una ubicación cercana al río Uruguay. Profesionales de distintos rubros brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 11
            ],
            [
                'name' => 'Tambores',
                'description' => 'Tambores es una localidad en el departamento de Paysandú, con un entorno natural y una atmósfera apacible. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 11
            ],
            [
                'name' => 'Guaviyú',
                'description' => 'Guaviyú es una localidad en el departamento de Paysandú, que se destaca por sus aguas termales y su entorno natural. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el bienestar y la relajación de sus habitantes.',
                'state_id' => 11
            ],
            [
                'name' => 'Termas de Guaviyú',
                'description' => 'Termas de Guaviyú es una localidad en el departamento de Paysandú, conocida por sus aguas termales curativas. Profesionales de diferentes disciplinas atienden a los habitantes y visitantes que buscan aliviar sus afecciones.',
                'state_id' => 11
            ],
            [
                'name' => 'Gallinal',
                'description' => 'Gallinal es una localidad en el departamento de Paysandú, con una atmósfera tranquila y rural. Profesionales de distintos campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 11
            ],
            [
                'name' => 'Orgoroso',
                'description' => 'Orgoroso es una localidad en el departamento de Paysandú, con una historia rica en tradiciones. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su identidad y su pasado.',
                'state_id' => 11
            ],
            [
                'name' => 'Beisso',
                'description' => 'Beisso es una localidad en el departamento de Paysandú, con una ubicación cercana al río Uruguay. Profesionales de diferentes campos brindan servicios en esta comunidad que busca el desarrollo y el bienestar de sus habitantes.',
                'state_id' => 11
            ],
            [
                'name' => 'Piñera',
                'description' => 'Piñera es una localidad en el departamento de Paysandú, con un ambiente rural y una identidad ligada a la agricultura y la ganadería. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su tradición.',
                'state_id' => 11
            ],
            [
                'name' => 'Merinos',
                'description' => 'Merinos es una localidad en el departamento de Paysandú, con una conexión importante con la producción agropecuaria. Profesionales de distintos rubros brindan servicios en esta comunidad que valora la vida en el campo.',
                'state_id' => 11
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una localidad en el departamento de Paysandú, con una ubicación en la zona de sierras. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la naturaleza y la vida tranquila.',
                'state_id' => 11
            ],
            [
                'name' => 'Constitución',
                'description' => 'Constitución es una localidad en el departamento de Paysandú, con una historia vinculada a la formación del país. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su identidad y su pasado.',
                'state_id' => 11
            ],
            [
                'name' => 'Valle del Lunarejo',
                'description' => 'Valle del Lunarejo es una localidad en el departamento de Paysandú, ubicada en una zona de gran valor natural. Profesionales de distintos rubros brindan servicios en esta comunidad que valora la conservación de su entorno.',
                'state_id' => 11
            ],
            [
                'name' => 'El Eucalipto',
                'description' => 'El Eucalipto es una localidad en el departamento de Paysandú, con un ambiente tranquilo y rural. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 11
            ],
            [
                'name' => 'Colonia Nuevo Paysandú',
                'description' => 'Colonia Nuevo Paysandú es una localidad en el departamento de Paysandú, con una ubicación cerca del río Uruguay. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que busca el bienestar y el crecimiento.',
                'state_id' => 11
            ],
            // Continúa con el resto de los lugares...
        ];
        $localidadesRioNegro = [
            [
                'name' => 'Fray Bentos',
                'description' => 'Fray Bentos es una ciudad en el departamento de Río Negro, ubicada a orillas del río Uruguay. Con una rica historia industrial y cultural, es un centro administrativo y comercial de la región.',
                'state_id' => 12
            ],
            [
                'name' => 'Young',
                'description' => 'Young es una ciudad en el departamento de Río Negro, con una ubicación estratégica cerca del río Uruguay. Profesionales de diversas áreas brindan sus servicios en esta comunidad que valora su identidad y su desarrollo.',
                'state_id' => 12
            ],
            [
                'name' => 'San Javier',
                'description' => 'San Javier es una ciudad en el departamento de Río Negro, con una conexión importante con la actividad agropecuaria. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora la vida rural.',
                'state_id' => 12
            ],
            [
                'name' => 'Nuevo Berlín',
                'description' => 'Nuevo Berlín es una ciudad en el departamento de Río Negro, con un ambiente tranquilo y rural. Profesionales de distintos rubros brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Young',
                'description' => 'Young es una ciudad en el departamento de Río Negro, con una ubicación estratégica cerca del río Uruguay. Profesionales de diversas áreas brindan sus servicios en esta comunidad que valora su identidad y su desarrollo.',
                'state_id' => 12
            ],
            [
                'name' => 'Mercedes',
                'description' => 'Mercedes es una ciudad en el departamento de Río Negro, con una rica historia y un ambiente cultural. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora su patrimonio.',
                'state_id' => 12
            ],
            [
                'name' => 'Bella Unión',
                'description' => 'Bella Unión es una ciudad en el departamento de Río Negro, ubicada en el límite con el departamento de Artigas. Profesionales de distintos rubros brindan servicios en esta comunidad con intercambio comercial y cultural.',
                'state_id' => 12
            ],
            [
                'name' => 'Las Cañas',
                'description' => 'Las Cañas es una localidad en el departamento de Río Negro, con una ubicación cercana al río Uruguay. Profesionales de diferentes campos brindan servicios en esta comunidad que valora el entorno natural y la tranquilidad.',
                'state_id' => 12
            ],
            [
                'name' => 'Grecco',
                'description' => 'Grecco es una localidad en el departamento de Río Negro, con una atmósfera rural y tranquila. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Agraciada',
                'description' => 'Agraciada es una localidad en el departamento de Río Negro, con una conexión importante con la actividad agropecuaria. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora la vida rural.',
                'state_id' => 12
            ],
            [
                'name' => 'Trinidad',
                'description' => 'Trinidad es una ciudad en el departamento de Río Negro, con una rica historia y un ambiente cultural. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que valora su patrimonio y su identidad.',
                'state_id' => 12
            ],
            [
                'name' => 'Sarandí de Navarro',
                'description' => 'Sarandí de Navarro es una localidad en el departamento de Río Negro, con un ambiente tranquilo y rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Los Arrayanes',
                'description' => 'Los Arrayanes es una localidad en el departamento de Río Negro, con una ubicación cerca del río Uruguay. Profesionales de diferentes campos atienden a los habitantes de esta comunidad que valora su entorno natural y la tranquilidad.',
                'state_id' => 12
            ],
            [
                'name' => 'Guaviyú',
                'description' => 'Guaviyú es una localidad en el departamento de Río Negro, conocida por su área termal. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el bienestar y la relajación de sus habitantes.',
                'state_id' => 12
            ],
            [
                'name' => 'Termas de Almirón',
                'description' => 'Termas de Almirón es una localidad en el departamento de Río Negro, famosa por sus aguas termales curativas. Profesionales de distintas disciplinas atienden a los habitantes y visitantes que buscan aliviar sus afecciones.',
                'state_id' => 12
            ],
            [
                'name' => 'Grecco',
                'description' => 'Grecco es una localidad en el departamento de Río Negro, con una atmósfera rural y tranquila. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Sarandí del Yí',
                'description' => 'Sarandí del Yí es una localidad en el departamento de Río Negro, con una ubicación estratégica. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 12
            ],
            [
                'name' => 'Tres Quintas',
                'description' => 'Tres Quintas es una localidad en el departamento de Río Negro, con una atmósfera tranquila y rural. Profesionales de distintos campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Agraciada',
                'description' => 'Agraciada es una localidad en el departamento de Río Negro, con una conexión importante con la actividad agropecuaria. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora la vida rural.',
                'state_id' => 12
            ],
            [
                'name' => 'Nuevo Berlín',
                'description' => 'Nuevo Berlín es una ciudad en el departamento de Río Negro, con un ambiente tranquilo y rural. Profesionales de distintos rubros brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
            [
                'name' => 'Pueblo Grecco',
                'description' => 'Pueblo Grecco es una localidad en el departamento de Río Negro, con una atmósfera rural y tranquila. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 12
            ],
        ];
        $localidadesRivera = [
            [
                'name' => 'Rivera',
                'description' => 'Rivera es la ciudad capital del departamento homónimo, ubicada en el norte de Uruguay y en la frontera con Brasil. Es un centro administrativo y comercial donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 13
            ],
            [
                'name' => 'Tranqueras',
                'description' => 'Tranqueras es una ciudad en el departamento de Rivera, con una ubicación estratégica en el norte del país. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora su desarrollo y progreso.',
                'state_id' => 13
            ],
            [
                'name' => 'Vichadero',
                'description' => 'Vichadero es una localidad en el departamento de Rivera, con un ambiente tranquilo y rural. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
            [
                'name' => 'Cerro de los Burros',
                'description' => 'Cerro de los Burros es una localidad en el departamento de Rivera, con una ubicación pintoresca. Profesionales de distintas disciplinas brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Lapuente',
                'description' => 'Lapuente es una localidad en el departamento de Rivera, con una atmósfera rural y tranquila. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
            [
                'name' => 'Pueblo del Barro',
                'description' => 'Pueblo del Barro es una localidad en el departamento de Rivera, con una ubicación cercana al río Cuareim. Profesionales de diversas disciplinas brindan servicios en esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 13
            ],
            [
                'name' => 'Paso Ataques',
                'description' => 'Paso Ataques es una localidad en el departamento de Rivera, con una ubicación cerca del río Cuareim. Profesionales de diversas disciplinas brindan servicios en esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 13
            ],
            [
                'name' => 'Villa Minas',
                'description' => 'Villa Minas es una localidad en el departamento de Rivera, con una atmósfera tranquila y rural. Profesionales de diferentes rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Guaviyú',
                'description' => 'Guaviyú es una localidad en el departamento de Rivera, con una ubicación cerca del río Uruguay. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la tranquilidad y la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
            [
                'name' => 'Masoller',
                'description' => 'Masoller es una localidad en el departamento de Rivera, con una atmósfera rural y tranquila. Profesionales de diversas disciplinas atienden a los habitantes de esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Paso del Parque',
                'description' => 'Paso del Parque es una localidad en el departamento de Rivera, con una ubicación estratégica cerca del río Uruguay. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 13
            ],
            [
                'name' => 'Minas de Corrales',
                'description' => 'Minas de Corrales es una localidad en el departamento de Rivera, con una historia vinculada a la minería. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'La Pedrera',
                'description' => 'La Pedrera es una localidad en el departamento de Rivera, con un entorno natural y tranquilo. Profesionales de diferentes rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Villa Tambores',
                'description' => 'Villa Tambores es una localidad en el departamento de Rivera, con un entorno natural y una atmósfera tranquila. Profesionales de distintas disciplinas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],

            [
                'name' => 'Santa Ana',
                'description' => 'Santa Ana es una localidad en el departamento de Rivera, con una ubicación estratégica cerca del río Uruguay. Profesionales de distintas disciplinas atienden a los habitantes de esta comunidad que valora su desarrollo y su identidad.',
                'state_id' => 13
            ],
            [
                'name' => 'Brazo Oriental',
                'description' => 'Brazo Oriental es una localidad en el departamento de Rivera, con una ubicación cerca del río Uruguay. Profesionales de diferentes rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Cerro Pelado',
                'description' => 'Cerro Pelado es una localidad en el departamento de Rivera, con una ubicación en la región norte del país. Profesionales de distintas disciplinas atienden a los habitantes de esta comunidad que valora la tranquilidad y la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
            [
                'name' => 'Lavalleja',
                'description' => 'Lavalleja es una localidad en el departamento de Rivera, con una ubicación cerca de la frontera con Brasil. Profesionales de diferentes rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Villa Sara',
                'description' => 'Villa Sara es una localidad en el departamento de Rivera, con un ambiente tranquilo y rural. Profesionales de distintas áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
            [
                'name' => 'Cerrillada',
                'description' => 'Cerrillada es una localidad en el departamento de Rivera, con una atmósfera tranquila y rural. Profesionales de diferentes rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 13
            ],
            [
                'name' => 'Villa Penino',
                'description' => 'Villa Penino es una localidad en el departamento de Rivera, con una ubicación cerca del río Cuareim. Profesionales de diversas disciplinas atienden a los habitantes de esta comunidad que valora la tranquilidad y la vida en contacto con la naturaleza.',
                'state_id' => 13
            ],
        ];
        $localidadesRocha = [
            [
                'name' => 'Rocha',
                'description' => 'Rocha es la ciudad capital del departamento de Rocha, ubicada en la costa este de Uruguay. Profesionales de diversas disciplinas brindan servicios a los habitantes de esta comunidad que valora su entorno natural y sus playas.',
                'state_id' => 14
            ],
            [
                'name' => 'Castillos',
                'description' => 'Castillos es una ciudad en el departamento de Rocha, con una ubicación estratégica cerca de la frontera con Brasil. Profesionales de diferentes campos atienden a los habitantes de esta comunidad con intercambio cultural y comercial.',
                'state_id' => 14
            ],
            [
                'name' => 'La Paloma',
                'description' => 'La Paloma es una ciudad en el departamento de Rocha, conocida por sus playas y su ambiente turístico. Profesionales de diversas áreas brindan servicios a los habitantes y a los visitantes de esta comunidad costera.',
                'state_id' => 14
            ],
            [
                'name' => 'Chuy',
                'description' => 'Chuy es una ciudad fronteriza en el departamento de Rocha, ubicada en la frontera con Brasil. Profesionales de distintos rubros atienden a los habitantes de esta comunidad con intercambio comercial y multicultural.',
                'state_id' => 14
            ],
            [
                'name' => 'Lascano',
                'description' => 'Lascano es una ciudad en el departamento de Rocha, que se destaca por su entorno rural y su tranquilidad. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 14
            ],
            [
                'name' => 'Velázquez',
                'description' => 'Velázquez es una ciudad en el departamento de Rocha, con una atmósfera apacible y una ubicación cerca del mar. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la tranquilidad y el paisaje costero.',
                'state_id' => 14
            ],
            [
                'name' => 'Aguas Dulces',
                'description' => 'Aguas Dulces es una localidad en el departamento de Rocha, conocida por su ambiente costero y sus playas. Profesionales de diversas disciplinas brindan servicios a los habitantes y a los visitantes de esta comunidad turística.',
                'state_id' => 14
            ],
            [
                'name' => 'Barra de Valizas',
                'description' => 'Barra de Valizas es una localidad en el departamento de Rocha, con un entorno natural y un ambiente relajado. Profesionales de distintos campos atienden a los habitantes y a los visitantes de esta comunidad costera.',
                'state_id' => 14
            ],
            [
                'name' => 'La Pedrera',
                'description' => 'La Pedrera es una localidad en el departamento de Rocha, conocida por su ambiente turístico y sus playas. Profesionales de diferentes rubros brindan servicios a los habitantes y a los visitantes de esta comunidad costera.',
                'state_id' => 14
            ],
            [
                'name' => 'Santa Teresa',
                'description' => 'Santa Teresa es una localidad en el departamento de Rocha, con una ubicación en la costa este de Uruguay. Profesionales de diversas áreas brindan servicios a los habitantes y a los visitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 14
            ],
            [
                'name' => 'Punta del Diablo',
                'description' => 'Punta del Diablo es una localidad en el departamento de Rocha, conocida por su ambiente turístico y sus playas. Profesionales de distintas disciplinas atienden a los habitantes y a los visitantes de esta comunidad costera.',
                'state_id' => 14
            ],
            [
                'name' => 'San Luis al Medio',
                'description' => 'San Luis al Medio es una localidad en el departamento de Rocha, con un entorno rural y una ubicación cercana al mar. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la tranquilidad y el paisaje costero.',
                'state_id' => 14
            ],
            [
                'name' => '19 de Abril',
                'description' => '19 de Abril es una localidad en el departamento de Rocha, con una historia y tradiciones arraigadas. Profesionales de diversas disciplinas brindan servicios en esta comunidad que valora su identidad y su relación con el pasado.',
                'state_id' => 14
            ],
            [
                'name' => 'Palmares de Castillos',
                'description' => 'Palmares de Castillos es una localidad en el departamento de Rocha, con un ambiente rural y tranquilo. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 14
            ],
            [
                'name' => 'La Coronilla',
                'description' => 'La Coronilla es una localidad en el departamento de Rocha, con una ubicación costera y playas atractivas. Profesionales de distintas disciplinas atienden a los habitantes y a los visitantes de esta comunidad turística.',
                'state_id' => 14
            ],
            [
                'name' => 'La Esmeralda',
                'description' => 'La Esmeralda es una localidad en el departamento de Rocha, conocida por su entorno natural y su ambiente tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 14
            ],
            [
                'name' => 'Cebollatí',
                'description' => 'Cebollatí es una localidad en el departamento de Rocha, con una ubicación en el interior del departamento. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su identidad y su relación con la región.',
                'state_id' => 14
            ],
            [
                'name' => 'Capacho',
                'description' => 'Capacho es una localidad en el departamento de Rocha, que se destaca por su tranquilidad y su ambiente rural. Profesionales de diversas disciplinas atienden a los habitantes de esta comunidad que busca la calidad de vida de sus residentes.',
                'state_id' => 14
            ],
            [
                'name' => 'Garzón',
                'description' => 'Garzón es una localidad en el departamento de Rocha, con un ambiente rural y una ubicación cerca del mar. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza y el paisaje costero.',
                'state_id' => 14
            ]
            // Continuar con los demás pueblos y ciudades de Rocha...
        ];
        $localidadesSalto = [
            [
                'name' => 'Salto',
                'description' => 'Salto es la ciudad capital del departamento de Salto, ubicada en el norte de Uruguay. Es un centro administrativo, comercial y cultural donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 15
            ],
            [
                'name' => 'Daymán',
                'description' => 'Daymán es una localidad en el departamento de Salto, famosa por sus termas y su entorno natural. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca el bienestar y la relajación.',
                'state_id' => 15
            ],
            [
                'name' => 'Arapey',
                'description' => 'Arapey es una localidad en el departamento de Salto, conocida por sus termas y su ambiente tranquilo. Profesionales de distintos campos brindan servicios en esta comunidad que valora la salud y el contacto con la naturaleza.',
                'state_id' => 15
            ],
            [
                'name' => 'Belén',
                'description' => 'Belén es una localidad en el departamento de Salto, con una rica historia y una identidad cultural arraigada. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su patrimonio y tradiciones.',
                'state_id' => 15
            ],
            [
                'name' => 'Colonia Lavalleja',
                'description' => 'Colonia Lavalleja es una localidad en el departamento de Salto, con un ambiente rural y natural. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 15
            ],
            [
                'name' => 'Constitución',
                'description' => 'Constitución es una localidad en el departamento de Salto, con una ubicación estratégica cerca del río Uruguay. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su conexión fluvial y su potencial comercial.',
                'state_id' => 15
            ],
            [
                'name' => 'Fernández',
                'description' => 'Fernández es una localidad en el departamento de Salto, con un entorno rural y tranquilo. Profesionales de distintos campos brindan servicios en esta comunidad que busca el bienestar y la vida en contacto con la naturaleza.',
                'state_id' => 15
            ],
            [
                'name' => 'Itapebí',
                'description' => 'Itapebí es una localidad en el departamento de Salto, que se destaca por su ambiente natural y su historia. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su entorno y patrimonio.',
                'state_id' => 15
            ],
            [
                'name' => 'Mataojo',
                'description' => 'Mataojo es una localidad en el departamento de Salto, con una identidad rural y tradicional. Profesionales de distintos campos brindan servicios en esta comunidad que busca el desarrollo sostenible y la preservación de su cultura.',
                'state_id' => 15
            ],
            [
                'name' => 'Pueblo Biassini',
                'description' => 'Pueblo Biassini es una localidad en el departamento de Salto, con una ubicación pintoresca en el río Uruguay. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su conexión fluvial y su tranquilidad.',
                'state_id' => 15
            ],
            [
                'name' => 'Pueblo Fernández',
                'description' => 'Pueblo Fernández es una localidad en el departamento de Salto, con un ambiente rural y una identidad arraigada. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo y el bienestar de sus habitantes.',
                'state_id' => 15
            ],
            [
                'name' => 'Pueblo Gallinal',
                'description' => 'Pueblo Gallinal es una localidad en el departamento de Salto, con una historia rica en tradiciones. Profesionales de distintos campos brindan servicios en esta comunidad que valora su patrimonio cultural y su identidad.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Valentín',
                'description' => 'Rincón de Valentín es una localidad en el departamento de Salto, con una ubicación estratégica cerca del río Uruguay. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su entorno fluvial y su potencial.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Albión',
                'description' => 'Rincón de Albión es una localidad en el departamento de Salto, con un entorno rural y pintoresco. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su tranquilidad y su conexión con la naturaleza.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Cololó',
                'description' => 'Rincón de Cololó es una localidad en el departamento de Salto, con una identidad rural y tradicional. Profesionales de diferentes campos atienden a los habitantes de esta comunidad que valora su historia y su vida en el campo.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de la Bolsa',
                'description' => 'Rincón de la Bolsa es una localidad en el departamento de Salto, con una ubicación cercana al río Uruguay. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su entorno fluvial y su potencial turístico.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de la Calera',
                'description' => 'Rincón de la Calera es una localidad en el departamento de Salto, con una historia ligada a su patrimonio industrial. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que valora su legado y su identidad.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de las Gallinas',
                'description' => 'Rincón de las Gallinas es una localidad en el departamento de Salto, con un ambiente rural y una atmósfera tranquila. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de los Olivera',
                'description' => 'Rincón de los Olivera es una localidad en el departamento de Salto, con una conexión histórica a la región. Profesionales de distintos campos atienden a los habitantes de esta comunidad que valora su patrimonio y su desarrollo.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Píriz',
                'description' => 'Rincón de Píriz es una localidad en el departamento de Salto, con una ubicación que la vincula a la región. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora su identidad y su entorno natural.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Quebracho',
                'description' => 'Rincón de Quebracho es una localidad en el departamento de Salto, con un ambiente rural y tradicional. Profesionales de distintas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes y la preservación de sus costumbres.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón de Valentines',
                'description' => 'Rincón de Valentines es una localidad en el departamento de Salto, con una conexión histórica y cultural a la región. Profesionales de diferentes campos atienden a los habitantes de esta comunidad que valora su patrimonio y su identidad.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón del Bonete',
                'description' => 'Rincón del Bonete es una localidad en el departamento de Salto, con una ubicación cercana al embalse de la represa del río Negro. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que valora su entorno acuático y su potencial turístico.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón del Cerdido',
                'description' => 'Rincón del Cerdido es una localidad en el departamento de Salto, con un ambiente rural y un entorno natural. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes y la conservación de su paisaje.',
                'state_id' => 15
            ],
            [
                'name' => 'Rincón del Palmar',
                'description' => 'Rincón del Palmar es una localidad en el departamento de Salto, con una ubicación cercana al río Uruguay. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su entorno fluvial y su potencial turístico.',
                'state_id' => 15
            ],
            [
                'name' => 'Saucedo',
                'description' => 'Saucedo es una localidad en el departamento de Salto, con un ambiente rural y tradicional. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora sus raíces y su estilo de vida.',
                'state_id' => 15
            ],
            [
                'name' => 'Termas del Arapey',
                'description' => 'Termas del Arapey es una localidad en el departamento de Salto, conocida por sus aguas termales y su enfoque turístico. Profesionales de distintas áreas brindan servicios en esta comunidad que busca el bienestar y el relax de sus visitantes.',
                'state_id' => 15
            ],
        ];
        $localidadesSanJose = [
            [
                'name' => 'San José de Mayo',
                'description' => 'San José de Mayo es la ciudad capital del departamento de San José, ubicada en el sur de Uruguay. Es un centro administrativo, comercial y cultural donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 16
            ],
            [
                'name' => 'Ciudad del Plata',
                'description' => 'Ciudad del Plata es una localidad en el departamento de San José, con un crecimiento poblacional importante en las últimas décadas. Profesionales de diferentes rubros brindan sus servicios en esta comunidad en constante desarrollo.',
                'state_id' => 16
            ],
            [
                'name' => 'Libertad',
                'description' => 'Libertad es una localidad en el departamento de San José, con una historia arraigada en la cultura uruguaya. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora sus tradiciones.',
                'state_id' => 16
            ],
            [
                'name' => 'Ecilda Paullier',
                'description' => 'Ecilda Paullier es una localidad en el departamento de San José, con un ambiente tranquilo y rural. Profesionales de distintos campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 16
            ],
            [
                'name' => 'Rodríguez',
                'description' => 'Rodríguez es una localidad en el departamento de San José, con una ubicación estratégica cerca de la capital. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad con intercambio comercial y cultural.',
                'state_id' => 16
            ],
            [
                'name' => 'Rafael Perazza',
                'description' => 'Rafael Perazza es una localidad en el departamento de San José, con una identidad vinculada a su historia y su gente. Profesionales de diversas áreas brindan servicios en esta comunidad que valora su cultura.',
                'state_id' => 16
            ],
            [
                'name' => 'Mal Abrigo',
                'description' => 'Mal Abrigo es una localidad en el departamento de San José, con una atmósfera tranquila y un entorno natural. Profesionales de distintos rubros brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 16
            ],
            [
                'name' => 'Kiyú-Ordeig',
                'description' => 'Kiyú-Ordeig es una localidad en el departamento de San José, con una ubicación pintoresca a orillas del río. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 16
            ],
            [
                'name' => 'Puntas de Valdez',
                'description' => 'Puntas de Valdez es una localidad en el departamento de San José, que se destaca por su entorno costero. Profesionales de diversas disciplinas brindan servicios en esta comunidad que busca la calidad de vida junto al mar.',
                'state_id' => 16
            ],
            [
                'name' => 'Ituzaingó',
                'description' => 'Ituzaingó es una localidad en el departamento de San José, con una ubicación cercana a la capital. Profesionales de distintos campos brindan servicios en esta comunidad que valora su conexión con la ciudad y la tranquilidad de su entorno.',
                'state_id' => 16
            ],
            [
                'name' => 'Juan Soler',
                'description' => 'Juan Soler es una localidad en el departamento de San José, con una atmósfera rural y tranquila. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes y la cercanía con la naturaleza.',
                'state_id' => 16
            ],
            [
                'name' => 'Playa Pascual',
                'description' => 'Playa Pascual es una localidad en el departamento de San José, con un entorno costero que atrae a residentes y turistas. Profesionales de distintas disciplinas brindan servicios en esta comunidad que busca el equilibrio entre la vida junto al mar y la comodidad urbana.',
                'state_id' => 16
            ],
            [
                'name' => 'Villa María',
                'description' => 'Villa María es una localidad en el departamento de San José, con una historia rica en tradiciones. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora su patrimonio cultural.',
                'state_id' => 16
            ],
            [
                'name' => 'Santa Mónica',
                'description' => 'Santa Mónica es una localidad en el departamento de San José, con un ambiente rural y una conexión con la naturaleza. Profesionales de distintos rubros brindan servicios en esta comunidad que busca el bienestar y la calidad de vida de sus habitantes.',
                'state_id' => 16
            ],
            [
                'name' => 'Chamizo',
                'description' => 'Chamizo es una localidad en el departamento de San José, con una identidad ligada a su historia y su gente. Profesionales de diversas disciplinas brindan servicios en esta comunidad que valora sus raíces culturales.',
                'state_id' => 16
            ],
            [
                'name' => 'Capurro',
                'description' => 'Capurro es una localidad en el departamento de San José, con una ubicación estratégica cerca de la capital. Profesionales de diferentes campos brindan servicios en esta comunidad que valora su conexión con la ciudad y su tranquilidad.',
                'state_id' => 16
            ],
            [
                'name' => 'Estación González',
                'description' => 'Estación González es una localidad en el departamento de San José, con una historia vinculada al ferrocarril. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que valora su patrimonio y su identidad.',
                'state_id' => 16
            ],
            [
                'name' => 'Rincón del Pino',
                'description' => 'Rincón del Pino es una localidad en el departamento de San José, con un ambiente rural y una vida tranquila. Profesionales de distintos rubros brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 16
            ],
            [
                'name' => 'Rincón de Gil',
                'description' => 'Rincón de Gil es una localidad en el departamento de San José, con un entorno rural y natural. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 16
            ]
            // Continúa con las demás localidades siguiendo el mismo formato...
        ];
        $sorianoLocalidades = [
            [
                'name' => 'Mercedes',
                'description' => 'Mercedes es la ciudad capital del departamento de Soriano, ubicada a orillas del río Negro. Es un centro administrativo, cultural y comercial donde profesionales de diversas áreas brindan servicios a la comunidad local.',
                'state_id' => 17
            ],
            [
                'name' => 'Dolores',
                'description' => 'Dolores es una ciudad en el departamento de Soriano, con una rica historia y tradiciones arraigadas. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora su identidad.',
                'state_id' => 17
            ],
            [
                'name' => 'Cardona',
                'description' => 'Cardona es una localidad en el departamento de Soriano, conocida por su ambiente tranquilo y su vínculo con la actividad agrícola. Profesionales de distintas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 17
            ],
            [
                'name' => 'José Enrique Rodó',
                'description' => 'José Enrique Rodó es una localidad en el departamento de Soriano, que lleva el nombre del destacado escritor uruguayo. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que valora la cultura y la educación.',
                'state_id' => 17
            ],
            [
                'name' => 'Palmitas',
                'description' => 'Palmitas es una localidad en el departamento de Soriano, con una ubicación pintoresca cerca del río Negro. Profesionales de diversas disciplinas brindan servicios en esta comunidad que busca la calidad de vida y el contacto con la naturaleza.',
                'state_id' => 17
            ],
            [
                'name' => 'Risso',
                'description' => 'Risso es una localidad en el departamento de Soriano, que se destaca por su tranquilidad y entorno rural. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 17
            ],
            [
                'name' => 'Agraciada',
                'description' => 'Agraciada es una localidad en el departamento de Soriano, con un nombre que evoca la Batalla de Rincón. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su historia y patrimonio.',
                'state_id' => 17
            ],
            [
                'name' => 'Santa Catalina',
                'description' => 'Santa Catalina es una localidad en el departamento de Soriano, con una atmósfera tranquila y entorno natural. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca el bienestar y la calidad de vida.',
                'state_id' => 17
            ],
            [
                'name' => 'Villa Soriano',
                'description' => 'Villa Soriano es una localidad en el departamento de Soriano, una de las más antiguas de Uruguay. Profesionales de distintos rubros brindan servicios en esta comunidad que valora su historia y su relación con el río.',
                'state_id' => 17
            ],
            [
                'name' => 'Egaña',
                'description' => 'Egaña es una localidad en el departamento de Soriano, con una ubicación estratégica cerca de la ciudad de Mercedes. Profesionales de diversas disciplinas atienden a los habitantes de esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 17
            ],
            [
                'name' => 'Cañada Nieto',
                'description' => 'Cañada Nieto es una localidad en el departamento de Soriano, que se destaca por su vida rural y su identidad campesina. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su entorno natural.',
                'state_id' => 17
            ],
            [
                'name' => 'Sacachispas',
                'description' => 'Sacachispas es una localidad en el departamento de Soriano, con una atmósfera tranquila y una ubicación cercana al río Negro. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que busca la calidad de vida.',
                'state_id' => 17
            ],
            [
                'name' => 'Nuevo Berlín',
                'description' => 'Nuevo Berlín es una localidad en el departamento de Soriano, que lleva el nombre de la capital alemana. Profesionales de diversas disciplinas brindan servicios en esta comunidad que valora su identidad y busca el desarrollo local.',
                'state_id' => 17
            ],
            [
                'name' => 'El Parao',
                'description' => 'El Parao es una localidad en el departamento de Soriano, con una ubicación cercana al río Negro. Profesionales de diferentes rubros atienden a los habitantes de esta comunidad que busca la tranquilidad y el bienestar.',
                'state_id' => 17
            ],
            [
                'name' => 'Rincón de la Bolsa',
                'description' => 'Rincón de la Bolsa es una localidad en el departamento de Soriano, con una ubicación estratégica cerca del río Negro. Profesionales de distintas áreas brindan servicios en esta comunidad que valora su entorno natural.',
                'state_id' => 17
            ],
            [
                'name' => 'Colonia 17 de Julio',
                'description' => 'Colonia 17 de Julio es una localidad en el departamento de Soriano, que lleva el nombre de la fecha patria. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca el desarrollo y el bienestar.',
                'state_id' => 17
            ],
            [
                'name' => 'San Gregorio de Polanco',
                'description' => 'San Gregorio de Polanco es una localidad en el departamento de Soriano, conocida por su relación con la cultura y las artes. Profesionales de distintos campos brindan servicios en esta comunidad que valora la creatividad y el turismo.',
                'state_id' => 17
            ],
            [
                'name' => 'Villa Darwin',
                'description' => 'Villa Darwin es una localidad en el departamento de Soriano, con una ubicación estratégica cerca de la ciudad de Mercedes. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca el bienestar y el desarrollo local.',
                'state_id' => 17
            ],
            [
                'name' => 'Villa Alesandria',
                'description' => 'Villa Alesandria es una localidad en el departamento de Soriano, con una atmósfera tranquila y un entorno rural. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 17
            ],
            [
                'name' => 'Colonia Lía',
                'description' => 'Colonia Lía es una localidad en el departamento de Soriano, con una ubicación cercana al río Negro. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca la tranquilidad y el bienestar.',
                'state_id' => 17
            ],
            [
                'name' => 'Villa María',
                'description' => 'Villa María es una localidad en el departamento de Soriano, con una ubicación cerca del río Negro. Profesionales de distintos rubros brindan servicios en esta comunidad que busca la calidad de vida y el contacto con la naturaleza.',
                'state_id' => 17
            ],
            [
                'name' => 'Santa Catalina',
                'description' => 'Santa Catalina es una localidad en el departamento de Soriano, con una atmósfera tranquila y entorno natural. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que busca el bienestar y la calidad de vida.',
                'state_id' => 17
            ],
            [
                'name' => 'Colonia San Pedro',
                'description' => 'Colonia San Pedro es una localidad en el departamento de Soriano, con una ubicación cercana al río Negro. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la vida tranquila y el contacto con la naturaleza.',
                'state_id' => 17
            ],
            [
                'name' => 'La Concordia',
                'description' => 'La Concordia es una localidad en el departamento de Soriano, con una atmósfera tranquila y un entorno rural. Profesionales de diferentes campos atienden a los habitantes de esta comunidad que busca el bienestar y la calidad de vida.',
                'state_id' => 17
            ],
            [
                'name' => 'La Nueva Palmira',
                'description' => 'La Nueva Palmira es una localidad en el departamento de Soriano, ubicada a orillas del río Uruguay. Profesionales de distintos rubros brindan servicios en esta comunidad que valora su ubicación estratégica y su actividad portuaria.',
                'state_id' => 17
            ],
        ];
        $tacuaremboLocalidades = [
            [
                'name' => 'Tacuarembó',
                'description' => 'Tacuarembó es la ciudad capital del departamento de Tacuarembó, ubicada en el norte de Uruguay. Es un centro administrativo, comercial y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 18
            ],
            [
                'name' => 'Paso de los Toros',
                'description' => 'Paso de los Toros es una ciudad en el departamento de Tacuarembó, con una ubicación estratégica a orillas del río Negro. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad con un enfoque en la calidad de vida.',
                'state_id' => 18
            ],
            [
                'name' => 'San Gregorio de Polanco',
                'description' => 'San Gregorio de Polanco es una ciudad en el departamento de Tacuarembó, conocida por su vínculo con el arte y la cultura. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la creatividad y la vida tranquila.',
                'state_id' => 18
            ],
            [
                'name' => 'Ansina',
                'description' => 'Ansina es una localidad en el departamento de Tacuarembó, con una atmósfera rural y apacible. Profesionales de distintos campos brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Curtina',
                'description' => 'Curtina es una localidad en el departamento de Tacuarembó, con un entorno rural y tranquilo. Profesionales de diversas áreas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 18
            ],
            [
                'name' => 'Clara',
                'description' => 'Clara es una localidad en el departamento de Tacuarembó, con una historia que la vincula a la cultura y la tradición. Profesionales de diferentes áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Rincón del Bonete',
                'description' => 'Rincón del Bonete es una localidad en el departamento de Tacuarembó, cerca de la represa homónima. Profesionales de distintos campos brindan servicios en esta comunidad que valora la vida junto al embalse.',
                'state_id' => 18
            ],
            [
                'name' => 'Tambores',
                'description' => 'Tambores es una localidad en el departamento de Tacuarembó, con una ubicación estratégica cerca de la frontera con Brasil. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 18
            ],
            [
                'name' => 'Caraguata',
                'description' => 'Caraguata es una localidad en el departamento de Tacuarembó, con una atmósfera rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 18
            ],
            [
                'name' => 'La Hilera',
                'description' => 'La Hilera es una localidad en el departamento de Tacuarembó, con un entorno rural y tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Las Toscas',
                'description' => 'Las Toscas es una localidad en el departamento de Tacuarembó, con una ubicación estratégica cerca de la represa Rincón del Bonete. Profesionales de distintos rubros atienden a los habitantes de esta comunidad junto al embalse.',
                'state_id' => 18
            ],
            [
                'name' => 'Valle Edén',
                'description' => 'Valle Edén es una localidad en el departamento de Tacuarembó, con un entorno natural y una vida apacible. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 18
            ],
            [
                'name' => 'Achar',
                'description' => 'Achar es una localidad en el departamento de Tacuarembó, con un ambiente rural y tranquilo. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Cuchilla de Peralta',
                'description' => 'Cuchilla de Peralta es una localidad en el departamento de Tacuarembó, con una historia rica en tradiciones. Profesionales de diferentes campos brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 18
            ],
            [
                'name' => 'Paso Bonilla',
                'description' => 'Paso Bonilla es una localidad en el departamento de Tacuarembó, con un ambiente rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Sauce de Batoví',
                'description' => 'Sauce de Batoví es una localidad en el departamento de Tacuarembó, con un entorno natural y una atmósfera tranquila. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la armonía con la naturaleza.',
                'state_id' => 18
            ],
            [
                'name' => 'Cardozo',
                'description' => 'Cardozo es una localidad en el departamento de Tacuarembó, con una historia que la vincula a la cultura y la tradición. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Balneario Iporá',
                'description' => 'Balneario Iporá es una localidad en el departamento de Tacuarembó, con una ubicación pintoresca junto al río Tacuarembó. Profesionales de distintos rubros brindan sus servicios en esta comunidad que valora el entorno natural.',
                'state_id' => 18
            ],
            [
                'name' => 'Moirones',
                'description' => 'Moirones es una localidad en el departamento de Tacuarembó, con un ambiente rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Pueblo Centenario',
                'description' => 'Pueblo Centenario es una localidad en el departamento de Tacuarembó, con una atmósfera tranquila y un entorno rural. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la cercanía con la naturaleza.',
                'state_id' => 18
            ],
            [
                'name' => 'Rincón del Pino',
                'description' => 'Rincón del Pino es una localidad en el departamento de Tacuarembó, con un ambiente rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Saucedo',
                'description' => 'Saucedo es una localidad en el departamento de Tacuarembó, con un ambiente rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Tranqueras',
                'description' => 'Tranqueras es una localidad en el departamento de Tacuarembó, con una ubicación estratégica cerca de la frontera con Brasil. Profesionales de diferentes áreas atienden a los habitantes de esta comunidad con intercambio comercial.',
                'state_id' => 18
            ],
            [
                'name' => 'La Pedrera',
                'description' => 'La Pedrera es una localidad en el departamento de Tacuarembó, con una ubicación cercana al río Tacuarembó. Profesionales de distintas áreas brindan servicios en esta comunidad que valora el entorno natural y la vida tranquila.',
                'state_id' => 18
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una localidad en el departamento de Tacuarembó, con un ambiente rural y tranquilo. Profesionales de diferentes campos brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Arroyo de los Ceibos',
                'description' => 'Arroyo de los Ceibos es una localidad en el departamento de Tacuarembó, con un ambiente rural y una vida apacible. Profesionales de distintas áreas brindan servicios en esta comunidad que busca la calidad de vida de sus habitantes.',
                'state_id' => 18
            ],
            [
                'name' => 'Barriga Negra',
                'description' => 'Barriga Negra es una localidad en el departamento de Tacuarembó, con un entorno natural y una atmósfera tranquila. Profesionales de diferentes campos brindan servicios en esta comunidad que valora la armonía con la naturaleza.',
                'state_id' => 18
            ],
            // Continúa con los demás pueblos y ciudades de Tacuarembó con sus descripciones...
        ];
        $localidadesTreintaYTres = [
            [
                'name' => 'Treinta y Tres',
                'description' => 'Treinta y Tres es la ciudad capital del departamento de Treinta y Tres, ubicada en el este de Uruguay. Es un centro administrativo y cultural donde profesionales de diversas áreas brindan sus servicios a la comunidad local.',
                'state_id' => 19
            ],
            [
                'name' => 'Vergara',
                'description' => 'Vergara es una localidad en el departamento de Treinta y Tres, con una ubicación pintoresca cerca del Río Olimar. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 19
            ],
            [
                'name' => 'Santa Clara de Olimar',
                'description' => 'Santa Clara de Olimar es una localidad en el departamento de Treinta y Tres, con una historia rica en tradiciones. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el bienestar de sus habitantes.',
                'state_id' => 19
            ],
            [
                'name' => 'Rincón',
                'description' => 'Rincón es una localidad en el departamento de Treinta y Tres, con un ambiente tranquilo y rural. Profesionales de distintos campos brindan servicios en esta comunidad que valora la calidad de vida de sus habitantes.',
                'state_id' => 19
            ],
            [
                'name' => 'Arrozal',
                'description' => 'Arrozal es una localidad en el departamento de Treinta y Tres, ubicada en la región agrícola del país. Profesionales de diferentes disciplinas atienden a los habitantes de esta comunidad que valora su identidad rural.',
                'state_id' => 19
            ],
            [
                'name' => 'Cerro Chato',
                'description' => 'Cerro Chato es una localidad en el departamento de Treinta y Tres, conocida por su topografía característica. Profesionales de diversas áreas brindan servicios en esta comunidad que busca el desarrollo y el bienestar de sus habitantes.',
                'state_id' => 19
            ],
            [
                'name' => 'Estación Atlántida',
                'description' => 'Estación Atlántida es una localidad en el departamento de Treinta y Tres, con una ubicación estratégica cerca del Río Olimar. Profesionales de distintos rubros atienden a los habitantes de esta comunidad.',
                'state_id' => 19
            ],
            [
                'name' => 'General Enrique Martínez',
                'description' => 'General Enrique Martínez es una localidad en el departamento de Treinta y Tres, con una historia vinculada a la cultura y la tradición. Profesionales de diferentes áreas brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 19
            ],
            [
                'name' => 'Isla Patrulla',
                'description' => 'Isla Patrulla es una localidad en el departamento de Treinta y Tres, con una ubicación particular cerca del Río Olimar. Profesionales de distintos rubros atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 19
            ],
            [
                'name' => 'Mendizábal',
                'description' => 'Mendizábal es una localidad en el departamento de Treinta y Tres, con un ambiente tranquilo y rural. Profesionales de diferentes disciplinas brindan servicios en esta comunidad que valora la vida en contacto con la naturaleza.',
                'state_id' => 19
            ],
            [
                'name' => 'María Albina',
                'description' => 'María Albina es una localidad en el departamento de Treinta y Tres, con una ubicación cercana al Río Olimar. Profesionales de diversas áreas atienden a los habitantes de esta comunidad que busca el bienestar y el desarrollo.',
                'state_id' => 19
            ],
            [
                'name' => 'Santa Isabel',
                'description' => 'Santa Isabel es una localidad en el departamento de Treinta y Tres, con una historia que la conecta con la cultura del lugar. Profesionales de distintos campos brindan servicios en esta comunidad que valora su identidad.',
                'state_id' => 19
            ],
            [
                'name' => 'Valentines',
                'description' => 'Valentines es una localidad en el departamento de Treinta y Tres, con una ubicación estratégica cerca del Río Olimar. Profesionales de diversas disciplinas atienden a los habitantes de esta comunidad que valora su entorno natural.',
                'state_id' => 19
            ],
        ];
        
        
        foreach ($localidadesArtigas as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesCanelones as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesColonia as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesDurazno as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesFlores as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesFlorida as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesLavalleja as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesMaldonado as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($barriosMontevideo as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesPaysandu as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesRioNegro as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesRivera as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesRocha as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesSalto as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesSanJose as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($sorianoLocalidades as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($tacuaremboLocalidades as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
        }
        foreach ($localidadesTreintaYTres as $city) {
            $city['url'] = $this->removeAccents($city['name']);
            City::create($city);
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
