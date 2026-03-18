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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoom请求参数结构体
 *
 * @method integer getRoomId() 获取<p>课堂Id。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>课堂Id。</p>
 * @method integer getRTMPStreamingURL() 获取<p>请求RTMP推流链接，0：否，1：是，默认为0。</p>
 * @method void setRTMPStreamingURL(integer $RTMPStreamingURL) 设置<p>请求RTMP推流链接，0：否，1：是，默认为0。</p>
 */
class DescribeRoomRequest extends AbstractModel
{
    /**
     * @var integer <p>课堂Id。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>请求RTMP推流链接，0：否，1：是，默认为0。</p>
     */
    public $RTMPStreamingURL;

    /**
     * @param integer $RoomId <p>课堂Id。</p>
     * @param integer $RTMPStreamingURL <p>请求RTMP推流链接，0：否，1：是，默认为0。</p>
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RTMPStreamingURL",$param) and $param["RTMPStreamingURL"] !== null) {
            $this->RTMPStreamingURL = $param["RTMPStreamingURL"];
        }
    }
}
