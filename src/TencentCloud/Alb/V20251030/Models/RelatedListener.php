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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关联监听器信息
 *
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method integer getListenerPort() 获取监听器端口。
 * @method void setListenerPort(integer $ListenerPort) 设置监听器端口。
 * @method string getListenerProtocol() 获取监听器协议。
 * @method void setListenerProtocol(string $ListenerProtocol) 设置监听器协议。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 */
class RelatedListener extends AbstractModel
{
    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var integer 监听器端口。
     */
    public $ListenerPort;

    /**
     * @var string 监听器协议。
     */
    public $ListenerProtocol;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param integer $ListenerPort 监听器端口。
     * @param string $ListenerProtocol 监听器协议。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }
    }
}
