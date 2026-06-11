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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIaCFileOverview返回参数结构体
 *
 * @method integer getTotalFile() 获取<p>文件数量</p>
 * @method void setTotalFile(integer $TotalFile) 设置<p>文件数量</p>
 * @method array getRiskFile() 获取<p>风险文件数量(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
 * @method void setRiskFile(array $RiskFile) 设置<p>风险文件数量(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIaCFileOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>文件数量</p>
     */
    public $TotalFile;

    /**
     * @var array <p>风险文件数量(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
     */
    public $RiskFile;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalFile <p>文件数量</p>
     * @param array $RiskFile <p>风险文件数量(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
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
        if (array_key_exists("TotalFile",$param) and $param["TotalFile"] !== null) {
            $this->TotalFile = $param["TotalFile"];
        }

        if (array_key_exists("RiskFile",$param) and $param["RiskFile"] !== null) {
            $this->RiskFile = [];
            foreach ($param["RiskFile"] as $key => $value){
                $obj = new KeyValueInt();
                $obj->deserialize($value);
                array_push($this->RiskFile, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
