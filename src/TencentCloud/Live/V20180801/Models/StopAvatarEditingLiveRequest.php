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
 * StopAvatarEditingLive请求参数结构体
 *
 * @method string getChannelId() 获取<p>通道ID，通常是待编辑的直播流的源ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道ID，通常是待编辑的直播流的源ID</p>
 */
class StopAvatarEditingLiveRequest extends AbstractModel
{
    /**
     * @var string <p>通道ID，通常是待编辑的直播流的源ID</p>
     */
    public $ChannelId;

    /**
     * @param string $ChannelId <p>通道ID，通常是待编辑的直播流的源ID</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
