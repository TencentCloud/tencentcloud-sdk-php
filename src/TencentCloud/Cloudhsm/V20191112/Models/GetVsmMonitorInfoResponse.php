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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVsmMonitorInfo返回参数结构体
 *
 * @method array getMonitorInfo() 获取<p>VSM监控信息</p>
 * @method void setMonitorInfo(array $MonitorInfo) 设置<p>VSM监控信息</p>
 * @method array getDigestList() 获取<p>vsm摘要列表</p>
 * @method void setDigestList(array $DigestList) 设置<p>vsm摘要列表</p>
 * @method integer getInitStatus() 获取<p>初始化状态</p>
 * @method void setInitStatus(integer $InitStatus) 设置<p>初始化状态</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetVsmMonitorInfoResponse extends AbstractModel
{
    /**
     * @var array <p>VSM监控信息</p>
     */
    public $MonitorInfo;

    /**
     * @var array <p>vsm摘要列表</p>
     */
    public $DigestList;

    /**
     * @var integer <p>初始化状态</p>
     */
    public $InitStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MonitorInfo <p>VSM监控信息</p>
     * @param array $DigestList <p>vsm摘要列表</p>
     * @param integer $InitStatus <p>初始化状态</p>
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
        if (array_key_exists("MonitorInfo",$param) and $param["MonitorInfo"] !== null) {
            $this->MonitorInfo = $param["MonitorInfo"];
        }

        if (array_key_exists("DigestList",$param) and $param["DigestList"] !== null) {
            $this->DigestList = [];
            foreach ($param["DigestList"] as $key => $value){
                $obj = new VsmDigestItem();
                $obj->deserialize($value);
                array_push($this->DigestList, $obj);
            }
        }

        if (array_key_exists("InitStatus",$param) and $param["InitStatus"] !== null) {
            $this->InitStatus = $param["InitStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
