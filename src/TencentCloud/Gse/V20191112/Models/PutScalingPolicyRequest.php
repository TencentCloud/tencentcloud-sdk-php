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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutScalingPolicy请求参数结构体
 *
 * @method string getFleetId() 获取基于规则的扩缩容配置
 * @method void setFleetId(string $FleetId) 设置基于规则的扩缩容配置
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getScalingAdjustment() 获取调整值
 * @method void setScalingAdjustment(integer $ScalingAdjustment) 设置调整值
 * @method string getScalingAdjustmentType() 获取调整类型
 * @method void setScalingAdjustmentType(string $ScalingAdjustmentType) 设置调整类型
 * @method float getThreshold() 获取指标阈值
 * @method void setThreshold(float $Threshold) 设置指标阈值
 * @method string getComparisonOperator() 获取比较符
 * @method void setComparisonOperator(string $ComparisonOperator) 设置比较符
 * @method integer getEvaluationPeriods() 获取时间长度（分钟）
 * @method void setEvaluationPeriods(integer $EvaluationPeriods) 设置时间长度（分钟）
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method string getPolicyType() 获取策略类型
 * @method void setPolicyType(string $PolicyType) 设置策略类型
 * @method TargetConfiguration getTargetConfiguration() 获取扩缩容配置类型
 * @method void setTargetConfiguration(TargetConfiguration $TargetConfiguration) 设置扩缩容配置类型
 */
class PutScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 基于规则的扩缩容配置
     */
    public $FleetId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 调整值
     */
    public $ScalingAdjustment;

    /**
     * @var string 调整类型
     */
    public $ScalingAdjustmentType;

    /**
     * @var float 指标阈值
     */
    public $Threshold;

    /**
     * @var string 比较符
     */
    public $ComparisonOperator;

    /**
     * @var integer 时间长度（分钟）
     */
    public $EvaluationPeriods;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var string 策略类型
     */
    public $PolicyType;

    /**
     * @var TargetConfiguration 扩缩容配置类型
     */
    public $TargetConfiguration;

    /**
     * @param string $FleetId 基于规则的扩缩容配置
     * @param string $Name 名称
     * @param integer $ScalingAdjustment 调整值
     * @param string $ScalingAdjustmentType 调整类型
     * @param float $Threshold 指标阈值
     * @param string $ComparisonOperator 比较符
     * @param integer $EvaluationPeriods 时间长度（分钟）
     * @param string $MetricName 指标名称
     * @param string $PolicyType 策略类型
     * @param TargetConfiguration $TargetConfiguration 扩缩容配置类型
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScalingAdjustment",$param) and $param["ScalingAdjustment"] !== null) {
            $this->ScalingAdjustment = $param["ScalingAdjustment"];
        }

        if (array_key_exists("ScalingAdjustmentType",$param) and $param["ScalingAdjustmentType"] !== null) {
            $this->ScalingAdjustmentType = $param["ScalingAdjustmentType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("ComparisonOperator",$param) and $param["ComparisonOperator"] !== null) {
            $this->ComparisonOperator = $param["ComparisonOperator"];
        }

        if (array_key_exists("EvaluationPeriods",$param) and $param["EvaluationPeriods"] !== null) {
            $this->EvaluationPeriods = $param["EvaluationPeriods"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("TargetConfiguration",$param) and $param["TargetConfiguration"] !== null) {
            $this->TargetConfiguration = new TargetConfiguration();
            $this->TargetConfiguration->deserialize($param["TargetConfiguration"]);
        }
    }
}
