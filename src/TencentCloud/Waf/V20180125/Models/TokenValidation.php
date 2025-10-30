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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * token有效性配置信息
 *
 * @method boolean getEnable() 获取是否开启token有效性校验
 * @method void setEnable(boolean $Enable) 设置是否开启token有效性校验
 * @method string getVerifyType() 获取token有效性的校验方式，可选值为：jws、jwe、contains、len、regex
 * @method void setVerifyType(string $VerifyType) 设置token有效性的校验方式，可选值为：jws、jwe、contains、len、regex
 * @method TokenVerifyRule getVerifyRule() 获取有效性校验配置和规则
 * @method void setVerifyRule(TokenVerifyRule $VerifyRule) 设置有效性校验配置和规则
 * @method TokenDisplaySetting getDisplaySetting() 获取Token显示设置（只有当校验方式为jws/jwe的时候才会有该配置信息）
 * @method void setDisplaySetting(TokenDisplaySetting $DisplaySetting) 设置Token显示设置（只有当校验方式为jws/jwe的时候才会有该配置信息）
 */
class TokenValidation extends AbstractModel
{
    /**
     * @var boolean 是否开启token有效性校验
     */
    public $Enable;

    /**
     * @var string token有效性的校验方式，可选值为：jws、jwe、contains、len、regex
     */
    public $VerifyType;

    /**
     * @var TokenVerifyRule 有效性校验配置和规则
     */
    public $VerifyRule;

    /**
     * @var TokenDisplaySetting Token显示设置（只有当校验方式为jws/jwe的时候才会有该配置信息）
     */
    public $DisplaySetting;

    /**
     * @param boolean $Enable 是否开启token有效性校验
     * @param string $VerifyType token有效性的校验方式，可选值为：jws、jwe、contains、len、regex
     * @param TokenVerifyRule $VerifyRule 有效性校验配置和规则
     * @param TokenDisplaySetting $DisplaySetting Token显示设置（只有当校验方式为jws/jwe的时候才会有该配置信息）
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

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("VerifyRule",$param) and $param["VerifyRule"] !== null) {
            $this->VerifyRule = new TokenVerifyRule();
            $this->VerifyRule->deserialize($param["VerifyRule"]);
        }

        if (array_key_exists("DisplaySetting",$param) and $param["DisplaySetting"] !== null) {
            $this->DisplaySetting = new TokenDisplaySetting();
            $this->DisplaySetting->deserialize($param["DisplaySetting"]);
        }
    }
}
