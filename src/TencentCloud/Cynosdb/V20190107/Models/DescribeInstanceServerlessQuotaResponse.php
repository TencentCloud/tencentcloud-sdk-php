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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceServerlessQuota返回参数结构体
 *
 * @method array getQuotaConfigs() 获取<p>集群实例Serveless弹性配置</p>
 * @method void setQuotaConfigs(array $QuotaConfigs) 设置<p>集群实例Serveless弹性配置</p>
 * @method array getInstanceQuotas() 获取<p>集群实例Serverless弹性状态</p>
 * @method void setInstanceQuotas(array $InstanceQuotas) 设置<p>集群实例Serverless弹性状态</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceServerlessQuotaResponse extends AbstractModel
{
    /**
     * @var array <p>集群实例Serveless弹性配置</p>
     */
    public $QuotaConfigs;

    /**
     * @var array <p>集群实例Serverless弹性状态</p>
     */
    public $InstanceQuotas;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $QuotaConfigs <p>集群实例Serveless弹性配置</p>
     * @param array $InstanceQuotas <p>集群实例Serverless弹性状态</p>
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
        if (array_key_exists("QuotaConfigs",$param) and $param["QuotaConfigs"] !== null) {
            $this->QuotaConfigs = [];
            foreach ($param["QuotaConfigs"] as $key => $value){
                $obj = new ClusterServerlessQuotaConfig();
                $obj->deserialize($value);
                array_push($this->QuotaConfigs, $obj);
            }
        }

        if (array_key_exists("InstanceQuotas",$param) and $param["InstanceQuotas"] !== null) {
            $this->InstanceQuotas = [];
            foreach ($param["InstanceQuotas"] as $key => $value){
                $obj = new InstanceServerlessQuotaInfo();
                $obj->deserialize($value);
                array_push($this->InstanceQuotas, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
