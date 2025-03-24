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
 * 客户上门自提信息
 *
 * @method string getPickUpStuff() 获取自提人员姓名
 * @method void setPickUpStuff(string $PickUpStuff) 设置自提人员姓名
 * @method string getPickUpStuffContact() 获取自提人电话
 * @method void setPickUpStuffContact(string $PickUpStuffContact) 设置自提人电话
 * @method string getPickUpStuffIDCard() 获取自提人身份证号
 * @method void setPickUpStuffIDCard(string $PickUpStuffIDCard) 设置自提人身份证号
 * @method string getPickUpTime() 获取自提时间
 * @method void setPickUpTime(string $PickUpTime) 设置自提时间
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
     * @var string 自提人身份证号
     */
    public $PickUpStuffIDCard;

    /**
     * @var string 自提时间
     */
    public $PickUpTime;

    /**
     * @param string $PickUpStuff 自提人员姓名
     * @param string $PickUpStuffContact 自提人电话
     * @param string $PickUpStuffIDCard 自提人身份证号
     * @param string $PickUpTime 自提时间
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
    }
}
