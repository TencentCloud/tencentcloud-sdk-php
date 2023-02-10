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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站信息
 *
 * @method string getRealServer() 获取源站的地址（IP或者域名）
 * @method void setRealServer(string $RealServer) 设置源站的地址（IP或者域名）
 * @method integer getRsType() 获取源站的地址类型，取值[
1(域名地址)
2(IP地址)
]
 * @method void setRsType(integer $RsType) 设置源站的地址类型，取值[
1(域名地址)
2(IP地址)
]
 * @method integer getWeight() 获取源站的回源权重，取值1~100
 * @method void setWeight(integer $Weight) 设置源站的回源权重，取值1~100
 * @method integer getPort() 获取端口号：0~65535
 * @method void setPort(integer $Port) 设置端口号：0~65535
 */
class SourceServer extends AbstractModel
{
    /**
     * @var string 源站的地址（IP或者域名）
     */
    public $RealServer;

    /**
     * @var integer 源站的地址类型，取值[
1(域名地址)
2(IP地址)
]
     */
    public $RsType;

    /**
     * @var integer 源站的回源权重，取值1~100
     */
    public $Weight;

    /**
     * @var integer 端口号：0~65535
     */
    public $Port;

    /**
     * @param string $RealServer 源站的地址（IP或者域名）
     * @param integer $RsType 源站的地址类型，取值[
1(域名地址)
2(IP地址)
]
     * @param integer $Weight 源站的回源权重，取值1~100
     * @param integer $Port 端口号：0~65535
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
        if (array_key_exists("RealServer",$param) and $param["RealServer"] !== null) {
            $this->RealServer = $param["RealServer"];
        }

        if (array_key_exists("RsType",$param) and $param["RsType"] !== null) {
            $this->RsType = $param["RsType"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
