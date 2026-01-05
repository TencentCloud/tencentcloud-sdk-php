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
 * ListQualityRuleGroupExecResultsByPage请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取分页序号，默认1
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，默认1
 * @method integer getPageSize() 获取分页大小，默认10
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认10
 * @method array getFilters() 获取过滤条件，支持的过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. InstanceId
描述：规则组执行实例ID。
取值：字符串

3. ParentInstanceId
描述：父实例ID。
取值：字符串

4. LifeCycleRunNum
描述：生命周期运行号。
取值：字符串

5. InstanceStatus
描述：实例状态。质量侧的实例状态，一个状态对应调度侧多个状态，具体参考取值说明
取值：
等待运行 - 
["INITIAL", "EVENT_LISTENING", "DEPENDENCE", "ALLOCATED", "LAUNCHED", "BEFORE_ASPECT", "ISSUED"]；
运行中 - ["RUNNING", "AFTER_ASPECT", "WAITING_AFTER_ASPECT"]
失败 - ["FAILED", "EXPIRED", "KILL", "KILLING", "PENDING"]
成功 - ["COMPLETED"]


6. DatasourceId
描述：数据源ID。
取值：字符串

7. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

8. DatabaseName
描述：数据库名称。
取值：字符串

9. DatabaseId
描述：数据库ID。
取值：字符串

10. SchemaName
描述：Schema名称。
取值：字符串

11. ReceiverFlag
描述：是否为当前登录用户的订阅。
取值：true - 是；false - 否

12. TableName
描述：数据表名称，支持模糊匹配。
取值：字符串

13. RuleGroupName
描述：规则组名称。
取值：字符串

14. RuleGroupExecId
描述：规则组执行ID。
取值：整数

15. RuleGroupTableId
描述：规则组表ID。
取值：整数

16. Keyword
描述：关键字搜索，支持规则组执行Id、表名称、表负责人模糊搜索。如果keyword是纯数字，默认只匹配规则组执行Id。
取值：字符串

17. StartTime
描述：实际运行时间，开始时间。
取值：Unix时间戳（秒）

18. EndTime
描述：实际运行时间，结束时间。
取值：Unix时间戳（秒）

19. ScheduledStartTime
描述：计划调度时间，开始时间。
取值：Unix时间戳（秒）

20. ScheduledEndTime
描述：计划调度时间，结束时间。
取值：Unix时间戳（秒）

21. DsJobId
描述：数据源任务ID。
取值：字符串

22. TriggerType
描述：触发类型。
取值：1 - 手动触发；2 - 调度事中触发；3 - 周期调度触发；

23. Status
描述：规则组执行状态。
取值：0 - 初始状态，未提交；1 - 已提交；2 - 检测中；3 - 正常；4 - 异常；5 - 下发中；6 - 执行链路异常；7 - 未检测，没有执行结果；

24. TableIds
描述：数据表ID集合。
取值：字符串，支持多个值（OR关系）

25. RuleGroupId
描述：规则组ID。
取值：整数

26. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

27. CatalogName
描述：数据目录名称。
取值：字符串
 * @method void setFilters(array $Filters) 设置过滤条件，支持的过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. InstanceId
描述：规则组执行实例ID。
取值：字符串

3. ParentInstanceId
描述：父实例ID。
取值：字符串

4. LifeCycleRunNum
描述：生命周期运行号。
取值：字符串

5. InstanceStatus
描述：实例状态。质量侧的实例状态，一个状态对应调度侧多个状态，具体参考取值说明
取值：
等待运行 - 
["INITIAL", "EVENT_LISTENING", "DEPENDENCE", "ALLOCATED", "LAUNCHED", "BEFORE_ASPECT", "ISSUED"]；
运行中 - ["RUNNING", "AFTER_ASPECT", "WAITING_AFTER_ASPECT"]
失败 - ["FAILED", "EXPIRED", "KILL", "KILLING", "PENDING"]
成功 - ["COMPLETED"]


6. DatasourceId
描述：数据源ID。
取值：字符串

7. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

8. DatabaseName
描述：数据库名称。
取值：字符串

9. DatabaseId
描述：数据库ID。
取值：字符串

10. SchemaName
描述：Schema名称。
取值：字符串

11. ReceiverFlag
描述：是否为当前登录用户的订阅。
取值：true - 是；false - 否

12. TableName
描述：数据表名称，支持模糊匹配。
取值：字符串

13. RuleGroupName
描述：规则组名称。
取值：字符串

14. RuleGroupExecId
描述：规则组执行ID。
取值：整数

15. RuleGroupTableId
描述：规则组表ID。
取值：整数

16. Keyword
描述：关键字搜索，支持规则组执行Id、表名称、表负责人模糊搜索。如果keyword是纯数字，默认只匹配规则组执行Id。
取值：字符串

17. StartTime
描述：实际运行时间，开始时间。
取值：Unix时间戳（秒）

18. EndTime
描述：实际运行时间，结束时间。
取值：Unix时间戳（秒）

19. ScheduledStartTime
描述：计划调度时间，开始时间。
取值：Unix时间戳（秒）

20. ScheduledEndTime
描述：计划调度时间，结束时间。
取值：Unix时间戳（秒）

21. DsJobId
描述：数据源任务ID。
取值：字符串

22. TriggerType
描述：触发类型。
取值：1 - 手动触发；2 - 调度事中触发；3 - 周期调度触发；

23. Status
描述：规则组执行状态。
取值：0 - 初始状态，未提交；1 - 已提交；2 - 检测中；3 - 正常；4 - 异常；5 - 下发中；6 - 执行链路异常；7 - 未检测，没有执行结果；

24. TableIds
描述：数据表ID集合。
取值：字符串，支持多个值（OR关系）

25. RuleGroupId
描述：规则组ID。
取值：整数

26. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

27. CatalogName
描述：数据目录名称。
取值：字符串
 * @method array getOrderFields() 获取通用排序， 
支持的排序字段：
CreateTime - 按创建时间排序
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 * @method void setOrderFields(array $OrderFields) 设置通用排序， 
支持的排序字段：
CreateTime - 按创建时间排序
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 */
class ListQualityRuleGroupExecResultsByPageRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 分页序号，默认1
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，默认10
     */
    public $PageSize;

    /**
     * @var array 过滤条件，支持的过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. InstanceId
描述：规则组执行实例ID。
取值：字符串

3. ParentInstanceId
描述：父实例ID。
取值：字符串

4. LifeCycleRunNum
描述：生命周期运行号。
取值：字符串

5. InstanceStatus
描述：实例状态。质量侧的实例状态，一个状态对应调度侧多个状态，具体参考取值说明
取值：
等待运行 - 
["INITIAL", "EVENT_LISTENING", "DEPENDENCE", "ALLOCATED", "LAUNCHED", "BEFORE_ASPECT", "ISSUED"]；
运行中 - ["RUNNING", "AFTER_ASPECT", "WAITING_AFTER_ASPECT"]
失败 - ["FAILED", "EXPIRED", "KILL", "KILLING", "PENDING"]
成功 - ["COMPLETED"]


6. DatasourceId
描述：数据源ID。
取值：字符串

7. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

8. DatabaseName
描述：数据库名称。
取值：字符串

9. DatabaseId
描述：数据库ID。
取值：字符串

10. SchemaName
描述：Schema名称。
取值：字符串

11. ReceiverFlag
描述：是否为当前登录用户的订阅。
取值：true - 是；false - 否

12. TableName
描述：数据表名称，支持模糊匹配。
取值：字符串

13. RuleGroupName
描述：规则组名称。
取值：字符串

14. RuleGroupExecId
描述：规则组执行ID。
取值：整数

15. RuleGroupTableId
描述：规则组表ID。
取值：整数

16. Keyword
描述：关键字搜索，支持规则组执行Id、表名称、表负责人模糊搜索。如果keyword是纯数字，默认只匹配规则组执行Id。
取值：字符串

17. StartTime
描述：实际运行时间，开始时间。
取值：Unix时间戳（秒）

18. EndTime
描述：实际运行时间，结束时间。
取值：Unix时间戳（秒）

19. ScheduledStartTime
描述：计划调度时间，开始时间。
取值：Unix时间戳（秒）

20. ScheduledEndTime
描述：计划调度时间，结束时间。
取值：Unix时间戳（秒）

21. DsJobId
描述：数据源任务ID。
取值：字符串

22. TriggerType
描述：触发类型。
取值：1 - 手动触发；2 - 调度事中触发；3 - 周期调度触发；

23. Status
描述：规则组执行状态。
取值：0 - 初始状态，未提交；1 - 已提交；2 - 检测中；3 - 正常；4 - 异常；5 - 下发中；6 - 执行链路异常；7 - 未检测，没有执行结果；

24. TableIds
描述：数据表ID集合。
取值：字符串，支持多个值（OR关系）

25. RuleGroupId
描述：规则组ID。
取值：整数

26. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

27. CatalogName
描述：数据目录名称。
取值：字符串
     */
    public $Filters;

    /**
     * @var array 通用排序， 
支持的排序字段：
CreateTime - 按创建时间排序
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
     */
    public $OrderFields;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 分页序号，默认1
     * @param integer $PageSize 分页大小，默认10
     * @param array $Filters 过滤条件，支持的过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. InstanceId
描述：规则组执行实例ID。
取值：字符串

3. ParentInstanceId
描述：父实例ID。
取值：字符串

4. LifeCycleRunNum
描述：生命周期运行号。
取值：字符串

5. InstanceStatus
描述：实例状态。质量侧的实例状态，一个状态对应调度侧多个状态，具体参考取值说明
取值：
等待运行 - 
["INITIAL", "EVENT_LISTENING", "DEPENDENCE", "ALLOCATED", "LAUNCHED", "BEFORE_ASPECT", "ISSUED"]；
运行中 - ["RUNNING", "AFTER_ASPECT", "WAITING_AFTER_ASPECT"]
失败 - ["FAILED", "EXPIRED", "KILL", "KILLING", "PENDING"]
成功 - ["COMPLETED"]


6. DatasourceId
描述：数据源ID。
取值：字符串

7. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

8. DatabaseName
描述：数据库名称。
取值：字符串

9. DatabaseId
描述：数据库ID。
取值：字符串

10. SchemaName
描述：Schema名称。
取值：字符串

11. ReceiverFlag
描述：是否为当前登录用户的订阅。
取值：true - 是；false - 否

12. TableName
描述：数据表名称，支持模糊匹配。
取值：字符串

13. RuleGroupName
描述：规则组名称。
取值：字符串

14. RuleGroupExecId
描述：规则组执行ID。
取值：整数

15. RuleGroupTableId
描述：规则组表ID。
取值：整数

16. Keyword
描述：关键字搜索，支持规则组执行Id、表名称、表负责人模糊搜索。如果keyword是纯数字，默认只匹配规则组执行Id。
取值：字符串

17. StartTime
描述：实际运行时间，开始时间。
取值：Unix时间戳（秒）

18. EndTime
描述：实际运行时间，结束时间。
取值：Unix时间戳（秒）

19. ScheduledStartTime
描述：计划调度时间，开始时间。
取值：Unix时间戳（秒）

20. ScheduledEndTime
描述：计划调度时间，结束时间。
取值：Unix时间戳（秒）

21. DsJobId
描述：数据源任务ID。
取值：字符串

22. TriggerType
描述：触发类型。
取值：1 - 手动触发；2 - 调度事中触发；3 - 周期调度触发；

23. Status
描述：规则组执行状态。
取值：0 - 初始状态，未提交；1 - 已提交；2 - 检测中；3 - 正常；4 - 异常；5 - 下发中；6 - 执行链路异常；7 - 未检测，没有执行结果；

24. TableIds
描述：数据表ID集合。
取值：字符串，支持多个值（OR关系）

25. RuleGroupId
描述：规则组ID。
取值：整数

26. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

27. CatalogName
描述：数据目录名称。
取值：字符串
     * @param array $OrderFields 通用排序， 
支持的排序字段：
CreateTime - 按创建时间排序
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
