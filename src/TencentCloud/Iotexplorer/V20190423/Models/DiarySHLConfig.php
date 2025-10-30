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
 * Diary Simple Highlight 配置
 *
 * @method integer getStartOffset() 获取每个视频偏移时长，单位秒
 * @method void setStartOffset(integer $StartOffset) 设置每个视频偏移时长，单位秒
 * @method integer getPlaySpeed() 获取视频浓缩倍数，支持1,2,4之间
 * @method void setPlaySpeed(integer $PlaySpeed) 设置视频浓缩倍数，支持1,2,4之间
 * @method integer getMiniExtract() 获取单个视频最小提取时长，单位秒
 * @method void setMiniExtract(integer $MiniExtract) 设置单个视频最小提取时长，单位秒
 * @method integer getOutDuration() 获取每天最终输出视频时长，单位秒
注：免费版固定10s
 * @method void setOutDuration(integer $OutDuration) 设置每天最终输出视频时长，单位秒
注：免费版固定10s
 */
class DiarySHLConfig extends AbstractModel
{
    /**
     * @var integer 每个视频偏移时长，单位秒
     */
    public $StartOffset;

    /**
     * @var integer 视频浓缩倍数，支持1,2,4之间
     */
    public $PlaySpeed;

    /**
     * @var integer 单个视频最小提取时长，单位秒
     */
    public $MiniExtract;

    /**
     * @var integer 每天最终输出视频时长，单位秒
注：免费版固定10s
     */
    public $OutDuration;

    /**
     * @param integer $StartOffset 每个视频偏移时长，单位秒
     * @param integer $PlaySpeed 视频浓缩倍数，支持1,2,4之间
     * @param integer $MiniExtract 单个视频最小提取时长，单位秒
     * @param integer $OutDuration 每天最终输出视频时长，单位秒
注：免费版固定10s
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
        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("PlaySpeed",$param) and $param["PlaySpeed"] !== null) {
            $this->PlaySpeed = $param["PlaySpeed"];
        }

        if (array_key_exists("MiniExtract",$param) and $param["MiniExtract"] !== null) {
            $this->MiniExtract = $param["MiniExtract"];
        }

        if (array_key_exists("OutDuration",$param) and $param["OutDuration"] !== null) {
            $this->OutDuration = $param["OutDuration"];
        }
    }
}
