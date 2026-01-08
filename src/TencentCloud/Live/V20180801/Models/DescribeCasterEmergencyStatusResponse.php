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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCasterEmergencyStatus返回参数结构体
 *
 * @method integer getEmergencyStatus() 获取备播状态，范围[0,1,2]
0. 正常直播状态
1. 备播状态
2. 备播切换正常直播中，在配置了延播时长时出现
 * @method void setEmergencyStatus(integer $EmergencyStatus) 设置备播状态，范围[0,1,2]
0. 正常直播状态
1. 备播状态
2. 备播切换正常直播中，在配置了延播时长时出现
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCasterEmergencyStatusResponse extends AbstractModel
{
    /**
     * @var integer 备播状态，范围[0,1,2]
0. 正常直播状态
1. 备播状态
2. 备播切换正常直播中，在配置了延播时长时出现
     */
    public $EmergencyStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EmergencyStatus 备播状态，范围[0,1,2]
0. 正常直播状态
1. 备播状态
2. 备播切换正常直播中，在配置了延播时长时出现
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
        if (array_key_exists("EmergencyStatus",$param) and $param["EmergencyStatus"] !== null) {
            $this->EmergencyStatus = $param["EmergencyStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
