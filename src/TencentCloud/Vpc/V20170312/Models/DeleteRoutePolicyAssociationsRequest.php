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
 * DeleteRoutePolicyAssociations请求参数结构体
 *
 * @method array getRoutePolicyAssociationSet() 获取路由策略绑定对象列表，删除路由策略绑定时，仅需使用RoutePolicyAssociation的RouteTableId字段和RoutePolicyId字段（不需要填写Priority字段）。
 * @method void setRoutePolicyAssociationSet(array $RoutePolicyAssociationSet) 设置路由策略绑定对象列表，删除路由策略绑定时，仅需使用RoutePolicyAssociation的RouteTableId字段和RoutePolicyId字段（不需要填写Priority字段）。
 */
class DeleteRoutePolicyAssociationsRequest extends AbstractModel
{
    /**
     * @var array 路由策略绑定对象列表，删除路由策略绑定时，仅需使用RoutePolicyAssociation的RouteTableId字段和RoutePolicyId字段（不需要填写Priority字段）。
     */
    public $RoutePolicyAssociationSet;

    /**
     * @param array $RoutePolicyAssociationSet 路由策略绑定对象列表，删除路由策略绑定时，仅需使用RoutePolicyAssociation的RouteTableId字段和RoutePolicyId字段（不需要填写Priority字段）。
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
