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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时会话详情。
 *
 * @method integer getId() 获取会话 ID。
 * @method void setId(integer $Id) 设置会话 ID。
 * @method string getAddress() 获取访问来源，IP 地址和端口号。
 * @method void setAddress(string $Address) 设置访问来源，IP 地址和端口号。
 * @method integer getFileDescriptor() 获取文件描述符。
 * @method void setFileDescriptor(integer $FileDescriptor) 设置文件描述符。
 * @method string getName() 获取会话名称，使用 CLIENT SETNAME 命令设置。
 * @method void setName(string $Name) 设置会话名称，使用 CLIENT SETNAME 命令设置。
 * @method string getLastCommand() 获取最后一次执行的命令。
 * @method void setLastCommand(string $LastCommand) 设置最后一次执行的命令。
 * @method integer getAge() 获取会话存活时间，单位：秒。
 * @method void setAge(integer $Age) 设置会话存活时间，单位：秒。
 * @method integer getIdle() 获取最后一次执行命令后空闲的时间，单位：秒。
 * @method void setIdle(integer $Idle) 设置最后一次执行命令后空闲的时间，单位：秒。
 * @method string getProxyId() 获取会话所属的 Proxy节点 ID。
 * @method void setProxyId(string $ProxyId) 设置会话所属的 Proxy节点 ID。
 */
class Process extends AbstractModel
{
    /**
     * @var integer 会话 ID。
     */
    public $Id;

    /**
     * @var string 访问来源，IP 地址和端口号。
     */
    public $Address;

    /**
     * @var integer 文件描述符。
     */
    public $FileDescriptor;

    /**
     * @var string 会话名称，使用 CLIENT SETNAME 命令设置。
     */
    public $Name;

    /**
     * @var string 最后一次执行的命令。
     */
    public $LastCommand;

    /**
     * @var integer 会话存活时间，单位：秒。
     */
    public $Age;

    /**
     * @var integer 最后一次执行命令后空闲的时间，单位：秒。
     */
    public $Idle;

    /**
     * @var string 会话所属的 Proxy节点 ID。
     */
    public $ProxyId;

    /**
     * @param integer $Id 会话 ID。
     * @param string $Address 访问来源，IP 地址和端口号。
     * @param integer $FileDescriptor 文件描述符。
     * @param string $Name 会话名称，使用 CLIENT SETNAME 命令设置。
     * @param string $LastCommand 最后一次执行的命令。
     * @param integer $Age 会话存活时间，单位：秒。
     * @param integer $Idle 最后一次执行命令后空闲的时间，单位：秒。
     * @param string $ProxyId 会话所属的 Proxy节点 ID。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("FileDescriptor",$param) and $param["FileDescriptor"] !== null) {
            $this->FileDescriptor = $param["FileDescriptor"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LastCommand",$param) and $param["LastCommand"] !== null) {
            $this->LastCommand = $param["LastCommand"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Idle",$param) and $param["Idle"] !== null) {
            $this->Idle = $param["Idle"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
