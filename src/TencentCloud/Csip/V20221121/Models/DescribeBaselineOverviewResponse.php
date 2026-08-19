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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineOverview返回参数结构体
 *
 * @method BaselineOverviewStatistic getStatistics() 获取<p>基线概览统计数据（主机/集群未通过项数、近一年修复数）。</p>
 * @method void setStatistics(BaselineOverviewStatistic $Statistics) 设置<p>基线概览统计数据（主机/集群未通过项数、近一年修复数）。</p>
 * @method string getLatestScanTime() 获取<p>最近一次基线扫描完成时间。</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近一次基线扫描完成时间。</p>
 * @method boolean getEnableCycleScan() 获取<p>当前是否已启用任意周期性扫描。true 启用，false 未启用。</p>
 * @method void setEnableCycleScan(boolean $EnableCycleScan) 设置<p>当前是否已启用任意周期性扫描。true 启用，false 未启用。</p>
 * @method integer getScanningTaskCount() 获取<p>当前进行中的扫描主任务数量。</p>
 * @method void setScanningTaskCount(integer $ScanningTaskCount) 设置<p>当前进行中的扫描主任务数量。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineOverviewResponse extends AbstractModel
{
    /**
     * @var BaselineOverviewStatistic <p>基线概览统计数据（主机/集群未通过项数、近一年修复数）。</p>
     */
    public $Statistics;

    /**
     * @var string <p>最近一次基线扫描完成时间。</p>
     */
    public $LatestScanTime;

    /**
     * @var boolean <p>当前是否已启用任意周期性扫描。true 启用，false 未启用。</p>
     */
    public $EnableCycleScan;

    /**
     * @var integer <p>当前进行中的扫描主任务数量。</p>
     */
    public $ScanningTaskCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BaselineOverviewStatistic $Statistics <p>基线概览统计数据（主机/集群未通过项数、近一年修复数）。</p>
     * @param string $LatestScanTime <p>最近一次基线扫描完成时间。</p>
     * @param boolean $EnableCycleScan <p>当前是否已启用任意周期性扫描。true 启用，false 未启用。</p>
     * @param integer $ScanningTaskCount <p>当前进行中的扫描主任务数量。</p>
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
        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new BaselineOverviewStatistic();
            $this->Statistics->deserialize($param["Statistics"]);
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("EnableCycleScan",$param) and $param["EnableCycleScan"] !== null) {
            $this->EnableCycleScan = $param["EnableCycleScan"];
        }

        if (array_key_exists("ScanningTaskCount",$param) and $param["ScanningTaskCount"] !== null) {
            $this->ScanningTaskCount = $param["ScanningTaskCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
