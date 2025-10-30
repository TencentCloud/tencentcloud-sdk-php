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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点机型列族
 *
 * @method string getInstanceFamily() 获取机型
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型
 * @method string getFamilyName() 获取机型名称
 * @method void setFamilyName(string $FamilyName) 设置机型名称
 * @method integer getOrder() 获取排序
 * @method void setOrder(integer $Order) 设置排序
 * @method array getInstanceTypes() 获取InstanceType的列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypes(array $InstanceTypes) 设置InstanceType的列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeSpecFamily extends AbstractModel
{
    /**
     * @var string 机型
     */
    public $InstanceFamily;

    /**
     * @var string 机型名称
     */
    public $FamilyName;

    /**
     * @var integer 排序
     */
    public $Order;

    /**
     * @var array InstanceType的列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypes;

    /**
     * @param string $InstanceFamily 机型
     * @param string $FamilyName 机型名称
     * @param integer $Order 排序
     * @param array $InstanceTypes InstanceType的列表
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
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = [];
            foreach ($param["InstanceTypes"] as $key => $value){
                $obj = new NodeSpecInstanceType();
                $obj->deserialize($value);
                array_push($this->InstanceTypes, $obj);
            }
        }
    }
}
