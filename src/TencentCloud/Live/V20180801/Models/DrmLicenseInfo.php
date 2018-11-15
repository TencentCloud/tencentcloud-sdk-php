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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDrmType() 获取drm类型，widevine或fairplay
 * @method void setDrmType(string $DrmType) 设置drm类型，widevine或fairplay
 * @method string getLicenseReq() 获取base64编码后的License请求。
 * @method void setLicenseReq(string $LicenseReq) 设置base64编码后的License请求。
 * @method PlaybackPolicy getPlaybackPolicy() 获取播放策略参数
 * @method void setPlaybackPolicy(PlaybackPolicy $PlaybackPolicy) 设置播放策略参数
 */

/**
 *DrmLicense信息
 */
class DrmLicenseInfo extends AbstractModel
{
    /**
     * @var string drm类型，widevine或fairplay
     */
    public $DrmType;

    /**
     * @var string base64编码后的License请求。
     */
    public $LicenseReq;

    /**
     * @var PlaybackPolicy 播放策略参数
     */
    public $PlaybackPolicy;
    /**
     * @param string $DrmType drm类型，widevine或fairplay
     * @param string $LicenseReq base64编码后的License请求。
     * @param PlaybackPolicy $PlaybackPolicy 播放策略参数
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("LicenseReq",$param) and $param["LicenseReq"] !== null) {
            $this->LicenseReq = $param["LicenseReq"];
        }

        if (array_key_exists("PlaybackPolicy",$param) and $param["PlaybackPolicy"] !== null) {
            $this->PlaybackPolicy = new PlaybackPolicy();
            $this->PlaybackPolicy->deserialize($param["PlaybackPolicy"]);
        }
    }
}
