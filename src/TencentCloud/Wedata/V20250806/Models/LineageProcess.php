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
 * LineageProcess 血缘产出过程
 *
 * @method string getProcessId() 获取原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(string $ProcessId) 设置原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessType() 获取任务类型
    //调度任务
    SCHEDULE_TASK,
    //集成任务
    INTEGRATION_TASK,
    //第三方上报
    THIRD_REPORT,
    //数据建模
    TABLE_MODEL,
    //模型创建指标
    MODEL_METRIC,
    //原子指标创建衍生指标
    METRIC_METRIC,
    //数据服务
    DATA_SERVICE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessType(string $ProcessType) 设置任务类型
    //调度任务
    SCHEDULE_TASK,
    //集成任务
    INTEGRATION_TASK,
    //第三方上报
    THIRD_REPORT,
    //数据建模
    TABLE_MODEL,
    //模型创建指标
    MODEL_METRIC,
    //原子指标创建衍生指标
    METRIC_METRIC,
    //数据服务
    DATA_SERVICE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatform() 获取WEDATA, THIRD;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(string $Platform) 设置WEDATA, THIRD;
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessSubType() 获取任务子类型
 SQL_TASK,
    //集成实时任务血缘
    INTEGRATED_STREAM,
    //集成离线任务血缘
    INTEGRATED_OFFLINE;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessSubType(string $ProcessSubType) 设置任务子类型
 SQL_TASK,
    //集成实时任务血缘
    INTEGRATED_STREAM,
    //集成离线任务血缘
    INTEGRATED_OFFLINE;
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcessProperties() 获取额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessProperties(array $ProcessProperties) 设置额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineageNodeId() 获取血缘任务唯一节点ID
 * @method void setLineageNodeId(string $LineageNodeId) 设置血缘任务唯一节点ID
 */
class LineageProcess extends AbstractModel
{
    /**
     * @var string 原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string 任务类型
    //调度任务
    SCHEDULE_TASK,
    //集成任务
    INTEGRATION_TASK,
    //第三方上报
    THIRD_REPORT,
    //数据建模
    TABLE_MODEL,
    //模型创建指标
    MODEL_METRIC,
    //原子指标创建衍生指标
    METRIC_METRIC,
    //数据服务
    DATA_SERVICE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessType;

    /**
     * @var string WEDATA, THIRD;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var string 任务子类型
 SQL_TASK,
    //集成实时任务血缘
    INTEGRATED_STREAM,
    //集成离线任务血缘
    INTEGRATED_OFFLINE;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessSubType;

    /**
     * @var array 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessProperties;

    /**
     * @var string 血缘任务唯一节点ID
     */
    public $LineageNodeId;

    /**
     * @param string $ProcessId 原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessType 任务类型
    //调度任务
    SCHEDULE_TASK,
    //集成任务
    INTEGRATION_TASK,
    //第三方上报
    THIRD_REPORT,
    //数据建模
    TABLE_MODEL,
    //模型创建指标
    MODEL_METRIC,
    //原子指标创建衍生指标
    METRIC_METRIC,
    //数据服务
    DATA_SERVICE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Platform WEDATA, THIRD;
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessSubType 任务子类型
 SQL_TASK,
    //集成实时任务血缘
    INTEGRATED_STREAM,
    //集成离线任务血缘
    INTEGRATED_OFFLINE;
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProcessProperties 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineageNodeId 血缘任务唯一节点ID
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
        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProcessSubType",$param) and $param["ProcessSubType"] !== null) {
            $this->ProcessSubType = $param["ProcessSubType"];
        }

        if (array_key_exists("ProcessProperties",$param) and $param["ProcessProperties"] !== null) {
            $this->ProcessProperties = [];
            foreach ($param["ProcessProperties"] as $key => $value){
                $obj = new LineageProperty();
                $obj->deserialize($value);
                array_push($this->ProcessProperties, $obj);
            }
        }

        if (array_key_exists("LineageNodeId",$param) and $param["LineageNodeId"] !== null) {
            $this->LineageNodeId = $param["LineageNodeId"];
        }
    }
}
