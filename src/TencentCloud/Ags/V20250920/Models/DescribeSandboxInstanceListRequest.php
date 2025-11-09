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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSandboxInstanceList请求参数结构体
 *
 * @method array getInstanceIds() 获取沙箱实例ID列表，指定要查询的实例。如果为空则查询所有实例。最大支持100个ID
 * @method void setInstanceIds(array $InstanceIds) 设置沙箱实例ID列表，指定要查询的实例。如果为空则查询所有实例。最大支持100个ID
 * @method string getToolId() 获取沙箱工具ID，指定时查询该沙箱模板下的实例，为空则查询所有沙箱模板的实例
 * @method void setToolId(string $ToolId) 设置沙箱工具ID，指定时查询该沙箱模板下的实例，为空则查询所有沙箱模板的实例
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 */
class DescribeSandboxInstanceListRequest extends AbstractModel
{
    /**
     * @var array 沙箱实例ID列表，指定要查询的实例。如果为空则查询所有实例。最大支持100个ID
     */
    public $InstanceIds;

    /**
     * @var string 沙箱工具ID，指定时查询该沙箱模板下的实例，为空则查询所有沙箱模板的实例
     */
    public $ToolId;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @param array $InstanceIds 沙箱实例ID列表，指定要查询的实例。如果为空则查询所有实例。最大支持100个ID
     * @param string $ToolId 沙箱工具ID，指定时查询该沙箱模板下的实例，为空则查询所有沙箱模板的实例
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大值为100
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
