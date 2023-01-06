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

namespace TencentCloud\Dbbrain\V20210527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20210527\Models as Models;

/**
 * @method Models\AddUserContactResponse AddUserContact(Models\AddUserContactRequest $req) 添加邮件接收联系人的姓名， 邮件地址，返回值为添加成功的联系人id。
 * @method Models\CancelKillTaskResponse CancelKillTask(Models\CancelKillTaskRequest $req) 终止中断会话任务。
 * @method Models\CreateDBDiagReportTaskResponse CreateDBDiagReportTask(Models\CreateDBDiagReportTaskRequest $req) 创建健康报告，并可以选择是否发送邮件。
 * @method Models\CreateDBDiagReportUrlResponse CreateDBDiagReportUrl(Models\CreateDBDiagReportUrlRequest $req) 创建健康报告的浏览地址。
 * @method Models\CreateKillTaskResponse CreateKillTask(Models\CreateKillTaskRequest $req) 创建中断会话的任务。
 * @method Models\CreateMailProfileResponse CreateMailProfile(Models\CreateMailProfileRequest $req) 创建邮件配置。其中入参ProfileType表示所创建配置的类型，ProfileType 取值包括：dbScan_mail_configuration（数据库巡检邮件配置）、scheduler_mail_configuration（定期生成健康报告的邮件发送配置）。Region统一选择广州，和实例所属地域无关。
 * @method Models\CreateProxySessionKillTaskResponse CreateProxySessionKillTask(Models\CreateProxySessionKillTaskRequest $req) 创建中止所有代理节点连接会话的异步任务。当前仅支持 Redis。得到的返回值为异步任务 id，可以作为参数传入接口 DescribeProxySessionKillTasks 查询kill会话任务执行状态。
 * @method Models\CreateSchedulerMailProfileResponse CreateSchedulerMailProfile(Models\CreateSchedulerMailProfileRequest $req) 该接口用于创建定期生成健康报告并邮件发送的配置，将健康报告的定期生成时间作为参数传入（周一至周日），用于设置健康报告的定期生成时间，同时保存相应的定期邮件发送的配置。
 * @method Models\CreateSecurityAuditLogExportTaskResponse CreateSecurityAuditLogExportTask(Models\CreateSecurityAuditLogExportTaskRequest $req) 创建安全审计日志导出任务。
 * @method Models\CreateSqlFilterResponse CreateSqlFilter(Models\CreateSqlFilterRequest $req) 创建实例SQL限流任务。
 * @method Models\DeleteSecurityAuditLogExportTasksResponse DeleteSecurityAuditLogExportTasks(Models\DeleteSecurityAuditLogExportTasksRequest $req) 删除安全审计日志导出任务。
 * @method Models\DeleteSqlFiltersResponse DeleteSqlFilters(Models\DeleteSqlFiltersRequest $req) 删除实例SQL限流任务。
 * @method Models\DescribeAllUserContactResponse DescribeAllUserContact(Models\DescribeAllUserContactRequest $req) 获取邮件发送中联系人的相关信息。
 * @method Models\DescribeAllUserGroupResponse DescribeAllUserGroup(Models\DescribeAllUserGroupRequest $req) 获取邮件发送联系组的相关信息。
 * @method Models\DescribeDBDiagEventResponse DescribeDBDiagEvent(Models\DescribeDBDiagEventRequest $req) 获取实例异常诊断事件的详情信息。
 * @method Models\DescribeDBDiagEventsResponse DescribeDBDiagEvents(Models\DescribeDBDiagEventsRequest $req) 获取指定时间段内的诊断事件列表，支持依据风险等级、实例ID等条件过滤。
 * @method Models\DescribeDBDiagHistoryResponse DescribeDBDiagHistory(Models\DescribeDBDiagHistoryRequest $req) 获取实例诊断事件的列表。
 * @method Models\DescribeDBDiagReportTasksResponse DescribeDBDiagReportTasks(Models\DescribeDBDiagReportTasksRequest $req) 查询健康报告生成任务列表。
 * @method Models\DescribeDBSpaceStatusResponse DescribeDBSpaceStatus(Models\DescribeDBSpaceStatusRequest $req) 获取指定时间段内的实例空间使用概览，包括磁盘增长量(MB)、磁盘剩余(MB)、磁盘总量(MB)及预计可用天数。
 * @method Models\DescribeDiagDBInstancesResponse DescribeDiagDBInstances(Models\DescribeDiagDBInstancesRequest $req) 获取实例信息列表。Region统一选择广州。
 * @method Models\DescribeHealthScoreResponse DescribeHealthScore(Models\DescribeHealthScoreRequest $req) 根据实例ID获取指定时间段（30分钟）的健康得分，以及异常扣分项。
 * @method Models\DescribeMailProfileResponse DescribeMailProfile(Models\DescribeMailProfileRequest $req) 获取发送邮件的配置， 包括数据库巡检的邮件配置以及定期生成健康报告的邮件发送配置。
 * @method Models\DescribeMySqlProcessListResponse DescribeMySqlProcessList(Models\DescribeMySqlProcessListRequest $req) 查询关系型数据库的实时线程列表。
 * @method Models\DescribeNoPrimaryKeyTablesResponse DescribeNoPrimaryKeyTables(Models\DescribeNoPrimaryKeyTablesRequest $req) 查询实例无主键表。
 * @method Models\DescribeProxyProcessStatisticsResponse DescribeProxyProcessStatistics(Models\DescribeProxyProcessStatisticsRequest $req) 获取当前实例下的单个proxy的会话统计详情信息， 返回数据为单个 proxy 的会话统计信息。【注意】该接口仅限部分环境调用。
 * @method Models\DescribeProxySessionKillTasksResponse DescribeProxySessionKillTasks(Models\DescribeProxySessionKillTasksRequest $req) 用于查询 redis 执行 kill 会话任务后代理节点的执行结果，入参异步任务 ID 从接口 CreateProxySessionKillTask 调用成功后取得。当前 product 只支持：redis。
 * @method Models\DescribeRedisTopBigKeysResponse DescribeRedisTopBigKeys(Models\DescribeRedisTopBigKeysRequest $req) 查询redis实例大key列表。
 * @method Models\DescribeRedisTopKeyPrefixListResponse DescribeRedisTopKeyPrefixList(Models\DescribeRedisTopKeyPrefixListRequest $req) 查询redis实例top key前缀列表。
 * @method Models\DescribeSecurityAuditLogDownloadUrlsResponse DescribeSecurityAuditLogDownloadUrls(Models\DescribeSecurityAuditLogDownloadUrlsRequest $req) 查询安全审计日志导出文件下载链接。目前日志文件下载仅提供腾讯云内网地址，请通过广州地域的腾讯云服务器进行下载。
 * @method Models\DescribeSecurityAuditLogExportTasksResponse DescribeSecurityAuditLogExportTasks(Models\DescribeSecurityAuditLogExportTasksRequest $req) 查询安全审计日志导出任务列表。
 * @method Models\DescribeSlowLogTimeSeriesStatsResponse DescribeSlowLogTimeSeriesStats(Models\DescribeSlowLogTimeSeriesStatsRequest $req) 获取慢日志统计柱状图。
 * @method Models\DescribeSlowLogTopSqlsResponse DescribeSlowLogTopSqls(Models\DescribeSlowLogTopSqlsRequest $req) 按照Sql模板+schema的聚合方式，统计排序指定时间段内的top慢sql。
 * @method Models\DescribeSlowLogUserHostStatsResponse DescribeSlowLogUserHostStats(Models\DescribeSlowLogUserHostStatsRequest $req) 获取慢日志来源地址统计分布图。
 * @method Models\DescribeSqlFiltersResponse DescribeSqlFilters(Models\DescribeSqlFiltersRequest $req) 查询实例SQL限流任务列表。
 * @method Models\DescribeSqlTemplateResponse DescribeSqlTemplate(Models\DescribeSqlTemplateRequest $req) 查询SQL模板。
 * @method Models\DescribeTopSpaceSchemaTimeSeriesResponse DescribeTopSpaceSchemaTimeSeries(Models\DescribeTopSpaceSchemaTimeSeriesRequest $req) 获取实例占用空间最大的前几个库在指定时间段内的每日由DBbrain定时采集的空间数据，默认返回按大小排序。
 * @method Models\DescribeTopSpaceSchemasResponse DescribeTopSpaceSchemas(Models\DescribeTopSpaceSchemasRequest $req) 获取实例Top库的实时空间统计信息，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTableTimeSeriesResponse DescribeTopSpaceTableTimeSeries(Models\DescribeTopSpaceTableTimeSeriesRequest $req) 获取实例占用空间最大的前几张表在指定时间段内的每日由DBbrain定时采集的空间数据，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTablesResponse DescribeTopSpaceTables(Models\DescribeTopSpaceTablesRequest $req) 获取实例Top表的实时空间统计信息，默认返回按大小排序。
 * @method Models\DescribeUserSqlAdviceResponse DescribeUserSqlAdvice(Models\DescribeUserSqlAdviceRequest $req) 获取SQL优化建议。【产品用户回馈，此接口限免开放，后续将并入dbbrain专业版】
 * @method Models\KillMySqlThreadsResponse KillMySqlThreads(Models\KillMySqlThreadsRequest $req) 根据会话ID中断当前会话，该接口分为两次提交：第一次为预提交阶段，Stage为"Prepare"，得到的返回值包含SqlExecId；第二次为确认提交， Stage为"Commit"， 将SqlExecId的值作为参数传入，最终终止会话进程。
 * @method Models\ModifyDiagDBInstanceConfResponse ModifyDiagDBInstanceConf(Models\ModifyDiagDBInstanceConfRequest $req) 修改实例巡检开关。
 * @method Models\ModifySqlFiltersResponse ModifySqlFilters(Models\ModifySqlFiltersRequest $req) 更改实例限流任务状态，目前仅用于终止限流。
 * @method Models\VerifyUserAccountResponse VerifyUserAccount(Models\VerifyUserAccountRequest $req) 验证用户数据库账号权限，获取会话token。
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbbrain";

    /**
     * @var string
     */
    protected $version = "2021-05-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20210527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
