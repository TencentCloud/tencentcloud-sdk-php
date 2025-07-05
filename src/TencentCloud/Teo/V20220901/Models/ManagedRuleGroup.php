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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管规则组配置。
 *
 * @method string getGroupId() 获取托管规则的组名称，未指定配置的规则分组将按照默认配置处理，GroupId 的具体取值参考产品文档。
 * @method void setGroupId(string $GroupId) 设置托管规则的组名称，未指定配置的规则分组将按照默认配置处理，GroupId 的具体取值参考产品文档。
 * @method string getSensitivityLevel() 获取托管规则组的防护级别。取值有：<li>loose：宽松，只包含超高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>normal：正常，包含超高风险和高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>strict：严格，包含超高风险、高风险和中风险规则，此时需配置Action，且RuleActions配置无效；</li><li>extreme：超严格，包含超高风险、高风险、中风险和低风险规则，此时需配置Action，且RuleActions配置无效；</li><li>custom：自定义，精细化策略，按单条规则配置处置方式，此时Action字段无效，使用RuleActions配置单条规则的精细化策略。</li>	
 * @method void setSensitivityLevel(string $SensitivityLevel) 设置托管规则组的防护级别。取值有：<li>loose：宽松，只包含超高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>normal：正常，包含超高风险和高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>strict：严格，包含超高风险、高风险和中风险规则，此时需配置Action，且RuleActions配置无效；</li><li>extreme：超严格，包含超高风险、高风险、中风险和低风险规则，此时需配置Action，且RuleActions配置无效；</li><li>custom：自定义，精细化策略，按单条规则配置处置方式，此时Action字段无效，使用RuleActions配置单条规则的精细化策略。</li>	
 * @method SecurityAction getAction() 获取托管规则组的处置动作。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
 * @method void setAction(SecurityAction $Action) 设置托管规则组的处置动作。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
 * @method array getRuleActions() 获取托管规则组下规则项的具体配置，仅在 SensitivityLevel 为 custom 时配置生效。
 * @method void setRuleActions(array $RuleActions) 设置托管规则组下规则项的具体配置，仅在 SensitivityLevel 为 custom 时配置生效。
 * @method ManagedRuleGroupMeta getMetaData() 获取托管规则组信息，仅出参。	
 * @method void setMetaData(ManagedRuleGroupMeta $MetaData) 设置托管规则组信息，仅出参。	
 */
class ManagedRuleGroup extends AbstractModel
{
    /**
     * @var string 托管规则的组名称，未指定配置的规则分组将按照默认配置处理，GroupId 的具体取值参考产品文档。
     */
    public $GroupId;

    /**
     * @var string 托管规则组的防护级别。取值有：<li>loose：宽松，只包含超高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>normal：正常，包含超高风险和高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>strict：严格，包含超高风险、高风险和中风险规则，此时需配置Action，且RuleActions配置无效；</li><li>extreme：超严格，包含超高风险、高风险、中风险和低风险规则，此时需配置Action，且RuleActions配置无效；</li><li>custom：自定义，精细化策略，按单条规则配置处置方式，此时Action字段无效，使用RuleActions配置单条规则的精细化策略。</li>	
     */
    public $SensitivityLevel;

    /**
     * @var SecurityAction 托管规则组的处置动作。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
     */
    public $Action;

    /**
     * @var array 托管规则组下规则项的具体配置，仅在 SensitivityLevel 为 custom 时配置生效。
     */
    public $RuleActions;

    /**
     * @var ManagedRuleGroupMeta 托管规则组信息，仅出参。	
     */
    public $MetaData;

    /**
     * @param string $GroupId 托管规则的组名称，未指定配置的规则分组将按照默认配置处理，GroupId 的具体取值参考产品文档。
     * @param string $SensitivityLevel 托管规则组的防护级别。取值有：<li>loose：宽松，只包含超高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>normal：正常，包含超高风险和高风险规则，此时需配置Action，且RuleActions配置无效；</li><li>strict：严格，包含超高风险、高风险和中风险规则，此时需配置Action，且RuleActions配置无效；</li><li>extreme：超严格，包含超高风险、高风险、中风险和低风险规则，此时需配置Action，且RuleActions配置无效；</li><li>custom：自定义，精细化策略，按单条规则配置处置方式，此时Action字段无效，使用RuleActions配置单条规则的精细化策略。</li>	
     * @param SecurityAction $Action 托管规则组的处置动作。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
     * @param array $RuleActions 托管规则组下规则项的具体配置，仅在 SensitivityLevel 为 custom 时配置生效。
     * @param ManagedRuleGroupMeta $MetaData 托管规则组信息，仅出参。	
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SensitivityLevel",$param) and $param["SensitivityLevel"] !== null) {
            $this->SensitivityLevel = $param["SensitivityLevel"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = [];
            foreach ($param["RuleActions"] as $key => $value){
                $obj = new ManagedRuleAction();
                $obj->deserialize($value);
                array_push($this->RuleActions, $obj);
            }
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new ManagedRuleGroupMeta();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
