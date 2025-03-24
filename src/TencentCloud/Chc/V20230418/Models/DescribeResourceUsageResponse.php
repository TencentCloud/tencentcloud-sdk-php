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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceUsage返回参数结构体
 *
 * @method integer getHostingServerCount() 获取托管服务器数量
 * @method void setHostingServerCount(integer $HostingServerCount) 设置托管服务器数量
 * @method integer getRentServerCount() 获取租用服务器数量
 * @method void setRentServerCount(integer $RentServerCount) 设置租用服务器数量
 * @method integer getNetDeviceCount() 获取网络设备数量
 * @method void setNetDeviceCount(integer $NetDeviceCount) 设置网络设备数量
 * @method integer getRackTotalCount() 获取机架总数
 * @method void setRackTotalCount(integer $RackTotalCount) 设置机架总数
 * @method integer getRackPowerOnCount() 获取开电机架总数
 * @method void setRackPowerOnCount(integer $RackPowerOnCount) 设置开电机架总数
 * @method integer getPositionUsedCount() 获取机位使用数量
 * @method void setPositionUsedCount(integer $PositionUsedCount) 设置机位使用数量
 * @method integer getPositionTotalCount() 获取机位总数
 * @method void setPositionTotalCount(integer $PositionTotalCount) 设置机位总数
 * @method string getRackPowerOnRate() 获取机架开电率，保留一位小数
 * @method void setRackPowerOnRate(string $RackPowerOnRate) 设置机架开电率，保留一位小数
 * @method string getPositionUsedRate() 获取机位使用率，
 * @method void setPositionUsedRate(string $PositionUsedRate) 设置机位使用率，
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceUsageResponse extends AbstractModel
{
    /**
     * @var integer 托管服务器数量
     */
    public $HostingServerCount;

    /**
     * @var integer 租用服务器数量
     */
    public $RentServerCount;

    /**
     * @var integer 网络设备数量
     */
    public $NetDeviceCount;

    /**
     * @var integer 机架总数
     */
    public $RackTotalCount;

    /**
     * @var integer 开电机架总数
     */
    public $RackPowerOnCount;

    /**
     * @var integer 机位使用数量
     */
    public $PositionUsedCount;

    /**
     * @var integer 机位总数
     */
    public $PositionTotalCount;

    /**
     * @var string 机架开电率，保留一位小数
     */
    public $RackPowerOnRate;

    /**
     * @var string 机位使用率，
     */
    public $PositionUsedRate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HostingServerCount 托管服务器数量
     * @param integer $RentServerCount 租用服务器数量
     * @param integer $NetDeviceCount 网络设备数量
     * @param integer $RackTotalCount 机架总数
     * @param integer $RackPowerOnCount 开电机架总数
     * @param integer $PositionUsedCount 机位使用数量
     * @param integer $PositionTotalCount 机位总数
     * @param string $RackPowerOnRate 机架开电率，保留一位小数
     * @param string $PositionUsedRate 机位使用率，
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
        if (array_key_exists("HostingServerCount",$param) and $param["HostingServerCount"] !== null) {
            $this->HostingServerCount = $param["HostingServerCount"];
        }

        if (array_key_exists("RentServerCount",$param) and $param["RentServerCount"] !== null) {
            $this->RentServerCount = $param["RentServerCount"];
        }

        if (array_key_exists("NetDeviceCount",$param) and $param["NetDeviceCount"] !== null) {
            $this->NetDeviceCount = $param["NetDeviceCount"];
        }

        if (array_key_exists("RackTotalCount",$param) and $param["RackTotalCount"] !== null) {
            $this->RackTotalCount = $param["RackTotalCount"];
        }

        if (array_key_exists("RackPowerOnCount",$param) and $param["RackPowerOnCount"] !== null) {
            $this->RackPowerOnCount = $param["RackPowerOnCount"];
        }

        if (array_key_exists("PositionUsedCount",$param) and $param["PositionUsedCount"] !== null) {
            $this->PositionUsedCount = $param["PositionUsedCount"];
        }

        if (array_key_exists("PositionTotalCount",$param) and $param["PositionTotalCount"] !== null) {
            $this->PositionTotalCount = $param["PositionTotalCount"];
        }

        if (array_key_exists("RackPowerOnRate",$param) and $param["RackPowerOnRate"] !== null) {
            $this->RackPowerOnRate = $param["RackPowerOnRate"];
        }

        if (array_key_exists("PositionUsedRate",$param) and $param["PositionUsedRate"] !== null) {
            $this->PositionUsedRate = $param["PositionUsedRate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
