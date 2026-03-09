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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWindowsPatchList请求参数结构体
 *
 * @method integer getLimit() 获取分页参数
 * @method void setLimit(integer $Limit) 设置分页参数
 * @method string getOrder() 获取排序顺序：desc 默认asc
 * @method void setOrder(string $Order) 设置排序顺序：desc 默认asc
 * @method string getBy() 获取可选排序字段
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
 * @method void setBy(string $By) 设置可选排序字段
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method array getFilters() 获取过滤条件。  <li>Status : string类型 非必填 处理状态 0待处理,1忽略,3修复</li><li>ShowNew : int类型 非必填 展示最新版本 1-开启 0-关闭</li><li>Name : string类型 非必填 补丁名称</li><li>KbNo : string类型 非必填 补丁编号</li><li>VulName : string类型 非必填 漏洞名称</li><li>CVEId : string类型 非必填 漏洞CVE编号</li><li>Uuid : string类型 非必填 主机uuid</li>
 * @method void setFilters(array $Filters) 设置过滤条件。  <li>Status : string类型 非必填 处理状态 0待处理,1忽略,3修复</li><li>ShowNew : int类型 非必填 展示最新版本 1-开启 0-关闭</li><li>Name : string类型 非必填 补丁名称</li><li>KbNo : string类型 非必填 补丁编号</li><li>VulName : string类型 非必填 漏洞名称</li><li>CVEId : string类型 非必填 漏洞CVE编号</li><li>Uuid : string类型 非必填 主机uuid</li>
 */
class DescribeWindowsPatchListRequest extends AbstractModel
{
    /**
     * @var integer 分页参数
     */
    public $Limit;

    /**
     * @var string 排序顺序：desc 默认asc
     */
    public $Order;

    /**
     * @var string 可选排序字段
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
     */
    public $By;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var array 过滤条件。  <li>Status : string类型 非必填 处理状态 0待处理,1忽略,3修复</li><li>ShowNew : int类型 非必填 展示最新版本 1-开启 0-关闭</li><li>Name : string类型 非必填 补丁名称</li><li>KbNo : string类型 非必填 补丁编号</li><li>VulName : string类型 非必填 漏洞名称</li><li>CVEId : string类型 非必填 漏洞CVE编号</li><li>Uuid : string类型 非必填 主机uuid</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 分页参数
     * @param string $Order 排序顺序：desc 默认asc
     * @param string $By 可选排序字段
<li>PublishTime</li>
<li>LastScanTime</li>
<li>HostCount</li>
     * @param integer $Offset 偏移量，默认为0
     * @param array $Filters 过滤条件。  <li>Status : string类型 非必填 处理状态 0待处理,1忽略,3修复</li><li>ShowNew : int类型 非必填 展示最新版本 1-开启 0-关闭</li><li>Name : string类型 非必填 补丁名称</li><li>KbNo : string类型 非必填 补丁编号</li><li>VulName : string类型 非必填 漏洞名称</li><li>CVEId : string类型 非必填 漏洞CVE编号</li><li>Uuid : string类型 非必填 主机uuid</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
