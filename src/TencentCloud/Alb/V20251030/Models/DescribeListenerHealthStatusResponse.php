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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListenerHealthStatus返回参数结构体
 *
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getListenerPort() 获取监听器端口。
 * @method void setListenerPort(string $ListenerPort) 设置监听器端口。
 * @method string getListenerProtocol() 获取监听器协议。
 * @method void setListenerProtocol(string $ListenerProtocol) 设置监听器协议。
 * @method string getNextToken() 获取下一次查询的令牌（Token）。为空时表示这是最后一页。
 * @method void setNextToken(string $NextToken) 设置下一次查询的令牌（Token）。为空时表示这是最后一页。
 * @method array getRuleHealthStatusInfos() 获取转发规则健康状态。
 * @method void setRuleHealthStatusInfos(array $RuleHealthStatusInfos) 设置转发规则健康状态。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeListenerHealthStatusResponse extends AbstractModel
{
    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var string 监听器端口。
     */
    public $ListenerPort;

    /**
     * @var string 监听器协议。
     */
    public $ListenerProtocol;

    /**
     * @var string 下一次查询的令牌（Token）。为空时表示这是最后一页。
     */
    public $NextToken;

    /**
     * @var array 转发规则健康状态。
     */
    public $RuleHealthStatusInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $ListenerPort 监听器端口。
     * @param string $ListenerProtocol 监听器协议。
     * @param string $NextToken 下一次查询的令牌（Token）。为空时表示这是最后一页。
     * @param array $RuleHealthStatusInfos 转发规则健康状态。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RuleHealthStatusInfos",$param) and $param["RuleHealthStatusInfos"] !== null) {
            $this->RuleHealthStatusInfos = [];
            foreach ($param["RuleHealthStatusInfos"] as $key => $value){
                $obj = new RuleHealthStatusInfo();
                $obj->deserialize($value);
                array_push($this->RuleHealthStatusInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
