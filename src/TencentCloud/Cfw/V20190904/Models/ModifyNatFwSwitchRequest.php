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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNatFwSwitch请求参数结构体
 *
 * @method integer getEnable() 获取开关，0：关闭，1：开启
 * @method void setEnable(integer $Enable) 设置开关，0：关闭，1：开启
 * @method array getCfwInsIdList() 获取防火墙实例id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 * @method void setCfwInsIdList(array $CfwInsIdList) 设置防火墙实例id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 * @method array getSubnetIdList() 获取子网id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 * @method void setSubnetIdList(array $SubnetIdList) 设置子网id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 * @method array getRouteTableIdList() 获取路由表id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 * @method void setRouteTableIdList(array $RouteTableIdList) 设置路由表id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
 */
class ModifyNatFwSwitchRequest extends AbstractModel
{
    /**
     * @var integer 开关，0：关闭，1：开启
     */
    public $Enable;

    /**
     * @var array 防火墙实例id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
     */
    public $CfwInsIdList;

    /**
     * @var array 子网id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
     */
    public $SubnetIdList;

    /**
     * @var array 路由表id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
     */
    public $RouteTableIdList;

    /**
     * @param integer $Enable 开关，0：关闭，1：开启
     * @param array $CfwInsIdList 防火墙实例id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
     * @param array $SubnetIdList 子网id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
     * @param array $RouteTableIdList 路由表id列表，其中CfwInsIdList，SubnetIdList和RouteTableIdList只能传递一种。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CfwInsIdList",$param) and $param["CfwInsIdList"] !== null) {
            $this->CfwInsIdList = $param["CfwInsIdList"];
        }

        if (array_key_exists("SubnetIdList",$param) and $param["SubnetIdList"] !== null) {
            $this->SubnetIdList = $param["SubnetIdList"];
        }

        if (array_key_exists("RouteTableIdList",$param) and $param["RouteTableIdList"] !== null) {
            $this->RouteTableIdList = $param["RouteTableIdList"];
        }
    }
}
