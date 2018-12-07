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

namespace TencentCloud\Yunjing\V20180228;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Yunjing\V20180228\Models as Models;

/**
* @method Models\CloseProVersionResponse CloseProVersion(Models\CloseProVersionRequest $req) 本接口 (CloseProVersion) 用于关闭专业版。
* @method Models\CreateProcessTaskResponse CreateProcessTask(Models\CreateProcessTaskRequest $req) 本接口 (CreateProcessTask) 用于创建实时拉取进程任务。
* @method Models\CreateUsualLoginPlacesResponse CreateUsualLoginPlaces(Models\CreateUsualLoginPlacesRequest $req) 此接口（CreateUsualLoginPlaces）用于添加常用登录地。
* @method Models\DeleteBruteAttacksResponse DeleteBruteAttacks(Models\DeleteBruteAttacksRequest $req) 本接口 (DeleteBruteAttacks) 用于删除暴力破解记录。
* @method Models\DeleteMachineResponse DeleteMachine(Models\DeleteMachineRequest $req) 本接口（DeleteMachine）用于卸载云镜客户端。
* @method Models\DeleteMaliciousRequestsResponse DeleteMaliciousRequests(Models\DeleteMaliciousRequestsRequest $req) 本接口 (DeleteMaliciousRequests) 用于删除恶意请求记录。
* @method Models\DeleteMalwaresResponse DeleteMalwares(Models\DeleteMalwaresRequest $req) 本接口 (DeleteMalwares) 用于删除木马记录。
* @method Models\DeleteNonlocalLoginPlacesResponse DeleteNonlocalLoginPlaces(Models\DeleteNonlocalLoginPlacesRequest $req) 本接口 (DeleteNonlocalLoginPlaces) 用于删除异地登录记录。
* @method Models\DeleteUsualLoginPlacesResponse DeleteUsualLoginPlaces(Models\DeleteUsualLoginPlacesRequest $req) 本接口（DeleteUsualLoginPlaces）用于删除常用登录地。
* @method Models\DescribeAccountStatisticsResponse DescribeAccountStatistics(Models\DescribeAccountStatisticsRequest $req) 本接口 (DescribeAccountStatistics) 用于获取帐号统计列表数据。
* @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口 (DescribeAccounts) 用于获取帐号列表数据。
* @method Models\DescribeAgentVulsResponse DescribeAgentVuls(Models\DescribeAgentVulsRequest $req) 本接口 (DescribeAgentVuls) 用于获取主机的漏洞列表。
* @method Models\DescribeAlarmAttributeResponse DescribeAlarmAttribute(Models\DescribeAlarmAttributeRequest $req) 本接口 (DescribeAlarmAttribute) 用于获取告警设置。
* @method Models\DescribeBruteAttacksResponse DescribeBruteAttacks(Models\DescribeBruteAttacksRequest $req) 本接口{DescribeBruteAttacks}用于获取暴力破解事件列表。
* @method Models\DescribeComponentInfoResponse DescribeComponentInfo(Models\DescribeComponentInfoRequest $req) 本接口 (DescribeComponentInfo) 用于获取组件信息数据。
* @method Models\DescribeComponentStatisticsResponse DescribeComponentStatistics(Models\DescribeComponentStatisticsRequest $req) 本接口 (DescribeComponentStatistics) 用于获取组件统计列表数据。
* @method Models\DescribeComponentsResponse DescribeComponents(Models\DescribeComponentsRequest $req) 本接口 (DescribeComponents) 用于获取组件列表数据。
* @method Models\DescribeHistoryAccountsResponse DescribeHistoryAccounts(Models\DescribeHistoryAccountsRequest $req) 本接口 (DescribeHistoryAccounts) 用于获取帐号变更历史列表数据。
* @method Models\DescribeImpactedHostsResponse DescribeImpactedHosts(Models\DescribeImpactedHostsRequest $req) 本接口 (DescribeImpactedHosts) 用于获取漏洞受影响机器列表。
* @method Models\DescribeMachineInfoResponse DescribeMachineInfo(Models\DescribeMachineInfoRequest $req) 本接口（DescribeMachineInfo）用于获取机器详细信息。
* @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 本接口 (DescribeMachines) 用于获取区域主机列表。
* @method Models\DescribeMaliciousRequestsResponse DescribeMaliciousRequests(Models\DescribeMaliciousRequestsRequest $req) 本接口 (DescribeMaliciousRequests) 用于获取恶意请求数据。
* @method Models\DescribeMalwaresResponse DescribeMalwares(Models\DescribeMalwaresRequest $req) 本接口（DescribeMalwares）用于获取木马事件列表。
* @method Models\DescribeNonlocalLoginPlacesResponse DescribeNonlocalLoginPlaces(Models\DescribeNonlocalLoginPlacesRequest $req) 本接口(DescribeNonlocalLoginPlaces)用于获取异地登录事件。
* @method Models\DescribeOpenPortStatisticsResponse DescribeOpenPortStatistics(Models\DescribeOpenPortStatisticsRequest $req) 本接口 (DescribeOpenPortStatistics) 用于获取端口统计列表。
* @method Models\DescribeOpenPortsResponse DescribeOpenPorts(Models\DescribeOpenPortsRequest $req) 本接口 (DescribeOpenPorts) 用于获取端口列表数据。

* @method Models\DescribeOverviewStatisticsResponse DescribeOverviewStatistics(Models\DescribeOverviewStatisticsRequest $req) 本接口用于（DescribeOverviewStatistics）获取概览统计数据。
* @method Models\DescribeProVersionInfoResponse DescribeProVersionInfo(Models\DescribeProVersionInfoRequest $req) 本接口 (DescribeProVersionInfo) 用于获取专业版信息。
* @method Models\DescribeProcessStatisticsResponse DescribeProcessStatistics(Models\DescribeProcessStatisticsRequest $req) 本接口 (DescribeProcessStatistics) 用于获取进程统计列表数据。
* @method Models\DescribeProcessTaskStatusResponse DescribeProcessTaskStatus(Models\DescribeProcessTaskStatusRequest $req) 本接口 (DescribeProcessTaskStatus) 用于获取实时拉取进程任务状态。
* @method Models\DescribeProcessesResponse DescribeProcesses(Models\DescribeProcessesRequest $req) 本接口 (DescribeProcesses) 用于获取进程列表数据。
* @method Models\DescribeSecurityDynamicsResponse DescribeSecurityDynamics(Models\DescribeSecurityDynamicsRequest $req) 本接口 (DescribeSecurityDynamics) 用于获取安全事件消息数据。
* @method Models\DescribeSecurityTrendsResponse DescribeSecurityTrends(Models\DescribeSecurityTrendsRequest $req) 本接口 (DescribeSecurityTrends) 用于获取安全事件统计数据。
* @method Models\DescribeUsualLoginPlacesResponse DescribeUsualLoginPlaces(Models\DescribeUsualLoginPlacesRequest $req) 此接口（DescribeUsualLoginPlaces）用于查询常用登录地。
* @method Models\DescribeVulInfoResponse DescribeVulInfo(Models\DescribeVulInfoRequest $req) 本接口 (DescribeVulInfo) 用于获取漏洞详情。
* @method Models\DescribeVulScanResultResponse DescribeVulScanResult(Models\DescribeVulScanResultRequest $req) 本接口 (DescribeVulScanResult) 用于获取漏洞检测结果。

* @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) 本接口 (DescribeVuls) 用于获取漏洞列表数据。
* @method Models\DescribeWeeklyReportBruteAttacksResponse DescribeWeeklyReportBruteAttacks(Models\DescribeWeeklyReportBruteAttacksRequest $req) 本接口 (DescribeWeeklyReportBruteAttacks) 用于获取专业周报密码破解数据。
* @method Models\DescribeWeeklyReportInfoResponse DescribeWeeklyReportInfo(Models\DescribeWeeklyReportInfoRequest $req) 本接口 (DescribeWeeklyReportInfo) 用于获取专业周报详情数据。
* @method Models\DescribeWeeklyReportMalwaresResponse DescribeWeeklyReportMalwares(Models\DescribeWeeklyReportMalwaresRequest $req) 本接口 (DescribeWeeklyReportMalwares) 用于获取专业周报木马数据。
* @method Models\DescribeWeeklyReportNonlocalLoginPlacesResponse DescribeWeeklyReportNonlocalLoginPlaces(Models\DescribeWeeklyReportNonlocalLoginPlacesRequest $req) 本接口 (DescribeWeeklyReportNonlocalLoginPlaces) 用于获取专业周报异地登录数据。
* @method Models\DescribeWeeklyReportVulsResponse DescribeWeeklyReportVuls(Models\DescribeWeeklyReportVulsRequest $req) 本接口 (DescribeWeeklyReportVuls) 用于专业版周报漏洞数据。

* @method Models\DescribeWeeklyReportsResponse DescribeWeeklyReports(Models\DescribeWeeklyReportsRequest $req) 本接口 (DescribeWeeklyReports) 用于获取周报列表数据。
* @method Models\ExportMaliciousRequestsResponse ExportMaliciousRequests(Models\ExportMaliciousRequestsRequest $req) 本接口 (ExportMaliciousRequests) 用于导出下载恶意请求文件。
* @method Models\IgnoreImpactedHostsResponse IgnoreImpactedHosts(Models\IgnoreImpactedHostsRequest $req) 本接口 (IngoreImpactedHosts) 用于忽略漏洞。
* @method Models\InquiryPriceOpenProVersionPrepaidResponse InquiryPriceOpenProVersionPrepaid(Models\InquiryPriceOpenProVersionPrepaidRequest $req) 本接口 (InquiryPriceOpenProVersionPrepaid) 用于开通专业版询价(预付费)。
* @method Models\MisAlarmNonlocalLoginPlacesResponse MisAlarmNonlocalLoginPlaces(Models\MisAlarmNonlocalLoginPlacesRequest $req) 本接口{MisAlarmNonlocalLoginPlaces}将设置当前地点为常用登录地。
* @method Models\ModifyAlarmAttributeResponse ModifyAlarmAttribute(Models\ModifyAlarmAttributeRequest $req) 本接口（ModifyAlarmAttribute）用于修改告警设置。
* @method Models\ModifyAutoOpenProVersionConfigResponse ModifyAutoOpenProVersionConfig(Models\ModifyAutoOpenProVersionConfigRequest $req) 本接口 (ModifyAutoOpenProVersionConfig) 用于设置新增主机自动开通专业版配置。
* @method Models\ModifyProVersionRenewFlagResponse ModifyProVersionRenewFlag(Models\ModifyProVersionRenewFlagRequest $req) 本接口 (ModifyProVersionRenewFlag) 用于修改专业版包年包月续费标识。
* @method Models\OpenProVersionPrepaidResponse OpenProVersionPrepaid(Models\OpenProVersionPrepaidRequest $req) 本接口 (OpenProVersionPrepaid) 用于开通专业版(包年包月)。
* @method Models\RecoverMalwaresResponse RecoverMalwares(Models\RecoverMalwaresRequest $req) 本接口（RecoverMalwares）用于批量恢复已经被隔离的木马文件。
* @method Models\RenewProVersionResponse RenewProVersion(Models\RenewProVersionRequest $req) 本接口 (RenewProVersion) 用于续费专业版(包年包月)。
* @method Models\RescanImpactedHostResponse RescanImpactedHost(Models\RescanImpactedHostRequest $req) 本接口 (RescanImpactedHosts) 用于漏洞重新检测。
* @method Models\SeparateMalwaresResponse SeparateMalwares(Models\SeparateMalwaresRequest $req) 本接口（SeparateMalwares）用于隔离木马。
* @method Models\TrustMaliciousRequestResponse TrustMaliciousRequest(Models\TrustMaliciousRequestRequest $req) 本接口 (TrustMaliciousRequest) 用于恶意请求添加信任。
* @method Models\TrustMalwaresResponse TrustMalwares(Models\TrustMalwaresRequest $req) 本接口(TrustMalwares)将被识别木马文件设为信任。
* @method Models\UntrustMaliciousRequestResponse UntrustMaliciousRequest(Models\UntrustMaliciousRequestRequest $req) 本接口 (UntrustMaliciousRequest) 用于取消信任恶意请求。
* @method Models\UntrustMalwaresResponse UntrustMalwares(Models\UntrustMalwaresRequest $req) 本接口（UntrustMalwares）用于取消信任木马文件。
 */

class YunjingClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "yunjing.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-02-28";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("yunjing")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
