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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-支付限制
 *
 * @method string getPayLimitType() 获取限制类型
 * @method void setPayLimitType(string $PayLimitType) 设置限制类型
 * @method string getPayLimitValue() 获取限制类型值
 * @method void setPayLimitValue(string $PayLimitValue) 设置限制类型值
 */
class OpenBankPayLimitInfo extends AbstractModel
{
    /**
     * @var string 限制类型
     */
    public $PayLimitType;

    /**
     * @var string 限制类型值
     */
    public $PayLimitValue;

    /**
     * @param string $PayLimitType 限制类型
     * @param string $PayLimitValue 限制类型值
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
        if (array_key_exists("PayLimitType",$param) and $param["PayLimitType"] !== null) {
            $this->PayLimitType = $param["PayLimitType"];
        }

        if (array_key_exists("PayLimitValue",$param) and $param["PayLimitValue"] !== null) {
            $this->PayLimitValue = $param["PayLimitValue"];
        }
    }
}
