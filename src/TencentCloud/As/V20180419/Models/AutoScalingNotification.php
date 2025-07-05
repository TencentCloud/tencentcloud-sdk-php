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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩事件通知
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method array getNotificationUserGroupIds() 获取用户组ID列表。
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) 设置用户组ID列表。
 * @method array getNotificationTypes() 获取通知事件列表。取值范围如下:
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
 * @method void setNotificationTypes(array $NotificationTypes) 设置通知事件列表。取值范围如下:
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
 * @method string getAutoScalingNotificationId() 获取事件通知ID。
 * @method void setAutoScalingNotificationId(string $AutoScalingNotificationId) 设置事件通知ID。
 * @method string getTargetType() 获取通知接收端类型。取值范围如下：
USER_GROUP：用户组
TDMQ_CMQ_TOPIC：TDMQ CMQ 主题
TDMQ_CMQ_QUEUE：TDMQ CMQ 队列
CMQ_QUEUE：CMQ 队列，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
CMQ_TOPIC：CMQ 主题，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
 * @method void setTargetType(string $TargetType) 设置通知接收端类型。取值范围如下：
USER_GROUP：用户组
TDMQ_CMQ_TOPIC：TDMQ CMQ 主题
TDMQ_CMQ_QUEUE：TDMQ CMQ 队列
CMQ_QUEUE：CMQ 队列，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
CMQ_TOPIC：CMQ 主题，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
 * @method string getQueueName() 获取TDMQ CMQ 队列名。
 * @method void setQueueName(string $QueueName) 设置TDMQ CMQ 队列名。
 * @method string getTopicName() 获取TDMQ CMQ 主题名。
 * @method void setTopicName(string $TopicName) 设置TDMQ CMQ 主题名。
 */
class AutoScalingNotification extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 用户组ID列表。
     */
    public $NotificationUserGroupIds;

    /**
     * @var array 通知事件列表。取值范围如下:
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
     */
    public $NotificationTypes;

    /**
     * @var string 事件通知ID。
     */
    public $AutoScalingNotificationId;

    /**
     * @var string 通知接收端类型。取值范围如下：
USER_GROUP：用户组
TDMQ_CMQ_TOPIC：TDMQ CMQ 主题
TDMQ_CMQ_QUEUE：TDMQ CMQ 队列
CMQ_QUEUE：CMQ 队列，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
CMQ_TOPIC：CMQ 主题，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
     */
    public $TargetType;

    /**
     * @var string TDMQ CMQ 队列名。
     */
    public $QueueName;

    /**
     * @var string TDMQ CMQ 主题名。
     */
    public $TopicName;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param array $NotificationUserGroupIds 用户组ID列表。
     * @param array $NotificationTypes 通知事件列表。取值范围如下:
<li>SCALE_OUT_SUCCESSFUL：扩容成功</li>
<li>SCALE_OUT_FAILED：扩容失败</li>
<li>SCALE_IN_SUCCESSFUL：缩容成功</li>
<li>SCALE_IN_FAILED：缩容失败</li>
<li>REPLACE_UNHEALTHY_INSTANCE_SUCCESSFUL：替换不健康子机成功</li>
<li>REPLACE_UNHEALTHY_INSTANCE_FAILED：替换不健康子机失败</li>
     * @param string $AutoScalingNotificationId 事件通知ID。
     * @param string $TargetType 通知接收端类型。取值范围如下：
USER_GROUP：用户组
TDMQ_CMQ_TOPIC：TDMQ CMQ 主题
TDMQ_CMQ_QUEUE：TDMQ CMQ 队列
CMQ_QUEUE：CMQ 队列，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
CMQ_TOPIC：CMQ 主题，[CMQ 接口已下线](https://cloud.tencent.com/document/product/1496/83970)，已无法选用
     * @param string $QueueName TDMQ CMQ 队列名。
     * @param string $TopicName TDMQ CMQ 主题名。
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

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }

        if (array_key_exists("NotificationTypes",$param) and $param["NotificationTypes"] !== null) {
            $this->NotificationTypes = $param["NotificationTypes"];
        }

        if (array_key_exists("AutoScalingNotificationId",$param) and $param["AutoScalingNotificationId"] !== null) {
            $this->AutoScalingNotificationId = $param["AutoScalingNotificationId"];
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
