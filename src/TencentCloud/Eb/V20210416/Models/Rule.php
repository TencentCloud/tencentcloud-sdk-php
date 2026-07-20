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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则信息
 *
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getModTime() 获取<p>修改时间</p>
 * @method void setModTime(string $ModTime) 设置<p>修改时间</p>
 * @method boolean getEnable() 获取<p>使能开关</p>
 * @method void setEnable(boolean $Enable) 设置<p>使能开关</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getRuleId() 获取<p>规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则ID</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method array getTargets() 获取<p>Target 简要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置<p>Target 简要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeadLetterConfig getDeadLetterConfig() 获取<p>rule设置的dlq规则. 可能为null</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) 设置<p>rule设置的dlq规则. 可能为null</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rule extends AbstractModel
{
    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModTime;

    /**
     * @var boolean <p>使能开关</p>
     */
    public $Enable;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var array <p>Target 简要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @var DeadLetterConfig <p>rule设置的dlq规则. 可能为null</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterConfig;

    /**
     * @param string $Status <p>状态</p>
     * @param string $ModTime <p>修改时间</p>
     * @param boolean $Enable <p>使能开关</p>
     * @param string $Description <p>描述</p>
     * @param string $RuleId <p>规则ID</p>
     * @param string $AddTime <p>创建时间</p>
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $RuleName <p>规则名称</p>
     * @param array $Targets <p>Target 简要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeadLetterConfig $DeadLetterConfig <p>rule设置的dlq规则. 可能为null</p>
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
