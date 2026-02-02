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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提取视频转码数字水印任务配置
 *
 * @method integer getSegmentDuration() 获取当提取数字水印类型为blind-abseq时有效，用于指定输入视频的切片时长，单位：毫秒。
如果不填默认切片时长为5秒。
 * @method void setSegmentDuration(integer $SegmentDuration) 设置当提取数字水印类型为blind-abseq时有效，用于指定输入视频的切片时长，单位：毫秒。
如果不填默认切片时长为5秒。
 */
class ExtractBlindWatermarkTaskConfig extends AbstractModel
{
    /**
     * @var integer 当提取数字水印类型为blind-abseq时有效，用于指定输入视频的切片时长，单位：毫秒。
如果不填默认切片时长为5秒。
     */
    public $SegmentDuration;

    /**
     * @param integer $SegmentDuration 当提取数字水印类型为blind-abseq时有效，用于指定输入视频的切片时长，单位：毫秒。
如果不填默认切片时长为5秒。
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
        if (array_key_exists("SegmentDuration",$param) and $param["SegmentDuration"] !== null) {
            $this->SegmentDuration = $param["SegmentDuration"];
        }
    }
}
