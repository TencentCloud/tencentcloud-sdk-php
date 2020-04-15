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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Check请求参数结构体
 *
 * @method string getSkey() 获取登录态Skey
 * @method void setSkey(string $Skey) 设置登录态Skey
 * @method string getClientIP() 获取IP
 * @method void setClientIP(string $ClientIP) 设置IP
 * @method string getClientUA() 获取浏览器UA
 * @method void setClientUA(string $ClientUA) 设置浏览器UA
 * @method string getInterface() 获取接口名
 * @method void setInterface(string $Interface) 设置接口名
 * @method integer getAuthType() 获取验证类型
 * @method void setAuthType(integer $AuthType) 设置验证类型
 * @method string getCode() 获取验证码
 * @method void setCode(string $Code) 设置验证码
 * @method integer getOwnerUin() 获取主账号
 * @method void setOwnerUin(integer $OwnerUin) 设置主账号
 */
class CheckRequest extends AbstractModel
{
    /**
     * @var string 登录态Skey
     */
    public $Skey;

    /**
     * @var string IP
     */
    public $ClientIP;

    /**
     * @var string 浏览器UA
     */
    public $ClientUA;

    /**
     * @var string 接口名
     */
    public $Interface;

    /**
     * @var integer 验证类型
     */
    public $AuthType;

    /**
     * @var string 验证码
     */
    public $Code;

    /**
     * @var integer 主账号
     */
    public $OwnerUin;

    /**
     * @param string $Skey 登录态Skey
     * @param string $ClientIP IP
     * @param string $ClientUA 浏览器UA
     * @param string $Interface 接口名
     * @param integer $AuthType 验证类型
     * @param string $Code 验证码
     * @param integer $OwnerUin 主账号
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
        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("ClientUA",$param) and $param["ClientUA"] !== null) {
            $this->ClientUA = $param["ClientUA"];
        }

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
