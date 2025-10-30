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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNotifyUrl请求参数结构体
 *
 * @method string getNotifyUrl() 获取告警通知回调url
 * @method void setNotifyUrl(string $NotifyUrl) 设置告警通知回调url
 * @method string getCallbackKey() 获取告警通知回调key
 * @method void setCallbackKey(string $CallbackKey) 设置告警通知回调key
 * @method integer getAlarmValue() 获取流量包的告警阈值
 * @method void setAlarmValue(integer $AlarmValue) 设置流量包的告警阈值
 */
class SetNotifyUrlRequest extends AbstractModel
{
    /**
     * @var string 告警通知回调url
     */
    public $NotifyUrl;

    /**
     * @var string 告警通知回调key
     */
    public $CallbackKey;

    /**
     * @var integer 流量包的告警阈值
     */
    public $AlarmValue;

    /**
     * @param string $NotifyUrl 告警通知回调url
     * @param string $CallbackKey 告警通知回调key
     * @param integer $AlarmValue 流量包的告警阈值
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
        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("AlarmValue",$param) and $param["AlarmValue"] !== null) {
            $this->AlarmValue = $param["AlarmValue"];
        }
    }
}
