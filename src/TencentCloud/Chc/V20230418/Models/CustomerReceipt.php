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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户上门自提信息
 *
 * @method string getPickUpStuff() 获取自提人员姓名
 * @method void setPickUpStuff(string $PickUpStuff) 设置自提人员姓名
 * @method string getPickUpStuffContact() 获取自提人电话
 * @method void setPickUpStuffContact(string $PickUpStuffContact) 设置自提人电话
 * @method string getPickUpStuffIDCard() 获取到访人证件号码
 * @method void setPickUpStuffIDCard(string $PickUpStuffIDCard) 设置到访人证件号码
 * @method string getPickUpTime() 获取自提时间
 * @method void setPickUpTime(string $PickUpTime) 设置自提时间
 * @method string getIDCardType() 获取证件类型，非必传，默认为IDENTITY_CARD。
对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
 * @method void setIDCardType(string $IDCardType) 设置证件类型，非必传，默认为IDENTITY_CARD。
对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
 */
class CustomerReceipt extends AbstractModel
{
    /**
     * @var string 自提人员姓名
     */
    public $PickUpStuff;

    /**
     * @var string 自提人电话
     */
    public $PickUpStuffContact;

    /**
     * @var string 到访人证件号码
     */
    public $PickUpStuffIDCard;

    /**
     * @var string 自提时间
     */
    public $PickUpTime;

    /**
     * @var string 证件类型，非必传，默认为IDENTITY_CARD。
对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
     */
    public $IDCardType;

    /**
     * @param string $PickUpStuff 自提人员姓名
     * @param string $PickUpStuffContact 自提人电话
     * @param string $PickUpStuffIDCard 到访人证件号码
     * @param string $PickUpTime 自提时间
     * @param string $IDCardType 证件类型，非必传，默认为IDENTITY_CARD。
对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
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
        if (array_key_exists("PickUpStuff",$param) and $param["PickUpStuff"] !== null) {
            $this->PickUpStuff = $param["PickUpStuff"];
        }

        if (array_key_exists("PickUpStuffContact",$param) and $param["PickUpStuffContact"] !== null) {
            $this->PickUpStuffContact = $param["PickUpStuffContact"];
        }

        if (array_key_exists("PickUpStuffIDCard",$param) and $param["PickUpStuffIDCard"] !== null) {
            $this->PickUpStuffIDCard = $param["PickUpStuffIDCard"];
        }

        if (array_key_exists("PickUpTime",$param) and $param["PickUpTime"] !== null) {
            $this->PickUpTime = $param["PickUpTime"];
        }

        if (array_key_exists("IDCardType",$param) and $param["IDCardType"] !== null) {
            $this->IDCardType = $param["IDCardType"];
        }
    }
}
