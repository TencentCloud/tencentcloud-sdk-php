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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwSwitches返回参数结构体
 *
 * @method string getData() 获取查询结果。UTF-8 JSON object 字符串；调用方需解析 Response.Data。border_firewall 返回公网 IP 总数、已防护数、未防护数、操作中数量和防护率；nat_firewall、vpc_firewall 按 cluster/ha 返回实例及子开关汇总；ndr 返回已开启开关数；ips 返回当前防护模式。
 * @method void setData(string $Data) 设置查询结果。UTF-8 JSON object 字符串；调用方需解析 Response.Data。border_firewall 返回公网 IP 总数、已防护数、未防护数、操作中数量和防护率；nat_firewall、vpc_firewall 按 cluster/ha 返回实例及子开关汇总；ndr 返回已开启开关数；ips 返回当前防护模式。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCfwSwitchesResponse extends AbstractModel
{
    /**
     * @var string 查询结果。UTF-8 JSON object 字符串；调用方需解析 Response.Data。border_firewall 返回公网 IP 总数、已防护数、未防护数、操作中数量和防护率；nat_firewall、vpc_firewall 按 cluster/ha 返回实例及子开关汇总；ndr 返回已开启开关数；ips 返回当前防护模式。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data 查询结果。UTF-8 JSON object 字符串；调用方需解析 Response.Data。border_firewall 返回公网 IP 总数、已防护数、未防护数、操作中数量和防护率；nat_firewall、vpc_firewall 按 cluster/ha 返回实例及子开关汇总；ndr 返回已开启开关数；ips 返回当前防护模式。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
