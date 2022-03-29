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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 购买商品信息
 *
 * @method string getProductName() 获取商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductName() 获取商品细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductName(string $SubProductName) 设置商品细节
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageDetails extends AbstractModel
{
    /**
     * @var string 商品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 商品细节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductName;

    /**
     * @param string $ProductName 商品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductName 商品细节
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }
    }
}
