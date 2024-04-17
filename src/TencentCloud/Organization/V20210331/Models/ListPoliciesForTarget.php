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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询目标关联的SCP策略列表
 *
 * @method integer getStrategyId() 获取策略Id
 * @method void setStrategyId(integer $StrategyId) 设置策略Id
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUin() 获取关联的账号或节点
 * @method void setUin(integer $Uin) 设置关联的账号或节点
 * @method integer getType() 获取关联类型 1-节点 2-用户
 * @method void setType(integer $Type) 设置关联类型 1-节点 2-用户
 * @method string getAddTime() 获取策略创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置策略创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取策略更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置策略更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachTime() 获取策略绑定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachTime(string $AttachTime) 设置策略绑定时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListPoliciesForTarget extends AbstractModel
{
    /**
     * @var integer 策略Id
     */
    public $StrategyId;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 关联的账号或节点
     */
    public $Uin;

    /**
     * @var integer 关联类型 1-节点 2-用户
     */
    public $Type;

    /**
     * @var string 策略创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 策略更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 策略绑定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachTime;

    /**
     * @param integer $StrategyId 策略Id
     * @param string $StrategyName 策略名称
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uin 关联的账号或节点
     * @param integer $Type 关联类型 1-节点 2-用户
     * @param string $AddTime 策略创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 策略更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachTime 策略绑定时间
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

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AttachTime",$param) and $param["AttachTime"] !== null) {
            $this->AttachTime = $param["AttachTime"];
        }
    }
}
