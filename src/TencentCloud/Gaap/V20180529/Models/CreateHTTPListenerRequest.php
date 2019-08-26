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
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method void setPort(integer $Port) 设置监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 */

/**
 *CreateHTTPListener请求参数结构体
 */
class CreateHTTPListenerRequest extends AbstractModel
{
    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     */
    public $Port;

    /**
     * @var string 通道ID
     */
    public $ProxyId;
    /**
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     * @param string $ProxyId 通道ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
