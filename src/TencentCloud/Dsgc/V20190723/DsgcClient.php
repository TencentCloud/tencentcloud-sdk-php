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

namespace TencentCloud\Dsgc\V20190723;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dsgc\V20190723\Models as Models;

/**
 * @method Models\AuthorizeDSPAMetaResourcesResponse AuthorizeDSPAMetaResources(Models\AuthorizeDSPAMetaResourcesRequest $req) 授权用户云资源
 * @method Models\BindDSPAResourceCosBucketsResponse BindDSPAResourceCosBuckets(Models\BindDSPAResourceCosBucketsRequest $req) 绑定或解绑COS桶
 * @method Models\BindDSPAResourceDatabasesResponse BindDSPAResourceDatabases(Models\BindDSPAResourceDatabasesRequest $req) 绑定或解绑数据库实例DB
 * @method Models\CopyDSPATemplateResponse CopyDSPATemplate(Models\CopyDSPATemplateRequest $req) 复制合规组模版
 * @method Models\CreateAssetSortingReportRetryTaskResponse CreateAssetSortingReportRetryTask(Models\CreateAssetSortingReportRetryTaskRequest $req) 创建资产梳理报表导出重试任务
 * @method Models\CreateAssetSortingReportTaskResponse CreateAssetSortingReportTask(Models\CreateAssetSortingReportTaskRequest $req) 创建资产梳理报告任务
 * @method Models\CreateClassificationRuleResponse CreateClassificationRule(Models\CreateClassificationRuleRequest $req) 创建识别规则
 * @method Models\CreateDSPAAssessmentRiskLevelResponse CreateDSPAAssessmentRiskLevel(Models\CreateDSPAAssessmentRiskLevelRequest $req) 风险项页面---创建风险等级
 * @method Models\CreateDSPAAssessmentRiskTemplateResponse CreateDSPAAssessmentRiskTemplate(Models\CreateDSPAAssessmentRiskTemplateRequest $req) 风险评估模版---创建风险评估模版
 * @method Models\CreateDSPAAssessmentTaskResponse CreateDSPAAssessmentTask(Models\CreateDSPAAssessmentTaskRequest $req) 新建DSPA风险评估任务
 * @method Models\CreateDSPACOSDiscoveryTaskResponse CreateDSPACOSDiscoveryTask(Models\CreateDSPACOSDiscoveryTaskRequest $req) 新增COS分类分级扫描任务，单个用户最多允许创建100个任务。
 * @method Models\CreateDSPACategoryResponse CreateDSPACategory(Models\CreateDSPACategoryRequest $req) 新增分类，单个用户最多允许创建100个数据分类。
 * @method Models\CreateDSPACategoryRelationResponse CreateDSPACategoryRelation(Models\CreateDSPACategoryRelationRequest $req) 创建分类关联关系
 * @method Models\CreateDSPAComplianceGroupResponse CreateDSPAComplianceGroup(Models\CreateDSPAComplianceGroupRequest $req) 新增分类分级模板，单个用户最多允许创建100个合规组。
 * @method Models\CreateDSPAComplianceRulesResponse CreateDSPAComplianceRules(Models\CreateDSPAComplianceRulesRequest $req) 创建合规组分类规则关联关系
 * @method Models\CreateDSPACosMetaResourcesResponse CreateDSPACosMetaResources(Models\CreateDSPACosMetaResourcesRequest $req) 添加COS元数据
 * @method Models\CreateDSPADbMetaResourcesResponse CreateDSPADbMetaResources(Models\CreateDSPADbMetaResourcesRequest $req) 添加用户云上数据库类型资源
 * @method Models\CreateDSPADiscoveryRuleResponse CreateDSPADiscoveryRule(Models\CreateDSPADiscoveryRuleRequest $req) 新增分类分级规则，单个用户最多允许创建200个规则。

 * @method Models\CreateDSPADiscoveryTaskResponse CreateDSPADiscoveryTask(Models\CreateDSPADiscoveryTaskRequest $req) 新增分类分级任务，单个用户最多允许创建100个任务。
 * @method Models\CreateDSPALevelGroupResponse CreateDSPALevelGroup(Models\CreateDSPALevelGroupRequest $req) 新增分级，单个Casb实例最多允许创建100个数据分级
 * @method Models\CreateDSPAMetaResourcesResponse CreateDSPAMetaResources(Models\CreateDSPAMetaResourcesRequest $req) 添加用户云上资源列表
 * @method Models\CreateDSPASelfBuildMetaResourceResponse CreateDSPASelfBuildMetaResource(Models\CreateDSPASelfBuildMetaResourceRequest $req) 新建用户自建云资源
 * @method Models\CreateIdentifyRuleAnotherNameResponse CreateIdentifyRuleAnotherName(Models\CreateIdentifyRuleAnotherNameRequest $req) 创建规则别名
 * @method Models\CreateNewClassificationResponse CreateNewClassification(Models\CreateNewClassificationRequest $req) 创建新分类
 * @method Models\CreateOrCopyStandardResponse CreateOrCopyStandard(Models\CreateOrCopyStandardRequest $req) 创建或复制分级分类模板
 * @method Models\DecribeSuggestRiskLevelMatrixResponse DecribeSuggestRiskLevelMatrix(Models\DecribeSuggestRiskLevelMatrixRequest $req) 风险等级的定义页面-创建风险等级的时候生成的一个默认的矩阵
 * @method Models\DeleteCosMetaResourceResponse DeleteCosMetaResource(Models\DeleteCosMetaResourceRequest $req) 本接口（DeleteCOSMetaData）用于删除COS元数据信息。
 * @method Models\DeleteDSPAAssessmentTaskResponse DeleteDSPAAssessmentTask(Models\DeleteDSPAAssessmentTaskRequest $req) 删除DSPA风险评估任务
 * @method Models\DeleteDSPACOSDiscoveryTaskResponse DeleteDSPACOSDiscoveryTask(Models\DeleteDSPACOSDiscoveryTaskRequest $req) 删除COS分类分级任务，该接口只有在任务状态为以下几个状态值时才支持正确删除：
0 待扫描，
2 扫描终止， 
3 扫描成功，
4 扫描失败
 * @method Models\DeleteDSPACOSDiscoveryTaskResultResponse DeleteDSPACOSDiscoveryTaskResult(Models\DeleteDSPACOSDiscoveryTaskResultRequest $req) 删除COS分类分级任务结果
 * @method Models\DeleteDSPADiscoveryTaskResponse DeleteDSPADiscoveryTask(Models\DeleteDSPADiscoveryTaskRequest $req) 删除分类分级识别任务，该接口只有在任务状态为以下几个状态值时才支持正确删除：
0 待扫描，
2 扫描终止， 
3 扫描成功，
4 扫描失败
 * @method Models\DeleteDSPADiscoveryTaskResultResponse DeleteDSPADiscoveryTaskResult(Models\DeleteDSPADiscoveryTaskResultRequest $req) 删除分类分级识别任务结果
 * @method Models\DeleteDSPAMetaResourceResponse DeleteDSPAMetaResource(Models\DeleteDSPAMetaResourceRequest $req) 删除用户云资源
 * @method Models\DescribeAssetDetailDataExportResultResponse DescribeAssetDetailDataExportResult(Models\DescribeAssetDetailDataExportResultRequest $req) 查询敏感数据导出结果URL
 * @method Models\DescribeAssetOverviewResponse DescribeAssetOverview(Models\DescribeAssetOverviewRequest $req) 数据资产报告页面-查询数据资产概览接口（包括数据库资产详情和存储资产详情）
 * @method Models\DescribeBindDBListResponse DescribeBindDBList(Models\DescribeBindDBListRequest $req) 查询DB绑定的列表
 * @method Models\DescribeCOSAssetSensitiveDistributionResponse DescribeCOSAssetSensitiveDistribution(Models\DescribeCOSAssetSensitiveDistributionRequest $req) 数据资产报告-查询cos的资产分布详情接口
 * @method Models\DescribeClassificationInfoResponse DescribeClassificationInfo(Models\DescribeClassificationInfoRequest $req) 查询分类信息

 * @method Models\DescribeClassificationRuleCountResponse DescribeClassificationRuleCount(Models\DescribeClassificationRuleCountRequest $req) 查询标准下所有分类的识别规则数量(不算子分类下的识别规则)
 * @method Models\DescribeDSPAAssessmentHighRiskTop10OverviewResponse DescribeDSPAAssessmentHighRiskTop10Overview(Models\DescribeDSPAAssessmentHighRiskTop10OverviewRequest $req) 查询高风险资产的top10
 * @method Models\DescribeDSPAAssessmentLatestRiskDetailInfoResponse DescribeDSPAAssessmentLatestRiskDetailInfo(Models\DescribeDSPAAssessmentLatestRiskDetailInfoRequest $req) 查询最新风险项详情数据
 * @method Models\DescribeDSPAAssessmentLatestRiskListResponse DescribeDSPAAssessmentLatestRiskList(Models\DescribeDSPAAssessmentLatestRiskListRequest $req) 查询最新的风险详情列表数据
 * @method Models\DescribeDSPAAssessmentNewDiscoveredRiskOverviewResponse DescribeDSPAAssessmentNewDiscoveredRiskOverview(Models\DescribeDSPAAssessmentNewDiscoveredRiskOverviewRequest $req) 风险概览-查询新发现风险统计数
 * @method Models\DescribeDSPAAssessmentPendingRiskOverviewResponse DescribeDSPAAssessmentPendingRiskOverview(Models\DescribeDSPAAssessmentPendingRiskOverviewRequest $req) 风险概览-查询待处理风险统计数
 * @method Models\DescribeDSPAAssessmentProcessingRiskOverviewResponse DescribeDSPAAssessmentProcessingRiskOverview(Models\DescribeDSPAAssessmentProcessingRiskOverviewRequest $req) 风险概览-查询处理中风险统计数
 * @method Models\DescribeDSPAAssessmentRiskAmountOverviewResponse DescribeDSPAAssessmentRiskAmountOverview(Models\DescribeDSPAAssessmentRiskAmountOverviewRequest $req) 风险概览页风险数量和受影响资产数概览统计
 * @method Models\DescribeDSPAAssessmentRiskDatasourceTop5Response DescribeDSPAAssessmentRiskDatasourceTop5(Models\DescribeDSPAAssessmentRiskDatasourceTop5Request $req) 受影响资产TOP5统计
 * @method Models\DescribeDSPAAssessmentRiskDealedOverviewResponse DescribeDSPAAssessmentRiskDealedOverview(Models\DescribeDSPAAssessmentRiskDealedOverviewRequest $req) 遗留待处理&昨日完成风险处置概览统计
 * @method Models\DescribeDSPAAssessmentRiskDealedTrendResponse DescribeDSPAAssessmentRiskDealedTrend(Models\DescribeDSPAAssessmentRiskDealedTrendRequest $req) 风险项处理趋势统计
 * @method Models\DescribeDSPAAssessmentRiskDistributionOverviewResponse DescribeDSPAAssessmentRiskDistributionOverview(Models\DescribeDSPAAssessmentRiskDistributionOverviewRequest $req) 查询风险分布数据，包含风险类型分布，风险详情分布，风险资产的分布
 * @method Models\DescribeDSPAAssessmentRiskItemTop5Response DescribeDSPAAssessmentRiskItemTop5(Models\DescribeDSPAAssessmentRiskItemTop5Request $req) 风险分类TOP5统计
 * @method Models\DescribeDSPAAssessmentRiskLevelDetailResponse DescribeDSPAAssessmentRiskLevelDetail(Models\DescribeDSPAAssessmentRiskLevelDetailRequest $req) 风险项页面----查询风险等级的详情数据
 * @method Models\DescribeDSPAAssessmentRiskLevelListResponse DescribeDSPAAssessmentRiskLevelList(Models\DescribeDSPAAssessmentRiskLevelListRequest $req) 风险项页面----查询风险等级的列表
 * @method Models\DescribeDSPAAssessmentRiskLevelTrendResponse DescribeDSPAAssessmentRiskLevelTrend(Models\DescribeDSPAAssessmentRiskLevelTrendRequest $req) 风险级别趋势统计
 * @method Models\DescribeDSPAAssessmentRiskOverviewResponse DescribeDSPAAssessmentRiskOverview(Models\DescribeDSPAAssessmentRiskOverviewRequest $req) 风险数量概览统计
 * @method Models\DescribeDSPAAssessmentRiskProcessHistoryResponse DescribeDSPAAssessmentRiskProcessHistory(Models\DescribeDSPAAssessmentRiskProcessHistoryRequest $req) 修改最新评估风险项状态
 * @method Models\DescribeDSPAAssessmentRiskSideDistributedResponse DescribeDSPAAssessmentRiskSideDistributed(Models\DescribeDSPAAssessmentRiskSideDistributedRequest $req) 风险评估概览页，查询风险面的分布
 * @method Models\DescribeDSPAAssessmentRiskSideListResponse DescribeDSPAAssessmentRiskSideList(Models\DescribeDSPAAssessmentRiskSideListRequest $req) 风险评估概览页，查询风险面的分布
 * @method Models\DescribeDSPAAssessmentRiskTemplateDetailResponse DescribeDSPAAssessmentRiskTemplateDetail(Models\DescribeDSPAAssessmentRiskTemplateDetailRequest $req) 风险项页面--查看评估模版详情
 * @method Models\DescribeDSPAAssessmentRiskTemplateVulnerableListResponse DescribeDSPAAssessmentRiskTemplateVulnerableList(Models\DescribeDSPAAssessmentRiskTemplateVulnerableListRequest $req) 风险模版页面--查询风险模版中的脆弱项配置
 * @method Models\DescribeDSPAAssessmentRisksResponse DescribeDSPAAssessmentRisks(Models\DescribeDSPAAssessmentRisksRequest $req) 获取DSPA评估风险项列表
 * @method Models\DescribeDSPAAssessmentTasksResponse DescribeDSPAAssessmentTasks(Models\DescribeDSPAAssessmentTasksRequest $req) 获取DSPA评估任务列表
 * @method Models\DescribeDSPAAssessmentTemplateControlItemsResponse DescribeDSPAAssessmentTemplateControlItems(Models\DescribeDSPAAssessmentTemplateControlItemsRequest $req) 获取DSPA评估模版关联的评估控制项列表
 * @method Models\DescribeDSPAAssessmentTemplatesResponse DescribeDSPAAssessmentTemplates(Models\DescribeDSPAAssessmentTemplatesRequest $req) 获取DSPA评估模板列表
 * @method Models\DescribeDSPACOSDataAssetBucketsResponse DescribeDSPACOSDataAssetBuckets(Models\DescribeDSPACOSDataAssetBucketsRequest $req) 获取COS敏感数据资产桶列表
 * @method Models\DescribeDSPACOSDataAssetByComplianceIdResponse DescribeDSPACOSDataAssetByComplianceId(Models\DescribeDSPACOSDataAssetByComplianceIdRequest $req) 获取COS单个模板下的敏感数据资产
 * @method Models\DescribeDSPACOSDataAssetDetailResponse DescribeDSPACOSDataAssetDetail(Models\DescribeDSPACOSDataAssetDetailRequest $req) 获取COS分类分级数据资产详情
 * @method Models\DescribeDSPACOSDiscoveryTaskDetailResponse DescribeDSPACOSDiscoveryTaskDetail(Models\DescribeDSPACOSDiscoveryTaskDetailRequest $req) 获取COS分类分级任务详情
 * @method Models\DescribeDSPACOSDiscoveryTaskFilesResponse DescribeDSPACOSDiscoveryTaskFiles(Models\DescribeDSPACOSDiscoveryTaskFilesRequest $req) 获取COS分类分级任务结果详情文件列表
 * @method Models\DescribeDSPACOSDiscoveryTaskResultResponse DescribeDSPACOSDiscoveryTaskResult(Models\DescribeDSPACOSDiscoveryTaskResultRequest $req) 获取COS分类分级任务结果，该接口只有在任务状态为以下状态时才支持结果正常查询：
3 扫描成功，
4 扫描失败
 * @method Models\DescribeDSPACOSDiscoveryTasksResponse DescribeDSPACOSDiscoveryTasks(Models\DescribeDSPACOSDiscoveryTasksRequest $req) 获取COS分类分级任务列表
 * @method Models\DescribeDSPACOSTaskResultDetailResponse DescribeDSPACOSTaskResultDetail(Models\DescribeDSPACOSTaskResultDetailRequest $req) 获取COS分类分级任务结果详情，该接口只有在任务状态为时才支持结果正确查询：
3 扫描成功
 * @method Models\DescribeDSPACategoriesResponse DescribeDSPACategories(Models\DescribeDSPACategoriesRequest $req) 获取敏感数据分类列表
 * @method Models\DescribeDSPACategoryRuleStatisticResponse DescribeDSPACategoryRuleStatistic(Models\DescribeDSPACategoryRuleStatisticRequest $req) 获取分类规则统计信息
 * @method Models\DescribeDSPACategoryRulesResponse DescribeDSPACategoryRules(Models\DescribeDSPACategoryRulesRequest $req) 获取合规组分类规则信息
 * @method Models\DescribeDSPACategoryTreeResponse DescribeDSPACategoryTree(Models\DescribeDSPACategoryTreeRequest $req) 获取分类树信息
 * @method Models\DescribeDSPACategoryTreeWithRulesResponse DescribeDSPACategoryTreeWithRules(Models\DescribeDSPACategoryTreeWithRulesRequest $req) 获取分类规则树信息
 * @method Models\DescribeDSPAComplianceGroupDetailResponse DescribeDSPAComplianceGroupDetail(Models\DescribeDSPAComplianceGroupDetailRequest $req) 获取模板详情信息
 * @method Models\DescribeDSPAComplianceGroupsResponse DescribeDSPAComplianceGroups(Models\DescribeDSPAComplianceGroupsRequest $req) 获取分类分级模板列表
 * @method Models\DescribeDSPAComplianceUpdateNotificationResponse DescribeDSPAComplianceUpdateNotification(Models\DescribeDSPAComplianceUpdateNotificationRequest $req) 获取模板更新提示信息
 * @method Models\DescribeDSPADataSourceDbInfoResponse DescribeDSPADataSourceDbInfo(Models\DescribeDSPADataSourceDbInfoRequest $req) 获取数据源的数据库信息
 * @method Models\DescribeDSPADiscoveryRulesResponse DescribeDSPADiscoveryRules(Models\DescribeDSPADiscoveryRulesRequest $req) 获取分类分级规则列表
 * @method Models\DescribeDSPADiscoveryServiceStatusResponse DescribeDSPADiscoveryServiceStatus(Models\DescribeDSPADiscoveryServiceStatusRequest $req) 用于查询该用户是否已开通分类分级服务
 * @method Models\DescribeDSPADiscoveryTaskDetailResponse DescribeDSPADiscoveryTaskDetail(Models\DescribeDSPADiscoveryTaskDetailRequest $req) 获取分类分级任务详情
 * @method Models\DescribeDSPADiscoveryTaskResultResponse DescribeDSPADiscoveryTaskResult(Models\DescribeDSPADiscoveryTaskResultRequest $req) 获取分类分级任务结果，该接口只有在任务状态为以下状态时才支持结果正常查询：
3 扫描成功，
4 扫描失败
 * @method Models\DescribeDSPADiscoveryTaskResultDetailResponse DescribeDSPADiscoveryTaskResultDetail(Models\DescribeDSPADiscoveryTaskResultDetailRequest $req) 获取分类分级任务结果详情，该接口只有在任务状态为时才支持结果正确查询：
3 扫描成功
 * @method Models\DescribeDSPADiscoveryTaskTablesResponse DescribeDSPADiscoveryTaskTables(Models\DescribeDSPADiscoveryTaskTablesRequest $req) 获取分级分级扫描的表集合
 * @method Models\DescribeDSPAESDataAssetByComplianceIdResponse DescribeDSPAESDataAssetByComplianceId(Models\DescribeDSPAESDataAssetByComplianceIdRequest $req) 根据合规组id，去查询ES的概览页统计数据
 * @method Models\DescribeDSPAESDataAssetDetailResponse DescribeDSPAESDataAssetDetail(Models\DescribeDSPAESDataAssetDetailRequest $req) 根据合规组id，去查询ES的概览页下的统计列表数据
 * @method Models\DescribeDSPAESDataSampleResponse DescribeDSPAESDataSample(Models\DescribeDSPAESDataSampleRequest $req) 获取ES扫描结果数据样本
 * @method Models\DescribeDSPAESDiscoveryTaskResultDetailResponse DescribeDSPAESDiscoveryTaskResultDetail(Models\DescribeDSPAESDiscoveryTaskResultDetailRequest $req) 获取ES的分类分级任务结果详情，该接口只有在任务状态为时才支持结果正确查询：
3 扫描成功
 * @method Models\DescribeDSPALevelDetailResponse DescribeDSPALevelDetail(Models\DescribeDSPALevelDetailRequest $req) 获取分级详情
 * @method Models\DescribeDSPALevelGroupsResponse DescribeDSPALevelGroups(Models\DescribeDSPALevelGroupsRequest $req) 获取分级列表，限制100个 不分页返回
 * @method Models\DescribeDSPARDBDataAssetByComplianceIdResponse DescribeDSPARDBDataAssetByComplianceId(Models\DescribeDSPARDBDataAssetByComplianceIdRequest $req) 获取单个合规组下的RDB关系数据库分类分级数据资产
 * @method Models\DescribeDSPARDBDataAssetDetailResponse DescribeDSPARDBDataAssetDetail(Models\DescribeDSPARDBDataAssetDetailRequest $req) 获取RDB关系数据库分类分级资产详情
 * @method Models\DescribeDSPASupportedMetasResponse DescribeDSPASupportedMetas(Models\DescribeDSPASupportedMetasRequest $req) 拉取DSPA支持的Meta元数据类型，返回包括：元数据类型，支持的元数据地域信息
 * @method Models\DescribeDSPATaskResultDataSampleResponse DescribeDSPATaskResultDataSample(Models\DescribeDSPATaskResultDataSampleRequest $req) 获取扫描结果数据样本
 * @method Models\DescribeESAssetSensitiveDistributionResponse DescribeESAssetSensitiveDistribution(Models\DescribeESAssetSensitiveDistributionRequest $req) 数据资产报告-查询es的敏感资产报告，包含（数据库资产，设敏级别数据库top10，资产详情）
 * @method Models\DescribeExportTaskResultResponse DescribeExportTaskResult(Models\DescribeExportTaskResultRequest $req) 获取导出任务结果
 * @method Models\DescribeLeafClassificationResponse DescribeLeafClassification(Models\DescribeLeafClassificationRequest $req) 查询标准下所有叶子节点分类
 * @method Models\DescribeMongoAssetSensitiveDistributionResponse DescribeMongoAssetSensitiveDistribution(Models\DescribeMongoAssetSensitiveDistributionRequest $req) 数据资产报告-查询mongo 的敏感资产报告，包含（数据库资产，设敏级别数据库top10，资产详情）
 * @method Models\DescribeRDBAssetSensitiveDistributionResponse DescribeRDBAssetSensitiveDistribution(Models\DescribeRDBAssetSensitiveDistributionRequest $req) 数据资产报告-查询rbd 的敏感资产报告，包含（数据库资产，设敏级别数据库top10，资产详情）
 * @method Models\DescribeReportTaskDownloadUrlResponse DescribeReportTaskDownloadUrl(Models\DescribeReportTaskDownloadUrlRequest $req) 获取报表下载链接
 * @method Models\DescribeReportTasksResponse DescribeReportTasks(Models\DescribeReportTasksRequest $req) 获取资产报表任务列表
 * @method Models\DescribeRuleDetailResponse DescribeRuleDetail(Models\DescribeRuleDetailRequest $req) 查询分类规则详情

 * @method Models\DescribeRuleListResponse DescribeRuleList(Models\DescribeRuleListRequest $req) 查询分类下规则列表

 * @method Models\DescribeSensitiveCOSDataDistributionResponse DescribeSensitiveCOSDataDistribution(Models\DescribeSensitiveCOSDataDistributionRequest $req) 数据资产报告-查询cos的敏感数据分布（分级分布 分类分布 敏感规则分布详情列表）
 * @method Models\DescribeSensitiveRDBDataDistributionResponse DescribeSensitiveRDBDataDistribution(Models\DescribeSensitiveRDBDataDistributionRequest $req) 数据资产报告-查询rdb的敏感数据分布-敏感规则字段分布-敏感分布详情
 * @method Models\DisableDSPAMetaResourceAuthResponse DisableDSPAMetaResourceAuth(Models\DisableDSPAMetaResourceAuthRequest $req) 取消用户云资源授权
 * @method Models\EnableDSPADiscoveryRuleResponse EnableDSPADiscoveryRule(Models\EnableDSPADiscoveryRuleRequest $req) 打开或者关闭分类分级规则
注：此API同时对该规则下的RDB跟COS规则操作。


 * @method Models\EnableTrialVersionResponse EnableTrialVersion(Models\EnableTrialVersionRequest $req) 启用版本体验
 * @method Models\ExportAssetDetailDataResponse ExportAssetDetailData(Models\ExportAssetDetailDataRequest $req) 创建敏感数据导出任务
 * @method Models\GetResourceConnectionStatusResponse GetResourceConnectionStatus(Models\GetResourceConnectionStatusRequest $req) 获取授权资源的连接状态
 * @method Models\GetTrialVersionResponse GetTrialVersion(Models\GetTrialVersionRequest $req) 获取体验版本信息
 * @method Models\GetUserQuotaInfoResponse GetUserQuotaInfo(Models\GetUserQuotaInfoRequest $req) 获取用户购买配额信息
 * @method Models\ListDSPAClustersResponse ListDSPAClusters(Models\ListDSPAClustersRequest $req) 拉取DSPA集群列表
 * @method Models\ListDSPACosMetaResourcesResponse ListDSPACosMetaResources(Models\ListDSPACosMetaResourcesRequest $req) 本接口用于获取COS元数据信息，返回COS元数据信息列表。
 * @method Models\ListDSPAMetaResourcesResponse ListDSPAMetaResources(Models\ListDSPAMetaResourcesRequest $req) 拉取用户云资源
 * @method Models\ModifyClassificationRuleResponse ModifyClassificationRule(Models\ModifyClassificationRuleRequest $req) 编辑识别规则
 * @method Models\ModifyClassificationRuleStateResponse ModifyClassificationRuleState(Models\ModifyClassificationRuleStateRequest $req) 修改识别规则状态
 * @method Models\ModifyDSPAAssessmentRiskResponse ModifyDSPAAssessmentRisk(Models\ModifyDSPAAssessmentRiskRequest $req) 修改DSPA评估风险项，支持修改Status
 * @method Models\ModifyDSPAAssessmentRiskLatestResponse ModifyDSPAAssessmentRiskLatest(Models\ModifyDSPAAssessmentRiskLatestRequest $req) 修改最新评估风险项状态
 * @method Models\ModifyDSPAAssessmentRiskLevelResponse ModifyDSPAAssessmentRiskLevel(Models\ModifyDSPAAssessmentRiskLevelRequest $req) 风险项页面----修改风险等级的详情数据
 * @method Models\ModifyDSPAAssessmentRiskTemplateResponse ModifyDSPAAssessmentRiskTemplate(Models\ModifyDSPAAssessmentRiskTemplateRequest $req) 风险模版---修改风险模版
 * @method Models\ModifyDSPACOSDiscoveryTaskResponse ModifyDSPACOSDiscoveryTask(Models\ModifyDSPACOSDiscoveryTaskRequest $req) 修改COS分类分级任务，该接口只有在任务状态为以下状态时才支持正确修改：
0 待扫描，
2 扫描终止， 
3 扫描成功，
4 扫描失败

 * @method Models\ModifyDSPACOSTaskResultResponse ModifyDSPACOSTaskResult(Models\ModifyDSPACOSTaskResultRequest $req) 调整COS任务扫描结果
 * @method Models\ModifyDSPACategoryResponse ModifyDSPACategory(Models\ModifyDSPACategoryRequest $req) 修改分类，内置分类不支持修改。
 * @method Models\ModifyDSPACategoryRelationResponse ModifyDSPACategoryRelation(Models\ModifyDSPACategoryRelationRequest $req) 修改分类分级关系
 * @method Models\ModifyDSPAClusterInfoResponse ModifyDSPAClusterInfo(Models\ModifyDSPAClusterInfoRequest $req) 修改DSPA集群信息
 * @method Models\ModifyDSPAComplianceGroupResponse ModifyDSPAComplianceGroup(Models\ModifyDSPAComplianceGroupRequest $req) 修改分类分级模板，内置模板不支持修改。
 * @method Models\ModifyDSPADiscoveryRuleResponse ModifyDSPADiscoveryRule(Models\ModifyDSPADiscoveryRuleRequest $req) 修改分类分级规则，单个用户最多允许创建200个规则。
注：此API同时适用RDB跟COS类型数据。
 * @method Models\ModifyDSPADiscoveryTaskResponse ModifyDSPADiscoveryTask(Models\ModifyDSPADiscoveryTaskRequest $req) 修改分类分级任务，该接口只有在任务状态为以下状态时才支持正确修改：
0 待扫描，
2 扫描终止， 
3 扫描成功，
4 扫描失败

 * @method Models\ModifyDSPAESTaskResultResponse ModifyDSPAESTaskResult(Models\ModifyDSPAESTaskResultRequest $req) 调整ES任务扫描结果
 * @method Models\ModifyDSPATaskResultResponse ModifyDSPATaskResult(Models\ModifyDSPATaskResultRequest $req) 调整任务扫描结果
 * @method Models\ModifyLevelInfoResponse ModifyLevelInfo(Models\ModifyLevelInfoRequest $req) 修改敏感级别信息
 * @method Models\ModifyLevelNameResponse ModifyLevelName(Models\ModifyLevelNameRequest $req) 修改级别名称
 * @method Models\ModifyLevelStateResponse ModifyLevelState(Models\ModifyLevelStateRequest $req) 开启级别或关闭级别
 * @method Models\ModifyMergeClassificationResponse ModifyMergeClassification(Models\ModifyMergeClassificationRequest $req) 一个分类合并到另一个分类中（分类拖拽功能）
 * @method Models\ModifyNewClassificationResponse ModifyNewClassification(Models\ModifyNewClassificationRequest $req) 修改分类信息
 * @method Models\ModifyStandardInfoResponse ModifyStandardInfo(Models\ModifyStandardInfoRequest $req) 修改分级分类模板信息
 * @method Models\QueryDSPAMetaResourceDbListResponse QueryDSPAMetaResourceDbList(Models\QueryDSPAMetaResourceDbListRequest $req) 查询DSPA实例的db列表
 * @method Models\QueryResourceDbBindStatusResponse QueryResourceDbBindStatus(Models\QueryResourceDbBindStatusRequest $req) 获取资源绑定DB状态
 * @method Models\RestartDSPAAssessmentTaskResponse RestartDSPAAssessmentTask(Models\RestartDSPAAssessmentTaskRequest $req) 重新启动DSPA风险评估任务
 * @method Models\StartDSPADiscoveryTaskResponse StartDSPADiscoveryTask(Models\StartDSPADiscoveryTaskRequest $req) 立即启动分类分级任务，该接口只有在任务状态为以下状态时才支持正确执行立即扫描：
0 待扫描，
2 扫描终止，
3 扫描成功，
4 扫描失败
 * @method Models\StopDSPADiscoveryTaskResponse StopDSPADiscoveryTask(Models\StopDSPADiscoveryTaskRequest $req) 停止分类分级任务，该接口只有在任务状态为以下状态时才支持正确执行停止扫描：
1 扫描中
 * @method Models\UpdateDSPASelfBuildResourceResponse UpdateDSPASelfBuildResource(Models\UpdateDSPASelfBuildResourceRequest $req) 更新自建资源基础信息，包括：端口、账户名、密码。
请注意：
如果资源自身的VPC、VIP信息发生变化，后台会自动更新。
如果监听的端口发生变化，请显式输入端口。
如果账户名密码任意一个发生变化，请务必同时显式输入账户名密码。
 * @method Models\VerifyDSPACOSRuleResponse VerifyDSPACOSRule(Models\VerifyDSPACOSRuleRequest $req) 验证COS分类分级规则
 * @method Models\VerifyDSPADiscoveryRuleResponse VerifyDSPADiscoveryRule(Models\VerifyDSPADiscoveryRuleRequest $req) 验证分类分级规则
 */

class DsgcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dsgc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dsgc";

    /**
     * @var string
     */
    protected $version = "2019-07-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("dsgc")."\\"."V20190723\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
