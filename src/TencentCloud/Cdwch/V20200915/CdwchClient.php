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

namespace TencentCloud\Cdwch\V20200915;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwch\V20200915\Models as Models;

/**
 * @method Models\ActionAlterCkUserResponse ActionAlterCkUser(Models\ActionAlterCkUserRequest $req) 新增和修改用户接口
 * @method Models\CreateBackUpScheduleResponse CreateBackUpSchedule(Models\CreateBackUpScheduleRequest $req) 创建或者修改备份策略
 * @method Models\CreateInstanceNewResponse CreateInstanceNew(Models\CreateInstanceNewRequest $req) 创建集群
 * @method Models\DescribeBackUpScheduleResponse DescribeBackUpSchedule(Models\DescribeBackUpScheduleRequest $req) 查询备份策略信息
 * @method Models\DescribeCkSqlApisResponse DescribeCkSqlApis(Models\DescribeCkSqlApisRequest $req) 查询集群用户、集群表，数据库等相关信息
 * @method Models\DescribeClusterConfigsResponse DescribeClusterConfigs(Models\DescribeClusterConfigsRequest $req) 获取集群的最新的几个配置文件（config.xml、metrika.xml、user.xml）的内容，显示给用户
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 根据实例ID查询某个实例的具体信息
 * @method Models\DescribeInstanceClustersResponse DescribeInstanceClusters(Models\DescribeInstanceClustersRequest $req) 集群vcluster列表
 * @method Models\DescribeInstanceKeyValConfigsResponse DescribeInstanceKeyValConfigs(Models\DescribeInstanceKeyValConfigsRequest $req) 在集群详情页面获取所有参数列表
 * @method Models\DescribeInstanceShardsResponse DescribeInstanceShards(Models\DescribeInstanceShardsRequest $req) 获取实例shard信息列表
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) 集群详情页中显示集群状态、流程进度等
 * @method Models\DescribeSpecResponse DescribeSpec(Models\DescribeSpecRequest $req) 购买页拉取集群的数据节点和zookeeper节点的规格列表
 * @method Models\DestroyInstanceResponse DestroyInstance(Models\DestroyInstanceRequest $req) 销毁集群 open api
 * @method Models\ModifyClusterConfigsResponse ModifyClusterConfigs(Models\ModifyClusterConfigsRequest $req) 在集群配置页面修改集群配置文件接口，xml模式
 * @method Models\ModifyInstanceKeyValConfigsResponse ModifyInstanceKeyValConfigs(Models\ModifyInstanceKeyValConfigsRequest $req) KV模式修改配置接口
 * @method Models\ModifyUserNewPrivilegeResponse ModifyUserNewPrivilege(Models\ModifyUserNewPrivilegeRequest $req) 针对ck账号的权限做管控（新版）
 * @method Models\OpenBackUpResponse OpenBackUp(Models\OpenBackUpRequest $req) 开启或者关闭策略
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) 扩容磁盘，包含扩容数据节点，zk节点
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 调整clickhouse节点数量
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) 垂直扩缩容节点规格，修改节点cvm的规格cpu，内存。 规格变化阶段，服务不可用。
 */

class CdwchClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwch.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwch";

    /**
     * @var string
     */
    protected $version = "2020-09-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwch")."\\"."V20200915\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
