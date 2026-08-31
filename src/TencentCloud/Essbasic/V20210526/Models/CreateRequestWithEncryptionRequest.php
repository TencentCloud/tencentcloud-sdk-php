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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRequestWithEncryption请求参数结构体
 *
 * @method string getRequestAction() 获取<p>操作的接口名称。取值参考接口文档输入参数章节关于公共参数 Action 的说明。</p>
 * @method void setRequestAction(string $RequestAction) 设置<p>操作的接口名称。取值参考接口文档输入参数章节关于公共参数 Action 的说明。</p>
 * @method string getApplicationId() 获取<p>第三方应用的唯一标识，对应通用参数 Agent.AppId。</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>第三方应用的唯一标识，对应通用参数 Agent.AppId。</p>
 * @method string getIV() 获取<p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
 * @method void setIV(string $IV) 设置<p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
 * @method string getEncryptedData() 获取<p>使用 AES-CBC 或 SM4-CBC 加密请求内容得到的密文。加密前请求内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
 * @method void setEncryptedData(string $EncryptedData) 设置<p>使用 AES-CBC 或 SM4-CBC 加密请求内容得到的密文。加密前请求内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
 * @method string getEncryptionSignature() 获取<p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
 * @method void setEncryptionSignature(string $EncryptionSignature) 设置<p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
 */
class CreateRequestWithEncryptionRequest extends AbstractModel
{
    /**
     * @var string <p>操作的接口名称。取值参考接口文档输入参数章节关于公共参数 Action 的说明。</p>
     */
    public $RequestAction;

    /**
     * @var string <p>第三方应用的唯一标识，对应通用参数 Agent.AppId。</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
     */
    public $IV;

    /**
     * @var string <p>使用 AES-CBC 或 SM4-CBC 加密请求内容得到的密文。加密前请求内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
     */
    public $EncryptedData;

    /**
     * @var string <p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
     */
    public $EncryptionSignature;

    /**
     * @param string $RequestAction <p>操作的接口名称。取值参考接口文档输入参数章节关于公共参数 Action 的说明。</p>
     * @param string $ApplicationId <p>第三方应用的唯一标识，对应通用参数 Agent.AppId。</p>
     * @param string $IV <p>加密算法使用的初始化向量。固定为 16 字节，将 IV 原始字节使用标准 Base64 编码后传入。</p>
     * @param string $EncryptedData <p>使用 AES-CBC 或 SM4-CBC 加密请求内容得到的密文。加密前请求内容采用 PKCS#7 Padding；将密文原始字节使用标准 Base64 编码后传入。</p>
     * @param string $EncryptionSignature <p>用于校验请求数据完整性。对 IV 原始字节和密文原始字节直接拼接（不加拼接符）后计算 HMAC-SHA256，再将计算结果使用标准 Base64 编码后传入。</p>
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
        if (array_key_exists("RequestAction",$param) and $param["RequestAction"] !== null) {
            $this->RequestAction = $param["RequestAction"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("IV",$param) and $param["IV"] !== null) {
            $this->IV = $param["IV"];
        }

        if (array_key_exists("EncryptedData",$param) and $param["EncryptedData"] !== null) {
            $this->EncryptedData = $param["EncryptedData"];
        }

        if (array_key_exists("EncryptionSignature",$param) and $param["EncryptionSignature"] !== null) {
            $this->EncryptionSignature = $param["EncryptionSignature"];
        }
    }
}
