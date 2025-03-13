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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteBoardSnapshot返回参数结构体
 *
 * @method integer getWhiteBoardSnapshotMode() 获取板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
 * @method integer getStatus() 获取板书任务状态，0：未开始，1：进行中，2：失败，3：成功，4：已删除
 * @method void setStatus(integer $Status) 设置板书任务状态，0：未开始，1：进行中，2：失败，3：成功，4：已删除
 * @method array getResult() 获取板书截图链接
 * @method void setResult(array $Result) 设置板书截图链接
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWhiteBoardSnapshotResponse extends AbstractModel
{
    /**
     * @var integer 板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer 板书任务状态，0：未开始，1：进行中，2：失败，3：成功，4：已删除
     */
    public $Status;

    /**
     * @var array 板书截图链接
     */
    public $Result;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $WhiteBoardSnapshotMode 板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
     * @param integer $Status 板书任务状态，0：未开始，1：进行中，2：失败，3：成功，4：已删除
     * @param array $Result 板书截图链接
     * @param integer $Total 总数
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
        if (array_key_exists("WhiteBoardSnapshotMode",$param) and $param["WhiteBoardSnapshotMode"] !== null) {
            $this->WhiteBoardSnapshotMode = $param["WhiteBoardSnapshotMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
