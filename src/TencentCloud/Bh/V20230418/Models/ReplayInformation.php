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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回放所需字段信息
 *
 * @method string getToken() 获取令牌
 * @method void setToken(string $Token) 设置令牌
 * @method string getStartTime() 获取会话开始时间
 * @method void setStartTime(string $StartTime) 设置会话开始时间
 * @method string getAddress() 获取回放链接
 * @method void setAddress(string $Address) 设置回放链接
 * @method integer getReplayType() 获取回放类型 ，默认0， 1-rfb 2-mp4 3-ssh
 * @method void setReplayType(integer $ReplayType) 设置回放类型 ，默认0， 1-rfb 2-mp4 3-ssh
 */
class ReplayInformation extends AbstractModel
{
    /**
     * @var string 令牌
     */
    public $Token;

    /**
     * @var string 会话开始时间
     */
    public $StartTime;

    /**
     * @var string 回放链接
     */
    public $Address;

    /**
     * @var integer 回放类型 ，默认0， 1-rfb 2-mp4 3-ssh
     */
    public $ReplayType;

    /**
     * @param string $Token 令牌
     * @param string $StartTime 会话开始时间
     * @param string $Address 回放链接
     * @param integer $ReplayType 回放类型 ，默认0， 1-rfb 2-mp4 3-ssh
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ReplayType",$param) and $param["ReplayType"] !== null) {
            $this->ReplayType = $param["ReplayType"];
        }
    }
}
