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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新添加源站信息
 *
 * @method string getRealServerId() 获取源站ID
 * @method void setRealServerId(string $RealServerId) 设置源站ID
 * @method string getRealServerIP() 获取源站ip或域名
 * @method void setRealServerIP(string $RealServerIP) 设置源站ip或域名
 */
class NewRealServer extends AbstractModel
{
    /**
     * @var string 源站ID
     */
    public $RealServerId;

    /**
     * @var string 源站ip或域名
     */
    public $RealServerIP;

    /**
     * @param string $RealServerId 源站ID
     * @param string $RealServerIP 源站ip或域名
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }
    }
}
