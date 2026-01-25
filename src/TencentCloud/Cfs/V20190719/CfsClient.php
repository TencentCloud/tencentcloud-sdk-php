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

namespace TencentCloud\Cfs\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfs\V20190719\Models as Models;

/**
 * @method Models\ApplyPathLifecyclePolicyResponse ApplyPathLifecyclePolicy(Models\ApplyPathLifecyclePolicyRequest $req) 配置生命周期策略关联到的目录列表
 * @method Models\BindAutoSnapshotPolicyResponse BindAutoSnapshotPolicy(Models\BindAutoSnapshotPolicyRequest $req) 文件系统绑定快照策略，可以同时绑定多个fs，一个fs 只能跟一个策略绑定
 * @method Models\CreateAccessCertResponse CreateAccessCert(Models\CreateAccessCertRequest $req) 创建用于访问文件系统的凭证
 * @method Models\CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicy(Models\CreateAutoSnapshotPolicyRequest $req) 创建定期快照策略
 * @method Models\CreateCfsFileSystemResponse CreateCfsFileSystem(Models\CreateCfsFileSystemRequest $req) 用于添加新文件系统
 * @method Models\CreateCfsPGroupResponse CreateCfsPGroup(Models\CreateCfsPGroupRequest $req) 本接口（CreateCfsPGroup）用于创建权限组
 * @method Models\CreateCfsRuleResponse CreateCfsRule(Models\CreateCfsRuleRequest $req) 本接口（CreateCfsRule）用于创建权限组规则。
 * @method Models\CreateCfsSnapshotResponse CreateCfsSnapshot(Models\CreateCfsSnapshotRequest $req) 创建文件系统快照
 * @method Models\CreateDataFlowResponse CreateDataFlow(Models\CreateDataFlowRequest $req) 创建数据流动接口
 * @method Models\CreateLifecycleDataTaskResponse CreateLifecycleDataTask(Models\CreateLifecycleDataTaskRequest $req) 支持主动沉降/预热接口
 * @method Models\CreateLifecyclePolicyResponse CreateLifecyclePolicy(Models\CreateLifecyclePolicyRequest $req) 创建文件存储生命周期策略
 * @method Models\CreateLifecyclePolicyDownloadTaskResponse CreateLifecyclePolicyDownloadTask(Models\CreateLifecyclePolicyDownloadTaskRequest $req) 下载生命周期任务中文件列表
 * @method Models\CreateMigrationTaskResponse CreateMigrationTask(Models\CreateMigrationTaskRequest $req) 用于创建迁移任务。
 * @method Models\DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicy(Models\DeleteAutoSnapshotPolicyRequest $req) 删除快照定期策略
 * @method Models\DeleteCfsFileSystemResponse DeleteCfsFileSystem(Models\DeleteCfsFileSystemRequest $req) 用于删除文件系统
 * @method Models\DeleteCfsPGroupResponse DeleteCfsPGroup(Models\DeleteCfsPGroupRequest $req) 本接口（DeleteCfsPGroup）用于删除权限组，只有未绑定文件系统的权限组才能够被此接口删除。
 * @method Models\DeleteCfsRuleResponse DeleteCfsRule(Models\DeleteCfsRuleRequest $req) 本接口（DeleteCfsRule）用于删除权限组规则。
 * @method Models\DeleteCfsSnapshotResponse DeleteCfsSnapshot(Models\DeleteCfsSnapshotRequest $req) 删除文件系统快照
 * @method Models\DeleteDataFlowResponse DeleteDataFlow(Models\DeleteDataFlowRequest $req) 删除数据流动
 * @method Models\DeleteLifecyclePolicyResponse DeleteLifecyclePolicy(Models\DeleteLifecyclePolicyRequest $req) 删除生命周期管理策略
 * @method Models\DeleteMigrationTaskResponse DeleteMigrationTask(Models\DeleteMigrationTaskRequest $req) 用于删除迁移任务。不支持删除等待中、创建中、运行中、取消中、终止中状态的任务。
 * @method Models\DeleteUserQuotaResponse DeleteUserQuota(Models\DeleteUserQuotaRequest $req) 指定条件删除文件系统配额（仅部分Turbo实例能使用，若需要调用请提交工单与我们联系）
 * @method Models\DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPolicies(Models\DescribeAutoSnapshotPoliciesRequest $req) 查询文件系统快照定期策略列表信息
 * @method Models\DescribeAvailableZoneInfoResponse DescribeAvailableZoneInfo(Models\DescribeAvailableZoneInfoRequest $req) 本接口（DescribeAvailableZoneInfo）用于查询区域的可用情况。
 * @method Models\DescribeBucketListResponse DescribeBucketList(Models\DescribeBucketListRequest $req) 用于获取数据源桶列表。
 * @method Models\DescribeCfsFileSystemClientsResponse DescribeCfsFileSystemClients(Models\DescribeCfsFileSystemClientsRequest $req) 查询挂载该文件系统的客户端。此功能需要客户端安装CFS监控插件。
 * @method Models\DescribeCfsFileSystemsResponse DescribeCfsFileSystems(Models\DescribeCfsFileSystemsRequest $req) 本接口（DescribeCfsFileSystems）用于查询文件系统
 * @method Models\DescribeCfsPGroupsResponse DescribeCfsPGroups(Models\DescribeCfsPGroupsRequest $req) 本接口（DescribeCfsPGroups）用于查询权限组列表。
 * @method Models\DescribeCfsRulesResponse DescribeCfsRules(Models\DescribeCfsRulesRequest $req) 本接口（DescribeCfsRules）用于查询权限组规则列表。
 * @method Models\DescribeCfsServiceStatusResponse DescribeCfsServiceStatus(Models\DescribeCfsServiceStatusRequest $req) 本接口（DescribeCfsServiceStatus）用于查询用户使用CFS的服务状态。
 * @method Models\DescribeCfsSnapshotOverviewResponse DescribeCfsSnapshotOverview(Models\DescribeCfsSnapshotOverviewRequest $req) 文件系统快照概览
 * @method Models\DescribeCfsSnapshotsResponse DescribeCfsSnapshots(Models\DescribeCfsSnapshotsRequest $req) 查询文件系统快照列表
 * @method Models\DescribeDataFlowResponse DescribeDataFlow(Models\DescribeDataFlowRequest $req) 查询数据流动信息接口
 * @method Models\DescribeLifecycleDataTaskResponse DescribeLifecycleDataTask(Models\DescribeLifecycleDataTaskRequest $req) 查询生命周期任务的接口。仅支持查询最近三个月内的任务数据。
 * @method Models\DescribeLifecyclePoliciesResponse DescribeLifecyclePolicies(Models\DescribeLifecyclePoliciesRequest $req) 查询生命周期管理策略
 * @method Models\DescribeMigrationTasksResponse DescribeMigrationTasks(Models\DescribeMigrationTasksRequest $req) 用于获取迁移任务列表。
此接口需提交工单，开启白名单之后才能使用。
 * @method Models\DescribeMountTargetsResponse DescribeMountTargets(Models\DescribeMountTargetsRequest $req) 本接口（DescribeMountTargets）用于查询文件系统挂载点信息
 * @method Models\DescribeSnapshotOperationLogsResponse DescribeSnapshotOperationLogs(Models\DescribeSnapshotOperationLogsRequest $req) 查询快照操作日志
 * @method Models\DescribeUserQuotaResponse DescribeUserQuota(Models\DescribeUserQuotaRequest $req) 查询文件系统配额（仅部分Turbo实例能使用，若需要调用请提交工单与我们联系）
 * @method Models\DoDirectoryOperationResponse DoDirectoryOperation(Models\DoDirectoryOperationRequest $req) 文件系统目录操作接口。当前仅 Turbo 系列文件系统支持调用此接口进行目录操作，通用系列文件系统（含增强型）不支持调用。
 * @method Models\ModifyDataFlowResponse ModifyDataFlow(Models\ModifyDataFlowRequest $req) 修改数据流动相关参数
 * @method Models\ModifyFileSystemAutoScaleUpRuleResponse ModifyFileSystemAutoScaleUpRule(Models\ModifyFileSystemAutoScaleUpRuleRequest $req) 用来设置文件系统扩容策略，该接口只支持turbo文件系统
 * @method Models\ModifyLifecyclePolicyResponse ModifyLifecyclePolicy(Models\ModifyLifecyclePolicyRequest $req) 更新文件存储生命周期策略
 * @method Models\ScaleUpFileSystemResponse ScaleUpFileSystem(Models\ScaleUpFileSystemRequest $req) 该接口用于对turbo 文件系统扩容使用,该接口只支持扩容不支持缩容。turbo标准型扩容步长是10240GIB，turbo性能型扩容步长是5120GIB
 * @method Models\SetUserQuotaResponse SetUserQuota(Models\SetUserQuotaRequest $req) 设置文件系统配额，提供UID/GID的配额设置的接口（仅部分Turbo实例能使用，若需要调用请提交工单与我们联系）
 * @method Models\SignUpCfsServiceResponse SignUpCfsService(Models\SignUpCfsServiceRequest $req) 本接口（SignUpCfsService）用于开通CFS服务。
 * @method Models\StopLifecycleDataTaskResponse StopLifecycleDataTask(Models\StopLifecycleDataTaskRequest $req) 终止生命周期任务的接口
 * @method Models\StopMigrationTaskResponse StopMigrationTask(Models\StopMigrationTaskRequest $req) 用于终止迁移任务，可以终止等待中、运行中状态的任务。
 * @method Models\UnbindAutoSnapshotPolicyResponse UnbindAutoSnapshotPolicy(Models\UnbindAutoSnapshotPolicyRequest $req) 解除文件系统绑定的快照策略
 * @method Models\UpdateAutoSnapshotPolicyResponse UpdateAutoSnapshotPolicy(Models\UpdateAutoSnapshotPolicyRequest $req) 更新定期自动快照策略
 * @method Models\UpdateCfsFileSystemNameResponse UpdateCfsFileSystemName(Models\UpdateCfsFileSystemNameRequest $req) 本接口（UpdateCfsFileSystemName）用于更新文件系统名
 * @method Models\UpdateCfsFileSystemPGroupResponse UpdateCfsFileSystemPGroup(Models\UpdateCfsFileSystemPGroupRequest $req) 本接口（UpdateCfsFileSystemPGroup）用于更新文件系统所使用的权限组
 * @method Models\UpdateCfsFileSystemSizeLimitResponse UpdateCfsFileSystemSizeLimit(Models\UpdateCfsFileSystemSizeLimitRequest $req) 本接口（UpdateCfsFileSystemSizeLimit）用于更新文件系统存储容量限制。
 * @method Models\UpdateCfsPGroupResponse UpdateCfsPGroup(Models\UpdateCfsPGroupRequest $req) 本接口（UpdateCfsPGroup）更新权限组信息。
 * @method Models\UpdateCfsRuleResponse UpdateCfsRule(Models\UpdateCfsRuleRequest $req) 本接口（UpdateCfsRule）用于更新权限规则。
 * @method Models\UpdateCfsSnapshotAttributeResponse UpdateCfsSnapshotAttribute(Models\UpdateCfsSnapshotAttributeRequest $req) 更新文件系统快照名称及保留时长
 * @method Models\UpdateFileSystemBandwidthLimitResponse UpdateFileSystemBandwidthLimit(Models\UpdateFileSystemBandwidthLimitRequest $req) 更新文件系统吞吐
仅吞吐型支持此接口
 */

class CfsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfs";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfs")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
