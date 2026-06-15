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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSpaceStatus返回参数结构体
 *
 * @method integer getGrowth() 获取<p>磁盘增长量(MB)。</p>
 * @method void setGrowth(integer $Growth) 设置<p>磁盘增长量(MB)。</p>
 * @method integer getRemain() 获取<p>磁盘剩余(MB)。</p>
 * @method void setRemain(integer $Remain) 设置<p>磁盘剩余(MB)。</p>
 * @method integer getTotal() 获取<p>磁盘总量(MB)。</p>
 * @method void setTotal(integer $Total) 设置<p>磁盘总量(MB)。</p>
 * @method integer getAvailableDays() 获取<p>预计可用天数。</p>
 * @method void setAvailableDays(integer $AvailableDays) 设置<p>预计可用天数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSpaceStatusResponse extends AbstractModel
{
    /**
     * @var integer <p>磁盘增长量(MB)。</p>
     */
    public $Growth;

    /**
     * @var integer <p>磁盘剩余(MB)。</p>
     */
    public $Remain;

    /**
     * @var integer <p>磁盘总量(MB)。</p>
     */
    public $Total;

    /**
     * @var integer <p>预计可用天数。</p>
     */
    public $AvailableDays;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Growth <p>磁盘增长量(MB)。</p>
     * @param integer $Remain <p>磁盘剩余(MB)。</p>
     * @param integer $Total <p>磁盘总量(MB)。</p>
     * @param integer $AvailableDays <p>预计可用天数。</p>
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
        if (array_key_exists("Growth",$param) and $param["Growth"] !== null) {
            $this->Growth = $param["Growth"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AvailableDays",$param) and $param["AvailableDays"] !== null) {
            $this->AvailableDays = $param["AvailableDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
