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
 * CreateCasterPvw返回参数结构体
 *
 * @method string getPvwPlayUrl() 获取预监任务的画面rtmp协议预览地址。
注：该预览地址仅供画面预览，不可分发。
 * @method void setPvwPlayUrl(string $PvwPlayUrl) 设置预监任务的画面rtmp协议预览地址。
注：该预览地址仅供画面预览，不可分发。
 * @method string getPvwWebRTCPlayUrl() 获取预监任务的webrtc协议预览画面。
注：
1. 该预览地址仅供预览，不可分发。
2. webrtc播放地址，需配合腾讯云快直播播放sdk使用

 * @method void setPvwWebRTCPlayUrl(string $PvwWebRTCPlayUrl) 设置预监任务的webrtc协议预览画面。
注：
1. 该预览地址仅供预览，不可分发。
2. webrtc播放地址，需配合腾讯云快直播播放sdk使用

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCasterPvwResponse extends AbstractModel
{
    /**
     * @var string 预监任务的画面rtmp协议预览地址。
注：该预览地址仅供画面预览，不可分发。
     */
    public $PvwPlayUrl;

    /**
     * @var string 预监任务的webrtc协议预览画面。
注：
1. 该预览地址仅供预览，不可分发。
2. webrtc播放地址，需配合腾讯云快直播播放sdk使用

     */
    public $PvwWebRTCPlayUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PvwPlayUrl 预监任务的画面rtmp协议预览地址。
注：该预览地址仅供画面预览，不可分发。
     * @param string $PvwWebRTCPlayUrl 预监任务的webrtc协议预览画面。
注：
1. 该预览地址仅供预览，不可分发。
2. webrtc播放地址，需配合腾讯云快直播播放sdk使用

     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PvwPlayUrl",$param) and $param["PvwPlayUrl"] !== null) {
            $this->PvwPlayUrl = $param["PvwPlayUrl"];
        }

        if (array_key_exists("PvwWebRTCPlayUrl",$param) and $param["PvwWebRTCPlayUrl"] !== null) {
            $this->PvwWebRTCPlayUrl = $param["PvwWebRTCPlayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
