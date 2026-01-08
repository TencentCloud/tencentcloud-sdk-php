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
 * 质量监控任务执行策略
 *
 * @method integer getMonitorType() 获取监控类型 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupName() 获取监控任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupName(string $RuleGroupName) 设置监控任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取监控任务的Id，编辑更新监控任务时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置监控任务的Id，编辑更新监控任务时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecQueue() 获取计算队列，数据源为HIVE、ICEBERG、DLC时必填，数据源为DLC时，该字段填写DLC数据引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecQueue(string $ExecQueue) 设置计算队列，数据源为HIVE、ICEBERG、DLC时必填，数据源为DLC时，该字段填写DLC数据引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取关联的生产调度任务列表，MonitorType=2时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置关联的生产调度任务列表，MonitorType=2时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取周期开始时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置周期开始时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取周期结束时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置周期结束时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取调度周期类型，MonitorType=3时必填，具体可填值参考：
I：按分钟调度
H：按小时调度
D：按天调度
W：按周调度
M：按月调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置调度周期类型，MonitorType=3时必填，具体可填值参考：
I：按分钟调度
H：按小时调度
D：按天调度
W：按周调度
M：按月调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延迟调度时间，MonitorType=3时必填，主要用于调度周期为天/周/月的任务，
计量单位为分钟，比如天任务需要延迟到02:00执行，则该字段值为120，表示延迟2小时（120分钟）
对于小时/分钟任务，该字段无意义，填固定值0，否则字段校验不通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延迟调度时间，MonitorType=3时必填，主要用于调度周期为天/周/月的任务，
计量单位为分钟，比如天任务需要延迟到02:00执行，则该字段值为120，表示延迟2小时（120分钟）
对于小时/分钟任务，该字段无意义，填固定值0，否则字段校验不通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取间隔，MonitorType=3时必填，表示周期任务间隔时间
周/月/天任务可选：1
分钟任务可选：10，20，30
小时任务可选：1，2，3，4，6，8，12
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置间隔，MonitorType=3时必填，表示周期任务间隔时间
周/月/天任务可选：1
分钟任务可选：10，20，30
小时任务可选：1，2，3，4，6，8，12
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取时间指定，主要用于调度周期为周/月的任务
调度周期为周时：含义为指定周几运行，可选多个，英文逗号隔开
可填1,2...7，依次代表周日，周一...周六，例如填“1,2”，表示周日、周一执行；

调度周期为月时，含义为指定每月的几号运行，可选多个，英文逗号隔开
可填1,2,...,31，依次代表1号，2号...31号，例如填“1,2”，表示每月的1号、2号执行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置时间指定，主要用于调度周期为周/月的任务
调度周期为周时：含义为指定周几运行，可选多个，英文逗号隔开
可填1,2...7，依次代表周日，周一...周六，例如填“1,2”，表示周日、周一执行；

调度周期为月时，含义为指定每月的几号运行，可选多个，英文逗号隔开
可填1,2,...,31，依次代表1号，2号...31号，例如填“1,2”，表示每月的1号、2号执行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecEngineType() 获取运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecEngineType(string $ExecEngineType) 设置运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecPlan() 获取执行计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecPlan(string $ExecPlan) 设置执行计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerTypes() 获取触发类型，主要用于“关联生产调度”（MonitorType=2）的监控任务，可选值：
CYCLE：周期调度
MAKE_UP：补录
RERUN：重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTypes(array $TriggerTypes) 设置触发类型，主要用于“关联生产调度”（MonitorType=2）的监控任务，可选值：
CYCLE：周期调度
MAKE_UP：补录
RERUN：重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcGroupName() 获取数据源为DLC时，对应DLC资源组，根据ExecQueue中填的DLC引擎名称，选择对应引擎下的资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcGroupName(string $DlcGroupName) 设置数据源为DLC时，对应DLC资源组，根据ExecQueue中填的DLC引擎名称，选择对应引擎下的资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置schema名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取时区，默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区，默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityRuleGroupConfig getGroupConfig() 获取任务监控参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupConfig(QualityRuleGroupConfig $GroupConfig) 设置任务监控参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineParam() 获取引擎参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineParam(string $EngineParam) 设置引擎参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录名称，不填默认为DataLakeCatalog（更新质量监控时该参数无效）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称，不填默认为DataLakeCatalog（更新质量监控时该参数无效）
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleGroupExecStrategy extends AbstractModel
{
    /**
     * @var integer 监控类型 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 监控任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupName;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 监控任务的Id，编辑更新监控任务时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 计算队列，数据源为HIVE、ICEBERG、DLC时必填，数据源为DLC时，该字段填写DLC数据引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecQueue;

    /**
     * @var string 执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var array 关联的生产调度任务列表，MonitorType=2时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 周期开始时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 周期结束时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 调度周期类型，MonitorType=3时必填，具体可填值参考：
I：按分钟调度
H：按小时调度
D：按天调度
W：按周调度
M：按月调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 延迟调度时间，MonitorType=3时必填，主要用于调度周期为天/周/月的任务，
计量单位为分钟，比如天任务需要延迟到02:00执行，则该字段值为120，表示延迟2小时（120分钟）
对于小时/分钟任务，该字段无意义，填固定值0，否则字段校验不通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer 间隔，MonitorType=3时必填，表示周期任务间隔时间
周/月/天任务可选：1
分钟任务可选：10，20，30
小时任务可选：1，2，3，4，6，8，12
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 时间指定，主要用于调度周期为周/月的任务
调度周期为周时：含义为指定周几运行，可选多个，英文逗号隔开
可填1,2...7，依次代表周日，周一...周六，例如填“1,2”，表示周日、周一执行；

调度周期为月时，含义为指定每月的几号运行，可选多个，英文逗号隔开
可填1,2,...,31，依次代表1号，2号...31号，例如填“1,2”，表示每月的1号、2号执行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecEngineType;

    /**
     * @var string 执行计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecPlan;

    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var array 触发类型，主要用于“关联生产调度”（MonitorType=2）的监控任务，可选值：
CYCLE：周期调度
MAKE_UP：补录
RERUN：重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTypes;

    /**
     * @var string 数据源为DLC时，对应DLC资源组，根据ExecQueue中填的DLC引擎名称，选择对应引擎下的资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcGroupName;

    /**
     * @var string schema名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 时区，默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var QualityRuleGroupConfig 任务监控参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupConfig;

    /**
     * @var string 引擎参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineParam;

    /**
     * @var string 数据目录名称，不填默认为DataLakeCatalog（更新质量监控时该参数无效）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @param integer $MonitorType 监控类型 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupName 监控任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 监控任务的Id，编辑更新监控任务时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecQueue 计算队列，数据源为HIVE、ICEBERG、DLC时必填，数据源为DLC时，该字段填写DLC数据引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 关联的生产调度任务列表，MonitorType=2时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 周期开始时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 周期结束时间，MonitorType=3时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 调度周期类型，MonitorType=3时必填，具体可填值参考：
I：按分钟调度
H：按小时调度
D：按天调度
W：按周调度
M：按月调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延迟调度时间，MonitorType=3时必填，主要用于调度周期为天/周/月的任务，
计量单位为分钟，比如天任务需要延迟到02:00执行，则该字段值为120，表示延迟2小时（120分钟）
对于小时/分钟任务，该字段无意义，填固定值0，否则字段校验不通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 间隔，MonitorType=3时必填，表示周期任务间隔时间
周/月/天任务可选：1
分钟任务可选：10，20，30
小时任务可选：1，2，3，4，6，8，12
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 时间指定，主要用于调度周期为周/月的任务
调度周期为周时：含义为指定周几运行，可选多个，英文逗号隔开
可填1,2...7，依次代表周日，周一...周六，例如填“1,2”，表示周日、周一执行；

调度周期为月时，含义为指定每月的几号运行，可选多个，英文逗号隔开
可填1,2,...,31，依次代表1号，2号...31号，例如填“1,2”，表示每月的1号、2号执行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecEngineType 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecPlan 执行计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerTypes 触发类型，主要用于“关联生产调度”（MonitorType=2）的监控任务，可选值：
CYCLE：周期调度
MAKE_UP：补录
RERUN：重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcGroupName 数据源为DLC时，对应DLC资源组，根据ExecQueue中填的DLC引擎名称，选择对应引擎下的资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName schema名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone 时区，默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityRuleGroupConfig $GroupConfig 任务监控参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineParam 引擎参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据目录名称，不填默认为DataLakeCatalog（更新质量监控时该参数无效）
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
        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("RuleGroupName",$param) and $param["RuleGroupName"] !== null) {
            $this->RuleGroupName = $param["RuleGroupName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("ExecQueue",$param) and $param["ExecQueue"] !== null) {
            $this->ExecQueue = $param["ExecQueue"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new QualityProdSchedulerTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecEngineType",$param) and $param["ExecEngineType"] !== null) {
            $this->ExecEngineType = $param["ExecEngineType"];
        }

        if (array_key_exists("ExecPlan",$param) and $param["ExecPlan"] !== null) {
            $this->ExecPlan = $param["ExecPlan"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("TriggerTypes",$param) and $param["TriggerTypes"] !== null) {
            $this->TriggerTypes = $param["TriggerTypes"];
        }

        if (array_key_exists("DlcGroupName",$param) and $param["DlcGroupName"] !== null) {
            $this->DlcGroupName = $param["DlcGroupName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("GroupConfig",$param) and $param["GroupConfig"] !== null) {
            $this->GroupConfig = new QualityRuleGroupConfig();
            $this->GroupConfig->deserialize($param["GroupConfig"]);
        }

        if (array_key_exists("EngineParam",$param) and $param["EngineParam"] !== null) {
            $this->EngineParam = $param["EngineParam"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
