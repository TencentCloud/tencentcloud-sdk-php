<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * ResetRoutes请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getRouteTableName() 获取路由表名称，最大长度不能超过60个字节。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称，最大长度不能超过60个字节。
 * @method array getRoutes() 获取路由策略。
 * @method void setRoutes(array $Routes) 设置路由策略。
 */
class ResetRoutesRequest extends AbstractModel
{
    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var string 路由表名称，最大长度不能超过60个字节。
     */
    public $RouteTableName;

    /**
     * @var array 路由策略。
     */
    public $Routes;

    /**
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $RouteTableName 路由表名称，最大长度不能超过60个字节。
     * @param array $Routes 路由策略。
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
        if (array_key_exists('RouteTableId',$param) and $param['RouteTableId'] !== null) {
            $this->RouteTableId = $param['RouteTableId'];
        }

        if (array_key_exists('RouteTableName',$param) and $param['RouteTableName'] !== null) {
            $this->RouteTableName = $param['RouteTableName'];
        }

        if (array_key_exists('Routes',$param) and $param['Routes'] !== null) {
            $this->Routes = [];
            foreach ($param['Routes'] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
