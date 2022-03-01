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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构成监控数据图的曲线坐标点
 *
 * @method string getLabel() 获取当前坐标 X轴的值 当前是日期格式:"yyyy-MM-dd HH:mm:ss"
 * @method void setLabel(string $Label) 设置当前坐标 X轴的值 当前是日期格式:"yyyy-MM-dd HH:mm:ss"
 * @method string getValue() 获取当前坐标 Y轴的值
 * @method void setValue(string $Value) 设置当前坐标 Y轴的值
 * @method string getTimestamp() 获取该坐标点时间戳
 * @method void setTimestamp(string $Timestamp) 设置该坐标点时间戳
 */
class CurvePoint extends AbstractModel
{
    /**
     * @var string 当前坐标 X轴的值 当前是日期格式:"yyyy-MM-dd HH:mm:ss"
     */
    public $Label;

    /**
     * @var string 当前坐标 Y轴的值
     */
    public $Value;

    /**
     * @var string 该坐标点时间戳
     */
    public $Timestamp;

    /**
     * @param string $Label 当前坐标 X轴的值 当前是日期格式:"yyyy-MM-dd HH:mm:ss"
     * @param string $Value 当前坐标 Y轴的值
     * @param string $Timestamp 该坐标点时间戳
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
