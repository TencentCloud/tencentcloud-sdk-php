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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTickets请求参数结构体
 *
 * @method array getStatusSet() 获取状态：0待提交(草稿)，1待审批，2批准，3已执行，4驳回
 * @method void setStatusSet(array $StatusSet) 设置状态：0待提交(草稿)，1待审批，2批准，3已执行，4驳回
 * @method string getTicketType() 获取工单类型：0-运维工单，1-权限工单
 * @method void setTicketType(string $TicketType) 设置工单类型：0-运维工单，1-权限工单
 * @method array getFilters() 获取过滤数组
 * @method void setFilters(array $Filters) 设置过滤数组
 * @method array getDeviceFilters() 获取资产过滤数组
 * @method void setDeviceFilters(array $DeviceFilters) 设置资产过滤数组
 * @method string getDepartmentId() 获取部门id
 * @method void setDepartmentId(string $DepartmentId) 设置部门id
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，默认20，最大500
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20，最大500
 */
class DescribeTicketsRequest extends AbstractModel
{
    /**
     * @var array 状态：0待提交(草稿)，1待审批，2批准，3已执行，4驳回
     */
    public $StatusSet;

    /**
     * @var string 工单类型：0-运维工单，1-权限工单
     */
    public $TicketType;

    /**
     * @var array 过滤数组
     */
    public $Filters;

    /**
     * @var array 资产过滤数组
     */
    public $DeviceFilters;

    /**
     * @var string 部门id
     */
    public $DepartmentId;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20，最大500
     */
    public $Limit;

    /**
     * @param array $StatusSet 状态：0待提交(草稿)，1待审批，2批准，3已执行，4驳回
     * @param string $TicketType 工单类型：0-运维工单，1-权限工单
     * @param array $Filters 过滤数组
     * @param array $DeviceFilters 资产过滤数组
     * @param string $DepartmentId 部门id
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，默认20，最大500
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
        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("TicketType",$param) and $param["TicketType"] !== null) {
            $this->TicketType = $param["TicketType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DeviceFilters",$param) and $param["DeviceFilters"] !== null) {
            $this->DeviceFilters = [];
            foreach ($param["DeviceFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->DeviceFilters, $obj);
            }
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
