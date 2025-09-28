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

namespace TencentCloud\Mongodb\V20190725;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mongodb\V20190725\Models as Models;

/**
 * @method Models\AssignProjectResponse AssignProject(Models\AssignProjectRequest $req) 本接口(AssignProject)用于指定云数据库实例的所属项目。
 * @method Models\CreateAccountUserResponse CreateAccountUser(Models\CreateAccountUserRequest $req) 本接口（CreateAccountUser）用于自定义实例访问账号。
 * @method Models\CreateBackupDBInstanceResponse CreateBackupDBInstance(Models\CreateBackupDBInstanceRequest $req) 本接口（CreateBackupDBInstance）用于备份实例。
 * @method Models\CreateBackupDownloadTaskResponse CreateBackupDownloadTask(Models\CreateBackupDownloadTaskRequest $req) 本接口用来创建某个备份文件的下载任务
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口(CreateDBInstance)用于创建包年包月的MongoDB云数据库实例。接口支持的售卖规格，可通过接口查询 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/35767) 获取。
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) 本接口（CreateDBInstanceHour）用于创建按量计费的MongoDB云数据库实例。
 * @method Models\CreateDBInstanceParamTplResponse CreateDBInstanceParamTpl(Models\CreateDBInstanceParamTplRequest $req) 本接口(CreateDBInstanceParamTpl)用于创建云数据库MongoDB实例的参数模板
**说明：CreateDBInstanceParamTpl API正在公测中，在此期间，该接口仅对公测用户开放**
 * @method Models\DeleteAccountUserResponse DeleteAccountUser(Models\DeleteAccountUserRequest $req) 本接口（DeleteAccountUser）用于删除实例的自定义账号。
 * @method Models\DescribeAccountUsersResponse DescribeAccountUsers(Models\DescribeAccountUsersRequest $req) 本接口（DescribeAccountUsers）用于获取当前实例的全部账号。
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 本接口（DescribeAsyncRequestInfo）用于查询异步任务状态接口。
 * @method Models\DescribeBackupDownloadTaskResponse DescribeBackupDownloadTask(Models\DescribeBackupDownloadTaskRequest $req) 本接口（DescribeBackupDownloadTask）用于查询备份下载任务信息。
 * @method Models\DescribeBackupRulesResponse DescribeBackupRules(Models\DescribeBackupRulesRequest $req) 本接口（DescribeBackupRules）用于获取实例自动备份配置信息。
 * @method Models\DescribeClientConnectionsResponse DescribeClientConnections(Models\DescribeClientConnectionsRequest $req) 本接口（DescribeClientConnections）用于查询实例客户端连接信息，包括连接 IP 和连接数量。
 * @method Models\DescribeCurrentOpResponse DescribeCurrentOp(Models\DescribeCurrentOpRequest $req) 本接口（DescribeCurrentOp）用于查询云数据库实例的当前正在执行的操作。
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) 本接口（DescribeDBBackups）用于查询实例备份列表，目前只支持查询7天内的备份记录。
 * @method Models\DescribeDBInstanceDealResponse DescribeDBInstanceDeal(Models\DescribeDBInstanceDealRequest $req) 本接口（DescribeDBInstanceDeal）用于获取MongoDB购买、续费及变配订单详细。
 * @method Models\DescribeDBInstanceNamespaceResponse DescribeDBInstanceNamespace(Models\DescribeDBInstanceNamespaceRequest $req) 本接口（DescribeDBInstanceNamespace）用于查询数据库的表信息。
 * @method Models\DescribeDBInstanceNodePropertyResponse DescribeDBInstanceNodeProperty(Models\DescribeDBInstanceNodePropertyRequest $req) 本接口用于查询节点的属性，包括节点所在可用区、节点名称、地址、角色、状态、主从延迟、优先级、投票权、标签等属性。
 * @method Models\DescribeDBInstanceParamTplResponse DescribeDBInstanceParamTpl(Models\DescribeDBInstanceParamTplRequest $req) 本接口(DescribeDBInstanceParamTpl )用于查询当前账号下所有MongoDB数据库参数模板
**说明：DescribeDBInstanceParamTpl  API正在公测中，在此期间，该接口仅对公测用户开放**
 * @method Models\DescribeDBInstanceParamTplDetailResponse DescribeDBInstanceParamTplDetail(Models\DescribeDBInstanceParamTplDetailRequest $req) 本接口(DescribeDBInstanceParamTplDetail )用于查询MongoDB云数据库实例的参数模板详情。
**说明：DescribeDBInstanceParamTplDetail  API正在公测中，在此期间，该接口仅对公测用户开放**
 * @method Models\DescribeDBInstanceURLResponse DescribeDBInstanceURL(Models\DescribeDBInstanceURLRequest $req) 本接口（DescribeDBInstanceURL）用于获取指定实例的 URI 形式的连接串访问地址示例。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口（DescribeDBInstances）用于查询云数据库实例列表，支持通过项目ID、实例ID、实例状态等过滤条件来筛选主实例、灾备实例和只读实例信息列表。
 * @method Models\DescribeDetailedSlowLogsResponse DescribeDetailedSlowLogs(Models\DescribeDetailedSlowLogsRequest $req) 本接口（DescribeDetailedSlowLogs）用于查询实例慢日志详情。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询当前实例可修改的参数列表。
 * @method Models\DescribeSecurityGroupResponse DescribeSecurityGroup(Models\DescribeSecurityGroupRequest $req) 本接口（DescribeSecurityGroup）用于查询实例绑定的安全组。
 * @method Models\DescribeSlowLogPatternsResponse DescribeSlowLogPatterns(Models\DescribeSlowLogPatternsRequest $req) 本接口（DescribeSlowLogPatterns）用于获取数据库实例慢日志的统计信息。
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 本接口（DescribeSlowLogs）用于获取云数据库慢日志信息。接口只支持查询最近7天内慢日志。
 * @method Models\DescribeSpecInfoResponse DescribeSpecInfo(Models\DescribeSpecInfoRequest $req) 本接口（DescribeSpecInfo）用于查询实例的售卖规格。
 * @method Models\DescribeTransparentDataEncryptionStatusResponse DescribeTransparentDataEncryptionStatus(Models\DescribeTransparentDataEncryptionStatusRequest $req) 获取实例透明加密的开启状态
 * @method Models\DropDBInstanceParamTplResponse DropDBInstanceParamTpl(Models\DropDBInstanceParamTplRequest $req) 本接口(DropDBInstanceParamTpl )用于删除云数据库MongoDB实例的参数模板
**说明：DropDBInstanceParamTpl  API正在公测中，在此期间，该接口仅对公测用户开放**
 * @method Models\EnableTransparentDataEncryptionResponse EnableTransparentDataEncryption(Models\EnableTransparentDataEncryptionRequest $req) 本接口（EnableTransparentDataEncryption）用于开启云数据库 MongoDB 的透明加密能力。
 * @method Models\FlashBackDBInstanceResponse FlashBackDBInstance(Models\FlashBackDBInstanceRequest $req) 该接口用于发起按 Key 闪回任务，依据数据的闪回 Key（默认为 id）对数据进行极速回档，快速恢复业务。
**说明：按 Key 闪回于2023年09月11日正式进行公测，在此期间，该接口仅对公测用户开放。**
 * @method Models\FlushInstanceRouterConfigResponse FlushInstanceRouterConfig(Models\FlushInstanceRouterConfigRequest $req) 在所有mongos上执行FlushRouterConfig命令
 * @method Models\InquirePriceCreateDBInstancesResponse InquirePriceCreateDBInstances(Models\InquirePriceCreateDBInstancesRequest $req) 本接口（InquirePriceCreateDBInstances）用于创建数据库实例询价。本接口参数中必须传入region参数，否则无法通过校验。本接口仅允许针对购买限制范围内的实例配置进行询价。
 * @method Models\InquirePriceModifyDBInstanceSpecResponse InquirePriceModifyDBInstanceSpec(Models\InquirePriceModifyDBInstanceSpecRequest $req) 本接口 (InquirePriceModifyDBInstanceSpec) 用于查询实例配置变更后的价格。
 * @method Models\InquirePriceRenewDBInstancesResponse InquirePriceRenewDBInstances(Models\InquirePriceRenewDBInstancesRequest $req) 本接口 (InquiryPriceRenewDBInstances) 用于续费包年包月实例询价。
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口（IsolateDBInstance）用于隔离 MongoDB 云数据库按量计费实例。隔离后实例保留在回收站中，不能再写入数据。隔离一定时间后，实例会彻底删除，回收站保存时间请参考按量计费的服务条款。已删除的按量计费实例无法恢复，请谨慎操作。
 * @method Models\KillOpsResponse KillOps(Models\KillOpsRequest $req) 本接口（KillOps）用于终止 MongoDB 云数据库实例上执行的特定操作。
 * @method Models\ModifyDBInstanceNetworkAddressResponse ModifyDBInstanceNetworkAddress(Models\ModifyDBInstanceNetworkAddressRequest $req) 本接口（ModifyDBInstanceNetworkAddress）用于修改云数据库实例的网络信息，支持基础网络切换为私有网络、私有网络切换私有网络。
 * @method Models\ModifyDBInstanceParamTplResponse ModifyDBInstanceParamTpl(Models\ModifyDBInstanceParamTplRequest $req) 本接口(ModifyDBInstanceParamTpl )用于修改MongoDB云数据库实例的参数模板。
**说明：ModifyDBInstanceParamTpl  API正在公测中，在此期间，该接口仅对公测用户开放**
 * @method Models\ModifyDBInstanceSecurityGroupResponse ModifyDBInstanceSecurityGroup(Models\ModifyDBInstanceSecurityGroupRequest $req) 本接口（ModifyDBInstanceSecurityGroup）用于修改实例绑定的安全组
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) 本接口（ModifyDBInstanceSpec）用于调整MongoDB云数据库实例配置。接口支持的售卖规格，可从查询云数据库的售卖规格（[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567)）获取。
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) 本接口（ModifyInstanceParams）用于修改mongoDB实例的参数配置。
 * @method Models\OfflineIsolatedDBInstanceResponse OfflineIsolatedDBInstance(Models\OfflineIsolatedDBInstanceRequest $req) 本接口(OfflineIsolatedDBInstance)用于立即下线隔离状态的云数据库实例。进行操作的实例状态必须为隔离状态。
 * @method Models\RenameInstanceResponse RenameInstance(Models\RenameInstanceRequest $req) 本接口(RenameInstance)用于修改云数据库实例的名称。
 * @method Models\RenewDBInstancesResponse RenewDBInstances(Models\RenewDBInstancesRequest $req) 本接口(RenewDBInstance)用于续费云数据库实例，仅支持付费模式为包年包月的实例。按量计费实例不需要续费。
 * @method Models\ResetDBInstancePasswordResponse ResetDBInstancePassword(Models\ResetDBInstancePasswordRequest $req) 本接口（ResetDBInstancePassword）用于重置实例访问密码。
 * @method Models\RestartNodesResponse RestartNodes(Models\RestartNodesRequest $req) 本接口（RestartNodes）用于批量重启数据库节点。
 * @method Models\SetAccountUserPrivilegeResponse SetAccountUserPrivilege(Models\SetAccountUserPrivilegeRequest $req) 本接口（SetAccountUserPrivilege）用于设置实例的账号权限。
 * @method Models\SetBackupRulesResponse SetBackupRules(Models\SetBackupRulesRequest $req) 本接口(SetBackupRules)用于设置 MongoDB 云数据库的自动备份规则。
 * @method Models\SetDBInstanceDeletionProtectionResponse SetDBInstanceDeletionProtection(Models\SetDBInstanceDeletionProtectionRequest $req) 本接口（SetDBInstanceDeletionProtection）用于设置实例销毁保护
 * @method Models\SetInstanceMaintenanceResponse SetInstanceMaintenance(Models\SetInstanceMaintenanceRequest $req) 本接口（SetInstanceMaintenance ） 用于设置实例维护时间窗。
 * @method Models\TerminateDBInstancesResponse TerminateDBInstances(Models\TerminateDBInstancesRequest $req) 本接口（TerminateDBInstances）用于退还包年包月计费实例。
 */

class MongodbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mongodb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mongodb";

    /**
     * @var string
     */
    protected $version = "2019-07-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("mongodb")."\\"."V20190725\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
