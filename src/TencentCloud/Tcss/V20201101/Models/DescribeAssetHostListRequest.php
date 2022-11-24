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
 * DescribeAssetHostList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Status - String - 是否必填：否 - agent状态筛选，"ALL":"全部"(或不传该字段),"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中"</li>
<li>HostName - String - 是否必填：否 - 主机名筛选</li>
<li>Group- String - 是否必填：否 - 主机群组搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>HostID- string - 是否必填：否 - 主机id搜索</li>
<li>DockerVersion- string - 是否必填：否 - docker版本搜索</li>
<li>MachineType- string - 是否必填：否 - 主机来源MachineType搜索，"ALL":"全部"(或不传该字段),主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；</li>
<li>DockerStatus- string - 是否必填：否 - docker安装状态，"ALL":"全部"(或不传该字段),"INSTALL":"已安装","UNINSTALL":"未安装"</li>
<li>ProjectID- string - 是否必填：否 - 所属项目id搜索</li>
<li>Tag:xxx(tag:key)- string- 是否必填：否 - 标签键值搜索 示例Filters":[{"Name":"tag:tke-kind","Values":["service"]}]</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Status - String - 是否必填：否 - agent状态筛选，"ALL":"全部"(或不传该字段),"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中"</li>
<li>HostName - String - 是否必填：否 - 主机名筛选</li>
<li>Group- String - 是否必填：否 - 主机群组搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>HostID- string - 是否必填：否 - 主机id搜索</li>
<li>DockerVersion- string - 是否必填：否 - docker版本搜索</li>
<li>MachineType- string - 是否必填：否 - 主机来源MachineType搜索，"ALL":"全部"(或不传该字段),主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；</li>
<li>DockerStatus- string - 是否必填：否 - docker安装状态，"ALL":"全部"(或不传该字段),"INSTALL":"已安装","UNINSTALL":"未安装"</li>
<li>ProjectID- string - 是否必填：否 - 所属项目id搜索</li>
<li>Tag:xxx(tag:key)- string- 是否必填：否 - 标签键值搜索 示例Filters":[{"Name":"tag:tke-kind","Values":["service"]}]</li>
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式 asc,desc
 * @method void setOrder(string $Order) 设置排序方式 asc,desc
 */
class DescribeAssetHostListRequest extends AbstractModel
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
     * @var array 过滤条件。
<li>Status - String - 是否必填：否 - agent状态筛选，"ALL":"全部"(或不传该字段),"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中"</li>
<li>HostName - String - 是否必填：否 - 主机名筛选</li>
<li>Group- String - 是否必填：否 - 主机群组搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>HostID- string - 是否必填：否 - 主机id搜索</li>
<li>DockerVersion- string - 是否必填：否 - docker版本搜索</li>
<li>MachineType- string - 是否必填：否 - 主机来源MachineType搜索，"ALL":"全部"(或不传该字段),主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；</li>
<li>DockerStatus- string - 是否必填：否 - docker安装状态，"ALL":"全部"(或不传该字段),"INSTALL":"已安装","UNINSTALL":"未安装"</li>
<li>ProjectID- string - 是否必填：否 - 所属项目id搜索</li>
<li>Tag:xxx(tag:key)- string- 是否必填：否 - 标签键值搜索 示例Filters":[{"Name":"tag:tke-kind","Values":["service"]}]</li>
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式 asc,desc
     */
    public $Order;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Status - String - 是否必填：否 - agent状态筛选，"ALL":"全部"(或不传该字段),"UNINSTALL"："未安装","OFFLINE"："离线", "ONLINE"："防护中"</li>
<li>HostName - String - 是否必填：否 - 主机名筛选</li>
<li>Group- String - 是否必填：否 - 主机群组搜索</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>HostID- string - 是否必填：否 - 主机id搜索</li>
<li>DockerVersion- string - 是否必填：否 - docker版本搜索</li>
<li>MachineType- string - 是否必填：否 - 主机来源MachineType搜索，"ALL":"全部"(或不传该字段),主机来源：["CVM", "ECM", "LH", "BM"]  中的之一为腾讯云服务器；["Other"]之一非腾讯云服务器；</li>
<li>DockerStatus- string - 是否必填：否 - docker安装状态，"ALL":"全部"(或不传该字段),"INSTALL":"已安装","UNINSTALL":"未安装"</li>
<li>ProjectID- string - 是否必填：否 - 所属项目id搜索</li>
<li>Tag:xxx(tag:key)- string- 是否必填：否 - 标签键值搜索 示例Filters":[{"Name":"tag:tke-kind","Values":["service"]}]</li>
     * @param string $By 排序字段
     * @param string $Order 排序方式 asc,desc
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
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
