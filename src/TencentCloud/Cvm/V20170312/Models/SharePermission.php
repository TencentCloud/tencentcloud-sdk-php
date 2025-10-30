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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像分享信息结构
 *
 * @method string getCreatedTime() 获取镜像分享时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置镜像分享时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method string getAccountId() 获取镜像分享的账户ID
 * @method void setAccountId(string $AccountId) 设置镜像分享的账户ID
 */
class SharePermission extends AbstractModel
{
    /**
     * @var string 镜像分享时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @var string 镜像分享的账户ID
     */
    public $AccountId;

    /**
     * @param string $CreatedTime 镜像分享时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param string $AccountId 镜像分享的账户ID
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
