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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPolicyId() 获取策略id
 * @method void setPolicyId(integer $PolicyId) 设置策略id
 * @method string getPolicyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateMode() 获取创建来源，1 通过控制台创建, 2 通过策略语法创建。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateMode(integer $CreateMode) 设置创建来源，1 通过控制台创建, 2 通过策略语法创建。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyType() 获取取值为user和QCS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(string $PolicyType) 设置取值为user和QCS
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *关联策略信息
 */
class AttachPolicyInfo extends AbstractModel
{
    /**
     * @var integer 策略id
     */
    public $PolicyId;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var integer 创建来源，1 通过控制台创建, 2 通过策略语法创建。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateMode;

    /**
     * @var string 取值为user和QCS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;
    /**
     * @param integer $PolicyId 策略id
     * @param string $PolicyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateMode 创建来源，1 通过控制台创建, 2 通过策略语法创建。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyType 取值为user和QCS
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
