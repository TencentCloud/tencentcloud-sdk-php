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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP限制策略
 *
 * @method string getIP() 获取IP段
 * @method void setIP(string $IP) 设置IP段
 * @method string getEffect() 获取策略效力，Allow或Deny
 * @method void setEffect(string $Effect) 设置策略效力，Allow或Deny
 */
class IpPolicy extends AbstractModel
{
    /**
     * @var string IP段
     */
    public $IP;

    /**
     * @var string 策略效力，Allow或Deny
     */
    public $Effect;

    /**
     * @param string $IP IP段
     * @param string $Effect 策略效力，Allow或Deny
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }
    }
}
