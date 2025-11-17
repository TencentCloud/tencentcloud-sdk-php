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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method array getFilter() 获取根据filter做过滤，支持ClusterId（取值示例：cls-xxxx）、TaskType（任务类型，取值示例：add_cluster_cidr、node_upgrade、node_upgrade_ctl等）其中任务类型必传
 * @method void setFilter(array $Filter) 设置根据filter做过滤，支持ClusterId（取值示例：cls-xxxx）、TaskType（任务类型，取值示例：add_cluster_cidr、node_upgrade、node_upgrade_ctl等）其中任务类型必传
 * @method boolean getLatest() 获取表示最新的任务条目，此值为true的话，输出任务列表中只会有最新的一条
 * @method void setLatest(boolean $Latest) 设置表示最新的任务条目，此值为true的话，输出任务列表中只会有最新的一条
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var array 根据filter做过滤，支持ClusterId（取值示例：cls-xxxx）、TaskType（任务类型，取值示例：add_cluster_cidr、node_upgrade、node_upgrade_ctl等）其中任务类型必传
     */
    public $Filter;

    /**
     * @var boolean 表示最新的任务条目，此值为true的话，输出任务列表中只会有最新的一条
     */
    public $Latest;

    /**
     * @param array $Filter 根据filter做过滤，支持ClusterId（取值示例：cls-xxxx）、TaskType（任务类型，取值示例：add_cluster_cidr、node_upgrade、node_upgrade_ctl等）其中任务类型必传
     * @param boolean $Latest 表示最新的任务条目，此值为true的话，输出任务列表中只会有最新的一条
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Latest",$param) and $param["Latest"] !== null) {
            $this->Latest = $param["Latest"];
        }
    }
}
