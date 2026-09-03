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
 * DescribeClusterEventLogSwitch返回参数结构体
 *
 * @method string getClusterId() 获取<p>TKE 集群 ID（回显）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>TKE 集群 ID（回显）</p>
 * @method boolean getEnable() 获取<p>事件日志是否已开启</p>
 * @method void setEnable(boolean $Enable) 设置<p>事件日志是否已开启</p>
 * @method string getLogsetId() 获取<p>关联的 CLS 日志集 ID（Enable=true 时返回）</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>关联的 CLS 日志集 ID（Enable=true 时返回）</p>
 * @method string getTopicId() 获取<p>关联的 CLS 日志主题 ID（Enable=true 时返回）</p>
 * @method void setTopicId(string $TopicId) 设置<p>关联的 CLS 日志主题 ID（Enable=true 时返回）</p>
 * @method string getTopicRegion() 获取<p>关联的 CLS 日志主题所在地域（Enable=true 时返回）</p>
 * @method void setTopicRegion(string $TopicRegion) 设置<p>关联的 CLS 日志主题所在地域（Enable=true 时返回）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterEventLogSwitchResponse extends AbstractModel
{
    /**
     * @var string <p>TKE 集群 ID（回显）</p>
     */
    public $ClusterId;

    /**
     * @var boolean <p>事件日志是否已开启</p>
     */
    public $Enable;

    /**
     * @var string <p>关联的 CLS 日志集 ID（Enable=true 时返回）</p>
     */
    public $LogsetId;

    /**
     * @var string <p>关联的 CLS 日志主题 ID（Enable=true 时返回）</p>
     */
    public $TopicId;

    /**
     * @var string <p>关联的 CLS 日志主题所在地域（Enable=true 时返回）</p>
     */
    public $TopicRegion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId <p>TKE 集群 ID（回显）</p>
     * @param boolean $Enable <p>事件日志是否已开启</p>
     * @param string $LogsetId <p>关联的 CLS 日志集 ID（Enable=true 时返回）</p>
     * @param string $TopicId <p>关联的 CLS 日志主题 ID（Enable=true 时返回）</p>
     * @param string $TopicRegion <p>关联的 CLS 日志主题所在地域（Enable=true 时返回）</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
