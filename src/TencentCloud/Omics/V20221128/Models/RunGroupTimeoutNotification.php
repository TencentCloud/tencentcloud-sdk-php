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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务批次超时通知。
 *
 * @method integer getTimeoutMinutes() 获取任务批次超时时间，单位分钟。
 * @method void setTimeoutMinutes(integer $TimeoutMinutes) 设置任务批次超时时间，单位分钟。
 * @method NotificationType getNotificationType() 获取通知类型。
 * @method void setNotificationType(NotificationType $NotificationType) 设置通知类型。
 */
class RunGroupTimeoutNotification extends AbstractModel
{
    /**
     * @var integer 任务批次超时时间，单位分钟。
     */
    public $TimeoutMinutes;

    /**
     * @var NotificationType 通知类型。
     */
    public $NotificationType;

    /**
     * @param integer $TimeoutMinutes 任务批次超时时间，单位分钟。
     * @param NotificationType $NotificationType 通知类型。
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
        if (array_key_exists("TimeoutMinutes",$param) and $param["TimeoutMinutes"] !== null) {
            $this->TimeoutMinutes = $param["TimeoutMinutes"];
        }

        if (array_key_exists("NotificationType",$param) and $param["NotificationType"] !== null) {
            $this->NotificationType = new NotificationType();
            $this->NotificationType->deserialize($param["NotificationType"]);
        }
    }
}
