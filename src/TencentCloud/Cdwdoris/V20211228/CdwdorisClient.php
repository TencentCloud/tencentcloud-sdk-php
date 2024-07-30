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

namespace TencentCloud\Cdwdoris\V20211228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwdoris\V20211228\Models as Models;

/**
 * @method Models\CreateInstanceNewResponse CreateInstanceNew(Models\CreateInstanceNewRequest $req) 通过API创建集群
 * @method Models\CreateWorkloadGroupResponse CreateWorkloadGroup(Models\CreateWorkloadGroupRequest $req) 创建资源组
 * @method Models\DeleteWorkloadGroupResponse DeleteWorkloadGroup(Models\DeleteWorkloadGroupRequest $req) 删除资源组
 * @method Models\DescribeClusterConfigsResponse DescribeClusterConfigs(Models\DescribeClusterConfigsRequest $req) 获取集群的最新的几个配置文件（config.xml、metrika.xml、user.xml）的内容，显示给用户
 * @method Models\DescribeDatabaseAuditDownloadResponse DescribeDatabaseAuditDownload(Models\DescribeDatabaseAuditDownloadRequest $req) 下载数据库审计日志
 * @method Models\DescribeDatabaseAuditRecordsResponse DescribeDatabaseAuditRecords(Models\DescribeDatabaseAuditRecordsRequest $req) 获取数据库审计记录
 * @method Models\DescribeFederationTokenResponse DescribeFederationToken(Models\DescribeFederationTokenRequest $req) 获取联合身份临时访问凭证
 * @method Models\DescribeGoodsDetailResponse DescribeGoodsDetail(Models\DescribeGoodsDetailRequest $req) 生成计费相关接口的GoodsDetail结构
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 根据集群ID查询某个集群的具体信息
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) 获取集群节点信息列表
 * @method Models\DescribeInstanceNodesInfoResponse DescribeInstanceNodesInfo(Models\DescribeInstanceNodesInfoRequest $req) 获取BE/FE节点角色
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) 集群详情页中显示集群状态、流程进度等
 * @method Models\DescribeInstanceUsedSubnetsResponse DescribeInstanceUsedSubnets(Models\DescribeInstanceUsedSubnetsRequest $req) 获取集群已使用子网信息
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取集群列表
 * @method Models\DescribeRegionZoneResponse DescribeRegionZone(Models\DescribeRegionZoneRequest $req) 购买页获取地域及可用区列表、内核版本、网络规则等
 * @method Models\DescribeReplicaVersionResponse DescribeReplicaVersion(Models\DescribeReplicaVersionRequest $req) 检查内核版本是否支持新的备份恢复语法
 * @method Models\DescribeRestoreTaskDetailResponse DescribeRestoreTaskDetail(Models\DescribeRestoreTaskDetailRequest $req) 查询恢复任务进度详情
 * @method Models\DescribeSlowQueryRecordsResponse DescribeSlowQueryRecords(Models\DescribeSlowQueryRecordsRequest $req) 获取慢查询列表
 * @method Models\DescribeSlowQueryRecordsDownloadResponse DescribeSlowQueryRecordsDownload(Models\DescribeSlowQueryRecordsDownloadRequest $req) 下载慢查询文件
 * @method Models\DescribeSqlApisResponse DescribeSqlApis(Models\DescribeSqlApisRequest $req) 针对驱动sql命令查询ck集群接口
 * @method Models\DescribeUserBindWorkloadGroupResponse DescribeUserBindWorkloadGroup(Models\DescribeUserBindWorkloadGroupRequest $req) 获取当前集群各用户绑定的资源信息
 * @method Models\DescribeWorkloadGroupResponse DescribeWorkloadGroup(Models\DescribeWorkloadGroupRequest $req) 获取资源组信息
 * @method Models\DestroyInstanceResponse DestroyInstance(Models\DestroyInstanceRequest $req) 销毁集群
 * @method Models\FitClsLogResponse FitClsLog(Models\FitClsLogRequest $req) 给已存在集群，配置日志服务
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改集群名称
 * @method Models\ModifyInstanceKeyValConfigsResponse ModifyInstanceKeyValConfigs(Models\ModifyInstanceKeyValConfigsRequest $req) KV模式修改配置接口
 * @method Models\ModifySecurityGroupsResponse ModifySecurityGroups(Models\ModifySecurityGroupsRequest $req) 更改安全组
 * @method Models\ModifyUserBindWorkloadGroupResponse ModifyUserBindWorkloadGroup(Models\ModifyUserBindWorkloadGroupRequest $req) 修改用户绑定的资源组
 * @method Models\ModifyUserPrivilegesV3Response ModifyUserPrivilegesV3(Models\ModifyUserPrivilegesV3Request $req) 修改用户权限,支持catalog，全部db，部分db表三种权限设置类别
 * @method Models\ModifyWorkloadGroupResponse ModifyWorkloadGroup(Models\ModifyWorkloadGroupRequest $req) 修改资源组信息
 * @method Models\ModifyWorkloadGroupStatusResponse ModifyWorkloadGroupStatus(Models\ModifyWorkloadGroupStatusRequest $req) 开启或关闭资源组
 * @method Models\ReduceInstanceResponse ReduceInstance(Models\ReduceInstanceRequest $req) 集群缩容
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) 扩容云盘
 * @method Models\RestartClusterForNodeResponse RestartClusterForNode(Models\RestartClusterForNodeRequest $req) 集群滚动重启
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 水平扩容节点
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) 计算资源垂直变配
 */

class CdwdorisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwdoris.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwdoris";

    /**
     * @var string
     */
    protected $version = "2021-12-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwdoris")."\\"."V20211228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
