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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待提交任务信息
 *
 * @method string getTaskId() 获取<p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyType() 获取<p>修改类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyType(string $ModifyType) 设置<p>修改类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitPreCheck() 获取<p>提交预检查（Y/N）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitPreCheck(string $SubmitPreCheck) 设置<p>提交预检查（Y/N）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubmitPreCheckDetailList() 获取<p>提交预检查提交可能会失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitPreCheckDetailList(array $SubmitPreCheckDetailList) 设置<p>提交预检查提交可能会失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取<p>资源组编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置<p>资源组编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取<p>任务类型id，取值范围：</p><ul><li>26 离线集成任务</li><li>30 Python任务</li><li>31 PySpark任务</li><li>34 HiveSQL任务</li><li>35 Shell任务</li><li>36 SparkSQL任务</li><li>21 JdbcSQL任务</li><li>23 TDSQL-PostgreSQL任务</li><li>32 DLCSQL任务</li><li>33 Impala任务</li><li>41 Kettle任务</li><li>42 Tchouse-X任务</li><li>43 TCHouse-X SQL任务</li><li>46 DLCSpark任务</li><li>50 DLC-PySpark任务</li><li>47 TiOne任务</li><li>48 Trino任务</li><li>39 Spark任务</li><li>92 MapReduce任务</li><li>38 Shell表单模式任务</li><li>130 BranchNode任务</li><li>131 MergeNode任务</li><li>132 Notebook任务</li><li>133 SSH任务</li><li>134 StarRocks任务</li><li>137 For-each任务</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型id，取值范围：</p><ul><li>26 离线集成任务</li><li>30 Python任务</li><li>31 PySpark任务</li><li>34 HiveSQL任务</li><li>35 Shell任务</li><li>36 SparkSQL任务</li><li>21 JdbcSQL任务</li><li>23 TDSQL-PostgreSQL任务</li><li>32 DLCSQL任务</li><li>33 Impala任务</li><li>41 Kettle任务</li><li>42 Tchouse-X任务</li><li>43 TCHouse-X SQL任务</li><li>46 DLCSpark任务</li><li>50 DLC-PySpark任务</li><li>47 TiOne任务</li><li>48 Trino任务</li><li>39 Spark任务</li><li>92 MapReduce任务</li><li>38 Shell表单模式任务</li><li>130 BranchNode任务</li><li>131 MergeNode任务</li><li>132 Notebook任务</li><li>133 SSH任务</li><li>134 StarRocks任务</li><li>137 For-each任务</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePendingSubmitTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>修改类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyType;

    /**
     * @var string <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string <p>提交预检查（Y/N）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitPreCheck;

    /**
     * @var array <p>提交预检查提交可能会失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitPreCheckDetailList;

    /**
     * @var string <p>资源组编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var integer <p>任务类型id，取值范围：</p><ul><li>26 离线集成任务</li><li>30 Python任务</li><li>31 PySpark任务</li><li>34 HiveSQL任务</li><li>35 Shell任务</li><li>36 SparkSQL任务</li><li>21 JdbcSQL任务</li><li>23 TDSQL-PostgreSQL任务</li><li>32 DLCSQL任务</li><li>33 Impala任务</li><li>41 Kettle任务</li><li>42 Tchouse-X任务</li><li>43 TCHouse-X SQL任务</li><li>46 DLCSpark任务</li><li>50 DLC-PySpark任务</li><li>47 TiOne任务</li><li>48 Trino任务</li><li>39 Spark任务</li><li>92 MapReduce任务</li><li>38 Shell表单模式任务</li><li>130 BranchNode任务</li><li>131 MergeNode任务</li><li>132 Notebook任务</li><li>133 SSH任务</li><li>134 StarRocks任务</li><li>137 For-each任务</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $TaskId <p>任务编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyType <p>修改类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitPreCheck <p>提交预检查（Y/N）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubmitPreCheckDetailList <p>提交预检查提交可能会失败的原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId <p>资源组编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId <p>任务类型id，取值范围：</p><ul><li>26 离线集成任务</li><li>30 Python任务</li><li>31 PySpark任务</li><li>34 HiveSQL任务</li><li>35 Shell任务</li><li>36 SparkSQL任务</li><li>21 JdbcSQL任务</li><li>23 TDSQL-PostgreSQL任务</li><li>32 DLCSQL任务</li><li>33 Impala任务</li><li>41 Kettle任务</li><li>42 Tchouse-X任务</li><li>43 TCHouse-X SQL任务</li><li>46 DLCSpark任务</li><li>50 DLC-PySpark任务</li><li>47 TiOne任务</li><li>48 Trino任务</li><li>39 Spark任务</li><li>92 MapReduce任务</li><li>38 Shell表单模式任务</li><li>130 BranchNode任务</li><li>131 MergeNode任务</li><li>132 Notebook任务</li><li>133 SSH任务</li><li>134 StarRocks任务</li><li>137 For-each任务</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("SubmitPreCheck",$param) and $param["SubmitPreCheck"] !== null) {
            $this->SubmitPreCheck = $param["SubmitPreCheck"];
        }

        if (array_key_exists("SubmitPreCheckDetailList",$param) and $param["SubmitPreCheckDetailList"] !== null) {
            $this->SubmitPreCheckDetailList = [];
            foreach ($param["SubmitPreCheckDetailList"] as $key => $value){
                $obj = new TaskSubmitPreCheckDetailInfo();
                $obj->deserialize($value);
                array_push($this->SubmitPreCheckDetailList, $obj);
            }
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
