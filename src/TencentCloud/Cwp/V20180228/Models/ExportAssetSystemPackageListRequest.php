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
 * ExportAssetSystemPackageList请求参数结构体
 *
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method array getFilters() 获取过滤条件。
<li>Name - String - 是否必填：否 - 包 名</li>
<li>StartTime - String - 是否必填：否 - 安装开始时间</li>
<li>EndTime - String - 是否必填：否 - 安装开始时间</li>
<li>Type - int - 是否必填：否 - 安装包类型：
1:rpm
2:dpkg
3:java
4:system</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Name - String - 是否必填：否 - 包 名</li>
<li>StartTime - String - 是否必填：否 - 安装开始时间</li>
<li>EndTime - String - 是否必填：否 - 安装开始时间</li>
<li>Type - int - 是否必填：否 - 安装包类型：
1:rpm
2:dpkg
3:java
4:system</li>
 * @method string getOrder() 获取排序方式，asc升序 或 desc降序
 * @method void setOrder(string $Order) 设置排序方式，asc升序 或 desc降序
 * @method string getBy() 获取排序方式可选：[FistTime|InstallTime:安装时间]
 * @method void setBy(string $By) 设置排序方式可选：[FistTime|InstallTime:安装时间]
 */
class ExportAssetSystemPackageListRequest extends AbstractModel
{
    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var array 过滤条件。
<li>Name - String - 是否必填：否 - 包 名</li>
<li>StartTime - String - 是否必填：否 - 安装开始时间</li>
<li>EndTime - String - 是否必填：否 - 安装开始时间</li>
<li>Type - int - 是否必填：否 - 安装包类型：
1:rpm
2:dpkg
3:java
4:system</li>
     */
    public $Filters;

    /**
     * @var string 排序方式，asc升序 或 desc降序
     */
    public $Order;

    /**
     * @var string 排序方式可选：[FistTime|InstallTime:安装时间]
     */
    public $By;

    /**
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param array $Filters 过滤条件。
<li>Name - String - 是否必填：否 - 包 名</li>
<li>StartTime - String - 是否必填：否 - 安装开始时间</li>
<li>EndTime - String - 是否必填：否 - 安装开始时间</li>
<li>Type - int - 是否必填：否 - 安装包类型：
1:rpm
2:dpkg
3:java
4:system</li>
     * @param string $Order 排序方式，asc升序 或 desc降序
     * @param string $By 排序方式可选：[FistTime|InstallTime:安装时间]
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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
