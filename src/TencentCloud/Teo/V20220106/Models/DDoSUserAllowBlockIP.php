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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS黑白名单
 *
 * @method string getIp() 获取客户端IP。
 * @method void setIp(string $Ip) 设置客户端IP。
 * @method integer getMask() 获取掩码。
 * @method void setMask(integer $Mask) 设置掩码。
 * @method string getType() 获取类型，取值有：
<li>block ：丢弃 ；</li>
<li>allow ：允许。</li>
 * @method void setType(string $Type) 设置类型，取值有：
<li>block ：丢弃 ；</li>
<li>allow ：允许。</li>
 * @method integer getUpdateTime() 获取10位时间戳，例如1199116800。
 * @method void setUpdateTime(integer $UpdateTime) 设置10位时间戳，例如1199116800。
 * @method string getIp2() 获取客户端IP2，设置IP范围时使用，例如 1.1.1.1-1.1.1.2。
 * @method void setIp2(string $Ip2) 设置客户端IP2，设置IP范围时使用，例如 1.1.1.1-1.1.1.2。
 * @method integer getMask2() 获取掩码2，设置IP网段范围时使用，例如 1.1.1.0/24-1.1.2.0/24。
 * @method void setMask2(integer $Mask2) 设置掩码2，设置IP网段范围时使用，例如 1.1.1.0/24-1.1.2.0/24。
 */
class DDoSUserAllowBlockIP extends AbstractModel
{
    /**
     * @var string 客户端IP。
     */
    public $Ip;

    /**
     * @var integer 掩码。
     */
    public $Mask;

    /**
     * @var string 类型，取值有：
<li>block ：丢弃 ；</li>
<li>allow ：允许。</li>
     */
    public $Type;

    /**
     * @var integer 10位时间戳，例如1199116800。
     */
    public $UpdateTime;

    /**
     * @var string 客户端IP2，设置IP范围时使用，例如 1.1.1.1-1.1.1.2。
     */
    public $Ip2;

    /**
     * @var integer 掩码2，设置IP网段范围时使用，例如 1.1.1.0/24-1.1.2.0/24。
     */
    public $Mask2;

    /**
     * @param string $Ip 客户端IP。
     * @param integer $Mask 掩码。
     * @param string $Type 类型，取值有：
<li>block ：丢弃 ；</li>
<li>allow ：允许。</li>
     * @param integer $UpdateTime 10位时间戳，例如1199116800。
     * @param string $Ip2 客户端IP2，设置IP范围时使用，例如 1.1.1.1-1.1.1.2。
     * @param integer $Mask2 掩码2，设置IP网段范围时使用，例如 1.1.1.0/24-1.1.2.0/24。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Ip2",$param) and $param["Ip2"] !== null) {
            $this->Ip2 = $param["Ip2"];
        }

        if (array_key_exists("Mask2",$param) and $param["Mask2"] !== null) {
            $this->Mask2 = $param["Mask2"];
        }
    }
}
