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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMemoryPlusSpaces请求参数结构体
 *
 * @method integer getOffset() 获取<p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
 * @method void setOffset(integer $Offset) 设置<p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
 * @method integer getLimit() 获取<p>单次查询返回的记录数量上限（分页大小）。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的记录数量上限（分页大小）。</p>
 * @method array getSearchKeys() 获取<p>查询实例名称或者实例id</p>
 * @method void setSearchKeys(array $SearchKeys) 设置<p>查询实例名称或者实例id</p>
 * @method array getStatus() 获取<p>实例状态</p><p>枚举值：</p><ul><li>1： 运行中</li><li>2： 创建中</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 隔离中</li><li>6： 已隔离（进入回收站）</li><li>7： 恢复中（从回收站恢复）</li></ul>
 * @method void setStatus(array $Status) 设置<p>实例状态</p><p>枚举值：</p><ul><li>1： 运行中</li><li>2： 创建中</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 隔离中</li><li>6： 已隔离（进入回收站）</li><li>7： 恢复中（从回收站恢复）</li></ul>
 * @method array getResourceTags() 获取<p>资源标签</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>资源标签</p>
 * @method string getOrderby() 获取<p>排序字段</p>
 * @method void setOrderby(string $Orderby) 设置<p>排序字段</p>
 * @method string getOrderDirection() 获取<p>排序方向</p><p>枚举值：</p><ul><li>ASC： 升序</li><li>DESC： 降序</li></ul>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>排序方向</p><p>枚举值：</p><ul><li>ASC： 升序</li><li>DESC： 降序</li></ul>
 */
class DescribeMemoryPlusSpacesRequest extends AbstractModel
{
    /**
     * @var integer <p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次查询返回的记录数量上限（分页大小）。</p>
     */
    public $Limit;

    /**
     * @var array <p>查询实例名称或者实例id</p>
     */
    public $SearchKeys;

    /**
     * @var array <p>实例状态</p><p>枚举值：</p><ul><li>1： 运行中</li><li>2： 创建中</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 隔离中</li><li>6： 已隔离（进入回收站）</li><li>7： 恢复中（从回收站恢复）</li></ul>
     */
    public $Status;

    /**
     * @var array <p>资源标签</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>排序字段</p>
     */
    public $Orderby;

    /**
     * @var string <p>排序方向</p><p>枚举值：</p><ul><li>ASC： 升序</li><li>DESC： 降序</li></ul>
     */
    public $OrderDirection;

    /**
     * @param integer $Offset <p>查询列表的起始位置（偏移量）。用于分页查询，指明从符合条件的第几条数据开始返回。</p>
     * @param integer $Limit <p>单次查询返回的记录数量上限（分页大小）。</p>
     * @param array $SearchKeys <p>查询实例名称或者实例id</p>
     * @param array $Status <p>实例状态</p><p>枚举值：</p><ul><li>1： 运行中</li><li>2： 创建中</li><li>3： 删除中</li><li>4： 已删除</li><li>5： 隔离中</li><li>6： 已隔离（进入回收站）</li><li>7： 恢复中（从回收站恢复）</li></ul>
     * @param array $ResourceTags <p>资源标签</p>
     * @param string $Orderby <p>排序字段</p>
     * @param string $OrderDirection <p>排序方向</p><p>枚举值：</p><ul><li>ASC： 升序</li><li>DESC： 降序</li></ul>
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

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
