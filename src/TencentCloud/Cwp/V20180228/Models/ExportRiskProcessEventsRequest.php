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
 * ExportRiskProcessEvents请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>HostId - String - 是否必填：否 - 主机ID</li>
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>ProcessId - String - 是否必填：否 - 进程ID</li>
<li>ProcessPath - String - 是否必填：否 - 进程路径</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中；2已查杀；3已退出;4已信任</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>HostId - String - 是否必填：否 - 主机ID</li>
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>ProcessId - String - 是否必填：否 - 进程ID</li>
<li>ProcessPath - String - 是否必填：否 - 进程路径</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中；2已查杀；3已退出;4已信任</li>
 * @method string getOrder() 获取排序方式：[ASC:升序|DESC:降序]
 * @method void setOrder(string $Order) 设置排序方式：[ASC:升序|DESC:降序]
 * @method string getBy() 获取[StartTime:进程启动时间|DetectTime:最后检测时间]
 * @method void setBy(string $By) 设置[StartTime:进程启动时间|DetectTime:最后检测时间]
 */
class ExportRiskProcessEventsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>HostId - String - 是否必填：否 - 主机ID</li>
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>ProcessId - String - 是否必填：否 - 进程ID</li>
<li>ProcessPath - String - 是否必填：否 - 进程路径</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中；2已查杀；3已退出;4已信任</li>
     */
    public $Filters;

    /**
     * @var string 排序方式：[ASC:升序|DESC:降序]
     */
    public $Order;

    /**
     * @var string [StartTime:进程启动时间|DetectTime:最后检测时间]
     */
    public $By;

    /**
     * @param array $Filters 过滤条件。
<li>HostId - String - 是否必填：否 - 主机ID</li>
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>ProcessId - String - 是否必填：否 - 进程ID</li>
<li>ProcessPath - String - 是否必填：否 - 进程路径</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中；2已查杀；3已退出;4已信任</li>
     * @param string $Order 排序方式：[ASC:升序|DESC:降序]
     * @param string $By [StartTime:进程启动时间|DetectTime:最后检测时间]
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
