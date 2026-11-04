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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupGroups请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。backup-group-id - Array of String - 是否必填：否 -（过滤条件）按备份组ID过滤 ;backup-group-state - Array of String - 是否必填：否 -（过滤条件）按备份组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) ;backup-group-name - Array of String - 是否必填：否 -（过滤条件）按备份组名称过滤 ;backup-id - Array of String - 是否必填：否 -（过滤条件）按备份组内的备份ID过滤
 * @method void setFilters(array $Filters) 设置过滤条件。backup-group-id - Array of String - 是否必填：否 -（过滤条件）按备份组ID过滤 ;backup-group-state - Array of String - 是否必填：否 -（过滤条件）按备份组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) ;backup-group-name - Array of String - 是否必填：否 -（过滤条件）按备份组名称过滤 ;backup-id - Array of String - 是否必填：否 -（过滤条件）按备份组内的备份ID过滤
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取返回数量，默认20，最大500
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大500
 * @method string getOrder() 获取<p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
 * @method string getOrderField() 获取<p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 */
class DescribeBackupGroupsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。backup-group-id - Array of String - 是否必填：否 -（过滤条件）按备份组ID过滤 ;backup-group-state - Array of String - 是否必填：否 -（过滤条件）按备份组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) ;backup-group-name - Array of String - 是否必填：否 -（过滤条件）按备份组名称过滤 ;backup-id - Array of String - 是否必填：否 -（过滤条件）按备份组内的备份ID过滤
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20，最大500
     */
    public $Limit;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @param array $Filters 过滤条件。backup-group-id - Array of String - 是否必填：否 -（过滤条件）按备份组ID过滤 ;backup-group-state - Array of String - 是否必填：否 -（过滤条件）按备份组状态过滤。(NORMAL: 正常 | CREATING:创建中 | ROLLBACKING:回滚中) ;backup-group-name - Array of String - 是否必填：否 -（过滤条件）按备份组名称过滤 ;backup-id - Array of String - 是否必填：否 -（过滤条件）按备份组内的备份ID过滤
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 返回数量，默认20，最大500
     * @param string $Order <p>排序方式</p><p>枚举值：</p><ul><li>ASC： 升序排序</li><li>DESC： 降序排序</li></ul><p>默认值：DESC</p>
     * @param string $OrderField <p>排序字段</p><p>枚举值：</p><ul><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterModel();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
