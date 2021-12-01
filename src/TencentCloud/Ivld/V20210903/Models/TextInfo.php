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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可视文本识别结果信息(OCR)
 *
 * @method string getContent() 获取OCR提取的内容
 * @method void setContent(string $Content) 设置OCR提取的内容
 * @method float getStartTimeStamp() 获取OCR起始时间戳，从0开始
 * @method void setStartTimeStamp(float $StartTimeStamp) 设置OCR起始时间戳，从0开始
 * @method float getEndTimeStamp() 获取OCR结束时间戳，从0开始
 * @method void setEndTimeStamp(float $EndTimeStamp) 设置OCR结束时间戳，从0开始
 * @method string getTag() 获取OCR标签信息
 * @method void setTag(string $Tag) 设置OCR标签信息
 */
class TextInfo extends AbstractModel
{
    /**
     * @var string OCR提取的内容
     */
    public $Content;

    /**
     * @var float OCR起始时间戳，从0开始
     */
    public $StartTimeStamp;

    /**
     * @var float OCR结束时间戳，从0开始
     */
    public $EndTimeStamp;

    /**
     * @var string OCR标签信息
     */
    public $Tag;

    /**
     * @param string $Content OCR提取的内容
     * @param float $StartTimeStamp OCR起始时间戳，从0开始
     * @param float $EndTimeStamp OCR结束时间戳，从0开始
     * @param string $Tag OCR标签信息
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
