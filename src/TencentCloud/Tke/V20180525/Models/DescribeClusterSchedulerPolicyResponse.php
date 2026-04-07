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
 * DescribeClusterSchedulerPolicy返回参数结构体
 *
 * @method string getPolicy() 获取<p>调度策略json字符串</p>
 * @method void setPolicy(string $Policy) 设置<p>调度策略json字符串</p>
 * @method array getSchedulerPolicyConfig() 获取<p>SchedulerPolicy配置信息</p>
 * @method void setSchedulerPolicyConfig(array $SchedulerPolicyConfig) 设置<p>SchedulerPolicy配置信息</p>
 * @method ClientConnection getClientConnection() 获取<p>客户端连接</p>
 * @method void setClientConnection(ClientConnection $ClientConnection) 设置<p>客户端连接</p>
 * @method array getExtenders() 获取<p>扩展调度器</p>
 * @method void setExtenders(array $Extenders) 设置<p>扩展调度器</p>
 * @method boolean getHighPerformance() 获取<p>高性能模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighPerformance(boolean $HighPerformance) 设置<p>高性能模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterSchedulerPolicyResponse extends AbstractModel
{
    /**
     * @var string <p>调度策略json字符串</p>
     */
    public $Policy;

    /**
     * @var array <p>SchedulerPolicy配置信息</p>
     */
    public $SchedulerPolicyConfig;

    /**
     * @var ClientConnection <p>客户端连接</p>
     */
    public $ClientConnection;

    /**
     * @var array <p>扩展调度器</p>
     */
    public $Extenders;

    /**
     * @var boolean <p>高性能模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighPerformance;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Policy <p>调度策略json字符串</p>
     * @param array $SchedulerPolicyConfig <p>SchedulerPolicy配置信息</p>
     * @param ClientConnection $ClientConnection <p>客户端连接</p>
     * @param array $Extenders <p>扩展调度器</p>
     * @param boolean $HighPerformance <p>高性能模式</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("SchedulerPolicyConfig",$param) and $param["SchedulerPolicyConfig"] !== null) {
            $this->SchedulerPolicyConfig = [];
            foreach ($param["SchedulerPolicyConfig"] as $key => $value){
                $obj = new SchedulerPolicyConfig();
                $obj->deserialize($value);
                array_push($this->SchedulerPolicyConfig, $obj);
            }
        }

        if (array_key_exists("ClientConnection",$param) and $param["ClientConnection"] !== null) {
            $this->ClientConnection = new ClientConnection();
            $this->ClientConnection->deserialize($param["ClientConnection"]);
        }

        if (array_key_exists("Extenders",$param) and $param["Extenders"] !== null) {
            $this->Extenders = [];
            foreach ($param["Extenders"] as $key => $value){
                $obj = new Extenders();
                $obj->deserialize($value);
                array_push($this->Extenders, $obj);
            }
        }

        if (array_key_exists("HighPerformance",$param) and $param["HighPerformance"] !== null) {
            $this->HighPerformance = $param["HighPerformance"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
