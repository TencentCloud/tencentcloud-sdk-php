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
 * DisconnectAndroidInstanceAccelerator请求参数结构体
 *
 * @method string getAndroidInstanceId() 获取实例ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置实例ID
 * @method string getUserId() 获取用户 ID。用户 ID 为空，将断开该实例的所有用户连接；用户 ID 不为空，只断开该用户的连接。
 * @method void setUserId(string $UserId) 设置用户 ID。用户 ID 为空，将断开该实例的所有用户连接；用户 ID 不为空，只断开该用户的连接。
 */
class DisconnectAndroidInstanceAcceleratorRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 用户 ID。用户 ID 为空，将断开该实例的所有用户连接；用户 ID 不为空，只断开该用户的连接。
     */
    public $UserId;

    /**
     * @param string $AndroidInstanceId 实例ID
     * @param string $UserId 用户 ID。用户 ID 为空，将断开该实例的所有用户连接；用户 ID 不为空，只断开该用户的连接。
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
