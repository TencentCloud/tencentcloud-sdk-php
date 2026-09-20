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
 * CheckRechargeKafkaServer返回参数结构体
 *
 * @method integer getStatus() 获取<p>Kafka集群可访问状态。</p><ul><li>0：可正常访问 </li><li>-1：broker 连接失败</li><li>-2：sasl 鉴权失败</li><li>-3：ckafka 角色未授权</li><li>-4：topic 列表不存在</li><li>-5：topic 内暂无数据</li><li>-6：用户没有 ckafka 权限</li><li>-7：消费组已经存在</li><li>-8：kafka 实例不存在或已销毁</li><li>-9：Broker 列表为空</li><li>-10：Broker 地址格式不正确</li><li>-11：Broker 端口非整型</li></ul>
 * @method void setStatus(integer $Status) 设置<p>Kafka集群可访问状态。</p><ul><li>0：可正常访问 </li><li>-1：broker 连接失败</li><li>-2：sasl 鉴权失败</li><li>-3：ckafka 角色未授权</li><li>-4：topic 列表不存在</li><li>-5：topic 内暂无数据</li><li>-6：用户没有 ckafka 权限</li><li>-7：消费组已经存在</li><li>-8：kafka 实例不存在或已销毁</li><li>-9：Broker 列表为空</li><li>-10：Broker 地址格式不正确</li><li>-11：Broker 端口非整型</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckRechargeKafkaServerResponse extends AbstractModel
{
    /**
     * @var integer <p>Kafka集群可访问状态。</p><ul><li>0：可正常访问 </li><li>-1：broker 连接失败</li><li>-2：sasl 鉴权失败</li><li>-3：ckafka 角色未授权</li><li>-4：topic 列表不存在</li><li>-5：topic 内暂无数据</li><li>-6：用户没有 ckafka 权限</li><li>-7：消费组已经存在</li><li>-8：kafka 实例不存在或已销毁</li><li>-9：Broker 列表为空</li><li>-10：Broker 地址格式不正确</li><li>-11：Broker 端口非整型</li></ul>
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status <p>Kafka集群可访问状态。</p><ul><li>0：可正常访问 </li><li>-1：broker 连接失败</li><li>-2：sasl 鉴权失败</li><li>-3：ckafka 角色未授权</li><li>-4：topic 列表不存在</li><li>-5：topic 内暂无数据</li><li>-6：用户没有 ckafka 权限</li><li>-7：消费组已经存在</li><li>-8：kafka 实例不存在或已销毁</li><li>-9：Broker 列表为空</li><li>-10：Broker 地址格式不正确</li><li>-11：Broker 端口非整型</li></ul>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
