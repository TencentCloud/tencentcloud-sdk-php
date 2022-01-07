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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则信息
 *
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getModTime() 获取修改时间
 * @method void setModTime(string $ModTime) 设置修改时间
 * @method boolean getEnable() 获取使能开关
 * @method void setEnable(boolean $Enable) 设置使能开关
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method array getTargets() 获取Target 简要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置Target 简要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeadLetterConfig getDeadLetterConfig() 获取rule设置的dlq规则. 可能为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) 设置rule设置的dlq规则. 可能为null
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rule extends AbstractModel
{
    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 修改时间
     */
    public $ModTime;

    /**
     * @var boolean 使能开关
     */
    public $Enable;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var array Target 简要信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @var DeadLetterConfig rule设置的dlq规则. 可能为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterConfig;

    /**
     * @param string $Status 状态
     * @param string $ModTime 修改时间
     * @param boolean $Enable 使能开关
     * @param string $Description 描述
     * @param string $RuleId 规则ID
     * @param string $AddTime 创建时间
     * @param string $EventBusId 事件集ID
     * @param string $RuleName 规则名称
     * @param array $Targets Target 简要信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeadLetterConfig $DeadLetterConfig rule设置的dlq规则. 可能为null
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetBrief();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }
    }
}
