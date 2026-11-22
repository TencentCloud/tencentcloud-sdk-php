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
 * ModifyAIGWLLMModelAPIIPRestriction请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method string getModelAPIId() 获取<p>模型 API ID</p>
 * @method void setModelAPIId(string $ModelAPIId) 设置<p>模型 API ID</p>
 * @method boolean getEnable() 获取<p>是否启用 IP 黑白名单</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否启用 IP 黑白名单</p>
 * @method string getRestrictionType() 获取<p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
 * @method void setRestrictionType(string $RestrictionType) 设置<p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
 * @method array getAddressList() 获取<p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6），长度 [1,400]</p>
 * @method void setAddressList(array $AddressList) 设置<p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6），长度 [1,400]</p>
 */
class ModifyAIGWLLMModelAPIIPRestrictionRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>模型 API ID</p>
     */
    public $ModelAPIId;

    /**
     * @var boolean <p>是否启用 IP 黑白名单</p>
     */
    public $Enable;

    /**
     * @var string <p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
     */
    public $RestrictionType;

    /**
     * @var array <p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6），长度 [1,400]</p>
     */
    public $AddressList;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param string $ModelAPIId <p>模型 API ID</p>
     * @param boolean $Enable <p>是否启用 IP 黑白名单</p>
     * @param string $RestrictionType <p>限制类型</p><p>枚举值：</p><ul><li>whiteList： 白名单</li><li>blackList： 黑名单</li></ul>
     * @param array $AddressList <p>IP 或 CIDR 列表，每项须为合法 IP/CIDR（支持 IPv4/IPv6），长度 [1,400]</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ModelAPIId",$param) and $param["ModelAPIId"] !== null) {
            $this->ModelAPIId = $param["ModelAPIId"];
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
