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

namespace TencentCloud\Thpc\V20230321;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Thpc\V20230321\Models as Models;

/**
 * @method Models\AddClusterStorageOptionResponse AddClusterStorageOption(Models\AddClusterStorageOptionRequest $req) 本接口（AddClusterStorageOption）用于添加集群存储选项信息。
 * @method Models\AddNodesResponse AddNodes(Models\AddNodesRequest $req) 本接口(AddNodes)用于添加一个或者多个计算节点或者登录节点到指定集群。
 * @method Models\AddQueueResponse AddQueue(Models\AddQueueRequest $req) 本接口(AddQueue)用于添加队列到指定集群。
* 本接口为目前只支持SchedulerType为SLURM的集群。
* 单个集群中队列数量上限为10个。
 * @method Models\AttachNodesResponse AttachNodes(Models\AttachNodesRequest $req) 本接口 (AttachNodes) 用于绑定一个或者多个计算节点指定资源到指定集群中。
 * @method Models\BindClusterVpcResponse BindClusterVpc(Models\BindClusterVpcRequest $req) 本接口 (BindClusterVpc) 用于为IDC集群绑定VPC和子网。

* 绑定VPC后，集群可在该VPC内开启专线/VPN代理。
* VpcId和SubnetId为必填参数，且子网必须属于指定的VPC。
* 若集群已开通代理，需先关闭代理（DisableClusterDedicatedProxy）再变更VPC绑定。
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 本接口 (CreateCluster) 用于创建并启动集群。

* 本接口为异步接口， 当创建集群请求下发成功后会返回一个集群`ID`和一个`RequestId`，此时创建集群操作并未立即完成。在此期间集群的状态将会处于“PENDING”或者“INITING”，集群创建结果可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/1527/72100)  接口查询，如果集群状态(ClusterStatus)变为“RUNNING(运行中)”，则代表集群创建成功，“ INIT_FAILED”代表集群创建失败。
 * @method Models\CreateScheduledActionResponse CreateScheduledAction(Models\CreateScheduledActionRequest $req) 为指定集群队列创建定时伸缩任务，按计划时间自动调整队列的节点数量。
 * @method Models\CreateWorkspacesResponse CreateWorkspaces(Models\CreateWorkspacesRequest $req) 本接口 (CreateWorkspaces) 用于创建工作空间。
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 本接口（DeleteCluster）用于删除一个指定的集群。
 * @method Models\DeleteClusterStorageOptionResponse DeleteClusterStorageOption(Models\DeleteClusterStorageOptionRequest $req) 本接口 (DeleteClusterStorageOption) 用于删除集群存储选项信息。
 * @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 本接口 (DeleteJob) 用于删除一个作业任务。
 * @method Models\DeleteNodesResponse DeleteNodes(Models\DeleteNodesRequest $req) 本接口(DeleteNodes)用于删除指定集群中一个或者多个计算节点或者登录节点。
 * @method Models\DeleteQueueResponse DeleteQueue(Models\DeleteQueueRequest $req) 本接口(DeleteQueue)用于从指定集群删除队列。
* 本接口为目前只支持SchedulerType为SLURM的集群。

* 删除队列时，需要保证队列内不存在节点。
 * @method Models\DeleteScheduledActionResponse DeleteScheduledAction(Models\DeleteScheduledActionRequest $req) 删除指定的定时伸缩任务。
 * @method Models\DescribeAutoScalingConfigurationResponse DescribeAutoScalingConfiguration(Models\DescribeAutoScalingConfigurationRequest $req) 本接口(DescribeAutoScalingConfiguration)用于查询集群弹性伸缩配置信息。本接口仅适用于弹性伸缩类型为THPC_AS的集群。
 * @method Models\DescribeClusterActivitiesResponse DescribeClusterActivities(Models\DescribeClusterActivitiesRequest $req) 本接口（DescribeClusterActivities）用于查询集群活动历史记录列表。
 * @method Models\DescribeClusterDedicatedProxyResponse DescribeClusterDedicatedProxy(Models\DescribeClusterDedicatedProxyRequest $req) 本接口 (DescribeClusterDedicatedProxy) 用于查询IDC集群专线/VPN代理的状态。

* 返回终端节点（EndPoint）的当前状态，包括是否就绪、VIP地址等信息。
* 若代理未开通，EndPointReady返回false，EndPointStatus为UNKNOWN。
 * @method Models\DescribeClusterStorageOptionResponse DescribeClusterStorageOption(Models\DescribeClusterStorageOptionRequest $req) 本接口 (DescribeClusterStorageOption) 用于查询集群存储选项信息。
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 本接口（DescribeClusters）用于查询集群列表。
 * @method Models\DescribeInitNodeScriptsResponse DescribeInitNodeScripts(Models\DescribeInitNodeScriptsRequest $req) 本接口 (DescribeInitNodeScripts) 用于查询节点初始化脚本列表。
 * @method Models\DescribeInstanceFamiliesResponse DescribeInstanceFamilies(Models\DescribeInstanceFamiliesRequest $req) 查询指定集群可用的机型族列表，用于弹性伸缩配置时选择机型族。
 * @method Models\DescribeJobSubmitInfoResponse DescribeJobSubmitInfo(Models\DescribeJobSubmitInfoRequest $req) 本接口用于查询作业的提交信息。
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 本接口 (DescribeJobs) 用于查询作业任务列表信息。
 * @method Models\DescribeJobsOverviewResponse DescribeJobsOverview(Models\DescribeJobsOverviewRequest $req) 本接口 (DescribeJobs) 用于查询作业任务列表信息。
 * @method Models\DescribeNodesResponse DescribeNodes(Models\DescribeNodesRequest $req) 本接口 (DescribeNodes) 用于查询指定集群节点概览信息列表。
 * @method Models\DescribeQueueAutoScalingResponse DescribeQueueAutoScaling(Models\DescribeQueueAutoScalingRequest $req) 查询指定集群的队列弹性伸缩配置信息。
 * @method Models\DescribeQueueAutoScalingOverviewResponse DescribeQueueAutoScalingOverview(Models\DescribeQueueAutoScalingOverviewRequest $req) 查询指定集群的队列弹性伸缩概览信息，包括期望容量、当前容量、当前动态节点数、有效定时任务数等。
 * @method Models\DescribeQueuesResponse DescribeQueues(Models\DescribeQueuesRequest $req) 本接口(DescribeQueues)用于查询指定集群队列概览信息列表。
 * @method Models\DescribeScheduledActionsResponse DescribeScheduledActions(Models\DescribeScheduledActionsRequest $req) 查询指定集群队列的定时伸缩任务列表。
 * @method Models\DescribeWorkspacesResponse DescribeWorkspaces(Models\DescribeWorkspacesRequest $req) 本接口（DescribeWorkspaces）用于查询工作空间列表。
 * @method Models\DetachNodesResponse DetachNodes(Models\DetachNodesRequest $req) 本接口 (DetachNodes) 用于将一个或者多个计算节点从集群中移除，但是不销毁指定计算资源。
 * @method Models\DisableClusterDedicatedProxyResponse DisableClusterDedicatedProxy(Models\DisableClusterDedicatedProxyRequest $req) 本接口 (DisableClusterDedicatedProxy) 用于关闭IDC集群的专线/VPN代理。

* 关闭后，系统将删除VPC终端节点（EndPoint），断开IDC集群与云上VPC的网络连接。
* 若代理未开通，调用将返回ProxyNotEnabled错误。
* 操作不可逆，关闭后需重新调用EnableClusterDedicatedProxy开启。
 * @method Models\EnableClusterDedicatedProxyResponse EnableClusterDedicatedProxy(Models\EnableClusterDedicatedProxyRequest $req) 本接口 (EnableClusterDedicatedProxy) 用于开启IDC集群的专线/VPN代理。

* 开启后，系统将自动创建VPC终端节点（EndPoint），实现IDC集群与云上VPC的网络互通。
* 若代理已开通，重复调用将幂等返回已有EndPoint信息。
* SubnetId与VpcId需同时指定或同时不指定。若不指定，则使用集群已绑定的VPC和子网。
 * @method Models\GenerateRegisterCodeResponse GenerateRegisterCode(Models\GenerateRegisterCodeRequest $req) 本接口(GenerateRegisterCode)用于为队列创建一个注册码，注册码用于IDC机器的注册纳管。
 * @method Models\GenerateRegisterCommandResponse GenerateRegisterCommand(Models\GenerateRegisterCommandRequest $req) 本接口 (GenerateRegisterCommand) 用于生成IDC集群的节点注册命令。

* 返回的注册命令可直接在IDC机器上以root身份执行，将该机器纳管进指定的IDC集群。
* 当<code>Proxy=true</code>时，系统会先确保集群专线代理就绪（自动开启终端节点并轮询至ACTIVE），再签发注册码并渲染带代理VIP的注册命令；若在超时窗口内代理仍未就绪，将返回<code>FailedOperation.ProxyNotReady</code>。
* 当<code>Proxy=false</code>时，IDC机器需可直连集群，直接签发注册码并渲染注册命令。
* VpcId与SubnetId需同时指定或同时不指定；仅当<code>Proxy=true</code>且集群未绑定VPC时二者必填。当<code>Proxy=false</code>时二者不生效，若仍传入将返回<code>InvalidParameterValue.ParametersNotSupported</code>。
* 若集群此前已开启专线代理并绑定了VPC/子网，本次传入的VpcId/SubnetId与已绑定值不一致时，将返回<code>UnsupportedOperation.VpcAlreadyBound</code>（不支持改绑）。
* 仅支持IDC类型集群，对非IDC集群调用将返回<code>InvalidParameterValue.ParametersNotSupported</code>。
 * @method Models\InquirePriceCreateWorkspacesResponse InquirePriceCreateWorkspaces(Models\InquirePriceCreateWorkspacesRequest $req) 本接口(InquirePriceCreateWorkspaces)用于创建实例询价。
 * @method Models\InquirePriceModifyWorkspacesChargeTypeResponse InquirePriceModifyWorkspacesChargeType(Models\InquirePriceModifyWorkspacesChargeTypeRequest $req) 查询按量计费工作空间转换为包年包月的价格。不会创建订单或变更资源。
 * @method Models\ModifyClusterDeletionProtectionResponse ModifyClusterDeletionProtection(Models\ModifyClusterDeletionProtectionRequest $req) 修改集群删除保护状态
 * @method Models\ModifyInitNodeScriptsResponse ModifyInitNodeScripts(Models\ModifyInitNodeScriptsRequest $req) 本接口 (ModifyInitNodeScripts) 用于修改节点初始化脚本。
 * @method Models\ModifyNodeAttributeResponse ModifyNodeAttribute(Models\ModifyNodeAttributeRequest $req) 本接口用于修改节点属性
 * @method Models\ModifyScheduledActionResponse ModifyScheduledAction(Models\ModifyScheduledActionRequest $req) 修改指定的定时伸缩任务配置。
 * @method Models\ModifyWorkspacesAttributeResponse ModifyWorkspacesAttribute(Models\ModifyWorkspacesAttributeRequest $req) 本接口 (ModifyWorkspacesAttribute) 用于修改工作空间的属性（目前只支持修改工作空间的名称）。
 * @method Models\ModifyWorkspacesChargeTypeResponse ModifyWorkspacesChargeType(Models\ModifyWorkspacesChargeTypeRequest $req) 正式提交按量计费工作空间转包年包月订单。仅支持 ONLINE 且计费模式为 POSTPAID_BY_HOUR 的工作空间。
 * @method Models\ModifyWorkspacesRenewFlagResponse ModifyWorkspacesRenewFlag(Models\ModifyWorkspacesRenewFlagRequest $req) 本接口 (ModifyWorkspacesAttribute) 用于修改工作空间的属性（目前只支持修改工作空间的名称）。
 * @method Models\SetAutoScalingConfigurationResponse SetAutoScalingConfiguration(Models\SetAutoScalingConfigurationRequest $req) 本接口(SetAutoScalingConfiguration)用于为集群设置集群弹性伸缩配置信息。
 * @method Models\SetQueueAutoScalingResponse SetQueueAutoScaling(Models\SetQueueAutoScalingRequest $req) 为指定集群的队列配置弹性伸缩策略，包括伸缩容量、扩容方式等。
 * @method Models\SubmitJobResponse SubmitJob(Models\SubmitJobRequest $req) 本接口 (SubmitJob) 用于提交一个作业任务。
 * @method Models\TerminateJobResponse TerminateJob(Models\TerminateJobRequest $req) 本接口 (TerminateJob) 用于终止一个作业任务。
 * @method Models\TerminateWorkspacesResponse TerminateWorkspaces(Models\TerminateWorkspacesRequest $req) 本接口 (TerminateWorkspaces) 用于主动退还工作空间。
 */

class ThpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "thpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "thpc";

    /**
     * @var string
     */
    protected $version = "2023-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("thpc")."\\"."V20230321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
