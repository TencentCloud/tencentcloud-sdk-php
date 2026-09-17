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
 * DescribePlatformCreditsUsage返回参数结构体
 *
 * @method float getDeductValueCount() 获取<p>资源点套餐内用量总和</p>
 * @method void setDeductValueCount(float $DeductValueCount) 设置<p>资源点套餐内用量总和</p>
 * @method float getPackageDeductValueCount() 获取<p>资源点资源包用量总和</p>
 * @method void setPackageDeductValueCount(float $PackageDeductValueCount) 设置<p>资源点资源包用量总和</p>
 * @method float getReportValueCount() 获取<p>资源点按量用量总和</p>
 * @method void setReportValueCount(float $ReportValueCount) 设置<p>资源点按量用量总和</p>
 * @method array getDailyList() 获取<p>每日消耗具体数据</p>
 * @method void setDailyList(array $DailyList) 设置<p>每日消耗具体数据</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlatformCreditsUsageResponse extends AbstractModel
{
    /**
     * @var float <p>资源点套餐内用量总和</p>
     */
    public $DeductValueCount;

    /**
     * @var float <p>资源点资源包用量总和</p>
     */
    public $PackageDeductValueCount;

    /**
     * @var float <p>资源点按量用量总和</p>
     */
    public $ReportValueCount;

    /**
     * @var array <p>每日消耗具体数据</p>
     */
    public $DailyList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $DeductValueCount <p>资源点套餐内用量总和</p>
     * @param float $PackageDeductValueCount <p>资源点资源包用量总和</p>
     * @param float $ReportValueCount <p>资源点按量用量总和</p>
     * @param array $DailyList <p>每日消耗具体数据</p>
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
        if (array_key_exists("DeductValueCount",$param) and $param["DeductValueCount"] !== null) {
            $this->DeductValueCount = $param["DeductValueCount"];
        }

        if (array_key_exists("PackageDeductValueCount",$param) and $param["PackageDeductValueCount"] !== null) {
            $this->PackageDeductValueCount = $param["PackageDeductValueCount"];
        }

        if (array_key_exists("ReportValueCount",$param) and $param["ReportValueCount"] !== null) {
            $this->ReportValueCount = $param["ReportValueCount"];
        }

        if (array_key_exists("DailyList",$param) and $param["DailyList"] !== null) {
            $this->DailyList = [];
            foreach ($param["DailyList"] as $key => $value){
                $obj = new PlatformCreditsUsageDaily();
                $obj->deserialize($value);
                array_push($this->DailyList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
