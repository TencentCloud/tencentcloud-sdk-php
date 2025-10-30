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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstanceSSH请求参数结构体
 *
 * @method string getAndroidInstanceId() 获取实例ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置实例ID
 * @method string getExpiredTime() 获取连接过期时间，最长可设置7天
 * @method void setExpiredTime(string $ExpiredTime) 设置连接过期时间，最长可设置7天
 */
class CreateAndroidInstanceSSHRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 连接过期时间，最长可设置7天
     */
    public $ExpiredTime;

    /**
     * @param string $AndroidInstanceId 实例ID
     * @param string $ExpiredTime 连接过期时间，最长可设置7天
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
        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
