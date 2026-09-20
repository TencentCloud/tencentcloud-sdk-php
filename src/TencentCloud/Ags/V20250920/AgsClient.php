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

namespace TencentCloud\Ags\V20250920;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ags\V20250920\Models as Models;

/**
 * @method Models\AcquireDeploymentTokenResponse AcquireDeploymentToken(Models\AcquireDeploymentTokenRequest $req) 获取 Deployment 访问 Token
 * @method Models\AcquireSandboxInstanceTokenResponse AcquireSandboxInstanceToken(Models\AcquireSandboxInstanceTokenRequest $req) 获取访问沙箱工具时所需要使用的访问Token，创建沙箱实例后需调用此接口获取沙箱实例访问Token。
此Token可用于调用代码沙箱实例执行代码，或浏览器沙箱实例进行浏览器操作等。
 * @method Models\AppendEventResponse AppendEvent(Models\AppendEventRequest $req) 追加事件。

向指定会话追加一条事件。
 * @method Models\ApproveRegistryRecordResponse ApproveRegistryRecord(Models\ApproveRegistryRecordRequest $req) 通过 Version 审批：PENDING_APPROVAL → APPROVED。Comment 必填。
 * @method Models\CancelRegistryRecordResponse CancelRegistryRecord(Models\CancelRegistryRecordRequest $req) PREPARING/PENDING_APPROVAL → CANCELED。Comment 必填。
 * @method Models\CreateAPIKeyResponse CreateAPIKey(Models\CreateAPIKeyRequest $req) 创建新的API密钥，用于调用Agent Sandbox接口。相较于腾讯云Secret ID Secret Key支持调用所有接口使用，仅有部分接口支持使用API密钥调用。
 * @method Models\CreateDeploymentResponse CreateDeployment(Models\CreateDeploymentRequest $req) 创建 Deployment
 * @method Models\CreatePreCacheImageTaskResponse CreatePreCacheImageTask(Models\CreatePreCacheImageTaskRequest $req) 创建镜像预热任务
 * @method Models\CreateRegistryResponse CreateRegistry(Models\CreateRegistryRequest $req) 创建 Agent Registry（注册中心）。
 * @method Models\CreateRegistryRecordResponse CreateRegistryRecord(Models\CreateRegistryRecordRequest $req) 统一创建 Registry Record（含 revision 1）。请求通过 DescriptorType 与严格内容输入 Union 选择底层类型：MCPSource / AgentSource / SkillSource / CustomDescriptors 四选一，必须与 DescriptorType 对应。不接受 RecordId 或 ChangeLog；同名 Record 返回冲突，不隐式追加 Version。追加 Version 请使用 UpdateRegistryRecord。
 * @method Models\CreateSandboxToolResponse CreateSandboxTool(Models\CreateSandboxToolRequest $req) 创建沙箱工具
 * @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) 创建会话。

为指定 Agent 和用户创建会话，创建成功后返回会话信息。
 * @method Models\CreateSessionSpaceResponse CreateSessionSpace(Models\CreateSessionSpaceRequest $req) 创建会话空间。
为当前应用在指定地域创建会话空间，创建成功后返回会话空间信息。会话空间用于隔离不同业务场景下的用户、会话、事件及状态数据。
 * @method Models\DeleteAPIKeyResponse DeleteAPIKey(Models\DeleteAPIKeyRequest $req) 删除API密钥。注意区别于腾讯云Secret ID Secret Key，本接口删除的是Agent Sandbox专用API key。
 * @method Models\DeleteDeploymentResponse DeleteDeployment(Models\DeleteDeploymentRequest $req) 删除 Deployment
 * @method Models\DeleteRegistryResponse DeleteRegistry(Models\DeleteRegistryRequest $req) 删除 Registry。
 * @method Models\DeleteRegistryRecordResponse DeleteRegistryRecord(Models\DeleteRegistryRecordRequest $req) 删除 Registry Record 或指定 Version。省略 VersionId 时对整个 Record 进行软删除；传入 VersionId 时只删除指定 Version（Stable 指向的 Version 不允许删除；仅剩一个 Approved Version 时不允许删除）。取代原 DeleteRegistryRecordVersion。
 * @method Models\DeleteSandboxToolResponse DeleteSandboxTool(Models\DeleteSandboxToolRequest $req) 删除沙箱工具
 * @method Models\DeleteSessionResponse DeleteSession(Models\DeleteSessionRequest $req) 删除会话
 * @method Models\DeleteSessionSpaceResponse DeleteSessionSpace(Models\DeleteSessionSpaceRequest $req) 删除会话空间。
删除指定的会话空间。仅允许删除不包含会话、事件或用户状态数据的非默认会话空间；系统默认会话空间不能删除。删除成功后不再返回会话空间信息。
 * @method Models\DescribeAPIKeyListResponse DescribeAPIKeyList(Models\DescribeAPIKeyListRequest $req) 获取API密钥列表，包含API密钥简略信息，包含名称、创建时间等。
 * @method Models\DescribeDeploymentResponse DescribeDeployment(Models\DescribeDeploymentRequest $req) 查询 Deployment 信息
 * @method Models\DescribeDeploymentListResponse DescribeDeploymentList(Models\DescribeDeploymentListRequest $req) 查询 Deployment 列表
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) 查询事件列表。

查询指定会话的事件流，支持按作者和起始时间筛选。
 * @method Models\DescribePreCacheImageTaskResponse DescribePreCacheImageTask(Models\DescribePreCacheImageTaskRequest $req) 查询镜像预热任务信息
 * @method Models\DescribeQuotaOverviewResponse DescribeQuotaOverview(Models\DescribeQuotaOverviewRequest $req) 查询当前调用账号的资源配额和当前总用量，以及账号下各配额组的资源配额和当前用量
 * @method Models\DescribeRegistryResponse DescribeRegistry(Models\DescribeRegistryRequest $req) 按 RegistryId 查询 Registry 详情。
 * @method Models\DescribeRegistryAuditLogListResponse DescribeRegistryAuditLogList(Models\DescribeRegistryAuditLogListRequest $req) 分页查询指定Registry / Record / Version的审计日志。
 * @method Models\DescribeRegistryListResponse DescribeRegistryList(Models\DescribeRegistryListRequest $req) 分页查询当前租户可见的 Registry 列表。
 * @method Models\DescribeRegistryRecordResponse DescribeRegistryRecord(Models\DescribeRegistryRecordRequest $req) 查询 Record 详情和其中一个 Version。请求可通过互斥的 VersionId 或 Label 选择 Version；均省略时默认 Label=stable。取代原 DescribeRegistryRecordVersion。
 * @method Models\DescribeRegistryRecordListResponse DescribeRegistryRecordList(Models\DescribeRegistryRecordListRequest $req) 分页查询 Registry 下的 Record 列表。list 类接口不接入 CAM 转发鉴权；业务侧按 CAM 二次过滤。
 * @method Models\DescribeRegistryRecordVersionListResponse DescribeRegistryRecordVersionList(Models\DescribeRegistryRecordVersionListRequest $req) 分页查询 Record 的 Version 列表。list 类接口不接入 CAM 转发鉴权。
 * @method Models\DescribeSandboxInstanceListResponse DescribeSandboxInstanceList(Models\DescribeSandboxInstanceListRequest $req) 查询沙箱实例列表
 * @method Models\DescribeSandboxToolListResponse DescribeSandboxToolList(Models\DescribeSandboxToolListRequest $req) 查询沙箱工具列表
 * @method Models\DescribeSessionResponse DescribeSession(Models\DescribeSessionRequest $req) 查询会话。

查询指定会话的信息。
 * @method Models\DescribeSessionSpaceResponse DescribeSessionSpace(Models\DescribeSessionSpaceRequest $req) 查询会话空间详情。
查询指定会话空间的详细信息，查询成功后返回会话空间的名称、描述、状态、所属地域及创建时间等信息。
 * @method Models\DescribeSessionSpacesResponse DescribeSessionSpaces(Models\DescribeSessionSpacesRequest $req) 分页查询当前应用和地域下的会话空间。
 * @method Models\DescribeSessionsResponse DescribeSessions(Models\DescribeSessionsRequest $req) 查询会话列表
 * @method Models\GetSkillPackageDownloadURLResponse GetSkillPackageDownloadURL(Models\GetSkillPackageDownloadURLRequest $req) 获取 Skill 包下载 URL。VersionId 与 Label 互斥；均省略时使用 Stable。响应包含 ResolvedVersionId，便于调用方回填。
 * @method Models\GetSkillPackageUploadURLResponse GetSkillPackageUploadURL(Models\GetSkillPackageUploadURLRequest $req) 为 FAILED / EXPIRED 的 TAR Skill Version 生成新的上传尝试；VersionId 与 Revision 保持不变。
 * @method Models\ModifyDeploymentResponse ModifyDeployment(Models\ModifyDeploymentRequest $req) 修改 Deployment
 * @method Models\ModifySessionResponse ModifySession(Models\ModifySessionRequest $req) 修改会话信息
 * @method Models\ModifySessionSpaceResponse ModifySessionSpace(Models\ModifySessionSpaceRequest $req) 修改会话空间。
修改指定会话空间的名称和描述，修改成功后返回更新后的会话空间信息。默认会话空间允许修改名称和描述。
 * @method Models\PauseSandboxInstanceResponse PauseSandboxInstance(Models\PauseSandboxInstanceRequest $req) 暂停沙箱实例
 * @method Models\PreviewRegistryRecordResponse PreviewRegistryRecord(Models\PreviewRegistryRecordRequest $req) 对 Record 的指定 Version 或 Label 目标发起一次预览调用。VersionId 与 Label 互斥；均省略时使用 Stable。不创建 Version、不修改 Label。
 * @method Models\RejectRegistryRecordResponse RejectRegistryRecord(Models\RejectRegistryRecordRequest $req) 驳回 Version 审批：PENDING_APPROVAL → REJECTED。Comment 必填。
 * @method Models\ResumeSandboxInstanceResponse ResumeSandboxInstance(Models\ResumeSandboxInstanceRequest $req) 恢复沙箱实例
 * @method Models\StartSandboxInstanceResponse StartSandboxInstance(Models\StartSandboxInstanceRequest $req) 启动沙箱实例
 * @method Models\StopSandboxInstanceResponse StopSandboxInstance(Models\StopSandboxInstanceRequest $req) 停止沙箱实例
 * @method Models\SyncRegistryRecordResponse SyncRegistryRecord(Models\SyncRegistryRecordRequest $req) 触发一次从远端拉取描述符 / 元数据的同步。可通过互斥的 VersionId 或 Label 指定来源 Version，均省略时默认使用 Stable。有变化时创建新 Version 并移动 Latest；来源必须 SourceType=URL_IMPORT，否则返回 UnsupportedOperation.SourceType。
 * @method Models\UpdateRegistryResponse UpdateRegistry(Models\UpdateRegistryRequest $req) 更新 Registry 的可变元数据。
 * @method Models\UpdateRegistryRecordResponse UpdateRegistryRecord(Models\UpdateRegistryRecordRequest $req) 更新 Registry Record。两种互斥模式：①Record 更新模式：不提交任何 Source / CustomDescriptors，可通过 Description、LabelMutations 修改元数据与 Label（至少提交一项）；②Version 创建模式：提交且仅提交一种与现有 DescriptorType 匹配的内容输入，可选 VersionName / ChangeLog，禁止 Description / LabelMutations，服务端在 Record 下创建下一个 Revision。取代原 ChangeRegistryRecordStableVersion / RollbackRegistryRecordVersion / Create*RegistryRecordVersion。
 * @method Models\UpdateSandboxInstanceResponse UpdateSandboxInstance(Models\UpdateSandboxInstanceRequest $req) 更新沙箱实例
 * @method Models\UpdateSandboxToolResponse UpdateSandboxTool(Models\UpdateSandboxToolRequest $req) 更新沙箱工具
 */

class AgsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ags.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ags";

    /**
     * @var string
     */
    protected $version = "2025-09-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("ags")."\\"."V20250920\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
