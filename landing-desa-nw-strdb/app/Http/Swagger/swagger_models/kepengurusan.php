<?php

/**
  * @OA\Get(
  *      path="/v1/entities/kepengurusan",
  *      operationId="browseKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Browse Kepengurusan",
  *      description="Returns list of Kepengurusan",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/kepengurusan/read?slug=kepengurusan&id={id}",
  *      operationId="readKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Get Kepengurusan based on id",
  *      description="Returns Kepengurusan based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/kepengurusan/add",
  *      operationId="addKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Insert new Kepengurusan",
  *      description="Insert new Kepengurusan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "images":"Abc", "noTelp":"Abc", "nik":"Abc", "jabatan":"Abc", "noSk":"Abc", "ttl":"Abc", "gender":"Abc", "golonganDarah":"Abc", "agama":"Abc", "kewarganegaraan":"Abc", "status":"Abc", "isKades":"123"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/kepengurusan/edit",
  *      operationId="editKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Edit an existing Kepengurusan",
  *      description="Edit an existing Kepengurusan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nama":"Abc", "images":"Abc", "noTelp":"Abc", "nik":"Abc", "jabatan":"Abc", "noSk":"Abc", "ttl":"Abc", "gender":"Abc", "golonganDarah":"Abc", "agama":"Abc", "kewarganegaraan":"Abc", "status":"Abc", "isKades":"123"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/kepengurusan/delete",
  *      operationId="deleteKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Delete one record of Kepengurusan",
  *      description="Delete one record of Kepengurusan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="kepengurusan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/kepengurusan/delete-multiple",
  *      operationId="deleteMultipleKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Delete multiple record of Kepengurusan",
  *      description="Delete multiple record of Kepengurusan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="kepengurusan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="ids"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/kepengurusan/sort",
  *      operationId="sortKepengurusan",
  *      tags={"kepengurusan"},
  *      summary="Sort existing Kepengurusan",
  *      description="Sort existing Kepengurusan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="kepengurusan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nama":"Abc", "images":"Abc", "noTelp":"Abc", "nik":"Abc", "jabatan":"Abc", "noSk":"Abc", "ttl":"Abc", "gender":"Abc", "golonganDarah":"Abc", "agama":"Abc", "kewarganegaraan":"Abc", "status":"Abc", "isKades":"123", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nama":"Abc", "images":"Abc", "noTelp":"Abc", "nik":"Abc", "jabatan":"Abc", "noSk":"Abc", "ttl":"Abc", "gender":"Abc", "golonganDarah":"Abc", "agama":"Abc", "kewarganegaraan":"Abc", "status":"Abc", "isKades":"123", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nama"), 
  *                         @OA\Property(type="string", property="images"), 
  *                         @OA\Property(type="string", property="noTelp"), 
  *                         @OA\Property(type="string", property="nik"), 
  *                         @OA\Property(type="string", property="jabatan"), 
  *                         @OA\Property(type="string", property="noSk"), 
  *                         @OA\Property(type="string", property="ttl"), 
  *                         @OA\Property(type="string", property="gender"), 
  *                         @OA\Property(type="string", property="golonganDarah"), 
  *                         @OA\Property(type="string", property="agama"), 
  *                         @OA\Property(type="string", property="kewarganegaraan"), 
  *                         @OA\Property(type="string", property="status"), 
  *                         @OA\Property(type="integer", property="isKades"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */