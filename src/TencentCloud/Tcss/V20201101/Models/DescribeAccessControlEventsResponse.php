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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessControlEvents返回参数结构体
 *
 * @method integer getTotalCount() 获取事件总数量
 * @method void setTotalCount(integer $TotalCount) 设置事件总数量
 * @method array getEventSet() 获取访问控制事件数组
 * @method void setEventSet(array $EventSet) 设置访问控制事件数组
 * @method string getSupportCoreVersion() 获取支持的内核版本
 * @method void setSupportCoreVersion(string $SupportCoreVersion) 设置支持的内核版本
 * @method string getInterceptionFailureTip() 获取拦截失败可能的原因
 * @method void setInterceptionFailureTip(string $InterceptionFailureTip) 设置拦截失败可能的原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessControlEventsResponse extends AbstractModel
{
    /**
     * @var integer 事件总数量
     */
    public $TotalCount;

    /**
     * @var array 访问控制事件数组
     */
    public $EventSet;

    /**
     * @var string 支持的内核版本
     */
    public $SupportCoreVersion;

    /**
     * @var string 拦截失败可能的原因
     */
    public $InterceptionFailureTip;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 事件总数量
     * @param array $EventSet 访问控制事件数组
     * @param string $SupportCoreVersion 支持的内核版本
     * @param string $InterceptionFailureTip 拦截失败可能的原因
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("EventSet",$param) and $param["EventSet"] !== null) {
            $this->EventSet = [];
            foreach ($param["EventSet"] as $key => $value){
                $obj = new AccessControlEventInfo();
                $obj->deserialize($value);
                array_push($this->EventSet, $obj);
            }
        }

        if (array_key_exists("SupportCoreVersion",$param) and $param["SupportCoreVersion"] !== null) {
            $this->SupportCoreVersion = $param["SupportCoreVersion"];
        }

        if (array_key_exists("InterceptionFailureTip",$param) and $param["InterceptionFailureTip"] !== null) {
            $this->InterceptionFailureTip = $param["InterceptionFailureTip"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
