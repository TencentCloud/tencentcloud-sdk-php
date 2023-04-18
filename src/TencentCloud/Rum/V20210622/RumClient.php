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

namespace TencentCloud\Rum\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rum\V20210622\Models as Models;

/**
 * @method Models\CreateLogExportResponse CreateLogExport(Models\CreateLogExportRequest $req) 接口请求域名： rum.tencentcloudapi.com 。

本接口用于创建日志下载任务

默认接口请求频率限制：20次/秒。
 * @method Models\CreateOfflineLogConfigResponse CreateOfflineLogConfig(Models\CreateOfflineLogConfigRequest $req) 创建离线日志监听，对应用户的离线日志将上报
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建 RUM 应用（归属于某个团队）
 * @method Models\CreateReleaseFileResponse CreateReleaseFile(Models\CreateReleaseFileRequest $req) 创建对应项目的文件记录
 * @method Models\CreateStarProjectResponse CreateStarProject(Models\CreateStarProjectRequest $req) 个人用户添加星标项目
 * @method Models\CreateTawInstanceResponse CreateTawInstance(Models\CreateTawInstanceRequest $req) 创建 RUM 业务系统
 * @method Models\CreateWhitelistResponse CreateWhitelist(Models\CreateWhitelistRequest $req) 创建白名单
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除实例，谨慎操作，不可恢复
 * @method Models\DeleteLogExportResponse DeleteLogExport(Models\DeleteLogExportRequest $req) 接口请求域名： rum.tencentcloudapi.com 。

本接口用于删除日志下载任务

默认接口请求频率限制：20次/秒。
 * @method Models\DeleteOfflineLogConfigResponse DeleteOfflineLogConfig(Models\DeleteOfflineLogConfigRequest $req) 删除 rum 离线日志监听 - 对应用户的离线日志将不会上报
 * @method Models\DeleteOfflineLogRecordResponse DeleteOfflineLogRecord(Models\DeleteOfflineLogRecordRequest $req) 删除对应的离线日志记录
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除给定的 rum 的项目
 * @method Models\DeleteReleaseFileResponse DeleteReleaseFile(Models\DeleteReleaseFileRequest $req) 将对应 sourcemap 文件删除
 * @method Models\DeleteStarProjectResponse DeleteStarProject(Models\DeleteStarProjectRequest $req) 删除用户名下的星标项目
 * @method Models\DeleteWhitelistResponse DeleteWhitelist(Models\DeleteWhitelistRequest $req) 删除白名单
 * @method Models\DescribeAppDimensionMetricsResponse DescribeAppDimensionMetrics(Models\DescribeAppDimensionMetricsRequest $req) 用于查询 app 监控多维分析数据
 * @method Models\DescribeAppMetricsDataResponse DescribeAppMetricsData(Models\DescribeAppMetricsDataRequest $req) 获取 app 监控指标数据
 * @method Models\DescribeAppSingleCaseDetailListResponse DescribeAppSingleCaseDetailList(Models\DescribeAppSingleCaseDetailListRequest $req) 查询 app 监控个例样本详情列表
 * @method Models\DescribeAppSingleCaseListResponse DescribeAppSingleCaseList(Models\DescribeAppSingleCaseListRequest $req) 查询 app 监控个例聚合列表
 * @method Models\DescribeDataResponse DescribeData(Models\DescribeDataRequest $req) 转发monitor查询
 * @method Models\DescribeDataCustomUrlResponse DescribeDataCustomUrl(Models\DescribeDataCustomUrlRequest $req) 获取DescribeDataCustomUrl信息
 * @method Models\DescribeDataEventUrlResponse DescribeDataEventUrl(Models\DescribeDataEventUrlRequest $req) 获取DescribeDataEventUrl信息
 * @method Models\DescribeDataFetchProjectResponse DescribeDataFetchProject(Models\DescribeDataFetchProjectRequest $req) 获取DescribeDataFetchProject信息。已下线，请使用DescribeDataFetchUrl
 * @method Models\DescribeDataFetchUrlResponse DescribeDataFetchUrl(Models\DescribeDataFetchUrlRequest $req) 获取DescribeDataFetchUrl信息
 * @method Models\DescribeDataFetchUrlInfoResponse DescribeDataFetchUrlInfo(Models\DescribeDataFetchUrlInfoRequest $req) 获取DescribeDataFetchUrlInfo信息
 * @method Models\DescribeDataLogUrlInfoResponse DescribeDataLogUrlInfo(Models\DescribeDataLogUrlInfoRequest $req) 获取loginfo信息
 * @method Models\DescribeDataLogUrlStatisticsResponse DescribeDataLogUrlStatistics(Models\DescribeDataLogUrlStatisticsRequest $req) 获取LogUrlStatistics信息
 * @method Models\DescribeDataPerformancePageResponse DescribeDataPerformancePage(Models\DescribeDataPerformancePageRequest $req) 获取PerformancePage信息
 * @method Models\DescribeDataPerformanceProjectResponse DescribeDataPerformanceProject(Models\DescribeDataPerformanceProjectRequest $req) 获取PerformanceProject信息
 * @method Models\DescribeDataPvUrlInfoResponse DescribeDataPvUrlInfo(Models\DescribeDataPvUrlInfoRequest $req) 获取PvUrlInfo信息
 * @method Models\DescribeDataPvUrlStatisticsResponse DescribeDataPvUrlStatistics(Models\DescribeDataPvUrlStatisticsRequest $req) 获取DescribeDataPvUrlStatistics信息
 * @method Models\DescribeDataReportCountResponse DescribeDataReportCount(Models\DescribeDataReportCountRequest $req) 获取项目上报量
 * @method Models\DescribeDataSetUrlStatisticsResponse DescribeDataSetUrlStatistics(Models\DescribeDataSetUrlStatisticsRequest $req) 获取DescribeDataSetUrlStatistics信息
 * @method Models\DescribeDataStaticProjectResponse DescribeDataStaticProject(Models\DescribeDataStaticProjectRequest $req) 获取DescribeDataStaticProject信息
 * @method Models\DescribeDataStaticResourceResponse DescribeDataStaticResource(Models\DescribeDataStaticResourceRequest $req) 获取DescribeDataStaticResource信息
 * @method Models\DescribeDataStaticUrlResponse DescribeDataStaticUrl(Models\DescribeDataStaticUrlRequest $req) 获取DescribeDataStaticUrl信息
 * @method Models\DescribeDataWebVitalsPageResponse DescribeDataWebVitalsPage(Models\DescribeDataWebVitalsPageRequest $req) 获取DescribeDataWebVitalsPage信息，用户核心活动信息
页面加载性能之Web Vitals。性能关键点
 * @method Models\DescribeErrorResponse DescribeError(Models\DescribeErrorRequest $req) 获取首页错误信息
 * @method Models\DescribeLogExportsResponse DescribeLogExports(Models\DescribeLogExportsRequest $req) 接口请求域名： rum.tencentcloudapi.com 。

本接口用于获取日志下载任务列表

默认接口请求频率限制：20次/秒
 * @method Models\DescribeLogListResponse DescribeLogList(Models\DescribeLogListRequest $req) (已下线，请用DescribeRumLogList)
 * @method Models\DescribeOfflineLogConfigsResponse DescribeOfflineLogConfigs(Models\DescribeOfflineLogConfigsRequest $req) 获取设置的离线日志监听配置 - 返回设置的用户唯一标识
 * @method Models\DescribeOfflineLogRecordsResponse DescribeOfflineLogRecords(Models\DescribeOfflineLogRecordsRequest $req) 获取所有离线日志记录(最多100条)
 * @method Models\DescribeOfflineLogsResponse DescribeOfflineLogs(Models\DescribeOfflineLogsRequest $req) 获取对应离线日志
 * @method Models\DescribeProjectLimitsResponse DescribeProjectLimits(Models\DescribeProjectLimitsRequest $req) 获取应用上报抽样信息
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 获取项目列表（实例创建的团队下的项目列表）
 * @method Models\DescribePvListResponse DescribePvList(Models\DescribePvListRequest $req) 获取项目下的PV列表
 * @method Models\DescribeReleaseFileSignResponse DescribeReleaseFileSign(Models\DescribeReleaseFileSignRequest $req) 获取上传文件存储的临时密钥
 * @method Models\DescribeReleaseFilesResponse DescribeReleaseFiles(Models\DescribeReleaseFilesRequest $req) 获取应用对应sourcemap文件列表
 * @method Models\DescribeRumGroupLogResponse DescribeRumGroupLog(Models\DescribeRumGroupLogRequest $req) 获取项目下的日志聚合信息
 * @method Models\DescribeRumLogExportResponse DescribeRumLogExport(Models\DescribeRumLogExportRequest $req) 获取项目下的日志列表（实例创建的项目下的日志列表）
 * @method Models\DescribeRumLogExportsResponse DescribeRumLogExports(Models\DescribeRumLogExportsRequest $req) 获取项目下的日志导出列表
 * @method Models\DescribeRumLogListResponse DescribeRumLogList(Models\DescribeRumLogListRequest $req) 获取项目下的日志列表（实例创建的项目下的日志列表）
 * @method Models\DescribeRumStatsLogListResponse DescribeRumStatsLogList(Models\DescribeRumStatsLogListRequest $req) 获取项目下的日志列表，分钟级
 * @method Models\DescribeScoresResponse DescribeScores(Models\DescribeScoresRequest $req) 获取首页分数列表
 * @method Models\DescribeTawAreasResponse DescribeTawAreas(Models\DescribeTawAreasRequest $req) 查询片区信息
 * @method Models\DescribeTawInstancesResponse DescribeTawInstances(Models\DescribeTawInstancesRequest $req) 查询实例信息
 * @method Models\DescribeUvListResponse DescribeUvList(Models\DescribeUvListRequest $req) 获取项目下的UV列表
 * @method Models\DescribeWhitelistsResponse DescribeWhitelists(Models\DescribeWhitelistsRequest $req) 获取白名单列表
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改 RUM 业务系统
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改 RUM 应用信息
 * @method Models\ModifyProjectLimitResponse ModifyProjectLimit(Models\ModifyProjectLimitRequest $req) 新增修改限流
 * @method Models\ResumeInstanceResponse ResumeInstance(Models\ResumeInstanceRequest $req) 恢复 RUM 业务系统，恢复后，用户可以正常使用和上报数据
 * @method Models\ResumeProjectResponse ResumeProject(Models\ResumeProjectRequest $req) 恢复应用使用与上报数据
 * @method Models\StopInstanceResponse StopInstance(Models\StopInstanceRequest $req) 停止实例
 * @method Models\StopProjectResponse StopProject(Models\StopProjectRequest $req) 停止项目使用与上报数据
 */

class RumClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rum.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rum";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("rum")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
