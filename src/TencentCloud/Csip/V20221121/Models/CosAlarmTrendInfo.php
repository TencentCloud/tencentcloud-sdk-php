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
 * cos每日告警/风险信息
 *
 * @method string getCurrentDateStr() 获取当前日期字符串格式
 * @method void setCurrentDateStr(string $CurrentDateStr) 设置当前日期字符串格式
 * @method integer getCurrentDayCount() 获取当前日期总数
 * @method void setCurrentDayCount(integer $CurrentDayCount) 设置当前日期总数
 * @method array getCurrentDayOverView() 获取当天告警分类详情
 * @method void setCurrentDayOverView(array $CurrentDayOverView) 设置当天告警分类详情
 */
class CosAlarmTrendInfo extends AbstractModel
{
    /**
     * @var string 当前日期字符串格式
     */
    public $CurrentDateStr;

    /**
     * @var integer 当前日期总数
     */
    public $CurrentDayCount;

    /**
     * @var array 当天告警分类详情
     */
    public $CurrentDayOverView;

    /**
     * @param string $CurrentDateStr 当前日期字符串格式
     * @param integer $CurrentDayCount 当前日期总数
     * @param array $CurrentDayOverView 当天告警分类详情
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
        if (array_key_exists("CurrentDateStr",$param) and $param["CurrentDateStr"] !== null) {
            $this->CurrentDateStr = $param["CurrentDateStr"];
        }

        if (array_key_exists("CurrentDayCount",$param) and $param["CurrentDayCount"] !== null) {
            $this->CurrentDayCount = $param["CurrentDayCount"];
        }

        if (array_key_exists("CurrentDayOverView",$param) and $param["CurrentDayOverView"] !== null) {
            $this->CurrentDayOverView = [];
            foreach ($param["CurrentDayOverView"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->CurrentDayOverView, $obj);
            }
        }
    }
}
