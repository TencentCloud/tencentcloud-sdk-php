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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字人背景信息。
 *
 * @method string getBackgroundId() 获取背景 ID。
 * @method void setBackgroundId(string $BackgroundId) 设置背景 ID。
 * @method string getScene() 获取背景场景。如：带货，娱乐等。
 * @method void setScene(string $Scene) 设置背景场景。如：带货，娱乐等。
 * @method string getVerticalImageUrl() 获取竖屏背景图片 URL。
 * @method void setVerticalImageUrl(string $VerticalImageUrl) 设置竖屏背景图片 URL。
 * @method string getHorizontalImageUrl() 获取横屏背景图片 URL。
 * @method void setHorizontalImageUrl(string $HorizontalImageUrl) 设置横屏背景图片 URL。
 */
class AvatarBackgroundInfo extends AbstractModel
{
    /**
     * @var string 背景 ID。
     */
    public $BackgroundId;

    /**
     * @var string 背景场景。如：带货，娱乐等。
     */
    public $Scene;

    /**
     * @var string 竖屏背景图片 URL。
     */
    public $VerticalImageUrl;

    /**
     * @var string 横屏背景图片 URL。
     */
    public $HorizontalImageUrl;

    /**
     * @param string $BackgroundId 背景 ID。
     * @param string $Scene 背景场景。如：带货，娱乐等。
     * @param string $VerticalImageUrl 竖屏背景图片 URL。
     * @param string $HorizontalImageUrl 横屏背景图片 URL。
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
        if (array_key_exists("BackgroundId",$param) and $param["BackgroundId"] !== null) {
            $this->BackgroundId = $param["BackgroundId"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("VerticalImageUrl",$param) and $param["VerticalImageUrl"] !== null) {
            $this->VerticalImageUrl = $param["VerticalImageUrl"];
        }

        if (array_key_exists("HorizontalImageUrl",$param) and $param["HorizontalImageUrl"] !== null) {
            $this->HorizontalImageUrl = $param["HorizontalImageUrl"];
        }
    }
}
