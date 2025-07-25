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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancePluginList请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getOffset() 获取分页起始值, 默认值0
 * @method void setOffset(integer $Offset) 设置分页起始值, 默认值0
 * @method integer getLimit() 获取分页大小，默认值10
 * @method void setLimit(integer $Limit) 设置分页大小，默认值10
 * @method string getOrderBy() 获取排序字段<li>1：插件名 pluginName</li>
 * @method void setOrderBy(string $OrderBy) 设置排序字段<li>1：插件名 pluginName</li>
 * @method string getOrderByType() 获取排序方式<li>0：升序 asc</li><li>1：降序 desc</li>
 * @method void setOrderByType(string $OrderByType) 设置排序方式<li>0：升序 asc</li><li>1：降序 desc</li>
 * @method integer getPluginType() 获取0：系统插件
 * @method void setPluginType(integer $PluginType) 设置0：系统插件
 */
class DescribeInstancePluginListRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分页起始值, 默认值0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认值10
     */
    public $Limit;

    /**
     * @var string 排序字段<li>1：插件名 pluginName</li>
     */
    public $OrderBy;

    /**
     * @var string 排序方式<li>0：升序 asc</li><li>1：降序 desc</li>
     */
    public $OrderByType;

    /**
     * @var integer 0：系统插件
     */
    public $PluginType;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Offset 分页起始值, 默认值0
     * @param integer $Limit 分页大小，默认值10
     * @param string $OrderBy 排序字段<li>1：插件名 pluginName</li>
     * @param string $OrderByType 排序方式<li>0：升序 asc</li><li>1：降序 desc</li>
     * @param integer $PluginType 0：系统插件
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }
    }
}
