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
 * DescribeUndoVulCounts返回参数结构体
 *
 * @method integer getUndoVulCount() 获取未处理的漏洞数
 * @method void setUndoVulCount(integer $UndoVulCount) 设置未处理的漏洞数
 * @method integer getUndoHostCount() 获取未处理的主机数
 * @method void setUndoHostCount(integer $UndoHostCount) 设置未处理的主机数
 * @method integer getNotProfessionCount() 获取普通版主机数
 * @method void setNotProfessionCount(integer $NotProfessionCount) 设置普通版主机数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUndoVulCountsResponse extends AbstractModel
{
    /**
     * @var integer 未处理的漏洞数
     */
    public $UndoVulCount;

    /**
     * @var integer 未处理的主机数
     */
    public $UndoHostCount;

    /**
     * @var integer 普通版主机数
     */
    public $NotProfessionCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UndoVulCount 未处理的漏洞数
     * @param integer $UndoHostCount 未处理的主机数
     * @param integer $NotProfessionCount 普通版主机数
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
        if (array_key_exists("UndoVulCount",$param) and $param["UndoVulCount"] !== null) {
            $this->UndoVulCount = $param["UndoVulCount"];
        }

        if (array_key_exists("UndoHostCount",$param) and $param["UndoHostCount"] !== null) {
            $this->UndoHostCount = $param["UndoHostCount"];
        }

        if (array_key_exists("NotProfessionCount",$param) and $param["NotProfessionCount"] !== null) {
            $this->NotProfessionCount = $param["NotProfessionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
