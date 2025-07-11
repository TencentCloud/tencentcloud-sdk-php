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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流SEI参数
 *
 * @method McuLayoutVolume getLayoutVolume() 获取音量布局SEI
 * @method void setLayoutVolume(McuLayoutVolume $LayoutVolume) 设置音量布局SEI
 * @method McuPassThrough getPassThrough() 获取透传SEI
 * @method void setPassThrough(McuPassThrough $PassThrough) 设置透传SEI
 */
class McuSeiParams extends AbstractModel
{
    /**
     * @var McuLayoutVolume 音量布局SEI
     */
    public $LayoutVolume;

    /**
     * @var McuPassThrough 透传SEI
     */
    public $PassThrough;

    /**
     * @param McuLayoutVolume $LayoutVolume 音量布局SEI
     * @param McuPassThrough $PassThrough 透传SEI
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
        if (array_key_exists("LayoutVolume",$param) and $param["LayoutVolume"] !== null) {
            $this->LayoutVolume = new McuLayoutVolume();
            $this->LayoutVolume->deserialize($param["LayoutVolume"]);
        }

        if (array_key_exists("PassThrough",$param) and $param["PassThrough"] !== null) {
            $this->PassThrough = new McuPassThrough();
            $this->PassThrough->deserialize($param["PassThrough"]);
        }
    }
}
