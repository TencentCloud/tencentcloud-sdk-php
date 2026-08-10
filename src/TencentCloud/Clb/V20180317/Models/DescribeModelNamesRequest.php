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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelNames请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量（&gt;=0）</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量（&gt;=0）</p>
 * @method integer getLimit() 获取<p>每页数量（1-100）</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量（1-100）</p>
 * @method string getVpcId() 获取<p>过滤PrivateCustom类型自建模型。如果传递了此参数，则只返回具有相同VPC Id的模型。</p>
 * @method void setVpcId(string $VpcId) 设置<p>过滤PrivateCustom类型自建模型。如果传递了此参数，则只返回具有相同VPC Id的模型。</p>
 * @method array getFilters() 获取<p>过滤器，Name取值：</p><ul><li>ModelName：按照模型名称过滤。</li><li>ServiceProviderId：按照BYOK ID过滤。</li><li>InputModalitiesUnion：按照模态过滤。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤器，Name取值：</p><ul><li>ModelName：按照模型名称过滤。</li><li>ServiceProviderId：按照BYOK ID过滤。</li><li>InputModalitiesUnion：按照模态过滤。</li></ul>
 */
class DescribeModelNamesRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量（&gt;=0）</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量（1-100）</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤PrivateCustom类型自建模型。如果传递了此参数，则只返回具有相同VPC Id的模型。</p>
     */
    public $VpcId;

    /**
     * @var array <p>过滤器，Name取值：</p><ul><li>ModelName：按照模型名称过滤。</li><li>ServiceProviderId：按照BYOK ID过滤。</li><li>InputModalitiesUnion：按照模态过滤。</li></ul>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页偏移量（&gt;=0）</p>
     * @param integer $Limit <p>每页数量（1-100）</p>
     * @param string $VpcId <p>过滤PrivateCustom类型自建模型。如果传递了此参数，则只返回具有相同VPC Id的模型。</p>
     * @param array $Filters <p>过滤器，Name取值：</p><ul><li>ModelName：按照模型名称过滤。</li><li>ServiceProviderId：按照BYOK ID过滤。</li><li>InputModalitiesUnion：按照模态过滤。</li></ul>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
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
