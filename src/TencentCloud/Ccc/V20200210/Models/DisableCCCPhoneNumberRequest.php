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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisableCCCPhoneNumber请求参数结构体
 *
 * @method array getPhoneNumbers() 获取号码列表，0086开头
 * @method void setPhoneNumbers(array $PhoneNumbers) 设置号码列表，0086开头
 * @method integer getDisabled() 获取停用开关，0启用 1停用
 * @method void setDisabled(integer $Disabled) 设置停用开关，0启用 1停用
 * @method integer getSdkAppId() 获取TCCC 实例应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置TCCC 实例应用 ID
 */
class DisableCCCPhoneNumberRequest extends AbstractModel
{
    /**
     * @var array 号码列表，0086开头
     */
    public $PhoneNumbers;

    /**
     * @var integer 停用开关，0启用 1停用
     */
    public $Disabled;

    /**
     * @var integer TCCC 实例应用 ID
     */
    public $SdkAppId;

    /**
     * @param array $PhoneNumbers 号码列表，0086开头
     * @param integer $Disabled 停用开关，0启用 1停用
     * @param integer $SdkAppId TCCC 实例应用 ID
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
        if (array_key_exists("PhoneNumbers",$param) and $param["PhoneNumbers"] !== null) {
            $this->PhoneNumbers = $param["PhoneNumbers"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
