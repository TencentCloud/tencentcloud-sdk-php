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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网关服务版本信息返回数据
 *
 * @method array getServices() 获取网关服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServices(array $Services) 设置网关服务列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeGatewayVersionData extends AbstractModel
{
    /**
     * @var array 网关服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Services;

    /**
     * @param array $Services 网关服务列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new DescribeGatewayVersion();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }
    }
}
