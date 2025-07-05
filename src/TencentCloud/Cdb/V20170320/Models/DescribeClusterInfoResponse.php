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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInfo返回参数结构体
 *
 * @method string getClusterName() 获取实例名称。
 * @method void setClusterName(string $ClusterName) 设置实例名称。
 * @method AddressInfo getReadWriteAddress() 获取云盘版实例的读写地址信息。
 * @method void setReadWriteAddress(AddressInfo $ReadWriteAddress) 设置云盘版实例的读写地址信息。
 * @method array getReadOnlyAddress() 获取云盘版实例的只读地址信息。
 * @method void setReadOnlyAddress(array $ReadOnlyAddress) 设置云盘版实例的只读地址信息。
 * @method array getNodeList() 获取云盘版实例的节点列表信息。
 * @method void setNodeList(array $NodeList) 设置云盘版实例的节点列表信息。
 * @method integer getReadonlyLimit() 获取只读空间保护阈值,单位GB
 * @method void setReadonlyLimit(integer $ReadonlyLimit) 设置只读空间保护阈值,单位GB
 * @method integer getNodeCount() 获取实例节点数。
 * @method void setNodeCount(integer $NodeCount) 设置实例节点数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterInfoResponse extends AbstractModel
{
    /**
     * @var string 实例名称。
     */
    public $ClusterName;

    /**
     * @var AddressInfo 云盘版实例的读写地址信息。
     */
    public $ReadWriteAddress;

    /**
     * @var array 云盘版实例的只读地址信息。
     */
    public $ReadOnlyAddress;

    /**
     * @var array 云盘版实例的节点列表信息。
     */
    public $NodeList;

    /**
     * @var integer 只读空间保护阈值,单位GB
     */
    public $ReadonlyLimit;

    /**
     * @var integer 实例节点数。
     */
    public $NodeCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterName 实例名称。
     * @param AddressInfo $ReadWriteAddress 云盘版实例的读写地址信息。
     * @param array $ReadOnlyAddress 云盘版实例的只读地址信息。
     * @param array $NodeList 云盘版实例的节点列表信息。
     * @param integer $ReadonlyLimit 只读空间保护阈值,单位GB
     * @param integer $NodeCount 实例节点数。
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ReadWriteAddress",$param) and $param["ReadWriteAddress"] !== null) {
            $this->ReadWriteAddress = new AddressInfo();
            $this->ReadWriteAddress->deserialize($param["ReadWriteAddress"]);
        }

        if (array_key_exists("ReadOnlyAddress",$param) and $param["ReadOnlyAddress"] !== null) {
            $this->ReadOnlyAddress = [];
            foreach ($param["ReadOnlyAddress"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->ReadOnlyAddress, $obj);
            }
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new ClusterNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("ReadonlyLimit",$param) and $param["ReadonlyLimit"] !== null) {
            $this->ReadonlyLimit = $param["ReadonlyLimit"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
