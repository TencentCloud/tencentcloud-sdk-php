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
 * EnableClusterDedicatedProxy返回参数结构体
 *
 * @method string getEndPointId() 获取<p>终端节点ID。</p>
 * @method void setEndPointId(string $EndPointId) 设置<p>终端节点ID。</p>
 * @method string getEndPointVip() 获取<p>终端节点VIP地址。</p>
 * @method void setEndPointVip(string $EndPointVip) 设置<p>终端节点VIP地址。</p>
 * @method boolean getEndPointReady() 获取<p>终端节点是否就绪。true表示已就绪，false表示未就绪。</p>
 * @method void setEndPointReady(boolean $EndPointReady) 设置<p>终端节点是否就绪。true表示已就绪，false表示未就绪。</p>
 * @method string getEndPointStatus() 获取<p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li></p>
 * @method void setEndPointStatus(string $EndPointStatus) 设置<p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li></p>
 * @method string getVpcId() 获取<p>私有网络ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID。</p>
 * @method string getSubnetId() 获取<p>子网ID。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class EnableClusterDedicatedProxyResponse extends AbstractModel
{
    /**
     * @var string <p>终端节点ID。</p>
     */
    public $EndPointId;

    /**
     * @var string <p>终端节点VIP地址。</p>
     */
    public $EndPointVip;

    /**
     * @var boolean <p>终端节点是否就绪。true表示已就绪，false表示未就绪。</p>
     */
    public $EndPointReady;

    /**
     * @var string <p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li></p>
     */
    public $EndPointStatus;

    /**
     * @var string <p>私有网络ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID。</p>
     */
    public $SubnetId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EndPointId <p>终端节点ID。</p>
     * @param string $EndPointVip <p>终端节点VIP地址。</p>
     * @param boolean $EndPointReady <p>终端节点是否就绪。true表示已就绪，false表示未就绪。</p>
     * @param string $EndPointStatus <p>终端节点状态。取值范围：<li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li></p>
     * @param string $VpcId <p>私有网络ID。</p>
     * @param string $SubnetId <p>子网ID。</p>
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
