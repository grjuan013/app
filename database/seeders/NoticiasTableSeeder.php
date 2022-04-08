<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;



class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->delete();

        DB::table('noticias')->insert([
            'imagen'=>'https://www.elespectador.com/resizer/-m-gBMLNjkqAq7lmSgDBp_wQjTE=/952x637/filters:format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/UEAKOX6DLJFZTB4TANWGMUWYN4.jpg',
            'encabezado'=>'IPCC: seis conclusiones del informe de la ONU sobre mitigación del cambio climático',
            'resumen'=>'IPCC: Las emisiones generadas por actividades humanas continuaron incrementando entre 2010 y 2019. Informe ONU',
            'autor'=>'María Mónica Monsalve',
            'fecha'=>'2022-04-04',
            'url_noticia' => 'https://www.elespectador.com/ambiente/ipcc-seis-conclusiones-del-informe-de-la-onu-sobre-mitigacion-del-cambio-climatico-noticias-hoy/'
        ]);
        DB::table('noticias')->insert([
            'imagen'=>'https://www.elespectador.com/resizer/W93GJHKHGxwoeE0OsKJMApcpLh0=/525x350/filters:format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/OEDKW277AJCVJMGOWDVF5NSQHQ.JPG',
            'encabezado'=>'Entre carbón y metales pesados: la ciudad-vertedero del sur de Chile',
            'resumen'=>'Propiedad del Grupo Enel, el recinto ha acopiado por años los residuos de las termoeléctricas Bocamina I y Bocamina II, contaminando con metales pesados a la población y el medioambiente, bajo el amparo de las autoridades chilenas.',
            'autor'=>'María José Campano Abásolo',
            'fecha'=>'2022-04-03',
            'url_noticia' => 'https://www.elespectador.com/ambiente/entre-carbon-y-metales-pesados-la-ciudad-vertedero-del-sur-de-chile/'
        ]);
        DB::table('noticias')->insert([
            'imagen'=>'https://www.elespectador.com/resizer/KiplEqGuuO0BWLMIPK7DRSXwK_c=/525x350/filters:format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/G52FH6PEIFEGROGZF7HOQ7YPOM.jpg',
            'encabezado'=>'Las dudas sobre el “fracking” que revivió la licencia ambiental a piloto de Ecopetrol',
            'resumen'=>'Aunque se trata de un proyecto de investigación, cuyo fin es recoger información, a los científicos les preocupa que el proyecto piloto Kalé esté ubicado sobre un complejo cenagoso, lo que podría afectar el corredor biológico del manatí.',
            'autor'=>'Daniela Quintero Díaz',
            'fecha'=>'2022-04-02',
            'url_noticia' => 'https://www.elespectador.com/investigacion/las-dudas-sobre-el-fracking-que-revivio-la-licencia-ambiental-a-piloto-de-ecopetrol/'
        ]);
    }
}
