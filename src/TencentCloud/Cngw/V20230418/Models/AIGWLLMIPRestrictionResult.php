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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP 黑白名单配置。
 *
 * @method boolean getEnable() 获取<p>是否开启</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启</p>
 * @method string getRestrictionType() 获取<p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
 * @method void setRestrictionType(string $RestrictionType) 设置<p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
 * @method array getAddressList() 获取<p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6）</p>
 * @method void setAddressList(array $AddressList) 设置<p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6）</p>
 */
class AIGWLLMIPRestrictionResult extends AbstractModel
{
    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enable;

    /**
     * @var string <p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
     */
    public $RestrictionType;

    /**
     * @var array <p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6）</p>
     */
    public $AddressList;

    /**
     * @param boolean $Enable <p>是否开启</p>
     * @param string $RestrictionType <p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
     * @param array $AddressList <p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6）</p>
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

        if (array_key_exists("RestrictionType",$param) and $param["RestrictionType"] !== null) {
            $this->RestrictionType = $param["RestrictionType"];
        }

        if (array_key_exists("AddressList",$param) and $param["AddressList"] !== null) {
            $this->AddressList = $param["AddressList"];
        }
    }
}
