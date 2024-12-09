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

namespace TencentCloud\Emr\V20190103;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Emr\V20190103\Models as Models;

/**
 * @method Models\AddMetricScaleStrategyResponse AddMetricScaleStrategy(Models\AddMetricScaleStrategyRequest $req) 添加扩缩容规则，按负载和时间
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) 该接口支持安装了OpenLdap组件的集群。
新增用户列表（用户管理）。
 * @method Models\CreateCloudInstanceResponse CreateCloudInstance(Models\CreateCloudInstanceRequest $req) 创建EMR容器集群实例
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建EMR集群实例
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建EMR集群实例
 * @method Models\CreateSLInstanceResponse CreateSLInstance(Models\CreateSLInstanceRequest $req) 本接口（CreateSLInstance）用于创建Serverless HBase实例
- 接口调用成功，会创建Serverless HBase实例，创建实例请求成功会返回创建实例的InstaceId和请求的 RequestID。
- 接口为异步接口，接口返回时操作并未立即完成，实例操作结果可以通过调用DescribeInstancesList查看当前实例的StatusDesc状态。
 * @method Models\DeleteAutoScaleStrategyResponse DeleteAutoScaleStrategy(Models\DeleteAutoScaleStrategyRequest $req) 删除自动扩缩容规则，后台销毁根据该规则扩缩容出来的节点
 * @method Models\DeleteUserManagerUserListResponse DeleteUserManagerUserList(Models\DeleteUserManagerUserListRequest $req) 删除用户列表（用户管理）
 * @method Models\DeployYarnConfResponse DeployYarnConf(Models\DeployYarnConfRequest $req) yarn资源调度-部署生效
 * @method Models\DescribeAutoScaleGroupGlobalConfResponse DescribeAutoScaleGroupGlobalConf(Models\DescribeAutoScaleGroupGlobalConfRequest $req) 获取自动扩缩容全局配置
 * @method Models\DescribeAutoScaleRecordsResponse DescribeAutoScaleRecords(Models\DescribeAutoScaleRecordsRequest $req) 获取集群的自动扩缩容的详细记录
 * @method Models\DescribeAutoScaleStrategiesResponse DescribeAutoScaleStrategies(Models\DescribeAutoScaleStrategiesRequest $req) 获取自动扩缩容规则
 * @method Models\DescribeClusterFlowStatusDetailResponse DescribeClusterFlowStatusDetail(Models\DescribeClusterFlowStatusDetailRequest $req) 查询EMR任务运行详情状态
 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) 查询集群节点信息
 * @method Models\DescribeCvmQuotaResponse DescribeCvmQuota(Models\DescribeCvmQuotaRequest $req) 获取账户的CVM配额
 * @method Models\DescribeEmrApplicationStaticsResponse DescribeEmrApplicationStatics(Models\DescribeEmrApplicationStaticsRequest $req) yarn application 统计接口查询
 * @method Models\DescribeEmrOverviewMetricsResponse DescribeEmrOverviewMetrics(Models\DescribeEmrOverviewMetricsRequest $req) 查询监控概览页指标数据
 * @method Models\DescribeGlobalConfigResponse DescribeGlobalConfig(Models\DescribeGlobalConfigRequest $req) 查询YARN资源调度的全局配置
 * @method Models\DescribeHBaseTableOverviewResponse DescribeHBaseTableOverview(Models\DescribeHBaseTableOverviewRequest $req) 获取Hbase表级监控数据概览接口
 * @method Models\DescribeHDFSStorageInfoResponse DescribeHDFSStorageInfo(Models\DescribeHDFSStorageInfoRequest $req) 查询HDFS存储文件信息
 * @method Models\DescribeHiveQueriesResponse DescribeHiveQueries(Models\DescribeHiveQueriesRequest $req) 获取hive查询信息
 * @method Models\DescribeImpalaQueriesResponse DescribeImpalaQueries(Models\DescribeImpalaQueriesRequest $req) DescribeImpalaQueries
 * @method Models\DescribeInsightListResponse DescribeInsightList(Models\DescribeInsightListRequest $req) 获取洞察结果信息
 * @method Models\DescribeInstanceRenewNodesResponse DescribeInstanceRenewNodes(Models\DescribeInstanceRenewNodesRequest $req) 查询待续费节点信息
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询集群实例信息
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) 查询集群列表
 * @method Models\DescribeJobFlowResponse DescribeJobFlow(Models\DescribeJobFlowRequest $req) 查询流程任务
 * @method Models\DescribeKyuubiQueryInfoResponse DescribeKyuubiQueryInfo(Models\DescribeKyuubiQueryInfoRequest $req) 查询Kyuubi查询信息
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) 查询YARN资源调度数据信息。已废弃，请使用`DescribeYarnQueue`去查询队列信息。
 * @method Models\DescribeResourceScheduleDiffDetailResponse DescribeResourceScheduleDiffDetail(Models\DescribeResourceScheduleDiffDetailRequest $req) YARN资源调度-变更详情
 * @method Models\DescribeSLInstanceResponse DescribeSLInstance(Models\DescribeSLInstanceRequest $req) 本接口（DescribeSLInstance）用于查询 Serverless HBase实例基本信息
 * @method Models\DescribeSLInstanceListResponse DescribeSLInstanceList(Models\DescribeSLInstanceListRequest $req) 本接口（DescribeSLInstanceList）用于查询Serverless HBase实例列表详细信息
 * @method Models\DescribeServiceNodeInfosResponse DescribeServiceNodeInfos(Models\DescribeServiceNodeInfosRequest $req) 查询服务进程信息
 * @method Models\DescribeSparkQueriesResponse DescribeSparkQueries(Models\DescribeSparkQueriesRequest $req) 查询Spark查询信息列表
 * @method Models\DescribeStarRocksQueryInfoResponse DescribeStarRocksQueryInfo(Models\DescribeStarRocksQueryInfoRequest $req) 查询StarRocks查询信息
 * @method Models\DescribeTrinoQueryInfoResponse DescribeTrinoQueryInfo(Models\DescribeTrinoQueryInfoRequest $req) 查询Trino(PrestoSQL)查询信息
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) 该接口支持安装了OpenLdap组件的集群。
批量导出用户。对于kerberos集群，如果需要kertab文件下载地址，可以将NeedKeytabInfo设置为true；注意SupportDownLoadKeyTab为true，但是DownLoadKeyTabUrl为空字符串，表示keytab文件在后台没有准备好（正在生成）。
 * @method Models\DescribeYarnApplicationsResponse DescribeYarnApplications(Models\DescribeYarnApplicationsRequest $req) DescribeYarnApplications
 * @method Models\DescribeYarnQueueResponse DescribeYarnQueue(Models\DescribeYarnQueueRequest $req) 获取资源调度中的队列信息
 * @method Models\DescribeYarnScheduleHistoryResponse DescribeYarnScheduleHistory(Models\DescribeYarnScheduleHistoryRequest $req) 查看yarn资源调度的调度历史。废弃，请使用流程中心查看历史记录。
 * @method Models\InquirePriceRenewEmrResponse InquirePriceRenewEmr(Models\InquirePriceRenewEmrRequest $req) 集群续费询价。
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) 创建实例询价
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) 续费询价。
 * @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) 扩容询价. 当扩容时候，请通过该接口查询价格。
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) 变配询价
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) 前提：预付费集群
资源级别开启或关闭自动续费
 * @method Models\ModifyAutoScaleStrategyResponse ModifyAutoScaleStrategy(Models\ModifyAutoScaleStrategyRequest $req) 修改自动扩缩容规则
 * @method Models\ModifyGlobalConfigResponse ModifyGlobalConfig(Models\ModifyGlobalConfigRequest $req) 修改YARN资源调度的全局配置
 * @method Models\ModifyPodNumResponse ModifyPodNum(Models\ModifyPodNumRequest $req) 调整Pod数量
 * @method Models\ModifyResourcePoolsResponse ModifyResourcePools(Models\ModifyResourcePoolsRequest $req) 刷新YARN的动态资源池。已废弃，请使用`DeployYarnConf`
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) 修改YARN资源调度的资源配置。已废弃，请使用`ModifyYarnQueueV2`来修改队列配置
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) 修改了yarn的资源调度器，点击部署生效。
 * @method Models\ModifyResourcesTagsResponse ModifyResourcesTags(Models\ModifyResourcesTagsRequest $req) 强制修改标签
 * @method Models\ModifySLInstanceResponse ModifySLInstance(Models\ModifySLInstanceRequest $req) 本接口（ModifySLInstance）用于Serverless HBase变配实例。
- 接口调用成功，会创建Serverless HBase实例，创建实例请求成功会返回请求的 RequestID。
- 接口为异步接口，接口返回时操作并未立即完成，实例操作结果可以通过调用DescribeInstancesList查看当前实例的StatusDesc状态。
 * @method Models\ModifyUserManagerPwdResponse ModifyUserManagerPwd(Models\ModifyUserManagerPwdRequest $req) 修改用户密码（用户管理）
 * @method Models\ModifyYarnDeployResponse ModifyYarnDeploy(Models\ModifyYarnDeployRequest $req) 部署生效。已废弃，请使用`DeployYarnConf`接口进行部署生效
 * @method Models\ModifyYarnQueueV2Response ModifyYarnQueueV2(Models\ModifyYarnQueueV2Request $req) 修改资源调度中队列信息
 * @method Models\ResetYarnConfigResponse ResetYarnConfig(Models\ResetYarnConfigRequest $req) 修改YARN资源调度的资源配置
 * @method Models\RunJobFlowResponse RunJobFlow(Models\RunJobFlowRequest $req) 创建流程作业
 * @method Models\ScaleOutClusterResponse ScaleOutCluster(Models\ScaleOutClusterRequest $req) 扩容集群节点
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 扩容节点
 * @method Models\StartStopServiceOrMonitorResponse StartStopServiceOrMonitor(Models\StartStopServiceOrMonitorRequest $req) 用于启停服务 重启服务等功能
 * @method Models\SyncPodStateResponse SyncPodState(Models\SyncPodStateRequest $req) EMR同步TKE中POD状态
 * @method Models\TerminateClusterNodesResponse TerminateClusterNodes(Models\TerminateClusterNodesRequest $req) 销毁集群节点
 * @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) 销毁EMR实例。此接口仅支持弹性MapReduce正式计费版本。
 * @method Models\TerminateSLInstanceResponse TerminateSLInstance(Models\TerminateSLInstanceRequest $req) 本接口（TerminateSLInstance）用于销毁Serverless HBase实例
 * @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) 缩容Task节点
 */

class EmrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "emr.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "emr";

    /**
     * @var string
     */
    protected $version = "2019-01-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("emr")."\\"."V20190103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
