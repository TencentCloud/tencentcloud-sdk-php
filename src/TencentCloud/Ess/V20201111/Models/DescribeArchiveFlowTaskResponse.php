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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeArchiveFlowTask返回参数结构体
 *
 * @method integer getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 任务完成</li><li>3： 任务完成(存在失败)</li></ul>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 任务完成</li><li>3： 任务完成(存在失败)</li></ul>
 * @method array getArchiveFlowResults() 获取<p>每条合同的处理结果，与创建任务的archive_flows列表顺序一致</p>
 * @method void setArchiveFlowResults(array $ArchiveFlowResults) 设置<p>每条合同的处理结果，与创建任务的archive_flows列表顺序一致</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeArchiveFlowTaskResponse extends AbstractModel
{
    /**
     * @var integer <p>任务状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 任务完成</li><li>3： 任务完成(存在失败)</li></ul>
     */
    public $Status;

    /**
     * @var array <p>每条合同的处理结果，与创建任务的archive_flows列表顺序一致</p>
     */
    public $ArchiveFlowResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status <p>任务状态</p><p>枚举值：</p><ul><li>0： 待处理</li><li>1： 处理中</li><li>2： 任务完成</li><li>3： 任务完成(存在失败)</li></ul>
     * @param array $ArchiveFlowResults <p>每条合同的处理结果，与创建任务的archive_flows列表顺序一致</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ArchiveFlowResults",$param) and $param["ArchiveFlowResults"] !== null) {
            $this->ArchiveFlowResults = [];
            foreach ($param["ArchiveFlowResults"] as $key => $value){
                $obj = new ArchiveFlowResult();
                $obj->deserialize($value);
                array_push($this->ArchiveFlowResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
