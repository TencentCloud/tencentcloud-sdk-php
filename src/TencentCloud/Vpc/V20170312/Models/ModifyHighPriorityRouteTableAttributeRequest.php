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
 * ModifyHighPriorityRouteTableAttribute请求参数结构体
 *
 * @method string getHighPriorityRouteTableId() 获取高优路由表表唯一ID 
 * @method void setHighPriorityRouteTableId(string $HighPriorityRouteTableId) 设置高优路由表表唯一ID 
 * @method string getName() 获取高优路由表表名称
 * @method void setName(string $Name) 设置高优路由表表名称
 */
class ModifyHighPriorityRouteTableAttributeRequest extends AbstractModel
{
    /**
     * @var string 高优路由表表唯一ID 
     */
    public $HighPriorityRouteTableId;

    /**
     * @var string 高优路由表表名称
     */
    public $Name;

    /**
     * @param string $HighPriorityRouteTableId 高优路由表表唯一ID 
     * @param string $Name 高优路由表表名称
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
        if (array_key_exists("HighPriorityRouteTableId",$param) and $param["HighPriorityRouteTableId"] !== null) {
            $this->HighPriorityRouteTableId = $param["HighPriorityRouteTableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
