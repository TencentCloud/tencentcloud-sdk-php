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

namespace TencentCloud\Cwp\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cwp\V20180228\Models as Models;

/**
 * @method Models\CloseProVersionResponse CloseProVersion(Models\CloseProVersionRequest $req) 本接口 (CloseProVersion) 用于关闭专业版。
 * @method Models\CreateBaselineStrategyResponse CreateBaselineStrategy(Models\CreateBaselineStrategyRequest $req) 根据策略信息创建基线策略
 * @method Models\CreateProtectServerResponse CreateProtectServer(Models\CreateProtectServerRequest $req) 添加房展防护服务器
 * @method Models\CreateScanMalwareSettingResponse CreateScanMalwareSetting(Models\CreateScanMalwareSettingRequest $req) 该接口可以对入侵检测-文件查杀扫描检测
 * @method Models\CreateSearchLogResponse CreateSearchLog(Models\CreateSearchLogRequest $req) 添加历史搜索记录
 * @method Models\CreateSearchTemplateResponse CreateSearchTemplate(Models\CreateSearchTemplateRequest $req) 添加检索模板
 * @method Models\DeleteAttackLogsResponse DeleteAttackLogs(Models\DeleteAttackLogsRequest $req) 删除网络攻击日志
 * @method Models\DeleteBashEventsResponse DeleteBashEvents(Models\DeleteBashEventsRequest $req) 根据Ids删除高危命令事件
 * @method Models\DeleteBashRulesResponse DeleteBashRules(Models\DeleteBashRulesRequest $req) 删除高危命令规则
 * @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) 本接口 (DeleteBruteAttacks) 用于删除暴力破解记录。
 * @method Models\DeleteLoginWhiteListResponse DeleteLoginWhiteList(Models\DeleteLoginWhiteListRequest $req) 本接口用于删除异地登录白名单规则。
 * @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) 本接口（DeleteMachine）用于卸载云镜客户端。
 * @method Models\DeleteMachineTagResponse DeleteMachineTag(Models\DeleteMachineTagRequest $req) 删除服务器关联的标签
 * @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) 本接口 (DeleteMaliciousRequests) 用于删除恶意请求记录。
 * @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) 本接口 (DeleteMalwares) 用于删除木马记录。
 * @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) 本接口 (DeleteNonlocalLoginPlaces) 用于删除异地登录记录。
 * @method Models\DeletePrivilegeEventsResponse DeletePrivilegeEvents(Models\DeletePrivilegeEventsRequest $req) 根据Ids删除本地提权
 * @method Models\DeletePrivilegeRulesResponse DeletePrivilegeRules(Models\DeletePrivilegeRulesRequest $req) 删除本地提权规则
 * @method Models\DeleteReverseShellEventsResponse DeleteReverseShellEvents(Models\DeleteReverseShellEventsRequest $req) 根据Ids删除反弹Shell事件
 * @method Models\DeleteReverseShellRulesResponse DeleteReverseShellRules(Models\DeleteReverseShellRulesRequest $req) 删除反弹Shell规则
 * @method Models\DeleteSearchTemplateResponse DeleteSearchTemplate(Models\DeleteSearchTemplateRequest $req) 删除检索模板
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) 删除标签
 * @method Models\DeleteWebPageEventLogResponse DeleteWebPageEventLog(Models\DeleteWebPageEventLogRequest $req) 网站防篡改-删除事件记录
 * @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) 本接口 (DescribeAccountStatistics) 用于获取帐号统计列表数据。
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 该接口已废弃

本接口 (DescribeAccounts) 用于获取帐号列表数据。
 * @method Models\DescribeAssetInfoResponse DescribeAssetInfo(Models\DescribeAssetInfoRequest $req) 获取资产数量： 主机数、账号数、端口数、进程数、软件数、数据库数、Web应用数、Web框架数、Web服务数、Web站点数
 * @method Models\DescribeAssetRecentMachineInfoResponse DescribeAssetRecentMachineInfo(Models\DescribeAssetRecentMachineInfoRequest $req) 获取主机最近趋势情况
 * @method Models\DescribeAttackLogInfoResponse DescribeAttackLogInfo(Models\DescribeAttackLogInfoRequest $req) 网络攻击日志详情
 * @method Models\DescribeAttackLogsResponse DescribeAttackLogs(Models\DescribeAttackLogsRequest $req) 按分页形式展示网络攻击日志列表
 * @method Models\DescribeAttackVulTypeListResponse DescribeAttackVulTypeList(Models\DescribeAttackVulTypeListRequest $req) 获取网络攻击威胁类型列表
 * @method Models\DescribeBashEventsResponse DescribeBashEvents(Models\DescribeBashEventsRequest $req) 获取高危命令列表
 * @method Models\DescribeBashRulesResponse DescribeBashRules(Models\DescribeBashRulesRequest $req) 获取高危命令规则列表
 * @method Models\DescribeBruteAttackListResponse DescribeBruteAttackList(Models\DescribeBruteAttackListRequest $req) 获取密码破解列表
 * @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) 本接口 (DescribeComponentStatistics) 用于获取组件统计列表数据。
 * @method Models\DescribeESAggregationsResponse DescribeESAggregations(Models\DescribeESAggregationsRequest $req) 获取ES字段聚合结果
 * @method Models\DescribeESHitsResponse DescribeESHits(Models\DescribeESHitsRequest $req) 获取ES查询文档列表
 * @method Models\DescribeExportMachinesResponse DescribeExportMachines(Models\DescribeExportMachinesRequest $req) 本接口 (DescribeExportMachines) 用于导出区域主机列表。
 * @method Models\DescribeGeneralStatResponse DescribeGeneralStat(Models\DescribeGeneralStatRequest $req) 获取主机安全相关统计
 * @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) 本接口 (DescribeHistoryAccounts) 用于获取帐号变更历史列表数据。
 * @method Models\DescribeHistoryServiceResponse DescribeHistoryService(Models\DescribeHistoryServiceRequest $req) 查询日志检索服务信息
 * @method Models\DescribeImportMachineInfoResponse DescribeImportMachineInfo(Models\DescribeImportMachineInfoRequest $req) 查询批量导入机器信息
 * @method Models\DescribeIndexListResponse DescribeIndexList(Models\DescribeIndexListRequest $req) 获取索引列表
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) 获取日志检索容量使用统计
 * @method Models\DescribeLoginWhiteListResponse DescribeLoginWhiteList(Models\DescribeLoginWhiteListRequest $req) 获取异地登录白名单列表
 * @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) 本接口（DescribeMachineInfo）用于获取机器详细信息。
 * @method Models\DescribeMachineListResponse DescribeMachineList(Models\DescribeMachineListRequest $req) 本接口 (DescribeMachineList) 用于网页防篡改获取区域主机列表。
 * @method Models\DescribeMachineOsListResponse DescribeMachineOsList(Models\DescribeMachineOsListRequest $req) 查询可筛选操作系统列表.
 * @method Models\DescribeMachineRegionsResponse DescribeMachineRegions(Models\DescribeMachineRegionsRequest $req) 获取机器地域列表
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 本接口 (DescribeMachines) 用于获取区域主机列表。
 * @method Models\DescribeMalwareInfoResponse DescribeMalwareInfo(Models\DescribeMalwareInfoRequest $req) 查看恶意文件详情
 * @method Models\DescribeMalwareTimingScanSettingResponse DescribeMalwareTimingScanSetting(Models\DescribeMalwareTimingScanSettingRequest $req) 查询定时扫描配置
 * @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) 本接口 (DescribeOpenPortStatistics) 用于获取端口统计列表。
 * @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) 本接口用于（DescribeOverviewStatistics）获取概览统计数据。
 * @method Models\DescribePrivilegeEventsResponse DescribePrivilegeEvents(Models\DescribePrivilegeEventsRequest $req) 获取本地提权事件列表
 * @method Models\DescribePrivilegeRulesResponse DescribePrivilegeRules(Models\DescribePrivilegeRulesRequest $req) 获取本地提权规则列表
 * @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) 本接口 (DescribeProVersionInfo) 用于获取专业版信息。
 * @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) 本接口 (DescribeProcessStatistics) 用于获取进程统计列表数据。
 * @method Models\DescribeReverseShellEventsResponse DescribeReverseShellEvents(Models\DescribeReverseShellEventsRequest $req) 获取反弹Shell列表
 * @method Models\DescribeReverseShellRulesResponse DescribeReverseShellRules(Models\DescribeReverseShellRulesRequest $req) 获取反弹Shell规则列表
 * @method Models\DescribeRiskDnsListResponse DescribeRiskDnsList(Models\DescribeRiskDnsListRequest $req) 入侵检测，获取恶意请求列表
 * @method Models\DescribeScanMalwareScheduleResponse DescribeScanMalwareSchedule(Models\DescribeScanMalwareScheduleRequest $req) 查询木马扫描进度
 * @method Models\DescribeScanTaskDetailsResponse DescribeScanTaskDetails(Models\DescribeScanTaskDetailsRequest $req) DescribeScanTaskDetails 查询扫描任务详情 , 可以查询扫描进度信息/异常;
 * @method Models\DescribeScanVulSettingResponse DescribeScanVulSetting(Models\DescribeScanVulSettingRequest $req) 查询定期检测的配置
 * @method Models\DescribeSearchExportListResponse DescribeSearchExportList(Models\DescribeSearchExportListRequest $req) 导出ES查询文档列表
 * @method Models\DescribeSearchLogsResponse DescribeSearchLogs(Models\DescribeSearchLogsRequest $req) 获取历史搜索记录
 * @method Models\DescribeSearchTemplatesResponse DescribeSearchTemplates(Models\DescribeSearchTemplatesRequest $req) 获取快速检索列表
 * @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) 本接口 (DescribeSecurityDynamics) 用于获取安全事件消息数据。
 * @method Models\DescribeSecurityEventsCntResponse DescribeSecurityEventsCnt(Models\DescribeSecurityEventsCntRequest $req) 获取安全概览相关事件统计数据接口
 * @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) 本接口 (DescribeSecurityTrends) 用于获取安全事件统计数据。
 * @method Models\DescribeTagMachinesResponse DescribeTagMachines(Models\DescribeTagMachinesRequest $req) 获取指定标签关联的服务器信息
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 获取所有主机标签
 * @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) 此接口（DescribeUsualLoginPlaces）用于查询常用登录地。
 * @method Models\DescribeWebPageGeneralizeResponse DescribeWebPageGeneralize(Models\DescribeWebPageGeneralizeRequest $req) 查询网站防篡改概览信息
 * @method Models\EditBashRulesResponse EditBashRules(Models\EditBashRulesRequest $req) 新增或修改高危命令规则
 * @method Models\EditTagsResponse EditTags(Models\EditTagsRequest $req) 新增或编辑标签
 * @method Models\ExportAssetCoreModuleListResponse ExportAssetCoreModuleList(Models\ExportAssetCoreModuleListRequest $req) 导出资产管理内核模块列表
 * @method Models\ExportAttackLogsResponse ExportAttackLogs(Models\ExportAttackLogsRequest $req) 导出网络攻击日志
 * @method Models\ExportBashEventsResponse ExportBashEvents(Models\ExportBashEventsRequest $req) 导出高危命令事件
 * @method Models\ExportBruteAttacksResponse ExportBruteAttacks(Models\ExportBruteAttacksRequest $req) 本接口 (ExportBruteAttacks) 用于导出密码破解记录成CSV文件。
 * @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) 本接口 (ExportMaliciousRequests) 用于导出下载恶意请求文件。
 * @method Models\ExportMalwaresResponse ExportMalwares(Models\ExportMalwaresRequest $req) 本接口 (ExportMalwares) 用于导出木马记录CSV文件。
 * @method Models\ExportNonlocalLoginPlacesResponse ExportNonlocalLoginPlaces(Models\ExportNonlocalLoginPlacesRequest $req) 本接口 (ExportNonlocalLoginPlaces) 用于导出异地登录事件记录CSV文件。
 * @method Models\ExportPrivilegeEventsResponse ExportPrivilegeEvents(Models\ExportPrivilegeEventsRequest $req) 导出本地提权事件
 * @method Models\ExportReverseShellEventsResponse ExportReverseShellEvents(Models\ExportReverseShellEventsRequest $req) 导出反弹Shell事件
 * @method Models\ExportTasksResponse ExportTasks(Models\ExportTasksRequest $req) 用于异步导出数据量大的日志文件
 * @method Models\ExportVulDetectionExcelResponse ExportVulDetectionExcel(Models\ExportVulDetectionExcelRequest $req) 导出本次漏洞检测Excel
 * @method Models\ExportVulDetectionReportResponse ExportVulDetectionReport(Models\ExportVulDetectionReportRequest $req) 导出漏洞检测报告。
 * @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) 本接口 (IgnoreImpactedHosts) 用于忽略漏洞。
 * @method Models\InquiryPriceOpenProVersionPrepaidResponse InquiryPriceOpenProVersionPrepaid(Models\InquiryPriceOpenProVersionPrepaidRequest $req) 本接口 (InquiryPriceOpenProVersionPrepaid) 用于开通专业版询价(预付费)。
 * @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) 本接口 (ModifyAutoOpenProVersionConfig) 用于设置新增主机自动开通专业版配置。
 * @method Models\ModifyMalwareTimingScanSettingsResponse ModifyMalwareTimingScanSettings(Models\ModifyMalwareTimingScanSettingsRequest $req) 定时扫描设置
 * @method Models\ModifyProVersionRenewFlagResponse ModifyProVersionRenewFlag(Models\ModifyProVersionRenewFlagRequest $req) 本接口 (ModifyProVersionRenewFlag) 用于修改专业版包年包月续费标识。
 * @method Models\ModifyWarningSettingResponse ModifyWarningSetting(Models\ModifyWarningSettingRequest $req) 修改告警设置
 * @method Models\ModifyWebPageProtectSettingResponse ModifyWebPageProtectSetting(Models\ModifyWebPageProtectSettingRequest $req) 网站防篡改-修改网站防护设置
 * @method Models\OpenProVersionResponse OpenProVersion(Models\OpenProVersionRequest $req) 本接口 (OpenProVersion) 用于开通专业版。
 * @method Models\OpenProVersionPrepaidResponse OpenProVersionPrepaid(Models\OpenProVersionPrepaidRequest $req) 本接口 (OpenProVersionPrepaid) 用于开通专业版(包年包月)。
 * @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) 本接口（RecoverMalwares）用于批量恢复已经被隔离的木马文件。
 * @method Models\RenewProVersionResponse RenewProVersion(Models\RenewProVersionRequest $req) 本接口 (RenewProVersion) 用于续费专业版(包年包月)。
 * @method Models\RescanImpactedHostResponse RescanImpactedHost(Models\RescanImpactedHostRequest $req) 该接口已废弃

本接口 (RescanImpactedHost) 用于漏洞重新检测。
 * @method Models\ScanAssetResponse ScanAsset(Models\ScanAssetRequest $req) 资产指纹启动扫描
 * @method Models\ScanVulResponse ScanVul(Models\ScanVulRequest $req)  一键检测
 * @method Models\ScanVulAgainResponse ScanVulAgain(Models\ScanVulAgainRequest $req) 漏洞管理-重新检测接口
 * @method Models\ScanVulSettingResponse ScanVulSetting(Models\ScanVulSettingRequest $req) 定期扫描漏洞设置
 * @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) 本接口（SeparateMalwares）用于隔离木马。
 * @method Models\SetBashEventsStatusResponse SetBashEventsStatus(Models\SetBashEventsStatusRequest $req) 设置高危命令事件状态
 * @method Models\SwitchBashRulesResponse SwitchBashRules(Models\SwitchBashRulesRequest $req) 切换高危命令规则状态
 * @method Models\SyncAssetScanResponse SyncAssetScan(Models\SyncAssetScanRequest $req) 同步资产扫描信息
 * @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) 本接口(TrustMalwares)将被识别木马文件设为信任。
 * @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) 本接口（UntrustMalwares）用于取消信任木马文件。
 * @method Models\UpdateBaselineStrategyResponse UpdateBaselineStrategy(Models\UpdateBaselineStrategyRequest $req) 根据基线策略id更新策略信息
 */

class CwpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cwp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cwp";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cwp")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
