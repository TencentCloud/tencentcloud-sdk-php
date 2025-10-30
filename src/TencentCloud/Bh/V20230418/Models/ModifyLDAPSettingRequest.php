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
 * ModifyLDAPSetting请求参数结构体
 *
 * @method boolean getEnable() 获取是否开启LDAP认证，false-不开启，true-开启
 * @method void setEnable(boolean $Enable) 设置是否开启LDAP认证，false-不开启，true-开启
 * @method string getIp() 获取服务器地址
 * @method void setIp(string $Ip) 设置服务器地址
 * @method string getIpBackup() 获取备用服务器地址
 * @method void setIpBackup(string $IpBackup) 设置备用服务器地址
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
 * @method string getAttributeUser() 获取用户属性
 * @method void setAttributeUser(string $AttributeUser) 设置用户属性
 * @method string getAttributeUserName() 获取用户名属性
 * @method void setAttributeUserName(string $AttributeUserName) 设置用户名属性
 * @method boolean getAutoSync() 获取自动同步，false-不开启，true-开启
 * @method void setAutoSync(boolean $AutoSync) 设置自动同步，false-不开启，true-开启
 * @method boolean getOverwrite() 获取覆盖用户信息，false-不开启，true-开启
 * @method void setOverwrite(boolean $Overwrite) 设置覆盖用户信息，false-不开启，true-开启
 * @method integer getSyncPeriod() 获取同步周期，30～60000之间的整数
 * @method void setSyncPeriod(integer $SyncPeriod) 设置同步周期，30～60000之间的整数
 * @method boolean getSyncAll() 获取是否同步全部，false-不开启，true-开启
 * @method void setSyncAll(boolean $SyncAll) 设置是否同步全部，false-不开启，true-开启
 * @method array getSyncUnitSet() 获取同步OU列表，SyncAll为false时必传
 * @method void setSyncUnitSet(array $SyncUnitSet) 设置同步OU列表，SyncAll为false时必传
 * @method string getAttributeUnit() 获取组织单元属性
 * @method void setAttributeUnit(string $AttributeUnit) 设置组织单元属性
 * @method string getAttributeRealName() 获取用户姓名属性
 * @method void setAttributeRealName(string $AttributeRealName) 设置用户姓名属性
 * @method string getAttributePhone() 获取手机号属性
 * @method void setAttributePhone(string $AttributePhone) 设置手机号属性
 * @method string getAttributeEmail() 获取邮箱属性
 * @method void setAttributeEmail(string $AttributeEmail) 设置邮箱属性
 * @method string getDomainId() 获取网络域Id
 * @method void setDomainId(string $DomainId) 设置网络域Id
 */
class ModifyLDAPSettingRequest extends AbstractModel
{
    /**
     * @var boolean 是否开启LDAP认证，false-不开启，true-开启
     */
    public $Enable;

    /**
     * @var string 服务器地址
     */
    public $Ip;

    /**
     * @var string 备用服务器地址
     */
    public $IpBackup;

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
     * @var string 用户属性
     */
    public $AttributeUser;

    /**
     * @var string 用户名属性
     */
    public $AttributeUserName;

    /**
     * @var boolean 自动同步，false-不开启，true-开启
     */
    public $AutoSync;

    /**
     * @var boolean 覆盖用户信息，false-不开启，true-开启
     */
    public $Overwrite;

    /**
     * @var integer 同步周期，30～60000之间的整数
     */
    public $SyncPeriod;

    /**
     * @var boolean 是否同步全部，false-不开启，true-开启
     */
    public $SyncAll;

    /**
     * @var array 同步OU列表，SyncAll为false时必传
     */
    public $SyncUnitSet;

    /**
     * @var string 组织单元属性
     */
    public $AttributeUnit;

    /**
     * @var string 用户姓名属性
     */
    public $AttributeRealName;

    /**
     * @var string 手机号属性
     */
    public $AttributePhone;

    /**
     * @var string 邮箱属性
     */
    public $AttributeEmail;

    /**
     * @var string 网络域Id
     */
    public $DomainId;

    /**
     * @param boolean $Enable 是否开启LDAP认证，false-不开启，true-开启
     * @param string $Ip 服务器地址
     * @param string $IpBackup 备用服务器地址
     * @param integer $Port 服务端口
     * @param boolean $EnableSSL 是否开启SSL，false-不开启，true-开启
     * @param string $BaseDN Base DN
     * @param string $AdminAccount 管理员账号
     * @param string $AdminPassword 管理员密码
     * @param string $AttributeUser 用户属性
     * @param string $AttributeUserName 用户名属性
     * @param boolean $AutoSync 自动同步，false-不开启，true-开启
     * @param boolean $Overwrite 覆盖用户信息，false-不开启，true-开启
     * @param integer $SyncPeriod 同步周期，30～60000之间的整数
     * @param boolean $SyncAll 是否同步全部，false-不开启，true-开启
     * @param array $SyncUnitSet 同步OU列表，SyncAll为false时必传
     * @param string $AttributeUnit 组织单元属性
     * @param string $AttributeRealName 用户姓名属性
     * @param string $AttributePhone 手机号属性
     * @param string $AttributeEmail 邮箱属性
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

        if (array_key_exists("IpBackup",$param) and $param["IpBackup"] !== null) {
            $this->IpBackup = $param["IpBackup"];
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

        if (array_key_exists("AttributeUser",$param) and $param["AttributeUser"] !== null) {
            $this->AttributeUser = $param["AttributeUser"];
        }

        if (array_key_exists("AttributeUserName",$param) and $param["AttributeUserName"] !== null) {
            $this->AttributeUserName = $param["AttributeUserName"];
        }

        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }

        if (array_key_exists("Overwrite",$param) and $param["Overwrite"] !== null) {
            $this->Overwrite = $param["Overwrite"];
        }

        if (array_key_exists("SyncPeriod",$param) and $param["SyncPeriod"] !== null) {
            $this->SyncPeriod = $param["SyncPeriod"];
        }

        if (array_key_exists("SyncAll",$param) and $param["SyncAll"] !== null) {
            $this->SyncAll = $param["SyncAll"];
        }

        if (array_key_exists("SyncUnitSet",$param) and $param["SyncUnitSet"] !== null) {
            $this->SyncUnitSet = $param["SyncUnitSet"];
        }

        if (array_key_exists("AttributeUnit",$param) and $param["AttributeUnit"] !== null) {
            $this->AttributeUnit = $param["AttributeUnit"];
        }

        if (array_key_exists("AttributeRealName",$param) and $param["AttributeRealName"] !== null) {
            $this->AttributeRealName = $param["AttributeRealName"];
        }

        if (array_key_exists("AttributePhone",$param) and $param["AttributePhone"] !== null) {
            $this->AttributePhone = $param["AttributePhone"];
        }

        if (array_key_exists("AttributeEmail",$param) and $param["AttributeEmail"] !== null) {
            $this->AttributeEmail = $param["AttributeEmail"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
