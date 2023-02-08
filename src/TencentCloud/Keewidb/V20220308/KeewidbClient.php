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

namespace TencentCloud\Keewidb\V20220308;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Keewidb\V20220308\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于安全组批量绑定多个指定实例。
 * @method Models\ChangeInstanceMasterResponse ChangeInstanceMaster(Models\ChangeInstanceMasterRequest $req) 本接口（ChangeInstanceMaster）用于将副本节点提升为主节点。
 * @method Models\CleanUpInstanceResponse CleanUpInstance(Models\CleanUpInstanceRequest $req) 本接口（CleanUpInstance）用于立即下线回收站已隔离的实例。
 * @method Models\ClearInstanceResponse ClearInstance(Models\ClearInstanceRequest $req) 本接口（ClearInstance）用于清空实例数据。
 * @method Models\CreateBackupManuallyResponse CreateBackupManually(Models\CreateBackupManuallyRequest $req) 手动发起备份
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 创建数据库实例
 * @method Models\DescribeAutoBackupConfigResponse DescribeAutoBackupConfig(Models\DescribeAutoBackupConfigRequest $req) 本接口（DescribeAutoBackupConfig）用于获取自动备份配置。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
 * @method Models\DescribeInstanceBackupsResponse DescribeInstanceBackups(Models\DescribeInstanceBackupsRequest $req) 本接口（DescribeInstanceBackups）用于查询实例全量备份列表。
 * @method Models\DescribeInstanceBinlogsResponse DescribeInstanceBinlogs(Models\DescribeInstanceBinlogsRequest $req) 本接口（DescribeInstanceBinlogs）用于查询增量备份列表。
 * @method Models\DescribeInstanceNodeInfoResponse DescribeInstanceNodeInfo(Models\DescribeInstanceNodeInfoRequest $req) 本接口（DescribeInstanceNodeInfo）查询实例节点信息。
 * @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) 本接口（DescribeInstanceParamRecords）查询参数配置修改历史列表。
 * @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 本接口（DescribeInstanceParams）用于查询实例的参数列表。
 * @method Models\DescribeInstanceReplicasResponse DescribeInstanceReplicas(Models\DescribeInstanceReplicasRequest $req) 本接口（DescribeInstanceReplicas）用于获取实例副本节点信息。
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）可以根据地域、网络、实例id、标签、计费方式等条件，搜索查询实例列表。
 * @method Models\DescribeMaintenanceWindowResponse DescribeMaintenanceWindow(Models\DescribeMaintenanceWindowRequest $req) 本接口（DescribeMaintenanceWindow）用于查询实例维护时间窗。
 * @method Models\DescribeProductInfoResponse DescribeProductInfo(Models\DescribeProductInfoRequest $req) 本接口查询指定可用区和实例类型下keewidb 的售卖规格， 如果用户不在购买白名单中，将不能查询该可用区或该类型的售卖规格详情。申请购买某地域白名单可以提交工单
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
 * @method Models\DescribeProxySlowLogResponse DescribeProxySlowLog(Models\DescribeProxySlowLogRequest $req) 本接口（DescribeProxySlowLog）用于查询代理（Proxy）慢日志。
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) 本接口（DescribeTaskInfo）用于查询异步任务结果。
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) 本接口（DescribeTaskList）用于查询任务列表信息。
 * @method Models\DescribeTendisSlowLogResponse DescribeTendisSlowLog(Models\DescribeTendisSlowLogRequest $req) 本接口（DescribeTendisSlowLog）用于查询实例慢日志。
 * @method Models\DestroyPostpaidInstanceResponse DestroyPostpaidInstance(Models\DestroyPostpaidInstanceRequest $req) 本接口（DestroyPostpaidInstance）用于退还按量计费实例。
 * @method Models\DestroyPrepaidInstanceResponse DestroyPrepaidInstance(Models\DestroyPrepaidInstanceRequest $req) 本接口（DestroyPrepaidInstance）用于退还包年包月计费实例。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\ModifyAutoBackupConfigResponse ModifyAutoBackupConfig(Models\ModifyAutoBackupConfigRequest $req) 本接口（ModifyAutoBackupConfig）用于修改自动备份配置。
 * @method Models\ModifyConnectionConfigResponse ModifyConnectionConfig(Models\ModifyConnectionConfigRequest $req) 本接口（ModifyConnectionConfig）用于修改实例的连接配置，包括带宽和最大连接数。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 本接口（ModifyInstance）用于修改实例相关信息。
 * @method Models\ModifyInstanceParamsResponse ModifyInstanceParams(Models\ModifyInstanceParamsRequest $req) 本接口（ModifyInstanceParams）用于修改实例参数配置。
 * @method Models\ModifyMaintenanceWindowResponse ModifyMaintenanceWindow(Models\ModifyMaintenanceWindowRequest $req) 本接口（ModifyMaintenanceWindow）修改实例维护时间窗时间。
 * @method Models\ModifyNetworkConfigResponse ModifyNetworkConfig(Models\ModifyNetworkConfigRequest $req) 本接口（ModifyNetworkConfig）用于修改实例网络配置。
 * @method Models\RenewInstanceResponse RenewInstance(Models\RenewInstanceRequest $req) 本接口（RenewInstance）用于为包年包月计费实例续费。
 * @method Models\ResetPasswordResponse ResetPassword(Models\ResetPasswordRequest $req) 本接口（ResetPassword）用于重置数据库访问密码。
 * @method Models\StartUpInstanceResponse StartUpInstance(Models\StartUpInstanceRequest $req) 本接口（StartUpInstance）用于按量计费实例解隔离
 * @method Models\UpgradeInstanceResponse UpgradeInstance(Models\UpgradeInstanceRequest $req) 本接口（UpgradeInstance）用于对实例进行配置变更。
 */

class KeewidbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "keewidb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "keewidb";

    /**
     * @var string
     */
    protected $version = "2022-03-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("keewidb")."\\"."V20220308\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
