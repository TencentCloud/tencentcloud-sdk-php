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
 * DescribeCasterPlayUrl返回参数结构体
 *
 * @method string getPlayUrl() 获取播放url。
当导播台不存在预监或主监时，若请求预监或主监的播放地址，该字段为空。
 * @method void setPlayUrl(string $PlayUrl) 设置播放url。
当导播台不存在预监或主监时，若请求预监或主监的播放地址，该字段为空。
 * @method string getWebRTCPlayUrl() 获取webrtc协议播放地址。
当导播台不存在预监或主监时，若请求预监或主监的webrtc播放地址，该字段为空。
注：webrtc协议播放地址需配合腾讯云快直播播放sdk方可使用。
 * @method void setWebRTCPlayUrl(string $WebRTCPlayUrl) 设置webrtc协议播放地址。
当导播台不存在预监或主监时，若请求预监或主监的webrtc播放地址，该字段为空。
注：webrtc协议播放地址需配合腾讯云快直播播放sdk方可使用。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCasterPlayUrlResponse extends AbstractModel
{
    /**
     * @var string 播放url。
当导播台不存在预监或主监时，若请求预监或主监的播放地址，该字段为空。
     */
    public $PlayUrl;

    /**
     * @var string webrtc协议播放地址。
当导播台不存在预监或主监时，若请求预监或主监的webrtc播放地址，该字段为空。
注：webrtc协议播放地址需配合腾讯云快直播播放sdk方可使用。
     */
    public $WebRTCPlayUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PlayUrl 播放url。
当导播台不存在预监或主监时，若请求预监或主监的播放地址，该字段为空。
     * @param string $WebRTCPlayUrl webrtc协议播放地址。
当导播台不存在预监或主监时，若请求预监或主监的webrtc播放地址，该字段为空。
注：webrtc协议播放地址需配合腾讯云快直播播放sdk方可使用。
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
        if (array_key_exists("PlayUrl",$param) and $param["PlayUrl"] !== null) {
            $this->PlayUrl = $param["PlayUrl"];
        }

        if (array_key_exists("WebRTCPlayUrl",$param) and $param["WebRTCPlayUrl"] !== null) {
            $this->WebRTCPlayUrl = $param["WebRTCPlayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
