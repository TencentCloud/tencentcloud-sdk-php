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
 * @method boolean getMonday() 获取按周期扩容时，是否选择周一扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setMonday(boolean $Monday) 设置按周期扩容时，是否选择周一扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getTuesday() 获取按周期扩容时，是否选择周二扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setTuesday(boolean $Tuesday) 设置按周期扩容时，是否选择周二扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getWednesday() 获取按周期扩容时，是否选择周三扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setWednesday(boolean $Wednesday) 设置按周期扩容时，是否选择周三扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getThursday() 获取按周期扩容时，是否选择周四扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setThursday(boolean $Thursday) 设置按周期扩容时，是否选择周四扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getFriday() 获取按周期扩容时，是否选择周五扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setFriday(boolean $Friday) 设置按周期扩容时，是否选择周五扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getSaturday() 获取按周期扩容时，是否选择周六扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setSaturday(boolean $Saturday) 设置按周期扩容时，是否选择周六扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method boolean getSunday() 获取按周期扩容时，是否选择周日扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 * @method void setSunday(boolean $Sunday) 设置按周期扩容时，是否选择周日扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
 */
class TImeCycle extends AbstractModel
{
    /**
     * @var boolean 按周期扩容时，是否选择周一扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Monday;

    /**
     * @var boolean 按周期扩容时，是否选择周二扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Tuesday;

    /**
     * @var boolean 按周期扩容时，是否选择周三扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Wednesday;

    /**
     * @var boolean 按周期扩容时，是否选择周四扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Thursday;

    /**
     * @var boolean 按周期扩容时，是否选择周五扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Friday;

    /**
     * @var boolean 按周期扩容时，是否选择周六扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Saturday;

    /**
     * @var boolean 按周期扩容时，是否选择周日扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     */
    public $Sunday;

    /**
     * @param boolean $Monday 按周期扩容时，是否选择周一扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Tuesday 按周期扩容时，是否选择周二扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Wednesday 按周期扩容时，是否选择周三扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Thursday 按周期扩容时，是否选择周四扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Friday 按周期扩容时，是否选择周五扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Saturday 按周期扩容时，是否选择周六扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
     * @param boolean $Sunday 按周期扩容时，是否选择周日扩容。
说明：取值 true，表示选择，取值 false，表示不选择。
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
