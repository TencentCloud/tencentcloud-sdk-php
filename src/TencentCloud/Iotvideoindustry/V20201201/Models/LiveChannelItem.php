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
 * 直播频道详情
 *
 * @method string getChannelId() 获取频道ID
 * @method void setChannelId(string $ChannelId) 设置频道ID
 * @method string getChannelName() 获取频道名称
 * @method void setChannelName(string $ChannelName) 设置频道名称
 */
class LiveChannelItem extends AbstractModel
{
    /**
     * @var string 频道ID
     */
    public $ChannelId;

    /**
     * @var string 频道名称
     */
    public $ChannelName;

    /**
     * @param string $ChannelId 频道ID
     * @param string $ChannelName 频道名称
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

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
