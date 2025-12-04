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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportDataKey返回参数结构体
 *
 * @method string getKeyId() 获取CMK的全局唯一标识
 * @method void setKeyId(string $KeyId) 设置CMK的全局唯一标识
 * @method string getDataKeyId() 获取DataKey的全局唯一标识  否  官网/国内&国际站展示
 * @method void setDataKeyId(string $DataKeyId) 设置DataKey的全局唯一标识  否  官网/国内&国际站展示
 * @method integer getTagCode() 获取标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
 * @method void setTagCode(integer $TagCode) 设置标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
 * @method string getTagMsg() 获取标签操作的返回信息
 * @method void setTagMsg(string $TagMsg) 设置标签操作的返回信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ImportDataKeyResponse extends AbstractModel
{
    /**
     * @var string CMK的全局唯一标识
     */
    public $KeyId;

    /**
     * @var string DataKey的全局唯一标识  否  官网/国内&国际站展示
     */
    public $DataKeyId;

    /**
     * @var integer 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
     */
    public $TagCode;

    /**
     * @var string 标签操作的返回信息
     */
    public $TagMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId CMK的全局唯一标识
     * @param string $DataKeyId DataKey的全局唯一标识  否  官网/国内&国际站展示
     * @param integer $TagCode 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
     * @param string $TagMsg 标签操作的返回信息
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
