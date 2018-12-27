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

namespace TencentCloud\As\V20180419;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\As\V20180419\Models as Models;

/**
* @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) 本接口（AttachInstances）用于将 CVM 实例添加到伸缩组。

* @method Models\CreateAutoScalingGroupResponse CreateAutoScalingGroup(Models\CreateAutoScalingGroupRequest $req) 本接口（CreateAutoScalingGroup）用于创建伸缩组
* @method Models\CreateLaunchConfigurationResponse CreateLaunchConfiguration(Models\CreateLaunchConfigurationRequest $req) 本接口（CreateLaunchConfiguration）用于创建新的启动配置。

* 启动配置，可以通过 `ModifyLaunchConfigurationAttributes` 修改少量字段。如需使用新的启动配置，建议重新创建启动配置。

* 每个项目最多只能创建20个启动配置，详见[使用限制](https://cloud.tencent.com/document/product/377/3120)。

* @method Models\CreateScheduledActionResponse CreateScheduledAction(Models\CreateScheduledActionRequest $req) 本接口（CreateScheduledAction）用于创建定时任务。
* @method Models\DeleteAutoScalingGroupResponse DeleteAutoScalingGroup(Models\DeleteAutoScalingGroupRequest $req) 本接口（DeleteAutoScalingGroup）用于删除指定伸缩组，删除前提是伸缩组内无实例且当前未在执行伸缩活动。
* @method Models\DeleteLaunchConfigurationResponse DeleteLaunchConfiguration(Models\DeleteLaunchConfigurationRequest $req) 本接口（DeleteLaunchConfiguration）用于删除启动配置。

* 若启动配置在伸缩组中属于生效状态，则该启动配置不允许删除。

* @method Models\DeleteScheduledActionResponse DeleteScheduledAction(Models\DeleteScheduledActionRequest $req) 本接口（DeleteScheduledAction）用于删除特定的定时任务。
* @method Models\DescribeAccountLimitsResponse DescribeAccountLimits(Models\DescribeAccountLimitsRequest $req) 本接口（DescribeAccountLimits）用于查询用户账户在弹性伸缩中的资源限制。
* @method Models\DescribeAutoScalingActivitiesResponse DescribeAutoScalingActivities(Models\DescribeAutoScalingActivitiesRequest $req) 本接口（DescribeAutoScalingActivities）用于查询伸缩组的伸缩活动记录。
* @method Models\DescribeAutoScalingGroupsResponse DescribeAutoScalingGroups(Models\DescribeAutoScalingGroupsRequest $req) 本接口（DescribeAutoScalingGroups）用于查询伸缩组信息。

* 可以根据伸缩组ID、伸缩组名称或者启动配置ID等信息来查询伸缩组的详细信息。过滤信息详细请见过滤器`Filter`。
* 如果参数为空，返回当前用户一定数量（`Limit`所指定的数量，默认为20）的伸缩组。
* @method Models\DescribeAutoScalingInstancesResponse DescribeAutoScalingInstances(Models\DescribeAutoScalingInstancesRequest $req) 本接口（DescribeAutoScalingInstances）用于查询弹性伸缩关联实例的信息。

* 可以根据实例ID、伸缩组ID等信息来查询实例的详细信息。过滤信息详细请见过滤器`Filter`。
* 如果参数为空，返回当前用户一定数量（`Limit`所指定的数量，默认为20）的实例。
* @method Models\DescribeLaunchConfigurationsResponse DescribeLaunchConfigurations(Models\DescribeLaunchConfigurationsRequest $req) 本接口（DescribeLaunchConfigurations）用于查询启动配置的信息。

* 可以根据启动配置ID、启动配置名称等信息来查询启动配置的详细信息。过滤信息详细请见过滤器`Filter`。
* 如果参数为空，返回当前用户一定数量（`Limit`所指定的数量，默认为20）的启动配置。
* @method Models\DescribeScheduledActionsResponse DescribeScheduledActions(Models\DescribeScheduledActionsRequest $req) 本接口 (DescribeScheduledActions) 用于查询一个或多个定时任务的详细信息。

* 可以根据定时任务ID、定时任务名称或者伸缩组ID等信息来查询定时任务的详细信息。过滤信息详细请见过滤器`Filter`。
* 如果参数为空，返回当前用户一定数量（Limit所指定的数量，默认为20）的定时任务。
* @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) 本接口（DettachInstances）用于从伸缩组移出 CVM 实例，本接口不会被销毁实例。
* @method Models\DisableAutoScalingGroupResponse DisableAutoScalingGroup(Models\DisableAutoScalingGroupRequest $req) 本接口（DisableAutoScalingGroup）用于停用指定伸缩组。
* @method Models\EnableAutoScalingGroupResponse EnableAutoScalingGroup(Models\EnableAutoScalingGroupRequest $req) 本接口（EnableAutoScalingGroup）用于启用指定伸缩组。
* @method Models\ModifyAutoScalingGroupResponse ModifyAutoScalingGroup(Models\ModifyAutoScalingGroupRequest $req) 本接口（ModifyAutoScalingGroup）用于修改伸缩组。
* @method Models\ModifyDesiredCapacityResponse ModifyDesiredCapacity(Models\ModifyDesiredCapacityRequest $req) 本接口（ModifyDesiredCapacity）用于修改指定伸缩组的期望实例数
* @method Models\ModifyLaunchConfigurationAttributesResponse ModifyLaunchConfigurationAttributes(Models\ModifyLaunchConfigurationAttributesRequest $req) 本接口（ModifyLaunchConfigurationAttributes）用于修改启动配置部分属性。

* 修改启动配置后，已经使用该启动配置扩容的存量实例不会发生变更，此后使用该启动配置的新增实例会按照新的配置进行扩容。
* 本接口支持修改部分简单类型。
* @method Models\ModifyScheduledActionResponse ModifyScheduledAction(Models\ModifyScheduledActionRequest $req) 本接口（ModifyScheduledAction）用于修改定时任务。
* @method Models\RemoveInstancesResponse RemoveInstances(Models\RemoveInstancesRequest $req) 本接口（RemoveInstances）用于从伸缩组删除 CVM 实例。根据当前的产品逻辑，如果实例由弹性伸缩自动创建，则实例会被销毁；如果实例系创建后加入伸缩组的，则会从伸缩组中移除，保留实例。
 */

class AsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "as.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("as")."\\"."V20180419\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
