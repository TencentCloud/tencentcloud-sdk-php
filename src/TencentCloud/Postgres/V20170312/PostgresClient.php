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

namespace TencentCloud\Postgres\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Postgres\V20170312\Models as Models;

/**
 * @method Models\AddDBInstanceToReadOnlyGroupResponse AddDBInstanceToReadOnlyGroup(Models\AddDBInstanceToReadOnlyGroupRequest $req) 本接口（AddDBInstanceToReadOnlyGroup）用于添加只读实例到只读组
 * @method Models\CloneDBInstanceResponse CloneDBInstance(Models\CloneDBInstanceRequest $req) 用于克隆实例，支持指定备份集、指定时间点进行克隆。
 * @method Models\CloseAccountCAMResponse CloseAccountCAM(Models\CloseAccountCAMRequest $req) 本接口用于关闭数据库账户的CAM验证服务。
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) 本接口（CloseDBExtranetAccess）用于关闭实例公网地址。
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 此接口用于创建数据账号，返回的Oid为账号唯一标识。与数据库系统表pg_roles中记录的oid一致。
 * @method Models\CreateBackupPlanResponse CreateBackupPlan(Models\CreateBackupPlanRequest $req) 此接口用于创建备份策略。
 * @method Models\CreateBaseBackupResponse CreateBaseBackup(Models\CreateBaseBackupRequest $req) 本接口（CreateBaseBackup）用于创建实例的数据备份。
 * @method Models\CreateDBInstanceNetworkAccessResponse CreateDBInstanceNetworkAccess(Models\CreateDBInstanceNetworkAccessRequest $req) 本接口（CreateDBInstanceNetworkAccess）用于创建实例网络。单个实例允许创建的网络配置最多为2套，最少为1套。
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) 此接口用于创建数据库，需指定数据库名及所有者。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口 (CreateInstances) 用于创建一个或者多个PostgreSQL实例，通过此接口创建的实例无需进行初始化，可直接使用。
<li>实例创建成功后将自动开机启动，实例状态变为“运行中”。</li>
<li>预付费实例的购买会预先扣除本次实例购买所需金额，按小时后付费实例购买会预先冻结本次实例购买一小时内所需金额，在调用本接口前请确保账户余额充足。</li>
 * @method Models\CreateParameterTemplateResponse CreateParameterTemplate(Models\CreateParameterTemplateRequest $req) 本接口 (CreateParameterTemplate) 用于创建参数模板。
 * @method Models\CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstance(Models\CreateReadOnlyDBInstanceRequest $req) 本接口(CreateReadOnlyDBInstance)用于创建只读实例
 * @method Models\CreateReadOnlyGroupResponse CreateReadOnlyGroup(Models\CreateReadOnlyGroupRequest $req) 本接口（CreateReadOnlyGroup）用于创建只读组
 * @method Models\CreateReadOnlyGroupNetworkAccessResponse CreateReadOnlyGroupNetworkAccess(Models\CreateReadOnlyGroupNetworkAccessRequest $req) 本接口（CreateReadOnlyGroupNetworkAccess）用于创建RO组的网络。创建网络的数量最多为2个。
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 此接口用于删除数据库账号，需要同时输入Oid与UserName，避免误删。注：该接口可重入，如果账号已经不存在，调用此接口进行删除时不会报错。
 * @method Models\DeleteBackupPlanResponse DeleteBackupPlan(Models\DeleteBackupPlanRequest $req) 删除备份策略
 * @method Models\DeleteBaseBackupResponse DeleteBaseBackup(Models\DeleteBaseBackupRequest $req) 本接口（DeleteBaseBackup）用于删除实例指定数据备份。
 * @method Models\DeleteDBInstanceNetworkAccessResponse DeleteDBInstanceNetworkAccess(Models\DeleteDBInstanceNetworkAccessRequest $req) 可对实例进行网络的删除操作（实例内至少保留一个网络）。
 * @method Models\DeleteLogBackupResponse DeleteLogBackup(Models\DeleteLogBackupRequest $req) 本接口（DeleteLogBackup）用于删除实例指定日志备份。
 * @method Models\DeleteParameterTemplateResponse DeleteParameterTemplate(Models\DeleteParameterTemplateRequest $req) 本接口（DeleteParameterTemplate）主要用于删除某个参数模板。
 * @method Models\DeleteReadOnlyGroupResponse DeleteReadOnlyGroup(Models\DeleteReadOnlyGroupRequest $req) 本接口(DeleteReadOnlyGroup)用于删除指定的只读组
 * @method Models\DeleteReadOnlyGroupNetworkAccessResponse DeleteReadOnlyGroupNetworkAccess(Models\DeleteReadOnlyGroupNetworkAccessRequest $req) 可对RO组进行网络的删除操作（网络数量至少保留1个）。
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 查询数据库账号对某数据库对象拥有的权限列表。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于查询实例的数据库账号列表。
 * @method Models\DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTime(Models\DescribeAvailableRecoveryTimeRequest $req) 本接口（DescribeAvailableRecoveryTime）用于查询实例可恢复的时间范围。
 * @method Models\DescribeBackupDownloadRestrictionResponse DescribeBackupDownloadRestriction(Models\DescribeBackupDownloadRestrictionRequest $req) 本接口（DescribeBackupDownloadRestriction）用于查询备份文件下载限制。
 * @method Models\DescribeBackupDownloadURLResponse DescribeBackupDownloadURL(Models\DescribeBackupDownloadURLRequest $req) 本接口 (DescribeBackupDownloadURL) 用于查询指定备份集的下载地址，可包括全量备份集、增量日志备份集。
 * @method Models\DescribeBackupOverviewResponse DescribeBackupOverview(Models\DescribeBackupOverviewRequest $req) 本接口（DescribeBackupOverview）用于查询用户的备份概览信息。返回用户当前备份个数、备份占用容量、免费容量、收费容量等信息（容量单位为字节）。
 * @method Models\DescribeBackupPlansResponse DescribeBackupPlans(Models\DescribeBackupPlansRequest $req) 本接口 (DescribeBackupPlans) 用于实例所有的备份计划查询
 * @method Models\DescribeBackupSummariesResponse DescribeBackupSummaries(Models\DescribeBackupSummariesRequest $req) 本接口(DescribeBackupSummaries)用于查询实例备份的统计信息，返回以实例为维度的备份个数、占用容量等信息（容量单位为字节）。
 * @method Models\DescribeBaseBackupsResponse DescribeBaseBackups(Models\DescribeBaseBackupsRequest $req) 本接口（DescribeBaseBackups）用于查询数据备份列表。
 * @method Models\DescribeClassesResponse DescribeClasses(Models\DescribeClassesRequest $req) 本接口（DescribeClasses）用于查询实例售卖规格。
 * @method Models\DescribeCloneDBInstanceSpecResponse DescribeCloneDBInstanceSpec(Models\DescribeCloneDBInstanceSpecRequest $req) 本接口（DescribeCloneDBInstanceSpec）用于查询克隆实例可选择的最小规格，包括SpecCode和磁盘。
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) 本接口（DescribeDBBackups）用于查询实例备份列表。**本接口属于早期接口，已停止功能迭代，推荐使用接口**[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)**替代**。
 * @method Models\DescribeDBErrlogsResponse DescribeDBErrlogs(Models\DescribeDBErrlogsRequest $req) 本接口（DescribeDBErrlogs）用于查询错误日志。
 * @method Models\DescribeDBInstanceAttributeResponse DescribeDBInstanceAttribute(Models\DescribeDBInstanceAttributeRequest $req) 本接口 (DescribeDBInstanceAttribute) 用于查询某个实例的详情信息。
 * @method Models\DescribeDBInstanceHAConfigResponse DescribeDBInstanceHAConfig(Models\DescribeDBInstanceHAConfigRequest $req) 本接口（DescribeDBInstanceHAConfig）用于查询实例HA配置信息。其中HA配置信息包括：
<li>允许备节点切换为主节点的条件配置</li>
<li>半同步实例使用同步复制或异步复制的条件配置</li>
 * @method Models\DescribeDBInstanceParametersResponse DescribeDBInstanceParameters(Models\DescribeDBInstanceParametersRequest $req) 本接口（DescribeDBInstanceAttribute）用于查询实例的参数信息。
 * @method Models\DescribeDBInstanceSSLConfigResponse DescribeDBInstanceSSLConfig(Models\DescribeDBInstanceSSLConfigRequest $req) 本接口用于查询实例SSL状态
 * @method Models\DescribeDBInstanceSecurityGroupsResponse DescribeDBInstanceSecurityGroups(Models\DescribeDBInstanceSecurityGroupsRequest $req) 本接口（DescribeDBInstanceSecurityGroups）用于查询实例安全组。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口 (DescribeDBInstances) 用于查询一个或多个实例的详细信息。
 * @method Models\DescribeDBVersionsResponse DescribeDBVersions(Models\DescribeDBVersionsRequest $req) 本接口（DescribeDBVersions）用于查询支持的数据库版本。
 * @method Models\DescribeDBXlogsResponse DescribeDBXlogs(Models\DescribeDBXlogsRequest $req) 本接口（DescribeDBXlogs）用于获取实例Xlog列表。 **本接口属于早期接口，已停止功能迭代，推荐使用接口**[DescribeLogBackups](https://cloud.tencent.com/document/api/409/89021)**替代**。
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) 本接口用于查询数据库对象列表。例如查询test数据库下的模式列表。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 接口（DescribeDatabases）用来查询实例的数据库列表。
 * @method Models\DescribeDedicatedClustersResponse DescribeDedicatedClusters(Models\DescribeDedicatedClustersRequest $req) 查询专属集群
 * @method Models\DescribeDefaultParametersResponse DescribeDefaultParameters(Models\DescribeDefaultParametersRequest $req) 本接口（DescribeDefaultParameters）主要用于查询某个数据库版本和引擎支持的所有参数。
 * @method Models\DescribeEncryptionKeysResponse DescribeEncryptionKeys(Models\DescribeEncryptionKeysRequest $req) 本接口 （DescribeEncryptionKeys） 用于查询实例的密钥信息列表。
 * @method Models\DescribeLogBackupsResponse DescribeLogBackups(Models\DescribeLogBackupsRequest $req) 本接口（DescribeLogBackups）用于查询日志备份列表。
 * @method Models\DescribeMaintainTimeWindowResponse DescribeMaintainTimeWindow(Models\DescribeMaintainTimeWindowRequest $req) 本接口 (DescribeMaintainTimeWindow) 用于查询实例的维护时间窗口
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于查询订单信息。
 * @method Models\DescribeParameterTemplateAttributesResponse DescribeParameterTemplateAttributes(Models\DescribeParameterTemplateAttributesRequest $req) 本接口（DescribeParameterTemplateAttributes）用于查询某个参数模板的具体内容，包括基本信息和参数信息。
 * @method Models\DescribeParameterTemplatesResponse DescribeParameterTemplates(Models\DescribeParameterTemplatesRequest $req) 本接口 (DescribeParameterTemplates) 用于查询参数模板列表。
 * @method Models\DescribeParamsEventResponse DescribeParamsEvent(Models\DescribeParamsEventRequest $req) 本接口（DescribeParamsEvent）用于查询参数修改事件。
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) 本接口（DescribeProductConfig）用于查询售卖规格配置。**本接口属于早期接口，已停止功能迭代，推荐使用新接口**[DescribeClasses](https://cloud.tencent.com/document/api/409/89019)**替代**。
 * @method Models\DescribeReadOnlyGroupsResponse DescribeReadOnlyGroups(Models\DescribeReadOnlyGroupsRequest $req) 本接口（DescribeReadOnlyGroups）用于查询只读组列表
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口 (DescribeRegions) 用于查询售卖地域信息。
 * @method Models\DescribeSlowQueryAnalysisResponse DescribeSlowQueryAnalysis(Models\DescribeSlowQueryAnalysisRequest $req) 此接口（DescribeSlowQueryAnalysis）用于统计指定时间范围内的所有慢查询，根据SQL语句抽象参数后，进行聚合分析，并返回同类SQL列表。
 * @method Models\DescribeSlowQueryListResponse DescribeSlowQueryList(Models\DescribeSlowQueryListRequest $req) 此接口（DescribeSlowQueryList）用于查询指定时间范围内的所有慢查询。
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口（DescribeTasks）用于查询任务列表，展示异步任务的执行进度。
注：本接口中展示的步骤为总结性步骤，可能伴随着版本迭代进行调整，不建议作为关键逻辑使用
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 本接口 (DescribeZones) 用于查询支持的可用区信息。
 * @method Models\DestroyDBInstanceResponse DestroyDBInstance(Models\DestroyDBInstanceRequest $req) 本接口 (DestroyDBInstance) 用于彻底销毁指定DBInstanceId对应的实例，销毁后实例数据将彻底删除，无法找回，调用前请仔细确认要操作的实例。只能销毁隔离中的实例。
 * @method Models\DisIsolateDBInstancesResponse DisIsolateDBInstances(Models\DisIsolateDBInstancesRequest $req) 本接口（DisIsolateDBInstances）用于解隔离实例
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) 本接口 (InquiryPriceCreateDBInstances) 用于查询购买实例的价格信息。
 * @method Models\InquiryPriceRenewDBInstanceResponse InquiryPriceRenewDBInstance(Models\InquiryPriceRenewDBInstanceRequest $req) 本接口（InquiryPriceRenewDBInstance）用于查询续费实例的价格。
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) 本接口（InquiryPriceUpgradeDBInstance）用于查询升级实例的价格。只支持按量计费实例。
 * @method Models\IsolateDBInstancesResponse IsolateDBInstances(Models\IsolateDBInstancesRequest $req) 本接口（IsolateDBInstances）用于隔离实例。
 * @method Models\LockAccountResponse LockAccount(Models\LockAccountRequest $req) 此接口用于锁定数据库账号，锁定后账号当前连接会断开，并且无法建立新连接。
 * @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 修改某账号对某数据库对象的权限、修改账号类型。
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) 本接口（ModifyAccountRemark）用于修改账号备注。
 * @method Models\ModifyBackupDownloadRestrictionResponse ModifyBackupDownloadRestriction(Models\ModifyBackupDownloadRestrictionRequest $req) 本接口（ModifyBackupDownloadRestriction）用于修改备份文件下载限制。
 * @method Models\ModifyBackupPlanResponse ModifyBackupPlan(Models\ModifyBackupPlanRequest $req) 本接口 (ModifyBackupPlan) 用于实例备份计划的修改，默认是在每天的凌晨开始全量备份，备份保留时长是7天。可以根据此接口指定时间进行实例的备份。
 * @method Models\ModifyBaseBackupExpireTimeResponse ModifyBaseBackupExpireTime(Models\ModifyBaseBackupExpireTimeRequest $req) 本接口（ModifyBaseBackupExpireTime）用于修改实例指定数据备份的过期时间。
 * @method Models\ModifyDBInstanceChargeTypeResponse ModifyDBInstanceChargeType(Models\ModifyDBInstanceChargeTypeRequest $req) 支持实例的计费类型转换（目前仅支持按量计费转包年包月）
 * @method Models\ModifyDBInstanceDeletionProtectionResponse ModifyDBInstanceDeletionProtection(Models\ModifyDBInstanceDeletionProtectionRequest $req) 本接口（DeletionProtection）用于开启或关闭实例销毁保护
 * @method Models\ModifyDBInstanceDeploymentResponse ModifyDBInstanceDeployment(Models\ModifyDBInstanceDeploymentRequest $req) 本接口（ModifyDBInstanceDeployment）用于修改节点可用区部署方式，仅支持主实例。
 * @method Models\ModifyDBInstanceHAConfigResponse ModifyDBInstanceHAConfig(Models\ModifyDBInstanceHAConfigRequest $req) 本接口（ModifyDBInstanceHAConfig）用于修改实例HA配置信息。其中HA配置信息包括：
<li>允许备节点切换为主节点的条件配置</li>
<li>半同步实例使用同步复制或异步复制的条件配置</li>
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口（ModifyDBInstanceName）用于修改postgresql实例名字。
 * @method Models\ModifyDBInstanceParametersResponse ModifyDBInstanceParameters(Models\ModifyDBInstanceParametersRequest $req) 本接口 (ModifyDBInstanceParameters) 用于修改实例参数。
 * @method Models\ModifyDBInstanceReadOnlyGroupResponse ModifyDBInstanceReadOnlyGroup(Models\ModifyDBInstanceReadOnlyGroupRequest $req) 本接口（ModifyDBInstanceReadOnlyGroup）用于修改实例所属的只读组
 * @method Models\ModifyDBInstanceSSLConfigResponse ModifyDBInstanceSSLConfig(Models\ModifyDBInstanceSSLConfigRequest $req) 本接口用于修改实例SSL配置，功能包含开启、关闭、修改SSL证书保护的连接地址。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改实例安全组。
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) 本接口（ModifyDBInstanceSpec）用于修改实例规格，包括内存、磁盘、Cpu。
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) 本接口（ModifyDBInstancesProject）用于修改实例所属项目。
 * @method Models\ModifyDatabaseOwnerResponse ModifyDatabaseOwner(Models\ModifyDatabaseOwnerRequest $req) 修改数据库所有者
 * @method Models\ModifyMaintainTimeWindowResponse ModifyMaintainTimeWindow(Models\ModifyMaintainTimeWindowRequest $req) 本接口 (ModifyMaintainTimeWindow) 用于实例维护时间窗口的修改。
 * @method Models\ModifyParameterTemplateResponse ModifyParameterTemplate(Models\ModifyParameterTemplateRequest $req) 本接口（ModifyParameterTemplate）主要用于修改参数模板名称，描述等配置，也可用于管理参数模板中的参数列表。
 * @method Models\ModifyReadOnlyDBInstanceWeightResponse ModifyReadOnlyDBInstanceWeight(Models\ModifyReadOnlyDBInstanceWeightRequest $req) 本接口（ModifyReadOnlyDBInstanceWeight）用于修改只读实例权重
 * @method Models\ModifyReadOnlyGroupConfigResponse ModifyReadOnlyGroupConfig(Models\ModifyReadOnlyGroupConfigRequest $req) 本接口(ModifyReadOnlyGroupConfig)用于更新只读组配置信息
 * @method Models\ModifySwitchTimePeriodResponse ModifySwitchTimePeriod(Models\ModifySwitchTimePeriodRequest $req) 当升级完成后，对处于等待切换状态下的实例，强制实例立即切换。
 * @method Models\OpenAccountCAMResponse OpenAccountCAM(Models\OpenAccountCAMRequest $req) 本接口用于开启数据库账户的CAM验证服务。
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) 本接口（OpenDBExtranetAccess）用于开通实例公网地址。
 * @method Models\RebalanceReadOnlyGroupResponse RebalanceReadOnlyGroup(Models\RebalanceReadOnlyGroupRequest $req) 本接口(RebalanceReadOnlyGroup)用于重新均衡 RO 组内实例的负载。注意，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库，谨慎操作。
 * @method Models\RefreshAccountPasswordResponse RefreshAccountPassword(Models\RefreshAccountPasswordRequest $req) 本接口用于对开启CAM验证的账户执行手动刷新密码。
 * @method Models\RemoveDBInstanceFromReadOnlyGroupResponse RemoveDBInstanceFromReadOnlyGroup(Models\RemoveDBInstanceFromReadOnlyGroupRequest $req) 本接口（RemoveDBInstanceFromReadOnlyGroup）用户将只读实例从只读组中移除
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) 本接口（RenewInstance）用于续费实例。
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于重置实例的账户密码。
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) 本接口（RestartDBInstance）用于重启实例。
 * @method Models\RestoreDBInstanceObjectsResponse RestoreDBInstanceObjects(Models\RestoreDBInstanceObjectsRequest $req) 根据备份集或恢复目标时间，在原实例上恢复数据库相关对象，例如数据库、表。
 * @method Models\SetAutoRenewFlagResponse SetAutoRenewFlag(Models\SetAutoRenewFlagRequest $req) 本接口（SetAutoRenewFlag）用于设置自动续费。
 * @method Models\SwitchDBInstancePrimaryResponse SwitchDBInstancePrimary(Models\SwitchDBInstancePrimaryRequest $req) 本接口（SwitchDBInstancePrimary）用于切换实例主备关系。
<li>通过主动发起切换，可以验证业务能否正确处理实例主备切换的场景</li>
<li>通过使用强制切换，可以在备节点延迟不满足切换条件时，强制发起主从切换</li>
<li>只有主实例可以执行该操作</li>
 * @method Models\UnlockAccountResponse UnlockAccount(Models\UnlockAccountRequest $req) 解除数据库账号的锁定，解锁后账号可以登录数据库。
 * @method Models\UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersion(Models\UpgradeDBInstanceKernelVersionRequest $req) 本接口（UpgradeDBInstanceKernelVersion）用于升级实例的内核版本号。
 * @method Models\UpgradeDBInstanceMajorVersionResponse UpgradeDBInstanceMajorVersion(Models\UpgradeDBInstanceMajorVersionRequest $req) 本接口（UpgradeDBInstanceMajorVersion）用于升级实例内核大版本，例如从PostgreSQL 12升级到PostgreSQL 15。
 */

class PostgresClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "postgres.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "postgres";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("postgres")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
