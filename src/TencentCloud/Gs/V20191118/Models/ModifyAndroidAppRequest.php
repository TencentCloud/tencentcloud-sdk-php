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
 * ModifyAndroidApp请求参数结构体
 *
 * @method string getAndroidAppId() 获取安卓应用 Id
 * @method void setAndroidAppId(string $AndroidAppId) 设置安卓应用 Id
 * @method string getName() 获取安卓应用名称
 * @method void setName(string $Name) 设置安卓应用名称
 * @method string getUserId() 获取用户 Id
 * @method void setUserId(string $UserId) 设置用户 Id
 */
class ModifyAndroidAppRequest extends AbstractModel
{
    /**
     * @var string 安卓应用 Id
     */
    public $AndroidAppId;

    /**
     * @var string 安卓应用名称
     */
    public $Name;

    /**
     * @var string 用户 Id
     */
    public $UserId;

    /**
     * @param string $AndroidAppId 安卓应用 Id
     * @param string $Name 安卓应用名称
     * @param string $UserId 用户 Id
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
        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
