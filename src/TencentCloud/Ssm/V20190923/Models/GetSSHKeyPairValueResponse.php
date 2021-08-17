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
 * GetSSHKeyPairValue返回参数结构体
 *
 * @method string getSSHKeyID() 获取SSH密钥对ID。
 * @method void setSSHKeyID(string $SSHKeyID) 设置SSH密钥对ID。
 * @method string getPublicKey() 获取公钥明文，使用base64编码。
 * @method void setPublicKey(string $PublicKey) 设置公钥明文，使用base64编码。
 * @method string getPrivateKey() 获取私钥明文，使用base64编码
 * @method void setPrivateKey(string $PrivateKey) 设置私钥明文，使用base64编码
 * @method integer getProjectID() 获取此密钥对所属的项目ID。
 * @method void setProjectID(integer $ProjectID) 设置此密钥对所属的项目ID。
 * @method string getSSHKeyDescription() 获取SSH密钥对的描述信息。
用户可以在CVM侧控制台对密钥对的描述信息进行修改。
 * @method void setSSHKeyDescription(string $SSHKeyDescription) 设置SSH密钥对的描述信息。
用户可以在CVM侧控制台对密钥对的描述信息进行修改。
 * @method string getSSHKeyName() 获取SSH密钥对的名称。
用户可以在CVM侧控制台对密钥对的名称进行修改。
 * @method void setSSHKeyName(string $SSHKeyName) 设置SSH密钥对的名称。
用户可以在CVM侧控制台对密钥对的名称进行修改。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetSSHKeyPairValueResponse extends AbstractModel
{
    /**
     * @var string SSH密钥对ID。
     */
    public $SSHKeyID;

    /**
     * @var string 公钥明文，使用base64编码。
     */
    public $PublicKey;

    /**
     * @var string 私钥明文，使用base64编码
     */
    public $PrivateKey;

    /**
     * @var integer 此密钥对所属的项目ID。
     */
    public $ProjectID;

    /**
     * @var string SSH密钥对的描述信息。
用户可以在CVM侧控制台对密钥对的描述信息进行修改。
     */
    public $SSHKeyDescription;

    /**
     * @var string SSH密钥对的名称。
用户可以在CVM侧控制台对密钥对的名称进行修改。
     */
    public $SSHKeyName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SSHKeyID SSH密钥对ID。
     * @param string $PublicKey 公钥明文，使用base64编码。
     * @param string $PrivateKey 私钥明文，使用base64编码
     * @param integer $ProjectID 此密钥对所属的项目ID。
     * @param string $SSHKeyDescription SSH密钥对的描述信息。
用户可以在CVM侧控制台对密钥对的描述信息进行修改。
     * @param string $SSHKeyName SSH密钥对的名称。
用户可以在CVM侧控制台对密钥对的名称进行修改。
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
        if (array_key_exists("SSHKeyID",$param) and $param["SSHKeyID"] !== null) {
            $this->SSHKeyID = $param["SSHKeyID"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("SSHKeyDescription",$param) and $param["SSHKeyDescription"] !== null) {
            $this->SSHKeyDescription = $param["SSHKeyDescription"];
        }

        if (array_key_exists("SSHKeyName",$param) and $param["SSHKeyName"] !== null) {
            $this->SSHKeyName = $param["SSHKeyName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
