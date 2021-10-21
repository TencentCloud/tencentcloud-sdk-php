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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 评估项信息
 *
 * @method integer getStrategyId() 获取评估项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(integer $StrategyId) 设置评估项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取评估项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置评估项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取评估项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置评估项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduct() 获取评估项对应产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置评估项对应产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductDesc() 获取评估项对应产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductDesc(string $ProductDesc) 设置评估项对应产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepair() 获取评估项优化建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepair(string $Repair) 设置评估项优化建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取评估项类别ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置评估项类别ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取评估项类别名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置评估项类别名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConditions() 获取评估项风险列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置评估项风险列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeStrategie extends AbstractModel
{
    /**
     * @var integer 评估项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @var string 评估项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 评估项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 评估项对应产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var string 评估项对应产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductDesc;

    /**
     * @var string 评估项优化建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repair;

    /**
     * @var integer 评估项类别ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 评估项类别名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var array 评估项风险列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @param integer $StrategyId 评估项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 评估项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 评估项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Product 评估项对应产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductDesc 评估项对应产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repair 评估项优化建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 评估项类别ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 评估项类别名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Conditions 评估项风险列表
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("Repair",$param) and $param["Repair"] !== null) {
            $this->Repair = $param["Repair"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DescribeStrategiesCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
