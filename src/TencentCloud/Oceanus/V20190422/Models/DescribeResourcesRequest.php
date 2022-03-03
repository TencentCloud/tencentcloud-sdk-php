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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResources请求参数结构体
 *
 * @method array getResourceIds() 获取需要查询的资源ID数组，数量不超过100个。如果填写了该参数则忽略Filters参数。
 * @method void setResourceIds(array $ResourceIds) 设置需要查询的资源ID数组，数量不超过100个。如果填写了该参数则忽略Filters参数。
 * @method integer getOffset() 获取偏移量，仅当设置 Limit 参数时有效
 * @method void setOffset(integer $Offset) 设置偏移量，仅当设置 Limit 参数时有效
 * @method integer getLimit() 获取条数限制。如果不填，默认返回 20 条
 * @method void setLimit(integer $Limit) 设置条数限制。如果不填，默认返回 20 条
 * @method array getFilters() 获取<li><strong>ResourceName</strong></li>
<p style="padding-left: 30px;">按照资源名字过滤，支持模糊过滤。传入的过滤名字不超过5个</p><p style="padding-left: 30px;">类型: String</p><p style="padding-left: 30px;">必选: 否</p>
 * @method void setFilters(array $Filters) 设置<li><strong>ResourceName</strong></li>
<p style="padding-left: 30px;">按照资源名字过滤，支持模糊过滤。传入的过滤名字不超过5个</p><p style="padding-left: 30px;">类型: String</p><p style="padding-left: 30px;">必选: 否</p>
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var array 需要查询的资源ID数组，数量不超过100个。如果填写了该参数则忽略Filters参数。
     */
    public $ResourceIds;

    /**
     * @var integer 偏移量，仅当设置 Limit 参数时有效
     */
    public $Offset;

    /**
     * @var integer 条数限制。如果不填，默认返回 20 条
     */
    public $Limit;

    /**
     * @var array <li><strong>ResourceName</strong></li>
<p style="padding-left: 30px;">按照资源名字过滤，支持模糊过滤。传入的过滤名字不超过5个</p><p style="padding-left: 30px;">类型: String</p><p style="padding-left: 30px;">必选: 否</p>
     */
    public $Filters;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param array $ResourceIds 需要查询的资源ID数组，数量不超过100个。如果填写了该参数则忽略Filters参数。
     * @param integer $Offset 偏移量，仅当设置 Limit 参数时有效
     * @param integer $Limit 条数限制。如果不填，默认返回 20 条
     * @param array $Filters <li><strong>ResourceName</strong></li>
<p style="padding-left: 30px;">按照资源名字过滤，支持模糊过滤。传入的过滤名字不超过5个</p><p style="padding-left: 30px;">类型: String</p><p style="padding-left: 30px;">必选: 否</p>
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
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

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
