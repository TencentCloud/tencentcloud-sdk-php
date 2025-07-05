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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内网配置
 *
 * @method string getIpFixed() 获取是否开启固定内网IP
ENABLE 为开启
DISABLE 为不开启

 * @method void setIpFixed(string $IpFixed) 设置是否开启固定内网IP
ENABLE 为开启
DISABLE 为不开启
 */
class IntranetConfigIn extends AbstractModel
{
    /**
     * @var string 是否开启固定内网IP
ENABLE 为开启
DISABLE 为不开启

     */
    public $IpFixed;

    /**
     * @param string $IpFixed 是否开启固定内网IP
ENABLE 为开启
DISABLE 为不开启
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
        if (array_key_exists("IpFixed",$param) and $param["IpFixed"] !== null) {
            $this->IpFixed = $param["IpFixed"];
        }
    }
}
