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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像跨账号共享信息。
 *
 * @method string getBlueprintId() 获取镜像ID。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像ID。
 * @method string getAccountId() 获取镜像共享的账户ID。
 * @method void setAccountId(string $AccountId) 设置镜像共享的账户ID。
 * @method string getCreatedTime() 获取镜像共享时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置镜像共享时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 格式为： YYYY-MM-DDThh:mm:ssZ。
 */
class BlueprintShareAcrossAccountInfo extends AbstractModel
{
    /**
     * @var string 镜像ID。
     */
    public $BlueprintId;

    /**
     * @var string 镜像共享的账户ID。
     */
    public $AccountId;

    /**
     * @var string 镜像共享时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 格式为： YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @param string $BlueprintId 镜像ID。
     * @param string $AccountId 镜像共享的账户ID。
     * @param string $CreatedTime 镜像共享时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 格式为： YYYY-MM-DDThh:mm:ssZ。
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
