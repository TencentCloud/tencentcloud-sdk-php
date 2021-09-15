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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (UserDescribe) 用于描述个人帐号查询结果。
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getMobile() 获取手机号，隐藏中间4位数字，用*代替
 * @method void setMobile(string $Mobile) 设置手机号，隐藏中间4位数字，用*代替
 * @method integer getCreatedOn() 获取注册时间点 (UNIX时间戳)
 * @method void setCreatedOn(integer $CreatedOn) 设置注册时间点 (UNIX时间戳)
 * @method integer getVerifyStatus() 获取实名认证状态：
0 - 未实名；
1 - 通过实名
 * @method void setVerifyStatus(integer $VerifyStatus) 设置实名认证状态：
0 - 未实名；
1 - 通过实名
 * @method string getName() 获取真实姓名
 * @method void setName(string $Name) 设置真实姓名
 * @method integer getVerifiedOn() 获取实名认证通过时间 (UNIX时间戳)
 * @method void setVerifiedOn(integer $VerifiedOn) 设置实名认证通过时间 (UNIX时间戳)
 * @method string getIdCardType() 获取身份证件类型; 
ID_CARD - 居民身份证；
PASSPORT - 护照；
MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证；
MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证；
HOUSEHOLD_REGISTER - 户口本；
TEMP_ID_CARD - 临时居民身份证
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型; 
ID_CARD - 居民身份证；
PASSPORT - 护照；
MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证；
MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证；
HOUSEHOLD_REGISTER - 户口本；
TEMP_ID_CARD - 临时居民身份证
 * @method string getIdCardNumber() 获取身份证件号码 (脱敏)
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码 (脱敏)
 */
class UserDescribe extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 手机号，隐藏中间4位数字，用*代替
     */
    public $Mobile;

    /**
     * @var integer 注册时间点 (UNIX时间戳)
     */
    public $CreatedOn;

    /**
     * @var integer 实名认证状态：
0 - 未实名；
1 - 通过实名
     */
    public $VerifyStatus;

    /**
     * @var string 真实姓名
     */
    public $Name;

    /**
     * @var integer 实名认证通过时间 (UNIX时间戳)
     */
    public $VerifiedOn;

    /**
     * @var string 身份证件类型; 
ID_CARD - 居民身份证；
PASSPORT - 护照；
MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证；
MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证；
HOUSEHOLD_REGISTER - 户口本；
TEMP_ID_CARD - 临时居民身份证
     */
    public $IdCardType;

    /**
     * @var string 身份证件号码 (脱敏)
     */
    public $IdCardNumber;

    /**
     * @param string $UserId 用户ID
     * @param string $Mobile 手机号，隐藏中间4位数字，用*代替
     * @param integer $CreatedOn 注册时间点 (UNIX时间戳)
     * @param integer $VerifyStatus 实名认证状态：
0 - 未实名；
1 - 通过实名
     * @param string $Name 真实姓名
     * @param integer $VerifiedOn 实名认证通过时间 (UNIX时间戳)
     * @param string $IdCardType 身份证件类型; 
ID_CARD - 居民身份证；
PASSPORT - 护照；
MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证；
MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证；
HOUSEHOLD_REGISTER - 户口本；
TEMP_ID_CARD - 临时居民身份证
     * @param string $IdCardNumber 身份证件号码 (脱敏)
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VerifiedOn",$param) and $param["VerifiedOn"] !== null) {
            $this->VerifiedOn = $param["VerifiedOn"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }
    }
}
