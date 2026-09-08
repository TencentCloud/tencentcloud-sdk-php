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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInsPublicEndpoints返回参数结构体
 *
 * @method array getEndpoints() 获取<p>接入点</p>
 * @method void setEndpoints(array $Endpoints) 设置<p>接入点</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method integer getBandwidth() 获取<p>带宽，单位Mbps</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>带宽，单位Mbps</p>
 * @method array getRules() 获取<p>公网访问规则</p>
 * @method void setRules(array $Rules) 设置<p>公网访问规则</p>
 * @method string getStatus() 获取<p>公网状态：<br>    NORMAL-正常<br>    CLOSING-关闭中<br>    MODIFYING-修改中<br>    CREATING-开启中<br>    CLOSE-关闭</p>
 * @method void setStatus(string $Status) 设置<p>公网状态：<br>    NORMAL-正常<br>    CLOSING-关闭中<br>    MODIFYING-修改中<br>    CREATING-开启中<br>    CLOSE-关闭</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInsPublicEndpointsResponse extends AbstractModel
{
    /**
     * @var array <p>接入点</p>
     */
    public $Endpoints;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>带宽，单位Mbps</p>
     */
    public $Bandwidth;

    /**
     * @var array <p>公网访问规则</p>
     */
    public $Rules;

    /**
     * @var string <p>公网状态：<br>    NORMAL-正常<br>    CLOSING-关闭中<br>    MODIFYING-修改中<br>    CREATING-开启中<br>    CLOSE-关闭</p>
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Endpoints <p>接入点</p>
     * @param string $InstanceId <p>实例id</p>
     * @param integer $Bandwidth <p>带宽，单位Mbps</p>
     * @param array $Rules <p>公网访问规则</p>
     * @param string $Status <p>公网状态：<br>    NORMAL-正常<br>    CLOSING-关闭中<br>    MODIFYING-修改中<br>    CREATING-开启中<br>    CLOSE-关闭</p>
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
        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new MQTTEndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
