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
 * 策略的周期扫描配置（间隔类型 + 间隔取值 + 扫描时段窗口）。
 *
 * @method integer getEnable() 获取<p>周期扫描开关。0 关闭，1 开启。</p>
 * @method void setEnable(integer $Enable) 设置<p>周期扫描开关。0 关闭，1 开启。</p>
 * @method string getIntervalType() 获取<p>周期扫描的间隔类型。取值：</p><ul><li>DAY：每若干天，IntervalValueList 取间隔天数（如 ["1"] 表示每天）</li><li>WEEK：每周指定星期几，IntervalValueList 取 1~7（周一~周日）</li><li>MONTH：每月指定日期，IntervalValueList 取 1~31</li></ul>
 * @method void setIntervalType(string $IntervalType) 设置<p>周期扫描的间隔类型。取值：</p><ul><li>DAY：每若干天，IntervalValueList 取间隔天数（如 ["1"] 表示每天）</li><li>WEEK：每周指定星期几，IntervalValueList 取 1~7（周一~周日）</li><li>MONTH：每月指定日期，IntervalValueList 取 1~31</li></ul>
 * @method array getIntervalValueList() 获取<p>周期取值列表，含义随 IntervalType 变化：</p><ul><li>IntervalType=DAY：每隔多少天，例如 ["1"] 表示每天</li><li>IntervalType=WEEK：每周的星期几，取值 1~7（周一 ~ 周日）</li><li>IntervalType=MONTH：每月的几号，取值 1~31</li></ul>
 * @method void setIntervalValueList(array $IntervalValueList) 设置<p>周期取值列表，含义随 IntervalType 变化：</p><ul><li>IntervalType=DAY：每隔多少天，例如 ["1"] 表示每天</li><li>IntervalType=WEEK：每周的星期几，取值 1~7（周一 ~ 周日）</li><li>IntervalType=MONTH：每月的几号，取值 1~31</li></ul>
 * @method string getScanStart() 获取<p>扫描时段起始时间，格式 HH:mm，例如 02:00。</p>
 * @method void setScanStart(string $ScanStart) 设置<p>扫描时段起始时间，格式 HH:mm，例如 02:00。</p>
 * @method string getScanEnd() 获取<p>扫描时段结束时间，格式 HH:mm，例如 06:00。</p>
 * @method void setScanEnd(string $ScanEnd) 设置<p>扫描时段结束时间，格式 HH:mm，例如 06:00。</p>
 */
class CycleScanConf extends AbstractModel
{
    /**
     * @var integer <p>周期扫描开关。0 关闭，1 开启。</p>
     */
    public $Enable;

    /**
     * @var string <p>周期扫描的间隔类型。取值：</p><ul><li>DAY：每若干天，IntervalValueList 取间隔天数（如 ["1"] 表示每天）</li><li>WEEK：每周指定星期几，IntervalValueList 取 1~7（周一~周日）</li><li>MONTH：每月指定日期，IntervalValueList 取 1~31</li></ul>
     */
    public $IntervalType;

    /**
     * @var array <p>周期取值列表，含义随 IntervalType 变化：</p><ul><li>IntervalType=DAY：每隔多少天，例如 ["1"] 表示每天</li><li>IntervalType=WEEK：每周的星期几，取值 1~7（周一 ~ 周日）</li><li>IntervalType=MONTH：每月的几号，取值 1~31</li></ul>
     */
    public $IntervalValueList;

    /**
     * @var string <p>扫描时段起始时间，格式 HH:mm，例如 02:00。</p>
     */
    public $ScanStart;

    /**
     * @var string <p>扫描时段结束时间，格式 HH:mm，例如 06:00。</p>
     */
    public $ScanEnd;

    /**
     * @param integer $Enable <p>周期扫描开关。0 关闭，1 开启。</p>
     * @param string $IntervalType <p>周期扫描的间隔类型。取值：</p><ul><li>DAY：每若干天，IntervalValueList 取间隔天数（如 ["1"] 表示每天）</li><li>WEEK：每周指定星期几，IntervalValueList 取 1~7（周一~周日）</li><li>MONTH：每月指定日期，IntervalValueList 取 1~31</li></ul>
     * @param array $IntervalValueList <p>周期取值列表，含义随 IntervalType 变化：</p><ul><li>IntervalType=DAY：每隔多少天，例如 ["1"] 表示每天</li><li>IntervalType=WEEK：每周的星期几，取值 1~7（周一 ~ 周日）</li><li>IntervalType=MONTH：每月的几号，取值 1~31</li></ul>
     * @param string $ScanStart <p>扫描时段起始时间，格式 HH:mm，例如 02:00。</p>
     * @param string $ScanEnd <p>扫描时段结束时间，格式 HH:mm，例如 06:00。</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("IntervalType",$param) and $param["IntervalType"] !== null) {
            $this->IntervalType = $param["IntervalType"];
        }

        if (array_key_exists("IntervalValueList",$param) and $param["IntervalValueList"] !== null) {
            $this->IntervalValueList = $param["IntervalValueList"];
        }

        if (array_key_exists("ScanStart",$param) and $param["ScanStart"] !== null) {
            $this->ScanStart = $param["ScanStart"];
        }

        if (array_key_exists("ScanEnd",$param) and $param["ScanEnd"] !== null) {
            $this->ScanEnd = $param["ScanEnd"];
        }
    }
}
