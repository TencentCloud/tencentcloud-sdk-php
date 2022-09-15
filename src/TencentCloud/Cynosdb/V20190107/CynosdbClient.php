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

namespace TencentCloud\Cynosdb\V20190107;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cynosdb\V20190107\Models as Models;

/**
 * @method Models\ActivateInstanceResponse ActivateInstance(Models\ActivateInstanceRequest $req) 本接口(ActivateInstance)用于恢复已隔离的实例访问。
 * @method Models\AddClusterSlaveZoneResponse AddClusterSlaveZone(Models\AddClusterSlaveZoneRequest $req) 增加从可用区
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) 本接口（AddInstances）用于集群添加实例
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 安全组批量绑定云资源
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) 创建账号
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 为集群创建手动备份
 * @method Models\CreateClustersResponse CreateClusters(Models\CreateClustersRequest $req) 创建集群
 * @method Models\DescribeAccountAllGrantPrivilegesResponse DescribeAccountAllGrantPrivileges(Models\DescribeAccountAllGrantPrivilegesRequest $req) 账号所有权限
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口(DescribeAccounts)用于查询数据库管理账号。
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) 获取指定集群的备份配置信息，包括全量备份时间段，备份文件保留时间
 * @method Models\DescribeBackupDownloadUrlResponse DescribeBackupDownloadUrl(Models\DescribeBackupDownloadUrlRequest $req) 此接口（DescribeBackupDownloadUrl）用于查询集群备份文件下载地址。
 * @method Models\DescribeBackupListResponse DescribeBackupList(Models\DescribeBackupListRequest $req) 查询备份文件列表
 * @method Models\DescribeBinlogDownloadUrlResponse DescribeBinlogDownloadUrl(Models\DescribeBinlogDownloadUrlRequest $req) 此接口（DescribeBinlogDownloadUrl）用于查询Binlog的下载地址。
 * @method Models\DescribeBinlogSaveDaysResponse DescribeBinlogSaveDays(Models\DescribeBinlogSaveDaysRequest $req) 此接口（DescribeBinlogSaveDays）用于查询集群的Binlog保留天数。
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) 此接口（DescribeBinlogs）用来查询集群Binlog日志列表。
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 显示集群详情
 * @method Models\DescribeClusterInstanceGrpsResponse DescribeClusterInstanceGrps(Models\DescribeClusterInstanceGrpsRequest $req) 本接口（DescribeClusterInstanceGrps）用于查询实例组
 * @method Models\DescribeClusterParamLogsResponse DescribeClusterParamLogs(Models\DescribeClusterParamLogsRequest $req) 本接口（DescribeClusterParamLogs）查询参数修改日志
 * @method Models\DescribeClusterParamsResponse DescribeClusterParams(Models\DescribeClusterParamsRequest $req) 本接口（DescribeClusterParams）用于查询集群参数
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群列表
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 查询实例安全组信息
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) 本接口(DescribeInstanceDetail)用于查询实例详情。
 * @method Models\DescribeInstanceSlowQueriesResponse DescribeInstanceSlowQueries(Models\DescribeInstanceSlowQueriesRequest $req) 此接口（DescribeInstanceSlowQueries）用于查询实例慢查询日志。
 * @method Models\DescribeInstanceSpecsResponse DescribeInstanceSpecs(Models\DescribeInstanceSpecsRequest $req) 本接口（DescribeInstanceSpecs）用于查询实例规格
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口(DescribeInstances)用于查询实例列表。
 * @method Models\DescribeMaintainPeriodResponse DescribeMaintainPeriod(Models\DescribeMaintainPeriodRequest $req) 查询实例维护时间窗
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 查询用户指定产品下的所有参数模板信息
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 查询项目安全组信息
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) 根据计费订单id查询资源列表
 * @method Models\DescribeRollbackTimeRangeResponse DescribeRollbackTimeRange(Models\DescribeRollbackTimeRangeRequest $req) 查询指定集群有效回滚时间范围
 * @method Models\DescribeRollbackTimeValidityResponse DescribeRollbackTimeValidity(Models\DescribeRollbackTimeValidityRequest $req) 指定时间和集群查询是否可回滚
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 安全组批量解绑云资源
 * @method Models\ExportInstanceSlowQueriesResponse ExportInstanceSlowQueries(Models\ExportInstanceSlowQueriesRequest $req) 此接口（ExportInstanceSlowQueries）用于导出实例慢日志。
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) 批量授权账号权限
 * @method Models\InquirePriceCreateResponse InquirePriceCreate(Models\InquirePriceCreateRequest $req) 查询新购集群价格
 * @method Models\InquirePriceRenewResponse InquirePriceRenew(Models\InquirePriceRenewRequest $req) 查询续费集群价格
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) 隔离集群
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) 本接口(IsolateInstance)用于隔离实例。
 * @method Models\ModifyAccountParamsResponse ModifyAccountParams(Models\ModifyAccountParamsRequest $req) 修改账号参数
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) 修改指定集群的备份配置
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) 此接口（ModifyBackupName）用于修改备份文件备注名。
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) 修改集群名称
 * @method Models\ModifyClusterParamResponse ModifyClusterParam(Models\ModifyClusterParamRequest $req) 修改集群参数
 * @method Models\ModifyClusterSlaveZoneResponse ModifyClusterSlaveZone(Models\ModifyClusterSlaveZoneRequest $req) 修改从可用区
 * @method Models\ModifyClusterStorageResponse ModifyClusterStorage(Models\ModifyClusterStorageRequest $req) 升级预付费存储
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 本接口(ModifyInstanceName)用于修改实例名称。
 * @method Models\ModifyMaintainPeriodConfigResponse ModifyMaintainPeriodConfig(Models\ModifyMaintainPeriodConfigRequest $req) 修改维护时间配置
 * @method Models\OfflineClusterResponse OfflineCluster(Models\OfflineClusterRequest $req) 下线集群
 * @method Models\OfflineInstanceResponse OfflineInstance(Models\OfflineInstanceRequest $req) 下线实例
 * @method Models\PauseServerlessResponse PauseServerless(Models\PauseServerlessRequest $req) 暂停serverless集群
 * @method Models\RemoveClusterSlaveZoneResponse RemoveClusterSlaveZone(Models\RemoveClusterSlaveZoneRequest $req) 删除从可用区
 * @method Models\ResumeServerlessResponse ResumeServerless(Models\ResumeServerlessRequest $req) 恢复serverless集群
 * @method Models\RevokeAccountPrivilegesResponse RevokeAccountPrivileges(Models\RevokeAccountPrivilegesRequest $req) 批量回收账号权限
 * @method Models\RollBackClusterResponse RollBackCluster(Models\RollBackClusterRequest $req) 本接口（RollBackCluster）用于回档集群
 * @method Models\SetRenewFlagResponse SetRenewFlag(Models\SetRenewFlagRequest $req) SetRenewFlag设置实例的自动续费功能
 * @method Models\SwitchClusterZoneResponse SwitchClusterZone(Models\SwitchClusterZoneRequest $req) 切换到从可用区
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 升级实例
 */

class CynosdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cynosdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cynosdb";

    /**
     * @var string
     */
    protected $version = "2019-01-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("cynosdb")."\\"."V20190107\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
