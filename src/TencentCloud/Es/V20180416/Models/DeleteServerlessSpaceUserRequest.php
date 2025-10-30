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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteServerlessSpaceUser请求参数结构体
 *
 * @method string getSpaceId() 获取空间的ID
 * @method void setSpaceId(string $SpaceId) 设置空间的ID
 * @method string getUsername() 获取创建索引的用户名
 * @method void setUsername(string $Username) 设置创建索引的用户名
 */
class DeleteServerlessSpaceUserRequest extends AbstractModel
{
    /**
     * @var string 空间的ID
     */
    public $SpaceId;

    /**
     * @var string 创建索引的用户名
     */
    public $Username;

    /**
     * @param string $SpaceId 空间的ID
     * @param string $Username 创建索引的用户名
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
