<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terapias = [
            [
                'name' => 'Adicciones',
                'description' => 'La terapia para adicciones es un enfoque que busca ayudar a las personas a superar comportamientos adictivos y dependencias nocivas. Los profesionales de este campo trabajan en colaboración con los pacientes para identificar las causas subyacentes de las adicciones y desarrollar estrategias efectivas para el cambio. Se emplean diversas técnicas, desde terapia cognitivo-conductual hasta terapia de grupo y enfoques basados en la motivación. El objetivo es lograr la recuperación, mejorar la calidad de vida y prevenir recaídas.',
                'category_id' => 1
            ],
            [
                'name' => 'Agorafobia',
                'description' => 'La terapia para la agorafobia se centra en el tratamiento del miedo intenso y evitación de situaciones específicas, como espacios abiertos o multitudes. Los terapeutas ayudan a los pacientes a enfrentar gradualmente sus temores a través de técnicas de exposición y desensibilización. Además, se trabajan las creencias y pensamientos negativos que mantienen la agorafobia. El objetivo es que las personas recuperen su libertad y calidad de vida, aprendiendo a manejar la ansiedad y evitando la evitación constante.',
                'category_id' => 1
            ],
            [
                'name' => 'Análisis de Sueños',
                'description' => 'El análisis de sueños en terapia busca explorar los contenidos del inconsciente a través de los sueños. Los terapeutas interpretan símbolos, emociones y narrativas presentes en los sueños para comprender aspectos ocultos de la mente. Esta herramienta puede revelar deseos, miedos y conflictos que influyen en la vida cotidiana. El proceso brinda insights valiosos para la autoexploración y el autoconocimiento. Los pacientes pueden descubrir patrones recurrentes y áreas de conflicto, lo que facilita el trabajo terapéutico en áreas como la resolución de problemas, la toma de decisiones y el crecimiento personal.',
                'category_id' => 1
            ],
            [
                'name' => 'Anorexia',
                'description' => 'La terapia para la anorexia se enfoca en tratar los desórdenes alimenticios y las distorsiones de la imagen corporal. Los profesionales trabajan con pacientes para abordar las causas subyacentes de la anorexia, como factores emocionales, sociales y psicológicos. Se emplea una combinación de enfoques, incluyendo terapia cognitivo-conductual, terapia de apoyo y terapia nutricional. El objetivo es restaurar una relación saludable con la comida, mejorar la autoestima y promover la recuperación física y mental.',
                'category_id' => 1
            ],
            [
                'name' => 'Ansiedad',
                'description' => 'La terapia para la ansiedad se centra en tratar los trastornos de ansiedad, como el trastorno de ansiedad generalizada, el trastorno de pánico y la fobia social. Los profesionales ayudan a los pacientes a identificar patrones de pensamiento y comportamiento que contribuyen a la ansiedad. Se emplean técnicas de relajación, respiración y exposición gradual para reducir los síntomas. Además, se trabajan estrategias de afrontamiento y manejo del estrés. El objetivo es mejorar la calidad de vida de los pacientes y proporcionar herramientas para enfrentar situaciones desafiantes.',
                'category_id' => 1
            ],
            [
                'name' => 'Arteterapia',
                'description' => 'La arteterapia es una forma de terapia que utiliza la expresión artística como medio para explorar emociones y problemas psicológicos. Los profesionales guían a los pacientes en la creación de arte como pinturas, esculturas y manualidades. A través de la creación artística, las personas pueden comunicar pensamientos y sentimientos que pueden ser difíciles de expresar con palabras. La arteterapia fomenta la autoexpresión, la autoexploración y la mejora de la autoestima. Puede ser beneficiosa para personas de todas las edades y se utiliza en diversos entornos terapéuticos.',
                'category_id' => 1
            ],
            [
                'name' => 'Autismo',
                'description' => 'La terapia para el autismo se enfoca en apoyar a las personas con trastorno del espectro autista (TEA) para mejorar sus habilidades sociales, comunicativas y de comportamiento. Se utilizan enfoques personalizados y estrategias que se adaptan a las necesidades individuales.',
                'category_id' => 1
            ],
            [
                'name' => 'Biodescodificacion',
                'description' => 'La biodescodificación es una terapia que busca comprender los mensajes emocionales detrás de las enfermedades y síntomas físicos. Se basa en la idea de que las emociones reprimidas pueden contribuir a problemas de salud y busca liberar esas emociones para mejorar el bienestar.',
                'category_id' => 1
            ],
            [
                'name' => 'Brainspotting',
                'description' => 'El brainspotting es una terapia que se enfoca en identificar y procesar traumas y bloqueos emocionales. A través de la observación de puntos oculares específicos, se busca acceder a memorias y emociones almacenadas en el cerebro para su liberación y sanación.',
                'category_id' => 1
            ],
            [
                'name' => 'Bullying',
                'description' => 'La terapia para el bullying se centra en ayudar a las víctimas de acoso escolar a enfrentar los efectos emocionales y psicológicos. También se trabaja con agresores para comprender y cambiar su comportamiento. El objetivo es promover un ambiente seguro y saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Coaching',
                'description' => 'El coaching es un proceso de acompañamiento personalizado que busca ayudar a las personas a alcanzar sus metas y potenciar su desarrollo personal y profesional. A través de técnicas y herramientas, el coach brinda apoyo y guía para superar obstáculos y lograr objetivos.',
                'category_id' => 1
            ],
            [
                'name' => 'Counseling',
                'description' => 'El counseling es una terapia de apoyo emocional que se enfoca en brindar un espacio seguro para que las personas puedan expresar sus sentimientos y preocupaciones. El consejero ofrece escucha activa y empatía para promover el bienestar mental y la toma de decisiones.',
                'category_id' => 1
            ],
            [
                'name' => 'Cristiano',
                'description' => 'La terapia cristiana integra principios de la fe cristiana con enfoques terapéuticos para abordar problemas emocionales y espirituales. Se basa en la creencia de que la conexión con Dios puede ser una fuente de sanación y fortaleza en momentos difíciles.',
                'category_id' => 1
            ],
            [
                'name' => 'Dependencia Emocional',
                'description' => 'La terapia para la dependencia emocional busca ayudar a las personas a liberarse de relaciones destructivas y patrones de comportamiento poco saludables. Se trabaja en el desarrollo de la autoestima, el autocuidado y la capacidad de establecer vínculos más equilibrados.',
                'category_id' => 1
            ],
            [
                'name' => 'Deportivo',
                'description' => 'La terapia deportiva se enfoca en el bienestar mental y emocional de los deportistas. Ayuda a gestionar la presión, mejorar el rendimiento y enfrentar lesiones. Además, aborda aspectos como la motivación, la concentración y la confianza en uno mismo.',
                'category_id' => 1
            ],
            [
                'name' => 'Depresión',
                'description' => 'La terapia para la depresión ayuda a las personas a comprender y manejar los síntomas de la depresión, como la tristeza persistente, la falta de interés y la pérdida de energía. Se utilizan enfoques terapéuticos para promover el cambio de pensamientos y comportamientos negativos.',
                'category_id' => 1
            ],
            [
                'name' => 'Depresión en adolescentes',
                'description' => 'La terapia para la depresión en adolescentes aborda los desafíos emocionales y psicológicos que enfrentan los jóvenes. Se brinda apoyo para lidiar con el estrés, la presión social y los cambios en la vida. También se fomenta la comunicación y el desarrollo de habilidades de afrontamiento.',
                'category_id' => 1
            ],
            [
                'name' => 'Depresión posparto',
                'description' => 'La terapia para la depresión posparto ofrece apoyo a las mujeres que experimentan síntomas depresivos después del parto. Se trabaja en la identificación de emociones, la gestión del estrés y la creación de estrategias para cuidar la salud mental durante la maternidad.',
                'category_id' => 1
            ],
            [
                'name' => 'Duelo',
                'description' => 'La terapia de duelo brinda acompañamiento a las personas que han perdido a un ser querido. Ayuda a procesar el dolor, la tristeza y las emociones asociadas al duelo. Se trabaja en encontrar formas saludables de afrontar la pérdida y adaptarse a la vida sin la persona fallecida.',
                'category_id' => 1
            ],
            [
                'name' => 'EMDR',
                'description' => 'El EMDR (Desensibilización y Reprocesamiento por Movimientos Oculares) es una terapia que se utiliza para tratar trastornos de estrés postraumático y otros problemas relacionados con traumas. Se basa en la estimulación bilateral del cerebro para procesar y sanar las experiencias traumáticas.',
                'category_id' => 1
            ],
            [
                'name' => 'Enfermedad Crónica',
                'description' => 'La terapia para enfermedades crónicas aborda los aspectos emocionales y psicológicos de vivir con una condición de salud a largo plazo. Se trabaja en la adaptación, la gestión del estrés, el autocuidado y el desarrollo de estrategias para mejorar la calidad de vida.',
                'category_id' => 1
            ],
            [
                'name' => 'Especialista en Alimentación',
                'description' => 'La terapia con especialización en alimentación se centra en los hábitos alimentarios y la relación de las personas con la comida. Se brinda apoyo para abordar la alimentación emocional, trastornos alimentarios y establecer una relación saludable con la comida y el cuerpo.',
                'category_id' => 1
            ],
            [
                'name' => 'Estrés',
                'description' => 'La terapia para el estrés ayuda a las personas a manejar las tensiones y presiones de la vida cotidiana. Se trabajan estrategias de relajación, técnicas de afrontamiento y cambios en el estilo de vida para reducir los efectos negativos del estrés en la salud mental.',
                'category_id' => 1
            ],
            [
                'name' => 'Estrés Laboral',
                'description' => 'La terapia para el estrés laboral aborda los desafíos y tensiones relacionados con el entorno de trabajo. Se brinda apoyo para mejorar la gestión del tiempo, la comunicación efectiva y el equilibrio entre el trabajo y la vida personal.',
                'category_id' => 1
            ],
            [
                'name' => 'Estrés Postraumático',
                'description' => 'La terapia para el estrés postraumático se enfoca en ayudar a las personas que han experimentado traumas intensos. Se utilizan enfoques terapéuticos para reducir los síntomas traumáticos, mejorar la regulación emocional y promover la recuperación.',
                'category_id' => 1
            ],
            [
                'name' => 'Familiar',
                'description' => 'La terapia familiar se centra en mejorar las relaciones y la comunicación dentro de las familias. Se trabajan conflictos, dinámicas familiares y roles para crear un ambiente más saludable y funcional. Puede ser beneficiosa para resolver problemas y mejorar la convivencia.',
                'category_id' => 1
            ],
            [
                'name' => 'Forense',
                'description' => 'La terapia forense se relaciona con la evaluación psicológica en contextos legales. Se brinda apoyo en casos judiciales, evaluaciones de riesgo y análisis psicológicos de situaciones legales. Puede abordar temas como la violencia, la delincuencia y la salud mental en el sistema legal.',
                'category_id' => 1
            ],
            [
                'name' => 'Gestalt',
                'description' => 'La terapia Gestalt se enfoca en la conciencia del momento presente y en la integración de las emociones y experiencias. Se trabaja en la autorreflexión, la autenticidad y la toma de responsabilidad personal para promover un mayor bienestar emocional.',
                'category_id' => 1
            ],
            [
                'name' => 'Hipnosis',
                'description' => 'La terapia de hipnosis utiliza técnicas de trance para acceder al subconsciente y promover cambios en pensamientos, comportamientos y emociones. Se utiliza para tratar una variedad de problemas, como fobias, adicciones y estrés.',
                'category_id' => 1
            ],
            [
                'name' => 'Infantil',
                'description' => 'La terapia infantil se adapta para trabajar con niños y adolescentes. Se utilizan enfoques creativos y lúdicos para abordar problemas emocionales, de comportamiento y de desarrollo en estas etapas tempranas de la vida.',
                'category_id' => 1
            ],
            [
                'name' => 'Insomnio',
                'description' => 'La terapia para el insomnio se centra en mejorar los hábitos de sueño y abordar los factores que contribuyen a la dificultad para dormir. Se brindan estrategias para mejorar la higiene del sueño y promover un descanso más saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Judicial',
                'description' => 'La terapia judicial se relaciona con el sistema legal y ofrece apoyo psicológico en casos legales. Se pueden realizar evaluaciones forenses, terapia de rehabilitación y asesoramiento para individuos involucrados en procesos judiciales.',
                'category_id' => 1
            ],
            [
                'name' => 'Junguiano',
                'description' => 'La terapia junguiana se basa en la teoría de Carl Jung y explora el inconsciente colectivo y los arquetipos. Se trabaja en la autodescubierta, la interpretación de los sueños y la integración de los aspectos inconscientes de la psique.',
                'category_id' => 1
            ],
            [
                'name' => 'Laboral',
                'description' => 'La terapia laboral aborda los desafíos y el estrés relacionado con el trabajo. Se trabajan problemas como el agotamiento laboral, el conflicto en el lugar de trabajo y la gestión del equilibrio entre la vida laboral y personal.',
                'category_id' => 1
            ],
            [
                'name' => 'LGBTIQ+',
                'description' => 'La terapia LGBTIQ+ se enfoca en brindar apoyo a personas lesbianas, gays, bisexuales, transgénero, intersexuales y queer. Se abordan cuestiones de identidad de género, orientación sexual y los desafíos específicos que enfrenta esta comunidad.',
                'category_id' => 1
            ],
            [
                'name' => 'Logoterapia',
                'description' => 'La logoterapia se basa en la búsqueda de un sentido en la vida y en la importancia de encontrar significado en las experiencias. Se enfoca en ayudar a las personas a descubrir su propósito y afrontar la angustia existencial.',
                'category_id' => 1
            ],
            [
                'name' => 'Ludopatía',
                'description' => 'La terapia para la ludopatía se dirige a personas con problemas de juego patológico o adicción al juego. Se brindan estrategias para el control de impulsos, el cambio de comportamiento y la recuperación de la adicción al juego.',
                'category_id' => 1
            ],
            [
                'name' => 'Meditación',
                'description' => 'La terapia de meditación se centra en la práctica de la atención plena y la meditación para reducir el estrés, la ansiedad y mejorar el bienestar emocional. Se enseñan técnicas de meditación para promover la relajación y la calma mental.',
                'category_id' => 1
            ],
            [
                'name' => 'Mindfulness',
                'description' => 'El mindfulness es una práctica que implica prestar atención plena y consciente al momento presente. Se utiliza en la terapia para reducir el estrés, mejorar la concentración y la autorregulación emocional.',
                'category_id' => 1
            ],
            [
                'name' => 'Mitomanía',
                'description' => 'La terapia para la mitomanía se enfoca en tratar el trastorno de la mentira compulsiva. Se brindan herramientas para comprender y manejar la tendencia a la mentira patológica, promoviendo una comunicación honesta y saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Neuropsicología',
                'description' => 'La neuropsicología se relaciona con la relación entre el cerebro y el comportamiento. Se utilizan evaluaciones y técnicas para comprender y tratar trastornos neuropsicológicos, como traumatismos cerebrales, deterioro cognitivo y más.',
                'category_id' => 1
            ],
            [
                'name' => 'Para Sordos',
                'description' => 'La terapia para sordos se adapta a personas con discapacidad auditiva. Se utilizan métodos visuales y táctiles para la comunicación y el apoyo emocional. Se busca mejorar la calidad de vida y promover la inclusión en la sociedad.',
                'category_id' => 1
            ],
            [
                'name' => 'Perinatal',
                'description' => 'La terapia perinatal se centra en brindar apoyo emocional y psicológico a mujeres durante el embarazo y el período posparto. Se abordan cuestiones como la ansiedad, la depresión posparto y los desafíos de la maternidad.',
                'category_id' => 1
            ],
            [
                'name' => 'Perspectiva de Género',
                'description' => 'La terapia con perspectiva de género considera las influencias sociales, culturales y de género en la salud mental y el bienestar. Se trabaja para comprender y abordar cuestiones específicas relacionadas con la identidad y la experiencia de género.',
                'category_id' => 1
            ],
            [
                'name' => 'Psicoanálisis',
                'description' => 'El psicoanálisis se basa en el estudio del inconsciente y la exploración de los procesos mentales profundos. Se busca comprender y resolver conflictos emocionales y patrones de comportamiento inconscientes.',
                'category_id' => 1
            ],
            [
                'name' => 'Psicología Médica',
                'description' => 'La psicología médica se centra en el aspecto psicológico de las enfermedades médicas. Se trabaja en colaboración con profesionales de la salud para brindar apoyo emocional a pacientes y mejorar la gestión de la salud.',
                'category_id' => 1
            ],
            [
                'name' => 'Psicología Positiva',
                'description' => 'La psicología positiva se enfoca en promover el bienestar y la felicidad. Se trabajan fortalezas y virtudes personales para mejorar la calidad de vida y fomentar el desarrollo personal.',
                'category_id' => 1
            ],
            [
                'name' => 'Psiconeuroinmunoendocrinología',
                'description' => 'La psiconeuroinmunoendocrinología se relaciona con la influencia de las emociones y el estrés en el sistema nervioso, el sistema inmunológico y el sistema endocrino. Se busca entender la interacción entre la mente y el cuerpo.',
                'category_id' => 1
            ],
            [
                'name' => 'Psicosomático',
                'description' => 'La terapia psicosomática se enfoca en la relación entre la mente y el cuerpo en el desarrollo de enfermedades físicas. Se busca comprender cómo los factores emocionales y psicológicos pueden influir en la salud y el bienestar.',
                'category_id' => 1
            ],
            [
                'name' => 'Salud Mental',
                'description' => 'La terapia de salud mental se centra en promover y mantener un estado de bienestar emocional, psicológico y social. Se trabaja en el manejo de problemas de salud mental y en la mejora de la calidad de vida.',
                'category_id' => 1
            ],
            [
                'name' => 'Sentido de la Vida',
                'description' => 'La terapia del sentido de la vida busca ayudar a las personas a encontrar propósito y significado en sus vidas. Se exploran cuestiones existenciales y se trabaja en la búsqueda de satisfacción y realización personal.',
                'category_id' => 1
            ],
            [
                'name' => 'Sexología',
                'description' => 'La terapia sexual se enfoca en abordar cuestiones relacionadas con la sexualidad y las relaciones íntimas. Se trabaja en resolver problemas sexuales, mejorar la comunicación y promover una sexualidad saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Suicidio',
                'description' => 'La terapia de prevención del suicidio busca brindar apoyo a personas en riesgo de suicidio. Se trabaja en identificar factores de riesgo, ofrecer apoyo emocional y desarrollar estrategias de afrontamiento.',
                'category_id' => 1
            ],
            [
                'name' => 'TDAH',
                'description' => 'La terapia para el trastorno por déficit de atención e hiperactividad (TDAH) se enfoca en abordar los desafíos de la atención y la impulsividad. Se trabajan estrategias para mejorar el rendimiento académico y el funcionamiento diario.',
                'category_id' => 1
            ],
            [
                'name' => 'TEPT',
                'description' => 'La terapia para el trastorno de estrés postraumático (TEPT) se centra en abordar las secuelas emocionales y psicológicas de experiencias traumáticas. Se trabajan técnicas para superar el trauma y recuperar el bienestar.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapia Cognitivo Conductual',
                'description' => 'La terapia cognitivo conductual (TCC) se centra en identificar y cambiar patrones de pensamiento y comportamiento negativos. Se trabaja en la resolución de problemas, el manejo de emociones y la promoción del bienestar.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapia DBT',
                'description' => 'La terapia dialéctico conductual (DBT) se enfoca en el desarrollo de habilidades de regulación emocional y la aceptación de pensamientos y emociones. Se utiliza especialmente para tratar trastornos como el borderline.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapia de Pareja',
                'description' => 'La terapia de pareja se centra en mejorar la comunicación y resolver conflictos en las relaciones amorosas. Se trabajan aspectos como la intimidad, la confianza y la construcción de una relación saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapia Sistémica',
                'description' => 'La terapia sistémica se basa en el enfoque de sistemas y se trabaja con individuos, familias o parejas. Se busca comprender cómo los problemas se desarrollan en un contexto más amplio y promover cambios positivos en las relaciones.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapia Vocacional',
                'description' => 'La terapia vocacional se enfoca en ayudar a las personas a identificar sus intereses, habilidades y metas profesionales. Se brinda orientación para la elección de carreras y el desarrollo de una vida laboral satisfactoria.',
                'category_id' => 1
            ],
            [
                'name' => 'Terapias Alternativas',
                'description' => 'Las terapias alternativas engloban enfoques diversos que complementan la medicina tradicional. Incluyen prácticas como la acupuntura, la meditación, el reiki y otros enfoques holísticos para promover la salud y el bienestar.',
                'category_id' => 1
            ],
            [
                'name' => 'TOC',
                'description' => 'La terapia para el trastorno obsesivo compulsivo (TOC) se enfoca en abordar los pensamientos obsesivos y los comportamientos compulsivos. Se trabajan estrategias para reducir la ansiedad y mejorar la calidad de vida.',
                'category_id' => 1
            ],
            [
                'name' => 'Transpersonal',
                'description' => 'La terapia transpersonal se centra en aspectos espirituales y de crecimiento personal. Explora la conexión entre la mente, el cuerpo y el espíritu, y busca la expansión de la conciencia y la comprensión profunda de uno mismo.',
                'category_id' => 1
            ],
            [
                'name' => 'Trastornos Alimenticios',
                'description' => 'La terapia para trastornos alimenticios se enfoca en abordar problemas relacionados con la alimentación y la imagen corporal. Se trabaja en la relación con la comida y el cuerpo, y se promueve una relación saludable con la comida.',
                'category_id' => 1
            ],
            [
                'name' => 'Trastornos de Personalidad',
                'description' => 'La terapia para trastornos de personalidad se centra en abordar patrones de pensamiento y comportamiento disfuncionales. Se trabaja en el manejo de emociones, la relación con los demás y la construcción de una identidad más saludable.',
                'category_id' => 1
            ],
            [
                'name' => 'Violencia de Género',
                'description' => 'La terapia para la violencia de género se enfoca en abordar situaciones de abuso y violencia en relaciones. Se busca empoderar a las víctimas, promover la seguridad y brindar apoyo para superar el trauma.',
                'category_id' => 1
            ]
        ];
        
         foreach ($terapias as $terapia) {
            $terapia['url'] = $this->removeAccents($terapia['name']);
            Subcategory::create($terapia);
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
