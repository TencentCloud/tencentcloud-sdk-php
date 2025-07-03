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

namespace TencentCloud\Ccc\V20200210;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ccc\V20200210\Models as Models;

/**
 * @method Models\AbortAgentCruiseDialingCampaignResponse AbortAgentCruiseDialingCampaign(Models\AbortAgentCruiseDialingCampaignRequest $req) 停止座席巡航式外呼任务
 * @method Models\AbortPredictiveDialingCampaignResponse AbortPredictiveDialingCampaign(Models\AbortPredictiveDialingCampaignRequest $req) 停止预测式外呼任务
 * @method Models\BindNumberCallInInterfaceResponse BindNumberCallInInterface(Models\BindNumberCallInInterfaceRequest $req) 绑定号码呼入回调接口
 * @method Models\BindNumberCallOutSkillGroupResponse BindNumberCallOutSkillGroup(Models\BindNumberCallOutSkillGroupRequest $req) 绑定号码外呼技能组
 * @method Models\BindStaffSkillGroupListResponse BindStaffSkillGroupList(Models\BindStaffSkillGroupListRequest $req) 绑定座席所属技能组
 * @method Models\CreateAIAgentCallResponse CreateAIAgentCall(Models\CreateAIAgentCallRequest $req) 用于调用AI模型发起外呼通话，仅限自有电话号码使用，目前开通高级版座席**限时**免费体验。

发起通话前，请先确认您的AI模型是否兼容 OpenAI、Azure 或 Minimax 协议，并前往模型服务商网站获取相关鉴权信息。 具体功能说明请参考文档 [腾讯云联络中心AI通话平台](https://cloud.tencent.com/document/product/679/112100)。
 * @method Models\CreateAICallResponse CreateAICall(Models\CreateAICallRequest $req) 用于调用AI模型发起外呼通话，仅限自有电话号码使用，目前开通高级版座席**限时**免费体验。

发起通话前，请先确认您的AI模型是否兼容 OpenAI、Azure 或 Minimax 协议，并前往模型服务商网站获取相关鉴权信息。 具体功能说明请参考文档 [腾讯云联络中心AI通话平台](https://cloud.tencent.com/document/product/679/112100)。
 * @method Models\CreateAdminURLResponse CreateAdminURL(Models\CreateAdminURLRequest $req) 创建管理端访问链接
 * @method Models\CreateAgentCruiseDialingCampaignResponse CreateAgentCruiseDialingCampaign(Models\CreateAgentCruiseDialingCampaignRequest $req) 座席巡航式外呼。
 * @method Models\CreateAutoCalloutTaskResponse CreateAutoCalloutTask(Models\CreateAutoCalloutTaskRequest $req) 创建自动外呼任务
 * @method Models\CreateCCCSkillGroupResponse CreateCCCSkillGroup(Models\CreateCCCSkillGroupRequest $req) 新建技能组
 * @method Models\CreateCallOutSessionResponse CreateCallOutSession(Models\CreateCallOutSessionRequest $req) 创建外呼会话，当前仅支持双呼，即先使用平台号码呼出到座席手机上，座席接听后，然后再外呼用户，而且由于运营商频率限制，座席手机号必须先加白名单，避免频控导致外呼失败。所以调用此接口前，下述操作均已完成
1. UserId 指定的座席已经[绑定手机号](https://cloud.tencent.com/document/product/679/76067#.E6.AD.A5.E9.AA.A42.EF.BC.9A.E5.AE.8C.E5.96.84.E8.B4.A6.E5.8F.B7.E4.BF.A1.E6.81.AF)
2. 座席绑定的手机号已经[申请并通过了外呼白名单](https://cloud.tencent.com/document/product/679/76744#.E6.93.8D.E4.BD.9C.E6.AD.A5.E9.AA.A4)
3. 当前座席侧只能呼叫其手机，所以 IsForceMobile 字段当前必须为 true
4. 被叫不要填当前 UserId 所绑定的手机号，否则会造成占线呼叫失败
 * @method Models\CreateCarrierPrivilegeNumberApplicantResponse CreateCarrierPrivilegeNumberApplicant(Models\CreateCarrierPrivilegeNumberApplicantRequest $req) 用于无限频率地呼叫坐席手机
 * @method Models\CreateCompanyApplyResponse CreateCompanyApply(Models\CreateCompanyApplyRequest $req) 创建公司资质申请（1、首次使用接口，建议先在云联络中心控制台查看各个资料模板:https://console.cloud.tencent.com/ccc/enterprise/update。2、参数中图片Url建议使用腾讯云Cos存储的临时链接）
 * @method Models\CreateExtensionResponse CreateExtension(Models\CreateExtensionRequest $req) 创建话机账号
 * @method Models\CreateIVRSessionResponse CreateIVRSession(Models\CreateIVRSessionRequest $req) 创建关联 IVR 的会话，仅高级版支持，目前支持呼入和自动外呼两种 IVR 类型。收到请求后 TCCC 会先尝试呼通被叫，然后进入 IVR 流程。
 * @method Models\CreateOwnNumberApplyResponse CreateOwnNumberApply(Models\CreateOwnNumberApplyRequest $req) 创建客户自携号码接入审核
 * @method Models\CreatePredictiveDialingCampaignResponse CreatePredictiveDialingCampaign(Models\CreatePredictiveDialingCampaignRequest $req) 创建预测式外呼任务
 * @method Models\CreateSDKLoginTokenResponse CreateSDKLoginToken(Models\CreateSDKLoginTokenRequest $req) 创建 SDK 登录 Token。
 * @method Models\CreateStaffResponse CreateStaff(Models\CreateStaffRequest $req) 创建客服账号。
 * @method Models\CreateUserSigResponse CreateUserSig(Models\CreateUserSigRequest $req) 创建用户数据签名
 * @method Models\DeleteCCCSkillGroupResponse DeleteCCCSkillGroup(Models\DeleteCCCSkillGroupRequest $req) 删除技能组
 * @method Models\DeleteExtensionResponse DeleteExtension(Models\DeleteExtensionRequest $req) 删除话机账号
 * @method Models\DeletePredictiveDialingCampaignResponse DeletePredictiveDialingCampaign(Models\DeletePredictiveDialingCampaignRequest $req) 删除预测式外呼任务
 * @method Models\DeleteStaffResponse DeleteStaff(Models\DeleteStaffRequest $req) 删除坐席信息
 * @method Models\DescribeAICallExtractResultResponse DescribeAICallExtractResult(Models\DescribeAICallExtractResultRequest $req) 获取 AI 通话内容提取结果。
 * @method Models\DescribeAILatencyResponse DescribeAILatency(Models\DescribeAILatencyRequest $req) 获取 AI 时延信息
 * @method Models\DescribeActiveCarrierPrivilegeNumberResponse DescribeActiveCarrierPrivilegeNumber(Models\DescribeActiveCarrierPrivilegeNumberRequest $req) 查询生效运营商白名单规则
 * @method Models\DescribeAgentCruiseDialingCampaignResponse DescribeAgentCruiseDialingCampaign(Models\DescribeAgentCruiseDialingCampaignRequest $req) 查询 座席巡航式外呼任务
 * @method Models\DescribeAutoCalloutTaskResponse DescribeAutoCalloutTask(Models\DescribeAutoCalloutTaskRequest $req) 查询自动外呼任务详情
 * @method Models\DescribeAutoCalloutTasksResponse DescribeAutoCalloutTasks(Models\DescribeAutoCalloutTasksRequest $req) 批量查询自动外呼任务
 * @method Models\DescribeCCCBuyInfoListResponse DescribeCCCBuyInfoList(Models\DescribeCCCBuyInfoListRequest $req) 获取用户购买信息列表
 * @method Models\DescribeCallInMetricsResponse DescribeCallInMetrics(Models\DescribeCallInMetricsRequest $req) 获取呼入实时数据统计指标
 * @method Models\DescribeCarrierPrivilegeNumberApplicantsResponse DescribeCarrierPrivilegeNumberApplicants(Models\DescribeCarrierPrivilegeNumberApplicantsRequest $req) 查询单状态
 * @method Models\DescribeChatMessagesResponse DescribeChatMessages(Models\DescribeChatMessagesRequest $req) 获取指定服务记录文本聊天内容，需要先使用查询在线客服记录（DescribeIMCdrs） API 获取服务记录 SessionId。

文本聊天记录只保存了 1 年内的，1 年之前会自动清理。
 * @method Models\DescribeCompanyListResponse DescribeCompanyList(Models\DescribeCompanyListRequest $req) 查询公司资质申请列表
 * @method Models\DescribeExtensionResponse DescribeExtension(Models\DescribeExtensionRequest $req) 获取话机信息
 * @method Models\DescribeExtensionsResponse DescribeExtensions(Models\DescribeExtensionsRequest $req) 查询话机列表信息
 * @method Models\DescribeIMCdrListResponse DescribeIMCdrList(Models\DescribeIMCdrListRequest $req) 获取包括全媒体和文本会话两种类型的服务记录。
 * @method Models\DescribeIMCdrsResponse DescribeIMCdrs(Models\DescribeIMCdrsRequest $req) 获取包括全媒体和文本会话两种类型的服务记录。
 * @method Models\DescribeIvrAudioListResponse DescribeIvrAudioList(Models\DescribeIvrAudioListRequest $req) 查询IVR音频文件列表信息
 * @method Models\DescribeNumbersResponse DescribeNumbers(Models\DescribeNumbersRequest $req) 查询号码列表
 * @method Models\DescribePSTNActiveSessionListResponse DescribePSTNActiveSessionList(Models\DescribePSTNActiveSessionListRequest $req) 获取当前正在通话的会话列表
 * @method Models\DescribePredictiveDialingCampaignResponse DescribePredictiveDialingCampaign(Models\DescribePredictiveDialingCampaignRequest $req) 查询预测式外呼任务
 * @method Models\DescribePredictiveDialingCampaignsResponse DescribePredictiveDialingCampaigns(Models\DescribePredictiveDialingCampaignsRequest $req) 查询预测式外呼任务列表
 * @method Models\DescribePredictiveDialingSessionsResponse DescribePredictiveDialingSessions(Models\DescribePredictiveDialingSessionsRequest $req) 查询预测式外呼呼叫列表
 * @method Models\DescribeProtectedTelCdrResponse DescribeProtectedTelCdr(Models\DescribeProtectedTelCdrRequest $req) 获取主被叫受保护的电话服务记录与录音
 * @method Models\DescribeSkillGroupInfoListResponse DescribeSkillGroupInfoList(Models\DescribeSkillGroupInfoListRequest $req) 获取技能组信息列表
 * @method Models\DescribeStaffInfoListResponse DescribeStaffInfoList(Models\DescribeStaffInfoListRequest $req) 获取坐席信息列表
 * @method Models\DescribeStaffStatusMetricsResponse DescribeStaffStatusMetrics(Models\DescribeStaffStatusMetricsRequest $req) 获取坐席实时状态统计指标
 * @method Models\DescribeTelCallInfoResponse DescribeTelCallInfo(Models\DescribeTelCallInfoRequest $req) 按实例获取电话消耗统计
 * @method Models\DescribeTelCdrResponse DescribeTelCdr(Models\DescribeTelCdrRequest $req) 获取电话服务记录与录音
 * @method Models\DescribeTelRecordAsrResponse DescribeTelRecordAsr(Models\DescribeTelRecordAsrRequest $req) 拉取会话录音转文本信息
 * @method Models\DescribeTelSessionResponse DescribeTelSession(Models\DescribeTelSessionRequest $req) 获取 PSTN 会话信息
 * @method Models\DisableCCCPhoneNumberResponse DisableCCCPhoneNumber(Models\DisableCCCPhoneNumberRequest $req) 停用号码
 * @method Models\ForceMemberOfflineResponse ForceMemberOffline(Models\ForceMemberOfflineRequest $req) 强制客服下线
 * @method Models\HangUpCallResponse HangUpCall(Models\HangUpCallRequest $req) 挂断电话
 * @method Models\ModifyCompanyApplyResponse ModifyCompanyApply(Models\ModifyCompanyApplyRequest $req) 修改公司资质申请，只能修改状态为驳回或待审核的申请单。（1、首次使用接口，建议先在云联络中心控制台查看各个资料模板:https://console.cloud.tencent.com/ccc/enterprise/update。2、参数中图片Url建议使用腾讯云Cos存储的临时链接）
 * @method Models\ModifyExtensionResponse ModifyExtension(Models\ModifyExtensionRequest $req) 修改话机账号(绑定技能组、绑定坐席账号)
 * @method Models\ModifyOwnNumberApplyResponse ModifyOwnNumberApply(Models\ModifyOwnNumberApplyRequest $req) 修改客户自携号码审批单
 * @method Models\ModifyStaffResponse ModifyStaff(Models\ModifyStaffRequest $req) 修改客服账号
 * @method Models\ModifyStaffPasswordResponse ModifyStaffPassword(Models\ModifyStaffPasswordRequest $req) 修改座席的密码
 * @method Models\PausePredictiveDialingCampaignResponse PausePredictiveDialingCampaign(Models\PausePredictiveDialingCampaignRequest $req) 暂停预测式外呼任务
 * @method Models\ResetExtensionPasswordResponse ResetExtensionPassword(Models\ResetExtensionPasswordRequest $req) 重置话机注册密码
 * @method Models\RestoreMemberOnlineResponse RestoreMemberOnline(Models\RestoreMemberOnlineRequest $req) 恢复客服上线
 * @method Models\ResumePredictiveDialingCampaignResponse ResumePredictiveDialingCampaign(Models\ResumePredictiveDialingCampaignRequest $req) 恢复预测式外呼任务
 * @method Models\StopAutoCalloutTaskResponse StopAutoCalloutTask(Models\StopAutoCalloutTaskRequest $req) 停止自动外呼任务
 * @method Models\TransferToManualResponse TransferToManual(Models\TransferToManualRequest $req) 特定场景下讲会话转接到人工坐席
 * @method Models\UnbindNumberCallOutSkillGroupResponse UnbindNumberCallOutSkillGroup(Models\UnbindNumberCallOutSkillGroupRequest $req) 解绑号码外呼技能组
 * @method Models\UnbindStaffSkillGroupListResponse UnbindStaffSkillGroupList(Models\UnbindStaffSkillGroupListRequest $req) 解绑坐席所属技能组
 * @method Models\UpdateCCCSkillGroupResponse UpdateCCCSkillGroup(Models\UpdateCCCSkillGroupRequest $req) 更新技能组
 * @method Models\UpdatePredictiveDialingCampaignResponse UpdatePredictiveDialingCampaign(Models\UpdatePredictiveDialingCampaignRequest $req) 任务未启动前，更新预测式外呼任务。
 * @method Models\UploadIvrAudioResponse UploadIvrAudio(Models\UploadIvrAudioRequest $req) 上传IVR中使用的音频文件，每日上传文件限制50个。（参数中音频文件Url建议使用腾讯云Cos存储的临时链接）
 */

class CccClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ccc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ccc";

    /**
     * @var string
     */
    protected $version = "2020-02-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("ccc")."\\"."V20200210\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
