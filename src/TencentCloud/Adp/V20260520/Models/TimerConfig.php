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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimerConfig
 *
 * @method TimerPushConfig getPushConfig() 获取推送配置
 * @method void setPushConfig(TimerPushConfig $PushConfig) 设置推送配置
 * @method TimerScheduleConfig getSchedule() 获取定时配置
 * @method void setSchedule(TimerScheduleConfig $Schedule) 设置定时配置
 */
class TimerConfig extends AbstractModel
{
    /**
     * @var TimerPushConfig 推送配置
     */
    public $PushConfig;

    /**
     * @var TimerScheduleConfig 定时配置
     */
    public $Schedule;

    /**
     * @param TimerPushConfig $PushConfig 推送配置
     * @param TimerScheduleConfig $Schedule 定时配置
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
        if (array_key_exists("PushConfig",$param) and $param["PushConfig"] !== null) {
            $this->PushConfig = new TimerPushConfig();
            $this->PushConfig->deserialize($param["PushConfig"]);
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new TimerScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }
    }
}
