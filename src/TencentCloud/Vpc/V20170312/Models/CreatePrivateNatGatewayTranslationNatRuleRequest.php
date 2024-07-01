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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateNatGatewayTranslationNatRule请求参数结构体
 *
 * @method string getNatGatewayId() 获取私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method array getTranslationNatRules() 获取转换规则对象数组。
 * @method void setTranslationNatRules(array $TranslationNatRules) 设置转换规则对象数组。
 * @method boolean getCrossDomain() 获取跨域参数，当VPC为跨域时填写为True。
 * @method void setCrossDomain(boolean $CrossDomain) 设置跨域参数，当VPC为跨域时填写为True。
 */
class CreatePrivateNatGatewayTranslationNatRuleRequest extends AbstractModel
{
    /**
     * @var string 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     */
    public $NatGatewayId;

    /**
     * @var array 转换规则对象数组。
     */
    public $TranslationNatRules;

    /**
     * @var boolean 跨域参数，当VPC为跨域时填写为True。
     */
    public $CrossDomain;

    /**
     * @param string $NatGatewayId 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     * @param array $TranslationNatRules 转换规则对象数组。
     * @param boolean $CrossDomain 跨域参数，当VPC为跨域时填写为True。
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

        if (array_key_exists("TranslationNatRules",$param) and $param["TranslationNatRules"] !== null) {
            $this->TranslationNatRules = [];
            foreach ($param["TranslationNatRules"] as $key => $value){
                $obj = new TranslationNatRuleInput();
                $obj->deserialize($value);
                array_push($this->TranslationNatRules, $obj);
            }
        }

        if (array_key_exists("CrossDomain",$param) and $param["CrossDomain"] !== null) {
            $this->CrossDomain = $param["CrossDomain"];
        }
    }
}
