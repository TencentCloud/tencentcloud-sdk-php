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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定签署人限制项
 *
 * @method string getName() 获取指定签署人姓名
 * @method void setName(string $Name) 设置指定签署人姓名
 * @method string getMobile() 获取指定签署人手机号，11位数字
 * @method void setMobile(string $Mobile) 设置指定签署人手机号，11位数字
 * @method string getIdCardType() 获取指定签署人证件类型，ID_CARD-身份证，HONGKONG_AND_MACAO-港澳居民来往内地通行证，HONGKONG_MACAO_AND_TAIWAN-港澳台居民居住证
 * @method void setIdCardType(string $IdCardType) 设置指定签署人证件类型，ID_CARD-身份证，HONGKONG_AND_MACAO-港澳居民来往内地通行证，HONGKONG_MACAO_AND_TAIWAN-港澳台居民居住证
 * @method string getIdCardNumber() 获取指定签署人证件号码，其中字母大写
 * @method void setIdCardNumber(string $IdCardNumber) 设置指定签署人证件号码，其中字母大写
 */
class ApproverRestriction extends AbstractModel
{
    /**
     * @var string 指定签署人姓名
     */
    public $Name;

    /**
     * @var string 指定签署人手机号，11位数字
     */
    public $Mobile;

    /**
     * @var string 指定签署人证件类型，ID_CARD-身份证，HONGKONG_AND_MACAO-港澳居民来往内地通行证，HONGKONG_MACAO_AND_TAIWAN-港澳台居民居住证
     */
    public $IdCardType;

    /**
     * @var string 指定签署人证件号码，其中字母大写
     */
    public $IdCardNumber;

    /**
     * @param string $Name 指定签署人姓名
     * @param string $Mobile 指定签署人手机号，11位数字
     * @param string $IdCardType 指定签署人证件类型，ID_CARD-身份证，HONGKONG_AND_MACAO-港澳居民来往内地通行证，HONGKONG_MACAO_AND_TAIWAN-港澳台居民居住证
     * @param string $IdCardNumber 指定签署人证件号码，其中字母大写
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }
    }
}
