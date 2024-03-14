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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉流转推任务的时长分布信息
 *
 * @method string getTime() 获取拉流转推任务的时间点
 * @method void setTime(string $Time) 设置拉流转推任务的时间点
 * @method integer getDuration() 获取拉流转推任务的时长，单位为分钟
 * @method void setDuration(integer $Duration) 设置拉流转推任务的时长，单位为分钟
 */
class TaskDurationInfo extends AbstractModel
{
    /**
     * @var string 拉流转推任务的时间点
     */
    public $Time;

    /**
     * @var integer 拉流转推任务的时长，单位为分钟
     */
    public $Duration;

    /**
     * @param string $Time 拉流转推任务的时间点
     * @param integer $Duration 拉流转推任务的时长，单位为分钟
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
