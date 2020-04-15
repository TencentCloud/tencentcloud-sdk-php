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
 * DescribeMfaCodeStatus请求参数结构体
 *
 * @method string getTmpcode() 获取mfaKey
 * @method void setTmpcode(string $Tmpcode) 设置mfaKey
 * @method string getSkey() 获取登录态skey
 * @method void setSkey(string $Skey) 设置登录态skey
 * @method string getClientUA() 获取用户浏览器UA
 * @method void setClientUA(string $ClientUA) 设置用户浏览器UA
 * @method string getInterface() 获取接口名
 * @method void setInterface(string $Interface) 设置接口名
 * @method string getClientIP() 获取用户IP
 * @method void setClientIP(string $ClientIP) 设置用户IP
 * @method integer getOwnerUin() 获取主账号
 * @method void setOwnerUin(integer $OwnerUin) 设置主账号
 */
class DescribeMfaCodeStatusRequest extends AbstractModel
{
    /**
     * @var string mfaKey
     */
    public $Tmpcode;

    /**
     * @var string 登录态skey
     */
    public $Skey;

    /**
     * @var string 用户浏览器UA
     */
    public $ClientUA;

    /**
     * @var string 接口名
     */
    public $Interface;

    /**
     * @var string 用户IP
     */
    public $ClientIP;

    /**
     * @var integer 主账号
     */
    public $OwnerUin;

    /**
     * @param string $Tmpcode mfaKey
     * @param string $Skey 登录态skey
     * @param string $ClientUA 用户浏览器UA
     * @param string $Interface 接口名
     * @param string $ClientIP 用户IP
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
        if (array_key_exists("Tmpcode",$param) and $param["Tmpcode"] !== null) {
            $this->Tmpcode = $param["Tmpcode"];
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("ClientUA",$param) and $param["ClientUA"] !== null) {
            $this->ClientUA = $param["ClientUA"];
        }

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
