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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间轴事件
 *
 * @method string getType() 获取事件类型
 * @method void setType(string $Type) 设置事件类型
 * @method string getSrc() 获取原文本
 * @method void setSrc(string $Src) 设置原文本
 * @method string getSubType() 获取事件子类型
 * @method void setSubType(string $SubType) 设置事件子类型
 * @method string getTime() 获取事件发生时间
 * @method void setTime(string $Time) 设置事件发生时间
 * @method string getValue() 获取事件值
 * @method void setValue(string $Value) 设置事件值
 * @method Rectangle getRectangle() 获取位置坐标
 * @method void setRectangle(Rectangle $Rectangle) 设置位置坐标
 * @method string getPlace() 获取事件发生地点
 * @method void setPlace(string $Place) 设置事件发生地点
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class TimelineEvent extends AbstractModel
{
    /**
     * @var string 事件类型
     */
    public $Type;

    /**
     * @var string 原文本
     */
    public $Src;

    /**
     * @var string 事件子类型
     */
    public $SubType;

    /**
     * @var string 事件发生时间
     */
    public $Time;

    /**
     * @var string 事件值
     */
    public $Value;

    /**
     * @var Rectangle 位置坐标
     */
    public $Rectangle;

    /**
     * @var string 事件发生地点
     */
    public $Place;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param string $Type 事件类型
     * @param string $Src 原文本
     * @param string $SubType 事件子类型
     * @param string $Time 事件发生时间
     * @param string $Value 事件值
     * @param Rectangle $Rectangle 位置坐标
     * @param string $Place 事件发生地点
     * @param string $EndTime 结束时间
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Rectangle",$param) and $param["Rectangle"] !== null) {
            $this->Rectangle = new Rectangle();
            $this->Rectangle->deserialize($param["Rectangle"]);
        }

        if (array_key_exists("Place",$param) and $param["Place"] !== null) {
            $this->Place = $param["Place"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
