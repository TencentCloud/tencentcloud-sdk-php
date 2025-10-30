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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetAndroidInstancesBGAppKeepAlive返回参数结构体
 *
 * @method array getAndroidInstanceErrors() 获取错误列表。如果实例操作都成功，则响应没有这个字段；如果有实例操作失败，该字段包含了实例操作的错误信息
 * @method void setAndroidInstanceErrors(array $AndroidInstanceErrors) 设置错误列表。如果实例操作都成功，则响应没有这个字段；如果有实例操作失败，该字段包含了实例操作的错误信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SetAndroidInstancesBGAppKeepAliveResponse extends AbstractModel
{
    /**
     * @var array 错误列表。如果实例操作都成功，则响应没有这个字段；如果有实例操作失败，该字段包含了实例操作的错误信息
     */
    public $AndroidInstanceErrors;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AndroidInstanceErrors 错误列表。如果实例操作都成功，则响应没有这个字段；如果有实例操作失败，该字段包含了实例操作的错误信息
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
        if (array_key_exists("AndroidInstanceErrors",$param) and $param["AndroidInstanceErrors"] !== null) {
            $this->AndroidInstanceErrors = [];
            foreach ($param["AndroidInstanceErrors"] as $key => $value){
                $obj = new AndroidInstanceError();
                $obj->deserialize($value);
                array_push($this->AndroidInstanceErrors, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
