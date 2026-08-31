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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDispenseExternalRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getExtNamespace() 获取云监控对外命名空间
 * @method void setExtNamespace(string $ExtNamespace) 设置云监控对外命名空间
 * @method Producer getProducer() 获取转发目标消信息
 * @method void setProducer(Producer $Producer) 设置转发目标消信息
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method array getDispenseRegions() 获取转发部署地域列表
 * @method void setDispenseRegions(array $DispenseRegions) 设置转发部署地域列表
 * @method array getExtMetrics() 获取云监控对外指标
 * @method void setExtMetrics(array $ExtMetrics) 设置云监控对外指标
 * @method array getPeriod() 获取指标统计周期
 * @method void setPeriod(array $Period) 设置指标统计周期
 * @method array getDispenseConditions() 获取转发过滤信息
 * @method void setDispenseConditions(array $DispenseConditions) 设置转发过滤信息
 */
class ModifyDispenseExternalRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 云监控对外命名空间
     */
    public $ExtNamespace;

    /**
     * @var Producer 转发目标消信息
     */
    public $Producer;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var array 转发部署地域列表
     */
    public $DispenseRegions;

    /**
     * @var array 云监控对外指标
     */
    public $ExtMetrics;

    /**
     * @var array 指标统计周期
     */
    public $Period;

    /**
     * @var array 转发过滤信息
     */
    public $DispenseConditions;

    /**
     * @param string $Name 规则名称
     * @param string $ExtNamespace 云监控对外命名空间
     * @param Producer $Producer 转发目标消信息
     * @param integer $RuleId 规则ID
     * @param array $DispenseRegions 转发部署地域列表
     * @param array $ExtMetrics 云监控对外指标
     * @param array $Period 指标统计周期
     * @param array $DispenseConditions 转发过滤信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExtNamespace",$param) and $param["ExtNamespace"] !== null) {
            $this->ExtNamespace = $param["ExtNamespace"];
        }

        if (array_key_exists("Producer",$param) and $param["Producer"] !== null) {
            $this->Producer = new Producer();
            $this->Producer->deserialize($param["Producer"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("DispenseRegions",$param) and $param["DispenseRegions"] !== null) {
            $this->DispenseRegions = $param["DispenseRegions"];
        }

        if (array_key_exists("ExtMetrics",$param) and $param["ExtMetrics"] !== null) {
            $this->ExtMetrics = $param["ExtMetrics"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("DispenseConditions",$param) and $param["DispenseConditions"] !== null) {
            $this->DispenseConditions = [];
            foreach ($param["DispenseConditions"] as $key => $value){
                $obj = new DispenseCondition();
                $obj->deserialize($value);
                array_push($this->DispenseConditions, $obj);
            }
        }
    }
}
