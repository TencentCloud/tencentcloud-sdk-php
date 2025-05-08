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
 * @method Models\ActivateInstanceResponse ActivateInstance(Models\ActivateInstanceRequest $req) 本接口（ActivateInstance）用于恢复已隔离的实例访问。
 * @method Models\AddClusterSlaveZoneResponse AddClusterSlaveZone(Models\AddClusterSlaveZoneRequest $req) 本接口（AddClusterSlaveZone）用于对集群开启多可用区部署。
 * @method Models\AddInstancesResponse AddInstances(Models\AddInstancesRequest $req) 本接口（AddInstances）用于集群添加实例。
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口（AssociateSecurityGroups）用于安全组批量绑定云资源。
 * @method Models\BindClusterResourcePackagesResponse BindClusterResourcePackages(Models\BindClusterResourcePackagesRequest $req) 本接口（BindClusterResourcePackages）用于为集群绑定资源包。
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) 本接口（CloseAuditService）用于关闭 TDSQL-C MySQL 实例的数据库审计服务。
 * @method Models\CloseClusterPasswordComplexityResponse CloseClusterPasswordComplexity(Models\CloseClusterPasswordComplexityRequest $req) 本接口（CloseClusterPasswordComplexity）用于关闭集群密码复杂度。
 * @method Models\CloseProxyResponse CloseProxy(Models\CloseProxyRequest $req) 本接口（CloseProxy）用于关闭集群的数据库代理服务。
 * @method Models\CloseProxyEndPointResponse CloseProxyEndPoint(Models\CloseProxyEndPointRequest $req) 本接口（CloseProxyEndPoint）用于关闭数据库代理连接地址。
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) 关闭SSL加密
 * @method Models\CloseWanResponse CloseWan(Models\CloseWanRequest $req) 本接口（CloseWan）用于关闭外网。
 * @method Models\CopyClusterPasswordComplexityResponse CopyClusterPasswordComplexity(Models\CopyClusterPasswordComplexityRequest $req) 本接口（CopyClusterPasswordComplexity）用于复制集群密码复杂度。
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) 本接口（CreateAccounts）用于创建用户账号。
 * @method Models\CreateAuditLogFileResponse CreateAuditLogFile(Models\CreateAuditLogFileRequest $req) 本接口(CreateAuditLogFile)用于创建云数据库实例的审计日志文件。
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) 本接口（CreateAuditRuleTemplate）用于创建审计规则模板。
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 本接口（CreateBackup）用于为集群创建手动备份。
 * @method Models\CreateCLSDeliveryResponse CreateCLSDelivery(Models\CreateCLSDeliveryRequest $req) 本接口（CreateCLSDelivery）用于创建日志投递。
 * @method Models\CreateClusterDatabaseResponse CreateClusterDatabase(Models\CreateClusterDatabaseRequest $req) 本接口（CreateClusterDatabase）用于创建数据库。
 * @method Models\CreateClustersResponse CreateClusters(Models\CreateClustersRequest $req) 本接口（CreateClusters）用于新购集群。
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) 本接口（CreateParamTemplate）用于创建参数模板。
 * @method Models\CreateProxyResponse CreateProxy(Models\CreateProxyRequest $req) 本接口（CreateProxy）用于开启集群的数据库代理。
 * @method Models\CreateProxyEndPointResponse CreateProxyEndPoint(Models\CreateProxyEndPointRequest $req) 本接口（CreateProxyEndPoint）用于创建数据库代理连接点。
 * @method Models\CreateResourcePackageResponse CreateResourcePackage(Models\CreateResourcePackageRequest $req) 本接口（CreateResourcePackage）用于新购资源包。
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) 本接口（DeleteAccounts）用于删除用户账号。
 * @method Models\DeleteAuditLogFileResponse DeleteAuditLogFile(Models\DeleteAuditLogFileRequest $req) 本接口（DeleteAuditLogFile）用于删除云数据库实例的审计日志文件。
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) 本接口（DeleteAuditRuleTemplates）用于删除审计规则模板。
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) 本接口（DeleteBackup）用于为集群删除手动备份，无法删除自动备份。
 * @method Models\DeleteCLSDeliveryResponse DeleteCLSDelivery(Models\DeleteCLSDeliveryRequest $req) 本接口（DeleteCLSDelivery）用于删除日志投递。
 * @method Models\DeleteClusterDatabaseResponse DeleteClusterDatabase(Models\DeleteClusterDatabaseRequest $req) 本接口（DeleteClusterDatabase）用于删除数据库。
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) 本接口（DeleteParamTemplate）用于删除用户创建的参数模板。
 * @method Models\DescribeAccountAllGrantPrivilegesResponse DescribeAccountAllGrantPrivileges(Models\DescribeAccountAllGrantPrivilegesRequest $req) 本接口（DescribeAccountAllGrantPrivileges）用于查询账号所有可授予的权限。
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口（DescribeAccountPrivileges）用于查询账号已有权限。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于查询数据库账号列表。
 * @method Models\DescribeAuditInstanceListResponse DescribeAuditInstanceList(Models\DescribeAuditInstanceListRequest $req) 本接口（DescribeAuditInstanceList）用于获取数据库审计的实例列表。
 * @method Models\DescribeAuditLogFilesResponse DescribeAuditLogFiles(Models\DescribeAuditLogFilesRequest $req) 本接口(DescribeAuditLogFiles)用于查询云数据库实例的审计日志文件。
 * @method Models\DescribeAuditLogsResponse DescribeAuditLogs(Models\DescribeAuditLogsRequest $req) 本接口（DescribeAuditLogs）用于查询数据库审计日志。
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) 本接口（DescribeAuditRuleTemplates）用于查询审计规则模板信息。
 * @method Models\DescribeAuditRuleWithInstanceIdsResponse DescribeAuditRuleWithInstanceIds(Models\DescribeAuditRuleWithInstanceIdsRequest $req) 本接口（DescribeAuditRuleWithInstanceIds）用于获取实例的审计规则。
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) 本接口（DescribeBackupConfig）用于获取指定集群的备份配置信息，包括全量备份时间段、备份文件保留时间。
 * @method Models\DescribeBackupDownloadUrlResponse DescribeBackupDownloadUrl(Models\DescribeBackupDownloadUrlRequest $req) 本接口（DescribeBackupDownloadUrl）用于查询集群备份文件下载地址。
 * @method Models\DescribeBackupListResponse DescribeBackupList(Models\DescribeBackupListRequest $req) 本接口（DescribeBackupList）用于查询集群的备份文件列表。
 * @method Models\DescribeBinlogConfigResponse DescribeBinlogConfig(Models\DescribeBinlogConfigRequest $req) 该接口（DescribeBinlogConfig）用于查询binlog配置
 * @method Models\DescribeBinlogDownloadUrlResponse DescribeBinlogDownloadUrl(Models\DescribeBinlogDownloadUrlRequest $req) 本接口（DescribeBinlogDownloadUrl）用于查询 Binlog 的下载地址。
 * @method Models\DescribeBinlogSaveDaysResponse DescribeBinlogSaveDays(Models\DescribeBinlogSaveDaysRequest $req) 此接口（DescribeBinlogSaveDays）用于查询集群的Binlog保留天数。
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) 本接口（DescribeBinlogs）用来查询集群 Binlog 日志列表。
 * @method Models\DescribeChangedParamsAfterUpgradeResponse DescribeChangedParamsAfterUpgrade(Models\DescribeChangedParamsAfterUpgradeRequest $req) 本接口（DescribeChangedParamsAfterUpgrade）用于查询升降配运行参数对比。
 * @method Models\DescribeClusterDatabaseTablesResponse DescribeClusterDatabaseTables(Models\DescribeClusterDatabaseTablesRequest $req) 获取table列表
 * @method Models\DescribeClusterDatabasesResponse DescribeClusterDatabases(Models\DescribeClusterDatabasesRequest $req) 本接口（DescribeClusterDatabases）用于获取集群数据库列表。
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 该接口（DescribeClusterDetail）用于显示集群详情。
 * @method Models\DescribeClusterDetailDatabasesResponse DescribeClusterDetailDatabases(Models\DescribeClusterDetailDatabasesRequest $req) 本接口（DescribeClusterDetailDatabases）用于查询数据库列表。
 * @method Models\DescribeClusterInstanceGroupsResponse DescribeClusterInstanceGroups(Models\DescribeClusterInstanceGroupsRequest $req) 本接口（DescribeClusterInstanceGrps）用于查询实例组信息。
 * @method Models\DescribeClusterInstanceGrpsResponse DescribeClusterInstanceGrps(Models\DescribeClusterInstanceGrpsRequest $req) 本接口（DescribeClusterInstanceGrps）用于查询实例组信息。 该接口已废弃，推荐使用DescribeClusterInstanceGroups
 * @method Models\DescribeClusterParamLogsResponse DescribeClusterParamLogs(Models\DescribeClusterParamLogsRequest $req) 本接口（DescribeClusterParamLogs）用于查询参数修改记录。
 * @method Models\DescribeClusterParamsResponse DescribeClusterParams(Models\DescribeClusterParamsRequest $req) 本接口（DescribeClusterParams）用于查询集群参数。
 * @method Models\DescribeClusterPasswordComplexityResponse DescribeClusterPasswordComplexity(Models\DescribeClusterPasswordComplexityRequest $req) 本接口（DescribeClusterPasswordComplexity）用于查看集群密码复杂度详情。
 * @method Models\DescribeClusterTransparentEncryptInfoResponse DescribeClusterTransparentEncryptInfo(Models\DescribeClusterTransparentEncryptInfoRequest $req) 查询集群透明加密信息
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 本接口（DescribeClusters）用于查询集群列表。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例安全组信息。
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) 本接口（DescribeFlow）用于查询任务流信息。
 * @method Models\DescribeInstanceCLSLogDeliveryResponse DescribeInstanceCLSLogDelivery(Models\DescribeInstanceCLSLogDeliveryRequest $req) 本接口（DescribeInstanceCLSLogDelivery）用于查询实例日志投递信息。
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) 本接口(DescribeInstanceDetail)用于查询实例详情。
 * @method Models\DescribeInstanceErrorLogsResponse DescribeInstanceErrorLogs(Models\DescribeInstanceErrorLogsRequest $req) 本接口（DescribeInstanceErrorLogs）用于查询实例错误日志列表。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询实例参数列表。
 * @method Models\DescribeInstanceSlowQueriesResponse DescribeInstanceSlowQueries(Models\DescribeInstanceSlowQueriesRequest $req) 此接口（DescribeInstanceSlowQueries）用于查询实例慢日志详情。
 * @method Models\DescribeInstanceSpecsResponse DescribeInstanceSpecs(Models\DescribeInstanceSpecsRequest $req) 本接口（DescribeInstanceSpecs）用于查询购买页可购买的实例规格。
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口(DescribeInstances)用于查询实例列表。
 * @method Models\DescribeInstancesWithinSameClusterResponse DescribeInstancesWithinSameCluster(Models\DescribeInstancesWithinSameClusterRequest $req) 本接口（DescribeInstancesWithinSameCluster）用于查询同一集群下实例列表
 * @method Models\DescribeIsolatedInstancesResponse DescribeIsolatedInstances(Models\DescribeIsolatedInstancesRequest $req) 本接口（DescribeIsolatedInstances）用于查询回收站实例列表。
 * @method Models\DescribeMaintainPeriodResponse DescribeMaintainPeriod(Models\DescribeMaintainPeriodRequest $req) 本接口（DescribeMaintainPeriod）用于查询实例维护时间窗。
 * @method Models\DescribeParamTemplateDetailResponse DescribeParamTemplateDetail(Models\DescribeParamTemplateDetailRequest $req) 本接口（DescribeParamTemplateDetail）用于查询用户参数模板详情。
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 本接口（DescribeParamTemplates）用于查询用户指定产品下的所有参数模板信息。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口（DescribeProjectSecurityGroups）用于查询项目安全组信息。
 * @method Models\DescribeProxiesResponse DescribeProxies(Models\DescribeProxiesRequest $req) 本接口（DescribeProxies）用于查询数据库代理列表。
 * @method Models\DescribeProxyNodesResponse DescribeProxyNodes(Models\DescribeProxyNodesRequest $req) 本接口（DescribeProxyNodes）用于查询代理节点列表。
 * @method Models\DescribeProxySpecsResponse DescribeProxySpecs(Models\DescribeProxySpecsRequest $req) 本接口（DescribeProxySpecs）用于查询数据库代理规格。
 * @method Models\DescribeResourcePackageDetailResponse DescribeResourcePackageDetail(Models\DescribeResourcePackageDetailRequest $req) 本接口（DescribeResourcePackageDetail）用于查询资源包使用详情。
 * @method Models\DescribeResourcePackageListResponse DescribeResourcePackageList(Models\DescribeResourcePackageListRequest $req) 本接口（DescribeResourcePackageList）用于查询资源包列表。
 * @method Models\DescribeResourcePackageSaleSpecResponse DescribeResourcePackageSaleSpec(Models\DescribeResourcePackageSaleSpecRequest $req) 本接口（DescribeResourcePackageSaleSpec）用于查询资源包规格。
 * @method Models\DescribeResourcesByDealNameResponse DescribeResourcesByDealName(Models\DescribeResourcesByDealNameRequest $req) 本接口（DescribeResourcesByDealName）用于查询订单关联实例。
 * @method Models\DescribeRollbackTimeRangeResponse DescribeRollbackTimeRange(Models\DescribeRollbackTimeRangeRequest $req) 本接口（DescribeRollbackTimeRange）用于查询回档时间范围。
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) 查询实例SSL状态
 * @method Models\DescribeServerlessInstanceSpecsResponse DescribeServerlessInstanceSpecs(Models\DescribeServerlessInstanceSpecsRequest $req) 查询Serverless实例可选规格
 * @method Models\DescribeServerlessStrategyResponse DescribeServerlessStrategy(Models\DescribeServerlessStrategyRequest $req) 查询serverless策略
 * @method Models\DescribeSlaveZonesResponse DescribeSlaveZones(Models\DescribeSlaveZonesRequest $req) 查询从可用区
 * @method Models\DescribeSupportProxyVersionResponse DescribeSupportProxyVersion(Models\DescribeSupportProxyVersionRequest $req) 本接口（DescribeSupportProxyVersion）用于查询支持的数据库代理版本。
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口（DescribeTasks）用于查询任务列表。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 本接口（DescribeZones）用于查询可售卖地域可用区信息。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口（DisassociateSecurityGroups）用于安全组批量解绑云资源。
 * @method Models\ExportInstanceErrorLogsResponse ExportInstanceErrorLogs(Models\ExportInstanceErrorLogsRequest $req) 此接口（ExportInstanceErrorLogs）用于导出实例错误日志。
 * @method Models\ExportInstanceSlowQueriesResponse ExportInstanceSlowQueries(Models\ExportInstanceSlowQueriesRequest $req) 本接口（ExportInstanceSlowQueries）用于导出实例慢日志。
 * @method Models\ExportResourcePackageDeductDetailsResponse ExportResourcePackageDeductDetails(Models\ExportResourcePackageDeductDetailsRequest $req) 资源包使用明细导出
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) 本接口（GrantAccountPrivileges）用于批量授权账号权限。
 * @method Models\InquirePriceCreateResponse InquirePriceCreate(Models\InquirePriceCreateRequest $req) 本接口（InquirePriceCreate）用于新购集群的价格查询。
 * @method Models\InquirePriceModifyResponse InquirePriceModify(Models\InquirePriceModifyRequest $req) 变配预付费集群询价
 * @method Models\InquirePriceRenewResponse InquirePriceRenew(Models\InquirePriceRenewRequest $req) 本接口（InquirePriceRenew）用于查询续费集群价格。
 * @method Models\IsolateClusterResponse IsolateCluster(Models\IsolateClusterRequest $req) 本接口（IsolateCluster）用于隔离集群。
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) 本接口(IsolateInstance)用于隔离实例。
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口(ModifyAccountDescription)用于修改数据库账号描述信息。
 * @method Models\ModifyAccountHostResponse ModifyAccountHost(Models\ModifyAccountHostRequest $req) 本接口（ModifyAccountHost）用于修改账号主机。
 * @method Models\ModifyAccountParamsResponse ModifyAccountParams(Models\ModifyAccountParamsRequest $req) 本接口（ModifyAccountParams）用于修改账号配置。
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 本接口（ModifyAccountPrivileges）用于修改账号库表权限。
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) 本接口（ModifyAuditRuleTemplates）用于修改审计规则模板。
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) 本接口(ModifyAuditService)用于修改云数据库审计日志保存时长、审计规则等服务配置。
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) 本接口（ModifyBackupConfig）用于修改指定集群的备份配置。
 * @method Models\ModifyBackupNameResponse ModifyBackupName(Models\ModifyBackupNameRequest $req) 此接口（ModifyBackupName）用于修改备份文件备注名。
 * @method Models\ModifyBinlogConfigResponse ModifyBinlogConfig(Models\ModifyBinlogConfigRequest $req) 该接口（ModifyBinlogConfig）用于修改Binlog配置
 * @method Models\ModifyBinlogSaveDaysResponse ModifyBinlogSaveDays(Models\ModifyBinlogSaveDaysRequest $req) 此接口（ModifyBinlogSaveDays）用于修改集群Binlog保留天数。
 * @method Models\ModifyClusterDatabaseResponse ModifyClusterDatabase(Models\ModifyClusterDatabaseRequest $req) 本接口（ModifyClusterDatabase）用于修改数据库的账号授权。
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) 本接口（ModifyClusterName）用于修改集群名称。
 * @method Models\ModifyClusterParamResponse ModifyClusterParam(Models\ModifyClusterParamRequest $req) 本接口（ModifyClusterParam）用于修改集群参数。
 * @method Models\ModifyClusterPasswordComplexityResponse ModifyClusterPasswordComplexity(Models\ModifyClusterPasswordComplexityRequest $req) 本接口（ModifyClusterPasswordComplexity）用于修改/开启集群密码复杂度。
 * @method Models\ModifyClusterSlaveZoneResponse ModifyClusterSlaveZone(Models\ModifyClusterSlaveZoneRequest $req) 本接口（ModifyClusterSlaveZone）用于变更集群的备可用区。
 * @method Models\ModifyClusterStorageResponse ModifyClusterStorage(Models\ModifyClusterStorageRequest $req) 本接口（ModifyClusterStorage）用于调整包年包月存储容量。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改实例绑定的安全组。
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 本接口(ModifyInstanceName)用于修改实例名称。
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) 本接口（ModifyInstanceParam）用于修改实例参数。
 * @method Models\ModifyInstanceUpgradeLimitDaysResponse ModifyInstanceUpgradeLimitDays(Models\ModifyInstanceUpgradeLimitDaysRequest $req) 本接口（ModifyInstanceUpgradeLimitDays）用于修改实例内核小版本的升级限制时间。
 * @method Models\ModifyMaintainPeriodConfigResponse ModifyMaintainPeriodConfig(Models\ModifyMaintainPeriodConfigRequest $req) 本接口（ModifyMaintainPeriodConfig）用于修改维护时间配置。
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) 本接口（ModifyParamTemplate）用于修改用户参数模板。
 * @method Models\ModifyProxyDescResponse ModifyProxyDesc(Models\ModifyProxyDescRequest $req) 本接口（ModifyProxyDesc）用于修改数据库代理描述。
 * @method Models\ModifyProxyRwSplitResponse ModifyProxyRwSplit(Models\ModifyProxyRwSplitRequest $req) 本接口（ModifyProxyRwSplit）用于配置数据库代理读写分离。
 * @method Models\ModifyResourcePackageClustersResponse ModifyResourcePackageClusters(Models\ModifyResourcePackageClustersRequest $req) 本接口（ModifyResourcePackageClusters）用于修改资源包与集群之间的绑定关系。
 * @method Models\ModifyResourcePackageNameResponse ModifyResourcePackageName(Models\ModifyResourcePackageNameRequest $req) 本接口（ModifyResourcePackageName）用于修改资源包名称。
 * @method Models\ModifyResourcePackagesDeductionPriorityResponse ModifyResourcePackagesDeductionPriority(Models\ModifyResourcePackagesDeductionPriorityRequest $req) 修改已绑定资源包抵扣优先级
 * @method Models\ModifyServerlessStrategyResponse ModifyServerlessStrategy(Models\ModifyServerlessStrategyRequest $req) 修改serverless策略
 * @method Models\ModifyVipVportResponse ModifyVipVport(Models\ModifyVipVportRequest $req) 本接口（ModifyVipVport）用于修改实例组ip，端口。
 * @method Models\OfflineClusterResponse OfflineCluster(Models\OfflineClusterRequest $req) 本接口（OfflineCluster）用于销毁集群。
 * @method Models\OfflineInstanceResponse OfflineInstance(Models\OfflineInstanceRequest $req) 本接口（OfflineInstance）用于销毁实例。
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) 本接口（OpenAuditService）用于为实例开通数据库审计服务。
 * @method Models\OpenClusterPasswordComplexityResponse OpenClusterPasswordComplexity(Models\OpenClusterPasswordComplexityRequest $req) 本接口（OpenClusterPasswordComplexity）用于开启自定义密码复杂度功能。
 * @method Models\OpenClusterReadOnlyInstanceGroupAccessResponse OpenClusterReadOnlyInstanceGroupAccess(Models\OpenClusterReadOnlyInstanceGroupAccessRequest $req) 本接口（OpenClusterReadOnlyInstanceGroupAccess）用于开启只读实例组接入。
 * @method Models\OpenClusterTransparentEncryptResponse OpenClusterTransparentEncrypt(Models\OpenClusterTransparentEncryptRequest $req) 开通集群透明加密
 * @method Models\OpenReadOnlyInstanceExclusiveAccessResponse OpenReadOnlyInstanceExclusiveAccess(Models\OpenReadOnlyInstanceExclusiveAccessRequest $req) 本接口（OpenReadOnlyInstanceExclusiveAccess）用于开通只读实例独有访问接入组。
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) 开启SSL加密
 * @method Models\OpenWanResponse OpenWan(Models\OpenWanRequest $req) 本接口（OpenWan）用于开通外网。
 * @method Models\PauseServerlessResponse PauseServerless(Models\PauseServerlessRequest $req) 本接口（PauseServerless）用于暂停 serverless 集群。
 * @method Models\RefundResourcePackageResponse RefundResourcePackage(Models\RefundResourcePackageRequest $req) 本接口（RefundResourcePackage）用于资源包退款。
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) 本接口（ReloadBalanceProxyNode）用于负载均衡数据库代理。
 * @method Models\RemoveClusterSlaveZoneResponse RemoveClusterSlaveZone(Models\RemoveClusterSlaveZoneRequest $req) 本接口（RemoveClusterSlaveZone）用于关闭集群多可用区部署。
 * @method Models\RenewClustersResponse RenewClusters(Models\RenewClustersRequest $req) 续费集群
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于修改数据库账号密码。
 * @method Models\RestartInstanceResponse RestartInstance(Models\RestartInstanceRequest $req) 本接口（RestartInstance）用于重启实例。
 * @method Models\ResumeServerlessResponse ResumeServerless(Models\ResumeServerlessRequest $req) 本接口（ResumeServerless）用于恢复 serverless 集群（启动暂停的集群）。
 * @method Models\RevokeAccountPrivilegesResponse RevokeAccountPrivileges(Models\RevokeAccountPrivilegesRequest $req) 本接口（RevokeAccountPrivileges）用于批量回收账号权限。
 * @method Models\RollBackClusterResponse RollBackCluster(Models\RollBackClusterRequest $req) 本接口（RollBackCluster）用于集群回档。
 * @method Models\RollbackToNewClusterResponse RollbackToNewCluster(Models\RollbackToNewClusterRequest $req) 本接口（RollbackToNewCluster）用于回档到新集群。
 * @method Models\SearchClusterDatabasesResponse SearchClusterDatabases(Models\SearchClusterDatabasesRequest $req) 本接口（SearchClusterDatabases）用于搜索集群数据库列表。
 * @method Models\SearchClusterTablesResponse SearchClusterTables(Models\SearchClusterTablesRequest $req) 本接口（SearchClusterTables）用于搜索集群数据表列表。
 * @method Models\SetRenewFlagResponse SetRenewFlag(Models\SetRenewFlagRequest $req) 本接口（SetRenewFlag）用于设置实例的自动续费功能。
 * @method Models\StartCLSDeliveryResponse StartCLSDelivery(Models\StartCLSDeliveryRequest $req) 本接口（StartCLSDelivery）用于开启日志投递功能。
 * @method Models\StopCLSDeliveryResponse StopCLSDelivery(Models\StopCLSDeliveryRequest $req) 本接口（StopCLSDelivery）用于停止日志投递功能。
 * @method Models\SwitchClusterVpcResponse SwitchClusterVpc(Models\SwitchClusterVpcRequest $req) 本接口（SwitchClusterVpc）用于更换集群vpc。
 * @method Models\SwitchClusterZoneResponse SwitchClusterZone(Models\SwitchClusterZoneRequest $req) 本接口（SwitchClusterZone）用于切换集群的主备可用区。
 * @method Models\SwitchProxyVpcResponse SwitchProxyVpc(Models\SwitchProxyVpcRequest $req) 本接口（SwitchProxyVpc）用于更换数据库代理vpc。
 * @method Models\UnbindClusterResourcePackagesResponse UnbindClusterResourcePackages(Models\UnbindClusterResourcePackagesRequest $req) 本接口（UnbindClusterResourcePackages）用于解除资源包与集群之间的绑定关系。
 * @method Models\UpgradeClusterVersionResponse UpgradeClusterVersion(Models\UpgradeClusterVersionRequest $req) 本接口（UpgradeClusterVersion）用于更新内核小版本。
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 本接口（UpgradeInstance）用于实例变配。
 * @method Models\UpgradeProxyResponse UpgradeProxy(Models\UpgradeProxyRequest $req) 本接口（UpgradeProxy）用于升级数据库代理配置。
 * @method Models\UpgradeProxyVersionResponse UpgradeProxyVersion(Models\UpgradeProxyVersionRequest $req) 本接口（UpgradeProxyVersion）用于升级数据库代理版本。
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
