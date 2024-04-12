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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelease请求参数结构体
 *
 * @method string getBotBizId() 获取机器人ID
 * @method void setBotBizId(string $BotBizId) 设置机器人ID
 * @method string getReleaseBizId() 获取发布详情
 * @method void setReleaseBizId(string $ReleaseBizId) 设置发布详情
 */
class DescribeReleaseRequest extends AbstractModel
{
    /**
     * @var string 机器人ID
     */
    public $BotBizId;

    /**
     * @var string 发布详情
     */
    public $ReleaseBizId;

    /**
     * @param string $BotBizId 机器人ID
     * @param string $ReleaseBizId 发布详情
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("ReleaseBizId",$param) and $param["ReleaseBizId"] !== null) {
            $this->ReleaseBizId = $param["ReleaseBizId"];
        }
    }
}
