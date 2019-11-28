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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() 获取参与校验的参数类型。
0：使用手机号进行校验；
1：使用姓名与身份证号进行校验。
 * @method void setType(string $Type) 设置参与校验的参数类型。
0：使用手机号进行校验；
1：使用姓名与身份证号进行校验。
 * @method string getMobile() 获取手机号。11位数字。
 * @method void setMobile(string $Mobile) 设置手机号。11位数字。
 * @method string getIdCard() 获取身份证号码。
 * @method void setIdCard(string $IdCard) 设置身份证号码。
 * @method string getName() 获取姓名。
 * @method void setName(string $Name) 设置姓名。
 */

/**
 *MinorsVerification请求参数结构体
 */
class MinorsVerificationRequest extends AbstractModel
{
    /**
     * @var string 参与校验的参数类型。
0：使用手机号进行校验；
1：使用姓名与身份证号进行校验。
     */
    public $Type;

    /**
     * @var string 手机号。11位数字。
     */
    public $Mobile;

    /**
     * @var string 身份证号码。
     */
    public $IdCard;

    /**
     * @var string 姓名。
     */
    public $Name;
    /**
     * @param string $Type 参与校验的参数类型。
0：使用手机号进行校验；
1：使用姓名与身份证号进行校验。
     * @param string $Mobile 手机号。11位数字。
     * @param string $IdCard 身份证号码。
     * @param string $Name 姓名。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
