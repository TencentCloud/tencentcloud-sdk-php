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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB监听器
 *
 * @method string getListenerID() 获取<p>监听器ID</p>
 * @method void setListenerID(string $ListenerID) 设置<p>监听器ID</p>
 * @method string getListenerName() 获取<p>监听器名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器名称</p>
 * @method string getProtocol() 获取<p>协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class ClbListenerItem extends AbstractModel
{
    /**
     * @var string <p>监听器ID</p>
     */
    public $ListenerID;

    /**
     * @var string <p>监听器名称</p>
     */
    public $ListenerName;

    /**
     * @var string <p>协议</p>
     */
    public $Protocol;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param string $ListenerID <p>监听器ID</p>
     * @param string $ListenerName <p>监听器名称</p>
     * @param string $Protocol <p>协议</p>
     * @param integer $Port <p>端口</p>
     * @param string $CreateTime <p>创建时间</p>
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
        if (array_key_exists("ListenerID",$param) and $param["ListenerID"] !== null) {
            $this->ListenerID = $param["ListenerID"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
