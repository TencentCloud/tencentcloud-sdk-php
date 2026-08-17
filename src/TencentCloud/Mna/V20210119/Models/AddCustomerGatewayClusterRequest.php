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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCustomerGatewayCluster请求参数结构体
 *
 * @method string getClusterName() 获取<p>集群名称。最大 64 字符，支持字母、数字、中划线、下划线、点及中文。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称。最大 64 字符，支持字母、数字、中划线、下划线、点及中文。</p>
 * @method string getBigArea() 获取<p>部署大区标识。最大 32 字符。例如 CN 表示中国大陆。</p>
 * @method void setBigArea(string $BigArea) 设置<p>部署大区标识。最大 32 字符。例如 CN 表示中国大陆。</p>
 * @method string getRegionId() 获取<p>地域标识。最大 32 字符。例如 ap-guangzhou。</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域标识。最大 32 字符。例如 ap-guangzhou。</p>
 */
class AddCustomerGatewayClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群名称。最大 64 字符，支持字母、数字、中划线、下划线、点及中文。</p>
     */
    public $ClusterName;

    /**
     * @var string <p>部署大区标识。最大 32 字符。例如 CN 表示中国大陆。</p>
     */
    public $BigArea;

    /**
     * @var string <p>地域标识。最大 32 字符。例如 ap-guangzhou。</p>
     */
    public $RegionId;

    /**
     * @param string $ClusterName <p>集群名称。最大 64 字符，支持字母、数字、中划线、下划线、点及中文。</p>
     * @param string $BigArea <p>部署大区标识。最大 32 字符。例如 CN 表示中国大陆。</p>
     * @param string $RegionId <p>地域标识。最大 32 字符。例如 ap-guangzhou。</p>
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("BigArea",$param) and $param["BigArea"] !== null) {
            $this->BigArea = $param["BigArea"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
