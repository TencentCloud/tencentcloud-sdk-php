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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关信息
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getGatewayName() 获取<p>网关名称</p>
 * @method void setGatewayName(string $GatewayName) 设置<p>网关名称</p>
 * @method integer getCreateTime() 获取<p>创建时间，单位：秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，单位：秒</p>
 * @method integer getStatus() 获取<p>网关状态。0：正常，1：异常</p>
 * @method void setStatus(integer $Status) 设置<p>网关状态。0：正常，1：异常</p>
 * @method integer getInstanceSize() 获取<p>网关实例数</p>
 * @method void setInstanceSize(integer $InstanceSize) 设置<p>网关实例数</p>
 * @method string getGatewayIp() 获取<p>网关内网IP。</p>
 * @method void setGatewayIp(string $GatewayIp) 设置<p>网关内网IP。</p>
 * @method string getUsername() 获取<p>用户名。</p>
 * @method void setUsername(string $Username) 设置<p>用户名。</p>
 * @method string getToken() 获取<p>网关接入token。</p>
 * @method void setToken(string $Token) 设置<p>网关接入token。</p>
 * @method string getRegisterCenterUrl() 获取<p>网关注册URL。</p>
 * @method void setRegisterCenterUrl(string $RegisterCenterUrl) 设置<p>网关注册URL。</p>
 * @method string getTelemetryUrl() 获取<p>网关上报URL。</p>
 * @method void setTelemetryUrl(string $TelemetryUrl) 设置<p>网关上报URL。</p>
 */
class GatewayInfo extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>网关名称</p>
     */
    public $GatewayName;

    /**
     * @var integer <p>创建时间，单位：秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>网关状态。0：正常，1：异常</p>
     */
    public $Status;

    /**
     * @var integer <p>网关实例数</p>
     */
    public $InstanceSize;

    /**
     * @var string <p>网关内网IP。</p>
     */
    public $GatewayIp;

    /**
     * @var string <p>用户名。</p>
     */
    public $Username;

    /**
     * @var string <p>网关接入token。</p>
     */
    public $Token;

    /**
     * @var string <p>网关注册URL。</p>
     */
    public $RegisterCenterUrl;

    /**
     * @var string <p>网关上报URL。</p>
     */
    public $TelemetryUrl;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $GatewayName <p>网关名称</p>
     * @param integer $CreateTime <p>创建时间，单位：秒</p>
     * @param integer $Status <p>网关状态。0：正常，1：异常</p>
     * @param integer $InstanceSize <p>网关实例数</p>
     * @param string $GatewayIp <p>网关内网IP。</p>
     * @param string $Username <p>用户名。</p>
     * @param string $Token <p>网关接入token。</p>
     * @param string $RegisterCenterUrl <p>网关注册URL。</p>
     * @param string $TelemetryUrl <p>网关上报URL。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceSize",$param) and $param["InstanceSize"] !== null) {
            $this->InstanceSize = $param["InstanceSize"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RegisterCenterUrl",$param) and $param["RegisterCenterUrl"] !== null) {
            $this->RegisterCenterUrl = $param["RegisterCenterUrl"];
        }

        if (array_key_exists("TelemetryUrl",$param) and $param["TelemetryUrl"] !== null) {
            $this->TelemetryUrl = $param["TelemetryUrl"];
        }
    }
}
