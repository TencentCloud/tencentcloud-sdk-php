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
 * 私网网关Snat转发规则入参
 *
 * @method string getTranslationDirection() 获取转换规则目标，可选值"LOCAL","PEER"。
 * @method void setTranslationDirection(string $TranslationDirection) 设置转换规则目标，可选值"LOCAL","PEER"。
 * @method string getTranslationType() 获取转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method void setTranslationType(string $TranslationType) 设置转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method string getTranslationIp() 获取转换`IP`,当转换规则类型为四层时为`IP`池。
 * @method void setTranslationIp(string $TranslationIp) 设置转换`IP`,当转换规则类型为四层时为`IP`池。
 * @method string getDescription() 获取转换规则描述。
 * @method void setDescription(string $Description) 设置转换规则描述。
 * @method string getOriginalIp() 获取源`IP`,当转换规则类型为三层时有效。
 * @method void setOriginalIp(string $OriginalIp) 设置源`IP`,当转换规则类型为三层时有效。
 */
class TranslationNatRuleInput extends AbstractModel
{
    /**
     * @var string 转换规则目标，可选值"LOCAL","PEER"。
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
     * @var string 转换规则描述。
     */
    public $Description;

    /**
     * @var string 源`IP`,当转换规则类型为三层时有效。
     */
    public $OriginalIp;

    /**
     * @param string $TranslationDirection 转换规则目标，可选值"LOCAL","PEER"。
     * @param string $TranslationType 转换规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
     * @param string $TranslationIp 转换`IP`,当转换规则类型为四层时为`IP`池。
     * @param string $Description 转换规则描述。
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
        if (array_key_exists("TranslationDirection",$param) and $param["TranslationDirection"] !== null) {
            $this->TranslationDirection = $param["TranslationDirection"];
        }

        if (array_key_exists("TranslationType",$param) and $param["TranslationType"] !== null) {
            $this->TranslationType = $param["TranslationType"];
        }

        if (array_key_exists("TranslationIp",$param) and $param["TranslationIp"] !== null) {
            $this->TranslationIp = $param["TranslationIp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OriginalIp",$param) and $param["OriginalIp"] !== null) {
            $this->OriginalIp = $param["OriginalIp"];
        }
    }
}
