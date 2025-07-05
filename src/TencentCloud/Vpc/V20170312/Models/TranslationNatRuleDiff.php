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
 * 私网网关Snat转发规则修改
 *
 * @method string getTranslationDirection() 获取转发规则目标，可选值"LOCAL","PEER"。
 * @method void setTranslationDirection(string $TranslationDirection) 设置转发规则目标，可选值"LOCAL","PEER"。
 * @method string getTranslationType() 获取转发规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method void setTranslationType(string $TranslationType) 设置转发规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
 * @method string getTranslationIp() 获取转发规则映射`IP`,当转发规则类型为四层时为`IP`池
 * @method void setTranslationIp(string $TranslationIp) 设置转发规则映射`IP`,当转发规则类型为四层时为`IP`池
 * @method string getDescription() 获取转发规则描述。
 * @method void setDescription(string $Description) 设置转发规则描述。
 * @method string getOldTranslationIp() 获取旧转发规则映射`IP`,当转发规则类型为四层时为`IP`池
 * @method void setOldTranslationIp(string $OldTranslationIp) 设置旧转发规则映射`IP`,当转发规则类型为四层时为`IP`池
 * @method string getOriginalIp() 获取新转发规则源`IP`,当转发规则类型为三层时有效
 * @method void setOriginalIp(string $OriginalIp) 设置新转发规则源`IP`,当转发规则类型为三层时有效
 * @method string getOldOriginalIp() 获取旧转发规则源`IP`,当转发规则类型为三层时有效
 * @method void setOldOriginalIp(string $OldOriginalIp) 设置旧转发规则源`IP`,当转发规则类型为三层时有效
 */
class TranslationNatRuleDiff extends AbstractModel
{
    /**
     * @var string 转发规则目标，可选值"LOCAL","PEER"。
     */
    public $TranslationDirection;

    /**
     * @var string 转发规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
     */
    public $TranslationType;

    /**
     * @var string 转发规则映射`IP`,当转发规则类型为四层时为`IP`池
     */
    public $TranslationIp;

    /**
     * @var string 转发规则描述。
     */
    public $Description;

    /**
     * @var string 旧转发规则映射`IP`,当转发规则类型为四层时为`IP`池
     */
    public $OldTranslationIp;

    /**
     * @var string 新转发规则源`IP`,当转发规则类型为三层时有效
     */
    public $OriginalIp;

    /**
     * @var string 旧转发规则源`IP`,当转发规则类型为三层时有效
     */
    public $OldOriginalIp;

    /**
     * @param string $TranslationDirection 转发规则目标，可选值"LOCAL","PEER"。
     * @param string $TranslationType 转发规则类型，可选值"NETWORK_LAYER","TRANSPORT_LAYER"。
     * @param string $TranslationIp 转发规则映射`IP`,当转发规则类型为四层时为`IP`池
     * @param string $Description 转发规则描述。
     * @param string $OldTranslationIp 旧转发规则映射`IP`,当转发规则类型为四层时为`IP`池
     * @param string $OriginalIp 新转发规则源`IP`,当转发规则类型为三层时有效
     * @param string $OldOriginalIp 旧转发规则源`IP`,当转发规则类型为三层时有效
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

        if (array_key_exists("OldTranslationIp",$param) and $param["OldTranslationIp"] !== null) {
            $this->OldTranslationIp = $param["OldTranslationIp"];
        }

        if (array_key_exists("OriginalIp",$param) and $param["OriginalIp"] !== null) {
            $this->OriginalIp = $param["OriginalIp"];
        }

        if (array_key_exists("OldOriginalIp",$param) and $param["OldOriginalIp"] !== null) {
            $this->OldOriginalIp = $param["OldOriginalIp"];
        }
    }
}
