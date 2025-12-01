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
 * ModifyAndroidInstancesUserId请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表
 * @method string getUserId() 获取用户 ID
 * @method void setUserId(string $UserId) 设置用户 ID
 * @method string getExpirationDuration() 获取有效时长。如果不填该字段，默认为永久。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 12h 表示 12 小时，1h2m3s 表示一小时两分三秒
 * @method void setExpirationDuration(string $ExpirationDuration) 设置有效时长。如果不填该字段，默认为永久。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 12h 表示 12 小时，1h2m3s 表示一小时两分三秒
 */
class ModifyAndroidInstancesUserIdRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string 用户 ID
     */
    public $UserId;

    /**
     * @var string 有效时长。如果不填该字段，默认为永久。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 12h 表示 12 小时，1h2m3s 表示一小时两分三秒
     */
    public $ExpirationDuration;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表
     * @param string $UserId 用户 ID
     * @param string $ExpirationDuration 有效时长。如果不填该字段，默认为永久。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 12h 表示 12 小时，1h2m3s 表示一小时两分三秒
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ExpirationDuration",$param) and $param["ExpirationDuration"] !== null) {
            $this->ExpirationDuration = $param["ExpirationDuration"];
        }
    }
}
