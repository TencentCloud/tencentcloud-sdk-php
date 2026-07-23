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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFwGroupIdNames请求参数结构体
 *
 * @method integer getIpVersion() 获取<p>Ip版本，0：IPv4，1：IPv6，默认为IPv4</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>Ip版本，0：IPv4，1：IPv6，默认为IPv4</p>
 */
class DescribeFwGroupIdNamesRequest extends AbstractModel
{
    /**
     * @var integer <p>Ip版本，0：IPv4，1：IPv6，默认为IPv4</p>
     */
    public $IpVersion;

    /**
     * @param integer $IpVersion <p>Ip版本，0：IPv4，1：IPv6，默认为IPv4</p>
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
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
