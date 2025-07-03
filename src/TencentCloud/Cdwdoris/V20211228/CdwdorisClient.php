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
 * @method Models\ActionAlterUserResponse ActionAlterUser(Models\ActionAlterUserRequest $req) 新增和修改用户接口
 * @method Models\CancelBackupJobResponse CancelBackupJob(Models\CancelBackupJobRequest $req) 取消对应的备份实例任务
 * @method Models\CheckCoolDownWorkingVariableConfigCorrectResponse CheckCoolDownWorkingVariableConfigCorrect(Models\CheckCoolDownWorkingVariableConfigCorrectRequest $req) 查询冷热分层生效变量和配置是否正确
 * @method Models\CreateBackUpScheduleResponse CreateBackUpSchedule(Models\CreateBackUpScheduleRequest $req) 创建或者修改备份策略
 * @method Models\CreateCoolDownPolicyResponse CreateCoolDownPolicy(Models\CreateCoolDownPolicyRequest $req) 创建冷热分层策略
 * @method Models\CreateInstanceNewResponse CreateInstanceNew(Models\CreateInstanceNewRequest $req) 通过API创建集群
 * @method Models\CreateWorkloadGroupResponse CreateWorkloadGroup(Models\CreateWorkloadGroupRequest $req) 创建资源组
 * @method Models\DeleteBackUpDataResponse DeleteBackUpData(Models\DeleteBackUpDataRequest $req) 删除备份数据
 * @method Models\DeleteWorkloadGroupResponse DeleteWorkloadGroup(Models\DeleteWorkloadGroupRequest $req) 删除资源组
 * @method Models\DescribeAreaRegionResponse DescribeAreaRegion(Models\DescribeAreaRegionRequest $req) 集群列表页上显示地域信息及各个地域的集群总数
 * @method Models\DescribeBackUpJobResponse DescribeBackUpJob(Models\DescribeBackUpJobRequest $req) 查询备份实例列表
 * @method Models\DescribeBackUpJobDetailResponse DescribeBackUpJobDetail(Models\DescribeBackUpJobDetailRequest $req) 查询备份任务详情
 * @method Models\DescribeBackUpSchedulesResponse DescribeBackUpSchedules(Models\DescribeBackUpSchedulesRequest $req) 获取备份、迁移的调度任务信息
 * @method Models\DescribeBackUpTablesResponse DescribeBackUpTables(Models\DescribeBackUpTablesRequest $req) 获取可备份表信息
 * @method Models\DescribeBackUpTaskDetailResponse DescribeBackUpTaskDetail(Models\DescribeBackUpTaskDetailRequest $req) 查询备份任务进度详情
 * @method Models\DescribeClusterConfigsResponse DescribeClusterConfigs(Models\DescribeClusterConfigsRequest $req) 获取集群的最新的几个配置文件（config.xml、metrika.xml、user.xml）的内容，显示给用户
 * @method Models\DescribeClusterConfigsHistoryResponse DescribeClusterConfigsHistory(Models\DescribeClusterConfigsHistoryRequest $req) 获取集群配置文件修改历史
 * @method Models\DescribeCoolDownBackendsResponse DescribeCoolDownBackends(Models\DescribeCoolDownBackendsRequest $req) 查询冷热分层backend节点信息列表
 * @method Models\DescribeCoolDownPoliciesResponse DescribeCoolDownPolicies(Models\DescribeCoolDownPoliciesRequest $req) 查询冷热分层策略列表
 * @method Models\DescribeCoolDownTableDataResponse DescribeCoolDownTableData(Models\DescribeCoolDownTableDataRequest $req) 查询冷热分层Table数据
 * @method Models\DescribeDatabaseAuditDownloadResponse DescribeDatabaseAuditDownload(Models\DescribeDatabaseAuditDownloadRequest $req) 下载数据库审计日志
 * @method Models\DescribeDatabaseAuditRecordsResponse DescribeDatabaseAuditRecords(Models\DescribeDatabaseAuditRecordsRequest $req) 获取数据库审计记录
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 根据集群ID查询某个集群的具体信息
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) 获取集群节点信息列表
 * @method Models\DescribeInstanceNodesInfoResponse DescribeInstanceNodesInfo(Models\DescribeInstanceNodesInfoRequest $req) 获取BE/FE节点角色
 * @method Models\DescribeInstanceNodesRoleResponse DescribeInstanceNodesRole(Models\DescribeInstanceNodesRoleRequest $req) 获取集群节点角色
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) 在集群详情页面，拉取该集群的操作
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) 集群详情页中显示集群状态、流程进度等
 * @method Models\DescribeInstanceUsedSubnetsResponse DescribeInstanceUsedSubnets(Models\DescribeInstanceUsedSubnetsRequest $req) 获取集群已使用子网信息
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取集群列表
 * @method Models\DescribeInstancesHealthStateResponse DescribeInstancesHealthState(Models\DescribeInstancesHealthStateRequest $req) 集群健康检查
 * @method Models\DescribeRestoreTaskDetailResponse DescribeRestoreTaskDetail(Models\DescribeRestoreTaskDetailRequest $req) 查询恢复任务进度详情
 * @method Models\DescribeSlowQueryRecordsResponse DescribeSlowQueryRecords(Models\DescribeSlowQueryRecordsRequest $req) 获取慢查询列表
 * @method Models\DescribeSlowQueryRecordsDownloadResponse DescribeSlowQueryRecordsDownload(Models\DescribeSlowQueryRecordsDownloadRequest $req) 下载慢查询文件
 * @method Models\DescribeSpecResponse DescribeSpec(Models\DescribeSpecRequest $req) 拉取集群节点规格列表
 * @method Models\DescribeSqlApisResponse DescribeSqlApis(Models\DescribeSqlApisRequest $req) 针对驱动sql命令查询集群接口
 * @method Models\DescribeTableListResponse DescribeTableList(Models\DescribeTableListRequest $req) 获取指定数据源和库下的表列表
 * @method Models\DescribeUserBindWorkloadGroupResponse DescribeUserBindWorkloadGroup(Models\DescribeUserBindWorkloadGroupRequest $req) 获取当前集群各用户绑定的资源信息
 * @method Models\DescribeWorkloadGroupResponse DescribeWorkloadGroup(Models\DescribeWorkloadGroupRequest $req) 获取资源组信息
 * @method Models\DestroyInstanceResponse DestroyInstance(Models\DestroyInstanceRequest $req) 销毁集群
 * @method Models\ModifyClusterConfigsResponse ModifyClusterConfigs(Models\ModifyClusterConfigsRequest $req) 在集群配置页面修改集群配置文件接口，xml模式
 * @method Models\ModifyCoolDownPolicyResponse ModifyCoolDownPolicy(Models\ModifyCoolDownPolicyRequest $req) 修改冷热分层策略
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改集群名称
 * @method Models\ModifyInstanceKeyValConfigsResponse ModifyInstanceKeyValConfigs(Models\ModifyInstanceKeyValConfigsRequest $req) KV模式修改配置接口
 * @method Models\ModifyNodeStatusResponse ModifyNodeStatus(Models\ModifyNodeStatusRequest $req) 修改节点状态
 * @method Models\ModifySecurityGroupsResponse ModifySecurityGroups(Models\ModifySecurityGroupsRequest $req) 更改安全组
 * @method Models\ModifyUserBindWorkloadGroupResponse ModifyUserBindWorkloadGroup(Models\ModifyUserBindWorkloadGroupRequest $req) 修改用户绑定的资源组
 * @method Models\ModifyUserPrivilegesV3Response ModifyUserPrivilegesV3(Models\ModifyUserPrivilegesV3Request $req) 修改用户权限,支持catalog，全部db，部分db表三种权限设置类别
 * @method Models\ModifyWorkloadGroupResponse ModifyWorkloadGroup(Models\ModifyWorkloadGroupRequest $req) 修改资源组信息
 * @method Models\ModifyWorkloadGroupStatusResponse ModifyWorkloadGroupStatus(Models\ModifyWorkloadGroupStatusRequest $req) 开启或关闭资源组
 * @method Models\OpenCoolDownResponse OpenCoolDown(Models\OpenCoolDownRequest $req) 开始启用冷热分层
 * @method Models\OpenCoolDownPolicyResponse OpenCoolDownPolicy(Models\OpenCoolDownPolicyRequest $req) 开通、描述降冷策略接口
 * @method Models\RecoverBackUpJobResponse RecoverBackUpJob(Models\RecoverBackUpJobRequest $req) 备份恢复
 * @method Models\ReduceInstanceResponse ReduceInstance(Models\ReduceInstanceRequest $req) 集群缩容
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) 扩容云盘
 * @method Models\RestartClusterForConfigsResponse RestartClusterForConfigs(Models\RestartClusterForConfigsRequest $req) 重启集群让配置文件生效
 * @method Models\RestartClusterForNodeResponse RestartClusterForNode(Models\RestartClusterForNodeRequest $req) 集群滚动重启
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 水平扩容节点
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) 计算资源垂直变配
 * @method Models\UpdateCoolDownResponse UpdateCoolDown(Models\UpdateCoolDownRequest $req) 更新集群冷热分层信息
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
