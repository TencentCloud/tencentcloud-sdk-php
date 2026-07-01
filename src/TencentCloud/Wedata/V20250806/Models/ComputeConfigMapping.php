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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存算配置映射列表，对应页面“存算引擎配置”
 *
 * @method integer getTaskTypeId() 获取<p>任务类型ID</p><p>枚举值：</p><ul><li>32： DLC_SQL</li><li>46： DLC_SPARK</li><li>50： DLC_PYSPARK</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型ID</p><p>枚举值：</p><ul><li>32： DLC_SQL</li><li>46： DLC_SPARK</li><li>50： DLC_PYSPARK</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputeConfigItem() 获取<p>存算配置项。当前支持：COMPUTE_ENGINE、DLC_ENGINE_RESOURCE_GROUP</p><p>枚举值：</p><ul><li>COMPUTE_ENGINE： DLC 标准计算引擎</li><li>DLC_ENGINE_RESOURCE_GROUP：  DLC 标准引擎资源组</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeConfigItem(string $ComputeConfigItem) 设置<p>存算配置项。当前支持：COMPUTE_ENGINE、DLC_ENGINE_RESOURCE_GROUP</p><p>枚举值：</p><ul><li>COMPUTE_ENGINE： DLC 标准计算引擎</li><li>DLC_ENGINE_RESOURCE_GROUP：  DLC 标准引擎资源组</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskIds() 获取<p>指定任务列表，非空时表示任务级覆盖，当前仅支持 DLC_SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIds(array $TaskIds) 设置<p>指定任务列表，非空时表示任务级覆盖，当前仅支持 DLC_SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceValue() 获取<p>ComputeConfigItem=COMPUTE_ENGINE 时表示原引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示原 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceValue(string $SourceValue) 设置<p>ComputeConfigItem=COMPUTE_ENGINE 时表示原引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示原 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetValue() 获取<p>ComputeConfigItem=COMPUTE_ENGINE 时表示目标引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示目标 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetValue(string $TargetValue) 设置<p>ComputeConfigItem=COMPUTE_ENGINE 时表示目标引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示目标 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComputeConfigMapping extends AbstractModel
{
    /**
     * @var integer <p>任务类型ID</p><p>枚举值：</p><ul><li>32： DLC_SQL</li><li>46： DLC_SPARK</li><li>50： DLC_PYSPARK</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>存算配置项。当前支持：COMPUTE_ENGINE、DLC_ENGINE_RESOURCE_GROUP</p><p>枚举值：</p><ul><li>COMPUTE_ENGINE： DLC 标准计算引擎</li><li>DLC_ENGINE_RESOURCE_GROUP：  DLC 标准引擎资源组</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeConfigItem;

    /**
     * @var array <p>指定任务列表，非空时表示任务级覆盖，当前仅支持 DLC_SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIds;

    /**
     * @var string <p>ComputeConfigItem=COMPUTE_ENGINE 时表示原引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示原 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceValue;

    /**
     * @var string <p>ComputeConfigItem=COMPUTE_ENGINE 时表示目标引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示目标 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetValue;

    /**
     * @param integer $TaskTypeId <p>任务类型ID</p><p>枚举值：</p><ul><li>32： DLC_SQL</li><li>46： DLC_SPARK</li><li>50： DLC_PYSPARK</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputeConfigItem <p>存算配置项。当前支持：COMPUTE_ENGINE、DLC_ENGINE_RESOURCE_GROUP</p><p>枚举值：</p><ul><li>COMPUTE_ENGINE： DLC 标准计算引擎</li><li>DLC_ENGINE_RESOURCE_GROUP：  DLC 标准引擎资源组</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskIds <p>指定任务列表，非空时表示任务级覆盖，当前仅支持 DLC_SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceValue <p>ComputeConfigItem=COMPUTE_ENGINE 时表示原引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示原 DLC 标准引擎资源组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetValue <p>ComputeConfigItem=COMPUTE_ENGINE 时表示目标引擎名；ComputeConfigItem=DLC_ENGINE_RESOURCE_GROUP 时表示目标 DLC 标准引擎资源组名</p>
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
        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ComputeConfigItem",$param) and $param["ComputeConfigItem"] !== null) {
            $this->ComputeConfigItem = $param["ComputeConfigItem"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("SourceValue",$param) and $param["SourceValue"] !== null) {
            $this->SourceValue = $param["SourceValue"];
        }

        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }
    }
}
