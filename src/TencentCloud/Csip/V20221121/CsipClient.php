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
 * @method Models\AddDspmAssetManagerResponse AddDspmAssetManager(Models\AddDspmAssetManagerRequest $req) 添加资产管理员
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) csip角色授权绑定接口
 * @method Models\CreateAccessKeyCheckTaskResponse CreateAccessKeyCheckTask(Models\CreateAccessKeyCheckTaskRequest $req) 检测AK 异步任务
 * @method Models\CreateAccessKeySyncTaskResponse CreateAccessKeySyncTask(Models\CreateAccessKeySyncTaskRequest $req) 发起AK资产同步任务
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) 创建域名、ip相关信息
 * @method Models\CreateDspmAccessExportJobResponse CreateDspmAccessExportJob(Models\CreateDspmAccessExportJobRequest $req) 创建Dspm访问记录导出任务
 * @method Models\CreateDspmApplyOrderResponse CreateDspmApplyOrder(Models\CreateDspmApplyOrderRequest $req) 创建Dspm申请单
 * @method Models\CreateDspmApproveHistoryExportJobResponse CreateDspmApproveHistoryExportJob(Models\CreateDspmApproveHistoryExportJobRequest $req) 创建Dspm审批历史导出任务
 * @method Models\CreateDspmAssetAccessTopologyExportJobResponse CreateDspmAssetAccessTopologyExportJob(Models\CreateDspmAssetAccessTopologyExportJobRequest $req) 创建Dspm资产访问拓扑导出任务
 * @method Models\CreateDspmAssetsExportJobResponse CreateDspmAssetsExportJob(Models\CreateDspmAssetsExportJobRequest $req) 创建Dspm资产列表导出任务
 * @method Models\CreateDspmExportTaskResponse CreateDspmExportTask(Models\CreateDspmExportTaskRequest $req) 创建日志导出任务
 * @method Models\CreateDspmIdentifyInfoListExportJobResponse CreateDspmIdentifyInfoListExportJob(Models\CreateDspmIdentifyInfoListExportJobRequest $req) 创建Dspm身份列表导出任务
 * @method Models\CreateDspmPersonalIdentifyResponse CreateDspmPersonalIdentify(Models\CreateDspmPersonalIdentifyRequest $req) 创建Dspm个人身份id
 * @method Models\CreateDspmRiskExportJobResponse CreateDspmRiskExportJob(Models\CreateDspmRiskExportJobRequest $req) 创建Dspm风险导出任务
 * @method Models\CreateDspmWhitelistStrategyResponse CreateDspmWhitelistStrategy(Models\CreateDspmWhitelistStrategyRequest $req) 创建Dspm白名单策略
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) 创建风险中心扫描任务
 * @method Models\CreateSkillScanResponse CreateSkillScan(Models\CreateSkillScanRequest $req) 上传 Skill ZIP 文件，触发异步安全检测。上传成功后应使用返回的 ContentHash + EngineVersion 轮询 DescribeSkillScanResult 接口获取结果。上传接口具备幂等性，同一 Hash 的文件重复上传不会创建重复任务。检测结果保留90天，超期后需重新上传检测。
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) 删除域名和ip请求
 * @method Models\DeleteDspmApplyOrderResponse DeleteDspmApplyOrder(Models\DeleteDspmApplyOrderRequest $req) 删除Dspm申请单
 * @method Models\DeleteDspmAssetAccountResponse DeleteDspmAssetAccount(Models\DeleteDspmAssetAccountRequest $req) 删除Dspm资产账号
 * @method Models\DeleteDspmBackupLogListResponse DeleteDspmBackupLogList(Models\DeleteDspmBackupLogListRequest $req) 删除备份日志
 * @method Models\DeleteDspmExportTaskResponse DeleteDspmExportTask(Models\DeleteDspmExportTaskRequest $req) 删除导出任务
 * @method Models\DeleteDspmPersonalIdentifyResponse DeleteDspmPersonalIdentify(Models\DeleteDspmPersonalIdentifyRequest $req) 删除Dspm个人身份id
 * @method Models\DeleteDspmRestoreLogListResponse DeleteDspmRestoreLogList(Models\DeleteDspmRestoreLogListRequest $req) 删除恢复日志
 * @method Models\DeleteDspmWhitelistStrategyResponse DeleteDspmWhitelistStrategy(Models\DeleteDspmWhitelistStrategyRequest $req) 删除Dspm白名单策略
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) 删除风险中心扫描任务
 * @method Models\DescribeAIAgentAssetListResponse DescribeAIAgentAssetList(Models\DescribeAIAgentAssetListRequest $req) 获取 AI agent 资产列表
 * @method Models\DescribeAKAnalysisDetailResponse DescribeAKAnalysisDetail(Models\DescribeAKAnalysisDetailRequest $req) 访问密钥告警记录AI分析结果详情
 * @method Models\DescribeAbnormalCallRecordResponse DescribeAbnormalCallRecord(Models\DescribeAbnormalCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeAccessKeyAlarmResponse DescribeAccessKeyAlarm(Models\DescribeAccessKeyAlarmRequest $req) 访问密钥告警记录列表
 * @method Models\DescribeAccessKeyAlarmDetailResponse DescribeAccessKeyAlarmDetail(Models\DescribeAccessKeyAlarmDetailRequest $req) 访问密钥告警记录详情
 * @method Models\DescribeAccessKeyAssetResponse DescribeAccessKeyAsset(Models\DescribeAccessKeyAssetRequest $req) 获取用户访问密钥资产列表
 * @method Models\DescribeAccessKeyRiskResponse DescribeAccessKeyRisk(Models\DescribeAccessKeyRiskRequest $req) 访问密钥风险记录列表
 * @method Models\DescribeAccessKeyRiskDetailResponse DescribeAccessKeyRiskDetail(Models\DescribeAccessKeyRiskDetailRequest $req) 访问密钥风险记录详情
 * @method Models\DescribeAccessKeyUserDetailResponse DescribeAccessKeyUserDetail(Models\DescribeAccessKeyUserDetailRequest $req) 查询用户的账号详情
 * @method Models\DescribeAccessKeyUserListResponse DescribeAccessKeyUserList(Models\DescribeAccessKeyUserListRequest $req) 查询用户的账号列表
 * @method Models\DescribeAlertListResponse DescribeAlertList(Models\DescribeAlertListRequest $req) 告警中心全量告警列表接口
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) 查询云边界分析-暴露路径下主机节点的进程列表
 * @method Models\DescribeAssetRiskListResponse DescribeAssetRiskList(Models\DescribeAssetRiskListRequest $req) 资产视角下云资源配置风险列表
 * @method Models\DescribeAssetViewVulRiskListResponse DescribeAssetViewVulRiskList(Models\DescribeAssetViewVulRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeAssumeRoleResponse DescribeAssumeRole(Models\DescribeAssumeRoleRequest $req) 查询是否绑定角色
 * @method Models\DescribeCFWAssetStatisticsResponse DescribeCFWAssetStatistics(Models\DescribeCFWAssetStatisticsRequest $req) 云防资产中心统计数据
 * @method Models\DescribeCSIPRiskStatisticsResponse DescribeCSIPRiskStatistics(Models\DescribeCSIPRiskStatisticsRequest $req) 获取风险中心风险概况示例
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) cvm详情
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) 获取cvm列表
 * @method Models\DescribeCallRecordResponse DescribeCallRecord(Models\DescribeCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeCheckViewRisksResponse DescribeCheckViewRisks(Models\DescribeCheckViewRisksRequest $req) 检查视角下云资源配置风险列表
 * @method Models\DescribeClusterAssetsResponse DescribeClusterAssets(Models\DescribeClusterAssetsRequest $req) 集群列表
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) 集群pod列表
 * @method Models\DescribeConfigCheckRulesResponse DescribeConfigCheckRules(Models\DescribeConfigCheckRulesRequest $req) 云资源配置风险规则列表示例
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) db资产详情
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) 数据库资产列表
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
 * @method Models\DescribeDspmIdentifyIdListResponse DescribeDspmIdentifyIdList(Models\DescribeDspmIdentifyIdListRequest $req) 查询Dspm身份id列表
 * @method Models\DescribeDspmIdentifyInfoResponse DescribeDspmIdentifyInfo(Models\DescribeDspmIdentifyInfoRequest $req) 查询Dspm身份信息
 * @method Models\DescribeDspmIdentifyInfoListResponse DescribeDspmIdentifyInfoList(Models\DescribeDspmIdentifyInfoListRequest $req) 查询Dspm身份信息列表
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
 * @method Models\DescribeExposeAssetCategoryResponse DescribeExposeAssetCategory(Models\DescribeExposeAssetCategoryRequest $req) 云边界分析资产分类
 * @method Models\DescribeExposePathResponse DescribeExposePath(Models\DescribeExposePathRequest $req) 查询云边界分析路径节点
 * @method Models\DescribeExposuresResponse DescribeExposures(Models\DescribeExposuresRequest $req) 云边界分析资产列表
 * @method Models\DescribeGatewayAssetsResponse DescribeGatewayAssets(Models\DescribeGatewayAssetsRequest $req) 获取网关列表
 * @method Models\DescribeHighBaseLineRiskListResponse DescribeHighBaseLineRiskList(Models\DescribeHighBaseLineRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的高危基线风险列表
 * @method Models\DescribeKeySandboxCredentialResponse DescribeKeySandboxCredential(Models\DescribeKeySandboxCredentialRequest $req) 查询凭证详情，返回凭证元数据和打码后的凭据数据。access类型返回Access数组（Key原文、Value打码），sts类型返回STS对象（System原文、SecretID和SecretKey打码）
 * @method Models\DescribeKeySandboxCredentialListResponse DescribeKeySandboxCredentialList(Models\DescribeKeySandboxCredentialListRequest $req) 查询凭证列表
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) 查询clb监听器列表
 * @method Models\DescribeNICAssetsResponse DescribeNICAssets(Models\DescribeNICAssetsRequest $req) 获取网卡列表
 * @method Models\DescribeOrganizationInfoResponse DescribeOrganizationInfo(Models\DescribeOrganizationInfoRequest $req) 查询集团账号详情
 * @method Models\DescribeOrganizationUserInfoResponse DescribeOrganizationUserInfo(Models\DescribeOrganizationUserInfoRequest $req) 查询集团账号用户列表
 * @method Models\DescribeOtherCloudAssetsResponse DescribeOtherCloudAssets(Models\DescribeOtherCloudAssetsRequest $req) 资产列表
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) ip公网列表
 * @method Models\DescribeRepositoryImageAssetsResponse DescribeRepositoryImageAssets(Models\DescribeRepositoryImageAssetsRequest $req) 仓库镜像列表
 * @method Models\DescribeRiskCallRecordResponse DescribeRiskCallRecord(Models\DescribeRiskCallRecordRequest $req) 获取风险调用记录列表
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) 获取资产视角的配置风险列表
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) 获取资产视角的端口风险列表
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) 获取资产视角的弱口令风险列表
 * @method Models\DescribeRiskCenterCFGViewCFGRiskListResponse DescribeRiskCenterCFGViewCFGRiskList(Models\DescribeRiskCenterCFGViewCFGRiskListRequest $req) 获取配置视角的配置风险列表
 * @method Models\DescribeRiskCenterPortViewPortRiskListResponse DescribeRiskCenterPortViewPortRiskList(Models\DescribeRiskCenterPortViewPortRiskListRequest $req) 获取端口视角的端口风险列表
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) 获取风险服务列表
 * @method Models\DescribeRiskCenterVULViewVULRiskListResponse DescribeRiskCenterVULViewVULRiskList(Models\DescribeRiskCenterVULViewVULRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) 获取内容风险列表
 * @method Models\DescribeRiskDetailListResponse DescribeRiskDetailList(Models\DescribeRiskDetailListRequest $req) 风险详情列表示例
 * @method Models\DescribeRiskRuleDetailResponse DescribeRiskRuleDetail(Models\DescribeRiskRuleDetailRequest $req) 查询风险规则详情示例
 * @method Models\DescribeRiskRulesResponse DescribeRiskRules(Models\DescribeRiskRulesRequest $req) 高级配置风险规则列表示例
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) 获取扫描报告列表
 * @method Models\DescribeScanStatisticResponse DescribeScanStatistic(Models\DescribeScanStatisticRequest $req) 查询云边界分析扫描结果统计信息
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取扫描任务列表
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) 立体防护中心查询漏洞信息
 * @method Models\DescribeSkillScanPayInfoResponse DescribeSkillScanPayInfo(Models\DescribeSkillScanPayInfoRequest $req) 查询 Skill 安全检测计费信息，包括订单状态、总配额、已消耗配额、到期时间、支付模式等。无订单时返回零值（仅含 TimeNow 和 BetaEndTime）。试用订单通过 ModifyTrialStatus(Module=9) 领取，正式订单通过计费系统创建。
 * @method Models\DescribeSkillScanResultResponse DescribeSkillScanResult(Models\DescribeSkillScanResultRequest $req) 查询 Skill 安全检测结果。调用 CreateSkillScan 成功后使用返回的 ContentHash + EngineVersion 轮询本接口获取结果。上传成功后建议5分钟后首次轮询，如未检测完成之后每隔1分钟轮询一次。响应通过 Status 字段区分四种状态：检测完成（SUCCESS）、检测中（SCANNING）、无记录（NOT_FOUND）、检测失败（FAILED）。注意：检测结果保留90天，超期后将返回 NOT_FOUND。
 * @method Models\DescribeSourceIPAssetResponse DescribeSourceIPAsset(Models\DescribeSourceIPAssetRequest $req) 获取用户访问密钥资产列表（源IP视角）
 * @method Models\DescribeSubUserInfoResponse DescribeSubUserInfo(Models\DescribeSubUserInfoRequest $req) 查询集团的子账号列表
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) 获取子网列表
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) 获取任务扫描报告列表
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) 获取报告下载的临时链接
 * @method Models\DescribeTopAttackInfoResponse DescribeTopAttackInfo(Models\DescribeTopAttackInfoRequest $req) 查询TOP攻击信息
 * @method Models\DescribeUebaRuleResponse DescribeUebaRule(Models\DescribeUebaRuleRequest $req) 查询用户行为分析策略列表
 * @method Models\DescribeUserCallRecordResponse DescribeUserCallRecord(Models\DescribeUserCallRecordRequest $req) 获取账号调用记录列表
 * @method Models\DescribeUserDspmInfoListResponse DescribeUserDspmInfoList(Models\DescribeUserDspmInfoListRequest $req) 获取账号dspm信息列表
 * @method Models\DescribeVULListResponse DescribeVULList(Models\DescribeVULListRequest $req) 新安全中心风险中心-漏洞列表
 * @method Models\DescribeVULRiskAdvanceCFGListResponse DescribeVULRiskAdvanceCFGList(Models\DescribeVULRiskAdvanceCFGListRequest $req) 查询漏洞风险高级配置
 * @method Models\DescribeVULRiskDetailResponse DescribeVULRiskDetail(Models\DescribeVULRiskDetailRequest $req) 获取漏洞展开详情
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) 获取vpc列表
 * @method Models\DescribeVulRiskListResponse DescribeVulRiskList(Models\DescribeVulRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的漏洞列表
 * @method Models\DescribeVulViewVulRiskListResponse DescribeVulViewVulRiskList(Models\DescribeVulViewVulRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\DownloadDspmExportLogResponse DownloadDspmExportLog(Models\DownloadDspmExportLogRequest $req) 下载导出日志
 * @method Models\ModifyDspmAccessRecordResponse ModifyDspmAccessRecord(Models\ModifyDspmAccessRecordRequest $req) 修改Dspm访问管理信息
 * @method Models\ModifyDspmApproveStatusResponse ModifyDspmApproveStatus(Models\ModifyDspmApproveStatusRequest $req) 修改Dspm审批单状态
 * @method Models\ModifyDspmAssetAccountResponse ModifyDspmAssetAccount(Models\ModifyDspmAssetAccountRequest $req) 修改Dspm资产账号信息
 * @method Models\ModifyDspmAssetAccountPrivilegesResponse ModifyDspmAssetAccountPrivileges(Models\ModifyDspmAssetAccountPrivilegesRequest $req) 修改Dspm资产账号权限
 * @method Models\ModifyDspmAssetDataScanTaskResponse ModifyDspmAssetDataScanTask(Models\ModifyDspmAssetDataScanTaskRequest $req) 修改Dspm资产数据扫描任务
 * @method Models\ModifyDspmAssetLogDeliverySwitchResponse ModifyDspmAssetLogDeliverySwitch(Models\ModifyDspmAssetLogDeliverySwitchRequest $req) 修改Dspm资产日志投递开关
 * @method Models\ModifyDspmAssetSecurityAnalysisSwitchResponse ModifyDspmAssetSecurityAnalysisSwitch(Models\ModifyDspmAssetSecurityAnalysisSwitchRequest $req) 修改Dspm资产日志投递开关
 * @method Models\ModifyDspmBackupSettingResponse ModifyDspmBackupSetting(Models\ModifyDspmBackupSettingRequest $req) 修改日志备份设置
 * @method Models\ModifyDspmIdentifyInfoResponse ModifyDspmIdentifyInfo(Models\ModifyDspmIdentifyInfoRequest $req) 修改Dspm身份信息
 * @method Models\ModifyDspmIpInfoResponse ModifyDspmIpInfo(Models\ModifyDspmIpInfoRequest $req) 修改DspmIp信息
 * @method Models\ModifyDspmPersonalIdentifyResponse ModifyDspmPersonalIdentify(Models\ModifyDspmPersonalIdentifyRequest $req) 修改Dspm个人身份id
 * @method Models\ModifyDspmRestoreLogTaskResponse ModifyDspmRestoreLogTask(Models\ModifyDspmRestoreLogTaskRequest $req) 恢复备份日志
 * @method Models\ModifyDspmRiskInfoResponse ModifyDspmRiskInfo(Models\ModifyDspmRiskInfoRequest $req) 修改Dspm风险信息
 * @method Models\ModifyDspmRiskStrategyResponse ModifyDspmRiskStrategy(Models\ModifyDspmRiskStrategyRequest $req) 修改Dspm风险策略
 * @method Models\ModifyDspmWhitelistStrategyResponse ModifyDspmWhitelistStrategy(Models\ModifyDspmWhitelistStrategyRequest $req) 修改Dspm白名单策略
 * @method Models\ModifyOrganizationAccountStatusResponse ModifyOrganizationAccountStatus(Models\ModifyOrganizationAccountStatusRequest $req) 修改集团账号状态
 * @method Models\ModifyRiskCenterRiskStatusResponse ModifyRiskCenterRiskStatus(Models\ModifyRiskCenterRiskStatusRequest $req) 修改风险中心风险状态
 * @method Models\ModifyRiskCenterScanTaskResponse ModifyRiskCenterScanTask(Models\ModifyRiskCenterScanTaskRequest $req) 修改风险中心扫描任务
 * @method Models\ModifyUebaRuleSwitchResponse ModifyUebaRuleSwitch(Models\ModifyUebaRuleSwitchRequest $req) 更新自定义策略的开关
 * @method Models\ResetDspmAssetAccountPasswordResponse ResetDspmAssetAccountPassword(Models\ResetDspmAssetAccountPasswordRequest $req) 重置Dspm资产账号密码
 * @method Models\RetryDspmExportLogResponse RetryDspmExportLog(Models\RetryDspmExportLogRequest $req) RetryExportLog
 * @method Models\RevertDspmAssetAccountResponse RevertDspmAssetAccount(Models\RevertDspmAssetAccountRequest $req) 恢复Dspm资产账号
 * @method Models\SendDspmAssetLoginSmsCodeResponse SendDspmAssetLoginSmsCode(Models\SendDspmAssetLoginSmsCodeRequest $req) 发送Dspm资产访问验证码
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) 停止扫风险中心扫描任务
 * @method Models\SyncDspmAssetsResponse SyncDspmAssets(Models\SyncDspmAssetsRequest $req) 同步dspm支持的资产
 * @method Models\SyncDspmUsersResponse SyncDspmUsers(Models\SyncDspmUsersRequest $req) 同步dspm用户列表
 * @method Models\UpdateAccessKeyAlarmStatusResponse UpdateAccessKeyAlarmStatus(Models\UpdateAccessKeyAlarmStatusRequest $req) 标记风险或者告警为 已处置/已忽略
 * @method Models\UpdateAccessKeyRemarkResponse UpdateAccessKeyRemark(Models\UpdateAccessKeyRemarkRequest $req) 编辑访问密钥/源IP备注
 * @method Models\UpdateAlertStatusListResponse UpdateAlertStatusList(Models\UpdateAlertStatusListRequest $req) 批量告警状态处理接口
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
