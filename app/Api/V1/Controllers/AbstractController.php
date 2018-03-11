<?php

namespace App\Api\V1\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class BaseController
 *
 * @package App\Api\V1\Controllers
 *
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="lumen-api-core.local",
 *     basePath="/",
 *     definitions={},
 *     @SWG\Info(
 *         version="LAC 1.0.0",
 *         title="Lumen APIs",
 *         description="Base Lumen APIs",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="tan.nguyen.php@gmail.com"
 *         ),
 *         @SWG\License(
 *             name="TAN2.0",
 *             url="tannt.com"
 *         )
 *     ),
 *     @SWG\Definition(
 *         definition="data",
 *         type="object",
 *         properties={
 *             @SWG\Property(property="cus_id", type="integer"),
 *             @SWG\Property(property="whs_id", type="integer"),
 *             @SWG\Property(property="name", type="string"),
 *             @SWG\Property(property="description", type="string"),
 *         },
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="",
 *         url=""
 *     )
 * )
 */
abstract class AbstractController extends BaseController
{
    
}
