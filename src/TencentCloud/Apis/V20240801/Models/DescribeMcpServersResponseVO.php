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
 * ServicesVO
 *
 * @method integer getTotal() 获取条目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置条目
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeMcpServersResponseVO extends AbstractModel
{
    /**
     * @var integer 条目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param integer $Total 条目
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 数组
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DescribeMcpServerResponseVO();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
