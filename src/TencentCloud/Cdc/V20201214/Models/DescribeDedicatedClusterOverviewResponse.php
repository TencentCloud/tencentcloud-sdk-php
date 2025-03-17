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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterOverview返回参数结构体
 *
 * @method integer getCvmCount() 获取云服务器数量
 * @method void setCvmCount(integer $CvmCount) 设置云服务器数量
 * @method integer getHostCount() 获取宿主机数量
 * @method void setHostCount(integer $HostCount) 设置宿主机数量
 * @method string getVpnConnectionState() 获取vpn通道状态
 * @method void setVpnConnectionState(string $VpnConnectionState) 设置vpn通道状态
 * @method VpngwBandwidthData getVpngwBandwidthData() 获取vpn网关监控数据
 * @method void setVpngwBandwidthData(VpngwBandwidthData $VpngwBandwidthData) 设置vpn网关监控数据
 * @method LocalNetInfo getLocalNetInfo() 获取本地网关信息
 * @method void setLocalNetInfo(LocalNetInfo $LocalNetInfo) 设置本地网关信息
 * @method array getVpnConnectionBandwidthData() 获取vpn网关通道监控数据
 * @method void setVpnConnectionBandwidthData(array $VpnConnectionBandwidthData) 设置vpn网关通道监控数据
 * @method array getHostDetailInfo() 获取宿主机资源概览信息
 * @method void setHostDetailInfo(array $HostDetailInfo) 设置宿主机资源概览信息
 * @method integer getHostStandbyCount() 获取热备宿主机数量
 * @method void setHostStandbyCount(integer $HostStandbyCount) 设置热备宿主机数量
 * @method integer getHostNormalCount() 获取普通宿主机数量
 * @method void setHostNormalCount(integer $HostNormalCount) 设置普通宿主机数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDedicatedClusterOverviewResponse extends AbstractModel
{
    /**
     * @var integer 云服务器数量
     */
    public $CvmCount;

    /**
     * @var integer 宿主机数量
     */
    public $HostCount;

    /**
     * @var string vpn通道状态
     */
    public $VpnConnectionState;

    /**
     * @var VpngwBandwidthData vpn网关监控数据
     */
    public $VpngwBandwidthData;

    /**
     * @var LocalNetInfo 本地网关信息
     */
    public $LocalNetInfo;

    /**
     * @var array vpn网关通道监控数据
     */
    public $VpnConnectionBandwidthData;

    /**
     * @var array 宿主机资源概览信息
     */
    public $HostDetailInfo;

    /**
     * @var integer 热备宿主机数量
     */
    public $HostStandbyCount;

    /**
     * @var integer 普通宿主机数量
     */
    public $HostNormalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CvmCount 云服务器数量
     * @param integer $HostCount 宿主机数量
     * @param string $VpnConnectionState vpn通道状态
     * @param VpngwBandwidthData $VpngwBandwidthData vpn网关监控数据
     * @param LocalNetInfo $LocalNetInfo 本地网关信息
     * @param array $VpnConnectionBandwidthData vpn网关通道监控数据
     * @param array $HostDetailInfo 宿主机资源概览信息
     * @param integer $HostStandbyCount 热备宿主机数量
     * @param integer $HostNormalCount 普通宿主机数量
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
        if (array_key_exists("CvmCount",$param) and $param["CvmCount"] !== null) {
            $this->CvmCount = $param["CvmCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("VpnConnectionState",$param) and $param["VpnConnectionState"] !== null) {
            $this->VpnConnectionState = $param["VpnConnectionState"];
        }

        if (array_key_exists("VpngwBandwidthData",$param) and $param["VpngwBandwidthData"] !== null) {
            $this->VpngwBandwidthData = new VpngwBandwidthData();
            $this->VpngwBandwidthData->deserialize($param["VpngwBandwidthData"]);
        }

        if (array_key_exists("LocalNetInfo",$param) and $param["LocalNetInfo"] !== null) {
            $this->LocalNetInfo = new LocalNetInfo();
            $this->LocalNetInfo->deserialize($param["LocalNetInfo"]);
        }

        if (array_key_exists("VpnConnectionBandwidthData",$param) and $param["VpnConnectionBandwidthData"] !== null) {
            $this->VpnConnectionBandwidthData = [];
            foreach ($param["VpnConnectionBandwidthData"] as $key => $value){
                $obj = new VpngwBandwidthData();
                $obj->deserialize($value);
                array_push($this->VpnConnectionBandwidthData, $obj);
            }
        }

        if (array_key_exists("HostDetailInfo",$param) and $param["HostDetailInfo"] !== null) {
            $this->HostDetailInfo = [];
            foreach ($param["HostDetailInfo"] as $key => $value){
                $obj = new HostDetailInfo();
                $obj->deserialize($value);
                array_push($this->HostDetailInfo, $obj);
            }
        }

        if (array_key_exists("HostStandbyCount",$param) and $param["HostStandbyCount"] !== null) {
            $this->HostStandbyCount = $param["HostStandbyCount"];
        }

        if (array_key_exists("HostNormalCount",$param) and $param["HostNormalCount"] !== null) {
            $this->HostNormalCount = $param["HostNormalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
