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
 * 关键词在视觉结果中的定位信息
 *
 * @method float getStartTimeStamp() 获取视觉信息起始时间戳，从0开始
 * @method void setStartTimeStamp(float $StartTimeStamp) 设置视觉信息起始时间戳，从0开始
 * @method float getEndTimeStamp() 获取视觉信息终止时间戳，从0开始
关键词在视觉信息中的区间为[StartTimeStamp, EndTimeStamp)
 * @method void setEndTimeStamp(float $EndTimeStamp) 设置视觉信息终止时间戳，从0开始
关键词在视觉信息中的区间为[StartTimeStamp, EndTimeStamp)
 * @method string getImageURL() 获取关键词在视觉信息中的封面图片
 * @method void setImageURL(string $ImageURL) 设置关键词在视觉信息中的封面图片
 */
class VideoAppearInfo extends AbstractModel
{
    /**
     * @var float 视觉信息起始时间戳，从0开始
     */
    public $StartTimeStamp;

    /**
     * @var float 视觉信息终止时间戳，从0开始
关键词在视觉信息中的区间为[StartTimeStamp, EndTimeStamp)
     */
    public $EndTimeStamp;

    /**
     * @var string 关键词在视觉信息中的封面图片
     */
    public $ImageURL;

    /**
     * @param float $StartTimeStamp 视觉信息起始时间戳，从0开始
     * @param float $EndTimeStamp 视觉信息终止时间戳，从0开始
关键词在视觉信息中的区间为[StartTimeStamp, EndTimeStamp)
     * @param string $ImageURL 关键词在视觉信息中的封面图片
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }
    }
}
