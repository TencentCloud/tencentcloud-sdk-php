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
 * CreatePrivateNatGatewayTranslationAclRule请求参数结构体
 *
 * @method string getNatGatewayId() 获取私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method string getTranslationDirection() 获取转换规则目标，可选值"LOCAL"。
 * @method void setTranslationDirection(string $TranslationDirection) 设置转换规则目标，可选值"LOCAL"。
 * @method string getTranslationType() 获取转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method void setTranslationType(string $TranslationType) 设置转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method string getTranslationIp() 获取转换`IP`,当转换规则类型为四层时为`IP`池。
 * @method void setTranslationIp(string $TranslationIp) 设置转换`IP`,当转换规则类型为四层时为`IP`池。
 * @method array getTranslationAclRules() 获取访问控制列表。
 * @method void setTranslationAclRules(array $TranslationAclRules) 设置访问控制列表。
 * @method string getOriginalIp() 获取源`IP`,当转换规则类型为三层时有效。
 * @method void setOriginalIp(string $OriginalIp) 设置源`IP`,当转换规则类型为三层时有效。
 */
class CreatePrivateNatGatewayTranslationAclRuleRequest extends AbstractModel
{
    /**
     * @var string 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     */
    public $NatGatewayId;

    /**
     * @var string 转换规则目标，可选值"LOCAL"。
     */
    public $TranslationDirection;

    /**
     * @var string 转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
     */
    public $TranslationType;

    /**
     * @var string 转换`IP`,当转换规则类型为四层时为`IP`池。
     */
    public $TranslationIp;

    /**
     * @var array 访问控制列表。
     */
    public $TranslationAclRules;

    /**
     * @var string 源`IP`,当转换规则类型为三层时有效。
     */
    public $OriginalIp;

    /**
     * @param string $NatGatewayId 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     * @param string $TranslationDirection 转换规则目标，可选值"LOCAL"。
     * @param string $TranslationType 转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
     * @param string $TranslationIp 转换`IP`,当转换规则类型为四层时为`IP`池。
     * @param array $TranslationAclRules 访问控制列表。
     * @param string $OriginalIp 源`IP`,当转换规则类型为三层时有效。
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

        if (array_key_exists("TranslationDirection",$param) and $param["TranslationDirection"] !== null) {
            $this->TranslationDirection = $param["TranslationDirection"];
        }

        if (array_key_exists("TranslationType",$param) and $param["TranslationType"] !== null) {
            $this->TranslationType = $param["TranslationType"];
        }

        if (array_key_exists("TranslationIp",$param) and $param["TranslationIp"] !== null) {
            $this->TranslationIp = $param["TranslationIp"];
        }

        if (array_key_exists("TranslationAclRules",$param) and $param["TranslationAclRules"] !== null) {
            $this->TranslationAclRules = [];
            foreach ($param["TranslationAclRules"] as $key => $value){
                $obj = new TranslationAclRule();
                $obj->deserialize($value);
                array_push($this->TranslationAclRules, $obj);
            }
        }

        if (array_key_exists("OriginalIp",$param) and $param["OriginalIp"] !== null) {
            $this->OriginalIp = $param["OriginalIp"];
        }
    }
}
