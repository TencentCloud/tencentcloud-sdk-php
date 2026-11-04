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
 * DescribeFileBackups请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大100</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大100</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method string getOrderField() 获取<p>排序字段</p><p>枚举值：</p><ul><li>CreatedTime： 创建时间</li><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p><p>枚举值：</p><ul><li>CreatedTime： 创建时间</li><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
 * @method string getOrder() 获取<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序排序</li><li>ASC： 升序排序</li></ul><p>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序排序</li><li>ASC： 升序排序</li></ul><p>默认值：DESC</p>
 * @method array getFilters() 获取<p>过滤条件。支持: backup-id, plan-id, instance-id, status, backup-type, auto-backup-policy-id</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。支持: backup-id, plan-id, instance-id, status, backup-type, auto-backup-policy-id</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 */
class DescribeFileBackupsRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20，最大100</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段</p><p>枚举值：</p><ul><li>CreatedTime： 创建时间</li><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     */
    public $OrderField;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序排序</li><li>ASC： 升序排序</li></ul><p>默认值：DESC</p>
     */
    public $Order;

    /**
     * @var array <p>过滤条件。支持: backup-id, plan-id, instance-id, status, backup-type, auto-backup-policy-id</p>
     */
    public $Filters;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
     */
    public $ResourceType;

    /**
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param integer $Limit <p>返回数量，默认20，最大100</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param string $OrderField <p>排序字段</p><p>枚举值：</p><ul><li>CreatedTime： 创建时间</li><li>CREATE_TIME： 创建时间</li></ul><p>默认值：CREATE_TIME</p>
     * @param string $Order <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序排序</li><li>ASC： 升序排序</li></ul><p>默认值：DESC</p>
     * @param array $Filters <p>过滤条件。支持: backup-id, plan-id, instance-id, status, backup-type, auto-backup-policy-id</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterModel();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
