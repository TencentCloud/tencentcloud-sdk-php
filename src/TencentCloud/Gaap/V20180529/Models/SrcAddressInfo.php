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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络加速的原地址信息
 *
 * @method string getSrcIpv4() 获取内网Ip4地址
 * @method void setSrcIpv4(string $SrcIpv4) 设置内网Ip4地址
 * @method string getSrcPublicIpv4() 获取公网Ip4地址
 * @method void setSrcPublicIpv4(string $SrcPublicIpv4) 设置公网Ip4地址
 */
class SrcAddressInfo extends AbstractModel
{
    /**
     * @var string 内网Ip4地址
     */
    public $SrcIpv4;

    /**
     * @var string 公网Ip4地址
     */
    public $SrcPublicIpv4;

    /**
     * @param string $SrcIpv4 内网Ip4地址
     * @param string $SrcPublicIpv4 公网Ip4地址
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
        if (array_key_exists("SrcIpv4",$param) and $param["SrcIpv4"] !== null) {
            $this->SrcIpv4 = $param["SrcIpv4"];
        }

        if (array_key_exists("SrcPublicIpv4",$param) and $param["SrcPublicIpv4"] !== null) {
            $this->SrcPublicIpv4 = $param["SrcPublicIpv4"];
        }
    }
}
