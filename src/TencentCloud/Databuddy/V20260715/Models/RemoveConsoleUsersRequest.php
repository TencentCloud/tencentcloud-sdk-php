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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveConsoleUsers请求参数结构体
 *
 * @method array getUserUins() 获取<p>必填，待移除的用户 UIN 列表，单次最多10个</p>
 * @method void setUserUins(array $UserUins) 设置<p>必填，待移除的用户 UIN 列表，单次最多10个</p>
 */
class RemoveConsoleUsersRequest extends AbstractModel
{
    /**
     * @var array <p>必填，待移除的用户 UIN 列表，单次最多10个</p>
     */
    public $UserUins;

    /**
     * @param array $UserUins <p>必填，待移除的用户 UIN 列表，单次最多10个</p>
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
        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }
    }
}
