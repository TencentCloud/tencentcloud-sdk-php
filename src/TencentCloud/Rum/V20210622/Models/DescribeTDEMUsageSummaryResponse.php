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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMUsageSummary返回参数结构体
 *
 * @method integer getReportVolume() 获取<p>上报总量</p>
 * @method void setReportVolume(integer $ReportVolume) 设置<p>上报总量</p>
 * @method integer getResourceCount() 获取<p>窗口内有量应用数</p>
 * @method void setResourceCount(integer $ResourceCount) 设置<p>窗口内有量应用数</p>
 * @method string getGranularity() 获取<p>hour 或 day</p>
 * @method void setGranularity(string $Granularity) 设置<p>hour 或 day</p>
 * @method array getByDate() 获取<p>趋势</p>
 * @method void setByDate(array $ByDate) 设置<p>趋势</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMUsageSummaryResponse extends AbstractModel
{
    /**
     * @var integer <p>上报总量</p>
     */
    public $ReportVolume;

    /**
     * @var integer <p>窗口内有量应用数</p>
     */
    public $ResourceCount;

    /**
     * @var string <p>hour 或 day</p>
     */
    public $Granularity;

    /**
     * @var array <p>趋势</p>
     */
    public $ByDate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReportVolume <p>上报总量</p>
     * @param integer $ResourceCount <p>窗口内有量应用数</p>
     * @param string $Granularity <p>hour 或 day</p>
     * @param array $ByDate <p>趋势</p>
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
        if (array_key_exists("ReportVolume",$param) and $param["ReportVolume"] !== null) {
            $this->ReportVolume = $param["ReportVolume"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("ByDate",$param) and $param["ByDate"] !== null) {
            $this->ByDate = [];
            foreach ($param["ByDate"] as $key => $value){
                $obj = new UsageTimePoint();
                $obj->deserialize($value);
                array_push($this->ByDate, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
