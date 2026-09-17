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
 * 平台版本消耗数据
 *
 * @method string getDate() 获取<p>数据日期</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setDate(string $Date) 设置<p>数据日期</p><p>参数格式：YYYY-MM-DD</p>
 * @method float getDeductValue() 获取<p>资源点套餐内用量</p>
 * @method void setDeductValue(float $DeductValue) 设置<p>资源点套餐内用量</p>
 * @method float getPackageDeductValue() 获取<p>资源点资源包用量</p>
 * @method void setPackageDeductValue(float $PackageDeductValue) 设置<p>资源点资源包用量</p>
 * @method float getReportValue() 获取<p>资源点按量用量</p>
 * @method void setReportValue(float $ReportValue) 设置<p>资源点按量用量</p>
 * @method float getOriginCredits() 获取<p>资源点原价消耗</p>
 * @method void setOriginCredits(float $OriginCredits) 设置<p>资源点原价消耗</p>
 */
class PlatformCreditsUsageDaily extends AbstractModel
{
    /**
     * @var string <p>数据日期</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $Date;

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
     * @var float <p>资源点原价消耗</p>
     */
    public $OriginCredits;

    /**
     * @param string $Date <p>数据日期</p><p>参数格式：YYYY-MM-DD</p>
     * @param float $DeductValue <p>资源点套餐内用量</p>
     * @param float $PackageDeductValue <p>资源点资源包用量</p>
     * @param float $ReportValue <p>资源点按量用量</p>
     * @param float $OriginCredits <p>资源点原价消耗</p>
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
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

        if (array_key_exists("OriginCredits",$param) and $param["OriginCredits"] !== null) {
            $this->OriginCredits = $param["OriginCredits"];
        }
    }
}
