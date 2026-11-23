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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckLDAPConnection请求参数结构体
 *
 * @method boolean getEnable() 获取<p>是否开启LDAP认证，必须为true</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启LDAP认证，必须为true</p>
 * @method string getIp() 获取<p>服务器地址</p>
 * @method void setIp(string $Ip) 设置<p>服务器地址</p>
 * @method integer getPort() 获取<p>服务端口</p>
 * @method void setPort(integer $Port) 设置<p>服务端口</p>
 * @method boolean getEnableSSL() 获取<p>是否开启SSL，false-不开启，true-开启</p>
 * @method void setEnableSSL(boolean $EnableSSL) 设置<p>是否开启SSL，false-不开启，true-开启</p>
 * @method string getBaseDN() 获取<p>Base DN</p>
 * @method void setBaseDN(string $BaseDN) 设置<p>Base DN</p>
 * @method string getAdminAccount() 获取<p>管理员账号</p>
 * @method void setAdminAccount(string $AdminAccount) 设置<p>管理员账号</p>
 * @method string getAdminPassword() 获取<p>管理员密码</p>
 * @method void setAdminPassword(string $AdminPassword) 设置<p>管理员密码</p>
 * @method string getIpBackup() 获取<p>备用服务器地址</p>
 * @method void setIpBackup(string $IpBackup) 设置<p>备用服务器地址</p>
 * @method string getDomainId() 获取<p>网络域id</p>
 * @method void setDomainId(string $DomainId) 设置<p>网络域id</p>
 * @method string getAttributeUserName() 获取<p>用户名称映射属性</p>
 * @method void setAttributeUserName(string $AttributeUserName) 设置<p>用户名称映射属性</p>
 * @method string getResourceId() 获取<p>堡垒机实例ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>堡垒机实例ID</p>
 */
class CheckLDAPConnectionRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否开启LDAP认证，必须为true</p>
     */
    public $Enable;

    /**
     * @var string <p>服务器地址</p>
     */
    public $Ip;

    /**
     * @var integer <p>服务端口</p>
     */
    public $Port;

    /**
     * @var boolean <p>是否开启SSL，false-不开启，true-开启</p>
     */
    public $EnableSSL;

    /**
     * @var string <p>Base DN</p>
     */
    public $BaseDN;

    /**
     * @var string <p>管理员账号</p>
     */
    public $AdminAccount;

    /**
     * @var string <p>管理员密码</p>
     */
    public $AdminPassword;

    /**
     * @var string <p>备用服务器地址</p>
     */
    public $IpBackup;

    /**
     * @var string <p>网络域id</p>
     */
    public $DomainId;

    /**
     * @var string <p>用户名称映射属性</p>
     */
    public $AttributeUserName;

    /**
     * @var string <p>堡垒机实例ID</p>
     */
    public $ResourceId;

    /**
     * @param boolean $Enable <p>是否开启LDAP认证，必须为true</p>
     * @param string $Ip <p>服务器地址</p>
     * @param integer $Port <p>服务端口</p>
     * @param boolean $EnableSSL <p>是否开启SSL，false-不开启，true-开启</p>
     * @param string $BaseDN <p>Base DN</p>
     * @param string $AdminAccount <p>管理员账号</p>
     * @param string $AdminPassword <p>管理员密码</p>
     * @param string $IpBackup <p>备用服务器地址</p>
     * @param string $DomainId <p>网络域id</p>
     * @param string $AttributeUserName <p>用户名称映射属性</p>
     * @param string $ResourceId <p>堡垒机实例ID</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("EnableSSL",$param) and $param["EnableSSL"] !== null) {
            $this->EnableSSL = $param["EnableSSL"];
        }

        if (array_key_exists("BaseDN",$param) and $param["BaseDN"] !== null) {
            $this->BaseDN = $param["BaseDN"];
        }

        if (array_key_exists("AdminAccount",$param) and $param["AdminAccount"] !== null) {
            $this->AdminAccount = $param["AdminAccount"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("IpBackup",$param) and $param["IpBackup"] !== null) {
            $this->IpBackup = $param["IpBackup"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("AttributeUserName",$param) and $param["AttributeUserName"] !== null) {
            $this->AttributeUserName = $param["AttributeUserName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
