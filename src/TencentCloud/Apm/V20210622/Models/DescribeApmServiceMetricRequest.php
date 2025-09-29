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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmServiceMetric请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getServiceName() 获取应用名
 * @method void setServiceName(string $ServiceName) 设置应用名
 * @method string getServiceID() 获取应用ID
 * @method void setServiceID(string $ServiceID) 设置应用ID
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method OrderBy getOrderBy() 获取排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序
 * @method boolean getDemo() 获取是否demo模式
 * @method void setDemo(boolean $Demo) 设置是否demo模式
 * @method string getServiceStatus() 获取应用状态筛选，可枚举的值为：health、warning、error。如果选中多个状态用逗号隔开，例如："warning,error"
 * @method void setServiceStatus(string $ServiceStatus) 设置应用状态筛选，可枚举的值为：health、warning、error。如果选中多个状态用逗号隔开，例如："warning,error"
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 */
class DescribeApmServiceMetricRequest extends AbstractModel
{
    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 应用名
     */
    public $ServiceName;

    /**
     * @var string 应用ID
     */
    public $ServiceID;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var OrderBy 排序
     */
    public $OrderBy;

    /**
     * @var boolean 是否demo模式
     */
    public $Demo;

    /**
     * @var string 应用状态筛选，可枚举的值为：health、warning、error。如果选中多个状态用逗号隔开，例如："warning,error"
     */
    public $ServiceStatus;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 页码
     */
    public $Page;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @param string $InstanceId 业务系统ID
     * @param string $ServiceName 应用名
     * @param string $ServiceID 应用ID
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param OrderBy $OrderBy 排序
     * @param boolean $Demo 是否demo模式
     * @param string $ServiceStatus 应用状态筛选，可枚举的值为：health、warning、error。如果选中多个状态用逗号隔开，例如："warning,error"
     * @param array $Tags 标签列表
     * @param integer $Page 页码
     * @param integer $PageSize 页大小
     * @param array $Filters 过滤条件
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("Demo",$param) and $param["Demo"] !== null) {
            $this->Demo = $param["Demo"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
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
    }
}
