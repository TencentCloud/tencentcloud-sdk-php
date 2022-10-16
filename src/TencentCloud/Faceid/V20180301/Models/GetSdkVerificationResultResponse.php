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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSdkVerificationResult返回参数结构体
 *
 * @method string getResult() 获取整个核验结果
 * @method void setResult(string $Result) 设置整个核验结果
 * @method string getDescription() 获取结果描述
 * @method void setDescription(string $Description) 设置结果描述
 * @method integer getChargeCount() 获取计费次数
 * @method void setChargeCount(integer $ChargeCount) 设置计费次数
 * @method array getCardVerifyResults() 获取多次证照识别的结果（有序），取最终一次结果为有效结果
 * @method void setCardVerifyResults(array $CardVerifyResults) 设置多次证照识别的结果（有序），取最终一次结果为有效结果
 * @method array getCompareResults() 获取多次活体认证的结果信息（有序），取最终一次结果为有效结果
 * @method void setCompareResults(array $CompareResults) 设置多次活体认证的结果信息（有序），取最终一次结果为有效结果
 * @method string getExtra() 获取获取token时传入的
 * @method void setExtra(string $Extra) 设置获取token时传入的
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetSdkVerificationResultResponse extends AbstractModel
{
    /**
     * @var string 整个核验结果
     */
    public $Result;

    /**
     * @var string 结果描述
     */
    public $Description;

    /**
     * @var integer 计费次数
     */
    public $ChargeCount;

    /**
     * @var array 多次证照识别的结果（有序），取最终一次结果为有效结果
     */
    public $CardVerifyResults;

    /**
     * @var array 多次活体认证的结果信息（有序），取最终一次结果为有效结果
     */
    public $CompareResults;

    /**
     * @var string 获取token时传入的
     */
    public $Extra;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 整个核验结果
     * @param string $Description 结果描述
     * @param integer $ChargeCount 计费次数
     * @param array $CardVerifyResults 多次证照识别的结果（有序），取最终一次结果为有效结果
     * @param array $CompareResults 多次活体认证的结果信息（有序），取最终一次结果为有效结果
     * @param string $Extra 获取token时传入的
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ChargeCount",$param) and $param["ChargeCount"] !== null) {
            $this->ChargeCount = $param["ChargeCount"];
        }

        if (array_key_exists("CardVerifyResults",$param) and $param["CardVerifyResults"] !== null) {
            $this->CardVerifyResults = [];
            foreach ($param["CardVerifyResults"] as $key => $value){
                $obj = new CardVerifyResult();
                $obj->deserialize($value);
                array_push($this->CardVerifyResults, $obj);
            }
        }

        if (array_key_exists("CompareResults",$param) and $param["CompareResults"] !== null) {
            $this->CompareResults = [];
            foreach ($param["CompareResults"] as $key => $value){
                $obj = new CompareResult();
                $obj->deserialize($value);
                array_push($this->CompareResults, $obj);
            }
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
