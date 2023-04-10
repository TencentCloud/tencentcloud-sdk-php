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
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) 该接口支持安装了OpenLdap组件的集群。
新增用户列表（用户管理）。
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建EMR集群实例
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建EMR集群实例
 * @method Models\DeleteUserManagerUserListResponse DeleteUserManagerUserList(Models\DeleteUserManagerUserListRequest $req) 删除用户列表（用户管理）

 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) 查询集群节点信息
 * @method Models\DescribeCvmQuotaResponse DescribeCvmQuota(Models\DescribeCvmQuotaRequest $req) 获取账户的CVM配额
 * @method Models\DescribeEmrApplicationStaticsResponse DescribeEmrApplicationStatics(Models\DescribeEmrApplicationStaticsRequest $req)  yarn application 统计接口查询
 * @method Models\DescribeInstanceRenewNodesResponse DescribeInstanceRenewNodes(Models\DescribeInstanceRenewNodesRequest $req) 查询待续费节点信息
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询集群实例信息
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) 查询集群列表
 * @method Models\DescribeJobFlowResponse DescribeJobFlow(Models\DescribeJobFlowRequest $req) 查询流程任务
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) 查询YARN资源调度数据信息
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) 该接口支持安装了OpenLdap组件的集群。
批量导出用户。对于kerberos集群，如果需要kertab文件下载地址，可以将NeedKeytabInfo设置为true；注意SupportDownLoadKeyTab为true，但是DownLoadKeyTabUrl为空字符串，表示keytab文件在后台没有准备好（正在生成）。
 * @method Models\InquirePriceRenewEmrResponse InquirePriceRenewEmr(Models\InquirePriceRenewEmrRequest $req) 集群续费询价。
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) 创建实例询价
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) 续费询价。
 * @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) 扩容询价. 当扩容时候，请通过该接口查询价格。
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) 变配询价
 * @method Models\ModifyResourcePoolsResponse ModifyResourcePools(Models\ModifyResourcePoolsRequest $req) 刷新YARN的动态资源池
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) 修改YARN资源调度的资源配置
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) 修改了yarn的资源调度器，点击部署生效
 * @method Models\RunJobFlowResponse RunJobFlow(Models\RunJobFlowRequest $req) 创建流程作业
 * @method Models\ScaleOutClusterResponse ScaleOutCluster(Models\ScaleOutClusterRequest $req) 扩容集群节点
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 扩容节点
 * @method Models\StartStopServiceOrMonitorResponse StartStopServiceOrMonitor(Models\StartStopServiceOrMonitorRequest $req) 用于启动或停止监控或服务
 * @method Models\SyncPodStateResponse SyncPodState(Models\SyncPodStateRequest $req) EMR同步TKE中POD状态
 * @method Models\TerminateClusterNodesResponse TerminateClusterNodes(Models\TerminateClusterNodesRequest $req) 销毁集群节点
 * @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) 销毁EMR实例。此接口仅支持弹性MapReduce正式计费版本。
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
