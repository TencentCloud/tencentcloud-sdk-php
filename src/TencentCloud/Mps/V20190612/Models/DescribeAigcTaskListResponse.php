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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcTaskList返回参数结构体
 *
 * @method integer getTotal() 获取<p>当前任务待返回总数</p>
 * @method void setTotal(integer $Total) 设置<p>当前任务待返回总数</p>
 * @method integer getPageNum() 获取<p>开始查询页</p>
 * @method void setPageNum(integer $PageNum) 设置<p>开始查询页</p>
 * @method integer getPageSize() 获取<p>当前页要获取数据条目数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>当前页要获取数据条目数</p>
 * @method array getTasks() 获取<p>任务详情数据</p>
 * @method void setTasks(array $Tasks) 设置<p>任务详情数据</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAigcTaskListResponse extends AbstractModel
{
    /**
     * @var integer <p>当前任务待返回总数</p>
     */
    public $Total;

    /**
     * @var integer <p>开始查询页</p>
     */
    public $PageNum;

    /**
     * @var integer <p>当前页要获取数据条目数</p>
     */
    public $PageSize;

    /**
     * @var array <p>任务详情数据</p>
     */
    public $Tasks;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>当前任务待返回总数</p>
     * @param integer $PageNum <p>开始查询页</p>
     * @param integer $PageSize <p>当前页要获取数据条目数</p>
     * @param array $Tasks <p>任务详情数据</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new AigcTaskListItem();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
