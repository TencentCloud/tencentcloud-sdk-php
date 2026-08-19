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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暴力破解判定规则列表
 *
 * @method integer getTimeRange() 获取<p>爆破事件发生的时间范围，单位：秒</p>
 * @method void setTimeRange(integer $TimeRange) 设置<p>爆破事件发生的时间范围，单位：秒</p>
 * @method integer getLoginFailTimes() 获取<p>爆破事件失败次数</p>
 * @method void setLoginFailTimes(integer $LoginFailTimes) 设置<p>爆破事件失败次数</p>
 * @method boolean getEnable() 获取<p>规则是否为空，为空则填充默认规则</p>
 * @method void setEnable(boolean $Enable) 设置<p>规则是否为空，为空则填充默认规则</p>
 * @method integer getTimeRangeDefault() 获取<p>爆破事件发生的时间范围，单位：秒（默认规则）</p>
 * @method void setTimeRangeDefault(integer $TimeRangeDefault) 设置<p>爆破事件发生的时间范围，单位：秒（默认规则）</p>
 * @method integer getLoginFailTimesDefault() 获取<p>爆破事件失败次数（默认规则）</p>
 * @method void setLoginFailTimesDefault(integer $LoginFailTimesDefault) 设置<p>爆破事件失败次数（默认规则）</p>
 */
class BruteAttackRuleList extends AbstractModel
{
    /**
     * @var integer <p>爆破事件发生的时间范围，单位：秒</p>
     */
    public $TimeRange;

    /**
     * @var integer <p>爆破事件失败次数</p>
     */
    public $LoginFailTimes;

    /**
     * @var boolean <p>规则是否为空，为空则填充默认规则</p>
     */
    public $Enable;

    /**
     * @var integer <p>爆破事件发生的时间范围，单位：秒（默认规则）</p>
     */
    public $TimeRangeDefault;

    /**
     * @var integer <p>爆破事件失败次数（默认规则）</p>
     */
    public $LoginFailTimesDefault;

    /**
     * @param integer $TimeRange <p>爆破事件发生的时间范围，单位：秒</p>
     * @param integer $LoginFailTimes <p>爆破事件失败次数</p>
     * @param boolean $Enable <p>规则是否为空，为空则填充默认规则</p>
     * @param integer $TimeRangeDefault <p>爆破事件发生的时间范围，单位：秒（默认规则）</p>
     * @param integer $LoginFailTimesDefault <p>爆破事件失败次数（默认规则）</p>
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
