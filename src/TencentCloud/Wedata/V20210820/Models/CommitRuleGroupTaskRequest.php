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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitRuleGroupTask请求参数结构体
 *
 * @method integer getRuleGroupId() 获取规则组ID
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
 * @method integer getTriggerType() 获取触发类型 1.手动触发 2.调度事中触发 3.周期调度触发
 * @method void setTriggerType(integer $TriggerType) 设置触发类型 1.手动触发 2.调度事中触发 3.周期调度触发
 * @method array getExecRuleConfig() 获取规则配置列表
 * @method void setExecRuleConfig(array $ExecRuleConfig) 设置规则配置列表
 * @method RuleExecConfig getExecConfig() 获取执行配置
 * @method void setExecConfig(RuleExecConfig $ExecConfig) 设置执行配置
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class CommitRuleGroupTaskRequest extends AbstractModel
{
    /**
     * @var integer 规则组ID
     */
    public $RuleGroupId;

    /**
     * @var integer 触发类型 1.手动触发 2.调度事中触发 3.周期调度触发
     */
    public $TriggerType;

    /**
     * @var array 规则配置列表
     */
    public $ExecRuleConfig;

    /**
     * @var RuleExecConfig 执行配置
     */
    public $ExecConfig;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param integer $RuleGroupId 规则组ID
     * @param integer $TriggerType 触发类型 1.手动触发 2.调度事中触发 3.周期调度触发
     * @param array $ExecRuleConfig 规则配置列表
     * @param RuleExecConfig $ExecConfig 执行配置
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ExecRuleConfig",$param) and $param["ExecRuleConfig"] !== null) {
            $this->ExecRuleConfig = [];
            foreach ($param["ExecRuleConfig"] as $key => $value){
                $obj = new RuleConfig();
                $obj->deserialize($value);
                array_push($this->ExecRuleConfig, $obj);
            }
        }

        if (array_key_exists("ExecConfig",$param) and $param["ExecConfig"] !== null) {
            $this->ExecConfig = new RuleExecConfig();
            $this->ExecConfig->deserialize($param["ExecConfig"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
