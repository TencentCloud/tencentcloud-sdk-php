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
 * 资源用量明细结构
 *
 * @method string getCalcTime() 获取<p>时间</p>
 * @method void setCalcTime(string $CalcTime) 设置<p>时间</p>
 * @method integer getRawValue() 获取<p>原始资源用量</p>
 * @method void setRawValue(integer $RawValue) 设置<p>原始资源用量</p>
 * @method float getCreditsValue() 获取<p>资源点用量</p>
 * @method void setCreditsValue(float $CreditsValue) 设置<p>资源点用量</p>
 * @method float getDeductValue() 获取<p>资源点套餐内用量</p>
 * @method void setDeductValue(float $DeductValue) 设置<p>资源点套餐内用量</p>
 * @method float getPackageDeductValue() 获取<p>资源点资源包用量</p>
 * @method void setPackageDeductValue(float $PackageDeductValue) 设置<p>资源点资源包用量</p>
 * @method float getReportValue() 获取<p>资源点按量用量</p>
 * @method void setReportValue(float $ReportValue) 设置<p>资源点按量用量</p>
 */
class ValueDetail extends AbstractModel
{
    /**
     * @var string <p>时间</p>
     */
    public $CalcTime;

    /**
     * @var integer <p>原始资源用量</p>
     */
    public $RawValue;

    /**
     * @var float <p>资源点用量</p>
     */
    public $CreditsValue;

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
     * @param string $CalcTime <p>时间</p>
     * @param integer $RawValue <p>原始资源用量</p>
     * @param float $CreditsValue <p>资源点用量</p>
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
        if (array_key_exists("CalcTime",$param) and $param["CalcTime"] !== null) {
            $this->CalcTime = $param["CalcTime"];
        }

        if (array_key_exists("RawValue",$param) and $param["RawValue"] !== null) {
            $this->RawValue = $param["RawValue"];
        }

        if (array_key_exists("CreditsValue",$param) and $param["CreditsValue"] !== null) {
            $this->CreditsValue = $param["CreditsValue"];
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
