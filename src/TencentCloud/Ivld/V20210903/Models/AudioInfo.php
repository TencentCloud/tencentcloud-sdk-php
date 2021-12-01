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
 * 音频识别结果信息
 *
 * @method string getContent() 获取ASR提取的文字信息
 * @method void setContent(string $Content) 设置ASR提取的文字信息
 * @method float getStartTimeStamp() 获取ASR起始时间戳，从0开始
 * @method void setStartTimeStamp(float $StartTimeStamp) 设置ASR起始时间戳，从0开始
 * @method float getEndTimeStamp() 获取ASR结束时间戳，从0开始
 * @method void setEndTimeStamp(float $EndTimeStamp) 设置ASR结束时间戳，从0开始
 * @method string getTag() 获取ASR提取的音频标签
 * @method void setTag(string $Tag) 设置ASR提取的音频标签
 */
class AudioInfo extends AbstractModel
{
    /**
     * @var string ASR提取的文字信息
     */
    public $Content;

    /**
     * @var float ASR起始时间戳，从0开始
     */
    public $StartTimeStamp;

    /**
     * @var float ASR结束时间戳，从0开始
     */
    public $EndTimeStamp;

    /**
     * @var string ASR提取的音频标签
     */
    public $Tag;

    /**
     * @param string $Content ASR提取的文字信息
     * @param float $StartTimeStamp ASR起始时间戳，从0开始
     * @param float $EndTimeStamp ASR结束时间戳，从0开始
     * @param string $Tag ASR提取的音频标签
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
