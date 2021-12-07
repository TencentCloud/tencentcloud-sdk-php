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

namespace TencentCloud\Tcss\V20201101;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcss\V20201101\Models as Models;

/**
 * @method Models\AddAssetImageRegistryRegistryDetailResponse AddAssetImageRegistryRegistryDetail(Models\AddAssetImageRegistryRegistryDetailRequest $req) 新增单个镜像仓库详细信息
 * @method Models\AddCompliancePolicyItemToWhitelistResponse AddCompliancePolicyItemToWhitelist(Models\AddCompliancePolicyItemToWhitelistRequest $req) 将指定的检测项添加到白名单中，不显示未通过结果。
 * @method Models\AddEditAbnormalProcessRuleResponse AddEditAbnormalProcessRule(Models\AddEditAbnormalProcessRuleRequest $req) 添加编辑运行时异常进程策略
 * @method Models\AddEditAccessControlRuleResponse AddEditAccessControlRule(Models\AddEditAccessControlRuleRequest $req) 添加编辑运行时访问控制策略
 * @method Models\AddEditReverseShellWhiteListResponse AddEditReverseShellWhiteList(Models\AddEditReverseShellWhiteListRequest $req) 添加编辑运行时反弹shell白名单
 * @method Models\AddEditRiskSyscallWhiteListResponse AddEditRiskSyscallWhiteList(Models\AddEditRiskSyscallWhiteListRequest $req) 添加编辑运行时高危系统调用白名单
 * @method Models\AddEditWarningRulesResponse AddEditWarningRules(Models\AddEditWarningRulesRequest $req) 添加编辑告警策略
 * @method Models\CheckRepeatAssetImageRegistryResponse CheckRepeatAssetImageRegistry(Models\CheckRepeatAssetImageRegistryRequest $req) 检查单个镜像仓库名是否重复
 * @method Models\CreateAssetImageRegistryScanTaskResponse CreateAssetImageRegistryScanTask(Models\CreateAssetImageRegistryScanTaskRequest $req) 镜像仓库创建镜像扫描任务
 * @method Models\CreateAssetImageRegistryScanTaskOneKeyResponse CreateAssetImageRegistryScanTaskOneKey(Models\CreateAssetImageRegistryScanTaskOneKeyRequest $req) 镜像仓库创建镜像一键扫描任务
 * @method Models\CreateAssetImageScanSettingResponse CreateAssetImageScanSetting(Models\CreateAssetImageScanSettingRequest $req) 添加容器安全镜像扫描设置
 * @method Models\CreateAssetImageScanTaskResponse CreateAssetImageScanTask(Models\CreateAssetImageScanTaskRequest $req) 容器安全创建镜像扫描任务
 * @method Models\CreateCheckComponentResponse CreateCheckComponent(Models\CreateCheckComponentRequest $req) 安装检查组件，创建防护容器
 * @method Models\CreateClusterCheckTaskResponse CreateClusterCheckTask(Models\CreateClusterCheckTaskRequest $req) 创建集群检查任务，用户检查用户的集群相关风险项
 * @method Models\CreateComplianceTaskResponse CreateComplianceTask(Models\CreateComplianceTaskRequest $req) 创建合规检查任务，在资产级别触发重新检测时使用。
 * @method Models\CreateExportComplianceStatusListJobResponse CreateExportComplianceStatusListJob(Models\CreateExportComplianceStatusListJobRequest $req) 创建一个导出安全合规信息的任务
 * @method Models\CreateOrModifyPostPayCoresResponse CreateOrModifyPostPayCores(Models\CreateOrModifyPostPayCoresRequest $req) CreateOrModifyPostPayCores  创建或者编辑弹性计费上限
 * @method Models\CreateRefreshTaskResponse CreateRefreshTask(Models\CreateRefreshTaskRequest $req) 下发刷新任务，会刷新资产信息
 * @method Models\CreateVirusScanAgainResponse CreateVirusScanAgain(Models\CreateVirusScanAgainRequest $req) 运行时文件查杀重新检测
 * @method Models\CreateVirusScanTaskResponse CreateVirusScanTask(Models\CreateVirusScanTaskRequest $req) 运行时文件查杀一键扫描
 * @method Models\DeleteAbnormalProcessRulesResponse DeleteAbnormalProcessRules(Models\DeleteAbnormalProcessRulesRequest $req) 删除运行异常进程策略
 * @method Models\DeleteAccessControlRulesResponse DeleteAccessControlRules(Models\DeleteAccessControlRulesRequest $req) 删除运行访问控制策略
 * @method Models\DeleteCompliancePolicyItemFromWhitelistResponse DeleteCompliancePolicyItemFromWhitelist(Models\DeleteCompliancePolicyItemFromWhitelistRequest $req) 从白名单中删除将指定的检测项。
 * @method Models\DeleteReverseShellWhiteListsResponse DeleteReverseShellWhiteLists(Models\DeleteReverseShellWhiteListsRequest $req) 删除运行时反弹shell白名单
 * @method Models\DeleteRiskSyscallWhiteListsResponse DeleteRiskSyscallWhiteLists(Models\DeleteRiskSyscallWhiteListsRequest $req) 删除运行时高危系统调用白名单
 * @method Models\DescribeAbnormalProcessDetailResponse DescribeAbnormalProcessDetail(Models\DescribeAbnormalProcessDetailRequest $req) 查询运行时异常进程事件详细信息
 * @method Models\DescribeAbnormalProcessEventsResponse DescribeAbnormalProcessEvents(Models\DescribeAbnormalProcessEventsRequest $req) 查询运行时异常进程事件列表信息
 * @method Models\DescribeAbnormalProcessEventsExportResponse DescribeAbnormalProcessEventsExport(Models\DescribeAbnormalProcessEventsExportRequest $req) 查询运行时异常进程事件列表信息导出
 * @method Models\DescribeAbnormalProcessRuleDetailResponse DescribeAbnormalProcessRuleDetail(Models\DescribeAbnormalProcessRuleDetailRequest $req) 查询运行时异常策略详细信息
 * @method Models\DescribeAbnormalProcessRulesResponse DescribeAbnormalProcessRules(Models\DescribeAbnormalProcessRulesRequest $req) 查询运行时异常进程策略列表信息
 * @method Models\DescribeAbnormalProcessRulesExportResponse DescribeAbnormalProcessRulesExport(Models\DescribeAbnormalProcessRulesExportRequest $req) 查询运行时异常进程策略列表信息导出
 * @method Models\DescribeAccessControlDetailResponse DescribeAccessControlDetail(Models\DescribeAccessControlDetailRequest $req) 查询运行时访问控制事件的详细信息
 * @method Models\DescribeAccessControlEventsResponse DescribeAccessControlEvents(Models\DescribeAccessControlEventsRequest $req) 查询运行时访问控制事件列表
 * @method Models\DescribeAccessControlEventsExportResponse DescribeAccessControlEventsExport(Models\DescribeAccessControlEventsExportRequest $req) 查询运行时访问控制事件列表导出
 * @method Models\DescribeAccessControlRuleDetailResponse DescribeAccessControlRuleDetail(Models\DescribeAccessControlRuleDetailRequest $req) 查询运行时访问控制策略详细信息
 * @method Models\DescribeAccessControlRulesResponse DescribeAccessControlRules(Models\DescribeAccessControlRulesRequest $req) 查询运行访问控制策略列表信息
 * @method Models\DescribeAccessControlRulesExportResponse DescribeAccessControlRulesExport(Models\DescribeAccessControlRulesExportRequest $req) 查询运行时访问控制策略列表导出
 * @method Models\DescribeAffectedClusterCountResponse DescribeAffectedClusterCount(Models\DescribeAffectedClusterCountRequest $req) 获取受影响的集群数量，返回数量
 * @method Models\DescribeAffectedNodeListResponse DescribeAffectedNodeList(Models\DescribeAffectedNodeListRequest $req) 查询节点类型的影响范围，返回节点列表
 * @method Models\DescribeAffectedWorkloadListResponse DescribeAffectedWorkloadList(Models\DescribeAffectedWorkloadListRequest $req) 查询workload类型的影响范围，返回workload列表
 * @method Models\DescribeAssetAppServiceListResponse DescribeAssetAppServiceList(Models\DescribeAssetAppServiceListRequest $req) 容器安全查询app服务列表
 * @method Models\DescribeAssetComponentListResponse DescribeAssetComponentList(Models\DescribeAssetComponentListRequest $req) 容器安全搜索查询容器组件列表
 * @method Models\DescribeAssetContainerDetailResponse DescribeAssetContainerDetail(Models\DescribeAssetContainerDetailRequest $req) 查询容器详细信息
 * @method Models\DescribeAssetContainerListResponse DescribeAssetContainerList(Models\DescribeAssetContainerListRequest $req) 搜索查询容器列表
 * @method Models\DescribeAssetDBServiceListResponse DescribeAssetDBServiceList(Models\DescribeAssetDBServiceListRequest $req) 容器安全查询db服务列表
 * @method Models\DescribeAssetHostDetailResponse DescribeAssetHostDetail(Models\DescribeAssetHostDetailRequest $req) 查询主机详细信息
 * @method Models\DescribeAssetHostListResponse DescribeAssetHostList(Models\DescribeAssetHostListRequest $req) 容器安全搜索查询主机列表
 * @method Models\DescribeAssetImageBindRuleInfoResponse DescribeAssetImageBindRuleInfo(Models\DescribeAssetImageBindRuleInfoRequest $req) 镜像绑定规则列表信息，包含运行时访问控制和异常进程公用
 * @method Models\DescribeAssetImageDetailResponse DescribeAssetImageDetail(Models\DescribeAssetImageDetailRequest $req) 查询镜像详细信息
 * @method Models\DescribeAssetImageHostListResponse DescribeAssetImageHostList(Models\DescribeAssetImageHostListRequest $req) 容器安全查询镜像关联主机
 * @method Models\DescribeAssetImageListResponse DescribeAssetImageList(Models\DescribeAssetImageListRequest $req) 容器安全搜索查询镜像列表
 * @method Models\DescribeAssetImageListExportResponse DescribeAssetImageListExport(Models\DescribeAssetImageListExportRequest $req) 容器安全搜索查询镜像列表导出
 * @method Models\DescribeAssetImageRegistryAssetStatusResponse DescribeAssetImageRegistryAssetStatus(Models\DescribeAssetImageRegistryAssetStatusRequest $req) 查看镜像仓库资产更新进度状态
 * @method Models\DescribeAssetImageRegistryDetailResponse DescribeAssetImageRegistryDetail(Models\DescribeAssetImageRegistryDetailRequest $req) 镜像仓库镜像仓库列表详情
 * @method Models\DescribeAssetImageRegistryListResponse DescribeAssetImageRegistryList(Models\DescribeAssetImageRegistryListRequest $req) 镜像仓库镜像仓库列表
 * @method Models\DescribeAssetImageRegistryListExportResponse DescribeAssetImageRegistryListExport(Models\DescribeAssetImageRegistryListExportRequest $req) 镜像仓库镜像列表导出
 * @method Models\DescribeAssetImageRegistryRegistryDetailResponse DescribeAssetImageRegistryRegistryDetail(Models\DescribeAssetImageRegistryRegistryDetailRequest $req) 查看单个镜像仓库详细信息
 * @method Models\DescribeAssetImageRegistryRegistryListResponse DescribeAssetImageRegistryRegistryList(Models\DescribeAssetImageRegistryRegistryListRequest $req) 镜像仓库仓库列表
 * @method Models\DescribeAssetImageRegistryRiskInfoListResponse DescribeAssetImageRegistryRiskInfoList(Models\DescribeAssetImageRegistryRiskInfoListRequest $req) 镜像仓库查询镜像高危行为列表
 * @method Models\DescribeAssetImageRegistryRiskListExportResponse DescribeAssetImageRegistryRiskListExport(Models\DescribeAssetImageRegistryRiskListExportRequest $req) 镜像仓库敏感信息列表导出
 * @method Models\DescribeAssetImageRegistryScanStatusOneKeyResponse DescribeAssetImageRegistryScanStatusOneKey(Models\DescribeAssetImageRegistryScanStatusOneKeyRequest $req) 镜像仓库查询一键镜像扫描状态
 * @method Models\DescribeAssetImageRegistrySummaryResponse DescribeAssetImageRegistrySummary(Models\DescribeAssetImageRegistrySummaryRequest $req) 镜像仓库查询镜像统计信息
 * @method Models\DescribeAssetImageRegistryVirusListResponse DescribeAssetImageRegistryVirusList(Models\DescribeAssetImageRegistryVirusListRequest $req) 镜像仓库查询木马病毒列表
 * @method Models\DescribeAssetImageRegistryVirusListExportResponse DescribeAssetImageRegistryVirusListExport(Models\DescribeAssetImageRegistryVirusListExportRequest $req) 镜像仓库木马信息列表导出
 * @method Models\DescribeAssetImageRegistryVulListResponse DescribeAssetImageRegistryVulList(Models\DescribeAssetImageRegistryVulListRequest $req) 镜像仓库查询镜像漏洞列表
 * @method Models\DescribeAssetImageRegistryVulListExportResponse DescribeAssetImageRegistryVulListExport(Models\DescribeAssetImageRegistryVulListExportRequest $req) 镜像仓库漏洞列表导出
 * @method Models\DescribeAssetImageRiskListResponse DescribeAssetImageRiskList(Models\DescribeAssetImageRiskListRequest $req) 容器安全查询镜像风险列表
 * @method Models\DescribeAssetImageRiskListExportResponse DescribeAssetImageRiskListExport(Models\DescribeAssetImageRiskListExportRequest $req) 容器安全搜索查询镜像风险列表导出
 * @method Models\DescribeAssetImageScanSettingResponse DescribeAssetImageScanSetting(Models\DescribeAssetImageScanSettingRequest $req) 获取镜像扫描设置信息
 * @method Models\DescribeAssetImageScanStatusResponse DescribeAssetImageScanStatus(Models\DescribeAssetImageScanStatusRequest $req) 容器安全查询镜像扫描状态
 * @method Models\DescribeAssetImageScanTaskResponse DescribeAssetImageScanTask(Models\DescribeAssetImageScanTaskRequest $req) 查询正在一键扫描的镜像扫描taskid
 * @method Models\DescribeAssetImageSimpleListResponse DescribeAssetImageSimpleList(Models\DescribeAssetImageSimpleListRequest $req) 容器安全搜索查询镜像简略信息列表
 * @method Models\DescribeAssetImageVirusListResponse DescribeAssetImageVirusList(Models\DescribeAssetImageVirusListRequest $req) 容器安全查询镜像病毒列表
 * @method Models\DescribeAssetImageVirusListExportResponse DescribeAssetImageVirusListExport(Models\DescribeAssetImageVirusListExportRequest $req) 容器安全搜索查询镜像木马列表导出
 * @method Models\DescribeAssetImageVulListResponse DescribeAssetImageVulList(Models\DescribeAssetImageVulListRequest $req) 容器安全查询镜像漏洞列表
 * @method Models\DescribeAssetImageVulListExportResponse DescribeAssetImageVulListExport(Models\DescribeAssetImageVulListExportRequest $req) 容器安全搜索查询镜像漏洞列表导出
 * @method Models\DescribeAssetPortListResponse DescribeAssetPortList(Models\DescribeAssetPortListRequest $req) 容器安全搜索查询端口占用列表
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) 容器安全搜索查询进程列表
 * @method Models\DescribeAssetSummaryResponse DescribeAssetSummary(Models\DescribeAssetSummaryRequest $req) 查询账户容器、镜像等统计信息
 * @method Models\DescribeAssetWebServiceListResponse DescribeAssetWebServiceList(Models\DescribeAssetWebServiceListRequest $req) 容器安全查询web服务列表
 * @method Models\DescribeCheckItemListResponse DescribeCheckItemList(Models\DescribeCheckItemListRequest $req) 查询所有检查项接口，返回总数和检查项列表
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 查询单个集群的详细信息
 * @method Models\DescribeClusterSummaryResponse DescribeClusterSummary(Models\DescribeClusterSummaryRequest $req) 查询用户集群资产总览
 * @method Models\DescribeComplianceAssetDetailInfoResponse DescribeComplianceAssetDetailInfo(Models\DescribeComplianceAssetDetailInfoRequest $req) 查询某个资产的详情
 * @method Models\DescribeComplianceAssetListResponse DescribeComplianceAssetList(Models\DescribeComplianceAssetListRequest $req) 查询某类资产的列表
 * @method Models\DescribeComplianceAssetPolicyItemListResponse DescribeComplianceAssetPolicyItemList(Models\DescribeComplianceAssetPolicyItemListRequest $req) 查询某资产下的检测项列表
 * @method Models\DescribeCompliancePeriodTaskListResponse DescribeCompliancePeriodTaskList(Models\DescribeCompliancePeriodTaskListRequest $req) 查询合规检测的定时任务列表
 * @method Models\DescribeCompliancePolicyItemAffectedAssetListResponse DescribeCompliancePolicyItemAffectedAssetList(Models\DescribeCompliancePolicyItemAffectedAssetListRequest $req) 按照 检测项 → 资产 的两级层次展开的第二层级：资产层级。
 * @method Models\DescribeCompliancePolicyItemAffectedSummaryResponse DescribeCompliancePolicyItemAffectedSummary(Models\DescribeCompliancePolicyItemAffectedSummaryRequest $req) 按照 检测项 → 资产 的两级层次展开的第一层级：检测项层级。
 * @method Models\DescribeComplianceScanFailedAssetListResponse DescribeComplianceScanFailedAssetList(Models\DescribeComplianceScanFailedAssetListRequest $req) 按照 资产 → 检测项 二层结构展示的信息。这里查询第一层 资产的通过率汇总信息。
 * @method Models\DescribeComplianceTaskAssetSummaryResponse DescribeComplianceTaskAssetSummary(Models\DescribeComplianceTaskAssetSummaryRequest $req) 查询上次任务的资产通过率汇总信息
 * @method Models\DescribeComplianceTaskPolicyItemSummaryListResponse DescribeComplianceTaskPolicyItemSummaryList(Models\DescribeComplianceTaskPolicyItemSummaryListRequest $req) 查询最近一次任务发现的检测项的汇总信息列表，按照 检测项 → 资产 的两级层次展开。
 * @method Models\DescribeComplianceWhitelistItemListResponse DescribeComplianceWhitelistItemList(Models\DescribeComplianceWhitelistItemListRequest $req) 查询白名单列表
 * @method Models\DescribeContainerAssetSummaryResponse DescribeContainerAssetSummary(Models\DescribeContainerAssetSummaryRequest $req) 查询容器资产概览信息
 * @method Models\DescribeContainerSecEventSummaryResponse DescribeContainerSecEventSummary(Models\DescribeContainerSecEventSummaryRequest $req) 查询容器安全未处理事件信息
 * @method Models\DescribeEscapeEventDetailResponse DescribeEscapeEventDetail(Models\DescribeEscapeEventDetailRequest $req) DescribeEscapeEventDetail  查询容器逃逸事件详情
 * @method Models\DescribeEscapeEventInfoResponse DescribeEscapeEventInfo(Models\DescribeEscapeEventInfoRequest $req) DescribeEscapeEventInfo 查询容器逃逸事件列表
 * @method Models\DescribeEscapeEventsExportResponse DescribeEscapeEventsExport(Models\DescribeEscapeEventsExportRequest $req) DescribeEscapeEventsExport  查询容器逃逸事件列表导出
 * @method Models\DescribeEscapeRuleInfoResponse DescribeEscapeRuleInfo(Models\DescribeEscapeRuleInfoRequest $req) DescribeEscapeRuleInfo 查询容器逃逸扫描规则信息
 * @method Models\DescribeEscapeSafeStateResponse DescribeEscapeSafeState(Models\DescribeEscapeSafeStateRequest $req) DescribeEscapeSafeState 查询容器逃逸安全状态
 * @method Models\DescribeExportJobResultResponse DescribeExportJobResult(Models\DescribeExportJobResultRequest $req) 查询导出任务的结果
 * @method Models\DescribeImageAuthorizedInfoResponse DescribeImageAuthorizedInfo(Models\DescribeImageAuthorizedInfoRequest $req) DescribeImageAuthorizedInfo  查询镜像授权信息
 * @method Models\DescribeImageRegistryTimingScanTaskResponse DescribeImageRegistryTimingScanTask(Models\DescribeImageRegistryTimingScanTaskRequest $req) 镜像仓库查看定时任务
 * @method Models\DescribeImageRiskSummaryResponse DescribeImageRiskSummary(Models\DescribeImageRiskSummaryRequest $req) 查询本地镜像风险概览
 * @method Models\DescribeImageRiskTendencyResponse DescribeImageRiskTendency(Models\DescribeImageRiskTendencyRequest $req) 查询容器安全本地镜像风险趋势
 * @method Models\DescribeImageSimpleListResponse DescribeImageSimpleList(Models\DescribeImageSimpleListRequest $req) DescribeImageSimpleList 查询全部镜像列表
 * @method Models\DescribePostPayDetailResponse DescribePostPayDetail(Models\DescribePostPayDetailRequest $req) DescribePostPayDetail  查询后付费详情
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) DescribeProVersionInfo  查询专业版需购买信息
 * @method Models\DescribePurchaseStateInfoResponse DescribePurchaseStateInfo(Models\DescribePurchaseStateInfoRequest $req) DescribePurchaseStateInfo 查询容器安全服务已购买信息
 * @method Models\DescribeRefreshTaskResponse DescribeRefreshTask(Models\DescribeRefreshTaskRequest $req) 查询刷新任务
 * @method Models\DescribeReverseShellDetailResponse DescribeReverseShellDetail(Models\DescribeReverseShellDetailRequest $req) 查询运行时反弹shell事件详细信息
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) 查询运行时反弹shell事件列表信息
 * @method Models\DescribeReverseShellEventsExportResponse DescribeReverseShellEventsExport(Models\DescribeReverseShellEventsExportRequest $req) 查询运行时反弹shell事件列表信息导出
 * @method Models\DescribeReverseShellWhiteListDetailResponse DescribeReverseShellWhiteListDetail(Models\DescribeReverseShellWhiteListDetailRequest $req) 查询运行时反弹shell白名单详细信息
 * @method Models\DescribeReverseShellWhiteListsResponse DescribeReverseShellWhiteLists(Models\DescribeReverseShellWhiteListsRequest $req) 查询运行时运行时反弹shell白名单列表信息
 * @method Models\DescribeRiskListResponse DescribeRiskList(Models\DescribeRiskListRequest $req) 查询最近一次任务发现的风险项的信息列表，支持根据特殊字段进行过滤
 * @method Models\DescribeRiskSyscallDetailResponse DescribeRiskSyscallDetail(Models\DescribeRiskSyscallDetailRequest $req) 查询高危系统调用事件详细信息
 * @method Models\DescribeRiskSyscallEventsResponse DescribeRiskSyscallEvents(Models\DescribeRiskSyscallEventsRequest $req) 查询运行时运行时高危系统调用列表信息
 * @method Models\DescribeRiskSyscallEventsExportResponse DescribeRiskSyscallEventsExport(Models\DescribeRiskSyscallEventsExportRequest $req) 运行时高危系统调用列表导出
 * @method Models\DescribeRiskSyscallNamesResponse DescribeRiskSyscallNames(Models\DescribeRiskSyscallNamesRequest $req) 查询运行时高危系统调用系统名称列表
 * @method Models\DescribeRiskSyscallWhiteListDetailResponse DescribeRiskSyscallWhiteListDetail(Models\DescribeRiskSyscallWhiteListDetailRequest $req) 查询运行时高危系统调用白名单详细信息
 * @method Models\DescribeRiskSyscallWhiteListsResponse DescribeRiskSyscallWhiteLists(Models\DescribeRiskSyscallWhiteListsRequest $req) 查询运行时高危系统调用白名单列表信息
 * @method Models\DescribeSecEventsTendencyResponse DescribeSecEventsTendency(Models\DescribeSecEventsTendencyRequest $req) 查询容器运行时安全事件趋势
 * @method Models\DescribeTaskResultSummaryResponse DescribeTaskResultSummary(Models\DescribeTaskResultSummaryRequest $req) 查询检查结果总览，返回受影响的节点数量，返回7天的数据，总共7个
 * @method Models\DescribeUnfinishRefreshTaskResponse DescribeUnfinishRefreshTask(Models\DescribeUnfinishRefreshTaskRequest $req) 查询未完成的刷新资产任务信息
 * @method Models\DescribeUserClusterResponse DescribeUserCluster(Models\DescribeUserClusterRequest $req) 安全概览和集群安全页进入调用该接口，查询用户集群相关信息。
 * @method Models\DescribeValueAddedSrvInfoResponse DescribeValueAddedSrvInfo(Models\DescribeValueAddedSrvInfoRequest $req) DescribeValueAddedSrvInfo查询增值服务需购买信息
 * @method Models\DescribeVirusDetailResponse DescribeVirusDetail(Models\DescribeVirusDetailRequest $req) 运行时查询木马文件信息
 * @method Models\DescribeVirusListResponse DescribeVirusList(Models\DescribeVirusListRequest $req) 运行时文件查杀事件列表
 * @method Models\DescribeVirusMonitorSettingResponse DescribeVirusMonitorSetting(Models\DescribeVirusMonitorSettingRequest $req) 运行时查询文件查杀实时监控设置
 * @method Models\DescribeVirusScanSettingResponse DescribeVirusScanSetting(Models\DescribeVirusScanSettingRequest $req) 运行时查询文件查杀设置
 * @method Models\DescribeVirusScanTaskStatusResponse DescribeVirusScanTaskStatus(Models\DescribeVirusScanTaskStatusRequest $req) 运行时查询文件查杀任务状态
 * @method Models\DescribeVirusScanTimeoutSettingResponse DescribeVirusScanTimeoutSetting(Models\DescribeVirusScanTimeoutSettingRequest $req) 运行时文件扫描超时设置查询
 * @method Models\DescribeVirusSummaryResponse DescribeVirusSummary(Models\DescribeVirusSummaryRequest $req) 运行时查询木马概览信息
 * @method Models\DescribeVirusTaskListResponse DescribeVirusTaskList(Models\DescribeVirusTaskListRequest $req) 运行时查询文件查杀任务列表
 * @method Models\DescribeWarningRulesResponse DescribeWarningRules(Models\DescribeWarningRulesRequest $req) 获取告警策略列表
 * @method Models\ExportVirusListResponse ExportVirusList(Models\ExportVirusListRequest $req) 运行时文件查杀事件列表导出
 * @method Models\InitializeUserComplianceEnvironmentResponse InitializeUserComplianceEnvironment(Models\InitializeUserComplianceEnvironmentRequest $req) 为客户初始化合规基线的使用环境，创建必要的数据和选项。
 * @method Models\ModifyAbnormalProcessRuleStatusResponse ModifyAbnormalProcessRuleStatus(Models\ModifyAbnormalProcessRuleStatusRequest $req) 修改运行时异常进程策略的开启关闭状态
 * @method Models\ModifyAbnormalProcessStatusResponse ModifyAbnormalProcessStatus(Models\ModifyAbnormalProcessStatusRequest $req) 修改异常进程事件的状态信息
 * @method Models\ModifyAccessControlRuleStatusResponse ModifyAccessControlRuleStatus(Models\ModifyAccessControlRuleStatusRequest $req) 修改运行时访问控制策略的状态，启用或者禁用
 * @method Models\ModifyAccessControlStatusResponse ModifyAccessControlStatus(Models\ModifyAccessControlStatusRequest $req) 修改运行时访问控制事件状态信息
 * @method Models\ModifyAssetResponse ModifyAsset(Models\ModifyAssetRequest $req) 容器安全主机资产刷新
 * @method Models\ModifyAssetImageRegistryScanStopResponse ModifyAssetImageRegistryScanStop(Models\ModifyAssetImageRegistryScanStopRequest $req) 镜像仓库停止镜像扫描任务
 * @method Models\ModifyAssetImageRegistryScanStopOneKeyResponse ModifyAssetImageRegistryScanStopOneKey(Models\ModifyAssetImageRegistryScanStopOneKeyRequest $req) 镜像仓库停止镜像一键扫描任务
 * @method Models\ModifyAssetImageScanStopResponse ModifyAssetImageScanStop(Models\ModifyAssetImageScanStopRequest $req) 容器安全停止镜像扫描
 * @method Models\ModifyCompliancePeriodTaskResponse ModifyCompliancePeriodTask(Models\ModifyCompliancePeriodTaskRequest $req) 修改定时任务的设置，包括检测周期、开启/禁用合规基准。
 * @method Models\ModifyEscapeEventStatusResponse ModifyEscapeEventStatus(Models\ModifyEscapeEventStatusRequest $req) ModifyEscapeEventStatus  修改容器逃逸扫描事件状态
 * @method Models\ModifyEscapeRuleResponse ModifyEscapeRule(Models\ModifyEscapeRuleRequest $req) ModifyEscapeRule  修改容器逃逸扫描规则信息
 * @method Models\ModifyReverseShellStatusResponse ModifyReverseShellStatus(Models\ModifyReverseShellStatusRequest $req) 修改反弹shell事件的状态信息
 * @method Models\ModifyRiskSyscallStatusResponse ModifyRiskSyscallStatus(Models\ModifyRiskSyscallStatusRequest $req) 修改高危系统调用事件的状态信息
 * @method Models\ModifyVirusFileStatusResponse ModifyVirusFileStatus(Models\ModifyVirusFileStatusRequest $req) 运行时更新木马文件事件状态
 * @method Models\ModifyVirusMonitorSettingResponse ModifyVirusMonitorSetting(Models\ModifyVirusMonitorSettingRequest $req) 运行时更新文件查杀实时监控设置
 * @method Models\ModifyVirusScanSettingResponse ModifyVirusScanSetting(Models\ModifyVirusScanSettingRequest $req) 运行时更新文件查杀设置
 * @method Models\ModifyVirusScanTimeoutSettingResponse ModifyVirusScanTimeoutSetting(Models\ModifyVirusScanTimeoutSettingRequest $req) 运行时文件扫描超时设置
 * @method Models\RemoveAssetImageRegistryRegistryDetailResponse RemoveAssetImageRegistryRegistryDetail(Models\RemoveAssetImageRegistryRegistryDetailRequest $req) 删除单个镜像仓库详细信息
 * @method Models\RenewImageAuthorizeStateResponse RenewImageAuthorizeState(Models\RenewImageAuthorizeStateRequest $req) RenewImageAuthorizeState   授权镜像扫描
 * @method Models\ScanComplianceAssetsResponse ScanComplianceAssets(Models\ScanComplianceAssetsRequest $req) 重新检测选定的资产
 * @method Models\ScanComplianceAssetsByPolicyItemResponse ScanComplianceAssetsByPolicyItem(Models\ScanComplianceAssetsByPolicyItemRequest $req) 用指定的检测项重新检测选定的资产，返回创建的合规检查任务的ID。
 * @method Models\ScanCompliancePolicyItemsResponse ScanCompliancePolicyItems(Models\ScanCompliancePolicyItemsRequest $req) 重新检测选的检测项下的所有资产，返回创建的合规检查任务的ID。
 * @method Models\ScanComplianceScanFailedAssetsResponse ScanComplianceScanFailedAssets(Models\ScanComplianceScanFailedAssetsRequest $req) 重新检测选定的检测失败的资产下的所有失败的检测项，返回创建的合规检查任务的ID。
 * @method Models\SetCheckModeResponse SetCheckMode(Models\SetCheckModeRequest $req) 设置检测模式和自动检查
 * @method Models\StopVirusScanTaskResponse StopVirusScanTask(Models\StopVirusScanTaskRequest $req) 运行时停止木马查杀任务
 * @method Models\SyncAssetImageRegistryAssetResponse SyncAssetImageRegistryAsset(Models\SyncAssetImageRegistryAssetRequest $req) 镜像仓库资产刷新
 * @method Models\UpdateAssetImageRegistryRegistryDetailResponse UpdateAssetImageRegistryRegistryDetail(Models\UpdateAssetImageRegistryRegistryDetailRequest $req) 更新单个镜像仓库详细信息
 * @method Models\UpdateImageRegistryTimingScanTaskResponse UpdateImageRegistryTimingScanTask(Models\UpdateImageRegistryTimingScanTaskRequest $req) 镜像仓库更新定时任务
 */

class TcssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcss.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcss";

    /**
     * @var string
     */
    protected $version = "2020-11-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcss")."\\"."V20201101\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
