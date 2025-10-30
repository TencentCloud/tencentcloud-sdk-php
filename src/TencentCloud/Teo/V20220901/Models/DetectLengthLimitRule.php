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
 * 检测长度限制规则详情
 *
 * @method integer getRuleId() 获取规则Id。仅出参使用。
 * @method void setRuleId(integer $RuleId) 设置规则Id。仅出参使用。
 * @method string getRuleName() 获取规则名称。仅出参使用。
 * @method void setRuleName(string $RuleName) 设置规则名称。仅出参使用。
 * @method string getDescription() 获取规则描述，仅出参使用。
 * @method void setDescription(string $Description) 设置规则描述，仅出参使用。
 * @method array getConditions() 获取规则配置条件。仅出参使用。
 * @method void setConditions(array $Conditions) 设置规则配置条件。仅出参使用。
 * @method string getAction() 获取处置方式，取值有：
<li>skip：当请求正文数据超过 Conditions 出参中 body_depth 设置的检测深度时，跳过所有请求正文内容的检测；</li>
<li>scan：仅检测 Conditions 出参中 body_depth 设置的检测深度，对超出部分的请求正文内容直接截断处理，超出部分的请求正文不会经过安全检测。</li>仅出参使用。
 * @method void setAction(string $Action) 设置处置方式，取值有：
<li>skip：当请求正文数据超过 Conditions 出参中 body_depth 设置的检测深度时，跳过所有请求正文内容的检测；</li>
<li>scan：仅检测 Conditions 出参中 body_depth 设置的检测深度，对超出部分的请求正文内容直接截断处理，超出部分的请求正文不会经过安全检测。</li>仅出参使用。
 */
class DetectLengthLimitRule extends AbstractModel
{
    /**
     * @var integer 规则Id。仅出参使用。
     */
    public $RuleId;

    /**
     * @var string 规则名称。仅出参使用。
     */
    public $RuleName;

    /**
     * @var string 规则描述，仅出参使用。
     */
    public $Description;

    /**
     * @var array 规则配置条件。仅出参使用。
     */
    public $Conditions;

    /**
     * @var string 处置方式，取值有：
<li>skip：当请求正文数据超过 Conditions 出参中 body_depth 设置的检测深度时，跳过所有请求正文内容的检测；</li>
<li>scan：仅检测 Conditions 出参中 body_depth 设置的检测深度，对超出部分的请求正文内容直接截断处理，超出部分的请求正文不会经过安全检测。</li>仅出参使用。
     */
    public $Action;

    /**
     * @param integer $RuleId 规则Id。仅出参使用。
     * @param string $RuleName 规则名称。仅出参使用。
     * @param string $Description 规则描述，仅出参使用。
     * @param array $Conditions 规则配置条件。仅出参使用。
     * @param string $Action 处置方式，取值有：
<li>skip：当请求正文数据超过 Conditions 出参中 body_depth 设置的检测深度时，跳过所有请求正文内容的检测；</li>
<li>scan：仅检测 Conditions 出参中 body_depth 设置的检测深度，对超出部分的请求正文内容直接截断处理，超出部分的请求正文不会经过安全检测。</li>仅出参使用。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DetectLengthLimitCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
