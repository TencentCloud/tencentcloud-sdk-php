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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流节点运行详情
 *
 * @method NodeRun getNodeRun() 获取<p>节点运行信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRun(NodeRun $NodeRun) 设置<p>节点运行信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeRunContent getNodeRunContent() 获取<p>节点运行内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRunContent(NodeRunContent $NodeRunContent) 设置<p>节点运行内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeRunExecution getNodeRunExecution() 获取<p>节点运行过程</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRunExecution(NodeRunExecution $NodeRunExecution) 设置<p>节点运行过程</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeRunLog getNodeRunLog() 获取<p>节点运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeRunLog(NodeRunLog $NodeRunLog) 设置<p>节点运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatisticList() 获取<p>统计信息</p>
 * @method void setStatisticList(array $StatisticList) 设置<p>统计信息</p>
 */
class NodeRunDetail extends AbstractModel
{
    /**
     * @var NodeRun <p>节点运行信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRun;

    /**
     * @var NodeRunContent <p>节点运行内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRunContent;

    /**
     * @var NodeRunExecution <p>节点运行过程</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRunExecution;

    /**
     * @var NodeRunLog <p>节点运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeRunLog;

    /**
     * @var array <p>统计信息</p>
     */
    public $StatisticList;

    /**
     * @param NodeRun $NodeRun <p>节点运行信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeRunContent $NodeRunContent <p>节点运行内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeRunExecution $NodeRunExecution <p>节点运行过程</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeRunLog $NodeRunLog <p>节点运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StatisticList <p>统计信息</p>
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
        if (array_key_exists("NodeRun",$param) and $param["NodeRun"] !== null) {
            $this->NodeRun = new NodeRun();
            $this->NodeRun->deserialize($param["NodeRun"]);
        }

        if (array_key_exists("NodeRunContent",$param) and $param["NodeRunContent"] !== null) {
            $this->NodeRunContent = new NodeRunContent();
            $this->NodeRunContent->deserialize($param["NodeRunContent"]);
        }

        if (array_key_exists("NodeRunExecution",$param) and $param["NodeRunExecution"] !== null) {
            $this->NodeRunExecution = new NodeRunExecution();
            $this->NodeRunExecution->deserialize($param["NodeRunExecution"]);
        }

        if (array_key_exists("NodeRunLog",$param) and $param["NodeRunLog"] !== null) {
            $this->NodeRunLog = new NodeRunLog();
            $this->NodeRunLog->deserialize($param["NodeRunLog"]);
        }

        if (array_key_exists("StatisticList",$param) and $param["StatisticList"] !== null) {
            $this->StatisticList = [];
            foreach ($param["StatisticList"] as $key => $value){
                $obj = new Statistic();
                $obj->deserialize($value);
                array_push($this->StatisticList, $obj);
            }
        }
    }
}
