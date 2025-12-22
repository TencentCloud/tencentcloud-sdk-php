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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudRunVersions返回参数结构体
 *
 * @method string getResult() 获取succ | fail | partial
 * @method void setResult(string $Result) 设置succ | fail | partial
 * @method array getFailVersions() 获取删除失败的版本列表
 * @method void setFailVersions(array $FailVersions) 设置删除失败的版本列表
 * @method array getSuccessVersions() 获取删除成功的版本列表
 * @method void setSuccessVersions(array $SuccessVersions) 设置删除成功的版本列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteCloudRunVersionsResponse extends AbstractModel
{
    /**
     * @var string succ | fail | partial
     */
    public $Result;

    /**
     * @var array 删除失败的版本列表
     */
    public $FailVersions;

    /**
     * @var array 删除成功的版本列表
     */
    public $SuccessVersions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result succ | fail | partial
     * @param array $FailVersions 删除失败的版本列表
     * @param array $SuccessVersions 删除成功的版本列表
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("FailVersions",$param) and $param["FailVersions"] !== null) {
            $this->FailVersions = [];
            foreach ($param["FailVersions"] as $key => $value){
                $obj = new FailDeleteVersions();
                $obj->deserialize($value);
                array_push($this->FailVersions, $obj);
            }
        }

        if (array_key_exists("SuccessVersions",$param) and $param["SuccessVersions"] !== null) {
            $this->SuccessVersions = [];
            foreach ($param["SuccessVersions"] as $key => $value){
                $obj = new SuccessDeleteVersions();
                $obj->deserialize($value);
                array_push($this->SuccessVersions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
