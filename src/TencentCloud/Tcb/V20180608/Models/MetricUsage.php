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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标用量明细
 *
 * @method string getMetricName() 获取<p>指标名称</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名称</p>
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method integer getValue() 获取<p>原始资源用量</p>
 * @method void setValue(integer $Value) 设置<p>原始资源用量</p>
 * @method float getCreditsValue() 获取<p>资源点用量</p>
 * @method void setCreditsValue(float $CreditsValue) 设置<p>资源点用量</p>
 * @method string getBillingCycleType() 获取<p>计费周期类型，取值为hourly/daily</p>
 * @method void setBillingCycleType(string $BillingCycleType) 设置<p>计费周期类型，取值为hourly/daily</p>
 * @method string getUnit() 获取<p>原始资源用量单位</p>
 * @method void setUnit(string $Unit) 设置<p>原始资源用量单位</p>
 * @method array getValueDetailList() 获取<p>原始资源用量明细</p>
 * @method void setValueDetailList(array $ValueDetailList) 设置<p>原始资源用量明细</p>
 * @method float getDeductValue() 获取<p>资源点套餐内用量</p>
 * @method void setDeductValue(float $DeductValue) 设置<p>资源点套餐内用量</p>
 * @method float getPackageDeductValue() 获取<p>资源点资源包用量</p>
 * @method void setPackageDeductValue(float $PackageDeductValue) 设置<p>资源点资源包用量</p>
 * @method float getReportValue() 获取<p>资源点按量用量</p>
 * @method void setReportValue(float $ReportValue) 设置<p>资源点按量用量</p>
 */
class MetricUsage extends AbstractModel
{
    /**
     * @var string <p>指标名称</p>
     */
    public $MetricName;

    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var integer <p>原始资源用量</p>
     */
    public $Value;

    /**
     * @var float <p>资源点用量</p>
     */
    public $CreditsValue;

    /**
     * @var string <p>计费周期类型，取值为hourly/daily</p>
     */
    public $BillingCycleType;

    /**
     * @var string <p>原始资源用量单位</p>
     */
    public $Unit;

    /**
     * @var array <p>原始资源用量明细</p>
     */
    public $ValueDetailList;

    /**
     * @var float <p>资源点套餐内用量</p>
     */
    public $DeductValue;

    /**
     * @var float <p>资源点资源包用量</p>
     */
    public $PackageDeductValue;

    /**
     * @var float <p>资源点按量用量</p>
     */
    public $ReportValue;

    /**
     * @param string $MetricName <p>指标名称</p>
     * @param string $ResourceType <p>资源类型</p>
     * @param integer $Value <p>原始资源用量</p>
     * @param float $CreditsValue <p>资源点用量</p>
     * @param string $BillingCycleType <p>计费周期类型，取值为hourly/daily</p>
     * @param string $Unit <p>原始资源用量单位</p>
     * @param array $ValueDetailList <p>原始资源用量明细</p>
     * @param float $DeductValue <p>资源点套餐内用量</p>
     * @param float $PackageDeductValue <p>资源点资源包用量</p>
     * @param float $ReportValue <p>资源点按量用量</p>
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("CreditsValue",$param) and $param["CreditsValue"] !== null) {
            $this->CreditsValue = $param["CreditsValue"];
        }

        if (array_key_exists("BillingCycleType",$param) and $param["BillingCycleType"] !== null) {
            $this->BillingCycleType = $param["BillingCycleType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ValueDetailList",$param) and $param["ValueDetailList"] !== null) {
            $this->ValueDetailList = [];
            foreach ($param["ValueDetailList"] as $key => $value){
                $obj = new ValueDetail();
                $obj->deserialize($value);
                array_push($this->ValueDetailList, $obj);
            }
        }

        if (array_key_exists("DeductValue",$param) and $param["DeductValue"] !== null) {
            $this->DeductValue = $param["DeductValue"];
        }

        if (array_key_exists("PackageDeductValue",$param) and $param["PackageDeductValue"] !== null) {
            $this->PackageDeductValue = $param["PackageDeductValue"];
        }

        if (array_key_exists("ReportValue",$param) and $param["ReportValue"] !== null) {
            $this->ReportValue = $param["ReportValue"];
        }
    }
}
