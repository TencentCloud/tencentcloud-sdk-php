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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFunctions请求参数结构体
 *
 * @method string getEnvId() 获取<p>命名空间</p>
 * @method void setEnvId(string $EnvId) 设置<p>命名空间</p>
 * @method string getOrder() 获取<p>以升序还是降序的方式返回结果，可选值 ASC 和 DESC</p>
 * @method void setOrder(string $Order) 设置<p>以升序还是降序的方式返回结果，可选值 ASC 和 DESC</p>
 * @method string getOrderby() 获取<p>根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName</p>
 * @method void setOrderby(string $Orderby) 设置<p>根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName</p>
 * @method integer getOffset() 获取<p>数据偏移量，默认值为 0</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量，默认值为 0</p>
 * @method integer getLimit() 获取<p>返回数据长度，默认值为 20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数据长度，默认值为 20</p>
 * @method string getSearchKey() 获取<p>支持FunctionName模糊匹配</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>支持FunctionName模糊匹配</p>
 * @method string getDescription() 获取<p>函数描述，支持模糊搜索</p>
 * @method void setDescription(string $Description) 设置<p>函数描述，支持模糊搜索</p>
 * @method array getFilters() 获取<p>过滤特定属性或者有特定标签的函数。- 传值方式key-value 进行传值 例如：&quot;Filters&quot;: [{ &quot;Name&quot;: &quot;Status&quot;, &quot;Values&quot;: [&quot;CreateFailed&quot;,&quot;Creating&quot;]}, {&quot;Name&quot;: &quot;Type&quot;,&quot;Values&quot;: [&quot;HTTP&quot;]}]上述条件的函数是，函数状态为创建失败或者创建中，且函数类型为 HTTP 函数如果通过标签进行过滤：- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。示例值：&quot;Filters&quot;: [{&quot;Name&quot;:&quot;tag-dmtest&quot;,&quot;Values&quot;:[&quot;dmtest&quot;]}]入参限制：1.每次请求的Filters的上限为10，Filter.Values的上限为5。2.[VpcId&#39;, &#39;SubnetId&#39;, &#39;ClsTopicId&#39;, &#39;ClsLogsetId&#39;, &#39;Role&#39;, &#39;CfsId&#39;, &#39;CfsMountInsId&#39;, &#39;Eip&#39;] 过滤的Name 为这些属性时， values 只能传一个值3.[&#39;Status&#39;, &#39;Runtime&#39;, &#39;Type&#39;, &#39;PublicNetStatus&#39;, &#39;AsyncRunEnable&#39;, &#39;TraceEnable&#39;, &#39;Stamp&#39;] 过滤的Name 为这些属性时 ，values 可以传多个值</p>
 * @method void setFilters(array $Filters) 设置<p>过滤特定属性或者有特定标签的函数。- 传值方式key-value 进行传值 例如：&quot;Filters&quot;: [{ &quot;Name&quot;: &quot;Status&quot;, &quot;Values&quot;: [&quot;CreateFailed&quot;,&quot;Creating&quot;]}, {&quot;Name&quot;: &quot;Type&quot;,&quot;Values&quot;: [&quot;HTTP&quot;]}]上述条件的函数是，函数状态为创建失败或者创建中，且函数类型为 HTTP 函数如果通过标签进行过滤：- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。示例值：&quot;Filters&quot;: [{&quot;Name&quot;:&quot;tag-dmtest&quot;,&quot;Values&quot;:[&quot;dmtest&quot;]}]入参限制：1.每次请求的Filters的上限为10，Filter.Values的上限为5。2.[VpcId&#39;, &#39;SubnetId&#39;, &#39;ClsTopicId&#39;, &#39;ClsLogsetId&#39;, &#39;Role&#39;, &#39;CfsId&#39;, &#39;CfsMountInsId&#39;, &#39;Eip&#39;] 过滤的Name 为这些属性时， values 只能传一个值3.[&#39;Status&#39;, &#39;Runtime&#39;, &#39;Type&#39;, &#39;PublicNetStatus&#39;, &#39;AsyncRunEnable&#39;, &#39;TraceEnable&#39;, &#39;Stamp&#39;] 过滤的Name 为这些属性时 ，values 可以传多个值</p>
 */
class ListFunctionsRequest extends AbstractModel
{
    /**
     * @var string <p>命名空间</p>
     */
    public $EnvId;

    /**
     * @var string <p>以升序还是降序的方式返回结果，可选值 ASC 和 DESC</p>
     */
    public $Order;

    /**
     * @var string <p>根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName</p>
     */
    public $Orderby;

    /**
     * @var integer <p>数据偏移量，默认值为 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数据长度，默认值为 20</p>
     */
    public $Limit;

    /**
     * @var string <p>支持FunctionName模糊匹配</p>
     */
    public $SearchKey;

    /**
     * @var string <p>函数描述，支持模糊搜索</p>
     */
    public $Description;

    /**
     * @var array <p>过滤特定属性或者有特定标签的函数。- 传值方式key-value 进行传值 例如：&quot;Filters&quot;: [{ &quot;Name&quot;: &quot;Status&quot;, &quot;Values&quot;: [&quot;CreateFailed&quot;,&quot;Creating&quot;]}, {&quot;Name&quot;: &quot;Type&quot;,&quot;Values&quot;: [&quot;HTTP&quot;]}]上述条件的函数是，函数状态为创建失败或者创建中，且函数类型为 HTTP 函数如果通过标签进行过滤：- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。示例值：&quot;Filters&quot;: [{&quot;Name&quot;:&quot;tag-dmtest&quot;,&quot;Values&quot;:[&quot;dmtest&quot;]}]入参限制：1.每次请求的Filters的上限为10，Filter.Values的上限为5。2.[VpcId&#39;, &#39;SubnetId&#39;, &#39;ClsTopicId&#39;, &#39;ClsLogsetId&#39;, &#39;Role&#39;, &#39;CfsId&#39;, &#39;CfsMountInsId&#39;, &#39;Eip&#39;] 过滤的Name 为这些属性时， values 只能传一个值3.[&#39;Status&#39;, &#39;Runtime&#39;, &#39;Type&#39;, &#39;PublicNetStatus&#39;, &#39;AsyncRunEnable&#39;, &#39;TraceEnable&#39;, &#39;Stamp&#39;] 过滤的Name 为这些属性时 ，values 可以传多个值</p>
     */
    public $Filters;

    /**
     * @param string $EnvId <p>命名空间</p>
     * @param string $Order <p>以升序还是降序的方式返回结果，可选值 ASC 和 DESC</p>
     * @param string $Orderby <p>根据哪个字段进行返回结果排序,支持以下字段：AddTime, ModTime, FunctionName</p>
     * @param integer $Offset <p>数据偏移量，默认值为 0</p>
     * @param integer $Limit <p>返回数据长度，默认值为 20</p>
     * @param string $SearchKey <p>支持FunctionName模糊匹配</p>
     * @param string $Description <p>函数描述，支持模糊搜索</p>
     * @param array $Filters <p>过滤特定属性或者有特定标签的函数。- 传值方式key-value 进行传值 例如：&quot;Filters&quot;: [{ &quot;Name&quot;: &quot;Status&quot;, &quot;Values&quot;: [&quot;CreateFailed&quot;,&quot;Creating&quot;]}, {&quot;Name&quot;: &quot;Type&quot;,&quot;Values&quot;: [&quot;HTTP&quot;]}]上述条件的函数是，函数状态为创建失败或者创建中，且函数类型为 HTTP 函数如果通过标签进行过滤：- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。示例值：&quot;Filters&quot;: [{&quot;Name&quot;:&quot;tag-dmtest&quot;,&quot;Values&quot;:[&quot;dmtest&quot;]}]入参限制：1.每次请求的Filters的上限为10，Filter.Values的上限为5。2.[VpcId&#39;, &#39;SubnetId&#39;, &#39;ClsTopicId&#39;, &#39;ClsLogsetId&#39;, &#39;Role&#39;, &#39;CfsId&#39;, &#39;CfsMountInsId&#39;, &#39;Eip&#39;] 过滤的Name 为这些属性时， values 只能传一个值3.[&#39;Status&#39;, &#39;Runtime&#39;, &#39;Type&#39;, &#39;PublicNetStatus&#39;, &#39;AsyncRunEnable&#39;, &#39;TraceEnable&#39;, &#39;Stamp&#39;] 过滤的Name 为这些属性时 ，values 可以传多个值</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
