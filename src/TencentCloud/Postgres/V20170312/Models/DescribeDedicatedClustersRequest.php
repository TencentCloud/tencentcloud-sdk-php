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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusters请求参数结构体
 *
 * @method array getFilters() 获取按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
dedicated-cluster-id: 按照专属集群ID筛选，类型为string
 * @method void setFilters(array $Filters) 设置按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
dedicated-cluster-id: 按照专属集群ID筛选，类型为string
 */
class DescribeDedicatedClustersRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
dedicated-cluster-id: 按照专属集群ID筛选，类型为string
     */
    public $Filters;

    /**
     * @param array $Filters 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
dedicated-cluster-id: 按照专属集群ID筛选，类型为string
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
