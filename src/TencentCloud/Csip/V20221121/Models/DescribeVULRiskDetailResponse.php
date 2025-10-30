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
 * DescribeVULRiskDetail返回参数结构体
 *
 * @method array getServiceSupport() 获取安全产品支持情况
 * @method void setServiceSupport(array $ServiceSupport) 设置安全产品支持情况
 * @method array getVulTrend() 获取漏洞趋势
 * @method void setVulTrend(array $VulTrend) 设置漏洞趋势
 * @method VULRiskInfo getVulData() 获取漏洞补充信息
 * @method void setVulData(VULRiskInfo $VulData) 设置漏洞补充信息
 * @method string getQuestionId() 获取小助手问答id
 * @method void setQuestionId(string $QuestionId) 设置小助手问答id
 * @method string getSessionId() 获取会话id
 * @method void setSessionId(string $SessionId) 设置会话id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVULRiskDetailResponse extends AbstractModel
{
    /**
     * @var array 安全产品支持情况
     */
    public $ServiceSupport;

    /**
     * @var array 漏洞趋势
     */
    public $VulTrend;

    /**
     * @var VULRiskInfo 漏洞补充信息
     */
    public $VulData;

    /**
     * @var string 小助手问答id
     */
    public $QuestionId;

    /**
     * @var string 会话id
     */
    public $SessionId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ServiceSupport 安全产品支持情况
     * @param array $VulTrend 漏洞趋势
     * @param VULRiskInfo $VulData 漏洞补充信息
     * @param string $QuestionId 小助手问答id
     * @param string $SessionId 会话id
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
        if (array_key_exists("ServiceSupport",$param) and $param["ServiceSupport"] !== null) {
            $this->ServiceSupport = [];
            foreach ($param["ServiceSupport"] as $key => $value){
                $obj = new ServiceSupport();
                $obj->deserialize($value);
                array_push($this->ServiceSupport, $obj);
            }
        }

        if (array_key_exists("VulTrend",$param) and $param["VulTrend"] !== null) {
            $this->VulTrend = [];
            foreach ($param["VulTrend"] as $key => $value){
                $obj = new VulTrend();
                $obj->deserialize($value);
                array_push($this->VulTrend, $obj);
            }
        }

        if (array_key_exists("VulData",$param) and $param["VulData"] !== null) {
            $this->VulData = new VULRiskInfo();
            $this->VulData->deserialize($param["VulData"]);
        }

        if (array_key_exists("QuestionId",$param) and $param["QuestionId"] !== null) {
            $this->QuestionId = $param["QuestionId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
