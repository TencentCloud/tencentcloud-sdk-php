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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmNotice请求参数结构体
 *
 * @method string getAlarmNoticeId() 获取通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
 */
class DeleteAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
     */
    public $AlarmNoticeId;

    /**
     * @param string $AlarmNoticeId 通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }
    }
}
