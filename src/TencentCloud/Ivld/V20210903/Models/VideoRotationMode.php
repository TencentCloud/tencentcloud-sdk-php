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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频横转竖的控制参数
 *
 * @method boolean getActiveVideoRotation() 获取生成的视频是否需要横屏转竖屏。
 * @method void setActiveVideoRotation(boolean $ActiveVideoRotation) 设置生成的视频是否需要横屏转竖屏。
 */
class VideoRotationMode extends AbstractModel
{
    /**
     * @var boolean 生成的视频是否需要横屏转竖屏。
     */
    public $ActiveVideoRotation;

    /**
     * @param boolean $ActiveVideoRotation 生成的视频是否需要横屏转竖屏。
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
        if (array_key_exists("ActiveVideoRotation",$param) and $param["ActiveVideoRotation"] !== null) {
            $this->ActiveVideoRotation = $param["ActiveVideoRotation"];
        }
    }
}
