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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnnotationTasks返回参数结构体
 *
 * @method string getJobId() 获取<p>任务 ID</p>
 * @method void setJobId(string $JobId) 设置<p>任务 ID</p>
 * @method integer getTotalCount() 获取<p>处理项总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>处理项总数</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method integer getLimit() 获取<p>每页数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p>
 * @method array getTasks() 获取<p>处理项列表</p>
 * @method void setTasks(array $Tasks) 设置<p>处理项列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAnnotationTasksResponse extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>处理项总数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量</p>
     */
    public $Limit;

    /**
     * @var array <p>处理项列表</p>
     */
    public $Tasks;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId <p>任务 ID</p>
     * @param integer $TotalCount <p>处理项总数</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param integer $Limit <p>每页数量</p>
     * @param array $Tasks <p>处理项列表</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
