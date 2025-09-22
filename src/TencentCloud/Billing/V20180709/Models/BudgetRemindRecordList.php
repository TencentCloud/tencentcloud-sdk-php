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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算管理的分页数据
 *
 * @method boolean getOptimizeCountSql() 获取自动优化 COUNT SQL 如果遇到 jSqlParser 无法解析情况，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptimizeCountSql(boolean $OptimizeCountSql) 设置自动优化 COUNT SQL 如果遇到 jSqlParser 无法解析情况，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPages() 获取分页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPages(integer $Pages) 设置分页
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrders() 获取排序字段信息，允许前端传入的时候，注意 SQL 注入问题，可以使用 SqlInjectionUtils.check(...) 检查文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrders(array $Orders) 设置排序字段信息，允许前端传入的时候，注意 SQL 注入问题，可以使用 SqlInjectionUtils.check(...) 检查文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountId() 获取xml 自定义 count 查询的 statementId 也可以不用指定在分页 statementId 后面加上 _mpCount 例如分页 selectPageById 指定 count 的查询 statementId 设置为 selectPageById_mpCount 即可默认找到该 SQL 执行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountId(string $CountId) 设置xml 自定义 count 查询的 statementId 也可以不用指定在分页 statementId 后面加上 _mpCount 例如分页 selectPageById 指定 count 的查询 statementId 设置为 selectPageById_mpCount 即可默认找到该 SQL 执行
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取分页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置分页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxLimit() 获取单页分页条数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxLimit(string $MaxLimit) 设置单页分页条数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecords() 获取查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecords(array $Records) 设置查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrent() 获取当前页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrent(integer $Current) 设置当前页
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSearchCount() 获取是否进行 count 查询，如果只想查询到列表不要查询总记录数，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchCount(boolean $SearchCount) 设置是否进行 count 查询，如果只想查询到列表不要查询总记录数，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetRemindRecordList extends AbstractModel
{
    /**
     * @var boolean 自动优化 COUNT SQL 如果遇到 jSqlParser 无法解析情况，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptimizeCountSql;

    /**
     * @var integer 分页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pages;

    /**
     * @var array 排序字段信息，允许前端传入的时候，注意 SQL 注入问题，可以使用 SqlInjectionUtils.check(...) 检查文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Orders;

    /**
     * @var string xml 自定义 count 查询的 statementId 也可以不用指定在分页 statementId 后面加上 _mpCount 例如分页 selectPageById 指定 count 的查询 statementId 设置为 selectPageById_mpCount 即可默认找到该 SQL 执行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountId;

    /**
     * @var integer 分页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 单页分页条数限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxLimit;

    /**
     * @var array 查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Records;

    /**
     * @var integer 当前页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Current;

    /**
     * @var boolean 是否进行 count 查询，如果只想查询到列表不要查询总记录数，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchCount;

    /**
     * @param boolean $OptimizeCountSql 自动优化 COUNT SQL 如果遇到 jSqlParser 无法解析情况，设置该参数为 false
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pages 分页
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Orders 排序字段信息，允许前端传入的时候，注意 SQL 注入问题，可以使用 SqlInjectionUtils.check(...) 检查文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CountId xml 自定义 count 查询的 statementId 也可以不用指定在分页 statementId 后面加上 _mpCount 例如分页 selectPageById 指定 count 的查询 statementId 设置为 selectPageById_mpCount 即可默认找到该 SQL 执行
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 分页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxLimit 单页分页条数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Records 查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Current 当前页
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SearchCount 是否进行 count 查询，如果只想查询到列表不要查询总记录数，设置该参数为 false
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
        if (array_key_exists("OptimizeCountSql",$param) and $param["OptimizeCountSql"] !== null) {
            $this->OptimizeCountSql = $param["OptimizeCountSql"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new OrderDto();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }

        if (array_key_exists("CountId",$param) and $param["CountId"] !== null) {
            $this->CountId = $param["CountId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("MaxLimit",$param) and $param["MaxLimit"] !== null) {
            $this->MaxLimit = $param["MaxLimit"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new BudgetRemindRecords();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }

        if (array_key_exists("SearchCount",$param) and $param["SearchCount"] !== null) {
            $this->SearchCount = $param["SearchCount"];
        }
    }
}
