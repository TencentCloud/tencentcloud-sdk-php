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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前统计维度解析量小计
 *
 * @method integer getNum() 获取当前统计维度解析量小计
 * @method void setNum(integer $Num) 设置当前统计维度解析量小计
 * @method string getDateKey() 获取按天统计时，为统计日期
 * @method void setDateKey(string $DateKey) 设置按天统计时，为统计日期
 * @method integer getHourKey() 获取按小时统计时，为统计的当前时间的小时数(0-23)，例：HourKey为23时，统计周期为22点-23点的解析量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHourKey(integer $HourKey) 设置按小时统计时，为统计的当前时间的小时数(0-23)，例：HourKey为23时，统计周期为22点-23点的解析量
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainAnalyticsDetail extends AbstractModel
{
    /**
     * @var integer 当前统计维度解析量小计
     */
    public $Num;

    /**
     * @var string 按天统计时，为统计日期
     */
    public $DateKey;

    /**
     * @var integer 按小时统计时，为统计的当前时间的小时数(0-23)，例：HourKey为23时，统计周期为22点-23点的解析量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HourKey;

    /**
     * @param integer $Num 当前统计维度解析量小计
     * @param string $DateKey 按天统计时，为统计日期
     * @param integer $HourKey 按小时统计时，为统计的当前时间的小时数(0-23)，例：HourKey为23时，统计周期为22点-23点的解析量
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("DateKey",$param) and $param["DateKey"] !== null) {
            $this->DateKey = $param["DateKey"];
        }

        if (array_key_exists("HourKey",$param) and $param["HourKey"] !== null) {
            $this->HourKey = $param["HourKey"];
        }
    }
}
