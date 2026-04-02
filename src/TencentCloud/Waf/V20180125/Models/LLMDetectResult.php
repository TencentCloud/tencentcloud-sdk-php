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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型安全检测综合结果
 *
 * @method array getSensitiveResult() 获取<p>仅输出侧：涉敏信息</p>
 * @method void setSensitiveResult(array $SensitiveResult) 设置<p>仅输出侧：涉敏信息</p>
 * @method array getKeyWordsResult() 获取<p>输入输出均检测：关键词库命中信息</p>
 * @method void setKeyWordsResult(array $KeyWordsResult) 设置<p>输入输出均检测：关键词库命中信息</p>
 * @method array getDataCategoryResult() 获取<p>输入输出均检测：数据分类分级结果</p>
 * @method void setDataCategoryResult(array $DataCategoryResult) 设置<p>输入输出均检测：数据分类分级结果</p>
 * @method PromptDetectResult getPromptInjectionResult() 获取<p>仅输入侧检出：prompt检测的结果</p>
 * @method void setPromptInjectionResult(PromptDetectResult $PromptInjectionResult) 设置<p>仅输入侧检出：prompt检测的结果</p>
 * @method string getRuleId() 获取<p>命中的规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>命中的规则ID</p>
 * @method string getRuleName() 获取<p>命中的规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>命中的规则名称</p>
 * @method string getAction() 获取<p>规则动作</p>
 * @method void setAction(string $Action) 设置<p>规则动作</p>
 * @method string getPayload() 获取<p>攻击payload</p>
 * @method void setPayload(string $Payload) 设置<p>攻击payload</p>
 */
class LLMDetectResult extends AbstractModel
{
    /**
     * @var array <p>仅输出侧：涉敏信息</p>
     */
    public $SensitiveResult;

    /**
     * @var array <p>输入输出均检测：关键词库命中信息</p>
     */
    public $KeyWordsResult;

    /**
     * @var array <p>输入输出均检测：数据分类分级结果</p>
     */
    public $DataCategoryResult;

    /**
     * @var PromptDetectResult <p>仅输入侧检出：prompt检测的结果</p>
     */
    public $PromptInjectionResult;

    /**
     * @var string <p>命中的规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>命中的规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>规则动作</p>
     */
    public $Action;

    /**
     * @var string <p>攻击payload</p>
     */
    public $Payload;

    /**
     * @param array $SensitiveResult <p>仅输出侧：涉敏信息</p>
     * @param array $KeyWordsResult <p>输入输出均检测：关键词库命中信息</p>
     * @param array $DataCategoryResult <p>输入输出均检测：数据分类分级结果</p>
     * @param PromptDetectResult $PromptInjectionResult <p>仅输入侧检出：prompt检测的结果</p>
     * @param string $RuleId <p>命中的规则ID</p>
     * @param string $RuleName <p>命中的规则名称</p>
     * @param string $Action <p>规则动作</p>
     * @param string $Payload <p>攻击payload</p>
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
        if (array_key_exists("SensitiveResult",$param) and $param["SensitiveResult"] !== null) {
            $this->SensitiveResult = [];
            foreach ($param["SensitiveResult"] as $key => $value){
                $obj = new LLMSensitiveValueLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveResult, $obj);
            }
        }

        if (array_key_exists("KeyWordsResult",$param) and $param["KeyWordsResult"] !== null) {
            $this->KeyWordsResult = [];
            foreach ($param["KeyWordsResult"] as $key => $value){
                $obj = new KeyWordInfo();
                $obj->deserialize($value);
                array_push($this->KeyWordsResult, $obj);
            }
        }

        if (array_key_exists("DataCategoryResult",$param) and $param["DataCategoryResult"] !== null) {
            $this->DataCategoryResult = $param["DataCategoryResult"];
        }

        if (array_key_exists("PromptInjectionResult",$param) and $param["PromptInjectionResult"] !== null) {
            $this->PromptInjectionResult = new PromptDetectResult();
            $this->PromptInjectionResult->deserialize($param["PromptInjectionResult"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
