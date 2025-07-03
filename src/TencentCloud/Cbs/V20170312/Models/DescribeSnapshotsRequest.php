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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshots请求参数结构体
 *
 * @method array getSnapshotIds() 获取要查询快照的ID列表。参数不支持同时指定`SnapshotIds`和`Filters`。
 * @method void setSnapshotIds(array $SnapshotIds) 设置要查询快照的ID列表。参数不支持同时指定`SnapshotIds`和`Filters`。
 * @method array getFilters() 获取过滤条件。参数不支持同时指定SnapshotIds和Filters。<br><ul><li>snapshot-id<ul><li>按照云硬盘快照ID进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-name<ul><li>按照云硬盘快照名称进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-state<ul><li>按照云硬盘快照状态进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>NORMAL</code>：正常 </li><li><code>CREATING</code>：创建中 </li><li><code>ROLLBACKING</code>：回滚中 </li><li><code>COPYING_FROM_REMOTE</code>：跨地域复制中 </li><li><code>CHECKING_COPIED</code>：复制校验中</li><li><code>TORECYCLE</code>：待回收</li></ul></li></ul></li><li>disk-usage<ul><li>按照云硬盘使用用途进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SYSTEM_DISK</code>：代表系统盘</li><li><code>DATA_DISK</code>：代表数据盘</li></ul></li></ul></li><li>project-id<ul><li>按云硬盘所属项目ID过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>disk-id<ul><li>按照云硬盘ID进行过滤，一次最多只能传入10个值</li><li>类型：String</li><li>必选：否</li></ul></li><li>encrypt<ul><li>按是否加密进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-type<ul><li>按快照归属类型查询</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SHARED_SNAPSHOT</code>：表示共享过来的快照</li><li><code>PRIVATE_SNAPSHOT</code>：表示自己的私有快照</li></ul></li></ul></li></ul>
 * @method void setFilters(array $Filters) 设置过滤条件。参数不支持同时指定SnapshotIds和Filters。<br><ul><li>snapshot-id<ul><li>按照云硬盘快照ID进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-name<ul><li>按照云硬盘快照名称进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-state<ul><li>按照云硬盘快照状态进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>NORMAL</code>：正常 </li><li><code>CREATING</code>：创建中 </li><li><code>ROLLBACKING</code>：回滚中 </li><li><code>COPYING_FROM_REMOTE</code>：跨地域复制中 </li><li><code>CHECKING_COPIED</code>：复制校验中</li><li><code>TORECYCLE</code>：待回收</li></ul></li></ul></li><li>disk-usage<ul><li>按照云硬盘使用用途进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SYSTEM_DISK</code>：代表系统盘</li><li><code>DATA_DISK</code>：代表数据盘</li></ul></li></ul></li><li>project-id<ul><li>按云硬盘所属项目ID过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>disk-id<ul><li>按照云硬盘ID进行过滤，一次最多只能传入10个值</li><li>类型：String</li><li>必选：否</li></ul></li><li>encrypt<ul><li>按是否加密进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-type<ul><li>按快照归属类型查询</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SHARED_SNAPSHOT</code>：表示共享过来的快照</li><li><code>PRIVATE_SNAPSHOT</code>：表示自己的私有快照</li></ul></li></ul></li></ul>
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](/document/product/362/15633)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](/document/product/362/15633)中的相关小节。
 * @method string getOrderField() 获取快照列表排序的依据字段。取值范围：
<ul>
<li>CREATE_TIME：依据快照的创建时间排序</li>
<li>默认按创建时间排序</li>
</ul>
 * @method void setOrderField(string $OrderField) 设置快照列表排序的依据字段。取值范围：
<ul>
<li>CREATE_TIME：依据快照的创建时间排序</li>
<li>默认按创建时间排序</li>
</ul>
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考API[简介](/document/product/362/15633)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考API[简介](/document/product/362/15633)中的相关小节。
 * @method string getOrder() 获取输出云盘列表的排列顺序。取值范围：
<ul>
    <li>ASC：升序排列</li>
    <li>DESC：降序排列。</li>
</ul>

 * @method void setOrder(string $Order) 设置输出云盘列表的排列顺序。取值范围：
<ul>
    <li>ASC：升序排列</li>
    <li>DESC：降序排列。</li>
</ul>
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var array 要查询快照的ID列表。参数不支持同时指定`SnapshotIds`和`Filters`。
     */
    public $SnapshotIds;

    /**
     * @var array 过滤条件。参数不支持同时指定SnapshotIds和Filters。<br><ul><li>snapshot-id<ul><li>按照云硬盘快照ID进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-name<ul><li>按照云硬盘快照名称进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-state<ul><li>按照云硬盘快照状态进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>NORMAL</code>：正常 </li><li><code>CREATING</code>：创建中 </li><li><code>ROLLBACKING</code>：回滚中 </li><li><code>COPYING_FROM_REMOTE</code>：跨地域复制中 </li><li><code>CHECKING_COPIED</code>：复制校验中</li><li><code>TORECYCLE</code>：待回收</li></ul></li></ul></li><li>disk-usage<ul><li>按照云硬盘使用用途进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SYSTEM_DISK</code>：代表系统盘</li><li><code>DATA_DISK</code>：代表数据盘</li></ul></li></ul></li><li>project-id<ul><li>按云硬盘所属项目ID过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>disk-id<ul><li>按照云硬盘ID进行过滤，一次最多只能传入10个值</li><li>类型：String</li><li>必选：否</li></ul></li><li>encrypt<ul><li>按是否加密进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-type<ul><li>按快照归属类型查询</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SHARED_SNAPSHOT</code>：表示共享过来的快照</li><li><code>PRIVATE_SNAPSHOT</code>：表示自己的私有快照</li></ul></li></ul></li></ul>
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](/document/product/362/15633)中的相关小节。
     */
    public $Limit;

    /**
     * @var string 快照列表排序的依据字段。取值范围：
<ul>
<li>CREATE_TIME：依据快照的创建时间排序</li>
<li>默认按创建时间排序</li>
</ul>
     */
    public $OrderField;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考API[简介](/document/product/362/15633)中的相关小节。
     */
    public $Offset;

    /**
     * @var string 输出云盘列表的排列顺序。取值范围：
<ul>
    <li>ASC：升序排列</li>
    <li>DESC：降序排列。</li>
</ul>

     */
    public $Order;

    /**
     * @param array $SnapshotIds 要查询快照的ID列表。参数不支持同时指定`SnapshotIds`和`Filters`。
     * @param array $Filters 过滤条件。参数不支持同时指定SnapshotIds和Filters。<br><ul><li>snapshot-id<ul><li>按照云硬盘快照ID进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-name<ul><li>按照云硬盘快照名称进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-state<ul><li>按照云硬盘快照状态进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>NORMAL</code>：正常 </li><li><code>CREATING</code>：创建中 </li><li><code>ROLLBACKING</code>：回滚中 </li><li><code>COPYING_FROM_REMOTE</code>：跨地域复制中 </li><li><code>CHECKING_COPIED</code>：复制校验中</li><li><code>TORECYCLE</code>：待回收</li></ul></li></ul></li><li>disk-usage<ul><li>按照云硬盘使用用途进行过滤</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SYSTEM_DISK</code>：代表系统盘</li><li><code>DATA_DISK</code>：代表数据盘</li></ul></li></ul></li><li>project-id<ul><li>按云硬盘所属项目ID过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>disk-id<ul><li>按照云硬盘ID进行过滤，一次最多只能传入10个值</li><li>类型：String</li><li>必选：否</li></ul></li><li>encrypt<ul><li>按是否加密进行过滤</li><li>类型：String</li><li>必选：否</li></ul></li><li>snapshot-type<ul><li>按快照归属类型查询</li><li>类型：String</li><li>必选：否</li><li>取值范围：<ul><li><code>SHARED_SNAPSHOT</code>：表示共享过来的快照</li><li><code>PRIVATE_SNAPSHOT</code>：表示自己的私有快照</li></ul></li></ul></li></ul>
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](/document/product/362/15633)中的相关小节。
     * @param string $OrderField 快照列表排序的依据字段。取值范围：
<ul>
<li>CREATE_TIME：依据快照的创建时间排序</li>
<li>默认按创建时间排序</li>
</ul>
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考API[简介](/document/product/362/15633)中的相关小节。
     * @param string $Order 输出云盘列表的排列顺序。取值范围：
<ul>
    <li>ASC：升序排列</li>
    <li>DESC：降序排列。</li>
</ul>
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
