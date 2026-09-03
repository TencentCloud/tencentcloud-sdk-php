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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterDedicatedProxy返回参数结构体
 *
 * @method boolean getEnabled() 获取<p>代理是否已开通。true表示已开通，false表示从未开通。</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>代理是否已开通。true表示已开通，false表示从未开通。</p>
 * @method string getEndPointId() 获取<p>终端节点ID。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPointId(string $EndPointId) 设置<p>终端节点ID。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndPointVip() 获取<p>终端节点VIP地址。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPointVip(string $EndPointVip) 设置<p>终端节点VIP地址。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEndPointReady() 获取<p>终端节点是否就绪。true表示已就绪可用，false表示未就绪或未开通。</p>
 * @method void setEndPointReady(boolean $EndPointReady) 设置<p>终端节点是否就绪。true表示已就绪可用，false表示未就绪或未开通。</p>
 * @method string getEndPointStatus() 获取<p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><li>ABNORMAL：异常</li><li>UNKNOWN：未知</li><li>ASSUME_ROLE_FAILED：授权失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPointStatus(string $EndPointStatus) 设置<p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><li>ABNORMAL：异常</li><li>UNKNOWN：未知</li><li>ASSUME_ROLE_FAILED：授权失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastKnownStatus() 获取<p>上次同步的终端节点状态（DB记录值）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastKnownStatus(string $LastKnownStatus) 设置<p>上次同步的终端节点状态（DB记录值）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndPointServiceId() 获取<p>终端节点服务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置<p>终端节点服务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>私有网络ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>子网ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>代理创建时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>代理创建时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastSyncTime() 获取<p>上次状态同步时间。cron未同步过时为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSyncTime(string $LastSyncTime) 设置<p>上次状态同步时间。cron未同步过时为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealtimeQueryTime() 获取<p>本次实时查询时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealtimeQueryTime(string $RealtimeQueryTime) 设置<p>本次实时查询时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterDedicatedProxyResponse extends AbstractModel
{
    /**
     * @var boolean <p>代理是否已开通。true表示已开通，false表示从未开通。</p>
     */
    public $Enabled;

    /**
     * @var string <p>终端节点ID。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPointId;

    /**
     * @var string <p>终端节点VIP地址。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPointVip;

    /**
     * @var boolean <p>终端节点是否就绪。true表示已就绪可用，false表示未就绪或未开通。</p>
     */
    public $EndPointReady;

    /**
     * @var string <p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><li>ABNORMAL：异常</li><li>UNKNOWN：未知</li><li>ASSUME_ROLE_FAILED：授权失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPointStatus;

    /**
     * @var string <p>上次同步的终端节点状态（DB记录值）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastKnownStatus;

    /**
     * @var string <p>终端节点服务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPointServiceId;

    /**
     * @var string <p>私有网络ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>子网ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string <p>代理创建时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>上次状态同步时间。cron未同步过时为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSyncTime;

    /**
     * @var string <p>本次实时查询时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealtimeQueryTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Enabled <p>代理是否已开通。true表示已开通，false表示从未开通。</p>
     * @param string $EndPointId <p>终端节点ID。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndPointVip <p>终端节点VIP地址。未开通代理时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EndPointReady <p>终端节点是否就绪。true表示已就绪可用，false表示未就绪或未开通。</p>
     * @param string $EndPointStatus <p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><li>ABNORMAL：异常</li><li>UNKNOWN：未知</li><li>ASSUME_ROLE_FAILED：授权失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastKnownStatus <p>上次同步的终端节点状态（DB记录值）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndPointServiceId <p>终端节点服务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>私有网络ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>子网ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>代理创建时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastSyncTime <p>上次状态同步时间。cron未同步过时为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealtimeQueryTime <p>本次实时查询时间。未开通时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("EndPointReady",$param) and $param["EndPointReady"] !== null) {
            $this->EndPointReady = $param["EndPointReady"];
        }

        if (array_key_exists("EndPointStatus",$param) and $param["EndPointStatus"] !== null) {
            $this->EndPointStatus = $param["EndPointStatus"];
        }

        if (array_key_exists("LastKnownStatus",$param) and $param["LastKnownStatus"] !== null) {
            $this->LastKnownStatus = $param["LastKnownStatus"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastSyncTime",$param) and $param["LastSyncTime"] !== null) {
            $this->LastSyncTime = $param["LastSyncTime"];
        }

        if (array_key_exists("RealtimeQueryTime",$param) and $param["RealtimeQueryTime"] !== null) {
            $this->RealtimeQueryTime = $param["RealtimeQueryTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
