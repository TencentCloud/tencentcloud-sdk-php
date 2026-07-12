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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token 限额期望状态
 *
 * @method string getCycleUnit() 获取<p>限额周期，必填。取值：d（按日）、m（按月）、lifetime（总额度）。</p>
 * @method void setCycleUnit(string $CycleUnit) 设置<p>限额周期，必填。取值：d（按日）、m（按月）、lifetime（总额度）。</p>
 * @method string getCycleCredits() 获取<p>单周期额度（Token 数），必填，不能大于10万亿。使用字符串避免大数精度丢失。同维度若与现网不同视为升配/降配。</p>
 * @method void setCycleCredits(string $CycleCredits) 设置<p>单周期额度（Token 数），必填，不能大于10万亿。使用字符串避免大数精度丢失。同维度若与现网不同视为升配/降配。</p>
 * @method integer getMonthStartDay() 获取<p>月度限额起始日。CycleUnit=m 时可选，1~31，默认 1。小月（如 2 月）由下游自动取该月最后一天。已有月度限额包时，更新月起始日视为周期窗口切换，会 delete 旧包后 add 新包，累计额度会重置</p>
 * @method void setMonthStartDay(integer $MonthStartDay) 设置<p>月度限额起始日。CycleUnit=m 时可选，1~31，默认 1。小月（如 2 月）由下游自动取该月最后一天。已有月度限额包时，更新月起始日视为周期窗口切换，会 delete 旧包后 add 新包，累计额度会重置</p>
 */
class QuotasDesired extends AbstractModel
{
    /**
     * @var string <p>限额周期，必填。取值：d（按日）、m（按月）、lifetime（总额度）。</p>
     */
    public $CycleUnit;

    /**
     * @var string <p>单周期额度（Token 数），必填，不能大于10万亿。使用字符串避免大数精度丢失。同维度若与现网不同视为升配/降配。</p>
     */
    public $CycleCredits;

    /**
     * @var integer <p>月度限额起始日。CycleUnit=m 时可选，1~31，默认 1。小月（如 2 月）由下游自动取该月最后一天。已有月度限额包时，更新月起始日视为周期窗口切换，会 delete 旧包后 add 新包，累计额度会重置</p>
     */
    public $MonthStartDay;

    /**
     * @param string $CycleUnit <p>限额周期，必填。取值：d（按日）、m（按月）、lifetime（总额度）。</p>
     * @param string $CycleCredits <p>单周期额度（Token 数），必填，不能大于10万亿。使用字符串避免大数精度丢失。同维度若与现网不同视为升配/降配。</p>
     * @param integer $MonthStartDay <p>月度限额起始日。CycleUnit=m 时可选，1~31，默认 1。小月（如 2 月）由下游自动取该月最后一天。已有月度限额包时，更新月起始日视为周期窗口切换，会 delete 旧包后 add 新包，累计额度会重置</p>
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
        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("CycleCredits",$param) and $param["CycleCredits"] !== null) {
            $this->CycleCredits = $param["CycleCredits"];
        }

        if (array_key_exists("MonthStartDay",$param) and $param["MonthStartDay"] !== null) {
            $this->MonthStartDay = $param["MonthStartDay"];
        }
    }
}
