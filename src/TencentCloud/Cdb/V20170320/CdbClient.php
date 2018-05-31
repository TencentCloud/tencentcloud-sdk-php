<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Cdb\V20170320;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdb\V20170320\Models as Models;

/**
* @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口(AssociateSecurityGroups)用于安全组批量绑定实例。
* @method Models\CloseWanServiceResponse CloseWanService(Models\CloseWanServiceRequest $req) 本接口(CloseWanService)用于关闭云数据库实例的外网访问。关闭外网访问后，外网地址将不可访问。
* @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) 本接口(CreateAccounts)用于创建云数据库的账户，需要指定新的账户名和域名，以及所对应的密码，同时可以设置账号的备注信息。
* @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 本接口(CreateBackup)用于创建数据库备份。
* @method Models\CreateDBImportJobResponse CreateDBImportJob(Models\CreateDBImportJobRequest $req) 本接口(CreateDBImportJob)用于创建云数据库数据导入任务。
* @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口(CreateDBInstance)用于创建包年包月的云数据库实例（包括主实例、灾备实例和只读实例），可通过传入实例规格、MySQL 版本号、购买时长和数量等信息创建云数据库实例。

您还可以使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询该实例的详细信息。

1. 首先请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口查询可创建的实例规格信息，然后请使用[查询价格（包年包月）](https://cloud.tencent.com/document/api/236/1332)接口查询可创建实例的售卖价格；

2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；

3. 支持创建 MySQL5.5 、 MySQL5.6 、 MySQL5.7 版本；

4. 支持创建主实例、只读实例、灾备实例；
* @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) 本接口(CreateDBInstanceHour)用于创建按量计费的实例，可通过传入实例规格、MySQL 版本号和数量等信息创建云数据库实例，支持主实例、灾备实例和只读实例的创建。

您还可以使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询该实例的详细信息。

1. 首先请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口查询可创建的实例规格信息，然后请使用[查询价格（按量计费）](https://cloud.tencent.com/document/api/253/5176)接口查询可创建实例的售卖价格；
2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；
3. 支持创建 MySQL5.5、MySQL5.6和MySQL5.7 版本；
4. 支持创建主实例、灾备实例和只读实例；
* @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) 本接口(DeleteAccounts)用于删除云数据库的账户。
* @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) 本接口(DeleteBackup)用于删除数据库备份。
* @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口(DescribeAccountPrivileges)用于查询云数据库账户支持的权限信息。
* @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口(DescribeAccounts)用于查询云数据库的所有账户信息。
* @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) 本接口(DescribeBackupConfig)用于查询数据库备份配置信息。
* @method Models\DescribeBackupDatabasesResponse DescribeBackupDatabases(Models\DescribeBackupDatabasesRequest $req) 本接口(DescribeBackupDatabases)用于查询备份数据库列表。
* @method Models\DescribeBackupDownloadDbTableCodeResponse DescribeBackupDownloadDbTableCode(Models\DescribeBackupDownloadDbTableCodeRequest $req) 本接口(DescribeBackupDownloadDbTableCode)用于查询备份数据分库分表下载位点。
* @method Models\DescribeBackupTablesResponse DescribeBackupTables(Models\DescribeBackupTablesRequest $req) 本接口(DescribeBackupTables)用于查询指定的数据库的备份数据表名。
* @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) 本接口(DescribeBackups)用于查询云数据库实例的备份数据。
* @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) 本接口(DescribeBinlogs)用于查询云数据库实例的二进制数据。
* @method Models\DescribeDBImportRecordsResponse DescribeDBImportRecords(Models\DescribeDBImportRecordsRequest $req) 本接口(DescribeDBImportRecords)用于查询云数据库导入任务操作日志。
* @method Models\DescribeDBInstanceCharsetResponse DescribeDBInstanceCharset(Models\DescribeDBInstanceCharsetRequest $req) 本接口(DescribeDBInstanceCharset)用于查询云数据库实例的字符集，获取字符集的名称。
* @method Models\DescribeDBInstanceConfigResponse DescribeDBInstanceConfig(Models\DescribeDBInstanceConfigRequest $req) 本接口(DescribeDBInstanceConfig)用于云数据库实例的配置信息，包括同步模式，部署模式等。
* @method Models\DescribeDBInstanceGTIDResponse DescribeDBInstanceGTID(Models\DescribeDBInstanceGTIDRequest $req) 本接口(DescribeDBInstanceGTID)用于查询云数据库实例是否开通了GTID，不支持版本为5.5以及以下的实例。
* @method Models\DescribeDBInstanceRebootTimeResponse DescribeDBInstanceRebootTime(Models\DescribeDBInstanceRebootTimeRequest $req) 本接口(DescribeDBInstanceRebootTime)用于查询云数据库实例重启预计所需的时间。
* @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口(DescribeDBInstances)用于查询云数据库实例列表，支持通过项目ID、实例ID、访问地址、实例状态等来筛选实例。

1. 不指定任何过滤条件, 则默认返回20条实例记录，单次请求最多支持返回100条实例记录；
2. 支持查询主实例、灾备实例和只读实例信息列表。
* @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
* @method Models\DescribeDBSwitchRecordsResponse DescribeDBSwitchRecords(Models\DescribeDBSwitchRecordsRequest $req) 本接口(DescribeDBSwitchRecords)用于查询云数据库实例切换记录。
* @method Models\DescribeDBZoneConfigResponse DescribeDBZoneConfig(Models\DescribeDBZoneConfigRequest $req) 本接口(DescribeDBZoneConfig)用于查询可创建的云数据库各地域可售卖的规格配置。
* @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口(DescribeDatabases)用于查询云数据库实例的数据库信息。
* @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
* @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 本接口(DescribeSlowLogs)用于获取云数据库实例的慢查询日志。
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口(DescribeTasks)用于查询云数据库实例任务列表。
* @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
* @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) 本接口(InitDBInstances)用于初始化云数据库实例，包括初始化密码、默认字符集、实例端口号等
* @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口(IsolateDBInstance)用于销毁云数据库实例，销毁之后不能通过IP和端口访问数据库，按量计费实例销毁后直接下线。

本接口不支持包年包月实例；
* @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口(ModifyAccountDescription)用于修改云数据库账户的备注信息。
* @method Models\ModifyAccountPasswordResponse ModifyAccountPassword(Models\ModifyAccountPasswordRequest $req) 本接口(ModifyAccountPassword)用于修改云数据库账户的密码。
* @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 本接口(ModifyAccountPrivileges)用于修改云数据库的账户的权限信息。
* @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) 本接口(ModifyBackupConfig)用于修改数据库备份配置信息。
* @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口(ModifyDBInstanceName)用于修改云数据库实例的名称。
* @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) 本接口(ModifyDBInstanceProject)用于修改云数据库实例的所属项目。
* @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
* @method Models\ModifyDBInstanceVipVportResponse ModifyDBInstanceVipVport(Models\ModifyDBInstanceVipVportRequest $req) 本接口(ModifyDBInstanceVipVport)用于修改云数据库实例的IP和端口号，也可进行基础网络转VPC网络和VPC网络下的子网变更。
* @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) 本接口(ModifyInstanceParam)用于修改云数据库实例的参数。
* @method Models\OpenDBInstanceGTIDResponse OpenDBInstanceGTID(Models\OpenDBInstanceGTIDRequest $req) 本接口(OpenDBInstanceGTID)用于开启云数据库实例的GTID，只支持版本为5.6以及以上的实例。
* @method Models\OpenWanServiceResponse OpenWanService(Models\OpenWanServiceRequest $req) 本接口(OpenWanService)用于开通实例外网访问
* @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) 本接口(RestartDBInstances)用于重启云数据库实例。

注意：
1、本接口只支持主实例进行重启操作；
2、实例状态必须为正常，并且没有其他异步任务在执行中。
* @method Models\StopDBImportJobResponse StopDBImportJob(Models\StopDBImportJobRequest $req) 本接口(StopDBImportJob)用于终止数据导入任务。
* @method Models\SwitchForUpgradeResponse SwitchForUpgrade(Models\SwitchForUpgradeRequest $req) 本接口(SwitchForUpgrade)用于切换访问新实例，针对主升级中的实例处于待切换状态时，用户可主动发起该流程
* @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口(UpgradeDBInstance)用于升级云数据库实例，实例类型支持主实例、灾备实例和只读实例
* @method Models\UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(Models\UpgradeDBInstanceEngineVersionRequest $req) 本接口(UpgradeDBInstanceEngineVersion)用于升级云数据库实例版本，实例类型支持主实例、灾备实例和只读实例。
* @method Models\VerifyRootAccountResponse VerifyRootAccount(Models\VerifyRootAccountRequest $req) 本接口(VerifyRootAccount)用于校验云数据库实例的ROOT账号是否有足够的权限进行授权操作。
 */

class CdbClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cdb.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2017-03-20";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
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
