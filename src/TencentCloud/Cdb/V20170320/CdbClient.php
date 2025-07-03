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

namespace TencentCloud\Cdb\V20170320;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdb\V20170320\Models as Models;

/**
 * @method Models\AddTimeWindowResponse AddTimeWindow(Models\AddTimeWindowRequest $req) 本接口（AddTimeWindow）用于添加云数据库实例的维护时间窗口，以指定实例在哪些时间段可以自动执行切换访问操作。
 * @method Models\AdjustCdbProxyResponse AdjustCdbProxy(Models\AdjustCdbProxyRequest $req) 本接口（AdjustCdbProxy）用于调整数据库代理配置。
 * @method Models\AdjustCdbProxyAddressResponse AdjustCdbProxyAddress(Models\AdjustCdbProxyAddressRequest $req) 本接口（AdjustCdbProxyAddress）用于调整数据库代理地址配置。
 * @method Models\AnalyzeAuditLogsResponse AnalyzeAuditLogs(Models\AnalyzeAuditLogsRequest $req) 本接口（AnalyzeAuditLogs）用于在不同过滤条件下的审计日志结果集中，选定特定的数据列进行聚合统计。
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口(AssociateSecurityGroups)用于安全组批量绑定实例。
 * @method Models\BalanceRoGroupLoadResponse BalanceRoGroupLoad(Models\BalanceRoGroupLoadRequest $req) 本接口(BalanceRoGroupLoad)用于重新均衡 RO 组内实例的负载。注意，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库，谨慎操作。
 * @method Models\CheckMigrateClusterResponse CheckMigrateCluster(Models\CheckMigrateClusterRequest $req) 本接口（CheckMigrateCluster）用于高可用实例一键迁移到云盘版校验。
 * @method Models\CloseAuditServiceResponse CloseAuditService(Models\CloseAuditServiceRequest $req) 实例关闭审计服务
 * @method Models\CloseCDBProxyResponse CloseCDBProxy(Models\CloseCDBProxyRequest $req) 本接口（CloseCDBProxy）用于关闭数据库代理。
 * @method Models\CloseCdbProxyAddressResponse CloseCdbProxyAddress(Models\CloseCdbProxyAddressRequest $req) 本接口（CloseCdbProxyAddress）用于请求关闭数据库代理地址。
 * @method Models\CloseSSLResponse CloseSSL(Models\CloseSSLRequest $req) 本接口（CloseSSL）用于关闭 SSL 连接功能。
 * @method Models\CloseWanServiceResponse CloseWanService(Models\CloseWanServiceRequest $req) 本接口(CloseWanService)用于关闭云数据库实例的外网访问。关闭外网访问后，外网地址将不可访问。
 * @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) 本接口（CreateAccounts）用于创建云数据库的账户，需要指定新的账户名和域名，以及所对应的密码，同时可以设置账号的备注信息以及最大可用连接数。
 * @method Models\CreateAuditLogFileResponse CreateAuditLogFile(Models\CreateAuditLogFileRequest $req) 本接口（CreateAuditLogFile）用于创建云数据库实例的审计日志文件。
 * @method Models\CreateAuditPolicyResponse CreateAuditPolicy(Models\CreateAuditPolicyRequest $req) 本接口(CreateAuditPolicy)用于创建云数据库实例的审计策略，即将审计规则绑定到具体的云数据库实例上。
 * @method Models\CreateAuditRuleResponse CreateAuditRule(Models\CreateAuditRuleRequest $req) 不再支持审计规则创建

本接口(CreateAuditRule)用于创建用户在当前地域的审计规则。
 * @method Models\CreateAuditRuleTemplateResponse CreateAuditRuleTemplate(Models\CreateAuditRuleTemplateRequest $req) 本接口（CreateAuditRuleTemplate）用于创建审计规则模板。
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 本接口（CreateBackup）用于创建数据库备份。
 * @method Models\CreateCdbProxyResponse CreateCdbProxy(Models\CreateCdbProxyRequest $req) 本接口（CreateCdbProxy）用于主实例创建数据库代理。
 * @method Models\CreateCdbProxyAddressResponse CreateCdbProxyAddress(Models\CreateCdbProxyAddressRequest $req) 本接口（CreateCdbProxyAddress）用于数据库代理增加代理地址。
 * @method Models\CreateCloneInstanceResponse CreateCloneInstance(Models\CreateCloneInstanceRequest $req) 本接口（CreateCloneInstance）用于从目标源实例创建一个克隆实例，可以指定克隆实例回档到源实例的指定物理备份文件或者指定的回档时间点。
 * @method Models\CreateDBImportJobResponse CreateDBImportJob(Models\CreateDBImportJobRequest $req) 本接口（CreateDBImportJob）用于创建云数据库数据导入任务。
注意，用户进行数据导入任务的文件，必须提前上传到腾讯云。用户须在控制台进行文件导入。
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口（CreateDBInstance）用于创建包年包月的云数据库实例（包括主实例、灾备实例和只读实例），可通过传入实例规格、MySQL 版本号、购买时长和数量等信息创建云数据库实例。

该接口为异步接口，您还可以使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询该实例的详细信息。当该实例的 Status 为1，且 TaskStatus 为0，表示实例已经发货成功。

1. 首先请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口查询可创建的实例规格信息，然后请使用 [查询数据库价格](https://cloud.tencent.com/document/api/236/18566) 接口查询可创建实例的售卖价格；
2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；
3. 支持创建 MySQL 5.5 、 MySQL 5.6 、 MySQL 5.7 、 MySQL 8.0 版本；
4. 支持创建主实例、只读实例、灾备实例；
5. 当入参指定 ParamTemplateId 或 AlarmPolicyList 时，需将SDK提升至最新版本方可支持；
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) 本接口（CreateDBInstanceHour）用于创建按量计费的实例，可通过传入实例规格、MySQL 版本号和数量等信息创建云数据库实例，支持主实例、灾备实例和只读实例的创建。

该接口为异步接口，您还可以使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询该实例的详细信息。当该实例的 Status 为 1，且 TaskStatus 为 0，表示实例已经发货成功。

1. 首先请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口查询可创建的实例规格信息，然后请使用 [查询数据库价格](https://cloud.tencent.com/document/api/236/18566) 接口查询可创建实例的售卖价格；
2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；
3. 支持创建 MySQL 5.5、MySQL 5.6 、MySQL 5.7 和 MySQL 8.0 版本；
4. 支持创建主实例、灾备实例和只读实例；
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) 本接口(CreateDatabase)用于在云数据库实例中创建数据库。
 * @method Models\CreateDeployGroupResponse CreateDeployGroup(Models\CreateDeployGroupRequest $req) 本接口（CreateDeployGroup）用于创建放置实例的置放群组。
 * @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) 该接口（CreateParamTemplate）用于创建参数模板。
说明：参数模板为公共组件，配置完成后全地域生效。接口调用配置地域可选择广州、新加坡。
 * @method Models\CreateRoInstanceIpResponse CreateRoInstanceIp(Models\CreateRoInstanceIpRequest $req) 本接口(CreateRoInstanceIp)用于创建云数据库只读实例的独立VIP。
 * @method Models\CreateRotationPasswordResponse CreateRotationPassword(Models\CreateRotationPasswordRequest $req) 本接口（CreateRotationPassword）用于开启密码轮转。
 * @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) 本接口（DeleteAccounts）用于删除云数据库的账户。
 * @method Models\DeleteAuditLogFileResponse DeleteAuditLogFile(Models\DeleteAuditLogFileRequest $req) 本接口(DeleteAuditLogFile)用于删除云数据库实例的审计日志文件。
 * @method Models\DeleteAuditPolicyResponse DeleteAuditPolicy(Models\DeleteAuditPolicyRequest $req) 本接口(DeleteAuditPolicy)用于删除用户的审计策略。
 * @method Models\DeleteAuditRuleResponse DeleteAuditRule(Models\DeleteAuditRuleRequest $req) 不再支持审计规则创建

本接口(DeleteAuditRule)用于删除用户的审计规则。
 * @method Models\DeleteAuditRuleTemplatesResponse DeleteAuditRuleTemplates(Models\DeleteAuditRuleTemplatesRequest $req) 删除审计规则模板
 * @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) 本接口(DeleteBackup)用于删除数据库备份。本接口只支持删除手动发起的备份。
 * @method Models\DeleteDatabaseResponse DeleteDatabase(Models\DeleteDatabaseRequest $req) 本接口(DeleteDatabase)用于在云数据库实例中删除数据库。
 * @method Models\DeleteDeployGroupsResponse DeleteDeployGroups(Models\DeleteDeployGroupsRequest $req) 根据置放群组ID删除置放群组（置放群组中有资源存在时不能删除该置放群组）
 * @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) 该接口（DeleteParamTemplate）用于删除参数模板。
说明：参数模板为公共组件，配置完成后全地域生效。接口调用配置地域可选择广州、新加坡。
 * @method Models\DeleteRotationPasswordResponse DeleteRotationPassword(Models\DeleteRotationPasswordRequest $req) 本接口（DeleteRotationPassword）用于关闭实例账户密码轮转。
 * @method Models\DeleteTimeWindowResponse DeleteTimeWindow(Models\DeleteTimeWindowRequest $req) 本接口（DeleteTimeWindow）用于删除云数据库实例的维护时间窗口。删除实例维护时间窗口之后，默认的维护时间窗为每天的03:00-04:00，数据校验延迟阈值为10秒，即当选择在维护时间窗口内切换访问新实例时，默认会在03:00-04:00点进行切换访问新实例。
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口（DescribeAccountPrivileges）用于查询云数据库账户支持的权限信息。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于查询云数据库的所有账户信息。
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 本接口(DescribeAsyncRequestInfo)用于查询云数据库实例异步任务的执行结果。
 * @method Models\DescribeAuditConfigResponse DescribeAuditConfig(Models\DescribeAuditConfigRequest $req) 本接口(DescribeAuditConfig)用于查询云数据库审计策略的服务配置，包括审计日志保存时长等。
 * @method Models\DescribeAuditInstanceListResponse DescribeAuditInstanceList(Models\DescribeAuditInstanceListRequest $req) 本接口（DescribeAuditInstanceList）用于获取审计实例列表。
 * @method Models\DescribeAuditLogFilesResponse DescribeAuditLogFiles(Models\DescribeAuditLogFilesRequest $req) 本接口（DescribeAuditLogFiles）用于查询云数据库实例的审计日志文件。
 * @method Models\DescribeAuditLogsResponse DescribeAuditLogs(Models\DescribeAuditLogsRequest $req) 本接口（DescribeAuditLogs）用于查询数据库审计日志。
 * @method Models\DescribeAuditPoliciesResponse DescribeAuditPolicies(Models\DescribeAuditPoliciesRequest $req) 本接口（DescribeAuditPolicies）用于查询云数据库实例的审计策略。
 * @method Models\DescribeAuditRuleTemplateModifyHistoryResponse DescribeAuditRuleTemplateModifyHistory(Models\DescribeAuditRuleTemplateModifyHistoryRequest $req) 本接口（DescribeAuditRuleTemplateModifyHistory）用于查询规则模板变更记录。
 * @method Models\DescribeAuditRuleTemplatesResponse DescribeAuditRuleTemplates(Models\DescribeAuditRuleTemplatesRequest $req) 本接口（DescribeAuditRuleTemplates）用于查询审计规则模板信息。
 * @method Models\DescribeAuditRulesResponse DescribeAuditRules(Models\DescribeAuditRulesRequest $req) 不再支持审计规则创建

本接口(DescribeAuditRules)用于查询用户在当前地域的审计规则。
 * @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) 本接口（DescribeBackupConfig）用于查询数据库备份配置信息。
 * @method Models\DescribeBackupDecryptionKeyResponse DescribeBackupDecryptionKey(Models\DescribeBackupDecryptionKeyRequest $req) 本接口（DescribeBackupDecryptionKey）用于查询备份文件解密密钥。
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) 该接口用户查询当前地域用户设置的默认备份下载来源限制。
 * @method Models\DescribeBackupEncryptionStatusResponse DescribeBackupEncryptionStatus(Models\DescribeBackupEncryptionStatusRequest $req) 本接口(DescribeBackupEncryptionStatus)用于查询实例默认备份加密状态。
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) 本接口(DescribeBackupOverview)用于查询用户的备份概览。返回用户当前备份总个数、备份总的占用容量、赠送的免费容量、计费容量（容量单位为字节）。
 * @method Models\DescribeBackupSummariesResponse DescribeBackupSummaries(Models\DescribeBackupSummariesRequest $req) 本接口(DescribeBackupSummaries)用于查询备份的统计情况，返回以实例为维度的备份占用容量，以及每个实例的数据备份和日志备份的个数和容量（容量单位为字节）。
 * @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) 本接口(DescribeBackups)用于查询云数据库实例的备份数据。
 * @method Models\DescribeBinlogBackupOverviewResponse DescribeBinlogBackupOverview(Models\DescribeBinlogBackupOverviewRequest $req) 本接口(DescribeBinlogBackupOverview)用于查询用户在当前地域总的日志备份概览。
 * @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) 本接口(DescribeBinlogs)用于查询云数据库实例的 binlog 文件列表。
 * @method Models\DescribeCPUExpandStrategyInfoResponse DescribeCPUExpandStrategyInfo(Models\DescribeCPUExpandStrategyInfoRequest $req) 通过该 API 可以查询实例的 CPU 弹性扩容信息
 * @method Models\DescribeCdbProxyInfoResponse DescribeCdbProxyInfo(Models\DescribeCdbProxyInfoRequest $req) 本接口（DescribeCdbProxyInfo）用于查询数据库代理详情信息。
 * @method Models\DescribeCdbZoneConfigResponse DescribeCdbZoneConfig(Models\DescribeCdbZoneConfigRequest $req) 本接口(DescribeCdbZoneConfig)用于查询云数据库各地域可售卖的规格配置。
 * @method Models\DescribeCloneListResponse DescribeCloneList(Models\DescribeCloneListRequest $req) 本接口（DescribeCloneList）用于查询用户实例的克隆任务列表。
 * @method Models\DescribeClusterInfoResponse DescribeClusterInfo(Models\DescribeClusterInfoRequest $req) 本接口（DescribeClusterInfo）用于查询云盘版实例信息。
 * @method Models\DescribeCpuExpandHistoryResponse DescribeCpuExpandHistory(Models\DescribeCpuExpandHistoryRequest $req) 本接口（DescribeCpuExpandHistory）用于查询扩容历史。
 * @method Models\DescribeDBFeaturesResponse DescribeDBFeatures(Models\DescribeDBFeaturesRequest $req) 本接口（DescribeDBFeatures）用于查询云数据库版本属性，包括是否支持数据库加密、数据库审计等功能。
 * @method Models\DescribeDBImportRecordsResponse DescribeDBImportRecords(Models\DescribeDBImportRecordsRequest $req) 本接口(DescribeDBImportRecords)用于查询云数据库导入任务操作日志。
 * @method Models\DescribeDBInstanceCharsetResponse DescribeDBInstanceCharset(Models\DescribeDBInstanceCharsetRequest $req) 本接口(DescribeDBInstanceCharset)用于查询云数据库实例的字符集，获取字符集的名称。
 * @method Models\DescribeDBInstanceConfigResponse DescribeDBInstanceConfig(Models\DescribeDBInstanceConfigRequest $req) 本接口（DescribeDBInstanceConfig）用于查询云数据库实例的配置信息，包括同步模式，部署模式等。
 * @method Models\DescribeDBInstanceGTIDResponse DescribeDBInstanceGTID(Models\DescribeDBInstanceGTIDRequest $req) 本接口(DescribeDBInstanceGTID)用于查询云数据库实例是否开通了 GTID，不支持版本为 5.5 以及以下的实例。
 * @method Models\DescribeDBInstanceInfoResponse DescribeDBInstanceInfo(Models\DescribeDBInstanceInfoRequest $req) 本接口（DescribeDBInstanceInfo）用于查询实例基本信息（实例 ID，实例名称，是否开通加密）。
 * @method Models\DescribeDBInstanceLogToCLSResponse DescribeDBInstanceLogToCLS(Models\DescribeDBInstanceLogToCLSRequest $req) 本接口(DescribeDBInstanceLogToCLS)用于查询实例慢日志、错误日志投递CLS的配置，通过AppId、Region以及实例ID过滤出当前实例日志投递CLS的配置。
 * @method Models\DescribeDBInstanceRebootTimeResponse DescribeDBInstanceRebootTime(Models\DescribeDBInstanceRebootTimeRequest $req) 本接口（DescribeDBInstanceRebootTime）用于查询云数据库实例重启预计所需的时间。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口（DescribeDBInstances）用于查询云数据库实例列表，支持通过项目 ID、实例 ID、访问地址、实例状态等过滤条件来筛选实例。支持查询主实例、灾备实例和只读实例信息列表。
 * @method Models\DescribeDBPriceResponse DescribeDBPrice(Models\DescribeDBPriceRequest $req) 本接口（DescribeDBPrice）用于查询购买或续费云数据库实例的价格，支持查询按量计费或者包年包月的价格。可传入实例类型、购买时长、购买数量、内存大小、硬盘大小和可用区信息等来查询实例价格。可传入实例名称来查询实例续费价格。

注意：对某个地域进行询价，请使用对应地域的接入点，接入点信息请参照 <a href="https://cloud.tencent.com/document/api/236/15832">服务地址</a> 文档。例如：对广州地域进行询价，请把请求发到：cdb.ap-guangzhou.tencentcloudapi.com。同理对上海地域询价，把请求发到：cdb.ap-shanghai.tencentcloudapi.com。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
 * @method Models\DescribeDBSwitchRecordsResponse DescribeDBSwitchRecords(Models\DescribeDBSwitchRecordsRequest $req) 本接口(DescribeDBSwitchRecords)用于查询云数据库实例切换记录。
 * @method Models\DescribeDataBackupOverviewResponse DescribeDataBackupOverview(Models\DescribeDataBackupOverviewRequest $req) 本接口(DescribeDataBackupOverview)用于查询用户在当前地域总的数据备份概览。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口(DescribeDatabases)用于查询云数据库实例的数据库信息，仅支持主实例和灾备实例，不支持只读实例。
 * @method Models\DescribeDefaultParamsResponse DescribeDefaultParams(Models\DescribeDefaultParamsRequest $req) 该接口（DescribeDefaultParams）用于查询默认的可设置参数列表。
 * @method Models\DescribeDeployGroupListResponse DescribeDeployGroupList(Models\DescribeDeployGroupListRequest $req) 本接口(DescribeDeployGroupList)用于查询用户的置放群组列表，可以指定置放群组 ID 或置放群组名称。
 * @method Models\DescribeDeviceMonitorInfoResponse DescribeDeviceMonitorInfo(Models\DescribeDeviceMonitorInfoRequest $req) 本接口（DescribeDeviceMonitorInfo）用于查询云数据库物理机当天的监控信息，暂只支持内存488G、硬盘6T的实例查询。
 * @method Models\DescribeErrorLogDataResponse DescribeErrorLogData(Models\DescribeErrorLogDataRequest $req) 根据检索条件查询实例错误日志详情。只能查询一个月之内的错误日志。
使用时需要注意：可能存在单条错误日志太大，导致整个http请求的回包太大，进而引发接口超时。一旦发生超时，建议您缩小查询时的Limit参数值，从而降低包的大小，让接口能够及时返回内容。
 * @method Models\DescribeInstanceAlarmEventsResponse DescribeInstanceAlarmEvents(Models\DescribeInstanceAlarmEventsRequest $req) 本接口（DescribeInstanceAlarmEvents）用于查询实例发生的事件信息。
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) 该接口（DescribeInstanceParamRecords）用于查询实例参数修改历史。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 该接口（DescribeInstanceParams）用于查询实例的参数列表。
 * @method Models\DescribeInstanceUpgradeCheckJobResponse DescribeInstanceUpgradeCheckJob(Models\DescribeInstanceUpgradeCheckJobRequest $req) 该接口（DescribeInstanceUpgradeCheckJob）查询实例版本升级校验任务。
 * @method Models\DescribeInstanceUpgradeTypeResponse DescribeInstanceUpgradeType(Models\DescribeInstanceUpgradeTypeRequest $req) 本接口（DescribeInstanceUpgradeType）用于查询数据库实例升级类型。
 * @method Models\DescribeLocalBinlogConfigResponse DescribeLocalBinlogConfig(Models\DescribeLocalBinlogConfigRequest $req) 该接口用于查询实例本地binlog保留策略。
 * @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) 该接口（DescribeParamTemplateInfo）用于查询参数模板详情，全地域公共参数Region均为ap-guangzhou。
 * @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 该接口（DescribeParamTemplates）查询参数模板列表。
说明：参数模板为公共组件，配置完成后全地域生效。接口调用配置地域可选择广州、新加坡。
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
 * @method Models\DescribeProxyCustomConfResponse DescribeProxyCustomConf(Models\DescribeProxyCustomConfRequest $req) 查询代理规格配置
 * @method Models\DescribeProxySupportParamResponse DescribeProxySupportParam(Models\DescribeProxySupportParamRequest $req) 本接口（DescribeProxySupportParam）用于查询实例支持代理版本和参数。
 * @method Models\DescribeRemoteBackupConfigResponse DescribeRemoteBackupConfig(Models\DescribeRemoteBackupConfigRequest $req) 本接口(DescribeRemoteBackupConfig)用于查询数据库异地备份配置信息。
 * @method Models\DescribeRoGroupsResponse DescribeRoGroups(Models\DescribeRoGroupsRequest $req) 本接口（DescribeRoGroups）用于查询云数据库实例的所有的 RO 组的信息。
 * @method Models\DescribeRoMinScaleResponse DescribeRoMinScale(Models\DescribeRoMinScaleRequest $req) 本接口(DescribeRoMinScale)用于获取只读实例购买、升级时的最小规格。
 * @method Models\DescribeRollbackRangeTimeResponse DescribeRollbackRangeTime(Models\DescribeRollbackRangeTimeRequest $req) 本接口(DescribeRollbackRangeTime)用于查询云数据库实例可回档的时间范围。
 * @method Models\DescribeRollbackTaskDetailResponse DescribeRollbackTaskDetail(Models\DescribeRollbackTaskDetailRequest $req) 本接口(DescribeRollbackTaskDetail)用于查询云数据库实例回档任务详情。
 * @method Models\DescribeSSLStatusResponse DescribeSSLStatus(Models\DescribeSSLStatusRequest $req) 查询 SSL 开通情况。如果已经开通 SSL ，会同步返回证书下载链接。
 * @method Models\DescribeSlowLogDataResponse DescribeSlowLogData(Models\DescribeSlowLogDataRequest $req) 本接口（DescribeSlowLogData）用于使用条件检索实例的慢日志。只允许查看一个月之内的慢日志。
使用时需要注意：可能存在单条慢日志太大，导致整个http请求的回包太大，进而引发接口超时。一旦发生超时，建议您缩小查询时的Limit参数值，从而降低包的大小，让接口能够及时返回内容。
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 本接口(DescribeSlowLogs)用于获取云数据库实例的慢查询日志。说明：若单次查询数据量过大，则有可能响应超时，建议缩短单次查询时间范围，如一小时，避免导致超时。
 * @method Models\DescribeSupportedPrivilegesResponse DescribeSupportedPrivileges(Models\DescribeSupportedPrivilegesRequest $req) 本接口(DescribeSupportedPrivileges)用于查询云数据库的支持的权限信息，包括全局权限，数据库权限，表权限以及列权限。
 * @method Models\DescribeTableColumnsResponse DescribeTableColumns(Models\DescribeTableColumnsRequest $req) 本接口(DescribeTableColumns)用于查询云数据库实例的指定数据库表的列信息，仅支持主实例和灾备实例。
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口(DescribeTables)用于查询云数据库实例的数据库表信息，仅支持主实例和灾备实例，不支持只读实例。
 * @method Models\DescribeTagsOfInstanceIdsResponse DescribeTagsOfInstanceIds(Models\DescribeTagsOfInstanceIdsRequest $req) 本接口(DescribeTagsOfInstanceIds)用于获取云数据库实例的标签信息。
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口(DescribeTasks)用于查询云数据库实例任务列表。
 * @method Models\DescribeTimeWindowResponse DescribeTimeWindow(Models\DescribeTimeWindowRequest $req) 本接口(DescribeTimeWindow)用于查询云数据库实例的维护时间窗口。
 * @method Models\DescribeUploadedFilesResponse DescribeUploadedFiles(Models\DescribeUploadedFilesRequest $req) 本接口(DescribeUploadedFiles)用于查询用户导入的SQL文件列表，全地域公共参数Region均为ap-shanghai。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\InquiryPriceUpgradeInstancesResponse InquiryPriceUpgradeInstances(Models\InquiryPriceUpgradeInstancesRequest $req) 本接口(InquiryPriceUpgradeInstances)用于查询云数据库实例升级的价格，支持查询按量计费或者包年包月实例的升级价格，实例类型支持主实例、灾备实例和只读实例。
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口（IsolateDBInstance）用于隔离云数据库实例，隔离后不能通过IP和端口访问数据库。隔离的实例可在回收站中进行开机。若为欠费隔离，请尽快进行充值。
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口(ModifyAccountDescription)用于修改云数据库账户的备注信息。
 * @method Models\ModifyAccountHostResponse ModifyAccountHost(Models\ModifyAccountHostRequest $req) 本接口(ModifyAccountHost)用于修改云数据库账户的主机。
 * @method Models\ModifyAccountMaxUserConnectionsResponse ModifyAccountMaxUserConnections(Models\ModifyAccountMaxUserConnectionsRequest $req) 本接口（ModifyAccountMaxUserConnections）用于修改云数据库账户最大可用连接数。
 * @method Models\ModifyAccountPasswordResponse ModifyAccountPassword(Models\ModifyAccountPasswordRequest $req) 本接口(ModifyAccountPassword)用于修改云数据库账户的密码。
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 本接口(ModifyAccountPrivileges)用于修改云数据库的账户的权限信息。

注意，修改账号权限时，需要传入该账号下的全量权限信息。用户可以先通过 [查询云数据库账户的权限信息
](https://cloud.tencent.com/document/api/236/17500) 查询该账号下的全量权限信息，然后进行权限修改。
 * @method Models\ModifyAuditConfigResponse ModifyAuditConfig(Models\ModifyAuditConfigRequest $req) 本接口(ModifyAuditConfig)用于修改云数据库审计策略的服务配置，包括审计日志保存时长等。
 * @method Models\ModifyAuditRuleResponse ModifyAuditRule(Models\ModifyAuditRuleRequest $req) 不再支持审计规则创建

本接口(ModifyAuditRule)用于修改用户的审计规则。
 * @method Models\ModifyAuditRuleTemplatesResponse ModifyAuditRuleTemplates(Models\ModifyAuditRuleTemplatesRequest $req) 修改审计规则模板
 * @method Models\ModifyAuditServiceResponse ModifyAuditService(Models\ModifyAuditServiceRequest $req) 本接口(ModifyAuditService)用于修改云数据库审计日志保存时长、审计规则等服务配置
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) 本接口（ModifyAutoRenewFlag）用于修改云数据库实例的自动续费标记。仅支持包年包月的实例设置自动续费标记。
 * @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) 本接口(ModifyBackupConfig)用于修改数据库备份配置信息。
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) 该接口用于修改用户当前地域的备份文件限制下载来源，可以设置内外网均可下载、仅内网可下载，或内网指定的vpc、ip可以下载。
 * @method Models\ModifyBackupEncryptionStatusResponse ModifyBackupEncryptionStatus(Models\ModifyBackupEncryptionStatusRequest $req) 本接口(ModifyBackupEncryptionStatus)用于设置实例备份文件是否加密。
 * @method Models\ModifyCdbProxyAddressDescResponse ModifyCdbProxyAddressDesc(Models\ModifyCdbProxyAddressDescRequest $req) 本接口（ModifyCdbProxyAddressDesc）用于修改代理地址描述信息。
 * @method Models\ModifyCdbProxyAddressVipAndVPortResponse ModifyCdbProxyAddressVipAndVPort(Models\ModifyCdbProxyAddressVipAndVPortRequest $req) 本接口（ModifyCdbProxyAddressVipAndVPort）用于修改数据库代理地址VPC信息。
 * @method Models\ModifyCdbProxyParamResponse ModifyCdbProxyParam(Models\ModifyCdbProxyParamRequest $req) 本接口（ModifyCdbProxyParam）用于配置数据库代理参数。
 * @method Models\ModifyDBInstanceLogToCLSResponse ModifyDBInstanceLogToCLS(Models\ModifyDBInstanceLogToCLSRequest $req) 开启/关闭CDB慢日志、错误日志投递CLS
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口(ModifyDBInstanceName)用于修改云数据库实例的名称。
 * @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) 本接口(ModifyDBInstanceProject)用于修改云数据库实例的所属项目。
 * @method Models\ModifyDBInstanceReadOnlyStatusResponse ModifyDBInstanceReadOnlyStatus(Models\ModifyDBInstanceReadOnlyStatusRequest $req) 本接口（ModifyDBInstanceReadOnlyStatus）用户设置MySQL云数据库实例为只读
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyDBInstanceVipVportResponse ModifyDBInstanceVipVport(Models\ModifyDBInstanceVipVportRequest $req) 本接口（ModifyDBInstanceVipVport）用于修改云数据库实例的IP和端口号，也可进行基础网络转 VPC 网络和 VPC 网络下的子网变更。
 * @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) 本接口(ModifyInstanceParam)用于修改云数据库实例的参数。
 * @method Models\ModifyInstancePasswordComplexityResponse ModifyInstancePasswordComplexity(Models\ModifyInstancePasswordComplexityRequest $req) 本接口（ModifyInstancePasswordComplexity）用于修改云数据库实例的密码复杂度。
 * @method Models\ModifyInstanceTagResponse ModifyInstanceTag(Models\ModifyInstanceTagRequest $req) 本接口(ModifyInstanceTag)用于对实例标签进行添加、修改或者删除。
 * @method Models\ModifyLocalBinlogConfigResponse ModifyLocalBinlogConfig(Models\ModifyLocalBinlogConfigRequest $req) 该接口用于修改实例本地binlog保留策略。
 * @method Models\ModifyNameOrDescByDpIdResponse ModifyNameOrDescByDpId(Models\ModifyNameOrDescByDpIdRequest $req) 修改置放群组的名称或者描述
 * @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) 该接口（ModifyParamTemplate）用于修改参数模板。
说明：参数模板为公共组件，配置完成后全地域生效。接口调用配置地域可选择广州、新加坡。
 * @method Models\ModifyProtectModeResponse ModifyProtectMode(Models\ModifyProtectModeRequest $req) 该接口（ModifyProtectMode）用于修改实例的同步方式。
说明：仅专属集群可调用，该接口即将下线。
 * @method Models\ModifyRemoteBackupConfigResponse ModifyRemoteBackupConfig(Models\ModifyRemoteBackupConfigRequest $req) 本接口(ModifyRemoteBackupConfig)用于修改数据库异地备份配置信息。
 * @method Models\ModifyRoGroupInfoResponse ModifyRoGroupInfo(Models\ModifyRoGroupInfoRequest $req) 本接口（ModifyRoGroupInfo）用于更新云数据库只读组的信息。包括设置实例延迟超限剔除策略，设置只读实例读权重，设置复制延迟时间等。
 * @method Models\ModifyTimeWindowResponse ModifyTimeWindow(Models\ModifyTimeWindowRequest $req) 本接口(ModifyTimeWindow)用于更新云数据库实例的维护时间窗口。
 * @method Models\OfflineIsolatedInstancesResponse OfflineIsolatedInstances(Models\OfflineIsolatedInstancesRequest $req) 本接口(OfflineIsolatedInstances)用于立即下线隔离状态的云数据库实例。进行操作的实例状态必须为隔离状态，即通过 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询到 Status 值为 5 的实例。

该接口为异步操作，部分资源的回收可能存在延迟。您可以通过使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口，指定实例 InstanceId 和状态 Status 为 [5,6,7] 进行查询，若返回实例为空，则实例资源已全部释放。

注意，实例下线后，相关资源和数据将无法找回，请谨慎操作。
 * @method Models\OpenAuditServiceResponse OpenAuditService(Models\OpenAuditServiceRequest $req) 本接口（OpenAuditService）用 CDB 实例开通审计服务。
 * @method Models\OpenDBInstanceEncryptionResponse OpenDBInstanceEncryption(Models\OpenDBInstanceEncryptionRequest $req) 本接口（OpenDBInstanceEncryption）用于启用实例数据存储加密功能，支持用户指定自定义密钥。

注意，启用实例数据存储加密之前，需要进行以下操作：

1、进行 [实例初始化](https://cloud.tencent.com/document/api/236/15873) 操作；

2、开启 [KMS服务](https://console.cloud.tencent.com/kms2)；

3、对云数据库(MySQL)[授予访问KMS密钥的权限](https://console.cloud.tencent.com/cam/role)，角色名为MySQL_QCSRole，预设策略名为QcloudAccessForMySQLRole；
4、开启加密后不允许关闭。

该 API 耗时可能到10s，客户端可能超时，如果调用 API 返回 InternalError ，请您调用 [DescribeDBInstanceInfo](https://cloud.tencent.com/document/product/236/44160) 确认后端加密是否开通成功，调用后参数 Encryption 为 YES 表示已开通成功。
 * @method Models\OpenDBInstanceGTIDResponse OpenDBInstanceGTID(Models\OpenDBInstanceGTIDRequest $req) 本接口(OpenDBInstanceGTID)用于开启云数据库实例的 GTID，只支持版本为 5.6 以及以上的实例。
 * @method Models\OpenSSLResponse OpenSSL(Models\OpenSSLRequest $req) 本接口（OpenSSL）用于开启 SSL 连接功能。
 * @method Models\OpenWanServiceResponse OpenWanService(Models\OpenWanServiceRequest $req) 本接口(OpenWanService)用于开通实例外网访问。

注意，实例开通外网访问之前，需要先将实例进行 [实例初始化](https://cloud.tencent.com/document/api/236/15873) 操作。
 * @method Models\ReleaseIsolatedDBInstancesResponse ReleaseIsolatedDBInstances(Models\ReleaseIsolatedDBInstancesRequest $req) 本接口（ReleaseIsolatedDBInstances）用于恢复已隔离云数据库实例。仅用于按量计费实例的解隔离，包年包月实例的解隔离请使用 RenewDBInstance 。
 * @method Models\ReloadBalanceProxyNodeResponse ReloadBalanceProxyNode(Models\ReloadBalanceProxyNodeRequest $req) 重新负载均衡数据库代理
 * @method Models\RenewDBInstanceResponse RenewDBInstance(Models\RenewDBInstanceRequest $req) 本接口（RenewDBInstance）用于续费云数据库实例，支持付费模式为包年包月的实例。按量计费实例可通过该接口续费为包年包月的实例。
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) 手动刷新轮转密码
 * @method Models\ResetRootAccountResponse ResetRootAccount(Models\ResetRootAccountRequest $req) 重置实例ROOT账号，初始化账号权限
 * @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) 本接口（RestartDBInstances）用于重启云数据库实例。

注意：
1、本接口支持主实例、只读实例、灾备实例进行重启操作。
2、实例状态必须为正常，并且没有其他异步任务在执行中。
 * @method Models\StartBatchRollbackResponse StartBatchRollback(Models\StartBatchRollbackRequest $req) 该接口（StartBatchRollback）用于批量回档云数据库实例的库表。
 * @method Models\StartCpuExpandResponse StartCpuExpand(Models\StartCpuExpandRequest $req) 通过该 API，可以开启 CPU 弹性扩容，包括一次性的手动扩容以及自动弹性扩容。
 * @method Models\StartReplicationResponse StartReplication(Models\StartReplicationRequest $req) 本接口（StartReplication）用于开启 RO 复制，从主实例同步数据。
 * @method Models\StopCpuExpandResponse StopCpuExpand(Models\StopCpuExpandRequest $req) 通过该API，可以关闭 CPU 弹性扩容。
 * @method Models\StopDBImportJobResponse StopDBImportJob(Models\StopDBImportJobRequest $req) 本接口（StopDBImportJob）用于终止数据导入任务。
说明：只有未完成的导入任务支持被终止，且终止后已执行的 SQL 部分会被保留。
 * @method Models\StopReplicationResponse StopReplication(Models\StopReplicationRequest $req) 本接口（StopReplication）用于停止 RO 复制，中断从主实例同步数据。
 * @method Models\StopRollbackResponse StopRollback(Models\StopRollbackRequest $req) 本接口(StopRollback) 用于撤销实例正在进行的回档任务，该接口返回一个异步任务id。 撤销结果可以通过 DescribeAsyncRequestInfo 查询任务的执行情况。
 * @method Models\SubmitInstanceUpgradeCheckJobResponse SubmitInstanceUpgradeCheckJob(Models\SubmitInstanceUpgradeCheckJobRequest $req) 该接口（SubmitInstanceUpgradeCheckJob）提交实例版本升级校验任务。
 * @method Models\SwitchCDBProxyResponse SwitchCDBProxy(Models\SwitchCDBProxyRequest $req) 本接口（SwitchCDBProxy）用于数据库代理配置变更或者升级版本后手动发起立即切换。
 * @method Models\SwitchDBInstanceMasterSlaveResponse SwitchDBInstanceMasterSlave(Models\SwitchDBInstanceMasterSlaveRequest $req) 该接口 (SwitchDBInstanceMasterSlave) 支持用户主动切换实例主从角色。
 * @method Models\SwitchDrInstanceToMasterResponse SwitchDrInstanceToMaster(Models\SwitchDrInstanceToMasterRequest $req) 本接口（SwitchDrInstanceToMaster）用于将云数据库灾备实例切换为主实例，注意请求必须发到灾备实例所在的地域。
 * @method Models\SwitchForUpgradeResponse SwitchForUpgrade(Models\SwitchForUpgradeRequest $req) 本接口(SwitchForUpgrade)用于切换访问新实例，针对主升级中的实例处于待切换状态时，用户可主动发起该流程。
 * @method Models\UpgradeCDBProxyVersionResponse UpgradeCDBProxyVersion(Models\UpgradeCDBProxyVersionRequest $req) 本接口（UpgradeCDBProxyVersion）用于升级数据库代理版本。
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口（UpgradeDBInstance）用于升级或降级云数据库实例的配置，实例类型支持主实例、灾备实例和只读实例。如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。
 * @method Models\UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(Models\UpgradeDBInstanceEngineVersionRequest $req) 本接口(UpgradeDBInstanceEngineVersion)用于升级云数据库实例版本，实例类型支持主实例、灾备实例和只读实例等。
 * @method Models\VerifyRootAccountResponse VerifyRootAccount(Models\VerifyRootAccountRequest $req) 本接口(VerifyRootAccount)用于校验云数据库实例的 ROOT 账号是否有足够的权限进行授权操作。
 */

class CdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdb";

    /**
     * @var string
     */
    protected $version = "2017-03-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdb")."\\"."V20170320\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
