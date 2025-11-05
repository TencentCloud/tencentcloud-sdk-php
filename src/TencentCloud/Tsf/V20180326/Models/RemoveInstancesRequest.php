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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
 * @method void setClusterId(string $ClusterId) 设置集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
 * @method array getInstanceIdList() 获取云主机 ID 列表，调用[DescribeInstances](https://cloud.tencent.com/document/api/649/72342)查询已有的云主机列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置云主机 ID 列表，调用[DescribeInstances](https://cloud.tencent.com/document/api/649/72342)查询已有的云主机列表
 */
class RemoveInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
     */
    public $ClusterId;

    /**
     * @var array 云主机 ID 列表，调用[DescribeInstances](https://cloud.tencent.com/document/api/649/72342)查询已有的云主机列表
     */
    public $InstanceIdList;

    /**
     * @param string $ClusterId 集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
     * @param array $InstanceIdList 云主机 ID 列表，调用[DescribeInstances](https://cloud.tencent.com/document/api/649/72342)查询已有的云主机列表
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

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }
    }
}
