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
 * CreateGlobalRoutes请求参数结构体
 *
 * @method string getVpcId() 获取VPC唯一Id。
 * @method void setVpcId(string $VpcId) 设置VPC唯一Id。
 * @method array getGlobalRoutes() 获取全局路由对象。创建时必填参数： 'GatewayType'，'GatewayId'，'DestinationCidrBlock'。

 * @method void setGlobalRoutes(array $GlobalRoutes) 设置全局路由对象。创建时必填参数： 'GatewayType'，'GatewayId'，'DestinationCidrBlock'。
 */
class CreateGlobalRoutesRequest extends AbstractModel
{
    /**
     * @var string VPC唯一Id。
     */
    public $VpcId;

    /**
     * @var array 全局路由对象。创建时必填参数： 'GatewayType'，'GatewayId'，'DestinationCidrBlock'。

     */
    public $GlobalRoutes;

    /**
     * @param string $VpcId VPC唯一Id。
     * @param array $GlobalRoutes 全局路由对象。创建时必填参数： 'GatewayType'，'GatewayId'，'DestinationCidrBlock'。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("GlobalRoutes",$param) and $param["GlobalRoutes"] !== null) {
            $this->GlobalRoutes = [];
            foreach ($param["GlobalRoutes"] as $key => $value){
                $obj = new GlobalRoute();
                $obj->deserialize($value);
                array_push($this->GlobalRoutes, $obj);
            }
        }
    }
}
