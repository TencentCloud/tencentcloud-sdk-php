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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResourceInfo
 *
 * @method string getAttributionType() 获取归属类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributionType(string $AttributionType) 设置归属类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstance() 获取如资源类型为spark-sql 取值为Name, 如为spark-batch 取值为session app_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(string $Instance) 设置如资源类型为spark-sql 取值为Name, 如为spark-batch 取值为session app_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFavor() 获取亲和性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFavor(array $Favor) 设置亲和性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取标准引擎资源组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置标准引擎资源组信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string 归属类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributionType;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 如资源类型为spark-sql 取值为Name, 如为spark-batch 取值为session app_name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var array 亲和性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Favor;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 标准引擎资源组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @param string $AttributionType 归属类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Instance 如资源类型为spark-sql 取值为Name, 如为spark-batch 取值为session app_name
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Favor 亲和性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 标准引擎资源组信息
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
        if (array_key_exists("AttributionType",$param) and $param["AttributionType"] !== null) {
            $this->AttributionType = $param["AttributionType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Favor",$param) and $param["Favor"] !== null) {
            $this->Favor = [];
            foreach ($param["Favor"] as $key => $value){
                $obj = new FavorInfo();
                $obj->deserialize($value);
                array_push($this->Favor, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
