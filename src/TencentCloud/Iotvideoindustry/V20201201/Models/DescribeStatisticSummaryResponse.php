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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatisticSummary返回参数结构体
 *
 * @method integer getRecordingDevice() 获取录制设备总数
 * @method void setRecordingDevice(integer $RecordingDevice) 设置录制设备总数
 * @method integer getNonRecordingDevice() 获取非录制设备总数
 * @method void setNonRecordingDevice(integer $NonRecordingDevice) 设置非录制设备总数
 * @method float getWatchFlux() 获取观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
 * @method void setWatchFlux(float $WatchFlux) 设置观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
 * @method float getStorageUsage() 获取累计有效存储容量总数。单位：GB
 * @method void setStorageUsage(float $StorageUsage) 设置累计有效存储容量总数。单位：GB
 * @method float getP2PFluxTotal() 获取X-P2P分享流量。单位 Byte
 * @method void setP2PFluxTotal(float $P2PFluxTotal) 设置X-P2P分享流量。单位 Byte
 * @method float getP2PPeakValue() 获取X-P2P峰值带宽。 单位bps
 * @method void setP2PPeakValue(float $P2PPeakValue) 设置X-P2P峰值带宽。 单位bps
 * @method integer getLivePushTotal() 获取RTMP推流路数 ( 直播推流)
 * @method void setLivePushTotal(integer $LivePushTotal) 设置RTMP推流路数 ( 直播推流)
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStatisticSummaryResponse extends AbstractModel
{
    /**
     * @var integer 录制设备总数
     */
    public $RecordingDevice;

    /**
     * @var integer 非录制设备总数
     */
    public $NonRecordingDevice;

    /**
     * @var float 观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
     */
    public $WatchFlux;

    /**
     * @var float 累计有效存储容量总数。单位：GB
     */
    public $StorageUsage;

    /**
     * @var float X-P2P分享流量。单位 Byte
     */
    public $P2PFluxTotal;

    /**
     * @var float X-P2P峰值带宽。 单位bps
     */
    public $P2PPeakValue;

    /**
     * @var integer RTMP推流路数 ( 直播推流)
     */
    public $LivePushTotal;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RecordingDevice 录制设备总数
     * @param integer $NonRecordingDevice 非录制设备总数
     * @param float $WatchFlux 观看流量总数。为直播观看流量与点播观看流量之和。单位：GB
     * @param float $StorageUsage 累计有效存储容量总数。单位：GB
     * @param float $P2PFluxTotal X-P2P分享流量。单位 Byte
     * @param float $P2PPeakValue X-P2P峰值带宽。 单位bps
     * @param integer $LivePushTotal RTMP推流路数 ( 直播推流)
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
        if (array_key_exists("RecordingDevice",$param) and $param["RecordingDevice"] !== null) {
            $this->RecordingDevice = $param["RecordingDevice"];
        }

        if (array_key_exists("NonRecordingDevice",$param) and $param["NonRecordingDevice"] !== null) {
            $this->NonRecordingDevice = $param["NonRecordingDevice"];
        }

        if (array_key_exists("WatchFlux",$param) and $param["WatchFlux"] !== null) {
            $this->WatchFlux = $param["WatchFlux"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("P2PFluxTotal",$param) and $param["P2PFluxTotal"] !== null) {
            $this->P2PFluxTotal = $param["P2PFluxTotal"];
        }

        if (array_key_exists("P2PPeakValue",$param) and $param["P2PPeakValue"] !== null) {
            $this->P2PPeakValue = $param["P2PPeakValue"];
        }

        if (array_key_exists("LivePushTotal",$param) and $param["LivePushTotal"] !== null) {
            $this->LivePushTotal = $param["LivePushTotal"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
