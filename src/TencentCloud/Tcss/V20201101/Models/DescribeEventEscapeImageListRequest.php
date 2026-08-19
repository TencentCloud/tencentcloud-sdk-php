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
 * DescribeEventEscapeImageList请求参数结构体
 *
 * @method integer getLimit() 获取<p>需要返回的数量，默认为10，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>需要返回的数量，默认为10，最大值为100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getFilters() 获取<p>过滤参数:<br>EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器)<br>Status: 事件状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)<br>ImageID: 镜像id<br>ImageName:镜像名称</p>
 * @method void setFilters(array $Filters) 设置<p>过滤参数:<br>EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器)<br>Status: 事件状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)<br>ImageID: 镜像id<br>ImageName:镜像名称</p>
 * @method string getOrder() 获取<p>升序降序,asc desc</p>
 * @method void setOrder(string $Order) 设置<p>升序降序,asc desc</p>
 * @method string getBy() 获取<p>排序字段</p>
 * @method void setBy(string $By) 设置<p>排序字段</p>
 */
class DescribeEventEscapeImageListRequest extends AbstractModel
{
    /**
     * @var integer <p>需要返回的数量，默认为10，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤参数:<br>EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器)<br>Status: 事件状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)<br>ImageID: 镜像id<br>ImageName:镜像名称</p>
     */
    public $Filters;

    /**
     * @var string <p>升序降序,asc desc</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段</p>
     */
    public $By;

    /**
     * @param integer $Limit <p>需要返回的数量，默认为10，最大值为100</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $Filters <p>过滤参数:<br>EventType: 事件类型(MOUNT_SENSITIVE_PTAH:敏感路径挂载 PRIVILEGE_CONTAINER_START:特权容器)<br>Status: 事件状态(EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略)<br>ImageID: 镜像id<br>ImageName:镜像名称</p>
     * @param string $Order <p>升序降序,asc desc</p>
     * @param string $By <p>排序字段</p>
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
