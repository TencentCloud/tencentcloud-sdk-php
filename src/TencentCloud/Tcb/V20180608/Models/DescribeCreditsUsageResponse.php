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
 * DescribeCreditsUsage返回参数结构体
 *
 * @method float getDeductValue() 获取<p>资源点套餐内用量</p>
 * @method void setDeductValue(float $DeductValue) 设置<p>资源点套餐内用量</p>
 * @method float getPackageDeductValue() 获取<p>资源点资源包用量</p>
 * @method void setPackageDeductValue(float $PackageDeductValue) 设置<p>资源点资源包用量</p>
 * @method float getReportValue() 获取<p>资源点按量用量</p>
 * @method void setReportValue(float $ReportValue) 设置<p>资源点按量用量</p>
 * @method float getHistoryDeducted() 获取<p>历史周期资源点用量</p>
 * @method void setHistoryDeducted(float $HistoryDeducted) 设置<p>历史周期资源点用量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCreditsUsageResponse extends AbstractModel
{
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
     * @var float <p>历史周期资源点用量</p>
     */
    public $HistoryDeducted;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $DeductValue <p>资源点套餐内用量</p>
     * @param float $PackageDeductValue <p>资源点资源包用量</p>
     * @param float $ReportValue <p>资源点按量用量</p>
     * @param float $HistoryDeducted <p>历史周期资源点用量</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DeductValue",$param) and $param["DeductValue"] !== null) {
            $this->DeductValue = $param["DeductValue"];
        }

        if (array_key_exists("PackageDeductValue",$param) and $param["PackageDeductValue"] !== null) {
            $this->PackageDeductValue = $param["PackageDeductValue"];
        }

        if (array_key_exists("ReportValue",$param) and $param["ReportValue"] !== null) {
            $this->ReportValue = $param["ReportValue"];
        }

        if (array_key_exists("HistoryDeducted",$param) and $param["HistoryDeducted"] !== null) {
            $this->HistoryDeducted = $param["HistoryDeducted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
