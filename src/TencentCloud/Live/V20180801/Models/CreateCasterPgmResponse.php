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
 * CreateCasterPgm返回参数结构体
 *
 * @method string getPgmPlayUrl() 获取主监任务的rtmp协议预览地址。
注：该地址仅供预览，不可分发。
 * @method void setPgmPlayUrl(string $PgmPlayUrl) 设置主监任务的rtmp协议预览地址。
注：该地址仅供预览，不可分发。
 * @method string getCdnPlayUrl() 获取注：该字段已废弃，请结合腾讯云直播播放地址生成策略生成cdn播放地址。
 * @method void setCdnPlayUrl(string $CdnPlayUrl) 设置注：该字段已废弃，请结合腾讯云直播播放地址生成策略生成cdn播放地址。
 * @method string getCdnStreamId() 获取主监任务在腾讯云直播侧的流ID。
 * @method void setCdnStreamId(string $CdnStreamId) 设置主监任务在腾讯云直播侧的流ID。
 * @method string getPgmWebRTCPlayUrl() 获取主监任务的webrtc协议播放地址。
注：
1. 该预览地址仅作为预览，不可分发。
2. webrtc播放地址需配合腾讯云快直播播放sdk使用。
 * @method void setPgmWebRTCPlayUrl(string $PgmWebRTCPlayUrl) 设置主监任务的webrtc协议播放地址。
注：
1. 该预览地址仅作为预览，不可分发。
2. webrtc播放地址需配合腾讯云快直播播放sdk使用。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCasterPgmResponse extends AbstractModel
{
    /**
     * @var string 主监任务的rtmp协议预览地址。
注：该地址仅供预览，不可分发。
     */
    public $PgmPlayUrl;

    /**
     * @var string 注：该字段已废弃，请结合腾讯云直播播放地址生成策略生成cdn播放地址。
     */
    public $CdnPlayUrl;

    /**
     * @var string 主监任务在腾讯云直播侧的流ID。
     */
    public $CdnStreamId;

    /**
     * @var string 主监任务的webrtc协议播放地址。
注：
1. 该预览地址仅作为预览，不可分发。
2. webrtc播放地址需配合腾讯云快直播播放sdk使用。
     */
    public $PgmWebRTCPlayUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PgmPlayUrl 主监任务的rtmp协议预览地址。
注：该地址仅供预览，不可分发。
     * @param string $CdnPlayUrl 注：该字段已废弃，请结合腾讯云直播播放地址生成策略生成cdn播放地址。
     * @param string $CdnStreamId 主监任务在腾讯云直播侧的流ID。
     * @param string $PgmWebRTCPlayUrl 主监任务的webrtc协议播放地址。
注：
1. 该预览地址仅作为预览，不可分发。
2. webrtc播放地址需配合腾讯云快直播播放sdk使用。
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
        if (array_key_exists("PgmPlayUrl",$param) and $param["PgmPlayUrl"] !== null) {
            $this->PgmPlayUrl = $param["PgmPlayUrl"];
        }

        if (array_key_exists("CdnPlayUrl",$param) and $param["CdnPlayUrl"] !== null) {
            $this->CdnPlayUrl = $param["CdnPlayUrl"];
        }

        if (array_key_exists("CdnStreamId",$param) and $param["CdnStreamId"] !== null) {
            $this->CdnStreamId = $param["CdnStreamId"];
        }

        if (array_key_exists("PgmWebRTCPlayUrl",$param) and $param["PgmWebRTCPlayUrl"] !== null) {
            $this->PgmWebRTCPlayUrl = $param["PgmWebRTCPlayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
