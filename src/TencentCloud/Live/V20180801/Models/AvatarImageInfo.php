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
 * 数字人形象信息。
 *
 * @method float getOriginZoom() 获取数字人原始缩放系数。数字人展示大小=原始大小*缩放系数。
 * @method void setOriginZoom(float $OriginZoom) 设置数字人原始缩放系数。数字人展示大小=原始大小*缩放系数。
 * @method string getAvatarKey() 获取数字人KEY。
 * @method void setAvatarKey(string $AvatarKey) 设置数字人KEY。
 * @method string getResolution() 获取分辨率。
 * @method void setResolution(string $Resolution) 设置分辨率。
 */
class AvatarImageInfo extends AbstractModel
{
    /**
     * @var float 数字人原始缩放系数。数字人展示大小=原始大小*缩放系数。
     */
    public $OriginZoom;

    /**
     * @var string 数字人KEY。
     */
    public $AvatarKey;

    /**
     * @var string 分辨率。
     */
    public $Resolution;

    /**
     * @param float $OriginZoom 数字人原始缩放系数。数字人展示大小=原始大小*缩放系数。
     * @param string $AvatarKey 数字人KEY。
     * @param string $Resolution 分辨率。
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
        if (array_key_exists("OriginZoom",$param) and $param["OriginZoom"] !== null) {
            $this->OriginZoom = $param["OriginZoom"];
        }

        if (array_key_exists("AvatarKey",$param) and $param["AvatarKey"] !== null) {
            $this->AvatarKey = $param["AvatarKey"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
