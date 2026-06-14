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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyBizLicenseEnterprise3返回参数结构体
 *
 * @method integer getStatusCode() 获取<p>0 成功，计费<br>1 系统异常，不计费<br>2 查询无结果，不计费</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>0 成功，计费<br>1 系统异常，不计费<br>2 查询无结果，不计费</p>
 * @method integer getVerifyResult() 获取<p>验证结果<br>1：三要素完全匹配<br>0：三要素不完全匹配<br>仅StatusCode为0时返回</p>
 * @method void setVerifyResult(integer $VerifyResult) 设置<p>验证结果<br>1：三要素完全匹配<br>0：三要素不完全匹配<br>仅StatusCode为0时返回</p>
 * @method string getOperatingStatus() 获取<p>企业状态</p><p>枚举值：</p><ul><li>1： 开业（在营）/ 在营</li><li>2： 迁出 / 非在营</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>7： 撤销登记</li><li>0： 其他</li><li>/： 无法查询</li></ul><p>企业状态  当VerifyType参数为ENT_2META时，可返回：  0-7,  /   当VerifyType参数为ENT_3META时，可返回  1，2</p>
 * @method void setOperatingStatus(string $OperatingStatus) 设置<p>企业状态</p><p>枚举值：</p><ul><li>1： 开业（在营）/ 在营</li><li>2： 迁出 / 非在营</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>7： 撤销登记</li><li>0： 其他</li><li>/： 无法查询</li></ul><p>企业状态  当VerifyType参数为ENT_2META时，可返回：  0-7,  /   当VerifyType参数为ENT_3META时，可返回  1，2</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyBizLicenseEnterprise3Response extends AbstractModel
{
    /**
     * @var integer <p>0 成功，计费<br>1 系统异常，不计费<br>2 查询无结果，不计费</p>
     */
    public $StatusCode;

    /**
     * @var integer <p>验证结果<br>1：三要素完全匹配<br>0：三要素不完全匹配<br>仅StatusCode为0时返回</p>
     */
    public $VerifyResult;

    /**
     * @var string <p>企业状态</p><p>枚举值：</p><ul><li>1： 开业（在营）/ 在营</li><li>2： 迁出 / 非在营</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>7： 撤销登记</li><li>0： 其他</li><li>/： 无法查询</li></ul><p>企业状态  当VerifyType参数为ENT_2META时，可返回：  0-7,  /   当VerifyType参数为ENT_3META时，可返回  1，2</p>
     */
    public $OperatingStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StatusCode <p>0 成功，计费<br>1 系统异常，不计费<br>2 查询无结果，不计费</p>
     * @param integer $VerifyResult <p>验证结果<br>1：三要素完全匹配<br>0：三要素不完全匹配<br>仅StatusCode为0时返回</p>
     * @param string $OperatingStatus <p>企业状态</p><p>枚举值：</p><ul><li>1： 开业（在营）/ 在营</li><li>2： 迁出 / 非在营</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>7： 撤销登记</li><li>0： 其他</li><li>/： 无法查询</li></ul><p>企业状态  当VerifyType参数为ENT_2META时，可返回：  0-7,  /   当VerifyType参数为ENT_3META时，可返回  1，2</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("VerifyResult",$param) and $param["VerifyResult"] !== null) {
            $this->VerifyResult = $param["VerifyResult"];
        }

        if (array_key_exists("OperatingStatus",$param) and $param["OperatingStatus"] !== null) {
            $this->OperatingStatus = $param["OperatingStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
