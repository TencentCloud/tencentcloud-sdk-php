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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNotificationConfiguration请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method array getNotificationTypes() 获取通知类型，即为需要订阅的通知类型集合，取值范围如下：
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
 * @method void setNotificationTypes(array $NotificationTypes) 设置通知类型，即为需要订阅的通知类型集合，取值范围如下：
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
 * @method array getNotificationUserGroupIds() 获取通知组ID，即为用户组ID集合，用户组ID可以通过[ListGroups](https://cloud.tencent.com/document/product/598/34589)查询。该参数仅在 TargetType 为 USER_GROUP 时生效。
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) 设置通知组ID，即为用户组ID集合，用户组ID可以通过[ListGroups](https://cloud.tencent.com/document/product/598/34589)查询。该参数仅在 TargetType 为 USER_GROUP 时生效。
 * @method string getTargetType() 获取通知接收端类型，取值如下：
<li>USER_GROUP：用户组</li>
<li>TDMQ_CMQ_TOPIC：TDMQ CMQ 主题</li>
<li>TDMQ_CMQ_QUEUE：TDMQ CMQ 队列</li>
<li>CMQ_QUEUE：CMQ 队列，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>
<li>CMQ_TOPIC：CMQ 主题，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>

默认值为：`USER_GROUP`。
 * @method void setTargetType(string $TargetType) 设置通知接收端类型，取值如下：
<li>USER_GROUP：用户组</li>
<li>TDMQ_CMQ_TOPIC：TDMQ CMQ 主题</li>
<li>TDMQ_CMQ_QUEUE：TDMQ CMQ 队列</li>
<li>CMQ_QUEUE：CMQ 队列，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>
<li>CMQ_TOPIC：CMQ 主题，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>

默认值为：`USER_GROUP`。
 * @method string getQueueName() 获取TDMQ CMQ 队列名，如 TargetType 取值为 `TDMQ_CMQ_QUEUE` ，该字段必填。
 * @method void setQueueName(string $QueueName) 设置TDMQ CMQ 队列名，如 TargetType 取值为 `TDMQ_CMQ_QUEUE` ，该字段必填。
 * @method string getTopicName() 获取TDMQ CMQ 主题名，如 TargetType 取值为 `TDMQ_CMQ_TOPIC` ，该字段必填。
 * @method void setTopicName(string $TopicName) 设置TDMQ CMQ 主题名，如 TargetType 取值为 `TDMQ_CMQ_TOPIC` ，该字段必填。
 */
class CreateNotificationConfigurationRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 通知类型，即为需要订阅的通知类型集合，取值范围如下：
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
     */
    public $NotificationTypes;

    /**
     * @var array 通知组ID，即为用户组ID集合，用户组ID可以通过[ListGroups](https://cloud.tencent.com/document/product/598/34589)查询。该参数仅在 TargetType 为 USER_GROUP 时生效。
     */
    public $NotificationUserGroupIds;

    /**
     * @var string 通知接收端类型，取值如下：
<li>USER_GROUP：用户组</li>
<li>TDMQ_CMQ_TOPIC：TDMQ CMQ 主题</li>
<li>TDMQ_CMQ_QUEUE：TDMQ CMQ 队列</li>
<li>CMQ_QUEUE：CMQ 队列，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>
<li>CMQ_TOPIC：CMQ 主题，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>

默认值为：`USER_GROUP`。
     */
    public $TargetType;

    /**
     * @var string TDMQ CMQ 队列名，如 TargetType 取值为 `TDMQ_CMQ_QUEUE` ，该字段必填。
     */
    public $QueueName;

    /**
     * @var string TDMQ CMQ 主题名，如 TargetType 取值为 `TDMQ_CMQ_TOPIC` ，该字段必填。
     */
    public $TopicName;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     * @param array $NotificationTypes 通知类型，即为需要订阅的通知类型集合，取值范围如下：
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
     * @param array $NotificationUserGroupIds 通知组ID，即为用户组ID集合，用户组ID可以通过[ListGroups](https://cloud.tencent.com/document/product/598/34589)查询。该参数仅在 TargetType 为 USER_GROUP 时生效。
     * @param string $TargetType 通知接收端类型，取值如下：
<li>USER_GROUP：用户组</li>
<li>TDMQ_CMQ_TOPIC：TDMQ CMQ 主题</li>
<li>TDMQ_CMQ_QUEUE：TDMQ CMQ 队列</li>
<li>CMQ_QUEUE：CMQ 队列，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>
<li>CMQ_TOPIC：CMQ 主题，[CMQ已下线](https://cloud.tencent.com/document/product/1496/83970)，目前仅推荐使用  TDMQ CMQ。</li>

默认值为：`USER_GROUP`。
     * @param string $QueueName TDMQ CMQ 队列名，如 TargetType 取值为 `TDMQ_CMQ_QUEUE` ，该字段必填。
     * @param string $TopicName TDMQ CMQ 主题名，如 TargetType 取值为 `TDMQ_CMQ_TOPIC` ，该字段必填。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
