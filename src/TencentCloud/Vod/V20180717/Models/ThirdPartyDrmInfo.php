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
 * 第三方Drm 加密信息。
 *
 * @method array getDrmTypes() 获取<p>加密类型：</p><ul><li>FairPlay：只能用于HLS，切片格式只能是mp4</li><li>Widevine：可以用于HLS和DASH，切片格式只能是mp4</li><li>PlayReady：可以用于HLS和DASH，切片格式只能是mp4</li><li>Widevine+FairPlay，PlayReady+FairPlay，Widevine PlayReady FairPlay组合: 只能用于HLS，切片格式只能是mp4</li><li>Widevine PlayReady组合: 可用于HLS、MPEG-DASH，切片格式只能是mp4</li></ul>
 * @method void setDrmTypes(array $DrmTypes) 设置<p>加密类型：</p><ul><li>FairPlay：只能用于HLS，切片格式只能是mp4</li><li>Widevine：可以用于HLS和DASH，切片格式只能是mp4</li><li>PlayReady：可以用于HLS和DASH，切片格式只能是mp4</li><li>Widevine+FairPlay，PlayReady+FairPlay，Widevine PlayReady FairPlay组合: 只能用于HLS，切片格式只能是mp4</li><li>Widevine PlayReady组合: 可用于HLS、MPEG-DASH，切片格式只能是mp4</li></ul>
 * @method SPEKEDrm getSPEKEDrm() 获取<p>第三方DRM厂商信息。</p>
 * @method void setSPEKEDrm(SPEKEDrm $SPEKEDrm) 设置<p>第三方DRM厂商信息。</p>
 */
class ThirdPartyDrmInfo extends AbstractModel
{
    /**
     * @var array <p>加密类型：</p><ul><li>FairPlay：只能用于HLS，切片格式只能是mp4</li><li>Widevine：可以用于HLS和DASH，切片格式只能是mp4</li><li>PlayReady：可以用于HLS和DASH，切片格式只能是mp4</li><li>Widevine+FairPlay，PlayReady+FairPlay，Widevine PlayReady FairPlay组合: 只能用于HLS，切片格式只能是mp4</li><li>Widevine PlayReady组合: 可用于HLS、MPEG-DASH，切片格式只能是mp4</li></ul>
     */
    public $DrmTypes;

    /**
     * @var SPEKEDrm <p>第三方DRM厂商信息。</p>
     */
    public $SPEKEDrm;

    /**
     * @param array $DrmTypes <p>加密类型：</p><ul><li>FairPlay：只能用于HLS，切片格式只能是mp4</li><li>Widevine：可以用于HLS和DASH，切片格式只能是mp4</li><li>PlayReady：可以用于HLS和DASH，切片格式只能是mp4</li><li>Widevine+FairPlay，PlayReady+FairPlay，Widevine PlayReady FairPlay组合: 只能用于HLS，切片格式只能是mp4</li><li>Widevine PlayReady组合: 可用于HLS、MPEG-DASH，切片格式只能是mp4</li></ul>
     * @param SPEKEDrm $SPEKEDrm <p>第三方DRM厂商信息。</p>
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
        if (array_key_exists("DrmTypes",$param) and $param["DrmTypes"] !== null) {
            $this->DrmTypes = $param["DrmTypes"];
        }

        if (array_key_exists("SPEKEDrm",$param) and $param["SPEKEDrm"] !== null) {
            $this->SPEKEDrm = new SPEKEDrm();
            $this->SPEKEDrm->deserialize($param["SPEKEDrm"]);
        }
    }
}
