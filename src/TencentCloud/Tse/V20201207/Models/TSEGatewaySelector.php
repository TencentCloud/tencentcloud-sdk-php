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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关服务信息匹配条件
 *
 * @method string getGatewayId() 获取网关引擎实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关引擎实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServices() 获取网关服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServices(array $Services) 设置网关服务
注意：此字段可能返回 null，表示取不到有效值。
 */
class TSEGatewaySelector extends AbstractModel
{
    /**
     * @var string 网关引擎实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var array 网关服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Services;

    /**
     * @param string $GatewayId 网关引擎实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Services 网关服务
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
    }
}
