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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEscapeEventInfo请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤参数,
Status：状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)
EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器 PRIVILEGE:提权事件 
    ESCAPE_VUL_OCCURRED:逃逸漏洞利用 ESCAPE_DOCKER_API:访问Docker API接口逃逸 ESCAPE_TAMPER_SENSITIVE_FILE:篡改敏感文件逃逸 ESCAPE_CGROUPS:利用cgroup机制逃逸)
ContainerNetStatus: 容器隔离状态 (NORMAL:正常 ISOLATED:已隔离 ISOLATE_FAILED:隔离失败 ISOLATE_FAILED:解除隔离失败 RESTORING:解除隔离中 ISOLATING:隔离中)
ContainerStatus: 容器状态(CREATED:已创建 RUNNING:正常运行 PAUSED:暂停运行 STOPPED:停止运行 RESTARTING:重启中 REMOVING:迁移中 DEAD:DEAD UNKNOWN：未知 DESTROYED:已销毁)
ForeignUniqueKey:镜像ID及事件类型唯一值
 * @method void setFilters(array $Filters) 设置过滤参数,
Status：状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)
EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器 PRIVILEGE:提权事件 
    ESCAPE_VUL_OCCURRED:逃逸漏洞利用 ESCAPE_DOCKER_API:访问Docker API接口逃逸 ESCAPE_TAMPER_SENSITIVE_FILE:篡改敏感文件逃逸 ESCAPE_CGROUPS:利用cgroup机制逃逸)
ContainerNetStatus: 容器隔离状态 (NORMAL:正常 ISOLATED:已隔离 ISOLATE_FAILED:隔离失败 ISOLATE_FAILED:解除隔离失败 RESTORING:解除隔离中 ISOLATING:隔离中)
ContainerStatus: 容器状态(CREATED:已创建 RUNNING:正常运行 PAUSED:暂停运行 STOPPED:停止运行 RESTARTING:重启中 REMOVING:迁移中 DEAD:DEAD UNKNOWN：未知 DESTROYED:已销毁)
ForeignUniqueKey:镜像ID及事件类型唯一值
 * @method string getOrder() 获取升序降序,asc desc
 * @method void setOrder(string $Order) 设置升序降序,asc desc
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 */
class DescribeEscapeEventInfoRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤参数,
Status：状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)
EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器 PRIVILEGE:提权事件 
    ESCAPE_VUL_OCCURRED:逃逸漏洞利用 ESCAPE_DOCKER_API:访问Docker API接口逃逸 ESCAPE_TAMPER_SENSITIVE_FILE:篡改敏感文件逃逸 ESCAPE_CGROUPS:利用cgroup机制逃逸)
ContainerNetStatus: 容器隔离状态 (NORMAL:正常 ISOLATED:已隔离 ISOLATE_FAILED:隔离失败 ISOLATE_FAILED:解除隔离失败 RESTORING:解除隔离中 ISOLATING:隔离中)
ContainerStatus: 容器状态(CREATED:已创建 RUNNING:正常运行 PAUSED:暂停运行 STOPPED:停止运行 RESTARTING:重启中 REMOVING:迁移中 DEAD:DEAD UNKNOWN：未知 DESTROYED:已销毁)
ForeignUniqueKey:镜像ID及事件类型唯一值
     */
    public $Filters;

    /**
     * @var string 升序降序,asc desc
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤参数,
Status：状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)
EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器 PRIVILEGE:提权事件 
    ESCAPE_VUL_OCCURRED:逃逸漏洞利用 ESCAPE_DOCKER_API:访问Docker API接口逃逸 ESCAPE_TAMPER_SENSITIVE_FILE:篡改敏感文件逃逸 ESCAPE_CGROUPS:利用cgroup机制逃逸)
ContainerNetStatus: 容器隔离状态 (NORMAL:正常 ISOLATED:已隔离 ISOLATE_FAILED:隔离失败 ISOLATE_FAILED:解除隔离失败 RESTORING:解除隔离中 ISOLATING:隔离中)
ContainerStatus: 容器状态(CREATED:已创建 RUNNING:正常运行 PAUSED:暂停运行 STOPPED:停止运行 RESTARTING:重启中 REMOVING:迁移中 DEAD:DEAD UNKNOWN：未知 DESTROYED:已销毁)
ForeignUniqueKey:镜像ID及事件类型唯一值
     * @param string $Order 升序降序,asc desc
     * @param string $By 排序字段
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
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
