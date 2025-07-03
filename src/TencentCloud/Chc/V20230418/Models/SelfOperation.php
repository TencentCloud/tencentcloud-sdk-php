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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户自行上门信息
 *
 * @method string getStuffContact() 获取联系人员电话
 * @method void setStuffContact(string $StuffContact) 设置联系人员电话
 * @method string getStuffIDCard() 获取证件号码
 * @method void setStuffIDCard(string $StuffIDCard) 设置证件号码
 * @method string getStuffName() 获取人员姓名
 * @method void setStuffName(string $StuffName) 设置人员姓名
 * @method string getOperationTime() 获取上门时间
 * @method void setOperationTime(string $OperationTime) 设置上门时间
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
class SelfOperation extends AbstractModel
{
    /**
     * @var string 联系人员电话
     */
    public $StuffContact;

    /**
     * @var string 证件号码
     */
    public $StuffIDCard;

    /**
     * @var string 人员姓名
     */
    public $StuffName;

    /**
     * @var string 上门时间
     */
    public $OperationTime;

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
     * @param string $StuffContact 联系人员电话
     * @param string $StuffIDCard 证件号码
     * @param string $StuffName 人员姓名
     * @param string $OperationTime 上门时间
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
        if (array_key_exists("StuffContact",$param) and $param["StuffContact"] !== null) {
            $this->StuffContact = $param["StuffContact"];
        }

        if (array_key_exists("StuffIDCard",$param) and $param["StuffIDCard"] !== null) {
            $this->StuffIDCard = $param["StuffIDCard"];
        }

        if (array_key_exists("StuffName",$param) and $param["StuffName"] !== null) {
            $this->StuffName = $param["StuffName"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }

        if (array_key_exists("IDCardType",$param) and $param["IDCardType"] !== null) {
            $this->IDCardType = $param["IDCardType"];
        }
    }
}
