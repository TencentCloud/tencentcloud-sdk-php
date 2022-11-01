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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRiskDnsEventExportJob请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>EventStatus- String - 是否必填：否 - 事件状态，待处理：EVENT_UNDEAL，EVENT_DEALED：已处理，已忽略：EVENT_IGNORE， EVENT_ADD_WHITE：已加白</li>
<li>ContainerStatus- String - 是否必填：否 - 容器运行状态筛选，已创建：CREATED,正常运行：RUNNING, 暂定运行：PAUSED, 停止运行：	STOPPED，重启中：RESTARTING, 迁移中：REMOVING, 销毁：DESTROYED </li>
<li>ContainerNetStatus- String -是否必填: 否 -  容器网络状态筛选 未隔离：NORMAL，已隔离：ISOLATED，隔离失败：ISOLATE_FAILED，解除隔离失败：RESTORE_FAILED，解除隔离中：RESTORING，隔离中：ISOLATING</li>
<li>EventType - String -是否必填: 否 -  事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP</li>
<li>TimeRange- String -是否必填: 否 -  时间范围，第一个值表示开始时间，第二个值表示结束时间 </li>
<li>RiskDns- string - 是否必填：否 - 恶意域名。</li>
<li>RiskIP- string - 是否必填：否 - 恶意IP。</li>
<li>ContainerName- string - 是否必填：否 - 容器名称。</li>
<li>ContainerID- string - 是否必填：否 - 容器ID。</li>
<li>ImageName- string - 是否必填：否 - 镜像名称。</li>
<li>ImageID- string - 是否必填：否 - 镜像ID。</li>
<li>HostName- string - 是否必填：否 - 主机名称。</li>
<li>HostIP- string - 是否必填：否 - 内网IP。</li>
<li>PublicIP- string - 是否必填：否 - 外网IP。</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>EventStatus- String - 是否必填：否 - 事件状态，待处理：EVENT_UNDEAL，EVENT_DEALED：已处理，已忽略：EVENT_IGNORE， EVENT_ADD_WHITE：已加白</li>
<li>ContainerStatus- String - 是否必填：否 - 容器运行状态筛选，已创建：CREATED,正常运行：RUNNING, 暂定运行：PAUSED, 停止运行：	STOPPED，重启中：RESTARTING, 迁移中：REMOVING, 销毁：DESTROYED </li>
<li>ContainerNetStatus- String -是否必填: 否 -  容器网络状态筛选 未隔离：NORMAL，已隔离：ISOLATED，隔离失败：ISOLATE_FAILED，解除隔离失败：RESTORE_FAILED，解除隔离中：RESTORING，隔离中：ISOLATING</li>
<li>EventType - String -是否必填: 否 -  事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP</li>
<li>TimeRange- String -是否必填: 否 -  时间范围，第一个值表示开始时间，第二个值表示结束时间 </li>
<li>RiskDns- string - 是否必填：否 - 恶意域名。</li>
<li>RiskIP- string - 是否必填：否 - 恶意IP。</li>
<li>ContainerName- string - 是否必填：否 - 容器名称。</li>
<li>ContainerID- string - 是否必填：否 - 容器ID。</li>
<li>ImageName- string - 是否必填：否 - 镜像名称。</li>
<li>ImageID- string - 是否必填：否 - 镜像ID。</li>
<li>HostName- string - 是否必填：否 - 主机名称。</li>
<li>HostIP- string - 是否必填：否 - 内网IP。</li>
<li>PublicIP- string - 是否必填：否 - 外网IP。</li>
 * @method integer getLimit() 获取需要返回的数量，最大值为100000
 * @method void setLimit(integer $Limit) 设置需要返回的数量，最大值为100000
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式：asc/desc
 * @method void setOrder(string $Order) 设置排序方式：asc/desc
 * @method string getBy() 获取排序字段：事件数量：EventCount
 * @method void setBy(string $By) 设置排序字段：事件数量：EventCount
 */
class CreateRiskDnsEventExportJobRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>EventStatus- String - 是否必填：否 - 事件状态，待处理：EVENT_UNDEAL，EVENT_DEALED：已处理，已忽略：EVENT_IGNORE， EVENT_ADD_WHITE：已加白</li>
<li>ContainerStatus- String - 是否必填：否 - 容器运行状态筛选，已创建：CREATED,正常运行：RUNNING, 暂定运行：PAUSED, 停止运行：	STOPPED，重启中：RESTARTING, 迁移中：REMOVING, 销毁：DESTROYED </li>
<li>ContainerNetStatus- String -是否必填: 否 -  容器网络状态筛选 未隔离：NORMAL，已隔离：ISOLATED，隔离失败：ISOLATE_FAILED，解除隔离失败：RESTORE_FAILED，解除隔离中：RESTORING，隔离中：ISOLATING</li>
<li>EventType - String -是否必填: 否 -  事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP</li>
<li>TimeRange- String -是否必填: 否 -  时间范围，第一个值表示开始时间，第二个值表示结束时间 </li>
<li>RiskDns- string - 是否必填：否 - 恶意域名。</li>
<li>RiskIP- string - 是否必填：否 - 恶意IP。</li>
<li>ContainerName- string - 是否必填：否 - 容器名称。</li>
<li>ContainerID- string - 是否必填：否 - 容器ID。</li>
<li>ImageName- string - 是否必填：否 - 镜像名称。</li>
<li>ImageID- string - 是否必填：否 - 镜像ID。</li>
<li>HostName- string - 是否必填：否 - 主机名称。</li>
<li>HostIP- string - 是否必填：否 - 内网IP。</li>
<li>PublicIP- string - 是否必填：否 - 外网IP。</li>
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，最大值为100000
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式：asc/desc
     */
    public $Order;

    /**
     * @var string 排序字段：事件数量：EventCount
     */
    public $By;

    /**
     * @param array $Filters 过滤条件。
<li>EventStatus- String - 是否必填：否 - 事件状态，待处理：EVENT_UNDEAL，EVENT_DEALED：已处理，已忽略：EVENT_IGNORE， EVENT_ADD_WHITE：已加白</li>
<li>ContainerStatus- String - 是否必填：否 - 容器运行状态筛选，已创建：CREATED,正常运行：RUNNING, 暂定运行：PAUSED, 停止运行：	STOPPED，重启中：RESTARTING, 迁移中：REMOVING, 销毁：DESTROYED </li>
<li>ContainerNetStatus- String -是否必填: 否 -  容器网络状态筛选 未隔离：NORMAL，已隔离：ISOLATED，隔离失败：ISOLATE_FAILED，解除隔离失败：RESTORE_FAILED，解除隔离中：RESTORING，隔离中：ISOLATING</li>
<li>EventType - String -是否必填: 否 -  事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP</li>
<li>TimeRange- String -是否必填: 否 -  时间范围，第一个值表示开始时间，第二个值表示结束时间 </li>
<li>RiskDns- string - 是否必填：否 - 恶意域名。</li>
<li>RiskIP- string - 是否必填：否 - 恶意IP。</li>
<li>ContainerName- string - 是否必填：否 - 容器名称。</li>
<li>ContainerID- string - 是否必填：否 - 容器ID。</li>
<li>ImageName- string - 是否必填：否 - 镜像名称。</li>
<li>ImageID- string - 是否必填：否 - 镜像ID。</li>
<li>HostName- string - 是否必填：否 - 主机名称。</li>
<li>HostIP- string - 是否必填：否 - 内网IP。</li>
<li>PublicIP- string - 是否必填：否 - 外网IP。</li>
     * @param integer $Limit 需要返回的数量，最大值为100000
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式：asc/desc
     * @param string $By 排序字段：事件数量：EventCount
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
                $obj = new RunTimeFilters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
