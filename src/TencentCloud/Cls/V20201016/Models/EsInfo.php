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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * es集群配置信息
 *
 * @method integer getEsType() 获取es类型。 1:云es, 2:自建es
 * @method void setEsType(integer $EsType) 设置es类型。 1:云es, 2:自建es
 * @method integer getAccessMode() 获取访问方式 1:内网, 2:外网。自建es必填
 * @method void setAccessMode(integer $AccessMode) 设置访问方式 1:内网, 2:外网。自建es必填
 * @method string getInstanceId() 获取实例id。云es实例必填
 * @method void setInstanceId(string $InstanceId) 设置实例id。云es实例必填
 * @method string getUser() 获取用户名。
 * @method void setUser(string $User) 设置用户名。
 * @method string getAddress() 获取访问地址。自建es必填
 * @method void setAddress(string $Address) 设置访问地址。自建es必填
 * @method integer getPort() 获取访问端口。自建es必填
 * @method void setPort(integer $Port) 设置访问端口。自建es必填
 * @method string getVpcId() 获取所属网络。自建es且访问方式为内网访问时必填
 * @method void setVpcId(string $VpcId) 设置所属网络。自建es且访问方式为内网访问时必填
 * @method integer getVirtualGatewayType() 获取网络服务类型。自建es且访问方式为内网访问时必填。
负载均衡 CLB:1025 云服务器CVM:0
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置网络服务类型。自建es且访问方式为内网访问时必填。
负载均衡 CLB:1025 云服务器CVM:0
 * @method string getPassword() 获取密码。
 * @method void setPassword(string $Password) 设置密码。
 */
class EsInfo extends AbstractModel
{
    /**
     * @var integer es类型。 1:云es, 2:自建es
     */
    public $EsType;

    /**
     * @var integer 访问方式 1:内网, 2:外网。自建es必填
     */
    public $AccessMode;

    /**
     * @var string 实例id。云es实例必填
     */
    public $InstanceId;

    /**
     * @var string 用户名。
     */
    public $User;

    /**
     * @var string 访问地址。自建es必填
     */
    public $Address;

    /**
     * @var integer 访问端口。自建es必填
     */
    public $Port;

    /**
     * @var string 所属网络。自建es且访问方式为内网访问时必填
     */
    public $VpcId;

    /**
     * @var integer 网络服务类型。自建es且访问方式为内网访问时必填。
负载均衡 CLB:1025 云服务器CVM:0
     */
    public $VirtualGatewayType;

    /**
     * @var string 密码。
     */
    public $Password;

    /**
     * @param integer $EsType es类型。 1:云es, 2:自建es
     * @param integer $AccessMode 访问方式 1:内网, 2:外网。自建es必填
     * @param string $InstanceId 实例id。云es实例必填
     * @param string $User 用户名。
     * @param string $Address 访问地址。自建es必填
     * @param integer $Port 访问端口。自建es必填
     * @param string $VpcId 所属网络。自建es且访问方式为内网访问时必填
     * @param integer $VirtualGatewayType 网络服务类型。自建es且访问方式为内网访问时必填。
负载均衡 CLB:1025 云服务器CVM:0
     * @param string $Password 密码。
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
        if (array_key_exists("EsType",$param) and $param["EsType"] !== null) {
            $this->EsType = $param["EsType"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
