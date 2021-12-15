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
 * CreateLiveChannel请求参数结构体
 *
 * @method string getLiveChannelName() 获取直播频道名称
 * @method void setLiveChannelName(string $LiveChannelName) 设置直播频道名称
 * @method integer getLiveChannelType() 获取直播频道类型 1：固定直播；2：移动直播
 * @method void setLiveChannelType(integer $LiveChannelType) 设置直播频道类型 1：固定直播；2：移动直播
 */
class CreateLiveChannelRequest extends AbstractModel
{
    /**
     * @var string 直播频道名称
     */
    public $LiveChannelName;

    /**
     * @var integer 直播频道类型 1：固定直播；2：移动直播
     */
    public $LiveChannelType;

    /**
     * @param string $LiveChannelName 直播频道名称
     * @param integer $LiveChannelType 直播频道类型 1：固定直播；2：移动直播
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
        if (array_key_exists("LiveChannelName",$param) and $param["LiveChannelName"] !== null) {
            $this->LiveChannelName = $param["LiveChannelName"];
        }

        if (array_key_exists("LiveChannelType",$param) and $param["LiveChannelType"] !== null) {
            $this->LiveChannelType = $param["LiveChannelType"];
        }
    }
}
