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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuthModeSetting请求参数结构体
 *
 * @method integer getAuthMode() 获取双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key（只有ResourceType=1且AuthModeGM不传时有效，其他情况不能为3）    
备注：AuthMode和AuthModeGM至少有一个有效传参
 * @method void setAuthMode(integer $AuthMode) 设置双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key（只有ResourceType=1且AuthModeGM不传时有效，其他情况不能为3）    
备注：AuthMode和AuthModeGM至少有一个有效传参
 * @method integer getAuthModeGM() 获取国密双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key
备注：AuthMode和AuthModeGM至少有一个有效传参，AuthModeGM优先级高于ResourceType
 * @method void setAuthModeGM(integer $AuthModeGM) 设置国密双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key
备注：AuthMode和AuthModeGM至少有一个有效传参，AuthModeGM优先级高于ResourceType
 * @method integer getResourceType() 获取资源类型，0：普通（暂停使用，由AuthMode和AuthModeGM传参决定） 1：国密

 * @method void setResourceType(integer $ResourceType) 设置资源类型，0：普通（暂停使用，由AuthMode和AuthModeGM传参决定） 1：国密
 */
class ModifyAuthModeSettingRequest extends AbstractModel
{
    /**
     * @var integer 双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key（只有ResourceType=1且AuthModeGM不传时有效，其他情况不能为3）    
备注：AuthMode和AuthModeGM至少有一个有效传参
     */
    public $AuthMode;

    /**
     * @var integer 国密双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key
备注：AuthMode和AuthModeGM至少有一个有效传参，AuthModeGM优先级高于ResourceType
     */
    public $AuthModeGM;

    /**
     * @var integer 资源类型，0：普通（暂停使用，由AuthMode和AuthModeGM传参决定） 1：国密

     */
    public $ResourceType;

    /**
     * @param integer $AuthMode 双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key（只有ResourceType=1且AuthModeGM不传时有效，其他情况不能为3）    
备注：AuthMode和AuthModeGM至少有一个有效传参
     * @param integer $AuthModeGM 国密双因子认证，0-不开启（暂停使用），1-OTP，2-短信，3-USB Key
备注：AuthMode和AuthModeGM至少有一个有效传参，AuthModeGM优先级高于ResourceType
     * @param integer $ResourceType 资源类型，0：普通（暂停使用，由AuthMode和AuthModeGM传参决定） 1：国密
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
        if (array_key_exists("AuthMode",$param) and $param["AuthMode"] !== null) {
            $this->AuthMode = $param["AuthMode"];
        }

        if (array_key_exists("AuthModeGM",$param) and $param["AuthModeGM"] !== null) {
            $this->AuthModeGM = $param["AuthModeGM"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
