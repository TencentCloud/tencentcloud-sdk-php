<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos类型的api配置
 *
 * @method string getAction() 获取API调用后端COS的方式，前端请求方法与Action的可选值为：
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置API调用后端COS的方式，前端请求方法与Action的可选值为：
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取API后端COS的存储桶名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置API后端COS的存储桶名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuthorization() 获取API调用后端COS的签名开关，默认为false。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorization(boolean $Authorization) 设置API调用后端COS的签名开关，默认为false。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathMatchMode() 获取API后端COS的路径匹配模式，可选值：
BackEndPath ： 后端路径匹配
FullPath ： 全路径匹配

默认值为：BackEndPath
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathMatchMode(string $PathMatchMode) 设置API后端COS的路径匹配模式，可选值：
BackEndPath ： 后端路径匹配
FullPath ： 全路径匹配

默认值为：BackEndPath
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosConfig extends AbstractModel
{
    /**
     * @var string API调用后端COS的方式，前端请求方法与Action的可选值为：
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string API后端COS的存储桶名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var boolean API调用后端COS的签名开关，默认为false。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authorization;

    /**
     * @var string API后端COS的路径匹配模式，可选值：
BackEndPath ： 后端路径匹配
FullPath ： 全路径匹配

默认值为：BackEndPath
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathMatchMode;

    /**
     * @param string $Action API调用后端COS的方式，前端请求方法与Action的可选值为：
GET：GetObject
PUT：PutObject
POST：PostObject、AppendObject
HEAD： HeadObject
DELETE： DeleteObject。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName API后端COS的存储桶名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Authorization API调用后端COS的签名开关，默认为false。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathMatchMode API后端COS的路径匹配模式，可选值：
BackEndPath ： 后端路径匹配
FullPath ： 全路径匹配

默认值为：BackEndPath
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("PathMatchMode",$param) and $param["PathMatchMode"] !== null) {
            $this->PathMatchMode = $param["PathMatchMode"];
        }
    }
}
