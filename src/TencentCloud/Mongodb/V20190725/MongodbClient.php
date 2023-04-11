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
 * @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口(CreateDBInstance)用于创建包年包月的MongoDB云数据库实例。接口支持的售卖规格，可从查询云数据库的售卖规格（DescribeSpecInfo）获取。
 * @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) 本接口（CreateDBInstanceHour）用于创建按量计费的MongoDB云数据库实例。
 * @method Models\DeleteAccountUserResponse DeleteAccountUser(Models\DeleteAccountUserRequest $req) 本接口（DeleteAccountUser）用于删除实例的自定义账号。
 * @method Models\DescribeAccountUsersResponse DescribeAccountUsers(Models\DescribeAccountUsersRequest $req) 本接口（DescribeAccountUsers）用于获取当前实例的全部账号。
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 查询异步任务状态接口
 * @method Models\DescribeBackupDownloadTaskResponse DescribeBackupDownloadTask(Models\DescribeBackupDownloadTaskRequest $req) 查询备份下载任务信息
 * @method Models\DescribeClientConnectionsResponse DescribeClientConnections(Models\DescribeClientConnectionsRequest $req) 本接口（DescribeClientConnections）用于查询实例客户端连接信息，包括连接 IP 和连接数量。
 * @method Models\DescribeCurrentOpResponse DescribeCurrentOp(Models\DescribeCurrentOpRequest $req) 本接口(DescribeCurrentOp)用于查询MongoDB云数据库实例的当前正在执行的操作。
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) 本接口（DescribeDBBackups）用于查询实例备份列表，目前只支持查询7天内的备份记录。
 * @method Models\DescribeDBInstanceDealResponse DescribeDBInstanceDeal(Models\DescribeDBInstanceDealRequest $req) 本接口（DescribeDBInstanceDeal）用于获取MongoDB购买、续费及变配订单详细。
 * @method Models\DescribeDBInstanceNodePropertyResponse DescribeDBInstanceNodeProperty(Models\DescribeDBInstanceNodePropertyRequest $req) 本接口用于查询节点的属性，包括节点所在可用区、节点名称、地址、角色、状态、主从延迟、优先级、投票权、标签等属性。
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口（DescribeDBInstances）用于查询云数据库实例列表，支持通过项目ID、实例ID、实例状态等过滤条件来筛选主实例、灾备实例和只读实例信息列表。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询当前实例可修改的参数列表。
 * @method Models\DescribeSecurityGroupResponse DescribeSecurityGroup(Models\DescribeSecurityGroupRequest $req) 本就口（DescribeSecurityGroup）用于查询实例绑定的安全组。
 * @method Models\DescribeSlowLogPatternsResponse DescribeSlowLogPatterns(Models\DescribeSlowLogPatternsRequest $req) 本接口（DescribeSlowLogPatterns）用于获取数据库实例慢日志的统计信息。
 * @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 本接口（DescribeSlowLogs）用于获取云数据库慢日志信息。接口只支持查询最近7天内慢日志。
 * @method Models\DescribeSpecInfoResponse DescribeSpecInfo(Models\DescribeSpecInfoRequest $req) 本接口(DescribeSpecInfo)用于查询实例的售卖规格。
 * @method Models\FlushInstanceRouterConfigResponse FlushInstanceRouterConfig(Models\FlushInstanceRouterConfigRequest $req) 在所有mongos上执行FlushRouterConfig命令
 * @method Models\InquirePriceCreateDBInstancesResponse InquirePriceCreateDBInstances(Models\InquirePriceCreateDBInstancesRequest $req) 本接口（InquirePriceCreateDBInstances）用于创建数据库实例询价。本接口参数中必须传入region参数，否则无法通过校验。本接口仅允许针对购买限制范围内的实例配置进行询价。
 * @method Models\InquirePriceModifyDBInstanceSpecResponse InquirePriceModifyDBInstanceSpec(Models\InquirePriceModifyDBInstanceSpecRequest $req) 本接口 (InquirePriceModifyDBInstanceSpec) 用于查询实例配置变更后的价格。
 * @method Models\InquirePriceRenewDBInstancesResponse InquirePriceRenewDBInstances(Models\InquirePriceRenewDBInstancesRequest $req) 本接口 (InquiryPriceRenewDBInstances) 用于续费包年包月实例询价。
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口(IsolateDBInstance)用于隔离MongoDB云数据库按量计费实例。隔离后实例保留在回收站中，不能再写入数据。隔离一定时间后，实例会彻底删除，回收站保存时间请参考按量计费的服务条款。在隔离中的按量计费实例无法恢复，请谨慎操作。
 * @method Models\KillOpsResponse KillOps(Models\KillOpsRequest $req) 本接口(KillOps)用于终止MongoDB云数据库实例上执行的特定操作。
 * @method Models\ModifyDBInstanceNetworkAddressResponse ModifyDBInstanceNetworkAddress(Models\ModifyDBInstanceNetworkAddressRequest $req) 本接口(ModifyDBInstanceNetworkAddress)用于修改云数据库实例的网络信息，可进行基础网络转VPC网络和VPC网络之间的变换。
 * @method Models\ModifyDBInstanceSecurityGroupResponse ModifyDBInstanceSecurityGroup(Models\ModifyDBInstanceSecurityGroupRequest $req) 本接口（ModifyDBInstanceSecurityGroup）用于修改实例绑定的安全组
 * @method Models\ModifyDBInstanceSpecResponse ModifyDBInstanceSpec(Models\ModifyDBInstanceSpecRequest $req) 本接口(ModifyDBInstanceSpec)用于调整MongoDB云数据库实例配置。接口支持的售卖规格，可从查询云数据库的售卖规格（DescribeSpecInfo）获取。
 * @method Models\OfflineIsolatedDBInstanceResponse OfflineIsolatedDBInstance(Models\OfflineIsolatedDBInstanceRequest $req) 本接口(OfflineIsolatedDBInstance)用于立即下线隔离状态的云数据库实例。进行操作的实例状态必须为隔离状态。
 * @method Models\RenameInstanceResponse RenameInstance(Models\RenameInstanceRequest $req) 本接口(RenameInstance)用于修改云数据库实例的名称。
 * @method Models\RenewDBInstancesResponse RenewDBInstances(Models\RenewDBInstancesRequest $req) 本接口(RenewDBInstance)用于续费云数据库实例，仅支持付费模式为包年包月的实例。按量计费实例不需要续费。
 * @method Models\ResetDBInstancePasswordResponse ResetDBInstancePassword(Models\ResetDBInstancePasswordRequest $req) 修改实例用户的密码
 * @method Models\SetAccountUserPrivilegeResponse SetAccountUserPrivilege(Models\SetAccountUserPrivilegeRequest $req) 本接口（SetAccountUserPrivilege）用于设置实例的账号权限。
 * @method Models\TerminateDBInstancesResponse TerminateDBInstances(Models\TerminateDBInstancesRequest $req) 本接口（TerminateDBInstances）可将包年包月实例退还隔离。
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
