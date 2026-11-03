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
 * 深度分析配置选项。
 *
 * @method string getEnabled() 获取<p>深度分析规则是否开启。取值有：<li>on：开启，深度分析规则生效；</li><li>off：关闭，深度分析规则不生效。</li></p>
 * @method void setEnabled(string $Enabled) 设置<p>深度分析规则是否开启。取值有：<li>on：开启，深度分析规则生效；</li><li>off：关闭，深度分析规则不生效。</li></p>
 * @method array getRuleActions() 获取<p>深度分析下规则项的具体配置。</p>
 * @method void setRuleActions(array $RuleActions) 设置<p>深度分析下规则项的具体配置。</p>
 * @method ManagedRuleGroupMeta getMetaData() 获取<p>深度分析配置信息，仅出参使用。</p>
 * @method void setMetaData(ManagedRuleGroupMeta $MetaData) 设置<p>深度分析配置信息，仅出参使用。</p>
 */
class SemanticAnalysisRules extends AbstractModel
{
    /**
     * @var string <p>深度分析规则是否开启。取值有：<li>on：开启，深度分析规则生效；</li><li>off：关闭，深度分析规则不生效。</li></p>
     */
    public $Enabled;

    /**
     * @var array <p>深度分析下规则项的具体配置。</p>
     */
    public $RuleActions;

    /**
     * @var ManagedRuleGroupMeta <p>深度分析配置信息，仅出参使用。</p>
     */
    public $MetaData;

    /**
     * @param string $Enabled <p>深度分析规则是否开启。取值有：<li>on：开启，深度分析规则生效；</li><li>off：关闭，深度分析规则不生效。</li></p>
     * @param array $RuleActions <p>深度分析下规则项的具体配置。</p>
     * @param ManagedRuleGroupMeta $MetaData <p>深度分析配置信息，仅出参使用。</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
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
