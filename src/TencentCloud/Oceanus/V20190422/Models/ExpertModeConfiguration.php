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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业配置 -- 专家模式的详细配置
 *
 * @method JobGraph getJobGraph() 获取Job graph
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobGraph(JobGraph $JobGraph) 设置Job graph
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeConfig() 获取Node configuration
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeConfig(array $NodeConfig) 设置Node configuration
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlotSharingGroups() 获取Slot sharing groups
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotSharingGroups(array $SlotSharingGroups) 设置Slot sharing groups
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExpertModeConfiguration extends AbstractModel
{
    /**
     * @var JobGraph Job graph
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobGraph;

    /**
     * @var array Node configuration
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeConfig;

    /**
     * @var array Slot sharing groups
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotSharingGroups;

    /**
     * @param JobGraph $JobGraph Job graph
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeConfig Node configuration
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SlotSharingGroups Slot sharing groups
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
        if (array_key_exists("JobGraph",$param) and $param["JobGraph"] !== null) {
            $this->JobGraph = new JobGraph();
            $this->JobGraph->deserialize($param["JobGraph"]);
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = [];
            foreach ($param["NodeConfig"] as $key => $value){
                $obj = new NodeConfig();
                $obj->deserialize($value);
                array_push($this->NodeConfig, $obj);
            }
        }

        if (array_key_exists("SlotSharingGroups",$param) and $param["SlotSharingGroups"] !== null) {
            $this->SlotSharingGroups = [];
            foreach ($param["SlotSharingGroups"] as $key => $value){
                $obj = new SlotSharingGroup();
                $obj->deserialize($value);
                array_push($this->SlotSharingGroups, $obj);
            }
        }
    }
}
