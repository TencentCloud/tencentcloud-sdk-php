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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudProductLogCollection返回参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getTopicName() 获取<p>日志主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称</p>
 * @method string getLogsetId() 获取<p>日志集ID</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集ID</p>
 * @method string getLogsetName() 获取<p>日志集名称</p>
 * @method void setLogsetName(string $LogsetName) 设置<p>日志集名称</p>
 * @method integer getStatus() 获取<p>-1 创建中，1创建完成</p>
 * @method void setStatus(integer $Status) 设置<p>-1 创建中，1创建完成</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCloudProductLogCollectionResponse extends AbstractModel
{
    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>日志集ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志集名称</p>
     */
    public $LogsetName;

    /**
     * @var integer <p>-1 创建中，1创建完成</p>
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $TopicName <p>日志主题名称</p>
     * @param string $LogsetId <p>日志集ID</p>
     * @param string $LogsetName <p>日志集名称</p>
     * @param integer $Status <p>-1 创建中，1创建完成</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
