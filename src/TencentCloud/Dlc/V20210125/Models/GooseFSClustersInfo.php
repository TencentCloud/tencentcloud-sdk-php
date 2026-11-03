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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * goosefs返回参数
 *
 * @method string getClusterId() 获取<p>集群 ID，形如 g_cvm_xxx</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID，形如 g_cvm_xxx</p>
 * @method string getName() 获取<p>集群名称</p>
 * @method void setName(string $Name) 设置<p>集群名称</p>
 * @method string getSubnetId() 获取<p>所属子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>所属子网 ID</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getMasterRPCAddress() 获取<p>Master RPC 地址，多个地址用英文逗号拼接，例如 &quot;10.0.1.10:19998,10.0.1.11:19998&quot;，供 CSI 驱动连接用</p>
 * @method void setMasterRPCAddress(string $MasterRPCAddress) 设置<p>Master RPC 地址，多个地址用英文逗号拼接，例如 &quot;10.0.1.10:19998,10.0.1.11:19998&quot;，供 CSI 驱动连接用</p>
 */
class GooseFSClustersInfo extends AbstractModel
{
    /**
     * @var string <p>集群 ID，形如 g_cvm_xxx</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $Name;

    /**
     * @var string <p>所属子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>Master RPC 地址，多个地址用英文逗号拼接，例如 &quot;10.0.1.10:19998,10.0.1.11:19998&quot;，供 CSI 驱动连接用</p>
     */
    public $MasterRPCAddress;

    /**
     * @param string $ClusterId <p>集群 ID，形如 g_cvm_xxx</p>
     * @param string $Name <p>集群名称</p>
     * @param string $SubnetId <p>所属子网 ID</p>
     * @param string $Zone <p>可用区</p>
     * @param string $MasterRPCAddress <p>Master RPC 地址，多个地址用英文逗号拼接，例如 &quot;10.0.1.10:19998,10.0.1.11:19998&quot;，供 CSI 驱动连接用</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MasterRPCAddress",$param) and $param["MasterRPCAddress"] !== null) {
            $this->MasterRPCAddress = $param["MasterRPCAddress"];
        }
    }
}
