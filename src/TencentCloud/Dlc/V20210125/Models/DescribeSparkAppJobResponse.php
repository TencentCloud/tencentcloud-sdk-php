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
 * DescribeSparkAppJob返回参数结构体
 *
 * @method SparkJobInfo getJob() 获取spark作业详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(SparkJobInfo $Job) 设置spark作业详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExists() 获取查询的spark作业是否存在
 * @method void setIsExists(boolean $IsExists) 设置查询的spark作业是否存在
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSparkAppJobResponse extends AbstractModel
{
    /**
     * @var SparkJobInfo spark作业详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var boolean 查询的spark作业是否存在
     */
    public $IsExists;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param SparkJobInfo $Job spark作业详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExists 查询的spark作业是否存在
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
        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new SparkJobInfo();
            $this->Job->deserialize($param["Job"]);
        }

        if (array_key_exists("IsExists",$param) and $param["IsExists"] !== null) {
            $this->IsExists = $param["IsExists"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
