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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpnConnectionState(string $VpnConnectionState) 设置vpn通道状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpngwBandwidthData getVpngwBandwidthData() 获取vpn网关监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpngwBandwidthData(VpngwBandwidthData $VpngwBandwidthData) 设置vpn网关监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method LocalNetInfo getLocalNetInfo() 获取本地网关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalNetInfo(LocalNetInfo $LocalNetInfo) 设置本地网关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpnConnectionBandwidthData() 获取vpn网关通道监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpnConnectionBandwidthData(array $VpnConnectionBandwidthData) 设置vpn网关通道监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpnConnectionState;

    /**
     * @var VpngwBandwidthData vpn网关监控数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpngwBandwidthData;

    /**
     * @var LocalNetInfo 本地网关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalNetInfo;

    /**
     * @var array vpn网关通道监控数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpnConnectionBandwidthData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CvmCount 云服务器数量
     * @param integer $HostCount 宿主机数量
     * @param string $VpnConnectionState vpn通道状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpngwBandwidthData $VpngwBandwidthData vpn网关监控数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param LocalNetInfo $LocalNetInfo 本地网关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpnConnectionBandwidthData vpn网关通道监控数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
