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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源地图实体
 *
 * @method string getResourceMapId() 获取<p>资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceMapId(string $ResourceMapId) 设置<p>资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>资源地图名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>资源地图名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>资源地图描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>资源地图描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取<p>总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceMapInfo extends AbstractModel
{
    /**
     * @var string <p>资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceMapId;

    /**
     * @var string <p>资源地图名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>资源地图描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @param string $ResourceMapId <p>资源地图 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>资源地图名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>资源地图描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount <p>总实例数</p>
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
        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
