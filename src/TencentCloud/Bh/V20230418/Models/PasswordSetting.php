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
 * 密码要求设置。
 *
 * @method integer getMinLength() 获取密码最小长度，8-20，默认8。
 * @method void setMinLength(integer $MinLength) 设置密码最小长度，8-20，默认8。
 * @method integer getComplexity() 获取密码复杂度，0不限制，1包含字母和数字，2至少包括大写字母、小写字母、数字、特殊符号，默认2。
 * @method void setComplexity(integer $Complexity) 设置密码复杂度，0不限制，1包含字母和数字，2至少包括大写字母、小写字母、数字、特殊符号，默认2。
 * @method integer getValidTerm() 获取密码有效期，0不限制，30天，90天，180天。
 * @method void setValidTerm(integer $ValidTerm) 设置密码有效期，0不限制，30天，90天，180天。
 * @method integer getCheckHistory() 获取检查最近n次密码设置是否存在相同密码，2-10，默认5。
 * @method void setCheckHistory(integer $CheckHistory) 设置检查最近n次密码设置是否存在相同密码，2-10，默认5。
 */
class PasswordSetting extends AbstractModel
{
    /**
     * @var integer 密码最小长度，8-20，默认8。
     */
    public $MinLength;

    /**
     * @var integer 密码复杂度，0不限制，1包含字母和数字，2至少包括大写字母、小写字母、数字、特殊符号，默认2。
     */
    public $Complexity;

    /**
     * @var integer 密码有效期，0不限制，30天，90天，180天。
     */
    public $ValidTerm;

    /**
     * @var integer 检查最近n次密码设置是否存在相同密码，2-10，默认5。
     */
    public $CheckHistory;

    /**
     * @param integer $MinLength 密码最小长度，8-20，默认8。
     * @param integer $Complexity 密码复杂度，0不限制，1包含字母和数字，2至少包括大写字母、小写字母、数字、特殊符号，默认2。
     * @param integer $ValidTerm 密码有效期，0不限制，30天，90天，180天。
     * @param integer $CheckHistory 检查最近n次密码设置是否存在相同密码，2-10，默认5。
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
        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("Complexity",$param) and $param["Complexity"] !== null) {
            $this->Complexity = $param["Complexity"];
        }

        if (array_key_exists("ValidTerm",$param) and $param["ValidTerm"] !== null) {
            $this->ValidTerm = $param["ValidTerm"];
        }

        if (array_key_exists("CheckHistory",$param) and $param["CheckHistory"] !== null) {
            $this->CheckHistory = $param["CheckHistory"];
        }
    }
}
