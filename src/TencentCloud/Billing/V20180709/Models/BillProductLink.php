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
 * 分账条件子产品筛选
 *
 * @method string getProductCode() 获取子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置子产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCodeName() 获取子产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取组件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置组件名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillProductLink extends AbstractModel
{
    /**
     * @var string 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string 子产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCodeName;

    /**
     * @var array 组件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @param string $ProductCode 子产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCodeName 子产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 组件名称
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new BillItem();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
