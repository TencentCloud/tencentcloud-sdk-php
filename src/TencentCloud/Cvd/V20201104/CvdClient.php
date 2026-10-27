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

namespace TencentCloud\Cvd\V20201104;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cvd\V20201104\Models as Models;

/**
 * @method Models\AssociateSecurityGroupResponse AssociateSecurityGroup(Models\AssociateSecurityGroupRequest $req) 安全组批量关联云桌面
 * @method Models\BindInstancesResponse BindInstances(Models\BindInstancesRequest $req) 绑定桌面
 * @method Models\CreateCommandTaskResponse CreateCommandTask(Models\CreateCommandTaskRequest $req) 创建批量脚本任务
 * @method Models\CreateDataDiskResponse CreateDataDisk(Models\CreateDataDiskRequest $req) 实例新增数据盘
 * @method Models\CreateDomainControlPolicyResponse CreateDomainControlPolicy(Models\CreateDomainControlPolicyRequest $req) 新建域名访问控制策略
 * @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) 创建自定义镜像。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 创建云桌面实例
 * @method Models\CreatePolicyResponse CreatePolicy(Models\CreatePolicyRequest $req) 创建策略
 * @method Models\DeleteCommandTasksResponse DeleteCommandTasks(Models\DeleteCommandTasksRequest $req) 删除命令任务
 * @method Models\DeleteDomainControlPolicyResponse DeleteDomainControlPolicy(Models\DeleteDomainControlPolicyRequest $req) 删除域名访问控制策略
 * @method Models\DeleteImagesResponse DeleteImages(Models\DeleteImagesRequest $req) 用于删除一个或多个自定义镜像。单次最大删除5个。
 * @method Models\DescribeCommandTasksResponse DescribeCommandTasks(Models\DescribeCommandTasksRequest $req) 拉取命令任务详情
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) 获取云桌面镜像详细信息
 * @method Models\DescribeInstanceFetchMsgResponse DescribeInstanceFetchMsg(Models\DescribeInstanceFetchMsgRequest $req) 获取指定实例的登录Fetch信息
 * @method Models\DescribeInstanceGraphDataResponse DescribeInstanceGraphData(Models\DescribeInstanceGraphDataRequest $req) 获取实例磁盘分区监控数据
 * @method Models\DescribeInstanceLoginMsgResponse DescribeInstanceLoginMsg(Models\DescribeInstanceLoginMsgRequest $req) 获取指定实例的登录login信息
 * @method Models\DescribeInstanceMonitorDataResponse DescribeInstanceMonitorData(Models\DescribeInstanceMonitorDataRequest $req) 查询实例监控数据
 * @method Models\DescribeInstanceRegionDistributionResponse DescribeInstanceRegionDistribution(Models\DescribeInstanceRegionDistributionRequest $req) 获取用户在各个区域云桌面实例个数
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取云桌面实例详细信息
 * @method Models\DescribeInstancesBindStatusResponse DescribeInstancesBindStatus(Models\DescribeInstancesBindStatusRequest $req) 获取桌面实例绑定状态
 * @method Models\DescribeInstancesStatusResponse DescribeInstancesStatus(Models\DescribeInstancesStatusRequest $req) 获取桌面实例状态
 * @method Models\DescribeInvocationDetailResponse DescribeInvocationDetail(Models\DescribeInvocationDetailRequest $req) 查询脚本任务执行的详细情况。
 * @method Models\DescribeInvocationsResponse DescribeInvocations(Models\DescribeInvocationsRequest $req) 查询指定云桌面上的任务列表。
 * @method Models\DescribePolicyDetailResponse DescribePolicyDetail(Models\DescribePolicyDetailRequest $req) 拉取租户策略列表 
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) 拉取云桌面关联的安全组信息
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) 拉取快照列表
 * @method Models\DescribeUsageResponse DescribeUsage(Models\DescribeUsageRequest $req) 拉取实例使用时长详情
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) 拉取用户列表
 * @method Models\DisassociateSecurityGroupResponse DisassociateSecurityGroup(Models\DisassociateSecurityGroupRequest $req) 安全组批量解关联云桌面
 * @method Models\ModifyDiskConfigurationResponse ModifyDiskConfiguration(Models\ModifyDiskConfigurationRequest $req) 实例硬盘扩容
 * @method Models\ModifyImageAttrsResponse ModifyImageAttrs(Models\ModifyImageAttrsRequest $req) 修改镜像属性
 * @method Models\ModifyInstanceBasicAttributeResponse ModifyInstanceBasicAttribute(Models\ModifyInstanceBasicAttributeRequest $req) 修改桌面实例属性
 * @method Models\ModifyInstancesTypeResponse ModifyInstancesType(Models\ModifyInstancesTypeRequest $req) 调整实例机型配置
 * @method Models\ModifyInstancesVpcResponse ModifyInstancesVpc(Models\ModifyInstancesVpcRequest $req) 调整实例私有网络
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 重启实例
 * @method Models\RemoveDataDisksResponse RemoveDataDisks(Models\RemoveDataDisksRequest $req) 卸载实例数据盘
 * @method Models\RemovePolicyResponse RemovePolicy(Models\RemovePolicyRequest $req) 删除策略
 * @method Models\RenewInstancesResponse RenewInstances(Models\RenewInstancesRequest $req) 实例续费
 * @method Models\ResetInstancesResponse ResetInstances(Models\ResetInstancesRequest $req) 实例重置
 * @method Models\RunCommandResponse RunCommand(Models\RunCommandRequest $req) 在指定的云桌面实例上执行脚本任务。
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) 开启实例
 * @method Models\StopCommandTasksResponse StopCommandTasks(Models\StopCommandTasksRequest $req) 停止命令任务
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) 关闭实例
 * @method Models\StopInvocationResponse StopInvocation(Models\StopInvocationRequest $req) 停止脚本任务的执行。
 * @method Models\StopSessionResponse StopSession(Models\StopSessionRequest $req) 注销或者断开机器当前会话
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 主动退还、销毁退还实例。 
<li>包年包月实例首次调用本接口，且参数DestroyImmediately为false时，实例进入隔离期，再次调用本接口，实例将被销毁，且不可恢复。</li>
<li>包年包月实例，如果参数DestroyImmediately为true来调用此接口，则实例将被直接销毁，且不可恢复。</li>
<li>按量计费实例调用本接口将被直接销毁，且不可恢复。</li>
 * @method Models\UnbindInstancesResponse UnbindInstances(Models\UnbindInstancesRequest $req) 解除用户和机器绑定关系
 * @method Models\UpdatePolicyResponse UpdatePolicy(Models\UpdatePolicyRequest $req) 更新策略
 */

class CvdClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cvd.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cvd";

    /**
     * @var string
     */
    protected $version = "2020-11-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cvd")."\\"."V20201104\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
