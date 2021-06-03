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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EndGameServerSessionAndProcess请求参数结构体
 *
 * @method string getGameServerSessionId() 获取游戏服务器会话ID
 * @method void setGameServerSessionId(string $GameServerSessionId) 设置游戏服务器会话ID
 * @method string getIpAddress() 获取CVM的公网IP地址
 * @method void setIpAddress(string $IpAddress) 设置CVM的公网IP地址
 * @method integer getPort() 获取端口号，最小值不小于1，最大值不超过60000
 * @method void setPort(integer $Port) 设置端口号，最小值不小于1，最大值不超过60000
 */
class EndGameServerSessionAndProcessRequest extends AbstractModel
{
    /**
     * @var string 游戏服务器会话ID
     */
    public $GameServerSessionId;

    /**
     * @var string CVM的公网IP地址
     */
    public $IpAddress;

    /**
     * @var integer 端口号，最小值不小于1，最大值不超过60000
     */
    public $Port;

    /**
     * @param string $GameServerSessionId 游戏服务器会话ID
     * @param string $IpAddress CVM的公网IP地址
     * @param integer $Port 端口号，最小值不小于1，最大值不超过60000
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
        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
