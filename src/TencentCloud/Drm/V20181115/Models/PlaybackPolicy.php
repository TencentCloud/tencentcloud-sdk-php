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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放控制参数
 *
 * @method integer getLicenseDurationSeconds() 获取<p>播放许可证的有效期</p><p>单位：秒</p>
 * @method void setLicenseDurationSeconds(integer $LicenseDurationSeconds) 设置<p>播放许可证的有效期</p><p>单位：秒</p>
 * @method integer getPlaybackDurationSeconds() 获取<p>开始播放后，允许最长播放时间</p><p>单位：秒</p>
 * @method void setPlaybackDurationSeconds(integer $PlaybackDurationSeconds) 设置<p>开始播放后，允许最长播放时间</p><p>单位：秒</p>
 */
class PlaybackPolicy extends AbstractModel
{
    /**
     * @var integer <p>播放许可证的有效期</p><p>单位：秒</p>
     */
    public $LicenseDurationSeconds;

    /**
     * @var integer <p>开始播放后，允许最长播放时间</p><p>单位：秒</p>
     */
    public $PlaybackDurationSeconds;

    /**
     * @param integer $LicenseDurationSeconds <p>播放许可证的有效期</p><p>单位：秒</p>
     * @param integer $PlaybackDurationSeconds <p>开始播放后，允许最长播放时间</p><p>单位：秒</p>
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
        if (array_key_exists("LicenseDurationSeconds",$param) and $param["LicenseDurationSeconds"] !== null) {
            $this->LicenseDurationSeconds = $param["LicenseDurationSeconds"];
        }

        if (array_key_exists("PlaybackDurationSeconds",$param) and $param["PlaybackDurationSeconds"] !== null) {
            $this->PlaybackDurationSeconds = $param["PlaybackDurationSeconds"];
        }
    }
}
