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
 * 转发规则
 *
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getExtNamespace() 获取对外namespace
 * @method void setExtNamespace(string $ExtNamespace) 设置对外namespace
 * @method array getExtMetric() 获取对外指标列表
 * @method void setExtMetric(array $ExtMetric) 设置对外指标列表
 * @method Producer getProducer() 获取输出信息
 * @method void setProducer(Producer $Producer) 设置输出信息
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method integer getStatus() 获取规则触发状态
 * @method void setStatus(integer $Status) 设置规则触发状态
 * @method array getPeriod() 获取指标粒度周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(array $Period) 设置指标粒度周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDispenseConditions() 获取转发过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDispenseConditions(array $DispenseConditions) 设置转发过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDispenseRegions() 获取转发地域列表
 * @method void setDispenseRegions(array $DispenseRegions) 设置转发地域列表
 */
class Rule extends AbstractModel
{
    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 对外namespace
     */
    public $ExtNamespace;

    /**
     * @var array 对外指标列表
     */
    public $ExtMetric;

    /**
     * @var Producer 输出信息
     */
    public $Producer;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 规则触发状态
     */
    public $Status;

    /**
     * @var array 指标粒度周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var array 转发过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DispenseConditions;

    /**
     * @var array 转发地域列表
     */
    public $DispenseRegions;

    /**
     * @param integer $RuleId 规则Id
     * @param string $Name 规则名称
     * @param string $ExtNamespace 对外namespace
     * @param array $ExtMetric 对外指标列表
     * @param Producer $Producer 输出信息
     * @param integer $UpdateTime 更新时间
     * @param integer $Status 规则触发状态
     * @param array $Period 指标粒度周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DispenseConditions 转发过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DispenseRegions 转发地域列表
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExtNamespace",$param) and $param["ExtNamespace"] !== null) {
            $this->ExtNamespace = $param["ExtNamespace"];
        }

        if (array_key_exists("ExtMetric",$param) and $param["ExtMetric"] !== null) {
            $this->ExtMetric = [];
            foreach ($param["ExtMetric"] as $key => $value){
                $obj = new ExtMetric();
                $obj->deserialize($value);
                array_push($this->ExtMetric, $obj);
            }
        }

        if (array_key_exists("Producer",$param) and $param["Producer"] !== null) {
            $this->Producer = new Producer();
            $this->Producer->deserialize($param["Producer"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("DispenseRegions",$param) and $param["DispenseRegions"] !== null) {
            $this->DispenseRegions = $param["DispenseRegions"];
        }
    }
}
