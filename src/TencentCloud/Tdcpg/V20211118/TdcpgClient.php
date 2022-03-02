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

namespace TencentCloud\Tdcpg\V20211118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdcpg\V20211118\Models as Models;

/**
 * @method Models\CloneClusterToPointInTimeResponse CloneClusterToPointInTime(Models\CloneClusterToPointInTimeRequest $req) 使用指定时间点的备份克隆一个新的集群
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建集群
 * @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) 在集群中新建实例
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群，集群中的实例和数据都将被删除，且无法恢复。只有当集群状态处于isolated(已隔离)时才生效。
 * @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) 删除实例。只有当实例状态处于isolated(已隔离)时才生效。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 查询数据库账号信息
 * @method Models\DescribeClusterBackupsResponse DescribeClusterBackups(Models\DescribeClusterBackupsRequest $req) 查询集群的备份集
 * @method Models\DescribeClusterEndpointsResponse DescribeClusterEndpoints(Models\DescribeClusterEndpointsRequest $req) 查询集群接入点信息
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) 查询实例
 * @method Models\DescribeClusterRecoveryTimeRangeResponse DescribeClusterRecoveryTimeRange(Models\DescribeClusterRecoveryTimeRangeRequest $req) 查询集群可回档时间范围
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) 根据订单号获取资源信息
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) 隔离集群，集群的接入点网络将会断掉无法连接使用数据库。只有当集群状态处于running(运行中)时才生效。
 * @method Models\IsolateClusterInstancesResponse IsolateClusterInstances(Models\IsolateClusterInstancesRequest $req) 隔离实例。此接口只针对状态为running的实例生效，使用场景包括：
 - 批量隔离集群内所有的实例
 - 在读写实例为running(运行中)时，单个/批量隔离只读实例
 - 集群内所有只读实例为isolated(已隔离)时，单独隔离读写实例
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 修改数据库账号描述
 * @method Models\ModifyClusterEndpointWanStatusResponse ModifyClusterEndpointWanStatus(Models\ModifyClusterEndpointWanStatusRequest $req) 开启或者关闭接入点外网
 * @method Models\ModifyClusterInstancesSpecResponse ModifyClusterInstancesSpec(Models\ModifyClusterInstancesSpecRequest $req) 修改实例规格，此接口只针对状态为running(运行中)的实例生效
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) 修改集群名字
 * @method Models\ModifyClustersAutoRenewFlagResponse ModifyClustersAutoRenewFlag(Models\ModifyClustersAutoRenewFlagRequest $req) 修改集群自动续费，只对预付费集群生效。
 * @method Models\RecoverClusterResponse RecoverCluster(Models\RecoverClusterRequest $req) 恢复集群，恢复集群的接入点网络，恢复后继续连接使用数据库。只有当集群状态处于isolated(已隔离)时才生效。
 * @method Models\RecoverClusterInstancesResponse RecoverClusterInstances(Models\RecoverClusterInstancesRequest $req) 恢复实例。此接口的使用场景包括：
 - 读写实例状态为running(运行中)时，批量恢复状态为isolated(已隔离)的只读实例
 - 读写实例状态为isolated(已隔离)时，恢复读写实例
 - 读写实例状态为isolated(已隔离)时，批量恢复读写实例以及状态为isolated(已隔离)的只读实例
 * @method Models\RenewClusterResponse RenewCluster(Models\RenewClusterRequest $req) 续费集群
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 重置数据库账号密码
 * @method Models\RestartClusterInstancesResponse RestartClusterInstances(Models\RestartClusterInstancesRequest $req) 重启实例，此接口只针对状态为running(运行中)的实例生效。
 * @method Models\TransformClusterPayModeResponse TransformClusterPayMode(Models\TransformClusterPayModeRequest $req) 转换集群付费模式，目前只支持从 后付费 转换成 与预付费。
 */

class TdcpgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdcpg.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdcpg";

    /**
     * @var string
     */
    protected $version = "2021-11-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdcpg")."\\"."V20211118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
