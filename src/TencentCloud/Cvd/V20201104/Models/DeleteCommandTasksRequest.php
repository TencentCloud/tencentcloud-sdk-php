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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCommandTasks请求参数结构体
 *
 * @method array getFilters() 获取<p>删除命令任务条件<br>Filter.name 目前支持 CommandId</p>
 * @method void setFilters(array $Filters) 设置<p>删除命令任务条件<br>Filter.name 目前支持 CommandId</p>
 */
class DeleteCommandTasksRequest extends AbstractModel
{
    /**
     * @var array <p>删除命令任务条件<br>Filter.name 目前支持 CommandId</p>
     */
    public $Filters;

    /**
     * @param array $Filters <p>删除命令任务条件<br>Filter.name 目前支持 CommandId</p>
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
