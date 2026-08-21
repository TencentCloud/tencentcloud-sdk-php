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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AccessAIAnalysisSMTPResponse AccessAIAnalysisSMTP(Models\AccessAIAnalysisSMTPRequest $req) 创建/修改SMTP邮箱接入请求
 * @method Models\AddDspmAssetManagerResponse AddDspmAssetManager(Models\AddDspmAssetManagerRequest $req) 添加资产管理员
 * @method Models\AddLoginWhiteListsResponse AddLoginWhiteLists(Models\AddLoginWhiteListsRequest $req) 批量添加异地登录白名单
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) csip角色授权绑定接口
 * @method Models\AddVulWhitelistResponse AddVulWhitelist(Models\AddVulWhitelistRequest $req) 添加漏洞白名单
 * @method Models\BatchModifyBaselinePolicyResponse BatchModifyBaselinePolicy(Models\BatchModifyBaselinePolicyRequest $req) 批量修改基线策略的“周期扫描配置 / 自动同步新增检测项 / 检测项命中配置 / 自定义检测项”等设置。仅修改请求中传入的字段。
 * @method Models\BindClusterOwnerResponse BindClusterOwner(Models\BindClusterOwnerRequest $req) 绑定集群负责人
 * @method Models\CancelEdrAlertIgnoreResponse CancelEdrAlertIgnore(Models\CancelEdrAlertIgnoreRequest $req) 取消已永久忽略的EDR多行为告警，从AI-Link永久忽略白名单移除对应主机+规则记录，并将告警状态恢复为待处理（PENDING）
 * @method Models\CheckCWPExposePathPermissionResponse CheckCWPExposePathPermission(Models\CheckCWPExposePathPermissionRequest $req) 判断当前用户是否旗舰版(适用于主机)
 * @method Models\CheckIsUltimateVersionResponse CheckIsUltimateVersion(Models\CheckIsUltimateVersionRequest $req) 判断当前用户是否旗舰版
 * @method Models\CheckRiskResponse CheckRisk(Models\CheckRiskRequest $req) 风险验证示例
 * @method Models\CopyBaselinePolicyResponse CopyBaselinePolicy(Models\CopyBaselinePolicyRequest $req) 复制自定义基线策略
 * @method Models\CreateAIScheduleResponse CreateAISchedule(Models\CreateAIScheduleRequest $req) 创建AI 定时任务。

创建一个新的AI 定时任务，需传入任务名称、执行提示词和触发器配置。创建成功后返回AI 定时任务 ID。
 * @method Models\CreateAccessKeyCheckTaskResponse CreateAccessKeyCheckTask(Models\CreateAccessKeyCheckTaskRequest $req) 检测AK 异步任务
 * @method Models\CreateAccessKeySyncTaskResponse CreateAccessKeySyncTask(Models\CreateAccessKeySyncTaskRequest $req) 发起AK资产同步任务
 * @method Models\CreateAllAssetsExportJobResponse CreateAllAssetsExportJob(Models\CreateAllAssetsExportJobRequest $req) 创建全部资产导出任务
 * @method Models\CreateAssetFilterViewResponse CreateAssetFilterView(Models\CreateAssetFilterViewRequest $req) 创建资产搜索视图
 * @method Models\CreateAssetProcessExportJobResponse CreateAssetProcessExportJob(Models\CreateAssetProcessExportJobRequest $req) 创建主机进程列表导出任务
 * @method Models\CreateAssetSyncTaskResponse CreateAssetSyncTask(Models\CreateAssetSyncTaskRequest $req) 创建资产同步任务
 * @method Models\CreateAssetTagResponse CreateAssetTag(Models\CreateAssetTagRequest $req) 创建资产标签
 * @method Models\CreateAssetViewRisksExportJobResponse CreateAssetViewRisksExportJob(Models\CreateAssetViewRisksExportJobRequest $req) 创建资产视角下风险列表导出任务示例
 * @method Models\CreateBaselineAggregatedItemExportJobResponse CreateBaselineAggregatedItemExportJob(Models\CreateBaselineAggregatedItemExportJobRequest $req) 创建基线聚合检测项导出任务。通过 ExportType 选择导出统计结果或风险明细，可按策略、分类等条件限定范围；任务在后台异步执行，完成后可在导出任务列表中下载结果文件。
 * @method Models\CreateBaselineFixRecordExportJobResponse CreateBaselineFixRecordExportJob(Models\CreateBaselineFixRecordExportJobRequest $req) 创建基线修复记录导出任务，导出已修复检测项的记录数据（含检测项信息、资产信息、修复时间等）。任务在后台异步执行，完成后可在导出任务列表中下载结果文件。
 * @method Models\CreateBaselineMainTaskExportJobResponse CreateBaselineMainTaskExportJob(Models\CreateBaselineMainTaskExportJobRequest $req) 创建基线主任务导出任务，导出指定主任务下的检测项与子任务数据。任务在后台异步执行，完成后可在导出任务列表中下载结果文件。
 * @method Models\CreateCFGRiskPDFReportExportJobResponse CreateCFGRiskPDFReportExportJob(Models\CreateCFGRiskPDFReportExportJobRequest $req) 创建云资源配置检测PDF报告导出任务示例
 * @method Models\CreateCFGRisksExportJobResponse CreateCFGRisksExportJob(Models\CreateCFGRisksExportJobRequest $req) 创建资产视角下风险列表导出任务示例
 * @method Models\CreateCSIPManualMalwareScanResponse CreateCSIPManualMalwareScan(Models\CreateCSIPManualMalwareScanRequest $req) CSIP 手动扫描创建接口
 * @method Models\CreateCheckViewRisksExportJobResponse CreateCheckViewRisksExportJob(Models\CreateCheckViewRisksExportJobRequest $req) 创建资产视角下风险列表导出任务示例
 * @method Models\CreateCloudFunctionExportJobResponse CreateCloudFunctionExportJob(Models\CreateCloudFunctionExportJobRequest $req) 创建云函数导出任务
 * @method Models\CreateClusterAssetSyncTaskResponse CreateClusterAssetSyncTask(Models\CreateClusterAssetSyncTaskRequest $req) 创建集群资产同步任务
 * @method Models\CreateClusterContainerListExportJobResponse CreateClusterContainerListExportJob(Models\CreateClusterContainerListExportJobRequest $req) 创建集群容器列表导出任务
 * @method Models\CreateClusterListExportJobResponse CreateClusterListExportJob(Models\CreateClusterListExportJobRequest $req) 创建集群列表导出任务
 * @method Models\CreateClusterNamespaceListExportJobResponse CreateClusterNamespaceListExportJob(Models\CreateClusterNamespaceListExportJobRequest $req) 创建集群命名空间列表导出任务。导出字段包含命名空间名称、Labels、创建时间。支持Filter过滤。导出通过异步任务实现，返回JobId后前端轮询查询导出任务状态。
 * @method Models\CreateClusterNodeListExportJobResponse CreateClusterNodeListExportJob(Models\CreateClusterNodeListExportJobRequest $req) 创建集群节点列表导出任务。导出字段包含节点ID、节点名称、公网IP、内网IP、节点类型、核数、客户端状态、运行状态。NodeType和ClientStatus、RunStatus均经过国际化翻译。支持Filter过滤（含ClientStatus内存过滤）。导出通过异步任务实现，返回JobId后前端轮询查询导出任务状态。
 * @method Models\CreateComplianceRiskExportJobResponse CreateComplianceRiskExportJob(Models\CreateComplianceRiskExportJobRequest $req) 创建合规标准聚合视角下风险列表导出任务示例
 * @method Models\CreateCosAssetSyncTaskResponse CreateCosAssetSyncTask(Models\CreateCosAssetSyncTaskRequest $req) 创建资产同步任务
 * @method Models\CreateCosObjectScanTaskResponse CreateCosObjectScanTask(Models\CreateCosObjectScanTaskRequest $req) 创建cos病毒扫描、敏感数据识别任务
 * @method Models\CreateCosPolicyResponse CreateCosPolicy(Models\CreateCosPolicyRequest $req) 添加cos告警策略
 * @method Models\CreateCosRiskScanTaskResponse CreateCosRiskScanTask(Models\CreateCosRiskScanTaskRequest $req) 创建风险监测任务
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) 创建域名、ip相关信息
 * @method Models\CreateDspmAccessExportJobResponse CreateDspmAccessExportJob(Models\CreateDspmAccessExportJobRequest $req) 创建Dspm访问记录导出任务
 * @method Models\CreateDspmApplyOrderResponse CreateDspmApplyOrder(Models\CreateDspmApplyOrderRequest $req) 创建Dspm申请单
 * @method Models\CreateDspmApproveHistoryExportJobResponse CreateDspmApproveHistoryExportJob(Models\CreateDspmApproveHistoryExportJobRequest $req) 创建Dspm审批历史导出任务
 * @method Models\CreateDspmAssetAccessTopologyExportJobResponse CreateDspmAssetAccessTopologyExportJob(Models\CreateDspmAssetAccessTopologyExportJobRequest $req) 创建Dspm资产访问拓扑导出任务
 * @method Models\CreateDspmAssetIdentifyInfoExportJobResponse CreateDspmAssetIdentifyInfoExportJob(Models\CreateDspmAssetIdentifyInfoExportJobRequest $req) 创建Dspm资产列表导出任务
 * @method Models\CreateDspmAssetsExportJobResponse CreateDspmAssetsExportJob(Models\CreateDspmAssetsExportJobRequest $req) 创建Dspm资产列表导出任务
 * @method Models\CreateDspmExportTaskResponse CreateDspmExportTask(Models\CreateDspmExportTaskRequest $req) 创建日志导出任务
 * @method Models\CreateDspmIdentifyCategoryResponse CreateDspmIdentifyCategory(Models\CreateDspmIdentifyCategoryRequest $req) 创建dspm数据识别分类
 * @method Models\CreateDspmIdentifyComplianceCategoryRelationResponse CreateDspmIdentifyComplianceCategoryRelation(Models\CreateDspmIdentifyComplianceCategoryRelationRequest $req) 创建dspm数据识别模板分类关联
 * @method Models\CreateDspmIdentifyComplianceGroupResponse CreateDspmIdentifyComplianceGroup(Models\CreateDspmIdentifyComplianceGroupRequest $req) 创建dspm数据识别模板
 * @method Models\CreateDspmIdentifyComplianceGroupCopyResponse CreateDspmIdentifyComplianceGroupCopy(Models\CreateDspmIdentifyComplianceGroupCopyRequest $req) 复制dspm数据识别模板
 * @method Models\CreateDspmIdentifyComplianceRuleRelationResponse CreateDspmIdentifyComplianceRuleRelation(Models\CreateDspmIdentifyComplianceRuleRelationRequest $req) 创建dspm数据识别模板数据项关联
 * @method Models\CreateDspmIdentifyInfoListExportJobResponse CreateDspmIdentifyInfoListExportJob(Models\CreateDspmIdentifyInfoListExportJobRequest $req) 创建Dspm身份列表导出任务
 * @method Models\CreateDspmIdentifyLevelGroupResponse CreateDspmIdentifyLevelGroup(Models\CreateDspmIdentifyLevelGroupRequest $req) 创建dspm数据识别分级组
 * @method Models\CreateDspmIdentifyRuleResponse CreateDspmIdentifyRule(Models\CreateDspmIdentifyRuleRequest $req) 创建dspm数据识别数据项
 * @method Models\CreateDspmPersonalIdentifyResponse CreateDspmPersonalIdentify(Models\CreateDspmPersonalIdentifyRequest $req) 创建Dspm个人身份id
 * @method Models\CreateDspmRiskExportJobResponse CreateDspmRiskExportJob(Models\CreateDspmRiskExportJobRequest $req) 创建Dspm风险导出任务
 * @method Models\CreateDspmWhitelistStrategyResponse CreateDspmWhitelistStrategy(Models\CreateDspmWhitelistStrategyRequest $req) 创建Dspm白名单策略
 * @method Models\CreateDynamicAssetsExportJobResponse CreateDynamicAssetsExportJob(Models\CreateDynamicAssetsExportJobRequest $req) 创建公网资产导出任务
 * @method Models\CreateEDRManualScanResponse CreateEDRManualScan(Models\CreateEDRManualScanRequest $req) 点击开始扫描后触发，支持多账号、多资产类型。同时选主机和容器集群时拆分为两个独立任务（主机+容器）。
 * @method Models\CreateEdrAlertExportJobResponse CreateEdrAlertExportJob(Models\CreateEdrAlertExportJobRequest $req) 创建EDR告警导出任务
 * @method Models\CreateEdrLessAlertExportJobResponse CreateEdrLessAlertExportJob(Models\CreateEdrLessAlertExportJobRequest $req) 创建EDR告警普通导出任务
 * @method Models\CreateExposureAutoTagRuleResponse CreateExposureAutoTagRule(Models\CreateExposureAutoTagRuleRequest $req) 云边界自动打标-创建规则
 * @method Models\CreateExposuresExportJobResponse CreateExposuresExportJob(Models\CreateExposuresExportJobRequest $req) 暴露资产导出任务
 * @method Models\CreateHighBaseLineRisksExportJobResponse CreateHighBaseLineRisksExportJob(Models\CreateHighBaseLineRisksExportJobRequest $req) 创建高危基线风险导出任务
 * @method Models\CreateHostVulExportJobResponse CreateHostVulExportJob(Models\CreateHostVulExportJobRequest $req) 创建主机列漏洞表导出任务
 * @method Models\CreateIaCAccessTokenResponse CreateIaCAccessToken(Models\CreateIaCAccessTokenRequest $req) 创建IaC检测接入Token
 * @method Models\CreateIaCFileExportJobResponse CreateIaCFileExportJob(Models\CreateIaCFileExportJobRequest $req) 创建IaC检测文件导出任务
 * @method Models\CreateIaCFileReScanTaskResponse CreateIaCFileReScanTask(Models\CreateIaCFileReScanTaskRequest $req) 创建IaC检测文件重新扫描任务
 * @method Models\CreatePodContainerListExportJobResponse CreatePodContainerListExportJob(Models\CreatePodContainerListExportJobRequest $req) 创建Pod关联容器列表导出任务。导出字段包含容器ID、容器名称、运行状态、节点ID、节点类型、镜像ID、镜像名称、隔离状态。支持Filter过滤。导出通过异步任务实现，返回JobId后前端轮询查询导出任务状态。
 * @method Models\CreatePodServiceListExportJobResponse CreatePodServiceListExportJob(Models\CreatePodServiceListExportJobRequest $req) 创建Pod关联服务列表导出任务。导出字段包含服务名称、类型、Selector、命名空间、创建时间。支持Filter过滤。当传入PodUniqueID时，复用DescribeClusterServiceList的Pod关联匹配逻辑。导出通过异步任务实现，返回JobId后前端轮询查询导出任务状态。
 * @method Models\CreatePublicAssetsExportJobResponse CreatePublicAssetsExportJob(Models\CreatePublicAssetsExportJobRequest $req) 创建公网资产导出任务
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) 创建风险中心扫描任务
 * @method Models\CreateRiskDetailExportJobResponse CreateRiskDetailExportJob(Models\CreateRiskDetailExportJobRequest $req) 创建云资源配置检查风险详情导出任务示例
 * @method Models\CreateScanStatisticExportJobResponse CreateScanStatisticExportJob(Models\CreateScanStatisticExportJobRequest $req) 暴露面扫描结果导出任务
 * @method Models\CreateScanTaskResponse CreateScanTask(Models\CreateScanTaskRequest $req) 创建立即检测任务
 * @method Models\CreateSkillScanResponse CreateSkillScan(Models\CreateSkillScanRequest $req) 上传 Skill ZIP 文件，触发异步安全检测。上传成功后应使用返回的 ContentHash + EngineVersion 轮询 DescribeSkillScanResult 接口获取结果。上传接口具备幂等性，同一 Hash 的文件重复上传不会创建重复任务。检测结果保留90天，超期后需重新上传检测。
 * @method Models\CreateVulFixRetryTaskResponse CreateVulFixRetryTask(Models\CreateVulFixRetryTaskRequest $req) 对修复失败的漏洞修复任务进行重试，仅针对原任务中修复失败的主机重新下发修复指令。仅当任务状态为部分修复失败或全部修复失败时允许重试。
 * @method Models\CreateVulFixTaskResponse CreateVulFixTask(Models\CreateVulFixTaskRequest $req) 用户手动提交漏洞修复任务，指定需要修复的漏洞和目标主机，系统创建修复任务并下发执行。支持指定修复超时时间、是否创建快照等选项。通过FixItems数组精确控制每个漏洞/KB补丁修复哪些主机。
 * @method Models\CreateVulFixedExportJobResponse CreateVulFixedExportJob(Models\CreateVulFixedExportJobRequest $req) 创建已修复漏洞列表的导出任务。支持与 DescribeVulFixedList 相同的过滤条件，导出通过异步任务实现，返回 JobID 后前端轮询查询导出任务状态。导出字段包含漏洞ID、漏洞名称、漏洞等级、VPR评级、漏洞类型、CVE编号、主机名称、实例ID、关联组件&路径、修复时间。
 * @method Models\CreateVulReScanResponse CreateVulReScan(Models\CreateVulReScanRequest $req) 创建漏洞重新扫描
 * @method Models\CreateVulRisksExportJobResponse CreateVulRisksExportJob(Models\CreateVulRisksExportJobRequest $req) 创建漏洞风险导出任务
 * @method Models\CreateVulScanManualResponse CreateVulScanManual(Models\CreateVulScanManualRequest $req) 创建漏洞扫描（一键扫描）
 * @method Models\DeleteAIAnalysisSMTPAccessResponse DeleteAIAnalysisSMTPAccess(Models\DeleteAIAnalysisSMTPAccessRequest $req) 删除AI助手的SMTP邮箱接入信息
 * @method Models\DeleteAIScheduleResponse DeleteAISchedule(Models\DeleteAIScheduleRequest $req) 删除AI 定时任务。

根据指定的AI 定时任务 ID 删除对应的定时任务。删除后不可恢复。
 * @method Models\DeleteAssetFilterViewResponse DeleteAssetFilterView(Models\DeleteAssetFilterViewRequest $req) 删除用户创建的指定资产搜索视图
 * @method Models\DeleteAssetTagResponse DeleteAssetTag(Models\DeleteAssetTagRequest $req) 删除资产标签
 * @method Models\DeleteBaselineSelfDefinedPolicyListResponse DeleteBaselineSelfDefinedPolicyList(Models\DeleteBaselineSelfDefinedPolicyListRequest $req) 批量删除自定义基线策略。仅支持删除 PolicyType=SELF 的策略；删除后历史风险记录保留，但不再产生新结果。
 * @method Models\DeleteCSIPMalwareScanTaskResponse DeleteCSIPMalwareScanTask(Models\DeleteCSIPMalwareScanTaskRequest $req) CSIP 手动扫描任务删除接口
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群
 * @method Models\DeleteCosAkAssetResponse DeleteCosAkAsset(Models\DeleteCosAkAssetRequest $req) 删除已删除的cos ak资产
 * @method Models\DeleteCosPolicyResponse DeleteCosPolicy(Models\DeleteCosPolicyRequest $req) 删除策略
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) 删除域名和ip请求
 * @method Models\DeleteDspmApplyOrderResponse DeleteDspmApplyOrder(Models\DeleteDspmApplyOrderRequest $req) 删除Dspm申请单
 * @method Models\DeleteDspmAssetAccountResponse DeleteDspmAssetAccount(Models\DeleteDspmAssetAccountRequest $req) 删除Dspm资产账号
 * @method Models\DeleteDspmBackupLogListResponse DeleteDspmBackupLogList(Models\DeleteDspmBackupLogListRequest $req) 删除备份日志
 * @method Models\DeleteDspmExportTaskResponse DeleteDspmExportTask(Models\DeleteDspmExportTaskRequest $req) 删除导出任务
 * @method Models\DeleteDspmIdentifyCategoryResponse DeleteDspmIdentifyCategory(Models\DeleteDspmIdentifyCategoryRequest $req) 删除dspm数据识别分类
 * @method Models\DeleteDspmIdentifyComplianceCategoryRelationResponse DeleteDspmIdentifyComplianceCategoryRelation(Models\DeleteDspmIdentifyComplianceCategoryRelationRequest $req) 删除dspm数据识别模板分类关联
 * @method Models\DeleteDspmIdentifyComplianceGroupResponse DeleteDspmIdentifyComplianceGroup(Models\DeleteDspmIdentifyComplianceGroupRequest $req) 删除dspm数据识别模板
 * @method Models\DeleteDspmIdentifyComplianceRuleRelationResponse DeleteDspmIdentifyComplianceRuleRelation(Models\DeleteDspmIdentifyComplianceRuleRelationRequest $req) 删除dspm数据识别模板数据项关联
 * @method Models\DeleteDspmIdentifyLevelGroupResponse DeleteDspmIdentifyLevelGroup(Models\DeleteDspmIdentifyLevelGroupRequest $req) 删除dspm数据识别分级组
 * @method Models\DeleteDspmIdentifyRuleResponse DeleteDspmIdentifyRule(Models\DeleteDspmIdentifyRuleRequest $req) 删除dspm数据识别数据项
 * @method Models\DeleteDspmPersonalIdentifyResponse DeleteDspmPersonalIdentify(Models\DeleteDspmPersonalIdentifyRequest $req) 删除Dspm个人身份id
 * @method Models\DeleteDspmRestoreLogListResponse DeleteDspmRestoreLogList(Models\DeleteDspmRestoreLogListRequest $req) 删除恢复日志
 * @method Models\DeleteDspmWhitelistStrategyResponse DeleteDspmWhitelistStrategy(Models\DeleteDspmWhitelistStrategyRequest $req) 删除Dspm白名单策略
 * @method Models\DeleteEDRRulesResponse DeleteEDRRules(Models\DeleteEDRRulesRequest $req) 删除EDR策略
 * @method Models\DeleteEDRScanTaskResponse DeleteEDRScanTask(Models\DeleteEDRScanTaskRequest $req) 删除已终止的扫描任务（物理删除主表及明细表）。只允许删除终态任务，只有创建者可操作。
 * @method Models\DeleteEdrLogCollectPathsResponse DeleteEdrLogCollectPaths(Models\DeleteEdrLogCollectPathsRequest $req) 批量删除EDR日志采集路径配置
 * @method Models\DeleteExposureAutoTagRuleResponse DeleteExposureAutoTagRule(Models\DeleteExposureAutoTagRuleRequest $req) 云边界自动打标-删除规则
 * @method Models\DeleteIaCAccessTokenResponse DeleteIaCAccessToken(Models\DeleteIaCAccessTokenRequest $req) 删除IaC检测接入Token
 * @method Models\DeleteIaCFileResponse DeleteIaCFile(Models\DeleteIaCFileRequest $req) 删除IaC检测文件
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) 本接口用于删除异地登录白名单规则。
 * @method Models\DeleteMachineClearHistoryResponse DeleteMachineClearHistory(Models\DeleteMachineClearHistoryRequest $req) 删除机器清理记录
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) 删除风险中心扫描任务
 * @method Models\DeleteVulWhitelistResponse DeleteVulWhitelist(Models\DeleteVulWhitelistRequest $req) 删除漏洞白名单
 * @method Models\DeleteWebhookPoliciesResponse DeleteWebhookPolicies(Models\DeleteWebhookPoliciesRequest $req) 批量删除通知策略。
 * @method Models\DeleteWebhookReceiversResponse DeleteWebhookReceivers(Models\DeleteWebhookReceiversRequest $req) 批量删除接收机器人。删除前会自动从所有引用了这些机器人的策略中移除引用关系。
 * @method Models\DescribeAIAgentAssetListResponse DescribeAIAgentAssetList(Models\DescribeAIAgentAssetListRequest $req) 获取 AI agent 资产列表
 * @method Models\DescribeAIAnalysisFileDownloadURLResponse DescribeAIAnalysisFileDownloadURL(Models\DescribeAIAnalysisFileDownloadURLRequest $req) 获取 AI 分析文件的临时下载链接。

传入文件的原始地址，返回带签名的临时下载链接，链接有效期为 2 小时。
 * @method Models\DescribeAIAnalysisHistoryResponse DescribeAIAnalysisHistory(Models\DescribeAIAnalysisHistoryRequest $req) 获取云安全AI助手历史分析记录
 * @method Models\DescribeAIAnalysisRecommendQuestionsResponse DescribeAIAnalysisRecommendQuestions(Models\DescribeAIAnalysisRecommendQuestionsRequest $req) 获取AI问答推荐问题
 * @method Models\DescribeAIAnalysisRobotInfoResponse DescribeAIAnalysisRobotInfo(Models\DescribeAIAnalysisRobotInfoRequest $req) 获取云安全AI助手基础信息
 * @method Models\DescribeAIAnalysisSMTPResponse DescribeAIAnalysisSMTP(Models\DescribeAIAnalysisSMTPRequest $req) 查询AI助手的SMTP邮箱接入信息
 * @method Models\DescribeAILinkSettingResponse DescribeAILinkSetting(Models\DescribeAILinkSettingRequest $req) 查询AI-Link智链引擎配置
 * @method Models\DescribeAIScheduleListResponse DescribeAIScheduleList(Models\DescribeAIScheduleListRequest $req) 查询AI 定时任务列表。

支持分页查询和状态过滤，返回定时任务列表及总条数。
 * @method Models\DescribeAISchedulePlanListResponse DescribeAISchedulePlanList(Models\DescribeAISchedulePlanListRequest $req) 查询AI 定时任务触发计划。

查询指定AI 定时任务在给定时间窗口内的未来触发计划列表。
 * @method Models\DescribeAIScheduleStatsResponse DescribeAIScheduleStats(Models\DescribeAIScheduleStatsRequest $req) 查询AI 定时任务统计信息。

返回当前用户的定时任务总数和当前运行中的任务数量。
 * @method Models\DescribeAIScheduleTaskDetailResponse DescribeAIScheduleTaskDetail(Models\DescribeAIScheduleTaskDetailRequest $req) 查询AI 定时任务执行详情。

根据任务 ID 查询指定执行任务的详细信息，包括执行状态、结果等。
 * @method Models\DescribeAIScheduleTaskListResponse DescribeAIScheduleTaskList(Models\DescribeAIScheduleTaskListRequest $req) 查询AI 定时任务执行列表。

查询AI 定时任务的历史执行记录，支持分页和按定时任务 ID 过滤。
 * @method Models\DescribeAKAnalysisDetailResponse DescribeAKAnalysisDetail(Models\DescribeAKAnalysisDetailRequest $req) 访问密钥告警记录AI分析结果详情
 * @method Models\DescribeAbTestUserResponse DescribeAbTestUser(Models\DescribeAbTestUserRequest $req) 判断用户是否灰度用户
 * @method Models\DescribeAbnormalCallRecordResponse DescribeAbnormalCallRecord(Models\DescribeAbnormalCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeAccessKeyAlarmResponse DescribeAccessKeyAlarm(Models\DescribeAccessKeyAlarmRequest $req) 访问密钥告警记录列表
 * @method Models\DescribeAccessKeyAlarmDetailResponse DescribeAccessKeyAlarmDetail(Models\DescribeAccessKeyAlarmDetailRequest $req) 访问密钥告警记录详情
 * @method Models\DescribeAccessKeyAssetResponse DescribeAccessKeyAsset(Models\DescribeAccessKeyAssetRequest $req) 获取用户访问密钥资产列表
 * @method Models\DescribeAccessKeyRiskResponse DescribeAccessKeyRisk(Models\DescribeAccessKeyRiskRequest $req) 访问密钥风险记录列表
 * @method Models\DescribeAccessKeyRiskDetailResponse DescribeAccessKeyRiskDetail(Models\DescribeAccessKeyRiskDetailRequest $req) 访问密钥风险记录详情
 * @method Models\DescribeAccessKeyUserDetailResponse DescribeAccessKeyUserDetail(Models\DescribeAccessKeyUserDetailRequest $req) 查询用户的账号详情
 * @method Models\DescribeAccessKeyUserListResponse DescribeAccessKeyUserList(Models\DescribeAccessKeyUserListRequest $req) 查询用户的账号列表
 * @method Models\DescribeAgentConfigSettingResponse DescribeAgentConfigSetting(Models\DescribeAgentConfigSettingRequest $req) 查询客户端配置设置（配置组），从DescribeAgentRunMode拆分出的独立接口
 * @method Models\DescribeAgentRunModeResponse DescribeAgentRunMode(Models\DescribeAgentRunModeRequest $req) 获取客户端运行模式和运行配置信息
 * @method Models\DescribeAgentRunPolicyResponse DescribeAgentRunPolicy(Models\DescribeAgentRunPolicyRequest $req) 查询客户端运行策略（策略组），从DescribeAgentRunMode拆分出的独立接口
 * @method Models\DescribeAlertListResponse DescribeAlertList(Models\DescribeAlertListRequest $req) 告警中心全量告警列表接口
 * @method Models\DescribeAssetDetailResponse DescribeAssetDetail(Models\DescribeAssetDetailRequest $req) 资产详情信息
 * @method Models\DescribeAssetFilterViewsResponse DescribeAssetFilterViews(Models\DescribeAssetFilterViewsRequest $req) 资产搜索视图
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) 资产信息
 * @method Models\DescribeAssetLastSyncTimeResponse DescribeAssetLastSyncTime(Models\DescribeAssetLastSyncTimeRequest $req) 资产最近同步时间
 * @method Models\DescribeAssetOverviewResponse DescribeAssetOverview(Models\DescribeAssetOverviewRequest $req) 资产概览统计
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) 查询云边界分析-暴露路径下主机节点的进程列表
 * @method Models\DescribeAssetRiskDetailResponse DescribeAssetRiskDetail(Models\DescribeAssetRiskDetailRequest $req) 资产风险详情
 * @method Models\DescribeAssetRiskListResponse DescribeAssetRiskList(Models\DescribeAssetRiskListRequest $req) 资产视角下云资源配置风险列表
 * @method Models\DescribeAssetSyncTaskStatusResponse DescribeAssetSyncTaskStatus(Models\DescribeAssetSyncTaskStatusRequest $req) 资产同步任务状态
 * @method Models\DescribeAssetTagAttributesResponse DescribeAssetTagAttributes(Models\DescribeAssetTagAttributesRequest $req) 获取资产标签属性
 * @method Models\DescribeAssetTagTreeResponse DescribeAssetTagTree(Models\DescribeAssetTagTreeRequest $req) 资产标签树结构数据
 * @method Models\DescribeAssetTagsResponse DescribeAssetTags(Models\DescribeAssetTagsRequest $req) 全部资产
 * @method Models\DescribeAssetTreeResponse DescribeAssetTree(Models\DescribeAssetTreeRequest $req) 资产树结构
 * @method Models\DescribeAssetViewVulRiskListResponse DescribeAssetViewVulRiskList(Models\DescribeAssetViewVulRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeAssumeRoleResponse DescribeAssumeRole(Models\DescribeAssumeRoleRequest $req) 查询是否绑定角色
 * @method Models\DescribeBanModeResponse DescribeBanMode(Models\DescribeBanModeRequest $req) 获取爆破阻断模式
 * @method Models\DescribeBanStatusResponse DescribeBanStatus(Models\DescribeBanStatusRequest $req) 获取阻断按钮状态
 * @method Models\DescribeBaselineAggregatedItemListResponse DescribeBaselineAggregatedItemList(Models\DescribeBaselineAggregatedItemListRequest $req) 获取检测项维度的聚合扫描结果列表，用于策略详情页“检测项”Tab 按检测项展示通过/未通过资产数。
 * @method Models\DescribeBaselineAggregatedPolicyListResponse DescribeBaselineAggregatedPolicyList(Models\DescribeBaselineAggregatedPolicyListRequest $req) 获取基线策略维度的聚合扫描结果列表，用于概览页“基线扫描策略”模块按策略展示通过/未通过情况。
 * @method Models\DescribeBaselineCalculatingStatisticsPolicyIDListResponse DescribeBaselineCalculatingStatisticsPolicyIDList(Models\DescribeBaselineCalculatingStatisticsPolicyIDListRequest $req) 查询当前处于“统计计算中”状态的策略 ID 列表，用于前端轮询判断扫描结果统计是否就绪。
 * @method Models\DescribeBaselineCategoryItemListResponse DescribeBaselineCategoryItemList(Models\DescribeBaselineCategoryItemListRequest $req) 获取分类检测项列表
 * @method Models\DescribeBaselineFixRecordListResponse DescribeBaselineFixRecordList(Models\DescribeBaselineFixRecordListRequest $req) 获取基线风险修复历史记录列表，用于“修复记录”页展示已修复的检测项与对应资产。
 * @method Models\DescribeBaselineItemRiskListResponse DescribeBaselineItemRiskList(Models\DescribeBaselineItemRiskListRequest $req) 获取检测项维度的风险记录列表。
 * @method Models\DescribeBaselineMainTaskItemListResponse DescribeBaselineMainTaskItemList(Models\DescribeBaselineMainTaskItemListRequest $req) 获取系统内置基线分类的检测项列表（父分类 → 子分类 → 内置检测项 ID 列表），用于策略编辑页选择基线检测项。
 * @method Models\DescribeBaselineMainTaskListResponse DescribeBaselineMainTaskList(Models\DescribeBaselineMainTaskListRequest $req) 获取扫描主任务列表，用于“任务记录”页展示一键扫描 / 周期扫描 / 分散扫描的历史记录及结果。
 * @method Models\DescribeBaselineOverviewResponse DescribeBaselineOverview(Models\DescribeBaselineOverviewRequest $req) 获取基线概览页的头部数据，含未通过检测项总数、近一年修复数、最近一次扫描时间、当前是否启用周期扫描等。
 * @method Models\DescribeBaselinePolicyCategoryListResponse DescribeBaselinePolicyCategoryList(Models\DescribeBaselinePolicyCategoryListRequest $req) 获取系统内置基线分类树（父分类 → 子分类 → 内置检测项 ID 列表），用于策略详情展示。
 * @method Models\DescribeBaselinePolicyItemListResponse DescribeBaselinePolicyItemList(Models\DescribeBaselinePolicyItemListRequest $req) 获取策略配置的检测项列表
 * @method Models\DescribeBaselinePolicyListResponse DescribeBaselinePolicyList(Models\DescribeBaselinePolicyListRequest $req) 获取基线策略列表，用于“周期计划管理”等列表页展示系统/自定义策略及其配置情况。
 * @method Models\DescribeBaselinePolicyNameExistAppidListResponse DescribeBaselinePolicyNameExistAppidList(Models\DescribeBaselinePolicyNameExistAppidListRequest $req) 获取基线策略名字存在的用户列表
 * @method Models\DescribeBaselineSubTaskListResponse DescribeBaselineSubTaskList(Models\DescribeBaselineSubTaskListRequest $req) 获取扫描子任务列表，用于任务详情页“资产维度”展示每台主机/每个集群的扫描状态与失败原因。
 * @method Models\DescribeBaselineSyncConfResponse DescribeBaselineSyncConf(Models\DescribeBaselineSyncConfRequest $req) 获取当前账号（管理员）的基线同步配置。仅集团管理员可调用，普通成员账号请使用 DescribeBaselineUserOtherConf。
 * @method Models\DescribeBaselineSystemCategoryListResponse DescribeBaselineSystemCategoryList(Models\DescribeBaselineSystemCategoryListRequest $req) 获取系统内置基线分类树（父分类 → 子分类 → 内置检测项 ID 列表），用于策略编辑页选择基线检测项。
 * @method Models\DescribeBaselineUserOtherConfResponse DescribeBaselineUserOtherConf(Models\DescribeBaselineUserOtherConfRequest $req) 获取当前账号的用户级基线配置。
 * @method Models\DescribeBaselineUserWeakPasswordConfResponse DescribeBaselineUserWeakPasswordConf(Models\DescribeBaselineUserWeakPasswordConfRequest $req) 获取当前账号的“用户弱口令”自定义字典（服务端解密后返回明文）。
 * @method Models\DescribeBruteAttackRulesResponse DescribeBruteAttackRules(Models\DescribeBruteAttackRulesRequest $req) 获取爆破破解规则
 * @method Models\DescribeBucketInvokeIpListResponse DescribeBucketInvokeIpList(Models\DescribeBucketInvokeIpListRequest $req) 查看存储桶调用源ip列表
 * @method Models\DescribeCFGRiskReportStatisticsResponse DescribeCFGRiskReportStatistics(Models\DescribeCFGRiskReportStatisticsRequest $req) 云资源配置检查报告风险统计
 * @method Models\DescribeCFGRiskStatisticsResponse DescribeCFGRiskStatistics(Models\DescribeCFGRiskStatisticsRequest $req) 获取扫描结果统计信息
 * @method Models\DescribeCFWAssetStatisticsResponse DescribeCFWAssetStatistics(Models\DescribeCFWAssetStatisticsRequest $req) 云防资产中心统计数据
 * @method Models\DescribeCLSLogIndexV3Response DescribeCLSLogIndexV3(Models\DescribeCLSLogIndexV3Request $req) 获取日志索引信息
 * @method Models\DescribeCLSLogListV3Response DescribeCLSLogListV3(Models\DescribeCLSLogListV3Request $req) 日志分析检索接口v3
 * @method Models\DescribeCSIPLicenseBindScheduleResponse DescribeCSIPLicenseBindSchedule(Models\DescribeCSIPLicenseBindScheduleRequest $req) 查询ModifyCSIPLicenseBinds返回的异步绑定任务进度。
 * @method Models\DescribeCSIPMalwareScanTaskDetailResponse DescribeCSIPMalwareScanTaskDetail(Models\DescribeCSIPMalwareScanTaskDetailRequest $req) CSIP 扫描任务主机详情接口
 * @method Models\DescribeCSIPMalwareScanTaskProgressResponse DescribeCSIPMalwareScanTaskProgress(Models\DescribeCSIPMalwareScanTaskProgressRequest $req) CSIP 手动扫描进度查询接口
 * @method Models\DescribeCSIPRiskStatisticsResponse DescribeCSIPRiskStatistics(Models\DescribeCSIPRiskStatisticsRequest $req) 获取风险中心风险概况示例
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) cvm详情
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) 获取cvm列表
 * @method Models\DescribeCWPExposePathResponse DescribeCWPExposePath(Models\DescribeCWPExposePathRequest $req) 查询云边界分析路径节点(主机专用)
 * @method Models\DescribeCWPExposuresResponse DescribeCWPExposures(Models\DescribeCWPExposuresRequest $req) 云边界分析资产列表(适用于主机资产)
 * @method Models\DescribeCWPLicenseBindScheduleResponse DescribeCWPLicenseBindSchedule(Models\DescribeCWPLicenseBindScheduleRequest $req) 查询授权绑定任务的进度
 * @method Models\DescribeCWPMachineDetailResponse DescribeCWPMachineDetail(Models\DescribeCWPMachineDetailRequest $req) 主机详情
 * @method Models\DescribeCWPMachineOsListResponse DescribeCWPMachineOsList(Models\DescribeCWPMachineOsListRequest $req) 查询可筛选操作系统列表.
 * @method Models\DescribeCWPMachinesResponse DescribeCWPMachines(Models\DescribeCWPMachinesRequest $req) 主机列表
 * @method Models\DescribeCWPOrderListResponse DescribeCWPOrderList(Models\DescribeCWPOrderListRequest $req) 查询资源订单列表
 * @method Models\DescribeCWPScanIpInfoResponse DescribeCWPScanIpInfo(Models\DescribeCWPScanIpInfoRequest $req) 查询腾讯云扫描IP信息
 * @method Models\DescribeCWPTaskDurationResponse DescribeCWPTaskDuration(Models\DescribeCWPTaskDurationRequest $req) 获取任务下发时长
 * @method Models\DescribeCallRecordResponse DescribeCallRecord(Models\DescribeCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeCheckViewRisksResponse DescribeCheckViewRisks(Models\DescribeCheckViewRisksRequest $req) 检查视角下云资源配置风险列表
 * @method Models\DescribeClbListenerListResponse DescribeClbListenerList(Models\DescribeClbListenerListRequest $req) 查询腾讯云指定CLB实例对应的监听器列表
 * @method Models\DescribeClbListenerRulesResponse DescribeClbListenerRules(Models\DescribeClbListenerRulesRequest $req) 查询腾讯云指定CLB实例对应的七层转发规则列表
 * @method Models\DescribeClbTargetsResponse DescribeClbTargets(Models\DescribeClbTargetsRequest $req) 查询CLB后端服务列表
 * @method Models\DescribeCloudAssetsResponse DescribeCloudAssets(Models\DescribeCloudAssetsRequest $req) 全部资产
 * @method Models\DescribeCloudFunctionListResponse DescribeCloudFunctionList(Models\DescribeCloudFunctionListRequest $req) 云函数列表
 * @method Models\DescribeClusterAssetListResponse DescribeClusterAssetList(Models\DescribeClusterAssetListRequest $req) 查询容器集群资产列表
 * @method Models\DescribeClusterAssetSyncTaskStatusResponse DescribeClusterAssetSyncTaskStatus(Models\DescribeClusterAssetSyncTaskStatusRequest $req) 查询集群资产同步任务状态
 * @method Models\DescribeClusterAssetsResponse DescribeClusterAssets(Models\DescribeClusterAssetsRequest $req) 集群列表
 * @method Models\DescribeClusterContainerAppListResponse DescribeClusterContainerAppList(Models\DescribeClusterContainerAppListRequest $req) 查询容器关联应用列表。通过容器ID获取关联的应用服务信息，支持分页。
 * @method Models\DescribeClusterContainerComponentListResponse DescribeClusterContainerComponentList(Models\DescribeClusterContainerComponentListRequest $req) 查询容器关联组件列表。通过容器ID获取关联的组件信息，支持分页。
 * @method Models\DescribeClusterContainerDetailResponse DescribeClusterContainerDetail(Models\DescribeClusterContainerDetailRequest $req) 查询集群容器详情。通过容器ID获取容器基本信息、镜像信息、挂载信息、网络信息以及关联节点信息。
 * @method Models\DescribeClusterContainerListResponse DescribeClusterContainerList(Models\DescribeClusterContainerListRequest $req) 查询集群容器列表
 * @method Models\DescribeClusterContainerPortListResponse DescribeClusterContainerPortList(Models\DescribeClusterContainerPortListRequest $req) 查询容器关联端口列表。通过容器ID获取关联的端口信息，支持分页。
 * @method Models\DescribeClusterContainerProcessListResponse DescribeClusterContainerProcessList(Models\DescribeClusterContainerProcessListRequest $req) 查询容器关联进程列表。通过容器ID获取关联的进程信息，支持按启动时间排序和分页。Filter.By支持StartTime；Filter.Order支持ASC/DESC。
 * @method Models\DescribeClusterContainerWebServiceListResponse DescribeClusterContainerWebServiceList(Models\DescribeClusterContainerWebServiceListRequest $req) 查询容器关联Web服务列表。通过容器ID获取关联的Web服务信息，支持分页。
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 查询集群详情
 * @method Models\DescribeClusterInstallCommandResponse DescribeClusterInstallCommand(Models\DescribeClusterInstallCommandRequest $req) 查询集群安装命令
 * @method Models\DescribeClusterListV2Response DescribeClusterListV2(Models\DescribeClusterListV2Request $req) 查询集群列表
 * @method Models\DescribeClusterNamespaceListResponse DescribeClusterNamespaceList(Models\DescribeClusterNamespaceListRequest $req) 查询集群命名空间列表
 * @method Models\DescribeClusterNodeListResponse DescribeClusterNodeList(Models\DescribeClusterNodeListRequest $req) 查询集群节点列表
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) 集群pod列表
 * @method Models\DescribeClusterPodDetailResponse DescribeClusterPodDetail(Models\DescribeClusterPodDetailRequest $req) 查询集群 Pod 详情。容器资产改版 A 类新接口，为 Pod 资产详情页主入口。入参仅 UniqueID；出参覆盖资产信息、所属集群、命名空间、节点、Workload、以及按四个风险等级分组的风险事件数和告警事件数。
 * @method Models\DescribeClusterPodListResponse DescribeClusterPodList(Models\DescribeClusterPodListRequest $req) 查询集群pod列表
 * @method Models\DescribeClusterServiceListResponse DescribeClusterServiceList(Models\DescribeClusterServiceListRequest $req) 查询集群service列表
 * @method Models\DescribeClusterSummaryResponse DescribeClusterSummary(Models\DescribeClusterSummaryRequest $req) 查询集群概览数据
 * @method Models\DescribeClusterSuperNodeInfoResponse DescribeClusterSuperNodeInfo(Models\DescribeClusterSuperNodeInfoRequest $req) 查询集群超级节点详情，返回基本信息（所属地域/可用区/资产最后更新时间/节点来源/子网/核数）与所属集群信息（集群名称/集群ID/集群状态/Kubernetes版本/Kubelet版本）。
 * @method Models\DescribeComplianceOverviewResponse DescribeComplianceOverview(Models\DescribeComplianceOverviewRequest $req) 云资源配置检测合规概览
 * @method Models\DescribeComplianceRiskListResponse DescribeComplianceRiskList(Models\DescribeComplianceRiskListRequest $req) 合规标准聚合视角下云资源配置风险列表
 * @method Models\DescribeComplianceStandardTermTreeResponse DescribeComplianceStandardTermTree(Models\DescribeComplianceStandardTermTreeRequest $req) 云资源配置检测标准章节条款树
 * @method Models\DescribeComplianceStatisticsResponse DescribeComplianceStatistics(Models\DescribeComplianceStatisticsRequest $req) 云资源配置检测规范分类统计
 * @method Models\DescribeConfigCheckRulesResponse DescribeConfigCheckRules(Models\DescribeConfigCheckRulesRequest $req) 云资源配置风险规则列表示例
 * @method Models\DescribeCosAccessPermissionResponse DescribeCosAccessPermission(Models\DescribeCosAccessPermissionRequest $req) 查看cos桶访问权限信息
 * @method Models\DescribeCosAccessPermissionsResponse DescribeCosAccessPermissions(Models\DescribeCosAccessPermissionsRequest $req) 查看对象存储访问权限列表
 * @method Models\DescribeCosActionListResponse DescribeCosActionList(Models\DescribeCosActionListRequest $req) 查看COS接口列表
 * @method Models\DescribeCosAkAssetResponse DescribeCosAkAsset(Models\DescribeCosAkAssetRequest $req) 查看ak资产列表信息
 * @method Models\DescribeCosAkInvokeIpListResponse DescribeCosAkInvokeIpList(Models\DescribeCosAkInvokeIpListRequest $req) 查看存储桶调用源ip列表
 * @method Models\DescribeCosAlarmListResponse DescribeCosAlarmList(Models\DescribeCosAlarmListRequest $req) 查看告警列表
 * @method Models\DescribeCosAlarmTrendDataResponse DescribeCosAlarmTrendData(Models\DescribeCosAlarmTrendDataRequest $req) 每日告警新增数据
 * @method Models\DescribeCosAssetResponse DescribeCosAsset(Models\DescribeCosAssetRequest $req) 查看cos资产列表
 * @method Models\DescribeCosAssetSyncTaskResponse DescribeCosAssetSyncTask(Models\DescribeCosAssetSyncTaskRequest $req) 获取对应appid对应的当前正在扫描的taskid
 * @method Models\DescribeCosAuditAppIdListResponse DescribeCosAuditAppIdList(Models\DescribeCosAuditAppIdListRequest $req) 查看该appid下已购买的appid集合
 * @method Models\DescribeCosAuditDictionaryListResponse DescribeCosAuditDictionaryList(Models\DescribeCosAuditDictionaryListRequest $req) 查询cos审计字典信息列表
 * @method Models\DescribeCosAuditPayInfoResponse DescribeCosAuditPayInfo(Models\DescribeCosAuditPayInfoRequest $req) 获取审计支付信息
 * @method Models\DescribeCosBucketBillingInfoResponse DescribeCosBucketBillingInfo(Models\DescribeCosBucketBillingInfoRequest $req) 获取存储桶计费信息
 * @method Models\DescribeCosBucketListResponse DescribeCosBucketList(Models\DescribeCosBucketListRequest $req) 获取存储桶信息
 * @method Models\DescribeCosBucketRiskResponse DescribeCosBucketRisk(Models\DescribeCosBucketRiskRequest $req) 查看风险资产视角
 * @method Models\DescribeCosIdentifyFileListResponse DescribeCosIdentifyFileList(Models\DescribeCosIdentifyFileListRequest $req) 查询cos文件数据识别结果列表
 * @method Models\DescribeCosInvokeUaResponse DescribeCosInvokeUa(Models\DescribeCosInvokeUaRequest $req) 查看调用记录关联的文件信息
 * @method Models\DescribeCosIpInvokeLogResponse DescribeCosIpInvokeLog(Models\DescribeCosIpInvokeLogRequest $req) 查看cos调用日志
 * @method Models\DescribeCosIpInvokeRecordFileResponse DescribeCosIpInvokeRecordFile(Models\DescribeCosIpInvokeRecordFileRequest $req) 查看调用记录关联的文件信息
 * @method Models\DescribeCosObjectScanTaskResponse DescribeCosObjectScanTask(Models\DescribeCosObjectScanTaskRequest $req) 查询cos风险文件扫描任务
 * @method Models\DescribeCosOverviewResponse DescribeCosOverview(Models\DescribeCosOverviewRequest $req) cos概览信息
 * @method Models\DescribeCosPolicyResponse DescribeCosPolicy(Models\DescribeCosPolicyRequest $req) 获取策略列表信息
 * @method Models\DescribeCosRiskActionListResponse DescribeCosRiskActionList(Models\DescribeCosRiskActionListRequest $req) 风险接口列表信息
 * @method Models\DescribeCosRiskEvidenceResponse DescribeCosRiskEvidence(Models\DescribeCosRiskEvidenceRequest $req) 查看风险证据以及描述
 * @method Models\DescribeCosRiskScanTaskResponse DescribeCosRiskScanTask(Models\DescribeCosRiskScanTaskRequest $req) 查看存储桶扫描任务详情
 * @method Models\DescribeCosRoleAccessPermissionResponse DescribeCosRoleAccessPermission(Models\DescribeCosRoleAccessPermissionRequest $req) 查看cos桶访问权限信息
 * @method Models\DescribeCosRoleAccessPermissionsResponse DescribeCosRoleAccessPermissions(Models\DescribeCosRoleAccessPermissionsRequest $req) 获取存储桶角色权限列表
 * @method Models\DescribeCosSourceIpResponse DescribeCosSourceIp(Models\DescribeCosSourceIpRequest $req) 调用源ip列表
 * @method Models\DescribeCspmShardConfigResponse DescribeCspmShardConfig(Models\DescribeCspmShardConfigRequest $req) 获取CSPM自动配额共享配置
 * @method Models\DescribeCustomAssetTagCountResponse DescribeCustomAssetTagCount(Models\DescribeCustomAssetTagCountRequest $req) 用户自定义 标签数量
 * @method Models\DescribeCustomRiskRuleDetailResponse DescribeCustomRiskRuleDetail(Models\DescribeCustomRiskRuleDetailRequest $req) 自定义风险规则配置详情列表示例
 * @method Models\DescribeCustomRiskRulesResponse DescribeCustomRiskRules(Models\DescribeCustomRiskRulesRequest $req) 自定义风险规则配置列表
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) db资产详情
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) 数据库资产列表
 * @method Models\DescribeDefaultSecurityScoreRuleResponse DescribeDefaultSecurityScoreRule(Models\DescribeDefaultSecurityScoreRuleRequest $req) 获取内置默认安全评分规则，用于重置自定义规则
 * @method Models\DescribeDomainAssetsResponse DescribeDomainAssets(Models\DescribeDomainAssetsRequest $req) 域名列表
 * @method Models\DescribeDspmAccessRecordResponse DescribeDspmAccessRecord(Models\DescribeDspmAccessRecordRequest $req) 查询Dspm访问记录
 * @method Models\DescribeDspmAccessTopologyAccountsResponse DescribeDspmAccessTopologyAccounts(Models\DescribeDspmAccessTopologyAccountsRequest $req) 查询Dspm访问拓扑账号列表
 * @method Models\DescribeDspmAccessTopologyAssetsResponse DescribeDspmAccessTopologyAssets(Models\DescribeDspmAccessTopologyAssetsRequest $req) 查询Dspm访问拓扑资产列表
 * @method Models\DescribeDspmAccessTopologyIpsResponse DescribeDspmAccessTopologyIps(Models\DescribeDspmAccessTopologyIpsRequest $req) 查询Dspm访问拓扑ip列表
 * @method Models\DescribeDspmApplyHistoryResponse DescribeDspmApplyHistory(Models\DescribeDspmApplyHistoryRequest $req) 查询Dspm申请历史
 * @method Models\DescribeDspmApplyOrderListResponse DescribeDspmApplyOrderList(Models\DescribeDspmApplyOrderListRequest $req) 查询Dspm申请单列表
 * @method Models\DescribeDspmApproveHistoryResponse DescribeDspmApproveHistory(Models\DescribeDspmApproveHistoryRequest $req) 查询Dspm审批历史
 * @method Models\DescribeDspmApproveOrderListResponse DescribeDspmApproveOrderList(Models\DescribeDspmApproveOrderListRequest $req) 查询Dspm审批单列表
 * @method Models\DescribeDspmAssetAccessTopologyResponse DescribeDspmAssetAccessTopology(Models\DescribeDspmAssetAccessTopologyRequest $req) 查询Dspm资产访问拓扑
 * @method Models\DescribeDspmAssetAccountIdentifyResponse DescribeDspmAssetAccountIdentify(Models\DescribeDspmAssetAccountIdentifyRequest $req) 查询Dspm资产账号身份信息
 * @method Models\DescribeDspmAssetAccountPresetPrivilegesResponse DescribeDspmAssetAccountPresetPrivileges(Models\DescribeDspmAssetAccountPresetPrivilegesRequest $req) 查询Dspm资产账号预设特权信息
 * @method Models\DescribeDspmAssetAccountRecycledPrivilegesResponse DescribeDspmAssetAccountRecycledPrivileges(Models\DescribeDspmAssetAccountRecycledPrivilegesRequest $req) 查询Dspm资产账号回收后特权信息
 * @method Models\DescribeDspmAssetAccountsResponse DescribeDspmAssetAccounts(Models\DescribeDspmAssetAccountsRequest $req) 查询Dspm资产账号列表
 * @method Models\DescribeDspmAssetDatabaseListResponse DescribeDspmAssetDatabaseList(Models\DescribeDspmAssetDatabaseListRequest $req) 查询资产数据库信息
 * @method Models\DescribeDspmAssetDatabasesResponse DescribeDspmAssetDatabases(Models\DescribeDspmAssetDatabasesRequest $req) 查询Dspm资产数据库列表
 * @method Models\DescribeDspmAssetFieldListResponse DescribeDspmAssetFieldList(Models\DescribeDspmAssetFieldListRequest $req) 查询dspm资产字段信息
 * @method Models\DescribeDspmAssetFieldSamplesResponse DescribeDspmAssetFieldSamples(Models\DescribeDspmAssetFieldSamplesRequest $req) 查询dspm资产字段样本值
 * @method Models\DescribeDspmAssetIdentifyInfoListResponse DescribeDspmAssetIdentifyInfoList(Models\DescribeDspmAssetIdentifyInfoListRequest $req) 查询dspm资产数据识别信息列表
 * @method Models\DescribeDspmAssetIdsResponse DescribeDspmAssetIds(Models\DescribeDspmAssetIdsRequest $req) 查询Dspm资产id列表
 * @method Models\DescribeDspmAssetLoginCredentialResponse DescribeDspmAssetLoginCredential(Models\DescribeDspmAssetLoginCredentialRequest $req) 查询Dspm资产登录凭据
 * @method Models\DescribeDspmAssetSecurityAnalyseStatusResponse DescribeDspmAssetSecurityAnalyseStatus(Models\DescribeDspmAssetSecurityAnalyseStatusRequest $req) 查询Dspm资产安全分析状态
 * @method Models\DescribeDspmAssetSupportedPrivilegesResponse DescribeDspmAssetSupportedPrivileges(Models\DescribeDspmAssetSupportedPrivilegesRequest $req) 查询Dspm资产支持的权限
 * @method Models\DescribeDspmAssetTableListResponse DescribeDspmAssetTableList(Models\DescribeDspmAssetTableListRequest $req) 查询资产表信息
 * @method Models\DescribeDspmAssetsResponse DescribeDspmAssets(Models\DescribeDspmAssetsRequest $req) 查询Dspm资产列表
 * @method Models\DescribeDspmBackupLogListResponse DescribeDspmBackupLogList(Models\DescribeDspmBackupLogListRequest $req) 查询备份日志列表
 * @method Models\DescribeDspmBackupSettingResponse DescribeDspmBackupSetting(Models\DescribeDspmBackupSettingRequest $req) 查询日志备份配置
 * @method Models\DescribeDspmDictionaryListResponse DescribeDspmDictionaryList(Models\DescribeDspmDictionaryListRequest $req) 查询dspm字典信息列表
 * @method Models\DescribeDspmExportTaskResponse DescribeDspmExportTask(Models\DescribeDspmExportTaskRequest $req) 查询导出任务
 * @method Models\DescribeDspmIdentifyCategoryListResponse DescribeDspmIdentifyCategoryList(Models\DescribeDspmIdentifyCategoryListRequest $req) 查询dspm数据识别分类列表
 * @method Models\DescribeDspmIdentifyComplianceCategoryRuleListResponse DescribeDspmIdentifyComplianceCategoryRuleList(Models\DescribeDspmIdentifyComplianceCategoryRuleListRequest $req) 查询dspm数据识别模板分类关联数据项列表
 * @method Models\DescribeDspmIdentifyComplianceGroupDetailResponse DescribeDspmIdentifyComplianceGroupDetail(Models\DescribeDspmIdentifyComplianceGroupDetailRequest $req) 查询dspm识别模板详情
 * @method Models\DescribeDspmIdentifyComplianceGroupListResponse DescribeDspmIdentifyComplianceGroupList(Models\DescribeDspmIdentifyComplianceGroupListRequest $req) 查询dspm数据识别模板列表
 * @method Models\DescribeDspmIdentifyDistributionStatisticsResponse DescribeDspmIdentifyDistributionStatistics(Models\DescribeDspmIdentifyDistributionStatisticsRequest $req) 查询dspm数据识别分布统计
 * @method Models\DescribeDspmIdentifyIdListResponse DescribeDspmIdentifyIdList(Models\DescribeDspmIdentifyIdListRequest $req) 查询Dspm身份id列表
 * @method Models\DescribeDspmIdentifyInfoResponse DescribeDspmIdentifyInfo(Models\DescribeDspmIdentifyInfoRequest $req) 查询Dspm身份信息
 * @method Models\DescribeDspmIdentifyInfoListResponse DescribeDspmIdentifyInfoList(Models\DescribeDspmIdentifyInfoListRequest $req) 查询Dspm身份信息列表
 * @method Models\DescribeDspmIdentifyLevelGroupListResponse DescribeDspmIdentifyLevelGroupList(Models\DescribeDspmIdentifyLevelGroupListRequest $req) 查询dspm数据识别分级组列表
 * @method Models\DescribeDspmIdentifyRuleDetailResponse DescribeDspmIdentifyRuleDetail(Models\DescribeDspmIdentifyRuleDetailRequest $req) 查询dspm数据识别数据项详情
 * @method Models\DescribeDspmIdentifyRuleListResponse DescribeDspmIdentifyRuleList(Models\DescribeDspmIdentifyRuleListRequest $req) 查询dspm数据识别数据项列表
 * @method Models\DescribeDspmIdentifyRuleTestResultResponse DescribeDspmIdentifyRuleTestResult(Models\DescribeDspmIdentifyRuleTestResultRequest $req) 查询dspm数据识别数据项验证结果
 * @method Models\DescribeDspmLogListResponse DescribeDspmLogList(Models\DescribeDspmLogListRequest $req) 查询日志列表信息
 * @method Models\DescribeDspmPayInfoResponse DescribeDspmPayInfo(Models\DescribeDspmPayInfoRequest $req) 获取已购Dspm订单信息
 * @method Models\DescribeDspmPersonApplyHistoryResponse DescribeDspmPersonApplyHistory(Models\DescribeDspmPersonApplyHistoryRequest $req) 查询Dspm访客申请记录
 * @method Models\DescribeDspmPersonalIdentifyListResponse DescribeDspmPersonalIdentifyList(Models\DescribeDspmPersonalIdentifyListRequest $req) 查询Dspm个人身份信息列表
 * @method Models\DescribeDspmRiskResponse DescribeDspmRisk(Models\DescribeDspmRiskRequest $req) 查询Dspm风险记录
 * @method Models\DescribeDspmRiskDetailResponse DescribeDspmRiskDetail(Models\DescribeDspmRiskDetailRequest $req) 查询Dspm风险详情
 * @method Models\DescribeDspmRiskStrategyResponse DescribeDspmRiskStrategy(Models\DescribeDspmRiskStrategyRequest $req) 查询Dspm风险策略
 * @method Models\DescribeDspmRiskStrategyGroupResponse DescribeDspmRiskStrategyGroup(Models\DescribeDspmRiskStrategyGroupRequest $req) 查询Dspm风险分组策略
 * @method Models\DescribeDspmRiskTendencyResponse DescribeDspmRiskTendency(Models\DescribeDspmRiskTendencyRequest $req) 查询Dspm风险趋势
 * @method Models\DescribeDspmStatisticsResponse DescribeDspmStatistics(Models\DescribeDspmStatisticsRequest $req) 查询Dspm统计信息
 * @method Models\DescribeDspmSupportedAssetTypeResponse DescribeDspmSupportedAssetType(Models\DescribeDspmSupportedAssetTypeRequest $req) 查询Dspm支持的资产类型信息
 * @method Models\DescribeDspmSyncAssetsStatusResponse DescribeDspmSyncAssetsStatus(Models\DescribeDspmSyncAssetsStatusRequest $req) 查询Dspm同步资产状态
 * @method Models\DescribeDspmSyncUsersStatusResponse DescribeDspmSyncUsersStatus(Models\DescribeDspmSyncUsersStatusRequest $req) 查询Dspm同步用户状态
 * @method Models\DescribeDspmWhitelistStrategyResponse DescribeDspmWhitelistStrategy(Models\DescribeDspmWhitelistStrategyRequest $req) 查询Dspm白名单策略
 * @method Models\DescribeDynamicAssetsResponse DescribeDynamicAssets(Models\DescribeDynamicAssetsRequest $req) 指定资产类型列表
 * @method Models\DescribeEDRRuleListResponse DescribeEDRRuleList(Models\DescribeEDRRuleListRequest $req) 获取EDR策略列表
 * @method Models\DescribeEDRScanRecordListResponse DescribeEDRScanRecordList(Models\DescribeEDRScanRecordListRequest $req) 查询扫描任务列表。Filter.Filters支持Name：Keyword(模糊OperatorType=9)、ScanType(MANUAL/CYCLE)、TaskType(HOST/CONTAINER)、Status(WAIT/SCANNING/FINISHED/FAILED/CANCELED)、AppId(账号)。
 * @method Models\DescribeEDRScanTaskDetailResponse DescribeEDRScanTaskDetail(Models\DescribeEDRScanTaskDetailRequest $req) 查询扫描任务详情。Filter.Filters支持Name：Status（资产扫描状态，OperatorType=7 IN匹配，取值WAIT/SCANNING/FINISHED/FAILED）。
 * @method Models\DescribeEdrAlertCountForAssetResponse DescribeEdrAlertCountForAsset(Models\DescribeEdrAlertCountForAssetRequest $req) 获取EDR告警数量统计，供资产模块调用。根据传入的MemberId和InstanceIDs，查询EDR告警表并返回告警记录条数信息。当InstanceIDs为空时返回汇总统计，非空时按InstanceIDs粒度分别返回统计。
 * @method Models\DescribeEdrAlertCountForContainerResponse DescribeEdrAlertCountForContainer(Models\DescribeEdrAlertCountForContainerRequest $req) 容器场景告警数量统计
 * @method Models\DescribeEdrAlertInfoResponse DescribeEdrAlertInfo(Models\DescribeEdrAlertInfoRequest $req) 获取EDR告警详情，包含告警内容JSON、资产富化、情报富化等完整信息
 * @method Models\DescribeEdrAlertListResponse DescribeEdrAlertList(Models\DescribeEdrAlertListRequest $req) 获取EDR告警列表
 * @method Models\DescribeEdrAlertMultiAttackStagesResponse DescribeEdrAlertMultiAttackStages(Models\DescribeEdrAlertMultiAttackStagesRequest $req) EDR告警多攻击阶段查询
 * @method Models\DescribeEdrAlertSummaryResponse DescribeEdrAlertSummary(Models\DescribeEdrAlertSummaryRequest $req) 获取EDR告警统计
 * @method Models\DescribeEdrAlertThreatTagsResponse DescribeEdrAlertThreatTags(Models\DescribeEdrAlertThreatTagsRequest $req) EDR告警标签批量查询
 * @method Models\DescribeEdrExcludeNetworkSegmentsResponse DescribeEdrExcludeNetworkSegments(Models\DescribeEdrExcludeNetworkSegmentsRequest $req) 查询EDR日志采集例外网段配置，添加至例外名单的网段，其TCP日志将不被采集。如果用户未配置过，则返回系统推荐的默认网段
 * @method Models\DescribeEdrExportJobDownloadURLResponse DescribeEdrExportJobDownloadURL(Models\DescribeEdrExportJobDownloadURLRequest $req) 获取EDR导出下载链接
 * @method Models\DescribeEdrExportJobListResponse DescribeEdrExportJobList(Models\DescribeEdrExportJobListRequest $req) 导出EDR任务列表
 * @method Models\DescribeEdrLogCollectPathsResponse DescribeEdrLogCollectPaths(Models\DescribeEdrLogCollectPathsRequest $req) 查询采集路径配置
 * @method Models\DescribeExportJobDownloadURLResponse DescribeExportJobDownloadURL(Models\DescribeExportJobDownloadURLRequest $req) 导出任务结果下载URL
 * @method Models\DescribeExportJobManageListResponse DescribeExportJobManageList(Models\DescribeExportJobManageListRequest $req) 导出任务列表
 * @method Models\DescribeExposeAssetCategoryResponse DescribeExposeAssetCategory(Models\DescribeExposeAssetCategoryRequest $req) 云边界分析资产分类
 * @method Models\DescribeExposePathResponse DescribeExposePath(Models\DescribeExposePathRequest $req) 查询云边界分析路径节点
 * @method Models\DescribeExposeRiskStatisticsResponse DescribeExposeRiskStatistics(Models\DescribeExposeRiskStatisticsRequest $req) 云边界风险待治理风险
 * @method Models\DescribeExposeRisksResponse DescribeExposeRisks(Models\DescribeExposeRisksRequest $req) 云边界待处理风险列表
 * @method Models\DescribeExposeRulesResponse DescribeExposeRules(Models\DescribeExposeRulesRequest $req) 边界规则列表
 * @method Models\DescribeExposureAutoTagAttributeResponse DescribeExposureAutoTagAttribute(Models\DescribeExposureAutoTagAttributeRequest $req) 云边界自动打标-规则属性
 * @method Models\DescribeExposureAutoTagRulesResponse DescribeExposureAutoTagRules(Models\DescribeExposureAutoTagRulesRequest $req) 云边界自动打标-规则列表
 * @method Models\DescribeExposureTrendResponse DescribeExposureTrend(Models\DescribeExposureTrendRequest $req) 查询互联网暴露周期数量趋势统计信息
 * @method Models\DescribeExposuresResponse DescribeExposures(Models\DescribeExposuresRequest $req) 云边界分析资产列表
 * @method Models\DescribeGatewayAssetsResponse DescribeGatewayAssets(Models\DescribeGatewayAssetsRequest $req) 获取网关列表
 * @method Models\DescribeHighBaseLineRiskListResponse DescribeHighBaseLineRiskList(Models\DescribeHighBaseLineRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的高危基线风险列表
 * @method Models\DescribeHostKBRiskListResponse DescribeHostKBRiskList(Models\DescribeHostKBRiskListRequest $req) 获取主机kb风险列表
 * @method Models\DescribeHostVulItemVPRInfoResponse DescribeHostVulItemVPRInfo(Models\DescribeHostVulItemVPRInfoRequest $req) 获取主机漏洞VPR信息
 * @method Models\DescribeHostVulOverviewResponse DescribeHostVulOverview(Models\DescribeHostVulOverviewRequest $req) 获取主机漏洞概览
 * @method Models\DescribeHostVulRiskListResponse DescribeHostVulRiskList(Models\DescribeHostVulRiskListRequest $req) 获取主机漏洞风险列表
 * @method Models\DescribeIaCFileListResponse DescribeIaCFileList(Models\DescribeIaCFileListRequest $req) 获取IaC检测文件列表
 * @method Models\DescribeIaCFileOverviewResponse DescribeIaCFileOverview(Models\DescribeIaCFileOverviewRequest $req) 获取IaC检测文件概览
 * @method Models\DescribeIaCFileReportResponse DescribeIaCFileReport(Models\DescribeIaCFileReportRequest $req) 获取IaC检测文件报告
 * @method Models\DescribeIaCTokenListResponse DescribeIaCTokenList(Models\DescribeIaCTokenListRequest $req) 获取IaC检测接入Token列表
 * @method Models\DescribeIpInvokeRecordResponse DescribeIpInvokeRecord(Models\DescribeIpInvokeRecordRequest $req) 对象存储异常检测调用记录信息
 * @method Models\DescribeIpInvokeRecordDetailResponse DescribeIpInvokeRecordDetail(Models\DescribeIpInvokeRecordDetailRequest $req) ip访问列表详情信息
 * @method Models\DescribeKBDetailResponse DescribeKBDetail(Models\DescribeKBDetailRequest $req) 根据用户输入的 KB 内部 ID 查询单个 Windows KB 补丁的详情信息，返回 KB 基本信息、发布时间、是否需要重启，以及该 KB 关联的漏洞列表。
 * @method Models\DescribeKBUpdatableMachineListResponse DescribeKBUpdatableMachineList(Models\DescribeKBUpdatableMachineListRequest $req) 查询指定KB补丁可以更新的主机列表。用于Windows系统补丁修复场景，在用户提交KB补丁更新任务前，查询哪些主机缺少该补丁且支持自动更新。
 * @method Models\DescribeKeySandboxCredentialResponse DescribeKeySandboxCredential(Models\DescribeKeySandboxCredentialRequest $req) 查询凭证详情，返回凭证元数据和打码后的凭据数据。access类型返回Access数组（Key原文、Value打码），sts类型返回STS对象（System原文、SecretID和SecretKey打码）
 * @method Models\DescribeKeySandboxCredentialListResponse DescribeKeySandboxCredentialList(Models\DescribeKeySandboxCredentialListRequest $req) 查询凭证列表
 * @method Models\DescribeLastScanTaskInfoResponse DescribeLastScanTaskInfo(Models\DescribeLastScanTaskInfoRequest $req) 获取最近一次立即检测任务信息
 * @method Models\DescribeLicenseStatusResponse DescribeLicenseStatus(Models\DescribeLicenseStatusRequest $req) 查询当前账号下所有有效授权的汇总状态，按计费项分组返回总数、已用、剩余及到期时间，同时返回自动加购开关状态和合并剩余解绑次数。输出顺序固定为：旗舰版 → 专业版 → RASP → 其他。
 * @method Models\DescribeLighthouseFirewallRulesResponse DescribeLighthouseFirewallRules(Models\DescribeLighthouseFirewallRulesRequest $req) 查询轻量应用服务器防火墙规则
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) 查询clb监听器列表
 * @method Models\DescribeLoginTypeGlobalConfResponse DescribeLoginTypeGlobalConf(Models\DescribeLoginTypeGlobalConfRequest $req) 获取防卸载全局配置
 * @method Models\DescribeLoginTypeHostResponse DescribeLoginTypeHost(Models\DescribeLoginTypeHostRequest $req) 获取扫码登录主机列表
 * @method Models\DescribeLoginWhiteCombinedListResponse DescribeLoginWhiteCombinedList(Models\DescribeLoginWhiteCombinedListRequest $req) 获取异地登录白名单合并后列表
 * @method Models\DescribeLoginWhiteHostListResponse DescribeLoginWhiteHostList(Models\DescribeLoginWhiteHostListRequest $req) 查询合并后白名单机器列表
 * @method Models\DescribeMachineClearHistoryResponse DescribeMachineClearHistory(Models\DescribeMachineClearHistoryRequest $req) 查询机器清理历史记录
 * @method Models\DescribeMachineGeneralResponse DescribeMachineGeneral(Models\DescribeMachineGeneralRequest $req) 查询主机概览信息
 * @method Models\DescribeMachineLoginTypeResponse DescribeMachineLoginType(Models\DescribeMachineLoginTypeRequest $req) 获取主机登录方式
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) 查询文件查杀定时扫描配置
 * @method Models\DescribeMandatoryVulSetResponse DescribeMandatoryVulSet(Models\DescribeMandatoryVulSetRequest $req) 展示企业必修漏洞情报
 * @method Models\DescribeModifyMachinesLoginTypeTasksResponse DescribeModifyMachinesLoginTypeTasks(Models\DescribeModifyMachinesLoginTypeTasksRequest $req) 获取批量修改主机登录方式任务列表
 * @method Models\DescribeMultiCloudAssetCountResponse DescribeMultiCloudAssetCount(Models\DescribeMultiCloudAssetCountRequest $req) 获取多云（腾讯云、阿里云、AWS、华为云、Azure 等）接入的资产总数及各云厂商资产数量明细
 * @method Models\DescribeNFSScanConfResponse DescribeNFSScanConf(Models\DescribeNFSScanConfRequest $req) 获取NFS扫描全局配置
 * @method Models\DescribeNFSScanHostResponse DescribeNFSScanHost(Models\DescribeNFSScanHostRequest $req) 获取扫码登录主机列表
 * @method Models\DescribeNICAssetsResponse DescribeNICAssets(Models\DescribeNICAssetsRequest $req) 获取网卡列表
 * @method Models\DescribeNatRulesResponse DescribeNatRules(Models\DescribeNatRulesRequest $req) 查询腾讯云nat网关实例对应的NAT策略
 * @method Models\DescribeNetAttackSettingResponse DescribeNetAttackSetting(Models\DescribeNetAttackSettingRequest $req) 查询网络攻击检测开关及资产范围配置
 * @method Models\DescribeNotifyAgentOfflineDurationResponse DescribeNotifyAgentOfflineDuration(Models\DescribeNotifyAgentOfflineDurationRequest $req) 查询客户端离线时长
 * @method Models\DescribeNotifyAssetConfigResponse DescribeNotifyAssetConfig(Models\DescribeNotifyAssetConfigRequest $req) 获取通知资产范围配置
 * @method Models\DescribeNotifySettingResponse DescribeNotifySetting(Models\DescribeNotifySettingRequest $req) 获取通知设置
 * @method Models\DescribeNotifySettingAlertResponse DescribeNotifySettingAlert(Models\DescribeNotifySettingAlertRequest $req) 获取告警中心通知高级配置
 * @method Models\DescribeOrganizationInfoResponse DescribeOrganizationInfo(Models\DescribeOrganizationInfoRequest $req) 查询集团账号详情
 * @method Models\DescribeOrganizationUserInfoResponse DescribeOrganizationUserInfo(Models\DescribeOrganizationUserInfoRequest $req) 查询集团账号用户列表
 * @method Models\DescribeOtherCloudAssetsResponse DescribeOtherCloudAssets(Models\DescribeOtherCloudAssetsRequest $req) 资产列表
 * @method Models\DescribePodContainerListResponse DescribePodContainerList(Models\DescribePodContainerListRequest $req) 查询 Pod 关联容器列表
 * @method Models\DescribePolicyHitDataResponse DescribePolicyHitData(Models\DescribePolicyHitDataRequest $req) 按日期查看策略命中详情
 * @method Models\DescribePortDetectListResponse DescribePortDetectList(Models\DescribePortDetectListRequest $req) 端口探测列表
 * @method Models\DescribePortScanTaskCountResponse DescribePortScanTaskCount(Models\DescribePortScanTaskCountRequest $req) 查询当前账号下端口扫描任务次数
 * @method Models\DescribePreventUninstallGlobalConfResponse DescribePreventUninstallGlobalConf(Models\DescribePreventUninstallGlobalConfRequest $req) 获取防卸载全局配置
 * @method Models\DescribePreventUninstallHostResponse DescribePreventUninstallHost(Models\DescribePreventUninstallHostRequest $req) 获取防卸载主机列表
 * @method Models\DescribeProcessDaemonGlobalConfResponse DescribeProcessDaemonGlobalConf(Models\DescribeProcessDaemonGlobalConfRequest $req) 获取进程防护全局配置
 * @method Models\DescribeProcessDaemonHostResponse DescribeProcessDaemonHost(Models\DescribeProcessDaemonHostRequest $req) 获取进程守护主机列表
 * @method Models\DescribePublicCloudAssetsResponse DescribePublicCloudAssets(Models\DescribePublicCloudAssetsRequest $req) 公网资产
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) ip公网列表
 * @method Models\DescribeRaspLicenseListResponse DescribeRaspLicenseList(Models\DescribeRaspLicenseListRequest $req) 查询应用防护授权列表
 * @method Models\DescribeRepositoryImageAssetsResponse DescribeRepositoryImageAssets(Models\DescribeRepositoryImageAssetsRequest $req) 仓库镜像列表
 * @method Models\DescribeReverseShellSystemPolicyConfigResponse DescribeReverseShellSystemPolicyConfig(Models\DescribeReverseShellSystemPolicyConfigRequest $req) 查询反弹Shell内网告警与资产范围配置
 * @method Models\DescribeRiskBucketListResponse DescribeRiskBucketList(Models\DescribeRiskBucketListRequest $req) 查看风险关联的存储桶信息
 * @method Models\DescribeRiskCallRecordResponse DescribeRiskCallRecord(Models\DescribeRiskCallRecordRequest $req) 获取风险调用记录列表
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) 获取资产视角的配置风险列表
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) 获取资产视角的端口风险列表
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) 获取资产视角的弱口令风险列表
 * @method Models\DescribeRiskCenterCFGViewCFGRiskListResponse DescribeRiskCenterCFGViewCFGRiskList(Models\DescribeRiskCenterCFGViewCFGRiskListRequest $req) 获取配置视角的配置风险列表
 * @method Models\DescribeRiskCenterPortViewPortRiskListResponse DescribeRiskCenterPortViewPortRiskList(Models\DescribeRiskCenterPortViewPortRiskListRequest $req) 获取端口视角的端口风险列表
 * @method Models\DescribeRiskCenterRiskTrendAnalysisResponse DescribeRiskCenterRiskTrendAnalysis(Models\DescribeRiskCenterRiskTrendAnalysisRequest $req) 获取风险趋势分析示例
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) 获取风险服务列表
 * @method Models\DescribeRiskCenterVULViewVULRiskListResponse DescribeRiskCenterVULViewVULRiskList(Models\DescribeRiskCenterVULViewVULRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) 获取内容风险列表
 * @method Models\DescribeRiskDetailListResponse DescribeRiskDetailList(Models\DescribeRiskDetailListRequest $req) 风险详情列表示例
 * @method Models\DescribeRiskItemListResponse DescribeRiskItemList(Models\DescribeRiskItemListRequest $req) 获取风险项视角列表
 * @method Models\DescribeRiskRuleDetailResponse DescribeRiskRuleDetail(Models\DescribeRiskRuleDetailRequest $req) 查询风险规则详情示例
 * @method Models\DescribeRiskRulesResponse DescribeRiskRules(Models\DescribeRiskRulesRequest $req) 高级配置风险规则列表示例
 * @method Models\DescribeRiskScanCronConfigResponse DescribeRiskScanCronConfig(Models\DescribeRiskScanCronConfigRequest $req) 获取风险扫描周期计划
 * @method Models\DescribeRiskTrendDataResponse DescribeRiskTrendData(Models\DescribeRiskTrendDataRequest $req) 查看风险趋势图
 * @method Models\DescribeSCFAliasListResponse DescribeSCFAliasList(Models\DescribeSCFAliasListRequest $req) 查询指定 SCF 函数下的别名列表。
 * @method Models\DescribeSCFFunctionListResponse DescribeSCFFunctionList(Models\DescribeSCFFunctionListRequest $req) 查询指定命名空间下的 SCF 函数列表，仅返回 Event 触发器类型的函数。
 * @method Models\DescribeSCFFunctionVersionListResponse DescribeSCFFunctionVersionList(Models\DescribeSCFFunctionVersionListRequest $req) 查询指定 SCF 函数下的版本列表。
 * @method Models\DescribeSCFNamespaceListResponse DescribeSCFNamespaceList(Models\DescribeSCFNamespaceListRequest $req) 查询当前用户在指定地域下的 SCF（云函数）命名空间列表。
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) 获取扫描报告列表
 * @method Models\DescribeScanStatisticResponse DescribeScanStatistic(Models\DescribeScanStatisticRequest $req) 查询云边界分析扫描结果统计信息
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取扫描任务列表
 * @method Models\DescribeScanTaskRecordListResponse DescribeScanTaskRecordList(Models\DescribeScanTaskRecordListRequest $req) 查询扫描任务记录列表
 * @method Models\DescribeScfCustomDomainEndpointsResponse DescribeScfCustomDomainEndpoints(Models\DescribeScfCustomDomainEndpointsRequest $req) 查询腾讯云SCF自定义域名端点列表
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) 立体防护中心查询漏洞信息
 * @method Models\DescribeSecurityGroupPolicyResponse DescribeSecurityGroupPolicy(Models\DescribeSecurityGroupPolicyRequest $req) 查询指定安全组ID对应安全组规则
 * @method Models\DescribeSecurityRiskTrendResponse DescribeSecurityRiskTrend(Models\DescribeSecurityRiskTrendRequest $req) 获取安全风险趋势，返回按维度分组的每日风险数量
 * @method Models\DescribeSecurityScoreOverviewResponse DescribeSecurityScoreOverview(Models\DescribeSecurityScoreOverviewRequest $req) 获取安全评分概览，实时计算各维度和子项扣分情况
 * @method Models\DescribeSecurityScoreRuleResponse DescribeSecurityScoreRule(Models\DescribeSecurityScoreRuleRequest $req) 获取当前账号的安全评分规则，无自定义则返回内置默认规则
 * @method Models\DescribeSkillScanPayInfoResponse DescribeSkillScanPayInfo(Models\DescribeSkillScanPayInfoRequest $req) 查询 Skill 安全检测计费信息，包括订单状态、总配额、已消耗配额、到期时间、支付模式等。无订单时返回零值（仅含 TimeNow 和 BetaEndTime）。试用订单通过 ModifyTrialStatus(Module=9) 领取，正式订单通过计费系统创建。
 * @method Models\DescribeSkillScanResultResponse DescribeSkillScanResult(Models\DescribeSkillScanResultRequest $req) 查询 Skill 安全检测结果。调用 CreateSkillScan 成功后使用返回的 ContentHash + EngineVersion 轮询本接口获取结果。上传成功后建议5分钟后首次轮询，如未检测完成之后每隔1分钟轮询一次。响应通过 Status 字段区分四种状态：检测完成（SUCCESS）、检测中（SCANNING）、无记录（NOT_FOUND）、检测失败（FAILED）。注意：检测结果保留90天，超期后将返回 NOT_FOUND。
 * @method Models\DescribeSourceIPAssetResponse DescribeSourceIPAsset(Models\DescribeSourceIPAssetRequest $req) 获取用户访问密钥资产列表（源IP视角）
 * @method Models\DescribeSubUserInfoResponse DescribeSubUserInfo(Models\DescribeSubUserInfoRequest $req) 查询集团的子账号列表
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) 获取子网列表
 * @method Models\DescribeTagRuleAssetsResponse DescribeTagRuleAssets(Models\DescribeTagRuleAssetsRequest $req) 打标策略生效资产列表
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) 获取任务扫描报告列表
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) 获取报告下载的临时链接
 * @method Models\DescribeTaskPredictCostQuotaResponse DescribeTaskPredictCostQuota(Models\DescribeTaskPredictCostQuotaRequest $req) 获取扫描预消耗配额
 * @method Models\DescribeTopAttackInfoResponse DescribeTopAttackInfo(Models\DescribeTopAttackInfoRequest $req) 查询TOP攻击信息
 * @method Models\DescribeUebaBehaviorSummaryResponse DescribeUebaBehaviorSummary(Models\DescribeUebaBehaviorSummaryRequest $req) 查询用户行为分析的行为概览
 * @method Models\DescribeUebaRuleResponse DescribeUebaRule(Models\DescribeUebaRuleRequest $req) 查询用户行为分析策略列表
 * @method Models\DescribeUebaUserSummaryResponse DescribeUebaUserSummary(Models\DescribeUebaUserSummaryRequest $req) 获取用户行为分析模块的用户概览
 * @method Models\DescribeUserCSPMInfoListResponse DescribeUserCSPMInfoList(Models\DescribeUserCSPMInfoListRequest $req) 获取账号CSPM信息
 * @method Models\DescribeUserCallRecordResponse DescribeUserCallRecord(Models\DescribeUserCallRecordRequest $req) 获取账号调用记录列表
 * @method Models\DescribeUserDspmInfoListResponse DescribeUserDspmInfoList(Models\DescribeUserDspmInfoListRequest $req) 获取账号dspm信息列表
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 用户CSPM配额信息
 * @method Models\DescribeVULListResponse DescribeVULList(Models\DescribeVULListRequest $req) 新安全中心风险中心-漏洞列表
 * @method Models\DescribeVULRiskAdvanceCFGListResponse DescribeVULRiskAdvanceCFGList(Models\DescribeVULRiskAdvanceCFGListRequest $req) 查询漏洞风险高级配置
 * @method Models\DescribeVULRiskDetailResponse DescribeVULRiskDetail(Models\DescribeVULRiskDetailRequest $req) 获取漏洞展开详情
 * @method Models\DescribeVdbAndPocInfoResponse DescribeVdbAndPocInfo(Models\DescribeVdbAndPocInfoRequest $req) 获取病毒库及POC的更新信息
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) 获取vpc列表
 * @method Models\DescribeVulComponentRelateHostResponse DescribeVulComponentRelateHost(Models\DescribeVulComponentRelateHostRequest $req) 获取漏洞组件关联主机
 * @method Models\DescribeVulFixTaskDetailResponse DescribeVulFixTaskDetail(Models\DescribeVulFixTaskDetailRequest $req) 查询指定漏洞修复任务的详情信息，包含每台主机的修复状态、快照状态等明细数据，支持分页和筛选。
 * @method Models\DescribeVulFixTaskListResponse DescribeVulFixTaskList(Models\DescribeVulFixTaskListRequest $req) 分页查询漏洞修复任务记录列表，支持按修复状态、时间范围等条件筛选，展示每个修复任务的概要信息。
 * @method Models\DescribeVulFixableMachineListResponse DescribeVulFixableMachineList(Models\DescribeVulFixableMachineListRequest $req) 查询指定漏洞可以被修复的主机列表。在用户提交修复任务前，需要先查询哪些主机支持自动修复，为用户选择修复目标提供数据支持。
 * @method Models\DescribeVulFixedHostDetailResponse DescribeVulFixedHostDetail(Models\DescribeVulFixedHostDetailRequest $req) 查询某个已修复漏洞在指定主机上的修复详情，包含漏洞基本信息、修复主机信息以及关联组件&路径的详细列表（组件名称、命中版本、关联路径、修复命令）。
 * @method Models\DescribeVulFixedListResponse DescribeVulFixedList(Models\DescribeVulFixedListRequest $req) 查询已被修复的漏洞列表，展示修复成功的漏洞信息及修复情况统计，帮助用户了解修复成效。
 * @method Models\DescribeVulHostRelateComponentResponse DescribeVulHostRelateComponent(Models\DescribeVulHostRelateComponentRequest $req) 获取漏洞主机关联组件
 * @method Models\DescribeVulIgnoreRuleListResponse DescribeVulIgnoreRuleList(Models\DescribeVulIgnoreRuleListRequest $req) 获取漏洞忽略列表
 * @method Models\DescribeVulItemListResponse DescribeVulItemList(Models\DescribeVulItemListRequest $req) 获取漏洞列表
 * @method Models\DescribeVulLabelListResponse DescribeVulLabelList(Models\DescribeVulLabelListRequest $req) 获取漏洞标签列表
 * @method Models\DescribeVulRiskListResponse DescribeVulRiskList(Models\DescribeVulRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的漏洞列表
 * @method Models\DescribeVulRiskRelateComponentResponse DescribeVulRiskRelateComponent(Models\DescribeVulRiskRelateComponentRequest $req) 获取漏洞关联组件
 * @method Models\DescribeVulRiskRelateHostResponse DescribeVulRiskRelateHost(Models\DescribeVulRiskRelateHostRequest $req) 获取漏洞或KB关联的主机
 * @method Models\DescribeVulScanPeriodicResponse DescribeVulScanPeriodic(Models\DescribeVulScanPeriodicRequest $req) 获取漏洞扫描（周期扫描）
 * @method Models\DescribeVulScanTaskDetailResponse DescribeVulScanTaskDetail(Models\DescribeVulScanTaskDetailRequest $req) 获取扫描漏洞任务详情
 * @method Models\DescribeVulScanTaskListResponse DescribeVulScanTaskList(Models\DescribeVulScanTaskListRequest $req) 获取漏洞扫描任务记录
 * @method Models\DescribeVulViewVulRiskListResponse DescribeVulViewVulRiskList(Models\DescribeVulViewVulRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\DescribeWebhookPolicyListResponse DescribeWebhookPolicyList(Models\DescribeWebhookPolicyListRequest $req) 分页查询当前租户下的通知策略列表，对应「通知中心 - 机器人通知 - 通知策略配置」Tab 的表格。返回的字段为「行展示」所需的精简信息。完整配置在编辑场景下使用 DescribeWebhookPolicy。每租户最多 100 个通知策略
 * @method Models\DescribeWebhookReceiverListResponse DescribeWebhookReceiverList(Models\DescribeWebhookReceiverListRequest $req) 分页查询当前租户下的接收机器人列表，对应「通知中心 - 机器人通知 - 接收机器人管理」Tab 的表格。每租户最多 50 个机器人
 * @method Models\DisableAIScheduleResponse DisableAISchedule(Models\DisableAIScheduleRequest $req) 停用AI 定时任务。

将指定的AI 定时任务状态设置为已停用，停用后任务将暂停自动执行。
 * @method Models\DownloadDspmExportLogResponse DownloadDspmExportLog(Models\DownloadDspmExportLogRequest $req) 下载导出日志
 * @method Models\EnableAIScheduleResponse EnableAISchedule(Models\EnableAIScheduleRequest $req) 启用AI 定时任务。

将指定的AI 定时任务状态设置为已启用，启用后任务将按触发器配置自动执行。
 * @method Models\ExportCSIPMalwareScanTaskDetailResponse ExportCSIPMalwareScanTaskDetail(Models\ExportCSIPMalwareScanTaskDetailRequest $req) 导出CSIP扫描任务主机详情为Excel文件，异步生成后通过DescribeExportMachines查询下载地址
 * @method Models\ExportClientSettingHostListResponse ExportClientSettingHostList(Models\ExportClientSettingHostListRequest $req) 客户端设置主机列表导出
 * @method Models\ExportEDRRulesResponse ExportEDRRules(Models\ExportEDRRulesRequest $req) 导出EDR策略列表
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) 用于异步导出数据量大的日志文件
 * @method Models\InstallClusterAgentResponse InstallClusterAgent(Models\InstallClusterAgentRequest $req) 安装集群容器安全Agent（平行容器方式安装 Agent）。

capi 层处理流程：
1. 按 ClusterCaMD5List 查询 DB 集群列表（仅用于解析每个集群归属的 appid，不做存在性/类型校验）
2. 按 appid 分组透传到接入侧 ClusterInstall RPC

说明（容器资产改版 2026 H1）：本接口为透传接口，capi 层不对 ClusterCaMD5 做存在性/类型/格式校验；DB 中未命中的 ClusterCaMD5 静默跳过、不报错。
 * @method Models\ModifyAILinkSettingResponse ModifyAILinkSetting(Models\ModifyAILinkSettingRequest $req) 修改AI-Link智链引擎配置
 * @method Models\ModifyAIScheduleResponse ModifyAISchedule(Models\ModifyAIScheduleRequest $req) 修改AI 定时任务。

支持部分更新，仅更新传入的可选字段。触发器列表通过 UpdateTriggers 标志控制是否全量替换。
 * @method Models\ModifyAgentConfigSettingResponse ModifyAgentConfigSetting(Models\ModifyAgentConfigSettingRequest $req) 修改客户端日志采集配置（CSIP专属），支持设置日志采集类型和生效资产范围
 * @method Models\ModifyAgentRunModeResponse ModifyAgentRunMode(Models\ModifyAgentRunModeRequest $req) 设置客户端运行模式以及配置
 * @method Models\ModifyAgentRunPolicyResponse ModifyAgentRunPolicy(Models\ModifyAgentRunPolicyRequest $req) 修改客户端运行策略（策略组），支持设置自定义策略及关联机器列表
 * @method Models\ModifyAlarmRiskStatusResponse ModifyAlarmRiskStatus(Models\ModifyAlarmRiskStatusRequest $req) 修改或者更改处置状态
 * @method Models\ModifyAssetCoreAttributeResponse ModifyAssetCoreAttribute(Models\ModifyAssetCoreAttributeRequest $req) 标记资产是否核心
 * @method Models\ModifyAssetFilterViewResponse ModifyAssetFilterView(Models\ModifyAssetFilterViewRequest $req) 更新资产搜索视图
 * @method Models\ModifyAssetTagResponse ModifyAssetTag(Models\ModifyAssetTagRequest $req) 编辑资产标签
 * @method Models\ModifyAssetTagsResponse ModifyAssetTags(Models\ModifyAssetTagsRequest $req) 操作资产编辑标签
 * @method Models\ModifyAssetTagsByAssetInfoResponse ModifyAssetTagsByAssetInfo(Models\ModifyAssetTagsByAssetInfoRequest $req) 操作资产编辑标签
 * @method Models\ModifyBanModeResponse ModifyBanMode(Models\ModifyBanModeRequest $req) 修改爆破阻断模式
 * @method Models\ModifyBaselinePolicyResponse ModifyBaselinePolicy(Models\ModifyBaselinePolicyRequest $req) 新建或编辑一条基线策略。Policy.ID 为 0 视为新建，非 0 视为编辑；新建/编辑时 Name 必填，CheckAssetType 与 Type 需符合 CheckAssetType / PolicyType 枚举。
 * @method Models\ModifyBaselinePolicyEnableResponse ModifyBaselinePolicyEnable(Models\ModifyBaselinePolicyEnableRequest $req) 批量启用或停用基线策略。停用后的策略将不再参与扫描与统计。
 * @method Models\ModifyBaselineSyncConfResponse ModifyBaselineSyncConf(Models\ModifyBaselineSyncConfRequest $req) 更新当前账号（管理员）的基线同步配置。AutoSync=true 时 TargetAppidList 不可为空，且元素不可为 0。
 * @method Models\ModifyBaselineUserOtherConfResponse ModifyBaselineUserOtherConf(Models\ModifyBaselineUserOtherConfRequest $req) 更新当前账号的用户级基线配置（允许同步、离线清风险、Agent 扫描超时等）。
 * @method Models\ModifyBaselineUserWeakPasswordConfResponse ModifyBaselineUserWeakPasswordConf(Models\ModifyBaselineUserWeakPasswordConfRequest $req) 更新当前账号的“用户弱口令”自定义字典。字典原文经服务端加密后存储；传空字符串视为清空。
 * @method Models\ModifyBruteAttackBanStatusResponse ModifyBruteAttackBanStatus(Models\ModifyBruteAttackBanStatusRequest $req) 设置暴力破解阻断开关状态
 * @method Models\ModifyBruteAttackRulesResponse ModifyBruteAttackRules(Models\ModifyBruteAttackRulesRequest $req) 修改暴力破解规则
 * @method Models\ModifyCSIPLicenseBindsResponse ModifyCSIPLicenseBinds(Models\ModifyCSIPLicenseBindsRequest $req) 绑定主机授权或RASP授权到指定订单。异步执行，返回TaskId供查询进度。通过LicenseType指定授权版本（旗舰版/专业版/RASP）。
 * @method Models\ModifyCSIPLicenseUnBindsResponse ModifyCSIPLicenseUnBinds(Models\ModifyCSIPLicenseUnBindsRequest $req) 手动解绑主机授权。同步执行，直接返回结果。仅解绑主机授权（category=0，含专业版/旗舰版）。单订单模式下appid即可定位订单，无需传ResourceId。RASP解绑请用ModifyCSIPRaspLicenseUnBinds。
 * @method Models\ModifyCSIPRaspLicenseBindsResponse ModifyCSIPRaspLicenseBinds(Models\ModifyCSIPRaspLicenseBindsRequest $req) 绑定 RASP / 旗舰版授权到指定订单。异步执行，返回TaskId供查询进度。LicenseType=rasp 绑 RASP，LicenseType=enterprise_hp 绑旗舰版主机授权；AssetType 区分主机/容器节点/EKS。
 * @method Models\ModifyCSIPRaspLicenseUnBindsResponse ModifyCSIPRaspLicenseUnBinds(Models\ModifyCSIPRaspLicenseUnBindsRequest $req) 手动解绑RASP授权。同步执行，直接返回结果。仅解绑RASP授权（category=1），无解绑次数限制。单订单模式下appid即可定位订单，无需传ResourceId。
 * @method Models\ModifyCosAuditBucketMonitorStatusResponse ModifyCosAuditBucketMonitorStatus(Models\ModifyCosAuditBucketMonitorStatusRequest $req) 修改存储桶监测状态
 * @method Models\ModifyCosAuditMonitorAccountResponse ModifyCosAuditMonitorAccount(Models\ModifyCosAuditMonitorAccountRequest $req) 修改cos审计监测账号
 * @method Models\ModifyCosAuditObjectIdentifyStatusResponse ModifyCosAuditObjectIdentifyStatus(Models\ModifyCosAuditObjectIdentifyStatusRequest $req) 修改对象存储识别开关
 * @method Models\ModifyCosAuditObjectSampleRateResponse ModifyCosAuditObjectSampleRate(Models\ModifyCosAuditObjectSampleRateRequest $req) 设置对象存储扫描采样率
 * @method Models\ModifyCosMarkInfoResponse ModifyCosMarkInfo(Models\ModifyCosMarkInfoRequest $req) 修改对象存储备注
 * @method Models\ModifyCspmShardConfigResponse ModifyCspmShardConfig(Models\ModifyCspmShardConfigRequest $req) 更新CSPM自动配额管理者共享开关
 * @method Models\ModifyDspmAccessRecordResponse ModifyDspmAccessRecord(Models\ModifyDspmAccessRecordRequest $req) 修改Dspm访问管理信息
 * @method Models\ModifyDspmApplyingIdentifyComplianceGroupResponse ModifyDspmApplyingIdentifyComplianceGroup(Models\ModifyDspmApplyingIdentifyComplianceGroupRequest $req) 修改dspm当前应用的数据识别模板
 * @method Models\ModifyDspmApproveStatusResponse ModifyDspmApproveStatus(Models\ModifyDspmApproveStatusRequest $req) 修改Dspm审批单状态
 * @method Models\ModifyDspmAssetAccountResponse ModifyDspmAssetAccount(Models\ModifyDspmAssetAccountRequest $req) 修改Dspm资产账号信息
 * @method Models\ModifyDspmAssetAccountPrivilegesResponse ModifyDspmAssetAccountPrivileges(Models\ModifyDspmAssetAccountPrivilegesRequest $req) 修改Dspm资产账号权限
 * @method Models\ModifyDspmAssetDataScanTaskResponse ModifyDspmAssetDataScanTask(Models\ModifyDspmAssetDataScanTaskRequest $req) 修改Dspm资产数据扫描任务
 * @method Models\ModifyDspmAssetDataScanTaskStatusResponse ModifyDspmAssetDataScanTaskStatus(Models\ModifyDspmAssetDataScanTaskStatusRequest $req) 修改Dspm资产数据扫描任务状态
 * @method Models\ModifyDspmAssetLogDeliverySwitchResponse ModifyDspmAssetLogDeliverySwitch(Models\ModifyDspmAssetLogDeliverySwitchRequest $req) 修改Dspm资产日志投递开关
 * @method Models\ModifyDspmAssetSecurityAnalysisSwitchResponse ModifyDspmAssetSecurityAnalysisSwitch(Models\ModifyDspmAssetSecurityAnalysisSwitchRequest $req) 修改Dspm资产日志投递开关
 * @method Models\ModifyDspmBackupSettingResponse ModifyDspmBackupSetting(Models\ModifyDspmBackupSettingRequest $req) 修改日志备份设置
 * @method Models\ModifyDspmIdentifyCategoryResponse ModifyDspmIdentifyCategory(Models\ModifyDspmIdentifyCategoryRequest $req) 修改dspm数据识别分类
 * @method Models\ModifyDspmIdentifyComplianceGroupResponse ModifyDspmIdentifyComplianceGroup(Models\ModifyDspmIdentifyComplianceGroupRequest $req) 修改dspm数据识别模板
 * @method Models\ModifyDspmIdentifyComplianceGroupStatusResponse ModifyDspmIdentifyComplianceGroupStatus(Models\ModifyDspmIdentifyComplianceGroupStatusRequest $req) 修改dspm数据识别模板状态
 * @method Models\ModifyDspmIdentifyComplianceRuleLevelInfoResponse ModifyDspmIdentifyComplianceRuleLevelInfo(Models\ModifyDspmIdentifyComplianceRuleLevelInfoRequest $req) 修改dspm数据识别模板数据项关联级别信息
 * @method Models\ModifyDspmIdentifyInfoResponse ModifyDspmIdentifyInfo(Models\ModifyDspmIdentifyInfoRequest $req) 修改Dspm身份信息
 * @method Models\ModifyDspmIdentifyLevelGroupResponse ModifyDspmIdentifyLevelGroup(Models\ModifyDspmIdentifyLevelGroupRequest $req) 修改dspm数据识别分级组
 * @method Models\ModifyDspmIdentifyLevelItemResponse ModifyDspmIdentifyLevelItem(Models\ModifyDspmIdentifyLevelItemRequest $req) 修改dspm数据识别分级信息
 * @method Models\ModifyDspmIdentifyRuleResponse ModifyDspmIdentifyRule(Models\ModifyDspmIdentifyRuleRequest $req) 修改dspm数据识别数据项
 * @method Models\ModifyDspmIdentifyRuleStatusResponse ModifyDspmIdentifyRuleStatus(Models\ModifyDspmIdentifyRuleStatusRequest $req) 修改dspm数据识别数据项状态
 * @method Models\ModifyDspmIpInfoResponse ModifyDspmIpInfo(Models\ModifyDspmIpInfoRequest $req) 修改DspmIp信息
 * @method Models\ModifyDspmPersonalIdentifyResponse ModifyDspmPersonalIdentify(Models\ModifyDspmPersonalIdentifyRequest $req) 修改Dspm个人身份id
 * @method Models\ModifyDspmRestoreLogTaskResponse ModifyDspmRestoreLogTask(Models\ModifyDspmRestoreLogTaskRequest $req) 恢复备份日志
 * @method Models\ModifyDspmRiskInfoResponse ModifyDspmRiskInfo(Models\ModifyDspmRiskInfoRequest $req) 修改Dspm风险信息
 * @method Models\ModifyDspmRiskStrategyResponse ModifyDspmRiskStrategy(Models\ModifyDspmRiskStrategyRequest $req) 修改Dspm风险策略
 * @method Models\ModifyDspmWhitelistStrategyResponse ModifyDspmWhitelistStrategy(Models\ModifyDspmWhitelistStrategyRequest $req) 修改Dspm白名单策略
 * @method Models\ModifyEDRRuleResponse ModifyEDRRule(Models\ModifyEDRRuleRequest $req) 编辑或者创建EDR策略
 * @method Models\ModifyEDRRuleStatusResponse ModifyEDRRuleStatus(Models\ModifyEDRRuleStatusRequest $req) 修改EDR策略开关状态
 * @method Models\ModifyEDRRulesActionResponse ModifyEDRRulesAction(Models\ModifyEDRRulesActionRequest $req) 批量修改EDR策略动作
 * @method Models\ModifyEdrAlertIsolationResponse ModifyEdrAlertIsolation(Models\ModifyEdrAlertIsolationRequest $req) EDR告警隔离和恢复
 * @method Models\ModifyEdrAlertPermanentIgnoreResponse ModifyEdrAlertPermanentIgnore(Models\ModifyEdrAlertPermanentIgnoreRequest $req) 永久忽略EDR多行为告警，将告警对应的主机+规则加入AI-Link永久忽略白名单，后续同类告警将自动丢弃
 * @method Models\ModifyEdrAlertStatusResponse ModifyEdrAlertStatus(Models\ModifyEdrAlertStatusRequest $req) EDR告警状态处置
 * @method Models\ModifyEdrExcludeNetworkSegmentsResponse ModifyEdrExcludeNetworkSegments(Models\ModifyEdrExcludeNetworkSegmentsRequest $req) 修改日志采集例外网段配置，支持IP/IP段/CIDR格式，最多可添加100条
 * @method Models\ModifyEdrLogCollectPathResponse ModifyEdrLogCollectPath(Models\ModifyEdrLogCollectPathRequest $req) 修改应用日志采集路径配置
 * @method Models\ModifyExposureAutoTagRuleResponse ModifyExposureAutoTagRule(Models\ModifyExposureAutoTagRuleRequest $req) 云边界自动打标-更新规则
 * @method Models\ModifyExposureAutoTagRuleStatusResponse ModifyExposureAutoTagRuleStatus(Models\ModifyExposureAutoTagRuleStatusRequest $req) 云边界自动打标-启停规则
 * @method Models\ModifyExposureTagResponse ModifyExposureTag(Models\ModifyExposureTagRequest $req) 更新云边界自定义标签
 * @method Models\ModifyIaCTokenPeriodResponse ModifyIaCTokenPeriod(Models\ModifyIaCTokenPeriodRequest $req) 修改IaC检测接入Token存储周期
 * @method Models\ModifyLoginWhiteRecordResponse ModifyLoginWhiteRecord(Models\ModifyLoginWhiteRecordRequest $req) 更新合并后登录审计白名单信息（服务器列表数目应小于1000）
 * @method Models\ModifyMachineAutoClearConfigResponse ModifyMachineAutoClearConfig(Models\ModifyMachineAutoClearConfigRequest $req) 修改机器清理配置
 * @method Models\ModifyMachineRemarkResponse ModifyMachineRemark(Models\ModifyMachineRemarkRequest $req) 修改主机资产备注信息
 * @method Models\ModifyMachinesLoginTypeResponse ModifyMachinesLoginType(Models\ModifyMachinesLoginTypeRequest $req) 批量修改主机登录方式
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) 修改文件查杀定时扫描配置，包含扫描周期、检测模式、资产范围、引擎选择、隔离配置等
 * @method Models\ModifyNFSScanConfResponse ModifyNFSScanConf(Models\ModifyNFSScanConfRequest $req) 新增或更新NFS扫描全局配置
 * @method Models\ModifyNFSScanHostResponse ModifyNFSScanHost(Models\ModifyNFSScanHostRequest $req) 关闭进程守护功能
 * @method Models\ModifyNetAttackSettingResponse ModifyNetAttackSetting(Models\ModifyNetAttackSettingRequest $req) 修改网络攻击检测开关及资产范围配置
 * @method Models\ModifyNotifyAgentOfflineDurationResponse ModifyNotifyAgentOfflineDuration(Models\ModifyNotifyAgentOfflineDurationRequest $req) 修改客户端离线时长
 * @method Models\ModifyNotifyAssetConfigResponse ModifyNotifyAssetConfig(Models\ModifyNotifyAssetConfigRequest $req) 修改通知资产范围配置
 * @method Models\ModifyNotifySettingResponse ModifyNotifySetting(Models\ModifyNotifySettingRequest $req) 修改通知设置
 * @method Models\ModifyNotifySettingAlertResponse ModifyNotifySettingAlert(Models\ModifyNotifySettingAlertRequest $req) 修改告警中心通知高级配置
 * @method Models\ModifyOrganizationAccountStatusResponse ModifyOrganizationAccountStatus(Models\ModifyOrganizationAccountStatusRequest $req) 修改集团账号状态
 * @method Models\ModifyPayConfigResponse ModifyPayConfig(Models\ModifyPayConfigRequest $req) 修改自动扩容配置（多模块可扩展，本期仅主机安全模块）。

「自动扩容」为面向用户的对外概念，等价于底层自动加购(auto_repurchase)：当账号有新增资产时，自动加购所需授权。

补充说明：
1. 本期仅实现主机安全模块 HostConfig；后续可扩展容器安全、AI-Agent 安全等命名模块字段，各模块配置字段可异构；
2. 部分更新语义：模块对象为空表示该模块不修改，模块内字段为空表示该字段不修改；
3. HostConfig.Switch 联动映射 auto_repurchase_switch；auto_bind_switch（自动绑定）恒开，不由本接口改动；
4. 自动续费(renew_flag) 不由本接口改动；额度/用量请调用 DescribeLicenseStatus；
5. 顶部「自动扩容」总开关状态由前端按各模块开关聚合，后端不存储、不返回全局开关。
 * @method Models\ModifyPolicyStatusResponse ModifyPolicyStatus(Models\ModifyPolicyStatusRequest $req) 修改策略状态
 * @method Models\ModifyProtectionSettingResponse ModifyProtectionSetting(Models\ModifyProtectionSettingRequest $req) 重保防护包防护设置
 * @method Models\ModifyRaspLicenseBindsResponse ModifyRaspLicenseBinds(Models\ModifyRaspLicenseBindsRequest $req) 重保防护授权包绑定
 * @method Models\ModifyReverseShellSystemPolicyConfigResponse ModifyReverseShellSystemPolicyConfig(Models\ModifyReverseShellSystemPolicyConfigRequest $req) 修改反弹Shell内网告警与资产范围配置
 * @method Models\ModifyRiskCenterRiskStatusResponse ModifyRiskCenterRiskStatus(Models\ModifyRiskCenterRiskStatusRequest $req) 修改风险中心风险状态
 * @method Models\ModifyRiskCenterScanTaskResponse ModifyRiskCenterScanTask(Models\ModifyRiskCenterScanTaskRequest $req) 修改风险中心扫描任务
 * @method Models\ModifyRiskScanCronConfigResponse ModifyRiskScanCronConfig(Models\ModifyRiskScanCronConfigRequest $req) 更新周期扫描计划
 * @method Models\ModifySecurityScoreRuleResponse ModifySecurityScoreRule(Models\ModifySecurityScoreRuleRequest $req) 修改安全评分规则，必须传入完整规则集
 * @method Models\ModifyShareUserCSPMResponse ModifyShareUserCSPM(Models\ModifyShareUserCSPMRequest $req) 编辑CSPM共享账号
 * @method Models\ModifyUebaRuleSwitchResponse ModifyUebaRuleSwitch(Models\ModifyUebaRuleSwitchRequest $req) 更新自定义策略的开关
 * @method Models\ModifyVulScanPeriodicResponse ModifyVulScanPeriodic(Models\ModifyVulScanPeriodicRequest $req) 修改漏洞扫描（周期扫描）
 * @method Models\ModifyVulWhitelistConfigResponse ModifyVulWhitelistConfig(Models\ModifyVulWhitelistConfigRequest $req) 修改漏洞白名单配置
 * @method Models\ModifyVulWhitelistSwitchResponse ModifyVulWhitelistSwitch(Models\ModifyVulWhitelistSwitchRequest $req) 修改漏洞白名单开关
 * @method Models\ModifyWebhookPolicyResponse ModifyWebhookPolicy(Models\ModifyWebhookPolicyRequest $req) 新增或修改一条通知策略。ID > 0 表示修改；ID = 0 或不传表示新增。MemberAppIds 配置为空时，策略仅作用于当前主账号事件；非空时同时作用于自身账号 + 所列成员账号。
 * @method Models\ModifyWebhookPolicyStatusResponse ModifyWebhookPolicyStatus(Models\ModifyWebhookPolicyStatusRequest $req) 切换通知策略的启用状态。
 * @method Models\ModifyWebhookReceiverResponse ModifyWebhookReceiver(Models\ModifyWebhookReceiverRequest $req) 新增或修改一个接收机器人。ID > 0 表示修改已有记录；ID = 0 或不传表示新增。机器人类型由 Type 字段决定，Type=WEBHOOK 时 WebhookAddr 必填，Type=SCF 时 SCFRegion/Namespace/FunctionName/FunctionVersion/Alias/MaxWaitSeconds 全部必填。修改时不允许变更 Type
 * @method Models\OperateRiskResponse OperateRisk(Models\OperateRiskRequest $req) 风险操作示例
 * @method Models\OperateRiskRulePolicyResponse OperateRiskRulePolicy(Models\OperateRiskRulePolicyRequest $req) 自定义风险规则
 * @method Models\ResetDspmAssetAccountPasswordResponse ResetDspmAssetAccountPassword(Models\ResetDspmAssetAccountPasswordRequest $req) 重置Dspm资产账号密码
 * @method Models\RetryDspmExportLogResponse RetryDspmExportLog(Models\RetryDspmExportLogRequest $req) RetryExportLog
 * @method Models\RevertDspmAssetAccountResponse RevertDspmAssetAccount(Models\RevertDspmAssetAccountRequest $req) 恢复Dspm资产账号
 * @method Models\ScanBaselineAssetItemListResponse ScanBaselineAssetItemList(Models\ScanBaselineAssetItemListRequest $req) 对单个资产的部分检测项发起重新扫描（资产详情页“重新扫描”入口）。
 * @method Models\ScanBaselineItemListResponse ScanBaselineItemList(Models\ScanBaselineItemListRequest $req) 对指定策略下的一批检测项发起重新扫描（策略详情页“检测项”维度的复扫入口）。
 * @method Models\ScanBaselinePolicyListResponse ScanBaselinePolicyList(Models\ScanBaselinePolicyListRequest $req) 对一批基线策略发起整体重新扫描（策略列表页“一键扫描”入口），按策略命中的资产范围全量重扫。
 * @method Models\ScanBaselineRiskListResponse ScanBaselineRiskList(Models\ScanBaselineRiskListRequest $req) 对一批风险记录发起重新扫描，常用于“风险列表”页批量勾选风险后的复扫场景。
 * @method Models\ScanCSIPTaskAgainResponse ScanCSIPTaskAgain(Models\ScanCSIPTaskAgainRequest $req) CSIP 手动扫描任务删除接口
 * @method Models\ScanEDRTaskAgainResponse ScanEDRTaskAgain(Models\ScanEDRTaskAgainRequest $req) 基于原任务配置新建扫描任务。AssetId为空时从TaskId获取全部资产信息；AssetId非空时仅含该单资产。
 * @method Models\SendDspmAssetLoginSmsCodeResponse SendDspmAssetLoginSmsCode(Models\SendDspmAssetLoginSmsCodeRequest $req) 发送Dspm资产访问验证码
 * @method Models\StartOrModifyPreventUninstallResponse StartOrModifyPreventUninstall(Models\StartOrModifyPreventUninstallRequest $req) 开启或者修改防卸载功能配置
 * @method Models\StartOrModifyProcessDaemonResponse StartOrModifyProcessDaemon(Models\StartOrModifyProcessDaemonRequest $req) 开启或者修改进程守护功能配置
 * @method Models\StopBaselineScanTaskResponse StopBaselineScanTask(Models\StopBaselineScanTaskRequest $req) 停止指定的基线扫描主任务，仅对处于 INIT / SUBTASK_CREATING / SCANNING 状态的任务生效。
 * @method Models\StopCSIPManualMalwareScanResponse StopCSIPManualMalwareScan(Models\StopCSIPManualMalwareScanRequest $req) CSIP 手动扫描停止接口
 * @method Models\StopEDRScanTaskResponse StopEDRScanTask(Models\StopEDRScanTaskRequest $req) 停止或取消扫描任务。SCANNING状态调RPC停止，WAIT状态直接改库取消。只有任务创建者可操作。
 * @method Models\StopPreventUninstallResponse StopPreventUninstall(Models\StopPreventUninstallRequest $req) 关闭防卸载功能
 * @method Models\StopProcessDaemonResponse StopProcessDaemon(Models\StopProcessDaemonRequest $req) 关闭进程守护功能
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) 停止扫风险中心扫描任务
 * @method Models\StopVulScanTaskResponse StopVulScanTask(Models\StopVulScanTaskRequest $req) 停止漏洞扫描（任务扫描）
 * @method Models\SyncDspmAssetsResponse SyncDspmAssets(Models\SyncDspmAssetsRequest $req) 同步dspm支持的资产
 * @method Models\SyncDspmUsersResponse SyncDspmUsers(Models\SyncDspmUsersRequest $req) 同步dspm用户列表
 * @method Models\TestWebhookReceiverResponse TestWebhookReceiver(Models\TestWebhookReceiverRequest $req) 向指定的接收机器人发送一条测试消息，验证可达性与配置正确性。对应表格行内的「测试」按钮。
 * @method Models\UninstallClusterAgentResponse UninstallClusterAgent(Models\UninstallClusterAgentRequest $req) 卸载集群容器安全Agent。
 * @method Models\UpdateAccessKeyAlarmStatusResponse UpdateAccessKeyAlarmStatus(Models\UpdateAccessKeyAlarmStatusRequest $req) 标记风险或者告警为 已处置/已忽略
 * @method Models\UpdateAccessKeyRemarkResponse UpdateAccessKeyRemark(Models\UpdateAccessKeyRemarkRequest $req) 编辑访问密钥/源IP备注
 * @method Models\UpdateAlertStatusListResponse UpdateAlertStatusList(Models\UpdateAlertStatusListRequest $req) 批量告警状态处理接口
 * @method Models\UpdateClusterOwnerResponse UpdateClusterOwner(Models\UpdateClusterOwnerRequest $req) 绑定、更新集群负责人
 * @method Models\VerifyDspmAssetLoginCodeResponse VerifyDspmAssetLoginCode(Models\VerifyDspmAssetLoginCodeRequest $req) 验证Dspm资产登录验证码
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
