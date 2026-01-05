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
 * ListQualityRuleTemplates请求参数结构体
 *
 * @method string getProjectId() 获取工作空间ID
 * @method void setProjectId(string $ProjectId) 设置工作空间ID
 * @method integer getPageNumber() 获取当前页，默认1
 * @method void setPageNumber(integer $PageNumber) 设置当前页，默认1
 * @method integer getPageSize() 获取每页记录数，默认10
 * @method void setPageSize(integer $PageSize) 设置每页记录数，默认10
 * @method array getOrderFields() 获取通用排序，
支持的排序字段：
CitationCount - 按引用数量排序
UpdateTime - 按更新时间排序
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 * @method void setOrderFields(array $OrderFields) 设置通用排序，
支持的排序字段：
CitationCount - 按引用数量排序
UpdateTime - 按更新时间排序
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
 * @method array getFilters() 获取通用过滤条件
1. Id
描述：模板ID。
取值：模板的唯一标识

2. Keyword
描述：关键字搜索，支持模板名称模糊搜索。
取值：字符串

3. Type
描述：模板类型。
取值：1 - 系统模板；2 - 自定义模板；支持多个值（OR关系）

4. QualityDim
描述：质量检测维度。
取值：1 - 准确性；2 - 唯一性；3 - 完整性；4 - 一致性；5 - 及时性；6 - 有效性；支持多个值（OR关系）

5. SourceObjectType
描述：规则适用的源数据对象类型。
取值：1 - 常量；2 - 离线表级；3 - 离线字段级；4 - 库级；支持多个值（OR关系）

6. SourceEngineTypes
描述：模板适用的源数据引擎类型。
取值：1 - MySQL；2 - Hive；4 - Spark；8 - Livy；16 - DLC；32 - Gbase；64 - TCHouse-P；128 - Doris；256 - TCHouse-D；512 - EMR_StarRocks；1024 - TCHouse-X；支持多个值（OR关系）

 * @method void setFilters(array $Filters) 设置通用过滤条件
1. Id
描述：模板ID。
取值：模板的唯一标识

2. Keyword
描述：关键字搜索，支持模板名称模糊搜索。
取值：字符串

3. Type
描述：模板类型。
取值：1 - 系统模板；2 - 自定义模板；支持多个值（OR关系）

4. QualityDim
描述：质量检测维度。
取值：1 - 准确性；2 - 唯一性；3 - 完整性；4 - 一致性；5 - 及时性；6 - 有效性；支持多个值（OR关系）

5. SourceObjectType
描述：规则适用的源数据对象类型。
取值：1 - 常量；2 - 离线表级；3 - 离线字段级；4 - 库级；支持多个值（OR关系）

6. SourceEngineTypes
描述：模板适用的源数据引擎类型。
取值：1 - MySQL；2 - Hive；4 - Spark；8 - Livy；16 - DLC；32 - Gbase；64 - TCHouse-P；128 - Doris；256 - TCHouse-D；512 - EMR_StarRocks；1024 - TCHouse-X；支持多个值（OR关系）
 */
class ListQualityRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var string 工作空间ID
     */
    public $ProjectId;

    /**
     * @var integer 当前页，默认1
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数，默认10
     */
    public $PageSize;

    /**
     * @var array 通用排序，
支持的排序字段：
CitationCount - 按引用数量排序
UpdateTime - 按更新时间排序
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
     */
    public $OrderFields;

    /**
     * @var array 通用过滤条件
1. Id
描述：模板ID。
取值：模板的唯一标识

2. Keyword
描述：关键字搜索，支持模板名称模糊搜索。
取值：字符串

3. Type
描述：模板类型。
取值：1 - 系统模板；2 - 自定义模板；支持多个值（OR关系）

4. QualityDim
描述：质量检测维度。
取值：1 - 准确性；2 - 唯一性；3 - 完整性；4 - 一致性；5 - 及时性；6 - 有效性；支持多个值（OR关系）

5. SourceObjectType
描述：规则适用的源数据对象类型。
取值：1 - 常量；2 - 离线表级；3 - 离线字段级；4 - 库级；支持多个值（OR关系）

6. SourceEngineTypes
描述：模板适用的源数据引擎类型。
取值：1 - MySQL；2 - Hive；4 - Spark；8 - Livy；16 - DLC；32 - Gbase；64 - TCHouse-P；128 - Doris；256 - TCHouse-D；512 - EMR_StarRocks；1024 - TCHouse-X；支持多个值（OR关系）

     */
    public $Filters;

    /**
     * @param string $ProjectId 工作空间ID
     * @param integer $PageNumber 当前页，默认1
     * @param integer $PageSize 每页记录数，默认10
     * @param array $OrderFields 通用排序，
支持的排序字段：
CitationCount - 按引用数量排序
UpdateTime - 按更新时间排序
排序方向：
1 - 升序（ASC）
2 - 降序（DESC）
     * @param array $Filters 通用过滤条件
1. Id
描述：模板ID。
取值：模板的唯一标识

2. Keyword
描述：关键字搜索，支持模板名称模糊搜索。
取值：字符串

3. Type
描述：模板类型。
取值：1 - 系统模板；2 - 自定义模板；支持多个值（OR关系）

4. QualityDim
描述：质量检测维度。
取值：1 - 准确性；2 - 唯一性；3 - 完整性；4 - 一致性；5 - 及时性；6 - 有效性；支持多个值（OR关系）

5. SourceObjectType
描述：规则适用的源数据对象类型。
取值：1 - 常量；2 - 离线表级；3 - 离线字段级；4 - 库级；支持多个值（OR关系）

6. SourceEngineTypes
描述：模板适用的源数据引擎类型。
取值：1 - MySQL；2 - Hive；4 - Spark；8 - Livy；16 - DLC；32 - Gbase；64 - TCHouse-P；128 - Doris；256 - TCHouse-D；512 - EMR_StarRocks；1024 - TCHouse-X；支持多个值（OR关系）
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

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
