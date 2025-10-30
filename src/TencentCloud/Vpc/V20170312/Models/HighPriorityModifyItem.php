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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高优路由表条目修改属性。
 *
 * @method string getHighPriorityRouteId() 获取高优路由条目唯一ID。
 * @method void setHighPriorityRouteId(string $HighPriorityRouteId) 设置高优路由条目唯一ID。
 * @method string getDescription() 获取高优路由条目描述。
 * @method void setDescription(string $Description) 设置高优路由条目描述。
 */
class HighPriorityModifyItem extends AbstractModel
{
    /**
     * @var string 高优路由条目唯一ID。
     */
    public $HighPriorityRouteId;

    /**
     * @var string 高优路由条目描述。
     */
    public $Description;

    /**
     * @param string $HighPriorityRouteId 高优路由条目唯一ID。
     * @param string $Description 高优路由条目描述。
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
        if (array_key_exists("HighPriorityRouteId",$param) and $param["HighPriorityRouteId"] !== null) {
            $this->HighPriorityRouteId = $param["HighPriorityRouteId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
