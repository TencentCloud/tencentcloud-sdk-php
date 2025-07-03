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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyDigitFile返回参数结构体
 *
 * @method string getPdfResourceMd5() 获取加签文件MD5哈希值
 * @method void setPdfResourceMd5(string $PdfResourceMd5) 设置加签文件MD5哈希值
 * @method integer getVerifyResult() 获取验签结果代码，代码的含义如下：<ul><li>**1**：文件验证成功。</li><li>**2**：文件验证失败。</li></ul>
 * @method void setVerifyResult(integer $VerifyResult) 设置验签结果代码，代码的含义如下：<ul><li>**1**：文件验证成功。</li><li>**2**：文件验证失败。</li></ul>
 * @method string getVerifySerialNo() 获取验签序列号, 为11为数组组成的字符串
 * @method void setVerifySerialNo(string $VerifySerialNo) 设置验签序列号, 为11为数组组成的字符串
 * @method array getVerifyDigitFileResults() 获取验签结果详情，每个签名域对应的验签结果。
 * @method void setVerifyDigitFileResults(array $VerifyDigitFileResults) 设置验签结果详情，每个签名域对应的验签结果。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyDigitFileResponse extends AbstractModel
{
    /**
     * @var string 加签文件MD5哈希值
     */
    public $PdfResourceMd5;

    /**
     * @var integer 验签结果代码，代码的含义如下：<ul><li>**1**：文件验证成功。</li><li>**2**：文件验证失败。</li></ul>
     */
    public $VerifyResult;

    /**
     * @var string 验签序列号, 为11为数组组成的字符串
     */
    public $VerifySerialNo;

    /**
     * @var array 验签结果详情，每个签名域对应的验签结果。
     */
    public $VerifyDigitFileResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PdfResourceMd5 加签文件MD5哈希值
     * @param integer $VerifyResult 验签结果代码，代码的含义如下：<ul><li>**1**：文件验证成功。</li><li>**2**：文件验证失败。</li></ul>
     * @param string $VerifySerialNo 验签序列号, 为11为数组组成的字符串
     * @param array $VerifyDigitFileResults 验签结果详情，每个签名域对应的验签结果。
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
        if (array_key_exists("PdfResourceMd5",$param) and $param["PdfResourceMd5"] !== null) {
            $this->PdfResourceMd5 = $param["PdfResourceMd5"];
        }

        if (array_key_exists("VerifyResult",$param) and $param["VerifyResult"] !== null) {
            $this->VerifyResult = $param["VerifyResult"];
        }

        if (array_key_exists("VerifySerialNo",$param) and $param["VerifySerialNo"] !== null) {
            $this->VerifySerialNo = $param["VerifySerialNo"];
        }

        if (array_key_exists("VerifyDigitFileResults",$param) and $param["VerifyDigitFileResults"] !== null) {
            $this->VerifyDigitFileResults = [];
            foreach ($param["VerifyDigitFileResults"] as $key => $value){
                $obj = new VerifyDigitFileResult();
                $obj->deserialize($value);
                array_push($this->VerifyDigitFileResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
