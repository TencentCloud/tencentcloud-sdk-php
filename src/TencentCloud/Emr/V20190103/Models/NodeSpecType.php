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
 * 节点机型类型
 *
 * @method string getType() 获取机型序列
 * @method void setType(string $Type) 设置机型序列
 * @method string getTypeName() 获取机型序列名字
 * @method void setTypeName(string $TypeName) 设置机型序列名字
 * @method integer getOrder() 获取排序
 * @method void setOrder(integer $Order) 设置排序
 * @method array getInstanceFamilies() 获取InstanceFamily数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceFamilies(array $InstanceFamilies) 设置InstanceFamily数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeSpecType extends AbstractModel
{
    /**
     * @var string 机型序列
     */
    public $Type;

    /**
     * @var string 机型序列名字
     */
    public $TypeName;

    /**
     * @var integer 排序
     */
    public $Order;

    /**
     * @var array InstanceFamily数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceFamilies;

    /**
     * @param string $Type 机型序列
     * @param string $TypeName 机型序列名字
     * @param integer $Order 排序
     * @param array $InstanceFamilies InstanceFamily数组
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = [];
            foreach ($param["InstanceFamilies"] as $key => $value){
                $obj = new NodeSpecFamily();
                $obj->deserialize($value);
                array_push($this->InstanceFamilies, $obj);
            }
        }
    }
}
