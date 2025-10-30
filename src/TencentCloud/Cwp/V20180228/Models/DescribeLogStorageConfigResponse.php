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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogStorageConfig返回参数结构体
 *
 * @method array getType() 获取存储类型，string数组
 * @method void setType(array $Type) 设置存储类型，string数组
 * @method integer getPeriod() 获取日志存储时长，3640表示不限
 * @method void setPeriod(integer $Period) 设置日志存储时长，3640表示不限
 * @method integer getPeriodModifyCount() 获取本月Period的修改次数
 * @method void setPeriodModifyCount(integer $PeriodModifyCount) 设置本月Period的修改次数
 * @method string getGranularity() 获取日志存储时长单位，年year/月month/天day
 * @method void setGranularity(string $Granularity) 设置日志存储时长单位，年year/月month/天day
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogStorageConfigResponse extends AbstractModel
{
    /**
     * @var array 存储类型，string数组
     */
    public $Type;

    /**
     * @var integer 日志存储时长，3640表示不限
     */
    public $Period;

    /**
     * @var integer 本月Period的修改次数
     */
    public $PeriodModifyCount;

    /**
     * @var string 日志存储时长单位，年year/月month/天day
     */
    public $Granularity;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Type 存储类型，string数组
     * @param integer $Period 日志存储时长，3640表示不限
     * @param integer $PeriodModifyCount 本月Period的修改次数
     * @param string $Granularity 日志存储时长单位，年year/月month/天day
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PeriodModifyCount",$param) and $param["PeriodModifyCount"] !== null) {
            $this->PeriodModifyCount = $param["PeriodModifyCount"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
