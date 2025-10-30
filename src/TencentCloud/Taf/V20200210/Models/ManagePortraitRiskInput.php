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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method integer getPostTime() 获取请求时间戳秒
 * @method void setPostTime(integer $PostTime) 设置请求时间戳秒
 * @method string getUserIp() 获取用户公网ip（仅支持IPv4）
 * @method void setUserIp(string $UserIp) 设置用户公网ip（仅支持IPv4）
 * @method integer getChannel() 获取渠道号
 * @method void setChannel(integer $Channel) 设置渠道号
 */
class ManagePortraitRiskInput extends AbstractModel
{
    /**
     * @var integer 请求时间戳秒
     */
    public $PostTime;

    /**
     * @var string 用户公网ip（仅支持IPv4）
     */
    public $UserIp;

    /**
     * @var integer 渠道号
     */
    public $Channel;

    /**
     * @param integer $PostTime 请求时间戳秒
     * @param string $UserIp 用户公网ip（仅支持IPv4）
     * @param integer $Channel 渠道号
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
        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
