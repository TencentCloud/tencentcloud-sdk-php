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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建定时发送邮件任务时，设置的定时参数，比如开始时间之类
 *
 * @method string getBeginTime() 获取定时发送邮件的开始时间
 * @method void setBeginTime(string $BeginTime) 设置定时发送邮件的开始时间
 */
class TimedEmailParam extends AbstractModel
{
    /**
     * @var string 定时发送邮件的开始时间
     */
    public $BeginTime;

    /**
     * @param string $BeginTime 定时发送邮件的开始时间
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }
    }
}
