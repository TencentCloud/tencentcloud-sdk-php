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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNodePools请求参数结构体
 *
 * @method string getClusterId() 获取ClusterId（集群id）
 * @method void setClusterId(string $ClusterId) 设置ClusterId（集群id）
 * @method array getFilters() 获取· "Name":"NodePoolsName","Values": ["test"]
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  "Name":"NodePoolsId","Values": ["np-d2mb2zb"]
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  "Name":"Tags","Values": ["product:tke"]
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
 * @method void setFilters(array $Filters) 设置· "Name":"NodePoolsName","Values": ["test"]
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  "Name":"NodePoolsId","Values": ["np-d2mb2zb"]
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  "Name":"Tags","Values": ["product:tke"]
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
 */
class DescribeClusterNodePoolsRequest extends AbstractModel
{
    /**
     * @var string ClusterId（集群id）
     */
    public $ClusterId;

    /**
     * @var array · "Name":"NodePoolsName","Values": ["test"]
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  "Name":"NodePoolsId","Values": ["np-d2mb2zb"]
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  "Name":"Tags","Values": ["product:tke"]
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
     */
    public $Filters;

    /**
     * @param string $ClusterId ClusterId（集群id）
     * @param array $Filters · "Name":"NodePoolsName","Values": ["test"]
    按照【节点池名】进行过滤。
    类型：String
    必选：否

·  "Name":"NodePoolsId","Values": ["np-d2mb2zb"]
    按照【节点池id】进行过滤。
    类型：String
    必选：否

·  "Name":"Tags","Values": ["product:tke"]
    按照【标签键值对】进行过滤。
    类型：String
    必选：否
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
