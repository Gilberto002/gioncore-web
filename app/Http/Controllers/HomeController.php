<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'NeuralPay',
                'category' => 'IA Financiera',
                'description' => 'Plataforma de procesamiento de pagos potenciada por IA que detecta fraudes en tiempo real con 99.97% de precisión.',
                'tech' => ['Python', 'TensorFlow', 'Laravel', 'Vue'],
                'year' => '2024',
                'results' => ['$2.4B procesados', '99.97% precisión', '0.3ms latencia'],
                'image' => '/assets/projects/neuralpay.jpg',
            ],
            [
                'id' => 2,
                'title' => 'HealthCore AI',
                'category' => 'Salud & IA',
                'description' => 'Sistema de diagnóstico médico asistido por inteligencia artificial para hospitales de primer nivel en LATAM.',
                'tech' => ['PyTorch', 'React Native', 'Node.js', 'AWS'],
                'year' => '2024',
                'results' => ['340 hospitales', '1.2M diagnósticos', '94% exactitud'],
                'image' => '/assets/projects/healthcore.jpg',
            ],
            [
                'id' => 3,
                'title' => 'LogistiX',
                'category' => 'Logística & Automatización',
                'description' => 'Motor de optimización de rutas con IA para flotas de distribución. Reduce costos hasta un 38% en operaciones.',
                'tech' => ['Go', 'Kafka', 'Vue', 'PostgreSQL'],
                'year' => '2023',
                'results' => ['38% ahorro', '500+ flotas', '12 países'],
                'image' => '/assets/projects/logistix.jpg',
            ],
            [
                'id' => 4,
                'title' => 'LexisCore',
                'category' => 'LegalTech',
                'description' => 'Plataforma de análisis legal con LLMs que procesa contratos y jurisprudencia en segundos.',
                'tech' => ['GPT-4', 'Laravel', 'Elasticsearch', 'Docker'],
                'year' => '2023',
                'results' => ['80% tiempo ahorrado', '200 firmas', '1M docs'],
                'image' => '/assets/projects/lexiscore.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Orbita ERP',
                'category' => 'Enterprise Software',
                'description' => 'Suite ERP de nueva generación con módulos de predicción de demanda e inventario inteligente.',
                'tech' => ['Laravel', 'Vue 3', 'MySQL', 'Redis'],
                'year' => '2024',
                'results' => ['45% eficiencia', '3 países', 'Tiempo real'],
                'image' => '/assets/projects/orbita.jpg',
            ],
        ];

        $services = [
            ['icon' => 'brain', 'title' => 'Inteligencia Artificial', 'description' => 'Modelos de ML/DL a medida, LLMs, visión computacional y procesamiento del lenguaje natural integrados en tu negocio.'],
            ['icon' => 'code', 'title' => 'Desarrollo de Software', 'description' => 'Arquitecturas escalables, APIs robustas y sistemas de alta disponibilidad construidos con las mejores prácticas de la industria.'],
            ['icon' => 'mobile', 'title' => 'Apps Móviles', 'description' => 'Aplicaciones nativas e híbridas para iOS y Android con experiencias de usuario excepcionales.'],
            ['icon' => 'cloud', 'title' => 'Cloud & DevOps', 'description' => 'Infraestructura en la nube, CI/CD, orquestación de contenedores y arquitecturas serverless de clase enterprise.'],
            ['icon' => 'shield', 'title' => 'Ciberseguridad', 'description' => 'Auditorías de seguridad, penetration testing y arquitecturas Zero Trust para proteger tus activos digitales.'],
            ['icon' => 'chart', 'title' => 'Data & Analytics', 'description' => 'Pipelines de datos, dashboards en tiempo real y modelos predictivos que convierten datos en decisiones.'],
        ];

        $team = [
            ['name' => 'Giovanni Reyes', 'role' => 'CEO & Founder', 'bio' => 'Arquitecto de software con 15 años construyendo productos que escalan globalmente.'],
            ['name' => 'Ana Martínez', 'role' => 'CTO & AI Lead', 'bio' => 'PhD en Machine Learning. Ex-investigadora en DeepMind y Google Brain.'],
            ['name' => 'Carlos Vega', 'role' => 'Head of Engineering', 'bio' => 'Especialista en sistemas distribuidos y arquitecturas de microservicios de alto tráfico.'],
            ['name' => 'Sofía Hernández', 'role' => 'Head of Design', 'bio' => 'Diseñadora de experiencias digitales premiada internacionalmente en 12 países.'],
        ];

        return view('app', compact('projects', 'services', 'team'));
    }
}