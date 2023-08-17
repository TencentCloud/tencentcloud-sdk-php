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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClientState请求参数结构体
 *
 * @method string getClientId() 获取Client Id
 * @method void setClientId(string $ClientId) 设置Client Id
 * @method string getIp() 获取Ip addr
 * @method void setIp(string $Ip) 设置Ip addr
 * @method integer getInternal() 获取内部分组
 * @method void setInternal(integer $Internal) 设置内部分组
 * @method string getServerVersion() 获取Client  Version
 * @method void setServerVersion(string $ServerVersion) 设置Client  Version
 * @method string getHostname() 获取主机
 * @method void setHostname(string $Hostname) 设置主机
 * @method string getOs() 获取系统
 * @method void setOs(string $Os) 设置系统
 */
class UpdateClientStateRequest extends AbstractModel
{
    /**
     * @var string Client Id
     */
    public $ClientId;

    /**
     * @var string Ip addr
     */
    public $Ip;

    /**
     * @var integer 内部分组
     */
    public $Internal;

    /**
     * @var string Client  Version
     */
    public $ServerVersion;

    /**
     * @var string 主机
     */
    public $Hostname;

    /**
     * @var string 系统
     */
    public $Os;

    /**
     * @param string $ClientId Client Id
     * @param string $Ip Ip addr
     * @param integer $Internal 内部分组
     * @param string $ServerVersion Client  Version
     * @param string $Hostname 主机
     * @param string $Os 系统
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }

        if (array_key_exists("ServerVersion",$param) and $param["ServerVersion"] !== null) {
            $this->ServerVersion = $param["ServerVersion"];
        }

        if (array_key_exists("Hostname",$param) and $param["Hostname"] !== null) {
            $this->Hostname = $param["Hostname"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }
    }
}
