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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteOnCallForms返回参数结构体
 *
 * @method array getFailedOnCallFormIDs() 获取失败删除的排班id
 * @method void setFailedOnCallFormIDs(array $FailedOnCallFormIDs) 设置失败删除的排班id
 * @method array getSuccessOnCallFormIDs() 获取成功删除的排班id
 * @method void setSuccessOnCallFormIDs(array $SuccessOnCallFormIDs) 设置成功删除的排班id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteOnCallFormsResponse extends AbstractModel
{
    /**
     * @var array 失败删除的排班id
     */
    public $FailedOnCallFormIDs;

    /**
     * @var array 成功删除的排班id
     */
    public $SuccessOnCallFormIDs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FailedOnCallFormIDs 失败删除的排班id
     * @param array $SuccessOnCallFormIDs 成功删除的排班id
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
        if (array_key_exists("FailedOnCallFormIDs",$param) and $param["FailedOnCallFormIDs"] !== null) {
            $this->FailedOnCallFormIDs = $param["FailedOnCallFormIDs"];
        }

        if (array_key_exists("SuccessOnCallFormIDs",$param) and $param["SuccessOnCallFormIDs"] !== null) {
            $this->SuccessOnCallFormIDs = $param["SuccessOnCallFormIDs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
