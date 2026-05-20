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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataSourceList请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>返回数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>返回数量</p>
 * @method array getOrderFields() 获取<p>排序配置</p>
 * @method void setOrderFields(array $OrderFields) 设置<p>排序配置</p>
 * @method array getFilters() 获取<p>可选过滤条件，Filter可选配置(参考): &quot;Name&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;数据源名称&quot; }, &quot;Type&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;类型&quot; }, &quot;ClusterId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;集群id&quot; }, &quot;CategoryId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;分类，项目或空间id&quot; }</p>
 * @method void setFilters(array $Filters) 设置<p>可选过滤条件，Filter可选配置(参考): &quot;Name&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;数据源名称&quot; }, &quot;Type&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;类型&quot; }, &quot;ClusterId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;集群id&quot; }, &quot;CategoryId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;分类，项目或空间id&quot; }</p>
 */
class DescribeDataSourceListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>返回数量</p>
     */
    public $PageSize;

    /**
     * @var array <p>排序配置</p>
     */
    public $OrderFields;

    /**
     * @var array <p>可选过滤条件，Filter可选配置(参考): &quot;Name&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;数据源名称&quot; }, &quot;Type&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;类型&quot; }, &quot;ClusterId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;集群id&quot; }, &quot;CategoryId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;分类，项目或空间id&quot; }</p>
     */
    public $Filters;

    /**
     * @param integer $PageNumber <p>页码</p>
     * @param integer $PageSize <p>返回数量</p>
     * @param array $OrderFields <p>排序配置</p>
     * @param array $Filters <p>可选过滤条件，Filter可选配置(参考): &quot;Name&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;数据源名称&quot; }, &quot;Type&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;类型&quot; }, &quot;ClusterId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;集群id&quot; }, &quot;CategoryId&quot;: { &quot;type&quot;: &quot;string&quot;, &quot;description&quot;: &quot;分类，项目或空间id&quot; }</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
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
