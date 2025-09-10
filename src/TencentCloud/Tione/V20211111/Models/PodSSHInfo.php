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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSH pod访问信息
 *
 * @method string getHost() 获取pod访问ip
 * @method void setHost(string $Host) 设置pod访问ip
 * @method integer getPort() 获取pod ssh访问端口
 * @method void setPort(integer $Port) 设置pod ssh访问端口
 * @method string getLoginCommand() 获取ssh访问命令
 * @method void setLoginCommand(string $LoginCommand) 设置ssh访问命令
 */
class PodSSHInfo extends AbstractModel
{
    /**
     * @var string pod访问ip
     */
    public $Host;

    /**
     * @var integer pod ssh访问端口
     */
    public $Port;

    /**
     * @var string ssh访问命令
     */
    public $LoginCommand;

    /**
     * @param string $Host pod访问ip
     * @param integer $Port pod ssh访问端口
     * @param string $LoginCommand ssh访问命令
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LoginCommand",$param) and $param["LoginCommand"] !== null) {
            $this->LoginCommand = $param["LoginCommand"];
        }
    }
}
