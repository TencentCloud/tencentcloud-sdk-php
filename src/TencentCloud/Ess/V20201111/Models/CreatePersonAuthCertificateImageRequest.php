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
 * CreatePersonAuthCertificateImage请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getUserName() 获取个人用户名称
 * @method void setUserName(string $UserName) 设置个人用户名称
 * @method string getIdCardType() 获取身份证件类型取值：
ID_CARD 身居民身份证
PASSPORT 护照
HONGKONG_AND_MACAO 港澳居民来往内地通行证
FOREIGN_ID_CARD 外国人永久居留身份证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型取值：
ID_CARD 身居民身份证
PASSPORT 护照
HONGKONG_AND_MACAO 港澳居民来往内地通行证
FOREIGN_ID_CARD 外国人永久居留身份证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method string getIdCardNumber() 获取身份证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码
 */
class CreatePersonAuthCertificateImageRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 个人用户名称
     */
    public $UserName;

    /**
     * @var string 身份证件类型取值：
ID_CARD 身居民身份证
PASSPORT 护照
HONGKONG_AND_MACAO 港澳居民来往内地通行证
FOREIGN_ID_CARD 外国人永久居留身份证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     */
    public $IdCardType;

    /**
     * @var string 身份证件号码
     */
    public $IdCardNumber;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param string $UserName 个人用户名称
     * @param string $IdCardType 身份证件类型取值：
ID_CARD 身居民身份证
PASSPORT 护照
HONGKONG_AND_MACAO 港澳居民来往内地通行证
FOREIGN_ID_CARD 外国人永久居留身份证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     * @param string $IdCardNumber 身份证件号码
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }
    }
}
