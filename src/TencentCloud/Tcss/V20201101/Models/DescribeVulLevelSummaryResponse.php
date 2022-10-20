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
 * DescribeVulLevelSummary返回参数结构体
 *
 * @method integer getHighLevelVulCount() 获取高危漏洞数
 * @method void setHighLevelVulCount(integer $HighLevelVulCount) 设置高危漏洞数
 * @method integer getMediumLevelVulCount() 获取中危漏洞数
 * @method void setMediumLevelVulCount(integer $MediumLevelVulCount) 设置中危漏洞数
 * @method integer getLowLevelVulCount() 获取低危漏洞数
 * @method void setLowLevelVulCount(integer $LowLevelVulCount) 设置低危漏洞数
 * @method integer getCriticalLevelVulCount() 获取严重漏洞数
 * @method void setCriticalLevelVulCount(integer $CriticalLevelVulCount) 设置严重漏洞数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulLevelSummaryResponse extends AbstractModel
{
    /**
     * @var integer 高危漏洞数
     */
    public $HighLevelVulCount;

    /**
     * @var integer 中危漏洞数
     */
    public $MediumLevelVulCount;

    /**
     * @var integer 低危漏洞数
     */
    public $LowLevelVulCount;

    /**
     * @var integer 严重漏洞数
     */
    public $CriticalLevelVulCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HighLevelVulCount 高危漏洞数
     * @param integer $MediumLevelVulCount 中危漏洞数
     * @param integer $LowLevelVulCount 低危漏洞数
     * @param integer $CriticalLevelVulCount 严重漏洞数
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
        if (array_key_exists("HighLevelVulCount",$param) and $param["HighLevelVulCount"] !== null) {
            $this->HighLevelVulCount = $param["HighLevelVulCount"];
        }

        if (array_key_exists("MediumLevelVulCount",$param) and $param["MediumLevelVulCount"] !== null) {
            $this->MediumLevelVulCount = $param["MediumLevelVulCount"];
        }

        if (array_key_exists("LowLevelVulCount",$param) and $param["LowLevelVulCount"] !== null) {
            $this->LowLevelVulCount = $param["LowLevelVulCount"];
        }

        if (array_key_exists("CriticalLevelVulCount",$param) and $param["CriticalLevelVulCount"] !== null) {
            $this->CriticalLevelVulCount = $param["CriticalLevelVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
