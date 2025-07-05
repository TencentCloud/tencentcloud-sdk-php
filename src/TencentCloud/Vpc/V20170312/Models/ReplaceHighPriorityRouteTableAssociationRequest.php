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
 * ReplaceHighPriorityRouteTableAssociation请求参数结构体
 *
 * @method string getHighPriorityRouteTableId() 获取高优路由表唯一 ID。
 * @method void setHighPriorityRouteTableId(string $HighPriorityRouteTableId) 设置高优路由表唯一 ID。
 * @method string getSubnetId() 获取子网唯一 ID
 * @method void setSubnetId(string $SubnetId) 设置子网唯一 ID
 */
class ReplaceHighPriorityRouteTableAssociationRequest extends AbstractModel
{
    /**
     * @var string 高优路由表唯一 ID。
     */
    public $HighPriorityRouteTableId;

    /**
     * @var string 子网唯一 ID
     */
    public $SubnetId;

    /**
     * @param string $HighPriorityRouteTableId 高优路由表唯一 ID。
     * @param string $SubnetId 子网唯一 ID
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
