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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterPasswordComplexity返回参数结构体
 *
 * @method ParamInfo getValidatePasswordDictionary() 获取数据字典参数
 * @method void setValidatePasswordDictionary(ParamInfo $ValidatePasswordDictionary) 设置数据字典参数
 * @method ParamInfo getValidatePasswordLength() 获取密码长度
 * @method void setValidatePasswordLength(ParamInfo $ValidatePasswordLength) 设置密码长度
 * @method ParamInfo getValidatePasswordMixedCaseCount() 获取大小写敏感字符个数
 * @method void setValidatePasswordMixedCaseCount(ParamInfo $ValidatePasswordMixedCaseCount) 设置大小写敏感字符个数
 * @method ParamInfo getValidatePasswordNumberCount() 获取数字个数
 * @method void setValidatePasswordNumberCount(ParamInfo $ValidatePasswordNumberCount) 设置数字个数
 * @method ParamInfo getValidatePasswordPolicy() 获取密码等级
 * @method void setValidatePasswordPolicy(ParamInfo $ValidatePasswordPolicy) 设置密码等级
 * @method ParamInfo getValidatePasswordSpecialCharCount() 获取特殊字符个数
 * @method void setValidatePasswordSpecialCharCount(ParamInfo $ValidatePasswordSpecialCharCount) 设置特殊字符个数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterPasswordComplexityResponse extends AbstractModel
{
    /**
     * @var ParamInfo 数据字典参数
     */
    public $ValidatePasswordDictionary;

    /**
     * @var ParamInfo 密码长度
     */
    public $ValidatePasswordLength;

    /**
     * @var ParamInfo 大小写敏感字符个数
     */
    public $ValidatePasswordMixedCaseCount;

    /**
     * @var ParamInfo 数字个数
     */
    public $ValidatePasswordNumberCount;

    /**
     * @var ParamInfo 密码等级
     */
    public $ValidatePasswordPolicy;

    /**
     * @var ParamInfo 特殊字符个数
     */
    public $ValidatePasswordSpecialCharCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ParamInfo $ValidatePasswordDictionary 数据字典参数
     * @param ParamInfo $ValidatePasswordLength 密码长度
     * @param ParamInfo $ValidatePasswordMixedCaseCount 大小写敏感字符个数
     * @param ParamInfo $ValidatePasswordNumberCount 数字个数
     * @param ParamInfo $ValidatePasswordPolicy 密码等级
     * @param ParamInfo $ValidatePasswordSpecialCharCount 特殊字符个数
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
        if (array_key_exists("ValidatePasswordDictionary",$param) and $param["ValidatePasswordDictionary"] !== null) {
            $this->ValidatePasswordDictionary = new ParamInfo();
            $this->ValidatePasswordDictionary->deserialize($param["ValidatePasswordDictionary"]);
        }

        if (array_key_exists("ValidatePasswordLength",$param) and $param["ValidatePasswordLength"] !== null) {
            $this->ValidatePasswordLength = new ParamInfo();
            $this->ValidatePasswordLength->deserialize($param["ValidatePasswordLength"]);
        }

        if (array_key_exists("ValidatePasswordMixedCaseCount",$param) and $param["ValidatePasswordMixedCaseCount"] !== null) {
            $this->ValidatePasswordMixedCaseCount = new ParamInfo();
            $this->ValidatePasswordMixedCaseCount->deserialize($param["ValidatePasswordMixedCaseCount"]);
        }

        if (array_key_exists("ValidatePasswordNumberCount",$param) and $param["ValidatePasswordNumberCount"] !== null) {
            $this->ValidatePasswordNumberCount = new ParamInfo();
            $this->ValidatePasswordNumberCount->deserialize($param["ValidatePasswordNumberCount"]);
        }

        if (array_key_exists("ValidatePasswordPolicy",$param) and $param["ValidatePasswordPolicy"] !== null) {
            $this->ValidatePasswordPolicy = new ParamInfo();
            $this->ValidatePasswordPolicy->deserialize($param["ValidatePasswordPolicy"]);
        }

        if (array_key_exists("ValidatePasswordSpecialCharCount",$param) and $param["ValidatePasswordSpecialCharCount"] !== null) {
            $this->ValidatePasswordSpecialCharCount = new ParamInfo();
            $this->ValidatePasswordSpecialCharCount->deserialize($param["ValidatePasswordSpecialCharCount"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
