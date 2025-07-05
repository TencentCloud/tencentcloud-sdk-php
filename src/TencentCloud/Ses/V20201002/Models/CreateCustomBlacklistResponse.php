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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomBlacklist返回参数结构体
 *
 * @method integer getTotalCount() 获取收件人总数
 * @method void setTotalCount(integer $TotalCount) 设置收件人总数
 * @method integer getValidCount() 获取实际上传数量
 * @method void setValidCount(integer $ValidCount) 设置实际上传数量
 * @method integer getTooLongCount() 获取数据过长数量
 * @method void setTooLongCount(integer $TooLongCount) 设置数据过长数量
 * @method integer getRepeatCount() 获取重复数量
 * @method void setRepeatCount(integer $RepeatCount) 设置重复数量
 * @method integer getInvalidCount() 获取格式不正确数量
 * @method void setInvalidCount(integer $InvalidCount) 设置格式不正确数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCustomBlacklistResponse extends AbstractModel
{
    /**
     * @var integer 收件人总数
     */
    public $TotalCount;

    /**
     * @var integer 实际上传数量
     */
    public $ValidCount;

    /**
     * @var integer 数据过长数量
     */
    public $TooLongCount;

    /**
     * @var integer 重复数量
     */
    public $RepeatCount;

    /**
     * @var integer 格式不正确数量
     */
    public $InvalidCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 收件人总数
     * @param integer $ValidCount 实际上传数量
     * @param integer $TooLongCount 数据过长数量
     * @param integer $RepeatCount 重复数量
     * @param integer $InvalidCount 格式不正确数量
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ValidCount",$param) and $param["ValidCount"] !== null) {
            $this->ValidCount = $param["ValidCount"];
        }

        if (array_key_exists("TooLongCount",$param) and $param["TooLongCount"] !== null) {
            $this->TooLongCount = $param["TooLongCount"];
        }

        if (array_key_exists("RepeatCount",$param) and $param["RepeatCount"] !== null) {
            $this->RepeatCount = $param["RepeatCount"];
        }

        if (array_key_exists("InvalidCount",$param) and $param["InvalidCount"] !== null) {
            $this->InvalidCount = $param["InvalidCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
