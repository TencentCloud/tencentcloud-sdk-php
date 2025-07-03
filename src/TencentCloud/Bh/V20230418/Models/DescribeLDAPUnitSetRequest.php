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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLDAPUnitSet请求参数结构体
 *
 * @method boolean getEnable() 获取是否开启LDAP认证，true-开启
 * @method void setEnable(boolean $Enable) 设置是否开启LDAP认证，true-开启
 * @method string getIp() 获取服务器地址
 * @method void setIp(string $Ip) 设置服务器地址
 * @method integer getPort() 获取服务端口
 * @method void setPort(integer $Port) 设置服务端口
 * @method boolean getEnableSSL() 获取是否开启SSL，false-不开启，true-开启
 * @method void setEnableSSL(boolean $EnableSSL) 设置是否开启SSL，false-不开启，true-开启
 * @method string getBaseDN() 获取Base DN
 * @method void setBaseDN(string $BaseDN) 设置Base DN
 * @method string getAdminAccount() 获取管理员账号
 * @method void setAdminAccount(string $AdminAccount) 设置管理员账号
 * @method string getAdminPassword() 获取管理员密码
 * @method void setAdminPassword(string $AdminPassword) 设置管理员密码
 * @method string getAttributeUserName() 获取用户名映射属性
 * @method void setAttributeUserName(string $AttributeUserName) 设置用户名映射属性
 * @method string getAttributeUnit() 获取部门过滤
 * @method void setAttributeUnit(string $AttributeUnit) 设置部门过滤
 * @method string getIpBackup() 获取备用服务器地址
 * @method void setIpBackup(string $IpBackup) 设置备用服务器地址
 * @method string getDomainId() 获取网络域Id
 * @method void setDomainId(string $DomainId) 设置网络域Id
 */
class DescribeLDAPUnitSetRequest extends AbstractModel
{
    /**
     * @var boolean 是否开启LDAP认证，true-开启
     */
    public $Enable;

    /**
     * @var string 服务器地址
     */
    public $Ip;

    /**
     * @var integer 服务端口
     */
    public $Port;

    /**
     * @var boolean 是否开启SSL，false-不开启，true-开启
     */
    public $EnableSSL;

    /**
     * @var string Base DN
     */
    public $BaseDN;

    /**
     * @var string 管理员账号
     */
    public $AdminAccount;

    /**
     * @var string 管理员密码
     */
    public $AdminPassword;

    /**
     * @var string 用户名映射属性
     */
    public $AttributeUserName;

    /**
     * @var string 部门过滤
     */
    public $AttributeUnit;

    /**
     * @var string 备用服务器地址
     */
    public $IpBackup;

    /**
     * @var string 网络域Id
     */
    public $DomainId;

    /**
     * @param boolean $Enable 是否开启LDAP认证，true-开启
     * @param string $Ip 服务器地址
     * @param integer $Port 服务端口
     * @param boolean $EnableSSL 是否开启SSL，false-不开启，true-开启
     * @param string $BaseDN Base DN
     * @param string $AdminAccount 管理员账号
     * @param string $AdminPassword 管理员密码
     * @param string $AttributeUserName 用户名映射属性
     * @param string $AttributeUnit 部门过滤
     * @param string $IpBackup 备用服务器地址
     * @param string $DomainId 网络域Id
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

        if (array_key_exists("AttributeUserName",$param) and $param["AttributeUserName"] !== null) {
            $this->AttributeUserName = $param["AttributeUserName"];
        }

        if (array_key_exists("AttributeUnit",$param) and $param["AttributeUnit"] !== null) {
            $this->AttributeUnit = $param["AttributeUnit"];
        }

        if (array_key_exists("IpBackup",$param) and $param["IpBackup"] !== null) {
            $this->IpBackup = $param["IpBackup"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
