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
 * DescribeProVersionInfo返回参数结构体
 *
 * @method integer getPostPayCost() 获取昨日【专业版-按量付费】扣费明细,(实际已账单为准)
 * @method void setPostPayCost(integer $PostPayCost) 设置昨日【专业版-按量付费】扣费明细,(实际已账单为准)
 * @method boolean getIsAutoOpenProVersion() 获取新增主机是否自动开通专业版
 * @method void setIsAutoOpenProVersion(boolean $IsAutoOpenProVersion) 设置新增主机是否自动开通专业版
 * @method integer getProVersionNum() 获取专业版主机数
 * @method void setProVersionNum(integer $ProVersionNum) 设置专业版主机数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProVersionInfoResponse extends AbstractModel
{
    /**
     * @var integer 昨日【专业版-按量付费】扣费明细,(实际已账单为准)
     */
    public $PostPayCost;

    /**
     * @var boolean 新增主机是否自动开通专业版
     */
    public $IsAutoOpenProVersion;

    /**
     * @var integer 专业版主机数
     */
    public $ProVersionNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PostPayCost 昨日【专业版-按量付费】扣费明细,(实际已账单为准)
     * @param boolean $IsAutoOpenProVersion 新增主机是否自动开通专业版
     * @param integer $ProVersionNum 专业版主机数
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
        if (array_key_exists("PostPayCost",$param) and $param["PostPayCost"] !== null) {
            $this->PostPayCost = $param["PostPayCost"];
        }

        if (array_key_exists("IsAutoOpenProVersion",$param) and $param["IsAutoOpenProVersion"] !== null) {
            $this->IsAutoOpenProVersion = $param["IsAutoOpenProVersion"];
        }

        if (array_key_exists("ProVersionNum",$param) and $param["ProVersionNum"] !== null) {
            $this->ProVersionNum = $param["ProVersionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
