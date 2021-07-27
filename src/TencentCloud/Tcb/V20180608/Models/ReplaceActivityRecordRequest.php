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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceActivityRecord请求参数结构体
 *
 * @method integer getActivityId() 获取活动id
 * @method void setActivityId(integer $ActivityId) 设置活动id
 * @method integer getStatus() 获取状态码
 * @method void setStatus(integer $Status) 设置状态码
 * @method string getSubStatus() 获取自定义子状态
 * @method void setSubStatus(string $SubStatus) 设置自定义子状态
 * @method string getChannelToken() 获取鉴权token
 * @method void setChannelToken(string $ChannelToken) 设置鉴权token
 * @method string getChannel() 获取渠道名，不同渠道对应不同secretKey
 * @method void setChannel(string $Channel) 设置渠道名，不同渠道对应不同secretKey
 */
class ReplaceActivityRecordRequest extends AbstractModel
{
    /**
     * @var integer 活动id
     */
    public $ActivityId;

    /**
     * @var integer 状态码
     */
    public $Status;

    /**
     * @var string 自定义子状态
     */
    public $SubStatus;

    /**
     * @var string 鉴权token
     */
    public $ChannelToken;

    /**
     * @var string 渠道名，不同渠道对应不同secretKey
     */
    public $Channel;

    /**
     * @param integer $ActivityId 活动id
     * @param integer $Status 状态码
     * @param string $SubStatus 自定义子状态
     * @param string $ChannelToken 鉴权token
     * @param string $Channel 渠道名，不同渠道对应不同secretKey
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("ChannelToken",$param) and $param["ChannelToken"] !== null) {
            $this->ChannelToken = $param["ChannelToken"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
