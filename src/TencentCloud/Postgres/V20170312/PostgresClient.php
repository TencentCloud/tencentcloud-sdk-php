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

namespace TencentCloud\Postgres\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Postgres\V20170312\Models as Models;

/**
 * @method Models\AddDBInstanceToReadOnlyGroupResponse AddDBInstanceToReadOnlyGroup(Models\AddDBInstanceToReadOnlyGroupRequest $req) 本接口（AddDBInstanceToReadOnlyGroup）用于添加只读实例到只读组
 * @method Models\CloneDBInstanceResponse CloneDBInstance(Models\CloneDBInstanceRequest $req) 用于克隆实例，支持指定备份集、指定时间点进行克隆。
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) 本接口（CloseDBExtranetAccess）用于关闭实例外网链接。
 * @method Models\CloseServerlessDBExtranetAccessResponse CloseServerlessDBExtranetAccess(Models\CloseServerlessDBExtranetAccessRequest $req) 关闭serverlessDB实例外网
 * @method Models\CreateDBInstanceNetworkAccessResponse CreateDBInstanceNetworkAccess(Models\CreateDBInstanceNetworkAccessRequest $req) 可对实例进行网络的添加操作。
 * @method Models\CreateDBInstancesResponse CreateDBInstances(Models\CreateDBInstancesRequest $req) 本接口 (CreateDBInstances) 用于创建一个或者多个PostgreSQL实例,仅发货实例不会进行初始化。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口 (CreateInstances) 用于创建一个或者多个PostgreSQL实例，通过此接口创建的实例无需进行初始化，可直接使用。
 * @method Models\CreateParameterTemplateResponse CreateParameterTemplate(Models\CreateParameterTemplateRequest $req) 本接口 (CreateParameterTemplate) 用于创建参数模板。
 * @method Models\CreateReadOnlyDBInstanceResponse CreateReadOnlyDBInstance(Models\CreateReadOnlyDBInstanceRequest $req) 本接口(CreateReadOnlyDBInstance)用于创建只读实例
 * @method Models\CreateReadOnlyGroupResponse CreateReadOnlyGroup(Models\CreateReadOnlyGroupRequest $req) 本接口（CreateReadOnlyGroup）用于创建只读组
 * @method Models\CreateReadOnlyGroupNetworkAccessResponse CreateReadOnlyGroupNetworkAccess(Models\CreateReadOnlyGroupNetworkAccessRequest $req) 可对RO组进行网络的添加操作。
 * @method Models\CreateServerlessDBInstanceResponse CreateServerlessDBInstance(Models\CreateServerlessDBInstanceRequest $req) 本接口 (CreateServerlessDBInstance) 用于创建一个ServerlessDB实例，创建成功返回实例ID。
 * @method Models\DeleteDBInstanceNetworkAccessResponse DeleteDBInstanceNetworkAccess(Models\DeleteDBInstanceNetworkAccessRequest $req) 可对实例进行网络的删除操作。
 * @method Models\DeleteParameterTemplateResponse DeleteParameterTemplate(Models\DeleteParameterTemplateRequest $req) 本接口（DeleteParameterTemplate）主要用于删除某个参数模板。
 * @method Models\DeleteReadOnlyGroupResponse DeleteReadOnlyGroup(Models\DeleteReadOnlyGroupRequest $req) 本接口(DeleteReadOnlyGroup)用于删除指定的只读组
 * @method Models\DeleteReadOnlyGroupNetworkAccessResponse DeleteReadOnlyGroupNetworkAccess(Models\DeleteReadOnlyGroupNetworkAccessRequest $req) 可对RO组进行网络的删除操作。
 * @method Models\DeleteServerlessDBInstanceResponse DeleteServerlessDBInstance(Models\DeleteServerlessDBInstanceRequest $req) 本接口 (DeleteServerlessDBInstance) 用于删除一个ServerlessDB实例。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口（DescribeAccounts）用于获取实例用户列表。
 * @method Models\DescribeAvailableRecoveryTimeResponse DescribeAvailableRecoveryTime(Models\DescribeAvailableRecoveryTimeRequest $req) 本接口（DescribeAvailableRecoveryTime）用于查询实例可恢复的时间范围。
 * @method Models\DescribeBackupPlansResponse DescribeBackupPlans(Models\DescribeBackupPlansRequest $req) 本接口 (DescribeBackupPlans) 用于实例所有的备份计划查询
 * @method Models\DescribeCloneDBInstanceSpecResponse DescribeCloneDBInstanceSpec(Models\DescribeCloneDBInstanceSpecRequest $req) 本接口（DescribeCloneDBInstanceSpec）用于查询克隆实例可选择的最小规格，包括SpecCode和磁盘。
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) 本接口（DescribeDBBackups）用于查询实例备份列表。
 * @method Models\DescribeDBErrlogsResponse DescribeDBErrlogs(Models\DescribeDBErrlogsRequest $req) 本接口（DescribeDBErrlogs）用于获取错误日志。
 * @method Models\DescribeDBInstanceAttributeResponse DescribeDBInstanceAttribute(Models\DescribeDBInstanceAttributeRequest $req) 本接口 (DescribeDBInstanceAttribute) 用于查询某个实例的详情信息。
 * @method Models\DescribeDBInstanceParametersResponse DescribeDBInstanceParameters(Models\DescribeDBInstanceParametersRequest $req) 获取实例可修改参数列表
 * @method Models\DescribeDBInstanceSecurityGroupsResponse DescribeDBInstanceSecurityGroups(Models\DescribeDBInstanceSecurityGroupsRequest $req) 本接口（DescribeDBInstanceSecurityGroups）用于查询实例安全组信息。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口 (DescribeDBInstances) 用于查询一个或多个实例的详细信息。
 * @method Models\DescribeDBSlowlogsResponse DescribeDBSlowlogs(Models\DescribeDBSlowlogsRequest $req) 本接口（DescribeDBSlowlogs）用于获取慢查询日志。已于2021.09.01日正式废弃，后续此接口将不再返回任何数据，新接口为DescribeSlowQueryList，详细请查看：https://cloud.tencent.com/document/product/409/60540
 * @method Models\DescribeDBXlogsResponse DescribeDBXlogs(Models\DescribeDBXlogsRequest $req) 本接口（DescribeDBXlogs）用于获取实例Xlog列表。
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 接口（DescribeDatabases）用来拉取数据库列表
 * @method Models\DescribeDefaultParametersResponse DescribeDefaultParameters(Models\DescribeDefaultParametersRequest $req) 本接口（DescribeDefaultParameters）主要用于查询某个数据库版本和引擎支持的所有参数。
 * @method Models\DescribeEncryptionKeysResponse DescribeEncryptionKeys(Models\DescribeEncryptionKeysRequest $req) 获取实例的密钥信息列表。
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于获取订单信息。
 * @method Models\DescribeParameterTemplateAttributesResponse DescribeParameterTemplateAttributes(Models\DescribeParameterTemplateAttributesRequest $req) 本接口（DescribeParameterTemplateAttributes）用于查询某个参数模板的具体内容，包括基本信息和参数信息。
 * @method Models\DescribeParameterTemplatesResponse DescribeParameterTemplates(Models\DescribeParameterTemplatesRequest $req) 本接口 (DescribeParameterTemplates) 用于查询参数模板列表。
 * @method Models\DescribeParamsEventResponse DescribeParamsEvent(Models\DescribeParamsEventRequest $req) 获取参数修改事件详情
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) 本接口 (DescribeProductConfig) 用于查询售卖规格配置。
 * @method Models\DescribeReadOnlyGroupsResponse DescribeReadOnlyGroups(Models\DescribeReadOnlyGroupsRequest $req) 本接口(DescribeReadOnlyGroups)用于查询用户输入指定实例的只读组
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口 (DescribeRegions) 用于查询售卖地域信息。
 * @method Models\DescribeServerlessDBInstancesResponse DescribeServerlessDBInstances(Models\DescribeServerlessDBInstancesRequest $req) 用于查询一个或多个serverlessDB实例的详细信息
 * @method Models\DescribeSlowQueryAnalysisResponse DescribeSlowQueryAnalysis(Models\DescribeSlowQueryAnalysisRequest $req) 此接口（DescribeSlowQueryAnalysis）用于统计指定时间范围内的所有慢查询，根据SQL语句抽象参数后，进行聚合分析，并返回同类SQL列表。
 * @method Models\DescribeSlowQueryListResponse DescribeSlowQueryList(Models\DescribeSlowQueryListRequest $req) 此接口（DescribeSlowQueryList）用于查询指定时间范围内的所有慢查询。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 本接口 (DescribeZones) 用于查询支持的可用区信息。
 * @method Models\DestroyDBInstanceResponse DestroyDBInstance(Models\DestroyDBInstanceRequest $req) 本接口 (DestroyDBInstance) 用于彻底销毁指定DBInstanceId对应的实例，销毁后实例数据将彻底删除，无法找回，只能销毁隔离中的实例。
 * @method Models\DisIsolateDBInstancesResponse DisIsolateDBInstances(Models\DisIsolateDBInstancesRequest $req) 本接口（DisIsolateDBInstances）用于解隔离实例
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) 本接口 (InitDBInstances) 用于初始化云数据库PostgreSQL实例。
 * @method Models\InquiryPriceCreateDBInstancesResponse InquiryPriceCreateDBInstances(Models\InquiryPriceCreateDBInstancesRequest $req) 本接口 (InquiryPriceCreateDBInstances) 用于查询购买一个或多个实例的价格信息。
 * @method Models\InquiryPriceRenewDBInstanceResponse InquiryPriceRenewDBInstance(Models\InquiryPriceRenewDBInstanceRequest $req) 本接口（InquiryPriceRenewDBInstance）用于查询续费实例的价格。
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) 本接口（InquiryPriceUpgradeDBInstance）用于查询升级实例的价格。只支持按量计费实例。
 * @method Models\IsolateDBInstancesResponse IsolateDBInstances(Models\IsolateDBInstancesRequest $req) 本接口（IsolateDBInstances）用于隔离实例
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) 本接口（ModifyAccountRemark）用于修改帐号备注。
 * @method Models\ModifyBackupPlanResponse ModifyBackupPlan(Models\ModifyBackupPlanRequest $req) 本接口 (ModifyBackupPlan) 用于实例备份计划的修改，默认是在每天的凌晨开始全量备份，备份保留时长是7天。可以根据此接口指定时间进行实例的备份。
 * @method Models\ModifyDBInstanceDeploymentResponse ModifyDBInstanceDeployment(Models\ModifyDBInstanceDeploymentRequest $req) 本接口（ModifyDBInstanceDeployment）用于修改节点可用区部署方式，仅支持主实例。
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口（ModifyDBInstanceName）用于修改postgresql实例名字。
 * @method Models\ModifyDBInstanceParametersResponse ModifyDBInstanceParameters(Models\ModifyDBInstanceParametersRequest $req) 批量修改参数
 * @method Models\ModifyDBInstanceReadOnlyGroupResponse ModifyDBInstanceReadOnlyGroup(Models\ModifyDBInstanceReadOnlyGroupRequest $req) 本接口（ModifyDBInstanceReadOnlyGroup）用于修改实例所属的只读组
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改实例安全组。
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) 本接口（ModifyDBInstanceSpec）用于调整实例规格，包括内存、磁盘。
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) 本接口（ModifyDBInstancesProject）用于将实例转至其他项目。
 * @method Models\ModifyParameterTemplateResponse ModifyParameterTemplate(Models\ModifyParameterTemplateRequest $req) 本接口（ModifyParameterTemplate）主要用于修改参数模板名称，描述，修改，添加和删除参数模板参数。
 * @method Models\ModifyReadOnlyGroupConfigResponse ModifyReadOnlyGroupConfig(Models\ModifyReadOnlyGroupConfigRequest $req) 本接口(ModifyReadOnlyGroupConfig)用于更新只读组配置信息
 * @method Models\ModifySwitchTimePeriodResponse ModifySwitchTimePeriod(Models\ModifySwitchTimePeriodRequest $req) 当升级完成后，对处于等待切换状态下的实例，强制实例立即切换。
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) 本接口（OpenDBExtranetAccess）用于开通外网。
 * @method Models\OpenServerlessDBExtranetAccessResponse OpenServerlessDBExtranetAccess(Models\OpenServerlessDBExtranetAccessRequest $req) 开通serverlessDB实例外网
 * @method Models\RebalanceReadOnlyGroupResponse RebalanceReadOnlyGroup(Models\RebalanceReadOnlyGroupRequest $req) 本接口(RebalanceReadOnlyGroup)用于重新均衡 RO 组内实例的负载。注意，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库，谨慎操作。
 * @method Models\RemoveDBInstanceFromReadOnlyGroupResponse RemoveDBInstanceFromReadOnlyGroup(Models\RemoveDBInstanceFromReadOnlyGroupRequest $req) 本接口（RemoveDBInstanceFromReadOnlyGroup）用户将只读实例从只读组中移除
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) 本接口（RenewInstance）用于续费实例。
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) 本接口（ResetAccountPassword）用于重置实例的账户密码。
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) 本接口（RestartDBInstance）用于重启实例。
 * @method Models\SetAutoRenewFlagResponse SetAutoRenewFlag(Models\SetAutoRenewFlagRequest $req) 本接口（SetAutoRenewFlag）用于设置自动续费。
 * @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口（UpgradeDBInstance）用于升级实例配置。
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
