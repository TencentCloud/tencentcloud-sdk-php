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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标检测算法检测到的目标详情
 *
 * @method float getTime() 获取目标出现的媒体时间戳（以图片为输入时始终取值 0）
 * @method void setTime(float $Time) 设置目标出现的媒体时间戳（以图片为输入时始终取值 0）
 * @method string getClassName() 获取目标类别名
 * @method void setClassName(string $ClassName) 设置目标类别名
 * @method array getBoundingBox() 获取目标边界框（坐标顺序为 x1, y1, x2, y2）
 * @method void setBoundingBox(array $BoundingBox) 设置目标边界框（坐标顺序为 x1, y1, x2, y2）
 * @method float getConfidence() 获取置信度（取值范围 0.0 至 1.0）
 * @method void setConfidence(float $Confidence) 设置置信度（取值范围 0.0 至 1.0）
 */
class VisionDetectedObject extends AbstractModel
{
    /**
     * @var float 目标出现的媒体时间戳（以图片为输入时始终取值 0）
     */
    public $Time;

    /**
     * @var string 目标类别名
     */
    public $ClassName;

    /**
     * @var array 目标边界框（坐标顺序为 x1, y1, x2, y2）
     */
    public $BoundingBox;

    /**
     * @var float 置信度（取值范围 0.0 至 1.0）
     */
    public $Confidence;

    /**
     * @param float $Time 目标出现的媒体时间戳（以图片为输入时始终取值 0）
     * @param string $ClassName 目标类别名
     * @param array $BoundingBox 目标边界框（坐标顺序为 x1, y1, x2, y2）
     * @param float $Confidence 置信度（取值范围 0.0 至 1.0）
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = $param["BoundingBox"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
