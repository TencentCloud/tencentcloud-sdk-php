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

namespace TencentCloud\Tdmysql\V20211122;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdmysql\V20211122\Models as Models;

/**
 * @method Models\CancelIsolateDBInstancesResponse CancelIsolateDBInstances(Models\CancelIsolateDBInstancesRequest $req) 本接口（CancelIsolateDBInstances）提供批量解除隔离实例功能
 * @method Models\CreateDBSBackupResponse CreateDBSBackup(Models\CreateDBSBackupRequest $req) 创建实例备份集
 * @method Models\DeleteDBSBackupSetsResponse DeleteDBSBackupSets(Models\DeleteDBSBackupSetsRequest $req) 删除实例备份集
 * @method Models\DescribeBillingEnableResponse DescribeBillingEnable(Models\DescribeBillingEnableRequest $req) 已无地方调用

本接口（DescribeBillingEnable）用于查询计费是否开启
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) 本接口（DescribeDBParameters）用于获取实例的当前参数设置。
 * @method Models\DescribeDBSAvailableRecoveryTimeResponse DescribeDBSAvailableRecoveryTime(Models\DescribeDBSAvailableRecoveryTimeRequest $req) 可恢复时间查询
 * @method Models\DescribeDBSCloneInstancesResponse DescribeDBSCloneInstances(Models\DescribeDBSCloneInstancesRequest $req) 查询实例克隆列表
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口（DescribeDBSecurityGroups）用于查询实例安全组信息
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) 本接口（DescribeDatabaseObjects）用于查询云数据库实例的数据库中的对象列表，包含表、存储过程、视图和函数。
 * @method Models\DescribeDatabaseTableResponse DescribeDatabaseTable(Models\DescribeDatabaseTableRequest $req) 冗余接口，无人调用

本接口（DescribeDatabaseTable）用于查询云数据库实例的表信息。
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) 本接口（DescribeFlow）用于查询异步任务流程状态
 * @method Models\DestroyInstancesResponse DestroyInstances(Models\DestroyInstancesRequest $req) 本接口（DestroyInstances）提供批量销毁实例功能
 * @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口（IsolateDBInstance）提供批量隔离实例功能
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) 本接口（ModifyAutoRenewFlag）用于修改自动续费标志
 * @method Models\ModifyBinlogStatusResponse ModifyBinlogStatus(Models\ModifyBinlogStatusRequest $req) 接口功能已被 ModifyInstanceCdc 完全覆盖

修改binlog状态
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口（ModifyDBInstanceSecurityGroups）用于修改云数据库安全组
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) 本接口（ModifyDBParameters）用于修改实例参数。
 * @method Models\ModifyDBSBackupPolicyResponse ModifyDBSBackupPolicy(Models\ModifyDBSBackupPolicyRequest $req) 修改实例备份策略
 * @method Models\ModifyDBSBackupSetCommentResponse ModifyDBSBackupSetComment(Models\ModifyDBSBackupSetCommentRequest $req) 修改备份集备注
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 本接口（ModifyInstanceName）提供修改实例名称功能
 */

class TdmysqlClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdmysql.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdmysql";

    /**
     * @var string
     */
    protected $version = "2021-11-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdmysql")."\\"."V20211122\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
