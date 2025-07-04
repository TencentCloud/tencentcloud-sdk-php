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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOpenPolicyList返回参数结构体
 *
 * @method array getOpenPolicyInfoList() 获取策略信息列表
 * @method void setOpenPolicyInfoList(array $OpenPolicyInfoList) 设置策略信息列表
 * @method integer getGatekeeperStatus() 获取集群内是否安装了gatekeeper addon
 * @method void setGatekeeperStatus(integer $GatekeeperStatus) 设置集群内是否安装了gatekeeper addon
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOpenPolicyListResponse extends AbstractModel
{
    /**
     * @var array 策略信息列表
     */
    public $OpenPolicyInfoList;

    /**
     * @var integer 集群内是否安装了gatekeeper addon
     */
    public $GatekeeperStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $OpenPolicyInfoList 策略信息列表
     * @param integer $GatekeeperStatus 集群内是否安装了gatekeeper addon
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
        if (array_key_exists("OpenPolicyInfoList",$param) and $param["OpenPolicyInfoList"] !== null) {
            $this->OpenPolicyInfoList = [];
            foreach ($param["OpenPolicyInfoList"] as $key => $value){
                $obj = new OpenPolicyInfo();
                $obj->deserialize($value);
                array_push($this->OpenPolicyInfoList, $obj);
            }
        }

        if (array_key_exists("GatekeeperStatus",$param) and $param["GatekeeperStatus"] !== null) {
            $this->GatekeeperStatus = $param["GatekeeperStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
