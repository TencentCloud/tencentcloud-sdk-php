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
 * @method array getSensitiveResult() 获取 仅输出侧：涉敏信息
 * @method void setSensitiveResult(array $SensitiveResult) 设置 仅输出侧：涉敏信息
 * @method array getKeyWordsResult() 获取 输入输出均检测：关键词库命中信息
 * @method void setKeyWordsResult(array $KeyWordsResult) 设置 输入输出均检测：关键词库命中信息
 * @method array getDataCategoryResult() 获取输入输出均检测：数据分类分级结果
 * @method void setDataCategoryResult(array $DataCategoryResult) 设置输入输出均检测：数据分类分级结果
 * @method PromptDetectResult getPromptInjectionResult() 获取 仅输入侧检出：prompt检测的结果
 * @method void setPromptInjectionResult(PromptDetectResult $PromptInjectionResult) 设置 仅输入侧检出：prompt检测的结果
 * @method string getRuleId() 获取命中的规则ID
 * @method void setRuleId(string $RuleId) 设置命中的规则ID
 * @method string getRuleName() 获取命中的规则名称
 * @method void setRuleName(string $RuleName) 设置命中的规则名称
 * @method string getAction() 获取规则动作
 * @method void setAction(string $Action) 设置规则动作
 * @method string getPayload() 获取攻击payload
 * @method void setPayload(string $Payload) 设置攻击payload
 */
class LLMDetectResult extends AbstractModel
{
    /**
     * @var array  仅输出侧：涉敏信息
     */
    public $SensitiveResult;

    /**
     * @var array  输入输出均检测：关键词库命中信息
     */
    public $KeyWordsResult;

    /**
     * @var array 输入输出均检测：数据分类分级结果
     */
    public $DataCategoryResult;

    /**
     * @var PromptDetectResult  仅输入侧检出：prompt检测的结果
     */
    public $PromptInjectionResult;

    /**
     * @var string 命中的规则ID
     */
    public $RuleId;

    /**
     * @var string 命中的规则名称
     */
    public $RuleName;

    /**
     * @var string 规则动作
     */
    public $Action;

    /**
     * @var string 攻击payload
     */
    public $Payload;

    /**
     * @param array $SensitiveResult  仅输出侧：涉敏信息
     * @param array $KeyWordsResult  输入输出均检测：关键词库命中信息
     * @param array $DataCategoryResult 输入输出均检测：数据分类分级结果
     * @param PromptDetectResult $PromptInjectionResult  仅输入侧检出：prompt检测的结果
     * @param string $RuleId 命中的规则ID
     * @param string $RuleName 命中的规则名称
     * @param string $Action 规则动作
     * @param string $Payload 攻击payload
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
