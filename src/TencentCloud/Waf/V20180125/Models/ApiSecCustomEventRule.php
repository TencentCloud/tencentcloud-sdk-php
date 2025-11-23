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
 * api安全自定义事件规则结构体
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getStatus() 获取开关，1：开，0:关
 * @method void setStatus(integer $Status) 设置开关，1：开，0:关
 * @method array getApiNameOp() 获取api匹配列表
 * @method void setApiNameOp(array $ApiNameOp) 设置api匹配列表
 * @method string getDescription() 获取事件详情
 * @method void setDescription(string $Description) 设置事件详情
 * @method integer getUpdateTime() 获取时间戳，出参有该值，入参不需要传没有
 * @method void setUpdateTime(integer $UpdateTime) 设置时间戳，出参有该值，入参不需要传没有
 * @method array getMatchRuleList() 获取匹配规则列表
 * @method void setMatchRuleList(array $MatchRuleList) 设置匹配规则列表
 * @method array getStatRuleList() 获取统计规则列表
 * @method void setStatRuleList(array $StatRuleList) 设置统计规则列表
 * @method array getReqFrequency() 获取访问频次，第一个字段表示次数，第二个字段表示分钟
 * @method void setReqFrequency(array $ReqFrequency) 设置访问频次，第一个字段表示次数，第二个字段表示分钟
 * @method string getRiskLevel() 获取风险等级，取值为100,200,300，分别表示低位、中危、高危
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级，取值为100,200,300，分别表示低位、中危、高危
 * @method string getSource() 获取规则来源
 * @method void setSource(string $Source) 设置规则来源
 */
class ApiSecCustomEventRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 开关，1：开，0:关
     */
    public $Status;

    /**
     * @var array api匹配列表
     */
    public $ApiNameOp;

    /**
     * @var string 事件详情
     */
    public $Description;

    /**
     * @var integer 时间戳，出参有该值，入参不需要传没有
     */
    public $UpdateTime;

    /**
     * @var array 匹配规则列表
     */
    public $MatchRuleList;

    /**
     * @var array 统计规则列表
     */
    public $StatRuleList;

    /**
     * @var array 访问频次，第一个字段表示次数，第二个字段表示分钟
     */
    public $ReqFrequency;

    /**
     * @var string 风险等级，取值为100,200,300，分别表示低位、中危、高危
     */
    public $RiskLevel;

    /**
     * @var string 规则来源
     */
    public $Source;

    /**
     * @param string $RuleName 规则名称
     * @param integer $Status 开关，1：开，0:关
     * @param array $ApiNameOp api匹配列表
     * @param string $Description 事件详情
     * @param integer $UpdateTime 时间戳，出参有该值，入参不需要传没有
     * @param array $MatchRuleList 匹配规则列表
     * @param array $StatRuleList 统计规则列表
     * @param array $ReqFrequency 访问频次，第一个字段表示次数，第二个字段表示分钟
     * @param string $RiskLevel 风险等级，取值为100,200,300，分别表示低位、中危、高危
     * @param string $Source 规则来源
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApiNameOp",$param) and $param["ApiNameOp"] !== null) {
            $this->ApiNameOp = [];
            foreach ($param["ApiNameOp"] as $key => $value){
                $obj = new ApiNameOp();
                $obj->deserialize($value);
                array_push($this->ApiNameOp, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MatchRuleList",$param) and $param["MatchRuleList"] !== null) {
            $this->MatchRuleList = [];
            foreach ($param["MatchRuleList"] as $key => $value){
                $obj = new ApiSecSceneRuleEntry();
                $obj->deserialize($value);
                array_push($this->MatchRuleList, $obj);
            }
        }

        if (array_key_exists("StatRuleList",$param) and $param["StatRuleList"] !== null) {
            $this->StatRuleList = [];
            foreach ($param["StatRuleList"] as $key => $value){
                $obj = new ApiSecSceneRuleEntry();
                $obj->deserialize($value);
                array_push($this->StatRuleList, $obj);
            }
        }

        if (array_key_exists("ReqFrequency",$param) and $param["ReqFrequency"] !== null) {
            $this->ReqFrequency = $param["ReqFrequency"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
