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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSSHKeyPairSecret返回参数结构体
 *
 * @method string getSecretName() 获取创建的凭据名称。
 * @method void setSecretName(string $SecretName) 设置创建的凭据名称。
 * @method string getSSHKeyID() 获取创建的SSH密钥ID。
 * @method void setSSHKeyID(string $SSHKeyID) 设置创建的SSH密钥ID。
 * @method string getSSHKeyName() 获取创建的SSH密钥名称。
 * @method void setSSHKeyName(string $SSHKeyName) 设置创建的SSH密钥名称。
 * @method integer getTagCode() 获取标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagCode(integer $TagCode) 设置标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagMsg() 获取标签操作的返回信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagMsg(string $TagMsg) 设置标签操作的返回信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSSHKeyPairSecretResponse extends AbstractModel
{
    /**
     * @var string 创建的凭据名称。
     */
    public $SecretName;

    /**
     * @var string 创建的SSH密钥ID。
     */
    public $SSHKeyID;

    /**
     * @var string 创建的SSH密钥名称。
     */
    public $SSHKeyName;

    /**
     * @var integer 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagCode;

    /**
     * @var string 标签操作的返回信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName 创建的凭据名称。
     * @param string $SSHKeyID 创建的SSH密钥ID。
     * @param string $SSHKeyName 创建的SSH密钥名称。
     * @param integer $TagCode 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagMsg 标签操作的返回信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("SSHKeyID",$param) and $param["SSHKeyID"] !== null) {
            $this->SSHKeyID = $param["SSHKeyID"];
        }

        if (array_key_exists("SSHKeyName",$param) and $param["SSHKeyName"] !== null) {
            $this->SSHKeyName = $param["SSHKeyName"];
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
