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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunResourceForExtend返回参数结构体
 *
 * @method string getClusterStatus() 获取集群状态(creating/succ)
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态(creating/succ)
 * @method string getVirtualClusterId() 获取虚拟集群ID
 * @method void setVirtualClusterId(string $VirtualClusterId) 设置虚拟集群ID
 * @method string getVpcId() 获取vpc id信息
 * @method void setVpcId(string $VpcId) 设置vpc id信息
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method array getSubnetIds() 获取子网信息
 * @method void setSubnetIds(array $SubnetIds) 设置子网信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseRunResourceForExtendResponse extends AbstractModel
{
    /**
     * @var string 集群状态(creating/succ)
     */
    public $ClusterStatus;

    /**
     * @var string 虚拟集群ID
     */
    public $VirtualClusterId;

    /**
     * @var string vpc id信息
     */
    public $VpcId;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var array 子网信息
     */
    public $SubnetIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterStatus 集群状态(creating/succ)
     * @param string $VirtualClusterId 虚拟集群ID
     * @param string $VpcId vpc id信息
     * @param string $Region 地域信息
     * @param array $SubnetIds 子网信息
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
        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("VirtualClusterId",$param) and $param["VirtualClusterId"] !== null) {
            $this->VirtualClusterId = $param["VirtualClusterId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = [];
            foreach ($param["SubnetIds"] as $key => $value){
                $obj = new CloudBaseRunVpcSubnet();
                $obj->deserialize($value);
                array_push($this->SubnetIds, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
