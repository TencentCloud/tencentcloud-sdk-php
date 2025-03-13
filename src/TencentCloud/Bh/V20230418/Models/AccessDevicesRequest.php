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
 * AccessDevices请求参数结构体
 *
 * @method string getInstanceId() 获取资源id
 * @method void setInstanceId(string $InstanceId) 设置资源id
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getLoginAccount() 获取运维端登录账号
 * @method void setLoginAccount(string $LoginAccount) 设置运维端登录账号
 * @method string getLoginPassword() 获取运维端登录密码
 * @method void setLoginPassword(string $LoginPassword) 设置运维端登录密码
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getPrivateKey() 获取私钥
 * @method void setPrivateKey(string $PrivateKey) 设置私钥
 * @method string getPrivateKeyPassword() 获取私钥密码
 * @method void setPrivateKeyPassword(string $PrivateKeyPassword) 设置私钥密码
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
 */
class AccessDevicesRequest extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $InstanceId;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 运维端登录账号
     */
    public $LoginAccount;

    /**
     * @var string 运维端登录密码
     */
    public $LoginPassword;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 私钥
     */
    public $PrivateKey;

    /**
     * @var string 私钥密码
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
     * @param string $InstanceId 资源id
     * @param string $Account 账号
     * @param string $LoginAccount 运维端登录账号
     * @param string $LoginPassword 运维端登录密码
     * @param string $Password 密码
     * @param string $PrivateKey 私钥
     * @param string $PrivateKeyPassword 私钥密码
     * @param string $Exe 客户端工具
     * @param array $Drivers RDP挂载盘符驱动（mstsc支持）
     * @param integer $Width 窗口宽度（RDP支持）
     * @param integer $Height 窗口高度（RDP支持）
     * @param boolean $IntranetAccess 是否内网访问（默认不是）
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
    }
}
