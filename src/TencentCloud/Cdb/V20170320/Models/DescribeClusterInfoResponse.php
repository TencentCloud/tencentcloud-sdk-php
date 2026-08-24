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
 * @method string getClusterName() 获取<p>实例名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>实例名称。</p>
 * @method AddressInfo getReadWriteAddress() 获取<p>云盘版实例的读写地址信息。</p>
 * @method void setReadWriteAddress(AddressInfo $ReadWriteAddress) 设置<p>云盘版实例的读写地址信息。</p>
 * @method array getReadOnlyAddress() 获取<p>云盘版实例的只读地址信息。</p>
 * @method void setReadOnlyAddress(array $ReadOnlyAddress) 设置<p>云盘版实例的只读地址信息。</p>
 * @method array getNodeList() 获取<p>云盘版实例的节点列表信息。</p>
 * @method void setNodeList(array $NodeList) 设置<p>云盘版实例的节点列表信息。</p>
 * @method integer getReadonlyLimit() 获取<p>只读空间保护阈值,单位GB</p>
 * @method void setReadonlyLimit(integer $ReadonlyLimit) 设置<p>只读空间保护阈值,单位GB</p>
 * @method integer getNodeCount() 获取<p>实例节点数。</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>实例节点数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterInfoResponse extends AbstractModel
{
    /**
     * @var string <p>实例名称。</p>
     */
    public $ClusterName;

    /**
     * @var AddressInfo <p>云盘版实例的读写地址信息。</p>
     */
    public $ReadWriteAddress;

    /**
     * @var array <p>云盘版实例的只读地址信息。</p>
     */
    public $ReadOnlyAddress;

    /**
     * @var array <p>云盘版实例的节点列表信息。</p>
     */
    public $NodeList;

    /**
     * @var integer <p>只读空间保护阈值,单位GB</p>
     */
    public $ReadonlyLimit;

    /**
     * @var integer <p>实例节点数。</p>
     */
    public $NodeCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterName <p>实例名称。</p>
     * @param AddressInfo $ReadWriteAddress <p>云盘版实例的读写地址信息。</p>
     * @param array $ReadOnlyAddress <p>云盘版实例的只读地址信息。</p>
     * @param array $NodeList <p>云盘版实例的节点列表信息。</p>
     * @param integer $ReadonlyLimit <p>只读空间保护阈值,单位GB</p>
     * @param integer $NodeCount <p>实例节点数。</p>
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
