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
 * CreateAndroidInstanceADB请求参数结构体
 *
 * @method string getAndroidInstanceId() 获取安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置安卓实例 ID
 * @method string getExpiredTime() 获取过期时间。默认 1 小时，最长 30 天。格式为 2025-07-02T10:15:36Z
 * @method void setExpiredTime(string $ExpiredTime) 设置过期时间。默认 1 小时，最长 30 天。格式为 2025-07-02T10:15:36Z
 */
class CreateAndroidInstanceADBRequest extends AbstractModel
{
    /**
     * @var string 安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 过期时间。默认 1 小时，最长 30 天。格式为 2025-07-02T10:15:36Z
     */
    public $ExpiredTime;

    /**
     * @param string $AndroidInstanceId 安卓实例 ID
     * @param string $ExpiredTime 过期时间。默认 1 小时，最长 30 天。格式为 2025-07-02T10:15:36Z
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
