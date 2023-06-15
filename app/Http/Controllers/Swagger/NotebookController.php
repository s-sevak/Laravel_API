<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UpdateRequest;


/**
 * @OA\Post(
 *     path="/api/notebooks",
 *     summary="Создание",
 *     tags={"Notebook"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="Full_name", type="string", example="Alice Johnson"),
 *                     @OA\Property(property="Company", type="string", example="XYZ Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="9876543210"),
 *                     @OA\Property(property="Email", type="string", example="alice@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1995-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo-data"),
 *                 ),
 *             }
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="data", type="object",
 *                     @OA\Property(property="id", type="integer", example=4),
 *                     @OA\Property(property="Full_name", type="string", example="Michael Smith"),
 *                     @OA\Property(property="Company", type="string", example="DEF Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="5551234567"),
 *                     @OA\Property(property="Email", type="string", example="michael@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1988-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo2-data"),
 *                ),
 *        ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/notebooks",
 *     summary="Список",
 *     tags={"Notebook"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="data", type="array", @OA\Items(
 *                     @OA\Property(property="id", type="integer", example=4),
 *                     @OA\Property(property="Full_name", type="string", example="Michael Smith"),
 *                     @OA\Property(property="Company", type="string", example="DEF Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="5551234567"),
 *                     @OA\Property(property="Email", type="string", example="michael@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1988-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo2-data"),
 *                )),
 *        ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/notebooks/{notebook}",
 *     summary="Еденичная запись",
 *     tags={"Notebook"},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1,
 *     ),

 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="data", type="object",
 *                     @OA\Property(property="id", type="integer", example=4),
 *                     @OA\Property(property="Full_name", type="string", example="Michael Smith"),
 *                     @OA\Property(property="Company", type="string", example="DEF Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="5551234567"),
 *                     @OA\Property(property="Email", type="string", example="michael@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1988-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo2-data"),
 *                ),
 *        ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/notebooks/{notebook}",
 *     summary="Обновление",
 *     tags={"Notebook"},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1,
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="Full_name", type="string", example="Alice Johnson"),
 *                     @OA\Property(property="Company", type="string", example="XYZ Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="9876543210"),
 *                     @OA\Property(property="Email", type="string", example="alice@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1995-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo-data"),
 *                 ),
 *             }
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="data", type="object",
 *                     @OA\Property(property="id", type="integer", example=4),
 *                     @OA\Property(property="Full_name", type="string", example="Michael Smith"),
 *                     @OA\Property(property="Company", type="string", example="DEF Corporation"),
 *                     @OA\Property(property="Phone", type="string", example="5551234567"),
 *                     @OA\Property(property="Email", type="string", example="michael@example.com"),
 *                     @OA\Property(property="BirthDate", type="string", example="1988-05-15"),
 *                     @OA\Property(property="Photo", type="string", example="base64-encoded-photo2-data"),
 *                ),
 *        ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/notebooks/{notebook}",
 *     summary="Удаление",
 *     tags={"Notebook"},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1,
 *     ),

 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                 @OA\Property(property="message", type="string", example="done"),
 *        ),
 *     ),
 * ),
 */
class NotebookController extends Controller
{

}
