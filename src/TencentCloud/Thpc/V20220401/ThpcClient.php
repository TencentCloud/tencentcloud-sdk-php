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

namespace TencentCloud\Thpc\V20220401;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Thpc\V20220401\Models as Models;

/**
 * @method Models\AddClusterStorageOptionResponse AddClusterStorageOption(Models\AddClusterStorageOptionRequest $req) 本接口（AddClusterStorageOption）用于添加集群存储选项信息。
 * @method Models\AddNodesResponse AddNodes(Models\AddNodesRequest $req) 本接口(AddNodes)用于添加一个或者多个计算节点或者登录节点到指定集群。
 * @method Models\AddQueueResponse AddQueue(Models\AddQueueRequest $req) 本接口(AddQueue)用于添加队列到指定集群。
* 本接口为目前只支持SchedulerType为SLURM的集群。
* 单个集群中队列数量上限为10个。
 * @method Models\BindAutoScalingGroupResponse BindAutoScalingGroup(Models\BindAutoScalingGroupRequest $req) 本接口(BindAutoScalingGroup)用于为集群队列绑定弹性伸缩组
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 本接口 (CreateCluster) 用于创建并启动集群。

* 本接口为异步接口， 当创建集群请求下发成功后会返回一个集群`ID`和一个`RequestId`，此时创建集群操作并未立即完成。在此期间集群的状态将会处于“PENDING”或者“INITING”，集群创建结果可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/1527/72100)  接口查询，如果集群状态(ClusterStatus)变为“RUNNING(运行中)”，则代表集群创建成功，“ INIT_FAILED”代表集群创建失败。
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 本接口（DeleteCluster）用于删除一个指定的集群。
 * @method Models\DeleteClusterStorageOptionResponse DeleteClusterStorageOption(Models\DeleteClusterStorageOptionRequest $req) 本接口 (DeleteClusterStorageOption) 用于删除集群存储选项信息。
 * @method Models\DeleteNodesResponse DeleteNodes(Models\DeleteNodesRequest $req) 本接口(DeleteNodes)用于删除指定集群中一个或者多个计算节点或者登录节点。
 * @method Models\DeleteQueueResponse DeleteQueue(Models\DeleteQueueRequest $req) 本接口(DeleteQueue)用于从指定集群删除队列。
* 本接口为目前只支持SchedulerType为SLURM的集群。

* 删除队列时，需要保证队列内不存在节点。
 * @method Models\DescribeAutoScalingConfigurationResponse DescribeAutoScalingConfiguration(Models\DescribeAutoScalingConfigurationRequest $req) 本接口(DescribeAutoScalingConfiguration)用于查询集群弹性伸缩配置信息。本接口仅适用于弹性伸缩类型为THPC_AS的集群。
 * @method Models\DescribeClusterActivitiesResponse DescribeClusterActivities(Models\DescribeClusterActivitiesRequest $req) 本接口（DescribeClusterActivities）用于查询集群活动历史记录列表。
 * @method Models\DescribeClusterStorageOptionResponse DescribeClusterStorageOption(Models\DescribeClusterStorageOptionRequest $req) 本接口 (DescribeClusterStorageOption) 用于查询集群存储选项信息。
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 本接口（DescribeClusters）用于查询集群列表。
 * @method Models\DescribeNodesResponse DescribeNodes(Models\DescribeNodesRequest $req) 本接口 (DescribeNodes) 用于查询指定集群节点概览信息列表。
 * @method Models\DescribeQueuesResponse DescribeQueues(Models\DescribeQueuesRequest $req) 本接口(DescribeQueues)用于查询指定集群队列概览信息列表。
 * @method Models\SetAutoScalingConfigurationResponse SetAutoScalingConfiguration(Models\SetAutoScalingConfigurationRequest $req) 本接口(SetAutoScalingConfiguration)用于为集群设置集群弹性伸缩配置信息。
 */

class ThpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "thpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "thpc";

    /**
     * @var string
     */
    protected $version = "2022-04-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("thpc")."\\"."V20220401\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
