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
 * 告警渠道 企业微信群/钉钉群/飞书群 等webhook地址配置
 *
 * @method string getAlarmWay() 获取告警渠道值
7.企业微信群,8 飞书群 9 钉钉群 10 Slack群 11 Teams群
 * @method void setAlarmWay(string $AlarmWay) 设置告警渠道值
7.企业微信群,8 飞书群 9 钉钉群 10 Slack群 11 Teams群
 * @method array getWebHooks() 获取告警群的webhook地址列表
 * @method void setWebHooks(array $WebHooks) 设置告警群的webhook地址列表
 */
class AlarmWayWebHook extends AbstractModel
{
    /**
     * @var string 告警渠道值
7.企业微信群,8 飞书群 9 钉钉群 10 Slack群 11 Teams群
     */
    public $AlarmWay;

    /**
     * @var array 告警群的webhook地址列表
     */
    public $WebHooks;

    /**
     * @param string $AlarmWay 告警渠道值
7.企业微信群,8 飞书群 9 钉钉群 10 Slack群 11 Teams群
     * @param array $WebHooks 告警群的webhook地址列表
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
        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = $param["WebHooks"];
        }
    }
}
