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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRouteSecurityGroups请求参数结构体
 *
 * @method InstanceRoute getInstanceRoute() 获取实例路由
 * @method void setInstanceRoute(InstanceRoute $InstanceRoute) 设置实例路由
 * @method array getSecurityGroupIds() 获取修改后的安全组有序列表。
注意:不指定此参数或传空列表则代表解绑所有关联的安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置修改后的安全组有序列表。
注意:不指定此参数或传空列表则代表解绑所有关联的安全组。
 */
class ModifyRouteSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var InstanceRoute 实例路由
     */
    public $InstanceRoute;

    /**
     * @var array 修改后的安全组有序列表。
注意:不指定此参数或传空列表则代表解绑所有关联的安全组。
     */
    public $SecurityGroupIds;

    /**
     * @param InstanceRoute $InstanceRoute 实例路由
     * @param array $SecurityGroupIds 修改后的安全组有序列表。
注意:不指定此参数或传空列表则代表解绑所有关联的安全组。
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
        if (array_key_exists("InstanceRoute",$param) and $param["InstanceRoute"] !== null) {
            $this->InstanceRoute = new InstanceRoute();
            $this->InstanceRoute->deserialize($param["InstanceRoute"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
