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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 座席购买信息
 *
 * @method integer getNum() 获取购买座席数量
 * @method void setNum(integer $Num) 设置购买座席数量
 * @method integer getBuyTime() 获取购买时间戳
 * @method void setBuyTime(integer $BuyTime) 设置购买时间戳
 * @method integer getEndTime() 获取截止时间戳
 * @method void setEndTime(integer $EndTime) 设置截止时间戳
 * @method integer getSipNum() 获取购买办公电话数量
 * @method void setSipNum(integer $SipNum) 设置购买办公电话数量
 */
class StaffBuyInfo extends AbstractModel
{
    /**
     * @var integer 购买座席数量
     */
    public $Num;

    /**
     * @var integer 购买时间戳
     */
    public $BuyTime;

    /**
     * @var integer 截止时间戳
     */
    public $EndTime;

    /**
     * @var integer 购买办公电话数量
     */
    public $SipNum;

    /**
     * @param integer $Num 购买座席数量
     * @param integer $BuyTime 购买时间戳
     * @param integer $EndTime 截止时间戳
     * @param integer $SipNum 购买办公电话数量
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SipNum",$param) and $param["SipNum"] !== null) {
            $this->SipNum = $param["SipNum"];
        }
    }
}
