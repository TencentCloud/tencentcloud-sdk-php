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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 泳道流量灰度规则
 *
 * @method string getMode() 获取流量灰度规则，按比例灰度或预热方式
 * @method void setMode(string $Mode) 设置流量灰度规则，按比例灰度或预热方式
 * @method integer getPercent() 获取按比例灰度的百分比值1-100
 * @method void setPercent(integer $Percent) 设置按比例灰度的百分比值1-100
 * @method integer getIntervalSecond() 获取预热的间隔
 * @method void setIntervalSecond(integer $IntervalSecond) 设置预热的间隔
 * @method integer getCurvature() 获取预热的曲度
 * @method void setCurvature(integer $Curvature) 设置预热的曲度
 */
class TrafficGray extends AbstractModel
{
    /**
     * @var string 流量灰度规则，按比例灰度或预热方式
     */
    public $Mode;

    /**
     * @var integer 按比例灰度的百分比值1-100
     */
    public $Percent;

    /**
     * @var integer 预热的间隔
     */
    public $IntervalSecond;

    /**
     * @var integer 预热的曲度
     */
    public $Curvature;

    /**
     * @param string $Mode 流量灰度规则，按比例灰度或预热方式
     * @param integer $Percent 按比例灰度的百分比值1-100
     * @param integer $IntervalSecond 预热的间隔
     * @param integer $Curvature 预热的曲度
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("IntervalSecond",$param) and $param["IntervalSecond"] !== null) {
            $this->IntervalSecond = $param["IntervalSecond"];
        }

        if (array_key_exists("Curvature",$param) and $param["Curvature"] !== null) {
            $this->Curvature = $param["Curvature"];
        }
    }
}
