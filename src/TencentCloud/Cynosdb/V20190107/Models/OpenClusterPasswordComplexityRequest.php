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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenClusterPasswordComplexity请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method integer getValidatePasswordLength() 获取密码长度
 * @method void setValidatePasswordLength(integer $ValidatePasswordLength) 设置密码长度
 * @method integer getValidatePasswordMixedCaseCount() 获取大小写字符个数
 * @method void setValidatePasswordMixedCaseCount(integer $ValidatePasswordMixedCaseCount) 设置大小写字符个数
 * @method integer getValidatePasswordSpecialCharCount() 获取特殊字符个数
 * @method void setValidatePasswordSpecialCharCount(integer $ValidatePasswordSpecialCharCount) 设置特殊字符个数
 * @method integer getValidatePasswordNumberCount() 获取数字个数
 * @method void setValidatePasswordNumberCount(integer $ValidatePasswordNumberCount) 设置数字个数
 * @method string getValidatePasswordPolicy() 获取密码强度（"MEDIUM", "STRONG"）
 * @method void setValidatePasswordPolicy(string $ValidatePasswordPolicy) 设置密码强度（"MEDIUM", "STRONG"）
 * @method array getValidatePasswordDictionary() 获取数据字典
 * @method void setValidatePasswordDictionary(array $ValidatePasswordDictionary) 设置数据字典
 */
class OpenClusterPasswordComplexityRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var integer 密码长度
     */
    public $ValidatePasswordLength;

    /**
     * @var integer 大小写字符个数
     */
    public $ValidatePasswordMixedCaseCount;

    /**
     * @var integer 特殊字符个数
     */
    public $ValidatePasswordSpecialCharCount;

    /**
     * @var integer 数字个数
     */
    public $ValidatePasswordNumberCount;

    /**
     * @var string 密码强度（"MEDIUM", "STRONG"）
     */
    public $ValidatePasswordPolicy;

    /**
     * @var array 数据字典
     */
    public $ValidatePasswordDictionary;

    /**
     * @param string $ClusterId 集群id
     * @param integer $ValidatePasswordLength 密码长度
     * @param integer $ValidatePasswordMixedCaseCount 大小写字符个数
     * @param integer $ValidatePasswordSpecialCharCount 特殊字符个数
     * @param integer $ValidatePasswordNumberCount 数字个数
     * @param string $ValidatePasswordPolicy 密码强度（"MEDIUM", "STRONG"）
     * @param array $ValidatePasswordDictionary 数据字典
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ValidatePasswordLength",$param) and $param["ValidatePasswordLength"] !== null) {
            $this->ValidatePasswordLength = $param["ValidatePasswordLength"];
        }

        if (array_key_exists("ValidatePasswordMixedCaseCount",$param) and $param["ValidatePasswordMixedCaseCount"] !== null) {
            $this->ValidatePasswordMixedCaseCount = $param["ValidatePasswordMixedCaseCount"];
        }

        if (array_key_exists("ValidatePasswordSpecialCharCount",$param) and $param["ValidatePasswordSpecialCharCount"] !== null) {
            $this->ValidatePasswordSpecialCharCount = $param["ValidatePasswordSpecialCharCount"];
        }

        if (array_key_exists("ValidatePasswordNumberCount",$param) and $param["ValidatePasswordNumberCount"] !== null) {
            $this->ValidatePasswordNumberCount = $param["ValidatePasswordNumberCount"];
        }

        if (array_key_exists("ValidatePasswordPolicy",$param) and $param["ValidatePasswordPolicy"] !== null) {
            $this->ValidatePasswordPolicy = $param["ValidatePasswordPolicy"];
        }

        if (array_key_exists("ValidatePasswordDictionary",$param) and $param["ValidatePasswordDictionary"] !== null) {
            $this->ValidatePasswordDictionary = $param["ValidatePasswordDictionary"];
        }
    }
}
