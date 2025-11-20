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
 * CreateAndroidInstanceAcceleratorToken请求参数结构体
 *
 * @method string getUserIP() 获取用户IP，用户客户端的公网IP，用于就近选择起始加速节点
 * @method void setUserIP(string $UserIP) 设置用户IP，用户客户端的公网IP，用于就近选择起始加速节点
 * @method array getAndroidInstanceIds() 获取实例 ID 列表。每次请求的实例的上限为 500。
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例 ID 列表。每次请求的实例的上限为 500。
 */
class CreateAndroidInstanceAcceleratorTokenRequest extends AbstractModel
{
    /**
     * @var string 用户IP，用户客户端的公网IP，用于就近选择起始加速节点
     */
    public $UserIP;

    /**
     * @var array 实例 ID 列表。每次请求的实例的上限为 500。
     */
    public $AndroidInstanceIds;

    /**
     * @param string $UserIP 用户IP，用户客户端的公网IP，用于就近选择起始加速节点
     * @param array $AndroidInstanceIds 实例 ID 列表。每次请求的实例的上限为 500。
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
        if (array_key_exists("UserIP",$param) and $param["UserIP"] !== null) {
            $this->UserIP = $param["UserIP"];
        }

        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }
    }
}
