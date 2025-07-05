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
 * DescribeBaselineAnalysisData返回参数结构体
 *
 * @method string getLatestScanTime() 获取最后检测时间
 * @method void setLatestScanTime(string $LatestScanTime) 设置最后检测时间
 * @method integer getIsGlobal() 获取是否全部服务器：1-是 0-否
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全部服务器：1-是 0-否
 * @method integer getScanHostCount() 获取服务器总数
 * @method void setScanHostCount(integer $ScanHostCount) 设置服务器总数
 * @method integer getScanRuleCount() 获取检测项总数
 * @method void setScanRuleCount(integer $ScanRuleCount) 设置检测项总数
 * @method integer getIfFirstScan() 获取是否是第一次检测  1是 0不是
 * @method void setIfFirstScan(integer $IfFirstScan) 设置是否是第一次检测  1是 0不是
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineAnalysisDataResponse extends AbstractModel
{
    /**
     * @var string 最后检测时间
     */
    public $LatestScanTime;

    /**
     * @var integer 是否全部服务器：1-是 0-否
     */
    public $IsGlobal;

    /**
     * @var integer 服务器总数
     */
    public $ScanHostCount;

    /**
     * @var integer 检测项总数
     */
    public $ScanRuleCount;

    /**
     * @var integer 是否是第一次检测  1是 0不是
     */
    public $IfFirstScan;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LatestScanTime 最后检测时间
     * @param integer $IsGlobal 是否全部服务器：1-是 0-否
     * @param integer $ScanHostCount 服务器总数
     * @param integer $ScanRuleCount 检测项总数
     * @param integer $IfFirstScan 是否是第一次检测  1是 0不是
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
        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("ScanHostCount",$param) and $param["ScanHostCount"] !== null) {
            $this->ScanHostCount = $param["ScanHostCount"];
        }

        if (array_key_exists("ScanRuleCount",$param) and $param["ScanRuleCount"] !== null) {
            $this->ScanRuleCount = $param["ScanRuleCount"];
        }

        if (array_key_exists("IfFirstScan",$param) and $param["IfFirstScan"] !== null) {
            $this->IfFirstScan = $param["IfFirstScan"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
