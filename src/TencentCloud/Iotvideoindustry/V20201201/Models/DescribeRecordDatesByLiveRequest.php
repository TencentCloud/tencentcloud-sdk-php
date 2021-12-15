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
 * DescribeRecordDatesByLive请求参数结构体
 *
 * @method string getLiveChannelId() 获取直播频道ID
 * @method void setLiveChannelId(string $LiveChannelId) 设置直播频道ID
 * @method integer getOffset() 获取分页值，本地录制时参数无效
 * @method void setOffset(integer $Offset) 设置分页值，本地录制时参数无效
 * @method integer getLimit() 获取限制值，本地录制时参数无效
 * @method void setLimit(integer $Limit) 设置限制值，本地录制时参数无效
 */
class DescribeRecordDatesByLiveRequest extends AbstractModel
{
    /**
     * @var string 直播频道ID
     */
    public $LiveChannelId;

    /**
     * @var integer 分页值，本地录制时参数无效
     */
    public $Offset;

    /**
     * @var integer 限制值，本地录制时参数无效
     */
    public $Limit;

    /**
     * @param string $LiveChannelId 直播频道ID
     * @param integer $Offset 分页值，本地录制时参数无效
     * @param integer $Limit 限制值，本地录制时参数无效
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
