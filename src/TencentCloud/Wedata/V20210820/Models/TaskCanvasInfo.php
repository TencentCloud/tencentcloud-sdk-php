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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method string getTaskId() 获取任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取任务类型描述，其中任务类型id和任务类型描述的对应的关系为
20	通用数据同步任务
21	JDBC SQL
22	Tbase
25	数据ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS到HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE到MYSQL
56	THIVE到PG
66	HDFS到PG
67	HDFS到Oracle
68	HDFS到MYSQL
69	FTP到HDFS
70	HIVE SQL
72	HIVE到HDFS
75	HDFS到HIVE
81	PYTHONSQL脚本
82	SPARKSCALA计算
83	虫洞任务
84	校验对账文件
85	HDFS到THIVE
86	TDW到HDFS
87	HDFS到TDW
88	校验对账文件
91	FLINK任务
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	MYSQL导入至HIVE(DX)
104	MYSQL到HIVE
105	HIVE到MYSQL
106	SQL SERVER到HIVE
107	HIVE到SQL SERVER
108	ORACLE到HIVE
109	HIVE到ORACLE
111	HIVE到MYSQL(NEW)
112	HIVE到PG
113	HIVE到PHOENIX
118	MYSQL到HDFS
119	PG到HDFS
120	ORACLE到HDFS
121	数据质量
10000	自定义业务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置任务类型描述，其中任务类型id和任务类型描述的对应的关系为
20	通用数据同步任务
21	JDBC SQL
22	Tbase
25	数据ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS到HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE到MYSQL
56	THIVE到PG
66	HDFS到PG
67	HDFS到Oracle
68	HDFS到MYSQL
69	FTP到HDFS
70	HIVE SQL
72	HIVE到HDFS
75	HDFS到HIVE
81	PYTHONSQL脚本
82	SPARKSCALA计算
83	虫洞任务
84	校验对账文件
85	HDFS到THIVE
86	TDW到HDFS
87	HDFS到TDW
88	校验对账文件
91	FLINK任务
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	MYSQL导入至HIVE(DX)
104	MYSQL到HIVE
105	HIVE到MYSQL
106	SQL SERVER到HIVE
107	HIVE到SQL SERVER
108	ORACLE到HIVE
109	HIVE到ORACLE
111	HIVE到MYSQL(NEW)
112	HIVE到PG
113	HIVE到PHOENIX
118	MYSQL到HDFS
119	PG到HDFS
120	ORACLE到HDFS
121	数据质量
10000	自定义业务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取调度计划展示描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置调度计划展示描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取画布x轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置画布x轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取画布y轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置画布y轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取弹性周期配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置弹性周期配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延迟时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskCanvasInfo extends AbstractModel
{
    /**
     * @var string 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string 任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 任务类型描述，其中任务类型id和任务类型描述的对应的关系为
20	通用数据同步任务
21	JDBC SQL
22	Tbase
25	数据ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS到HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE到MYSQL
56	THIVE到PG
66	HDFS到PG
67	HDFS到Oracle
68	HDFS到MYSQL
69	FTP到HDFS
70	HIVE SQL
72	HIVE到HDFS
75	HDFS到HIVE
81	PYTHONSQL脚本
82	SPARKSCALA计算
83	虫洞任务
84	校验对账文件
85	HDFS到THIVE
86	TDW到HDFS
87	HDFS到TDW
88	校验对账文件
91	FLINK任务
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	MYSQL导入至HIVE(DX)
104	MYSQL到HIVE
105	HIVE到MYSQL
106	SQL SERVER到HIVE
107	HIVE到SQL SERVER
108	ORACLE到HIVE
109	HIVE到ORACLE
111	HIVE到MYSQL(NEW)
112	HIVE到PG
113	HIVE到PHOENIX
118	MYSQL到HDFS
119	PG到HDFS
120	ORACLE到HDFS
121	数据质量
10000	自定义业务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string 首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string 调度计划展示描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var float 画布x轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 画布y轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var boolean 跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string 弹性周期配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var integer 延迟时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @param string $TaskId 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，'Y','F','O','T','INVALID' 分别表示调度中、已停止、已暂停、停止中、已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc 任务类型描述，其中任务类型id和任务类型描述的对应的关系为
20	通用数据同步任务
21	JDBC SQL
22	Tbase
25	数据ETL
30	Python
31	PySpark
34	Hive SQL
35	Shell
36	Spark SQL
37	HDFS到HBase
38	SHELL
39	Spark
45	DATA_QUALITY
55	THIVE到MYSQL
56	THIVE到PG
66	HDFS到PG
67	HDFS到Oracle
68	HDFS到MYSQL
69	FTP到HDFS
70	HIVE SQL
72	HIVE到HDFS
75	HDFS到HIVE
81	PYTHONSQL脚本
82	SPARKSCALA计算
83	虫洞任务
84	校验对账文件
85	HDFS到THIVE
86	TDW到HDFS
87	HDFS到TDW
88	校验对账文件
91	FLINK任务
92	MapReduce
98	custom topology
99	kafkatoHDFS
100	kafkatoHbase
101	MYSQL导入至HIVE(DX)
104	MYSQL到HIVE
105	HIVE到MYSQL
106	SQL SERVER到HIVE
107	HIVE到SQL SERVER
108	ORACLE到HIVE
109	HIVE到ORACLE
111	HIVE到MYSQL(NEW)
112	HIVE到PG
113	HIVE到PHOENIX
118	MYSQL到HDFS
119	PG到HDFS
120	ORACLE到HDFS
121	数据质量
10000	自定义业务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime 首次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc 调度计划展示描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit 调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 画布x轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 画布y轴坐标点
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 跨工作流虚拟任务标识；true标识跨工作流任务；false标识本工作流任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 弹性周期配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延迟时间
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }
    }
}
