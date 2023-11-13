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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按天更新的表的资产评分
 *
 * @method string getTableId() 获取表ID
 * @method void setTableId(string $TableId) 设置表ID
 * @method string getDayTime() 获取统计日期
 * @method void setDayTime(string $DayTime) 设置统计日期
 * @method float getIntegrity() 获取表完整性评分
 * @method void setIntegrity(float $Integrity) 设置表完整性评分
 * @method float getSafety() 获取表保障性评分
 * @method void setSafety(float $Safety) 设置表保障性评分
 * @method float getTimeliness() 获取表及时性评分
 * @method void setTimeliness(float $Timeliness) 设置表及时性评分
 * @method float getStability() 获取表稳定性评分
 * @method void setStability(float $Stability) 设置表稳定性评分
 * @method float getNormative() 获取表规范性评分
 * @method void setNormative(float $Normative) 设置表规范性评分
 * @method float getAverage() 获取资产评分平均分
 * @method void setAverage(float $Average) 设置资产评分平均分
 */
class TablePropertyScore extends AbstractModel
{
    /**
     * @var string 表ID
     */
    public $TableId;

    /**
     * @var string 统计日期
     */
    public $DayTime;

    /**
     * @var float 表完整性评分
     */
    public $Integrity;

    /**
     * @var float 表保障性评分
     */
    public $Safety;

    /**
     * @var float 表及时性评分
     */
    public $Timeliness;

    /**
     * @var float 表稳定性评分
     */
    public $Stability;

    /**
     * @var float 表规范性评分
     */
    public $Normative;

    /**
     * @var float 资产评分平均分
     */
    public $Average;

    /**
     * @param string $TableId 表ID
     * @param string $DayTime 统计日期
     * @param float $Integrity 表完整性评分
     * @param float $Safety 表保障性评分
     * @param float $Timeliness 表及时性评分
     * @param float $Stability 表稳定性评分
     * @param float $Normative 表规范性评分
     * @param float $Average 资产评分平均分
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("Integrity",$param) and $param["Integrity"] !== null) {
            $this->Integrity = $param["Integrity"];
        }

        if (array_key_exists("Safety",$param) and $param["Safety"] !== null) {
            $this->Safety = $param["Safety"];
        }

        if (array_key_exists("Timeliness",$param) and $param["Timeliness"] !== null) {
            $this->Timeliness = $param["Timeliness"];
        }

        if (array_key_exists("Stability",$param) and $param["Stability"] !== null) {
            $this->Stability = $param["Stability"];
        }

        if (array_key_exists("Normative",$param) and $param["Normative"] !== null) {
            $this->Normative = $param["Normative"];
        }

        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = $param["Average"];
        }
    }
}
