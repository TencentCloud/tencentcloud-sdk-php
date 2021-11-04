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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserGroup请求参数结构体
 *
 * @method string getDisplayName() 获取用户组昵称，长度限制：64个字符。 DisplayName是唯一的。
 * @method void setDisplayName(string $DisplayName) 设置用户组昵称，长度限制：64个字符。 DisplayName是唯一的。
 * @method string getDescription() 获取用户组备注，长度限制：512个字符。
 * @method void setDescription(string $Description) 设置用户组备注，长度限制：512个字符。
 */
class CreateUserGroupRequest extends AbstractModel
{
    /**
     * @var string 用户组昵称，长度限制：64个字符。 DisplayName是唯一的。
     */
    public $DisplayName;

    /**
     * @var string 用户组备注，长度限制：512个字符。
     */
    public $Description;

    /**
     * @param string $DisplayName 用户组昵称，长度限制：64个字符。 DisplayName是唯一的。
     * @param string $Description 用户组备注，长度限制：512个字符。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
