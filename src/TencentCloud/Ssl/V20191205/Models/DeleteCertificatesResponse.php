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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCertificates返回参数结构体
 *
 * @method array getSuccess() 获取成功的ID
 * @method void setSuccess(array $Success) 设置成功的ID
 * @method array getFail() 获取失败的ID和原因
 * @method void setFail(array $Fail) 设置失败的ID和原因
 * @method array getCertTaskIds() 获取证书ID和异步任务的ID
 * @method void setCertTaskIds(array $CertTaskIds) 设置证书ID和异步任务的ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteCertificatesResponse extends AbstractModel
{
    /**
     * @var array 成功的ID
     */
    public $Success;

    /**
     * @var array 失败的ID和原因
     */
    public $Fail;

    /**
     * @var array 证书ID和异步任务的ID
     */
    public $CertTaskIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Success 成功的ID
     * @param array $Fail 失败的ID和原因
     * @param array $CertTaskIds 证书ID和异步任务的ID
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Fail",$param) and $param["Fail"] !== null) {
            $this->Fail = [];
            foreach ($param["Fail"] as $key => $value){
                $obj = new BatchDeleteFail();
                $obj->deserialize($value);
                array_push($this->Fail, $obj);
            }
        }

        if (array_key_exists("CertTaskIds",$param) and $param["CertTaskIds"] !== null) {
            $this->CertTaskIds = [];
            foreach ($param["CertTaskIds"] as $key => $value){
                $obj = new CertTaskId();
                $obj->deserialize($value);
                array_push($this->CertTaskIds, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
