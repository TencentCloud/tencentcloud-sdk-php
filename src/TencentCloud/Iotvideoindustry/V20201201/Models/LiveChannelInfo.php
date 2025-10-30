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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 频道信息
 *
 * @method string getLiveChannelId() 获取频道ID
 * @method void setLiveChannelId(string $LiveChannelId) 设置频道ID
 * @method string getLiveChannelName() 获取频道名称
 * @method void setLiveChannelName(string $LiveChannelName) 设置频道名称
 * @method integer getLiveChannelType() 获取频道类型
 * @method void setLiveChannelType(integer $LiveChannelType) 设置频道类型
 * @method integer getLiveStatus() 获取通道直播状态：1: 未推流，2: 推流中
 * @method void setLiveStatus(integer $LiveStatus) 设置通道直播状态：1: 未推流，2: 推流中
 * @method string getPushStreamAddress() 获取推流地址
 * @method void setPushStreamAddress(string $PushStreamAddress) 设置推流地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 */
class LiveChannelInfo extends AbstractModel
{
    /**
     * @var string 频道ID
     */
    public $LiveChannelId;

    /**
     * @var string 频道名称
     */
    public $LiveChannelName;

    /**
     * @var integer 频道类型
     */
    public $LiveChannelType;

    /**
     * @var integer 通道直播状态：1: 未推流，2: 推流中
     */
    public $LiveStatus;

    /**
     * @var string 推流地址
     */
    public $PushStreamAddress;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @param string $LiveChannelId 频道ID
     * @param string $LiveChannelName 频道名称
     * @param integer $LiveChannelType 频道类型
     * @param integer $LiveStatus 通道直播状态：1: 未推流，2: 推流中
     * @param string $PushStreamAddress 推流地址
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
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

        if (array_key_exists("LiveChannelName",$param) and $param["LiveChannelName"] !== null) {
            $this->LiveChannelName = $param["LiveChannelName"];
        }

        if (array_key_exists("LiveChannelType",$param) and $param["LiveChannelType"] !== null) {
            $this->LiveChannelType = $param["LiveChannelType"];
        }

        if (array_key_exists("LiveStatus",$param) and $param["LiveStatus"] !== null) {
            $this->LiveStatus = $param["LiveStatus"];
        }

        if (array_key_exists("PushStreamAddress",$param) and $param["PushStreamAddress"] !== null) {
            $this->PushStreamAddress = $param["PushStreamAddress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
