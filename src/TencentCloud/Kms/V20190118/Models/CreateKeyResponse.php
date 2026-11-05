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
 * CreateKey返回参数结构体
 *
 * @method string getKeyId() 获取<p>CMK的全局唯一标识符</p>
 * @method void setKeyId(string $KeyId) 设置<p>CMK的全局唯一标识符</p>
 * @method string getAlias() 获取<p>作为密钥更容易辨识，更容易被人看懂的别名</p>
 * @method void setAlias(string $Alias) 设置<p>作为密钥更容易辨识，更容易被人看懂的别名</p>
 * @method integer getCreateTime() 获取<p>密钥创建时间，unix时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>密钥创建时间，unix时间戳</p>
 * @method string getDescription() 获取<p>CMK的描述</p>
 * @method void setDescription(string $Description) 设置<p>CMK的描述</p>
 * @method string getKeyState() 获取<p>CMK的状态</p>
 * @method void setKeyState(string $KeyState) 设置<p>CMK的状态</p>
 * @method string getKeyUsage() 获取<p>CMK的用途</p>
 * @method void setKeyUsage(string $KeyUsage) 设置<p>CMK的用途</p>
 * @method integer getTagCode() 获取<p>标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误</p>
 * @method void setTagCode(integer $TagCode) 设置<p>标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误</p>
 * @method string getTagMsg() 获取<p>标签操作的返回信息</p>
 * @method void setTagMsg(string $TagMsg) 设置<p>标签操作的返回信息</p>
 * @method string getHsmClusterId() 获取<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateKeyResponse extends AbstractModel
{
    /**
     * @var string <p>CMK的全局唯一标识符</p>
     */
    public $KeyId;

    /**
     * @var string <p>作为密钥更容易辨识，更容易被人看懂的别名</p>
     */
    public $Alias;

    /**
     * @var integer <p>密钥创建时间，unix时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>CMK的描述</p>
     */
    public $Description;

    /**
     * @var string <p>CMK的状态</p>
     */
    public $KeyState;

    /**
     * @var string <p>CMK的用途</p>
     */
    public $KeyUsage;

    /**
     * @var integer <p>标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误</p>
     */
    public $TagCode;

    /**
     * @var string <p>标签操作的返回信息</p>
     */
    public $TagMsg;

    /**
     * @var string <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
     */
    public $HsmClusterId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId <p>CMK的全局唯一标识符</p>
     * @param string $Alias <p>作为密钥更容易辨识，更容易被人看懂的别名</p>
     * @param integer $CreateTime <p>密钥创建时间，unix时间戳</p>
     * @param string $Description <p>CMK的描述</p>
     * @param string $KeyState <p>CMK的状态</p>
     * @param string $KeyUsage <p>CMK的用途</p>
     * @param integer $TagCode <p>标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误</p>
     * @param string $TagMsg <p>标签操作的返回信息</p>
     * @param string $HsmClusterId <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
