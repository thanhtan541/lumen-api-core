<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Controllers\AbstractController;

/**
 * Class ExampleController
 *
 * @package App\Api\V1\Controllers
 */
class ExampleController extends AbstractController
{
    public function __construct()
    {
        # code...
    }
    
    /**
     * @SWG\Get(
     *     tags={"Test"},
     *     path="/v1/example",
     *     summary="Test Api",
     *     description="Test Swagger View",
     *     operationId="",
     *     consumes={"application/x-www-form-urlencoded"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         in="path",
     *         name="menuId",
     *         description="Menu Id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Return json test",
     *         @SWG\Schema(
     *             type="object",
     *             @SWG\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Menu Fields",
     *                 properties={
     *                     @SWG\Property(property="test_id", type="integer"),
     *                     @SWG\Property(property="test_group_id", type="integer"),
     *                     @SWG\Property(property="name", type="string"),
     *                     @SWG\Property(property="description", type="string"),
     *                 }
     *             ),
     *         ),
     *         examples={
     *             "data": {
     *                 {
     *                     "test_id": 1,
     *                     "test_group_id": 1,
     *                     "name": "Test string",
     *                     "description": "This is example from Swagger",
     *                 }
     *             }
     *         },
     *     ),
     *     @SWG\Response(response=400, description="Show Error message"),
     * )
     */
    /**
     * Test
     *
     * @param
     *
     * @return mixed
     */
    public function test()
    {
        # code...
    }
}
