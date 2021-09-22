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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暴力破解判定规则列表
 *
 * @method integer getTimeRange() 获取爆破事件发生的时间范围，单位：秒
 * @method void setTimeRange(integer $TimeRange) 设置爆破事件发生的时间范围，单位：秒
 * @method integer getLoginFailTimes() 获取爆破事件失败次数
 * @method void setLoginFailTimes(integer $LoginFailTimes) 设置爆破事件失败次数
 * @method boolean getEnable() 获取规则是否为空，为空则填充默认规则
 * @method void setEnable(boolean $Enable) 设置规则是否为空，为空则填充默认规则
 * @method integer getTimeRangeDefault() 获取爆破事件发生的时间范围，单位：秒（默认规则）
 * @method void setTimeRangeDefault(integer $TimeRangeDefault) 设置爆破事件发生的时间范围，单位：秒（默认规则）
 * @method integer getLoginFailTimesDefault() 获取爆破事件失败次数（默认规则）
 * @method void setLoginFailTimesDefault(integer $LoginFailTimesDefault) 设置爆破事件失败次数（默认规则）
 */
class BruteAttackRuleList extends AbstractModel
{
    /**
     * @var integer 爆破事件发生的时间范围，单位：秒
     */
    public $TimeRange;

    /**
     * @var integer 爆破事件失败次数
     */
    public $LoginFailTimes;

    /**
     * @var boolean 规则是否为空，为空则填充默认规则
     */
    public $Enable;

    /**
     * @var integer 爆破事件发生的时间范围，单位：秒（默认规则）
     */
    public $TimeRangeDefault;

    /**
     * @var integer 爆破事件失败次数（默认规则）
     */
    public $LoginFailTimesDefault;

    /**
     * @param integer $TimeRange 爆破事件发生的时间范围，单位：秒
     * @param integer $LoginFailTimes 爆破事件失败次数
     * @param boolean $Enable 规则是否为空，为空则填充默认规则
     * @param integer $TimeRangeDefault 爆破事件发生的时间范围，单位：秒（默认规则）
     * @param integer $LoginFailTimesDefault 爆破事件失败次数（默认规则）
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("LoginFailTimes",$param) and $param["LoginFailTimes"] !== null) {
            $this->LoginFailTimes = $param["LoginFailTimes"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TimeRangeDefault",$param) and $param["TimeRangeDefault"] !== null) {
            $this->TimeRangeDefault = $param["TimeRangeDefault"];
        }

        if (array_key_exists("LoginFailTimesDefault",$param) and $param["LoginFailTimesDefault"] !== null) {
            $this->LoginFailTimesDefault = $param["LoginFailTimesDefault"];
        }
    }
}
