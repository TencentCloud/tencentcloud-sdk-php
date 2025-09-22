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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlarmMessage请求参数结构体
 *
 * @method string getProjectId() 获取所属项目Id
 * @method void setProjectId(string $ProjectId) 设置所属项目Id
 * @method string getAlarmMessageId() 获取告警消息Id
 * @method void setAlarmMessageId(string $AlarmMessageId) 设置告警消息Id
 * @method string getTimeZone() 获取返回日期的时区, 默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置返回日期的时区, 默认UTC+8
 */
class GetAlarmMessageRequest extends AbstractModel
{
    /**
     * @var string 所属项目Id
     */
    public $ProjectId;

    /**
     * @var string 告警消息Id
     */
    public $AlarmMessageId;

    /**
     * @var string 返回日期的时区, 默认UTC+8
     */
    public $TimeZone;

    /**
     * @param string $ProjectId 所属项目Id
     * @param string $AlarmMessageId 告警消息Id
     * @param string $TimeZone 返回日期的时区, 默认UTC+8
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AlarmMessageId",$param) and $param["AlarmMessageId"] !== null) {
            $this->AlarmMessageId = $param["AlarmMessageId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
