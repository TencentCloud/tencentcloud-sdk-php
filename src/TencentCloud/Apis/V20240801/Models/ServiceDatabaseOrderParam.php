<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ServiceDatabaseOrderParam
 *
 * @method string getFieldName() 获取<p>字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldName(string $FieldName) 设置<p>字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrder() 获取<p>排序 asc desc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrder(string $Order) 设置<p>排序 asc desc</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceDatabaseOrderParam extends AbstractModel
{
    /**
     * @var string <p>字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldName;

    /**
     * @var string <p>排序 asc desc</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Order;

    /**
     * @param string $FieldName <p>字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Order <p>排序 asc desc</p>
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
