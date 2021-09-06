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
 * DescribeUserActivityInfo请求参数结构体
 *
 * @method integer getActivityId() 获取活动id
 * @method void setActivityId(integer $ActivityId) 设置活动id
 * @method string getChannelToken() 获取渠道加密token
 * @method void setChannelToken(string $ChannelToken) 设置渠道加密token
 * @method string getChannel() 获取渠道来源，每个来源对应不同secretKey
 * @method void setChannel(string $Channel) 设置渠道来源，每个来源对应不同secretKey
 * @method string getGroupId() 获取团id, 1元钱裂变中活动团id不为空时根据团id来查询记录，为空时查询uin最新记录
 * @method void setGroupId(string $GroupId) 设置团id, 1元钱裂变中活动团id不为空时根据团id来查询记录，为空时查询uin最新记录
 */
class DescribeUserActivityInfoRequest extends AbstractModel
{
    /**
     * @var integer 活动id
     */
    public $ActivityId;

    /**
     * @var string 渠道加密token
     */
    public $ChannelToken;

    /**
     * @var string 渠道来源，每个来源对应不同secretKey
     */
    public $Channel;

    /**
     * @var string 团id, 1元钱裂变中活动团id不为空时根据团id来查询记录，为空时查询uin最新记录
     */
    public $GroupId;

    /**
     * @param integer $ActivityId 活动id
     * @param string $ChannelToken 渠道加密token
     * @param string $Channel 渠道来源，每个来源对应不同secretKey
     * @param string $GroupId 团id, 1元钱裂变中活动团id不为空时根据团id来查询记录，为空时查询uin最新记录
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

        if (array_key_exists("ChannelToken",$param) and $param["ChannelToken"] !== null) {
            $this->ChannelToken = $param["ChannelToken"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
