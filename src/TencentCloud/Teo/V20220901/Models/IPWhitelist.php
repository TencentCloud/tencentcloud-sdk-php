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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站防护IP白名单
 *
 * @method array getIPv4() 获取IPv4列表。
 * @method void setIPv4(array $IPv4) 设置IPv4列表。
 * @method array getIPv6() 获取IPv6列表。
 * @method void setIPv6(array $IPv6) 设置IPv6列表。
 */
class IPWhitelist extends AbstractModel
{
    /**
     * @var array IPv4列表。
     */
    public $IPv4;

    /**
     * @var array IPv6列表。
     */
    public $IPv6;

    /**
     * @param array $IPv4 IPv4列表。
     * @param array $IPv6 IPv6列表。
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
        if (array_key_exists("IPv4",$param) and $param["IPv4"] !== null) {
            $this->IPv4 = $param["IPv4"];
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
        }
    }
}
