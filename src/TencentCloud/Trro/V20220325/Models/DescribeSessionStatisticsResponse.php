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
 * DescribeSessionStatistics返回参数结构体
 *
 * @method integer getSessionNum() 获取<p>会话数量</p>
 * @method void setSessionNum(integer $SessionNum) 设置<p>会话数量</p>
 * @method integer getTotalDuration() 获取<p>通话时长，单位：分钟</p>
 * @method void setTotalDuration(integer $TotalDuration) 设置<p>通话时长，单位：分钟</p>
 * @method integer getActiveFieldDeviceNum() 获取<p>活跃现场设备数</p>
 * @method void setActiveFieldDeviceNum(integer $ActiveFieldDeviceNum) 设置<p>活跃现场设备数</p>
 * @method integer getActiveRemoteDeviceNum() 获取<p>活跃远端设备数</p>
 * @method void setActiveRemoteDeviceNum(integer $ActiveRemoteDeviceNum) 设置<p>活跃远端设备数</p>
 * @method integer getNotBadSessionRatio() 获取<p>优良会话占比，单位：%</p>
 * @method void setNotBadSessionRatio(integer $NotBadSessionRatio) 设置<p>优良会话占比，单位：%</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSessionStatisticsResponse extends AbstractModel
{
    /**
     * @var integer <p>会话数量</p>
     */
    public $SessionNum;

    /**
     * @var integer <p>通话时长，单位：分钟</p>
     */
    public $TotalDuration;

    /**
     * @var integer <p>活跃现场设备数</p>
     */
    public $ActiveFieldDeviceNum;

    /**
     * @var integer <p>活跃远端设备数</p>
     */
    public $ActiveRemoteDeviceNum;

    /**
     * @var integer <p>优良会话占比，单位：%</p>
     */
    public $NotBadSessionRatio;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SessionNum <p>会话数量</p>
     * @param integer $TotalDuration <p>通话时长，单位：分钟</p>
     * @param integer $ActiveFieldDeviceNum <p>活跃现场设备数</p>
     * @param integer $ActiveRemoteDeviceNum <p>活跃远端设备数</p>
     * @param integer $NotBadSessionRatio <p>优良会话占比，单位：%</p>
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
        if (array_key_exists("SessionNum",$param) and $param["SessionNum"] !== null) {
            $this->SessionNum = $param["SessionNum"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("ActiveFieldDeviceNum",$param) and $param["ActiveFieldDeviceNum"] !== null) {
            $this->ActiveFieldDeviceNum = $param["ActiveFieldDeviceNum"];
        }

        if (array_key_exists("ActiveRemoteDeviceNum",$param) and $param["ActiveRemoteDeviceNum"] !== null) {
            $this->ActiveRemoteDeviceNum = $param["ActiveRemoteDeviceNum"];
        }

        if (array_key_exists("NotBadSessionRatio",$param) and $param["NotBadSessionRatio"] !== null) {
            $this->NotBadSessionRatio = $param["NotBadSessionRatio"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
