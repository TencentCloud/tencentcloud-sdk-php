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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ连接详情
 *
 * @method string getConnectionName() 获取连接名称
 * @method void setConnectionName(string $ConnectionName) 设置连接名称
 * @method string getPeerHost() 获取客户端ip
 * @method void setPeerHost(string $PeerHost) 设置客户端ip
 * @method string getState() 获取连接状态，包括 starting、tuning、opening、running、flow、blocking、blocked、closing 和 closed
 * @method void setState(string $State) 设置连接状态，包括 starting、tuning、opening、running、flow、blocking、blocked、closing 和 closed
 * @method string getUser() 获取连接使用用户
 * @method void setUser(string $User) 设置连接使用用户
 * @method boolean getSSL() 获取是否开启ssl
 * @method void setSSL(boolean $SSL) 设置是否开启ssl
 * @method string getProtocol() 获取连接协议
 * @method void setProtocol(string $Protocol) 设置连接协议
 * @method integer getChannels() 获取连接下的channel数
 * @method void setChannels(integer $Channels) 设置连接下的channel数
 */
class RabbitMQConnection extends AbstractModel
{
    /**
     * @var string 连接名称
     */
    public $ConnectionName;

    /**
     * @var string 客户端ip
     */
    public $PeerHost;

    /**
     * @var string 连接状态，包括 starting、tuning、opening、running、flow、blocking、blocked、closing 和 closed
     */
    public $State;

    /**
     * @var string 连接使用用户
     */
    public $User;

    /**
     * @var boolean 是否开启ssl
     */
    public $SSL;

    /**
     * @var string 连接协议
     */
    public $Protocol;

    /**
     * @var integer 连接下的channel数
     */
    public $Channels;

    /**
     * @param string $ConnectionName 连接名称
     * @param string $PeerHost 客户端ip
     * @param string $State 连接状态，包括 starting、tuning、opening、running、flow、blocking、blocked、closing 和 closed
     * @param string $User 连接使用用户
     * @param boolean $SSL 是否开启ssl
     * @param string $Protocol 连接协议
     * @param integer $Channels 连接下的channel数
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
        if (array_key_exists("ConnectionName",$param) and $param["ConnectionName"] !== null) {
            $this->ConnectionName = $param["ConnectionName"];
        }

        if (array_key_exists("PeerHost",$param) and $param["PeerHost"] !== null) {
            $this->PeerHost = $param["PeerHost"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("SSL",$param) and $param["SSL"] !== null) {
            $this->SSL = $param["SSL"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }
    }
}
