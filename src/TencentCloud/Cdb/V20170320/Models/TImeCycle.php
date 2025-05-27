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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容的周期
 *
 * @method boolean getMonday() 获取周一的扩容时间段
 * @method void setMonday(boolean $Monday) 设置周一的扩容时间段
 * @method boolean getTuesday() 获取周二的扩容时间段
 * @method void setTuesday(boolean $Tuesday) 设置周二的扩容时间段
 * @method boolean getWednesday() 获取周三的扩容时间段
 * @method void setWednesday(boolean $Wednesday) 设置周三的扩容时间段
 * @method boolean getThursday() 获取周四的扩容时间段
 * @method void setThursday(boolean $Thursday) 设置周四的扩容时间段
 * @method boolean getFriday() 获取周五的扩容时间段
 * @method void setFriday(boolean $Friday) 设置周五的扩容时间段
 * @method boolean getSaturday() 获取周六的扩容时间段
 * @method void setSaturday(boolean $Saturday) 设置周六的扩容时间段
 * @method boolean getSunday() 获取周日的扩容时间段
 * @method void setSunday(boolean $Sunday) 设置周日的扩容时间段
 */
class TImeCycle extends AbstractModel
{
    /**
     * @var boolean 周一的扩容时间段
     */
    public $Monday;

    /**
     * @var boolean 周二的扩容时间段
     */
    public $Tuesday;

    /**
     * @var boolean 周三的扩容时间段
     */
    public $Wednesday;

    /**
     * @var boolean 周四的扩容时间段
     */
    public $Thursday;

    /**
     * @var boolean 周五的扩容时间段
     */
    public $Friday;

    /**
     * @var boolean 周六的扩容时间段
     */
    public $Saturday;

    /**
     * @var boolean 周日的扩容时间段
     */
    public $Sunday;

    /**
     * @param boolean $Monday 周一的扩容时间段
     * @param boolean $Tuesday 周二的扩容时间段
     * @param boolean $Wednesday 周三的扩容时间段
     * @param boolean $Thursday 周四的扩容时间段
     * @param boolean $Friday 周五的扩容时间段
     * @param boolean $Saturday 周六的扩容时间段
     * @param boolean $Sunday 周日的扩容时间段
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }
    }
}
