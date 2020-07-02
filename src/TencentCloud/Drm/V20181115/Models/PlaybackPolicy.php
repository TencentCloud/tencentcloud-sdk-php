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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放控制参数
 *
 * @method integer getLicenseDurationSeconds() 获取播放许可证的有效期
 * @method void setLicenseDurationSeconds(integer $LicenseDurationSeconds) 设置播放许可证的有效期
 * @method integer getPlaybackDurationSeconds() 获取开始播放后，允许最长播放时间
 * @method void setPlaybackDurationSeconds(integer $PlaybackDurationSeconds) 设置开始播放后，允许最长播放时间
 */
class PlaybackPolicy extends AbstractModel
{
    /**
     * @var integer 播放许可证的有效期
     */
    public $LicenseDurationSeconds;

    /**
     * @var integer 开始播放后，允许最长播放时间
     */
    public $PlaybackDurationSeconds;

    /**
     * @param integer $LicenseDurationSeconds 播放许可证的有效期
     * @param integer $PlaybackDurationSeconds 开始播放后，允许最长播放时间
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
        if (array_key_exists('LicenseDurationSeconds',$param) and $param['LicenseDurationSeconds'] !== null) {
            $this->LicenseDurationSeconds = $param['LicenseDurationSeconds'];
        }

        if (array_key_exists('PlaybackDurationSeconds',$param) and $param['PlaybackDurationSeconds'] !== null) {
            $this->PlaybackDurationSeconds = $param['PlaybackDurationSeconds'];
        }
    }
}
