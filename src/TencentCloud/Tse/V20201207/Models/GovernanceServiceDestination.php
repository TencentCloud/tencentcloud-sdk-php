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
 * 服务实例组
 *
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getService() 获取服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(string $Service) 设置服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取实例标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置实例标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovernanceServiceDestination extends AbstractModel
{
    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var array 实例标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Service 服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 实例标签
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new RoutingDestinationRuleLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
