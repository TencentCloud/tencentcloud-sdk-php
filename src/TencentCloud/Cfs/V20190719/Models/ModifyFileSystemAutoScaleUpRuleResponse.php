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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFileSystemAutoScaleUpRule返回参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method integer getStatus() 获取规则状态 0：关闭，1：开启
 * @method void setStatus(integer $Status) 设置规则状态 0：关闭，1：开启
 * @method integer getScaleUpThreshold() 获取扩容阈值，范围[10-90]
 * @method void setScaleUpThreshold(integer $ScaleUpThreshold) 设置扩容阈值，范围[10-90]
 * @method integer getTargetThreshold() 获取扩容后达到阈值，范围[10-90]
 * @method void setTargetThreshold(integer $TargetThreshold) 设置扩容后达到阈值，范围[10-90]
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyFileSystemAutoScaleUpRuleResponse extends AbstractModel
{
    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var integer 规则状态 0：关闭，1：开启
     */
    public $Status;

    /**
     * @var integer 扩容阈值，范围[10-90]
     */
    public $ScaleUpThreshold;

    /**
     * @var integer 扩容后达到阈值，范围[10-90]
     */
    public $TargetThreshold;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FileSystemId 文件系统 ID
     * @param integer $Status 规则状态 0：关闭，1：开启
     * @param integer $ScaleUpThreshold 扩容阈值，范围[10-90]
     * @param integer $TargetThreshold 扩容后达到阈值，范围[10-90]
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScaleUpThreshold",$param) and $param["ScaleUpThreshold"] !== null) {
            $this->ScaleUpThreshold = $param["ScaleUpThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
