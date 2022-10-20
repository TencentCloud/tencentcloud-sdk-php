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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogCleanSettingInfo请求参数结构体
 *
 * @method integer getReservesLimit() 获取触发清理的储量底线(50-99)
 * @method void setReservesLimit(integer $ReservesLimit) 设置触发清理的储量底线(50-99)
 * @method integer getReservesDeadline() 获取清理停止时的储量截至线(>0,小于ReservesLimit)
 * @method void setReservesDeadline(integer $ReservesDeadline) 设置清理停止时的储量截至线(>0,小于ReservesLimit)
 * @method integer getDayLimit() 获取触发清理的存储天数(>=1)
 * @method void setDayLimit(integer $DayLimit) 设置触发清理的存储天数(>=1)
 */
class ModifySecLogCleanSettingInfoRequest extends AbstractModel
{
    /**
     * @var integer 触发清理的储量底线(50-99)
     */
    public $ReservesLimit;

    /**
     * @var integer 清理停止时的储量截至线(>0,小于ReservesLimit)
     */
    public $ReservesDeadline;

    /**
     * @var integer 触发清理的存储天数(>=1)
     */
    public $DayLimit;

    /**
     * @param integer $ReservesLimit 触发清理的储量底线(50-99)
     * @param integer $ReservesDeadline 清理停止时的储量截至线(>0,小于ReservesLimit)
     * @param integer $DayLimit 触发清理的存储天数(>=1)
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
        if (array_key_exists("ReservesLimit",$param) and $param["ReservesLimit"] !== null) {
            $this->ReservesLimit = $param["ReservesLimit"];
        }

        if (array_key_exists("ReservesDeadline",$param) and $param["ReservesDeadline"] !== null) {
            $this->ReservesDeadline = $param["ReservesDeadline"];
        }

        if (array_key_exists("DayLimit",$param) and $param["DayLimit"] !== null) {
            $this->DayLimit = $param["DayLimit"];
        }
    }
}
