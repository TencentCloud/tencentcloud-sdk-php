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
 * AI 生成商品360度展示视频参数配置
 *
 * @method string getCameraMovement() 获取镜头运动方式。支持的值：AutoMatch（自动匹配）、ZoomIn（推进）、ZoomOut（拉远）、GlideRight（右移）、GlideLeft（左移）、CraneDown（下降）
 * @method void setCameraMovement(string $CameraMovement) 设置镜头运动方式。支持的值：AutoMatch（自动匹配）、ZoomIn（推进）、ZoomOut（拉远）、GlideRight（右移）、GlideLeft（左移）、CraneDown（下降）
 */
class ProductShowcaseConfig extends AbstractModel
{
    /**
     * @var string 镜头运动方式。支持的值：AutoMatch（自动匹配）、ZoomIn（推进）、ZoomOut（拉远）、GlideRight（右移）、GlideLeft（左移）、CraneDown（下降）
     */
    public $CameraMovement;

    /**
     * @param string $CameraMovement 镜头运动方式。支持的值：AutoMatch（自动匹配）、ZoomIn（推进）、ZoomOut（拉远）、GlideRight（右移）、GlideLeft（左移）、CraneDown（下降）
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
        if (array_key_exists("CameraMovement",$param) and $param["CameraMovement"] !== null) {
            $this->CameraMovement = $param["CameraMovement"];
        }
    }
}
