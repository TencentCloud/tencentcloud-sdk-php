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
 * 用户的三要素：姓名，证件号，证件类型
 *
 * @method string getName() 获取签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method void setName(string $Name) 设置签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method string getIdCardType() 获取证件类型，支持以下类型
<ul><li>ID_CARD : 居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置证件类型，支持以下类型
<ul><li>ID_CARD : 居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method string getIdCardNumber() 获取证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给香港居民，“M”字头签发给澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给香港居民，“M”字头签发给澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 */
class UserThreeFactor extends AbstractModel
{
    /**
     * @var string 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     */
    public $Name;

    /**
     * @var string 证件类型，支持以下类型
<ul><li>ID_CARD : 居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
     */
    public $IdCardType;

    /**
     * @var string 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给香港居民，“M”字头签发给澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @param string $Name 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     * @param string $IdCardType 证件类型，支持以下类型
<ul><li>ID_CARD : 居民身份证 (默认值)</li>
<li>HONGKONG_AND_MACAO : 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 港澳台居民居住证(格式同居民身份证)</li></ul>
     * @param string $IdCardNumber 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给香港居民，“M”字头签发给澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
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

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }
    }
}
