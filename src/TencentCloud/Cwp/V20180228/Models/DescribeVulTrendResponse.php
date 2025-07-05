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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulTrend返回参数结构体
 *
 * @method integer getVulEventCount() 获取近半年漏洞利用攻击事件数量
 * @method void setVulEventCount(integer $VulEventCount) 设置近半年漏洞利用攻击事件数量
 * @method integer getIncreaseVulEventCount() 获取近半年新增漏洞利用攻击事件数量
 * @method void setIncreaseVulEventCount(integer $IncreaseVulEventCount) 设置近半年新增漏洞利用攻击事件数量
 * @method integer getHotVulCount() 获取近半年热点攻击漏洞
 * @method void setHotVulCount(integer $HotVulCount) 设置近半年热点攻击漏洞
 * @method integer getIncreaseHotVulCount() 获取近半年新增热点攻击漏洞
 * @method void setIncreaseHotVulCount(integer $IncreaseHotVulCount) 设置近半年新增热点攻击漏洞
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulTrendResponse extends AbstractModel
{
    /**
     * @var integer 近半年漏洞利用攻击事件数量
     */
    public $VulEventCount;

    /**
     * @var integer 近半年新增漏洞利用攻击事件数量
     */
    public $IncreaseVulEventCount;

    /**
     * @var integer 近半年热点攻击漏洞
     */
    public $HotVulCount;

    /**
     * @var integer 近半年新增热点攻击漏洞
     */
    public $IncreaseHotVulCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulEventCount 近半年漏洞利用攻击事件数量
     * @param integer $IncreaseVulEventCount 近半年新增漏洞利用攻击事件数量
     * @param integer $HotVulCount 近半年热点攻击漏洞
     * @param integer $IncreaseHotVulCount 近半年新增热点攻击漏洞
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
        if (array_key_exists("VulEventCount",$param) and $param["VulEventCount"] !== null) {
            $this->VulEventCount = $param["VulEventCount"];
        }

        if (array_key_exists("IncreaseVulEventCount",$param) and $param["IncreaseVulEventCount"] !== null) {
            $this->IncreaseVulEventCount = $param["IncreaseVulEventCount"];
        }

        if (array_key_exists("HotVulCount",$param) and $param["HotVulCount"] !== null) {
            $this->HotVulCount = $param["HotVulCount"];
        }

        if (array_key_exists("IncreaseHotVulCount",$param) and $param["IncreaseHotVulCount"] !== null) {
            $this->IncreaseHotVulCount = $param["IncreaseHotVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
