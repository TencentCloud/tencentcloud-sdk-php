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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由表冲突对象
 *
 * @method string getRouteTableType() 获取路由表类型。
 * @method void setRouteTableType(string $RouteTableType) 设置路由表类型。
 * @method string getRouteTableCidrBlock() 获取路由表CIDR。
 * @method void setRouteTableCidrBlock(string $RouteTableCidrBlock) 设置路由表CIDR。
 * @method string getRouteTableName() 获取路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称。
 * @method string getRouteTableId() 获取路由表ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表ID。
 */
class RouteTableConflict extends AbstractModel
{
    /**
     * @var string 路由表类型。
     */
    public $RouteTableType;

    /**
     * @var string 路由表CIDR。
     */
    public $RouteTableCidrBlock;

    /**
     * @var string 路由表名称。
     */
    public $RouteTableName;

    /**
     * @var string 路由表ID。
     */
    public $RouteTableId;

    /**
     * @param string $RouteTableType 路由表类型。
     * @param string $RouteTableCidrBlock 路由表CIDR。
     * @param string $RouteTableName 路由表名称。
     * @param string $RouteTableId 路由表ID。
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
        if (array_key_exists("RouteTableType",$param) and $param["RouteTableType"] !== null) {
            $this->RouteTableType = $param["RouteTableType"];
        }

        if (array_key_exists("RouteTableCidrBlock",$param) and $param["RouteTableCidrBlock"] !== null) {
            $this->RouteTableCidrBlock = $param["RouteTableCidrBlock"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
