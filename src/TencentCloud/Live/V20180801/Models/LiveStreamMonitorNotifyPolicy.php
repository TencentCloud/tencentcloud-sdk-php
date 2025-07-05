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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播流监播通知策略
 *
 * @method integer getNotifyPolicyType() 获取通知策略类型：范围[0,1]
0:代表不使用任何通知策略
1:代表使用全局回调策略，所有事件通知到CallbackUrl。
 * @method void setNotifyPolicyType(integer $NotifyPolicyType) 设置通知策略类型：范围[0,1]
0:代表不使用任何通知策略
1:代表使用全局回调策略，所有事件通知到CallbackUrl。
 * @method string getCallbackUrl() 获取回调URL：长度[0,512]
只支持http和https类型的url。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调URL：长度[0,512]
只支持http和https类型的url。
 */
class LiveStreamMonitorNotifyPolicy extends AbstractModel
{
    /**
     * @var integer 通知策略类型：范围[0,1]
0:代表不使用任何通知策略
1:代表使用全局回调策略，所有事件通知到CallbackUrl。
     */
    public $NotifyPolicyType;

    /**
     * @var string 回调URL：长度[0,512]
只支持http和https类型的url。
     */
    public $CallbackUrl;

    /**
     * @param integer $NotifyPolicyType 通知策略类型：范围[0,1]
0:代表不使用任何通知策略
1:代表使用全局回调策略，所有事件通知到CallbackUrl。
     * @param string $CallbackUrl 回调URL：长度[0,512]
只支持http和https类型的url。
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
        if (array_key_exists("NotifyPolicyType",$param) and $param["NotifyPolicyType"] !== null) {
            $this->NotifyPolicyType = $param["NotifyPolicyType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
