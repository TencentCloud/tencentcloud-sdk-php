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
 * DisassociateRoutesSecurityGroup请求参数结构体
 *
 * @method array getInstanceRoutes() 获取解绑路由的列表
 * @method void setInstanceRoutes(array $InstanceRoutes) 设置解绑路由的列表
 * @method string getSecurityGroupId() 获取安全组id
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组id
 */
class DisassociateRoutesSecurityGroupRequest extends AbstractModel
{
    /**
     * @var array 解绑路由的列表
     */
    public $InstanceRoutes;

    /**
     * @var string 安全组id
     */
    public $SecurityGroupId;

    /**
     * @param array $InstanceRoutes 解绑路由的列表
     * @param string $SecurityGroupId 安全组id
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
        if (array_key_exists("InstanceRoutes",$param) and $param["InstanceRoutes"] !== null) {
            $this->InstanceRoutes = [];
            foreach ($param["InstanceRoutes"] as $key => $value){
                $obj = new InstanceRoute();
                $obj->deserialize($value);
                array_push($this->InstanceRoutes, $obj);
            }
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
