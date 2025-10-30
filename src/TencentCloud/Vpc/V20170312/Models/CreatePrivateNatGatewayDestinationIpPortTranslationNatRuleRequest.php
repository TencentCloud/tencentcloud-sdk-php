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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateNatGatewayDestinationIpPortTranslationNatRule请求参数结构体
 *
 * @method string getNatGatewayId() 获取私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method array getLocalDestinationIpPortTranslationNatRules() 获取目的端口转换规则列表。
 * @method void setLocalDestinationIpPortTranslationNatRules(array $LocalDestinationIpPortTranslationNatRules) 设置目的端口转换规则列表。
 */
class CreatePrivateNatGatewayDestinationIpPortTranslationNatRuleRequest extends AbstractModel
{
    /**
     * @var string 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     */
    public $NatGatewayId;

    /**
     * @var array 目的端口转换规则列表。
     */
    public $LocalDestinationIpPortTranslationNatRules;

    /**
     * @param string $NatGatewayId 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     * @param array $LocalDestinationIpPortTranslationNatRules 目的端口转换规则列表。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("LocalDestinationIpPortTranslationNatRules",$param) and $param["LocalDestinationIpPortTranslationNatRules"] !== null) {
            $this->LocalDestinationIpPortTranslationNatRules = [];
            foreach ($param["LocalDestinationIpPortTranslationNatRules"] as $key => $value){
                $obj = new LocalDestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->LocalDestinationIpPortTranslationNatRules, $obj);
            }
        }
    }
}
