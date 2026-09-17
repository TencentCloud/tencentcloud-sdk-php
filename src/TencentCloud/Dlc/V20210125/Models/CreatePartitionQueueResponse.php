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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePartitionQueue返回参数结构体
 *
 * @method integer getId() 获取<p>新创建的资源队列ID</p>
 * @method void setId(integer $Id) 设置<p>新创建的资源队列ID</p>
 * @method string getQueueName() 获取<p>最终生效的队列编码（含系统生成场景），与 DescribePartitionQueues 出参的 QueueName 语义一致</p>
 * @method void setQueueName(string $QueueName) 设置<p>最终生效的队列编码（含系统生成场景），与 DescribePartitionQueues 出参的 QueueName 语义一致</p>
 * @method string getAlias() 获取<p>队列别名（显示名）</p>
 * @method void setAlias(string $Alias) 设置<p>队列别名（显示名）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreatePartitionQueueResponse extends AbstractModel
{
    /**
     * @var integer <p>新创建的资源队列ID</p>
     */
    public $Id;

    /**
     * @var string <p>最终生效的队列编码（含系统生成场景），与 DescribePartitionQueues 出参的 QueueName 语义一致</p>
     */
    public $QueueName;

    /**
     * @var string <p>队列别名（显示名）</p>
     */
    public $Alias;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>新创建的资源队列ID</p>
     * @param string $QueueName <p>最终生效的队列编码（含系统生成场景），与 DescribePartitionQueues 出参的 QueueName 语义一致</p>
     * @param string $Alias <p>队列别名（显示名）</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
