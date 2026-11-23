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
 * @method boolean getEnable() 获取<p>是否开启LDAP认证，false-不开启，true-开启</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启LDAP认证，false-不开启，true-开启</p>
 * @method string getIp() 获取<p>服务器地址</p>
 * @method void setIp(string $Ip) 设置<p>服务器地址</p>
 * @method string getIpBackup() 获取<p>备用服务器地址</p>
 * @method void setIpBackup(string $IpBackup) 设置<p>备用服务器地址</p>
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
 * @method string getAttributeUser() 获取<p>用户属性</p>
 * @method void setAttributeUser(string $AttributeUser) 设置<p>用户属性</p>
 * @method string getAttributeUserName() 获取<p>用户名属性</p>
 * @method void setAttributeUserName(string $AttributeUserName) 设置<p>用户名属性</p>
 * @method boolean getAutoSync() 获取<p>自动同步，false-不开启，true-开启</p>
 * @method void setAutoSync(boolean $AutoSync) 设置<p>自动同步，false-不开启，true-开启</p>
 * @method boolean getOverwrite() 获取<p>覆盖用户信息，false-不开启，true-开启</p>
 * @method void setOverwrite(boolean $Overwrite) 设置<p>覆盖用户信息，false-不开启，true-开启</p>
 * @method integer getSyncPeriod() 获取<p>同步周期，30～60000之间的整数</p>
 * @method void setSyncPeriod(integer $SyncPeriod) 设置<p>同步周期，30～60000之间的整数</p>
 * @method boolean getSyncAll() 获取<p>是否同步全部，false-不开启，true-开启</p>
 * @method void setSyncAll(boolean $SyncAll) 设置<p>是否同步全部，false-不开启，true-开启</p>
 * @method array getSyncUnitSet() 获取<p>同步OU列表，SyncAll为false时必传</p>
 * @method void setSyncUnitSet(array $SyncUnitSet) 设置<p>同步OU列表，SyncAll为false时必传</p>
 * @method string getAttributeUnit() 获取<p>组织单元属性</p>
 * @method void setAttributeUnit(string $AttributeUnit) 设置<p>组织单元属性</p>
 * @method string getAttributeRealName() 获取<p>用户姓名属性</p>
 * @method void setAttributeRealName(string $AttributeRealName) 设置<p>用户姓名属性</p>
 * @method string getAttributePhone() 获取<p>手机号属性</p>
 * @method void setAttributePhone(string $AttributePhone) 设置<p>手机号属性</p>
 * @method string getAttributeEmail() 获取<p>邮箱属性</p>
 * @method void setAttributeEmail(string $AttributeEmail) 设置<p>邮箱属性</p>
 * @method string getDomainId() 获取<p>网络域Id</p>
 * @method void setDomainId(string $DomainId) 设置<p>网络域Id</p>
 * @method string getResourceId() 获取<p>堡垒机实例ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>堡垒机实例ID</p>
 */
class ModifyLDAPSettingRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否开启LDAP认证，false-不开启，true-开启</p>
     */
    public $Enable;

    /**
     * @var string <p>服务器地址</p>
     */
    public $Ip;

    /**
     * @var string <p>备用服务器地址</p>
     */
    public $IpBackup;

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
     * @var string <p>用户属性</p>
     */
    public $AttributeUser;

    /**
     * @var string <p>用户名属性</p>
     */
    public $AttributeUserName;

    /**
     * @var boolean <p>自动同步，false-不开启，true-开启</p>
     */
    public $AutoSync;

    /**
     * @var boolean <p>覆盖用户信息，false-不开启，true-开启</p>
     */
    public $Overwrite;

    /**
     * @var integer <p>同步周期，30～60000之间的整数</p>
     */
    public $SyncPeriod;

    /**
     * @var boolean <p>是否同步全部，false-不开启，true-开启</p>
     */
    public $SyncAll;

    /**
     * @var array <p>同步OU列表，SyncAll为false时必传</p>
     */
    public $SyncUnitSet;

    /**
     * @var string <p>组织单元属性</p>
     */
    public $AttributeUnit;

    /**
     * @var string <p>用户姓名属性</p>
     */
    public $AttributeRealName;

    /**
     * @var string <p>手机号属性</p>
     */
    public $AttributePhone;

    /**
     * @var string <p>邮箱属性</p>
     */
    public $AttributeEmail;

    /**
     * @var string <p>网络域Id</p>
     */
    public $DomainId;

    /**
     * @var string <p>堡垒机实例ID</p>
     */
    public $ResourceId;

    /**
     * @param boolean $Enable <p>是否开启LDAP认证，false-不开启，true-开启</p>
     * @param string $Ip <p>服务器地址</p>
     * @param string $IpBackup <p>备用服务器地址</p>
     * @param integer $Port <p>服务端口</p>
     * @param boolean $EnableSSL <p>是否开启SSL，false-不开启，true-开启</p>
     * @param string $BaseDN <p>Base DN</p>
     * @param string $AdminAccount <p>管理员账号</p>
     * @param string $AdminPassword <p>管理员密码</p>
     * @param string $AttributeUser <p>用户属性</p>
     * @param string $AttributeUserName <p>用户名属性</p>
     * @param boolean $AutoSync <p>自动同步，false-不开启，true-开启</p>
     * @param boolean $Overwrite <p>覆盖用户信息，false-不开启，true-开启</p>
     * @param integer $SyncPeriod <p>同步周期，30～60000之间的整数</p>
     * @param boolean $SyncAll <p>是否同步全部，false-不开启，true-开启</p>
     * @param array $SyncUnitSet <p>同步OU列表，SyncAll为false时必传</p>
     * @param string $AttributeUnit <p>组织单元属性</p>
     * @param string $AttributeRealName <p>用户姓名属性</p>
     * @param string $AttributePhone <p>手机号属性</p>
     * @param string $AttributeEmail <p>邮箱属性</p>
     * @param string $DomainId <p>网络域Id</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
