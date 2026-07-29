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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNoticeOnCallUsersFromPrometheusAlertID请求参数结构体
 *
 * @method string getAlertId() 获取<p>prometheus告警分组ID</p><p>参数格式：alert-xxxxxxxx</p>
 * @method void setAlertId(string $AlertId) 设置<p>prometheus告警分组ID</p><p>参数格式：alert-xxxxxxxx</p>
 */
class DescribeAlarmNoticeOnCallUsersFromPrometheusAlertIDRequest extends AbstractModel
{
    /**
     * @var string <p>prometheus告警分组ID</p><p>参数格式：alert-xxxxxxxx</p>
     */
    public $AlertId;

    /**
     * @param string $AlertId <p>prometheus告警分组ID</p><p>参数格式：alert-xxxxxxxx</p>
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
        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }
    }
}
