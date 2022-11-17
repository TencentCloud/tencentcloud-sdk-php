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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveStream请求参数结构体
 *
 * @method string getLiveChannelId() 获取频道ID
 * @method void setLiveChannelId(string $LiveChannelId) 设置频道ID
 * @method integer getExpireTime() 获取过期时间 秒级unix时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间 秒级unix时间戳
 */
class DescribeLiveStreamRequest extends AbstractModel
{
    /**
     * @var string 频道ID
     */
    public $LiveChannelId;

    /**
     * @var integer 过期时间 秒级unix时间戳
     */
    public $ExpireTime;

    /**
     * @param string $LiveChannelId 频道ID
     * @param integer $ExpireTime 过期时间 秒级unix时间戳
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
        if (array_key_exists("LiveChannelId",$param) and $param["LiveChannelId"] !== null) {
            $this->LiveChannelId = $param["LiveChannelId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
