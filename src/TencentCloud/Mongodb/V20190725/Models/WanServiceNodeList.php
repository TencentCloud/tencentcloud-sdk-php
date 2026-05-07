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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb外网服务节点信息。
 *
 * @method string getVipVport() 获取实例节点的vip及端口信息。
 * @method void setVipVport(string $VipVport) 设置实例节点的vip及端口信息。
 * @method string getListenerPort() 获取CLB监听器监听端口，取值范围1~65535。
 * @method void setListenerPort(string $ListenerPort) 设置CLB监听器监听端口，取值范围1~65535。
 */
class WanServiceNodeList extends AbstractModel
{
    /**
     * @var string 实例节点的vip及端口信息。
     */
    public $VipVport;

    /**
     * @var string CLB监听器监听端口，取值范围1~65535。
     */
    public $ListenerPort;

    /**
     * @param string $VipVport 实例节点的vip及端口信息。
     * @param string $ListenerPort CLB监听器监听端口，取值范围1~65535。
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
        if (array_key_exists("VipVport",$param) and $param["VipVport"] !== null) {
            $this->VipVport = $param["VipVport"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }
    }
}
