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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserVerifyStatus请求参数结构体
 *
 * @method UserInfo getOperator() 获取用户信息
 * @method void setOperator(UserInfo $Operator) 设置用户信息
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getIdCardNumber() 获取证件号，身份证如果有x的话，统一按照大写X传递
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号，身份证如果有x的话，统一按照大写X传递
 */
class DescribeUserVerifyStatusRequest extends AbstractModel
{
    /**
     * @var UserInfo 用户信息
     */
    public $Operator;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 证件号，身份证如果有x的话，统一按照大写X传递
     */
    public $IdCardNumber;

    /**
     * @param UserInfo $Operator 用户信息
     * @param string $Name 姓名
     * @param string $IdCardNumber 证件号，身份证如果有x的话，统一按照大写X传递
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }
    }
}
