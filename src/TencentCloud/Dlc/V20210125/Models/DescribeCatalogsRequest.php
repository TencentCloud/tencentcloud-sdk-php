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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCatalogs请求参数结构体
 *
 * @method string getCatalogId() 获取<p>数据目录 ID</p>
 * @method void setCatalogId(string $CatalogId) 设置<p>数据目录 ID</p>
 * @method string getName() 获取<p>数据目录名称</p>
 * @method void setName(string $Name) 设置<p>数据目录名称</p>
 * @method string getOperator() 获取<p>操作人 uin</p>
 * @method void setOperator(string $Operator) 设置<p>操作人 uin</p>
 * @method string getSort() 获取<p>排序字段，支持 CreateTime / UpdateTime（默认 UpdateTime）</p>
 * @method void setSort(string $Sort) 设置<p>排序字段，支持 CreateTime / UpdateTime（默认 UpdateTime）</p>
 * @method string getAsc() 获取<p>true:升序（默认）/ false:降序</p>
 * @method void setAsc(string $Asc) 设置<p>true:升序（默认）/ false:降序</p>
 * @method integer getLimit() 获取<p>分页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method integer getStatus() 获取<p>状态：0 注册中 / 1 待测试 / 2 连接成功 / 3 连接失败 / 4 删除中 / 5 已删除</p><p>枚举值：</p><ul><li>0： 注册中</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态：0 注册中 / 1 待测试 / 2 连接成功 / 3 连接失败 / 4 删除中 / 5 已删除</p><p>枚举值：</p><ul><li>0： 注册中</li></ul>
 * @method string getType() 获取<p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： lakehouse类型</li></ul>
 * @method void setType(string $Type) 设置<p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： lakehouse类型</li></ul>
 * @method integer getCreatedAfter() 获取<p>在这个时间之后创建（时间戳）</p>
 * @method void setCreatedAfter(integer $CreatedAfter) 设置<p>在这个时间之后创建（时间戳）</p>
 * @method integer getCreatedBefore() 获取<p>在这个时间之前创建（时间戳）</p>
 * @method void setCreatedBefore(integer $CreatedBefore) 设置<p>在这个时间之前创建（时间戳）</p>
 */
class DescribeCatalogsRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录 ID</p>
     */
    public $CatalogId;

    /**
     * @var string <p>数据目录名称</p>
     */
    public $Name;

    /**
     * @var string <p>操作人 uin</p>
     */
    public $Operator;

    /**
     * @var string <p>排序字段，支持 CreateTime / UpdateTime（默认 UpdateTime）</p>
     */
    public $Sort;

    /**
     * @var string <p>true:升序（默认）/ false:降序</p>
     */
    public $Asc;

    /**
     * @var integer <p>分页大小</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>状态：0 注册中 / 1 待测试 / 2 连接成功 / 3 连接失败 / 4 删除中 / 5 已删除</p><p>枚举值：</p><ul><li>0： 注册中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： lakehouse类型</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>在这个时间之后创建（时间戳）</p>
     */
    public $CreatedAfter;

    /**
     * @var integer <p>在这个时间之前创建（时间戳）</p>
     */
    public $CreatedBefore;

    /**
     * @param string $CatalogId <p>数据目录 ID</p>
     * @param string $Name <p>数据目录名称</p>
     * @param string $Operator <p>操作人 uin</p>
     * @param string $Sort <p>排序字段，支持 CreateTime / UpdateTime（默认 UpdateTime）</p>
     * @param string $Asc <p>true:升序（默认）/ false:降序</p>
     * @param integer $Limit <p>分页大小</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param integer $Status <p>状态：0 注册中 / 1 待测试 / 2 连接成功 / 3 连接失败 / 4 删除中 / 5 已删除</p><p>枚举值：</p><ul><li>0： 注册中</li></ul>
     * @param string $Type <p>数据目录类型</p><p>枚举值：</p><ul><li>LAKEHOUSE： lakehouse类型</li></ul>
     * @param integer $CreatedAfter <p>在这个时间之后创建（时间戳）</p>
     * @param integer $CreatedBefore <p>在这个时间之前创建（时间戳）</p>
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
        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatedAfter",$param) and $param["CreatedAfter"] !== null) {
            $this->CreatedAfter = $param["CreatedAfter"];
        }

        if (array_key_exists("CreatedBefore",$param) and $param["CreatedBefore"] !== null) {
            $this->CreatedBefore = $param["CreatedBefore"];
        }
    }
}
