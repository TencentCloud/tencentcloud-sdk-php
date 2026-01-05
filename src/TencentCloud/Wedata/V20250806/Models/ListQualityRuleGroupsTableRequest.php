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
 * ListQualityRuleGroupsTable请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getPageNumber() 获取分页序号，默认1
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，默认1
 * @method integer getPageSize() 获取分页大小，默认10
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认10
 * @method array getFilters() 获取过滤条件, 可选过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；DASHBOARD-仪表盘类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. DeployStatus
描述：规则组部署状态，主要用于WORKFLOW_NODE类型的规则组
取值：PRODUCTION - 生产环境；DRAFT - 草稿套

3. RuleGroupName
描述：规则组名称。
取值：字符串

4. RuleGroupId
描述：规则组ID。
取值：整数

5. TableOwnerName
描述：表负责人名称，支持模糊匹配。
取值：字符串

6. TableOwnerAccount
描述：表负责人账号ID。
取值：整数，支持多个值（OR关系）

7. TableOwnerFlag
描述：是否为当前表负责人。
取值：true - 是；false - 否

8. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

9. DatasourceId
描述：数据源ID。
取值：字符串

10. DatabaseName
描述：数据库名称。
取值：字符串

11. SchemaName
描述：Schema名称。
取值：字符串

12. TableName
描述：数据源表名称，支持模糊匹配。
取值：字符串

13. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

14. CatalogName
描述：数据目录名称。
取值：字符串


 * @method void setFilters(array $Filters) 设置过滤条件, 可选过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；DASHBOARD-仪表盘类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. DeployStatus
描述：规则组部署状态，主要用于WORKFLOW_NODE类型的规则组
取值：PRODUCTION - 生产环境；DRAFT - 草稿套

3. RuleGroupName
描述：规则组名称。
取值：字符串

4. RuleGroupId
描述：规则组ID。
取值：整数

5. TableOwnerName
描述：表负责人名称，支持模糊匹配。
取值：字符串

6. TableOwnerAccount
描述：表负责人账号ID。
取值：整数，支持多个值（OR关系）

7. TableOwnerFlag
描述：是否为当前表负责人。
取值：true - 是；false - 否

8. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

9. DatasourceId
描述：数据源ID。
取值：字符串

10. DatabaseName
描述：数据库名称。
取值：字符串

11. SchemaName
描述：Schema名称。
取值：字符串

12. TableName
描述：数据源表名称，支持模糊匹配。
取值：字符串

13. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

14. CatalogName
描述：数据目录名称。
取值：字符串


 * @method array getOrderFields() 获取通用排序，
支持的排序字段：
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 * @method void setOrderFields(array $OrderFields) 设置通用排序，
支持的排序字段：
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 */
class ListQualityRuleGroupsTableRequest extends AbstractModel
{
    /**
     * @var string 项目Id
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
     * @var array 过滤条件, 可选过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；DASHBOARD-仪表盘类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. DeployStatus
描述：规则组部署状态，主要用于WORKFLOW_NODE类型的规则组
取值：PRODUCTION - 生产环境；DRAFT - 草稿套

3. RuleGroupName
描述：规则组名称。
取值：字符串

4. RuleGroupId
描述：规则组ID。
取值：整数

5. TableOwnerName
描述：表负责人名称，支持模糊匹配。
取值：字符串

6. TableOwnerAccount
描述：表负责人账号ID。
取值：整数，支持多个值（OR关系）

7. TableOwnerFlag
描述：是否为当前表负责人。
取值：true - 是；false - 否

8. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

9. DatasourceId
描述：数据源ID。
取值：字符串

10. DatabaseName
描述：数据库名称。
取值：字符串

11. SchemaName
描述：Schema名称。
取值：字符串

12. TableName
描述：数据源表名称，支持模糊匹配。
取值：字符串

13. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

14. CatalogName
描述：数据目录名称。
取值：字符串


     */
    public $Filters;

    /**
     * @var array 通用排序，
支持的排序字段：
UpdateTime - 按更新时间排序（默认）
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
     */
    public $OrderFields;

    /**
     * @param string $ProjectId 项目Id
     * @param integer $PageNumber 分页序号，默认1
     * @param integer $PageSize 分页大小，默认10
     * @param array $Filters 过滤条件, 可选过滤条件如下：
1. GroupType
描述：规则组类型，标识规则组所属的分类。
取值：DEFAULT - 默认类型；DASHBOARD-仪表盘类型；WORKFLOW_NODE - 编排空间工作流节点类型

2. DeployStatus
描述：规则组部署状态，主要用于WORKFLOW_NODE类型的规则组
取值：PRODUCTION - 生产环境；DRAFT - 草稿套

3. RuleGroupName
描述：规则组名称。
取值：字符串

4. RuleGroupId
描述：规则组ID。
取值：整数

5. TableOwnerName
描述：表负责人名称，支持模糊匹配。
取值：字符串

6. TableOwnerAccount
描述：表负责人账号ID。
取值：整数，支持多个值（OR关系）

7. TableOwnerFlag
描述：是否为当前表负责人。
取值：true - 是；false - 否

8. DatasourceType
描述：数据源类型。
取值：1 - MYSQL；2 - HIVE；3 - DLC；4 - GBASE；5 - TCHouse-P/CDW；6 - ICEBERG；7 - DORIS；8 - TCHouse-D；9 - EMR_STARROCKS；10 - TBDS_STARROCKS；11 - TCHouse-X

9. DatasourceId
描述：数据源ID。
取值：字符串

10. DatabaseName
描述：数据库名称。
取值：字符串

11. SchemaName
描述：Schema名称。
取值：字符串

12. TableName
描述：数据源表名称，支持模糊匹配。
取值：字符串

13. BizCatalogIds
描述：业务目录ID。
取值：整数，支持多个值（OR关系）

14. CatalogName
描述：数据目录名称。
取值：字符串


     * @param array $OrderFields 通用排序，
支持的排序字段：
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
