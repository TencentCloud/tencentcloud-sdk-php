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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOPRAllVulCount返回参数结构体
 *
 * @method array getVulnerabilityList() 获取包含漏洞指标以及业务系统个数	
 * @method void setVulnerabilityList(array $VulnerabilityList) 设置包含漏洞指标以及业务系统个数	
 * @method integer getVulnerabilityCount() 获取总漏洞个数
 * @method void setVulnerabilityCount(integer $VulnerabilityCount) 设置总漏洞个数
 * @method integer getImportantVulnerabilityCount() 获取严重漏洞个数
 * @method void setImportantVulnerabilityCount(integer $ImportantVulnerabilityCount) 设置严重漏洞个数
 * @method integer getCriticalVulnerabilityCount() 获取高危漏洞个数
 * @method void setCriticalVulnerabilityCount(integer $CriticalVulnerabilityCount) 设置高危漏洞个数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOPRAllVulCountResponse extends AbstractModel
{
    /**
     * @var array 包含漏洞指标以及业务系统个数	
     */
    public $VulnerabilityList;

    /**
     * @var integer 总漏洞个数
     */
    public $VulnerabilityCount;

    /**
     * @var integer 严重漏洞个数
     */
    public $ImportantVulnerabilityCount;

    /**
     * @var integer 高危漏洞个数
     */
    public $CriticalVulnerabilityCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VulnerabilityList 包含漏洞指标以及业务系统个数	
     * @param integer $VulnerabilityCount 总漏洞个数
     * @param integer $ImportantVulnerabilityCount 严重漏洞个数
     * @param integer $CriticalVulnerabilityCount 高危漏洞个数
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
        if (array_key_exists("VulnerabilityList",$param) and $param["VulnerabilityList"] !== null) {
            $this->VulnerabilityList = [];
            foreach ($param["VulnerabilityList"] as $key => $value){
                $obj = new ApmMetricRecord();
                $obj->deserialize($value);
                array_push($this->VulnerabilityList, $obj);
            }
        }

        if (array_key_exists("VulnerabilityCount",$param) and $param["VulnerabilityCount"] !== null) {
            $this->VulnerabilityCount = $param["VulnerabilityCount"];
        }

        if (array_key_exists("ImportantVulnerabilityCount",$param) and $param["ImportantVulnerabilityCount"] !== null) {
            $this->ImportantVulnerabilityCount = $param["ImportantVulnerabilityCount"];
        }

        if (array_key_exists("CriticalVulnerabilityCount",$param) and $param["CriticalVulnerabilityCount"] !== null) {
            $this->CriticalVulnerabilityCount = $param["CriticalVulnerabilityCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
