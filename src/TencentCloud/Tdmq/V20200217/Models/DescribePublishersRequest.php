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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublishers请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method array getFilters() 获取参数过滤器，支持ProducerName，Address字段
 * @method void setFilters(array $Filters) 设置参数过滤器，支持ProducerName，Address字段
 * @method integer getOffset() 获取查询偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置查询偏移量，默认为0
 * @method integer getLimit() 获取查询条数，默认为20
 * @method void setLimit(integer $Limit) 设置查询条数，默认为20
 * @method Sort getSort() 获取排序器
 * @method void setSort(Sort $Sort) 设置排序器
 */
class DescribePublishersRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var array 参数过滤器，支持ProducerName，Address字段
     */
    public $Filters;

    /**
     * @var integer 查询偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 查询条数，默认为20
     */
    public $Limit;

    /**
     * @var Sort 排序器
     */
    public $Sort;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Namespace 命名空间名称
     * @param string $Topic 主题名称
     * @param array $Filters 参数过滤器，支持ProducerName，Address字段
     * @param integer $Offset 查询偏移量，默认为0
     * @param integer $Limit 查询条数，默认为20
     * @param Sort $Sort 排序器
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
