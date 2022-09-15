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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisks请求参数结构体
 *
 * @method array getDiskIds() 获取云硬盘ID列表。
 * @method void setDiskIds(array $DiskIds) 设置云硬盘ID列表。
 * @method array getFilters() 获取过滤器列表。
disk-id
按照【云硬盘 ID】进行过滤。
类型：String
必选：否
instance-id
按照【实例ID】进行过滤。
类型：String
必选：否
disk-name
按照【云硬盘名称】进行过滤。
类型：String
必选：否
zone
按照【可用区】进行过滤。
类型：String
必选：否
disk-usage
按照【云硬盘类型】进行过滤。
类型：String
必选：否
取值：SYSTEM_DISK或DATA_DISK
disk-state
按照【云硬盘状态】进行过滤。
类型：String
必选：否
取值：参考数据结构[Disk](https://cloud.tencent.com/document/api/1207/47576#Disk)中DiskState取值。
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 DiskIds 和 Filters。
 * @method void setFilters(array $Filters) 设置过滤器列表。
disk-id
按照【云硬盘 ID】进行过滤。
类型：String
必选：否
instance-id
按照【实例ID】进行过滤。
类型：String
必选：否
disk-name
按照【云硬盘名称】进行过滤。
类型：String
必选：否
zone
按照【可用区】进行过滤。
类型：String
必选：否
disk-usage
按照【云硬盘类型】进行过滤。
类型：String
必选：否
取值：SYSTEM_DISK或DATA_DISK
disk-state
按照【云硬盘状态】进行过滤。
类型：String
必选：否
取值：参考数据结构[Disk](https://cloud.tencent.com/document/api/1207/47576#Disk)中DiskState取值。
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 DiskIds 和 Filters。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrderField() 获取云硬盘列表排序的依据字段。取值范围："CREATED_TIME"：依据云硬盘的创建时间排序。 "EXPIRED_TIME"：依据云硬盘的到期时间排序。"DISK_SIZE"：依据云硬盘的大小排序。默认按云硬盘创建时间排序。
 * @method void setOrderField(string $OrderField) 设置云硬盘列表排序的依据字段。取值范围："CREATED_TIME"：依据云硬盘的创建时间排序。 "EXPIRED_TIME"：依据云硬盘的到期时间排序。"DISK_SIZE"：依据云硬盘的大小排序。默认按云硬盘创建时间排序。
 * @method string getOrder() 获取输出云硬盘列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
 * @method void setOrder(string $Order) 设置输出云硬盘列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
 */
class DescribeDisksRequest extends AbstractModel
{
    /**
     * @var array 云硬盘ID列表。
     */
    public $DiskIds;

    /**
     * @var array 过滤器列表。
disk-id
按照【云硬盘 ID】进行过滤。
类型：String
必选：否
instance-id
按照【实例ID】进行过滤。
类型：String
必选：否
disk-name
按照【云硬盘名称】进行过滤。
类型：String
必选：否
zone
按照【可用区】进行过滤。
类型：String
必选：否
disk-usage
按照【云硬盘类型】进行过滤。
类型：String
必选：否
取值：SYSTEM_DISK或DATA_DISK
disk-state
按照【云硬盘状态】进行过滤。
类型：String
必选：否
取值：参考数据结构[Disk](https://cloud.tencent.com/document/api/1207/47576#Disk)中DiskState取值。
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 DiskIds 和 Filters。
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 云硬盘列表排序的依据字段。取值范围："CREATED_TIME"：依据云硬盘的创建时间排序。 "EXPIRED_TIME"：依据云硬盘的到期时间排序。"DISK_SIZE"：依据云硬盘的大小排序。默认按云硬盘创建时间排序。
     */
    public $OrderField;

    /**
     * @var string 输出云硬盘列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
     */
    public $Order;

    /**
     * @param array $DiskIds 云硬盘ID列表。
     * @param array $Filters 过滤器列表。
disk-id
按照【云硬盘 ID】进行过滤。
类型：String
必选：否
instance-id
按照【实例ID】进行过滤。
类型：String
必选：否
disk-name
按照【云硬盘名称】进行过滤。
类型：String
必选：否
zone
按照【可用区】进行过滤。
类型：String
必选：否
disk-usage
按照【云硬盘类型】进行过滤。
类型：String
必选：否
取值：SYSTEM_DISK或DATA_DISK
disk-state
按照【云硬盘状态】进行过滤。
类型：String
必选：否
取值：参考数据结构[Disk](https://cloud.tencent.com/document/api/1207/47576#Disk)中DiskState取值。
每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 DiskIds 和 Filters。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $OrderField 云硬盘列表排序的依据字段。取值范围："CREATED_TIME"：依据云硬盘的创建时间排序。 "EXPIRED_TIME"：依据云硬盘的到期时间排序。"DISK_SIZE"：依据云硬盘的大小排序。默认按云硬盘创建时间排序。
     * @param string $Order 输出云硬盘列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
