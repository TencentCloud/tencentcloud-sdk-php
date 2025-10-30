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
 * ResetRoutePolicyAssociations请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method array getRoutePolicyAssociationSet() 获取路由策略绑定对象（RoutePolicyAssociation）列表。注意：路由策略绑定中的路由表实例ID（RouteTableId）需要和该接口的RouteTableId参数保持一致（也就是该接口只支持修改同一个路由表实例下的路有策略绑定关系及优先级）。
 * @method void setRoutePolicyAssociationSet(array $RoutePolicyAssociationSet) 设置路由策略绑定对象（RoutePolicyAssociation）列表。注意：路由策略绑定中的路由表实例ID（RouteTableId）需要和该接口的RouteTableId参数保持一致（也就是该接口只支持修改同一个路由表实例下的路有策略绑定关系及优先级）。
 */
class ResetRoutePolicyAssociationsRequest extends AbstractModel
{
    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var array 路由策略绑定对象（RoutePolicyAssociation）列表。注意：路由策略绑定中的路由表实例ID（RouteTableId）需要和该接口的RouteTableId参数保持一致（也就是该接口只支持修改同一个路由表实例下的路有策略绑定关系及优先级）。
     */
    public $RoutePolicyAssociationSet;

    /**
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param array $RoutePolicyAssociationSet 路由策略绑定对象（RoutePolicyAssociation）列表。注意：路由策略绑定中的路由表实例ID（RouteTableId）需要和该接口的RouteTableId参数保持一致（也就是该接口只支持修改同一个路由表实例下的路有策略绑定关系及优先级）。
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RoutePolicyAssociationSet",$param) and $param["RoutePolicyAssociationSet"] !== null) {
            $this->RoutePolicyAssociationSet = [];
            foreach ($param["RoutePolicyAssociationSet"] as $key => $value){
                $obj = new RoutePolicyAssociation();
                $obj->deserialize($value);
                array_push($this->RoutePolicyAssociationSet, $obj);
            }
        }
    }
}
