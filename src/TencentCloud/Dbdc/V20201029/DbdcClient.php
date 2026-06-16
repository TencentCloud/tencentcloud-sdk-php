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

namespace TencentCloud\Dbdc\V20201029;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbdc\V20201029\Models as Models;

/**
 * @method Models\AddNodesToDBCustomClusterResponse AddNodesToDBCustomCluster(Models\AddNodesToDBCustomClusterRequest $req) 该接口（AddNodesToDBCustomCluster）用于为 DB Custom 集群上架节点。
 * @method Models\CheckRoleAuthorizedResponse CheckRoleAuthorized(Models\CheckRoleAuthorizedRequest $req) 检查服务相关角色是否已创建
 * @method Models\CreateDBCustomClusterResponse CreateDBCustomCluster(Models\CreateDBCustomClusterRequest $req) 该接口（CreateDBCustomCluster）用于创建 DB Custom 集群。
 * @method Models\CreateDBCustomNodesResponse CreateDBCustomNodes(Models\CreateDBCustomNodesRequest $req) 该接口（CreateDBCustomNodes）用于创建 DB Custom 节点(需支付)。
 * @method Models\DescribeDBCustomClusterDetailResponse DescribeDBCustomClusterDetail(Models\DescribeDBCustomClusterDetailRequest $req) 该接口(DescribeDBCustomClusterDetail) 用于查询 DB Custom 集群的详情信息。
 * @method Models\DescribeDBCustomClusterKubeconfigResponse DescribeDBCustomClusterKubeconfig(Models\DescribeDBCustomClusterKubeconfigRequest $req) 该接口（DescribeDBCustomClusterKubeconfig）用于查询 DB Custom 集群 Kubeconfig。
 * @method Models\DescribeDBCustomClusterNodesResponse DescribeDBCustomClusterNodes(Models\DescribeDBCustomClusterNodesRequest $req) 该接口（DescribeDBCustomClusterNodes）用于查询 DB Custom 集群中的节点列表。
 * @method Models\DescribeDBCustomClustersResponse DescribeDBCustomClusters(Models\DescribeDBCustomClustersRequest $req) 该接口（DescribeDBCustomClusters）为DB Custom 集群列表查询接口。
 * @method Models\DescribeDBCustomImagesResponse DescribeDBCustomImages(Models\DescribeDBCustomImagesRequest $req) 该接口（DescribeDBCustomImages）用于查询 DB Custom 可用的操作系统镜像列表。
 * @method Models\DescribeDBCustomNodesResponse DescribeDBCustomNodes(Models\DescribeDBCustomNodesRequest $req) 该接口（DescribeDBCustomNodes）用于查询 DB Custom 节点列表。
 * @method Models\DescribeDBCustomTaskStatusResponse DescribeDBCustomTaskStatus(Models\DescribeDBCustomTaskStatusRequest $req) 该接口（DescribeDBCustomTaskStatus）用于查询 DB Custom 任务的状态。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口用于查询独享集群内的DB实例列表
 * @method Models\DescribeHostListResponse DescribeHostList(Models\DescribeHostListRequest $req) 本接口用于查询主机列表
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) 本接口用于查询独享集群详情
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 本接口用于查询独享集群实例列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 根据不同地域不同用户，获取集群列表信息
 * @method Models\DestroyDBCustomClusterResponse DestroyDBCustomCluster(Models\DestroyDBCustomClusterRequest $req) 该接口（DestroyDBCustomCluster）用于销毁 DB Custom 集群。
 * @method Models\DestroyDBCustomNodeResponse DestroyDBCustomNode(Models\DestroyDBCustomNodeRequest $req) 该接口（DestroyDBCustomNode）用于销毁 DB Custom 节点。
 * @method Models\IsolateDBCustomNodeResponse IsolateDBCustomNode(Models\IsolateDBCustomNodeRequest $req) 该接口 (IsolateDBCustomNode) 用于隔离 DB Custom 节点。
 * @method Models\ModifyDBCustomClusterTagsResponse ModifyDBCustomClusterTags(Models\ModifyDBCustomClusterTagsRequest $req) 该接口（ModifyDBCustomClusterTags）用于修改 DB Custom 集群的标签配置。
 * @method Models\ModifyDBCustomNodeTagsResponse ModifyDBCustomNodeTags(Models\ModifyDBCustomNodeTagsRequest $req) 该接口（ModifyDBCustomNodeTags）用于修改 DB Custom 节点的标签配置。
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 本接口用于修改集群名称
 * @method Models\RemoveNodesFromDBCustomClusterResponse RemoveNodesFromDBCustomCluster(Models\RemoveNodesFromDBCustomClusterRequest $req) 该接口（RemoveNodesFromDBCustomCluster）用于从 DB Custom 集群移除节点。
 * @method Models\RenewDBCustomNodeResponse RenewDBCustomNode(Models\RenewDBCustomNodeRequest $req) 该接口（RenewDBCustomNode）用于给 DB Custom 节点续费。
 */

class DbdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbdc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbdc";

    /**
     * @var string
     */
    protected $version = "2020-10-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbdc")."\\"."V20201029\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
