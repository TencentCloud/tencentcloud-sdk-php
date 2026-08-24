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

namespace TencentCloud\Bdrc\V20260330;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bdrc\V20260330\Models as Models;

/**
 * @method Models\ApplyBackupGroupResponse ApplyBackupGroup(Models\ApplyBackupGroupRequest $req) 回滚备份组
 * @method Models\BindAutoBackupPolicyResponse BindAutoBackupPolicy(Models\BindAutoBackupPolicyRequest $req) 将实例绑定到备份策略上
 * @method Models\CreateAutoBackupPolicyResponse CreateAutoBackupPolicy(Models\CreateAutoBackupPolicyRequest $req) 创建备份策略
 * @method Models\CreateBackupGroupResponse CreateBackupGroup(Models\CreateBackupGroupRequest $req) 创建备份组
 * @method Models\CreateBackupVaultResponse CreateBackupVault(Models\CreateBackupVaultRequest $req) 创建备份库
 * @method Models\CreateDisasterRecoveryProtectGroupResponse CreateDisasterRecoveryProtectGroup(Models\CreateDisasterRecoveryProtectGroupRequest $req) 本接口用于创建容灾保护组
 * @method Models\CreateDisasterRecoverySitePairResponse CreateDisasterRecoverySitePair(Models\CreateDisasterRecoverySitePairRequest $req) 创建容灾站点对
 * @method Models\CreateDisasterRecoveryVpcMappingResponse CreateDisasterRecoveryVpcMapping(Models\CreateDisasterRecoveryVpcMappingRequest $req) 本接口用于创建容灾站点VPC网络映射
 * @method Models\CreateFileBackupResponse CreateFileBackup(Models\CreateFileBackupRequest $req) 本接口用于创建文件备份点
 * @method Models\CreateFileBackupPlanResponse CreateFileBackupPlan(Models\CreateFileBackupPlanRequest $req) 本接口用于创建备份计划
 * @method Models\CreateFileRestoreTaskResponse CreateFileRestoreTask(Models\CreateFileRestoreTaskRequest $req) 创建恢复任务
 * @method Models\CreateInstanceCopyPairResponse CreateInstanceCopyPair(Models\CreateInstanceCopyPairRequest $req) 本接口用于创建CVM复制对
 * @method Models\CreateInstanceDrillPairsResponse CreateInstanceDrillPairs(Models\CreateInstanceDrillPairsRequest $req) 创建cvm演练
 * @method Models\CreateSecurityGroupMappingResponse CreateSecurityGroupMapping(Models\CreateSecurityGroupMappingRequest $req) 本接口用于为站点对新增安全组映射，生产端实例绑定的安全组为源端，需要为每个生产端实例绑定的安全组建立映射，在创建复制对时，会自动以映射后的目标安全组作为容灾端实例绑定的安全组。
 * @method Models\DeleteAutoBackupPoliciesResponse DeleteAutoBackupPolicies(Models\DeleteAutoBackupPoliciesRequest $req) 删除备份策略
 * @method Models\DeleteBackupGroupsResponse DeleteBackupGroups(Models\DeleteBackupGroupsRequest $req) 删除备份组
 * @method Models\DeleteBackupVaultsResponse DeleteBackupVaults(Models\DeleteBackupVaultsRequest $req) 删除备份库
 * @method Models\DeleteCopyPairsResponse DeleteCopyPairs(Models\DeleteCopyPairsRequest $req) 本接口用于删除容灾复制对
 * @method Models\DeleteDisasterRecoveryProtectGroupsResponse DeleteDisasterRecoveryProtectGroups(Models\DeleteDisasterRecoveryProtectGroupsRequest $req) 本接口用于删除容灾保护组
 * @method Models\DeleteDisasterRecoverySitePairsResponse DeleteDisasterRecoverySitePairs(Models\DeleteDisasterRecoverySitePairsRequest $req) 删除容灾站点对
 * @method Models\DeleteDisasterRecoveryVpcMappingResponse DeleteDisasterRecoveryVpcMapping(Models\DeleteDisasterRecoveryVpcMappingRequest $req) 本接口用于删除容灾站点对vpc映射信息
 * @method Models\DeleteDrillPairsResponse DeleteDrillPairs(Models\DeleteDrillPairsRequest $req) 删除演练对/演练组
 * @method Models\DeleteFileBackupPlansResponse DeleteFileBackupPlans(Models\DeleteFileBackupPlansRequest $req) 删除备份计划
 * @method Models\DeleteFileBackupsResponse DeleteFileBackups(Models\DeleteFileBackupsRequest $req) 删除文件备份点
 * @method Models\DeleteSecurityGroupMappingResponse DeleteSecurityGroupMapping(Models\DeleteSecurityGroupMappingRequest $req) 本接口用于删除站点对已添加的安全组映射
 * @method Models\DescribeAutoBackupPoliciesResponse DescribeAutoBackupPolicies(Models\DescribeAutoBackupPoliciesRequest $req) 查询定期备份策略列表
 * @method Models\DescribeBackupGroupRollbackTasksResponse DescribeBackupGroupRollbackTasks(Models\DescribeBackupGroupRollbackTasksRequest $req) 查询备份组恢复任务详情
 * @method Models\DescribeBackupGroupsResponse DescribeBackupGroups(Models\DescribeBackupGroupsRequest $req) 查询备份组列表
 * @method Models\DescribeBackupGroupsDeniedActionsResponse DescribeBackupGroupsDeniedActions(Models\DescribeBackupGroupsDeniedActionsRequest $req) 查询操作掩码
 * @method Models\DescribeBackupInstancesResponse DescribeBackupInstances(Models\DescribeBackupInstancesRequest $req) 本接口用来浏览已有受保护实例列表
 * @method Models\DescribeBackupOverviewGeneralResponse DescribeBackupOverviewGeneral(Models\DescribeBackupOverviewGeneralRequest $req) 查询备份概览信息
 * @method Models\DescribeBackupPlansResponse DescribeBackupPlans(Models\DescribeBackupPlansRequest $req) 查询整机备份计划
 * @method Models\DescribeBackupVaultsResponse DescribeBackupVaults(Models\DescribeBackupVaultsRequest $req) 查询备份库信息
 * @method Models\DescribeBackupVaultsDeniedActionsResponse DescribeBackupVaultsDeniedActions(Models\DescribeBackupVaultsDeniedActionsRequest $req) 查询备份库操作掩码
 * @method Models\DescribeCommonBackupPointsResponse DescribeCommonBackupPoints(Models\DescribeCommonBackupPointsRequest $req) 查询共同备份点信息
 * @method Models\DescribeCopyPairsResponse DescribeCopyPairs(Models\DescribeCopyPairsRequest $req) 本接口用来查询容灾复制对
 * @method Models\DescribeCopyPairsDeniedActionsResponse DescribeCopyPairsDeniedActions(Models\DescribeCopyPairsDeniedActionsRequest $req) 查询复制对掩码
 * @method Models\DescribeDisasterRecoveryDrillGroupsResponse DescribeDisasterRecoveryDrillGroups(Models\DescribeDisasterRecoveryDrillGroupsRequest $req) 本接口用来查询容灾复制对
 * @method Models\DescribeDisasterRecoveryOverviewResponse DescribeDisasterRecoveryOverview(Models\DescribeDisasterRecoveryOverviewRequest $req) 查询容灾资源概览
 * @method Models\DescribeDisasterRecoveryProtectGroupsResponse DescribeDisasterRecoveryProtectGroups(Models\DescribeDisasterRecoveryProtectGroupsRequest $req) 本接口用来查询容灾保护组
 * @method Models\DescribeDisasterRecoverySitePairsResponse DescribeDisasterRecoverySitePairs(Models\DescribeDisasterRecoverySitePairsRequest $req) 本接口用来查询容灾站点对
 * @method Models\DescribeDisasterRecoverySitePairsDeniedActionsResponse DescribeDisasterRecoverySitePairsDeniedActions(Models\DescribeDisasterRecoverySitePairsDeniedActionsRequest $req) 查询指定容灾站点对当前不允许执行的操作列表（操作掩码）。前端在展示容灾策略操作菜单时，可基于该接口返回结果灰化或屏蔽相应入口，并向用户提示原因（错误码 + 错误信息）。
 * @method Models\DescribeDisasterRecoverySupportRegionResponse DescribeDisasterRecoverySupportRegion(Models\DescribeDisasterRecoverySupportRegionRequest $req) 查询当前地域支持容灾的生产地域配置列表
 * @method Models\DescribeDisksResponse DescribeDisks(Models\DescribeDisksRequest $req) 本接口用来查询容灾云硬盘的详情，如系统盘的镜像格式。
 * @method Models\DescribeDrillPairsResponse DescribeDrillPairs(Models\DescribeDrillPairsRequest $req) 查询演练对列表
 * @method Models\DescribeDrillPairsDeniedActionsResponse DescribeDrillPairsDeniedActions(Models\DescribeDrillPairsDeniedActionsRequest $req) 查询演练操作掩码
 * @method Models\DescribeFileBackupObjectsResponse DescribeFileBackupObjects(Models\DescribeFileBackupObjectsRequest $req) 本接口用来浏览已有备份目录/文件内容
 * @method Models\DescribeFileBackupPlansResponse DescribeFileBackupPlans(Models\DescribeFileBackupPlansRequest $req) 本接口用来浏览已有备份计划内容
 * @method Models\DescribeFileBackupsResponse DescribeFileBackups(Models\DescribeFileBackupsRequest $req) 本接口用来浏览已有备份点详情
 * @method Models\DescribeFileBackupsDeniedActionsResponse DescribeFileBackupsDeniedActions(Models\DescribeFileBackupsDeniedActionsRequest $req) 本接口用来查询备份操作掩码
 * @method Models\DescribeFileRestoreTasksResponse DescribeFileRestoreTasks(Models\DescribeFileRestoreTasksRequest $req) 查询备份恢复任务列表
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 本接口用于Agent查询相关Agent任务信息
 * @method Models\DescribePriceCreateCopyPairsResponse DescribePriceCreateCopyPairs(Models\DescribePriceCreateCopyPairsRequest $req) 本接口（DescribePriceCreateCopyPairs）用于查询创建容灾复制对的价格。支持批量询价，入参为每个复制对的盘容量数组，返回与入参一一对应的后付费每小时价格。
 * @method Models\DescribeProtectGroupsDeniedActionsResponse DescribeProtectGroupsDeniedActions(Models\DescribeProtectGroupsDeniedActionsRequest $req) 查询保护组操作掩码
 * @method Models\DescribeProtectedInstancesResponse DescribeProtectedInstances(Models\DescribeProtectedInstancesRequest $req) 本接口用来浏览已有受保护实例列表
 * @method Models\DescribeSecurityGroupMappingsResponse DescribeSecurityGroupMappings(Models\DescribeSecurityGroupMappingsRequest $req) 本接口用于查询安全组映射列表
 * @method Models\DescribeVpcMappingsResponse DescribeVpcMappings(Models\DescribeVpcMappingsRequest $req) 本接口用来查询站点对的vpc映射信息
 * @method Models\FinishFailoverCopyPairsResponse FinishFailoverCopyPairs(Models\FinishFailoverCopyPairsRequest $req) 完成切换
 * @method Models\ModifyAutoBackupPolicyAttributeResponse ModifyAutoBackupPolicyAttribute(Models\ModifyAutoBackupPolicyAttributeRequest $req) 修改备份策略
 * @method Models\ModifyBackupAttributeResponse ModifyBackupAttribute(Models\ModifyBackupAttributeRequest $req) 删除备份组
 * @method Models\ModifyBackupVaultAttributeResponse ModifyBackupVaultAttribute(Models\ModifyBackupVaultAttributeRequest $req) 修改备份库信息
 * @method Models\ModifyCopyPairAttributeResponse ModifyCopyPairAttribute(Models\ModifyCopyPairAttributeRequest $req) 修改容灾复制对
 * @method Models\ModifyDrillGroupAttributeResponse ModifyDrillGroupAttribute(Models\ModifyDrillGroupAttributeRequest $req) 修改演练组
 * @method Models\ModifyDrillPairAttributeResponse ModifyDrillPairAttribute(Models\ModifyDrillPairAttributeRequest $req) 修改演练
 * @method Models\ModifyFileBackupAttributeResponse ModifyFileBackupAttribute(Models\ModifyFileBackupAttributeRequest $req) 修改文件备份信息
 * @method Models\ModifyFileBackupPlanResponse ModifyFileBackupPlan(Models\ModifyFileBackupPlanRequest $req) 本接口用于修改已有的备份计划配置
 * @method Models\ModifyProtectGroupAttributeResponse ModifyProtectGroupAttribute(Models\ModifyProtectGroupAttributeRequest $req) 修改容灾保护组
 * @method Models\ModifySitePairAttributeResponse ModifySitePairAttribute(Models\ModifySitePairAttributeRequest $req) 修改容灾站点对
 * @method Models\ReportAgentMetricsResponse ReportAgentMetrics(Models\ReportAgentMetricsRequest $req) 本接口用于上报Agent指标信息
 * @method Models\ReportGatewayHeartbeatResponse ReportGatewayHeartbeat(Models\ReportGatewayHeartbeatRequest $req) 本接口用于Agent心跳上报
 * @method Models\ReportJobProgressResponse ReportJobProgress(Models\ReportJobProgressRequest $req) 本接口用于上报Agent任务信息
 * @method Models\RunCopyPairTasksResponse RunCopyPairTasks(Models\RunCopyPairTasksRequest $req) 启动复制对
 * @method Models\RunFailoverCopyPairsResponse RunFailoverCopyPairs(Models\RunFailoverCopyPairsRequest $req) 故障切换
 * @method Models\RunInstancesWithBackupGroupResponse RunInstancesWithBackupGroup(Models\RunInstancesWithBackupGroupRequest $req) 备份组新建云服务器
 * @method Models\StopCopyPairTasksResponse StopCopyPairTasks(Models\StopCopyPairTasksRequest $req) 停止复制对
 * @method Models\UnbindAutoBackupPolicyResponse UnbindAutoBackupPolicy(Models\UnbindAutoBackupPolicyRequest $req) 将实例从备份策略上解绑
 */

class BdrcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bdrc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bdrc";

    /**
     * @var string
     */
    protected $version = "2026-03-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("bdrc")."\\"."V20260330\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
