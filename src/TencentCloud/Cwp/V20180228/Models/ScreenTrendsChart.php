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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏攻防趋势图
 *
 * @method string getX() 获取X轴 时间
 * @method void setX(string $X) 设置X轴 时间
 * @method integer getY() 获取Y轴 数值
 * @method void setY(integer $Y) 设置Y轴 数值
 * @method string getType() 获取统计分类类型 值：防御次数，攻击次数
 * @method void setType(string $Type) 设置统计分类类型 值：防御次数，攻击次数
 */
class ScreenTrendsChart extends AbstractModel
{
    /**
     * @var string X轴 时间
     */
    public $X;

    /**
     * @var integer Y轴 数值
     */
    public $Y;

    /**
     * @var string 统计分类类型 值：防御次数，攻击次数
     */
    public $Type;

    /**
     * @param string $X X轴 时间
     * @param integer $Y Y轴 数值
     * @param string $Type 统计分类类型 值：防御次数，攻击次数
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
