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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弱口令详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getUrl() 获取Url地址
 * @method void setUrl(string $Url) 设置Url地址
 * @method string getType() 获取弱口令类型
 * @method void setType(string $Type) 设置弱口令类型
 * @method string getAccount() 获取弱口令账号
 * @method void setAccount(string $Account) 设置弱口令账号
 * @method string getPassword() 获取弱口令密码
 * @method void setPassword(string $Password) 设置弱口令密码
 * @method boolean getIsHoneypot() 获取是否蜜罐
 * @method void setIsHoneypot(boolean $IsHoneypot) 设置是否蜜罐
 * @method string getScreenshotUrl() 获取截图
 * @method void setScreenshotUrl(string $ScreenshotUrl) 设置截图
 */
class DisplayWeakPassword extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 解析的IP
     */
    public $Ip;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string Url地址
     */
    public $Url;

    /**
     * @var string 弱口令类型
     */
    public $Type;

    /**
     * @var string 弱口令账号
     */
    public $Account;

    /**
     * @var string 弱口令密码
     */
    public $Password;

    /**
     * @var boolean 是否蜜罐
     */
    public $IsHoneypot;

    /**
     * @var string 截图
     */
    public $ScreenshotUrl;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Ip 解析的IP
     * @param integer $Port 端口
     * @param string $Url Url地址
     * @param string $Type 弱口令类型
     * @param string $Account 弱口令账号
     * @param string $Password 弱口令密码
     * @param boolean $IsHoneypot 是否蜜罐
     * @param string $ScreenshotUrl 截图
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("IsHoneypot",$param) and $param["IsHoneypot"] !== null) {
            $this->IsHoneypot = $param["IsHoneypot"];
        }

        if (array_key_exists("ScreenshotUrl",$param) and $param["ScreenshotUrl"] !== null) {
            $this->ScreenshotUrl = $param["ScreenshotUrl"];
        }
    }
}
