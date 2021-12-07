<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageRiskSummary返回参数结构体
 *
 * @method array getVulnerabilityCnt() 获取安全漏洞
 * @method void setVulnerabilityCnt(array $VulnerabilityCnt) 设置安全漏洞
 * @method array getMalwareVirusCnt() 获取木马病毒
 * @method void setMalwareVirusCnt(array $MalwareVirusCnt) 设置木马病毒
 * @method array getRiskCnt() 获取敏感信息
 * @method void setRiskCnt(array $RiskCnt) 设置敏感信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageRiskSummaryResponse extends AbstractModel
{
    /**
     * @var array 安全漏洞
     */
    public $VulnerabilityCnt;

    /**
     * @var array 木马病毒
     */
    public $MalwareVirusCnt;

    /**
     * @var array 敏感信息
     */
    public $RiskCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VulnerabilityCnt 安全漏洞
     * @param array $MalwareVirusCnt 木马病毒
     * @param array $RiskCnt 敏感信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VulnerabilityCnt",$param) and $param["VulnerabilityCnt"] !== null) {
            $this->VulnerabilityCnt = [];
            foreach ($param["VulnerabilityCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->VulnerabilityCnt, $obj);
            }
        }

        if (array_key_exists("MalwareVirusCnt",$param) and $param["MalwareVirusCnt"] !== null) {
            $this->MalwareVirusCnt = [];
            foreach ($param["MalwareVirusCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->MalwareVirusCnt, $obj);
            }
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = [];
            foreach ($param["RiskCnt"] as $key => $value){
                $obj = new RunTimeRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskCnt, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
