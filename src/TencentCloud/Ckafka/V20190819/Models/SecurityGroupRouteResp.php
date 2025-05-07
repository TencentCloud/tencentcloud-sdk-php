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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组路由信息返回结果
 *
 * @method integer getTotalCount() 获取符合条件的安全组路由信息总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的安全组路由信息总数
 * @method array getSecurityGroupRoutes() 获取符合条件的安全组路由信息列表
 * @method void setSecurityGroupRoutes(array $SecurityGroupRoutes) 设置符合条件的安全组路由信息列表
 */
class SecurityGroupRouteResp extends AbstractModel
{
    /**
     * @var integer 符合条件的安全组路由信息总数
     */
    public $TotalCount;

    /**
     * @var array 符合条件的安全组路由信息列表
     */
    public $SecurityGroupRoutes;

    /**
     * @param integer $TotalCount 符合条件的安全组路由信息总数
     * @param array $SecurityGroupRoutes 符合条件的安全组路由信息列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SecurityGroupRoutes",$param) and $param["SecurityGroupRoutes"] !== null) {
            $this->SecurityGroupRoutes = [];
            foreach ($param["SecurityGroupRoutes"] as $key => $value){
                $obj = new SecurityGroupRoute();
                $obj->deserialize($value);
                array_push($this->SecurityGroupRoutes, $obj);
            }
        }
    }
}
