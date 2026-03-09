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

namespace TencentCloud\Cetcd\V20220325;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cetcd\V20220325\Models as Models;

/**
 * @method Models\CreateEtcdInstanceResponse CreateEtcdInstance(Models\CreateEtcdInstanceRequest $req) 创建etcd实例
 * @method Models\CreateEtcdSnapshotResponse CreateEtcdSnapshot(Models\CreateEtcdSnapshotRequest $req) 创建etcd快照
 * @method Models\CreateEtcdSnapshotPolicyResponse CreateEtcdSnapshotPolicy(Models\CreateEtcdSnapshotPolicyRequest $req) 创建etcd快照策略
 * @method Models\DescribeEtcdAvailableVersionsResponse DescribeEtcdAvailableVersions(Models\DescribeEtcdAvailableVersionsRequest $req) 查看etcd可用版本
 * @method Models\DescribeEtcdCreatingProgressResponse DescribeEtcdCreatingProgress(Models\DescribeEtcdCreatingProgressRequest $req) 查看etcd集群创建进度
 * @method Models\DescribeEtcdCredentialsResponse DescribeEtcdCredentials(Models\DescribeEtcdCredentialsRequest $req) 查询etcd访问凭证
 * @method Models\DescribeEtcdInstancesResponse DescribeEtcdInstances(Models\DescribeEtcdInstancesRequest $req) 查询etcd实例列表
 * @method Models\DescribeEtcdQuotaResponse DescribeEtcdQuota(Models\DescribeEtcdQuotaRequest $req) 查看etcd集群配额
 * @method Models\DescribeEtcdRegionsResponse DescribeEtcdRegions(Models\DescribeEtcdRegionsRequest $req) 查看etcd支持地域
 * @method Models\DescribeEtcdSnapshotPoliciesResponse DescribeEtcdSnapshotPolicies(Models\DescribeEtcdSnapshotPoliciesRequest $req) 查看etcd快照策略
 * @method Models\DescribeEtcdSnapshotsResponse DescribeEtcdSnapshots(Models\DescribeEtcdSnapshotsRequest $req) 查看etcd快照列表
 * @method Models\DescribeEtcdTasksResponse DescribeEtcdTasks(Models\DescribeEtcdTasksRequest $req) 查看etcd相关tasks
 * @method Models\DescribeRPCMethodListResponse DescribeRPCMethodList(Models\DescribeRPCMethodListRequest $req) 获取etcd集群的gRPC方法列表
 * @method Models\DisableEtcdInstanceDeletionProtectionResponse DisableEtcdInstanceDeletionProtection(Models\DisableEtcdInstanceDeletionProtectionRequest $req) 关闭etcd实例删除保护
 * @method Models\EnableEtcdInstanceDeletionProtectionResponse EnableEtcdInstanceDeletionProtection(Models\EnableEtcdInstanceDeletionProtectionRequest $req) 启用etcd实例删除保护
 * @method Models\ModifyEtcdAttributeResponse ModifyEtcdAttribute(Models\ModifyEtcdAttributeRequest $req) 修改etcd实例属性
 * @method Models\ModifyEtcdConfigurationResponse ModifyEtcdConfiguration(Models\ModifyEtcdConfigurationRequest $req) 修改etcd实例配置
 * @method Models\ModifyEtcdSnapshotPolicyResponse ModifyEtcdSnapshotPolicy(Models\ModifyEtcdSnapshotPolicyRequest $req) 修改etcd快照策略
 * @method Models\ResizeEtcdInstanceResponse ResizeEtcdInstance(Models\ResizeEtcdInstanceRequest $req) 扩容etcd实例
 * @method Models\UpgradeEtcdInstanceResponse UpgradeEtcdInstance(Models\UpgradeEtcdInstanceRequest $req) 升级etcd实例
 */

class CetcdClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cetcd.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cetcd";

    /**
     * @var string
     */
    protected $version = "2022-03-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("cetcd")."\\"."V20220325\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
