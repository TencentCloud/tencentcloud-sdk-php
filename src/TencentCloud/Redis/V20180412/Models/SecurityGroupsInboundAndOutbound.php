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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组出入规则
 *
 * @method string getAction() 获取标识出入数据库的IP与端口是否被允许。
- ACCEPT：允许。
- DROP：不允许。
 * @method void setAction(string $Action) 设置标识出入数据库的IP与端口是否被允许。
- ACCEPT：允许。
- DROP：不允许。
 * @method string getIp() 获取出入数据库的IP地址
 * @method void setIp(string $Ip) 设置出入数据库的IP地址
 * @method string getPort() 获取端口号。
 * @method void setPort(string $Port) 设置端口号。
 * @method string getProto() 获取协议类型。
 * @method void setProto(string $Proto) 设置协议类型。
 */
class SecurityGroupsInboundAndOutbound extends AbstractModel
{
    /**
     * @var string 标识出入数据库的IP与端口是否被允许。
- ACCEPT：允许。
- DROP：不允许。
     */
    public $Action;

    /**
     * @var string 出入数据库的IP地址
     */
    public $Ip;

    /**
     * @var string 端口号。
     */
    public $Port;

    /**
     * @var string 协议类型。
     */
    public $Proto;

    /**
     * @param string $Action 标识出入数据库的IP与端口是否被允许。
- ACCEPT：允许。
- DROP：不允许。
     * @param string $Ip 出入数据库的IP地址
     * @param string $Port 端口号。
     * @param string $Proto 协议类型。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }
    }
}
