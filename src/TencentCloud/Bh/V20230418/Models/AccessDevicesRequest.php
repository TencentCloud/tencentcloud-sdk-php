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
 * AccessDevices请求参数结构体
 *
 * @method string getAccount() 获取资产的登录账号
 * @method void setAccount(string $Account) 设置资产的登录账号
 * @method string getLoginAccount() 获取运维端登录账号
 * @method void setLoginAccount(string $LoginAccount) 设置运维端登录账号
 * @method string getLoginPassword() 获取运维端登录密码
 * @method void setLoginPassword(string $LoginPassword) 设置运维端登录密码
 * @method integer getDeviceId() 获取资产ID
 * @method void setDeviceId(integer $DeviceId) 设置资产ID
 * @method string getInstanceId() 获取资源id(优先使用DeviceId)
 * @method void setInstanceId(string $InstanceId) 设置资源id(优先使用DeviceId)
 * @method string getPassword() 获取未托管密码私钥时，填入
 * @method void setPassword(string $Password) 设置未托管密码私钥时，填入
 * @method string getPrivateKey() 获取未托管密码私钥时，填入
 * @method void setPrivateKey(string $PrivateKey) 设置未托管密码私钥时，填入
 * @method string getPrivateKeyPassword() 获取未托管密码私钥时，填入
 * @method void setPrivateKeyPassword(string $PrivateKeyPassword) 设置未托管密码私钥时，填入
 * @method string getExe() 获取客户端工具
 * @method void setExe(string $Exe) 设置客户端工具
 * @method array getDrivers() 获取RDP挂载盘符驱动（mstsc支持）
 * @method void setDrivers(array $Drivers) 设置RDP挂载盘符驱动（mstsc支持）
 * @method integer getWidth() 获取窗口宽度（RDP支持）
 * @method void setWidth(integer $Width) 设置窗口宽度（RDP支持）
 * @method integer getHeight() 获取窗口高度（RDP支持）
 * @method void setHeight(integer $Height) 设置窗口高度（RDP支持）
 * @method boolean getIntranetAccess() 获取是否内网访问（默认不是）
 * @method void setIntranetAccess(boolean $IntranetAccess) 设置是否内网访问（默认不是）
 * @method boolean getAutoManageAccessCredential() 获取是否自动管理访问串，删掉过期的，新建可用的（默认false）
 * @method void setAutoManageAccessCredential(boolean $AutoManageAccessCredential) 设置是否自动管理访问串，删掉过期的，新建可用的（默认false）
 */
class AccessDevicesRequest extends AbstractModel
{
    /**
     * @var string 资产的登录账号
     */
    public $Account;

    /**
     * @var string 运维端登录账号
     * @deprecated
     */
    public $LoginAccount;

    /**
     * @var string 运维端登录密码
     * @deprecated
     */
    public $LoginPassword;

    /**
     * @var integer 资产ID
     */
    public $DeviceId;

    /**
     * @var string 资源id(优先使用DeviceId)
     */
    public $InstanceId;

    /**
     * @var string 未托管密码私钥时，填入
     */
    public $Password;

    /**
     * @var string 未托管密码私钥时，填入
     */
    public $PrivateKey;

    /**
     * @var string 未托管密码私钥时，填入
     */
    public $PrivateKeyPassword;

    /**
     * @var string 客户端工具
     */
    public $Exe;

    /**
     * @var array RDP挂载盘符驱动（mstsc支持）
     */
    public $Drivers;

    /**
     * @var integer 窗口宽度（RDP支持）
     */
    public $Width;

    /**
     * @var integer 窗口高度（RDP支持）
     */
    public $Height;

    /**
     * @var boolean 是否内网访问（默认不是）
     */
    public $IntranetAccess;

    /**
     * @var boolean 是否自动管理访问串，删掉过期的，新建可用的（默认false）
     */
    public $AutoManageAccessCredential;

    /**
     * @param string $Account 资产的登录账号
     * @param string $LoginAccount 运维端登录账号
     * @param string $LoginPassword 运维端登录密码
     * @param integer $DeviceId 资产ID
     * @param string $InstanceId 资源id(优先使用DeviceId)
     * @param string $Password 未托管密码私钥时，填入
     * @param string $PrivateKey 未托管密码私钥时，填入
     * @param string $PrivateKeyPassword 未托管密码私钥时，填入
     * @param string $Exe 客户端工具
     * @param array $Drivers RDP挂载盘符驱动（mstsc支持）
     * @param integer $Width 窗口宽度（RDP支持）
     * @param integer $Height 窗口高度（RDP支持）
     * @param boolean $IntranetAccess 是否内网访问（默认不是）
     * @param boolean $AutoManageAccessCredential 是否自动管理访问串，删掉过期的，新建可用的（默认false）
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("LoginAccount",$param) and $param["LoginAccount"] !== null) {
            $this->LoginAccount = $param["LoginAccount"];
        }

        if (array_key_exists("LoginPassword",$param) and $param["LoginPassword"] !== null) {
            $this->LoginPassword = $param["LoginPassword"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("PrivateKeyPassword",$param) and $param["PrivateKeyPassword"] !== null) {
            $this->PrivateKeyPassword = $param["PrivateKeyPassword"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Drivers",$param) and $param["Drivers"] !== null) {
            $this->Drivers = $param["Drivers"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("IntranetAccess",$param) and $param["IntranetAccess"] !== null) {
            $this->IntranetAccess = $param["IntranetAccess"];
        }

        if (array_key_exists("AutoManageAccessCredential",$param) and $param["AutoManageAccessCredential"] !== null) {
            $this->AutoManageAccessCredential = $param["AutoManageAccessCredential"];
        }
    }
}
