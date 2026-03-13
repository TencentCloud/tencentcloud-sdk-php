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
 * VerifyBizLicenseEnterprise4返回参数结构体
 *
 * @method integer getStatusCode() 获取<p>请求状态</p><p>枚举值：</p><ul><li>0： 成功，计费</li><li>1： 系统异常，不计费</li></ul>
 * @method void setStatusCode(integer $StatusCode) 设置<p>请求状态</p><p>枚举值：</p><ul><li>0： 成功，计费</li><li>1： 系统异常，不计费</li></ul>
 * @method integer getVerifyResult() 获取<p>验证结果<br>1：四要素完全匹配<br>0：四要素不完全匹配<br>仅StatusCode为0时返回</p>
 * @method void setVerifyResult(integer $VerifyResult) 设置<p>验证结果<br>1：四要素完全匹配<br>0：四要素不完全匹配<br>仅StatusCode为0时返回</p>
 * @method boolean getIsCreditCodeConsistent() 获取<p>统一社会信用代码是否一致<br>仅StatusCode为0时返回</p>
 * @method void setIsCreditCodeConsistent(boolean $IsCreditCodeConsistent) 设置<p>统一社会信用代码是否一致<br>仅StatusCode为0时返回</p>
 * @method boolean getIsEntNameConsistent() 获取<p>企业名称是否一致<br>仅StatusCode为0时返回</p>
 * @method void setIsEntNameConsistent(boolean $IsEntNameConsistent) 设置<p>企业名称是否一致<br>仅StatusCode为0时返回</p>
 * @method boolean getIsLrNameConsistent() 获取<p>法人代表是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
 * @method void setIsLrNameConsistent(boolean $IsLrNameConsistent) 设置<p>法人代表是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
 * @method boolean getIsIdNumConsistent() 获取<p>注册登记证件号码是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
 * @method void setIsIdNumConsistent(boolean $IsIdNumConsistent) 设置<p>注册登记证件号码是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
 * @method string getOperatingStatus() 获取<p>经营状态</p><p>枚举值：</p><ul><li>1： 开业（在营）</li><li>2： 迁出</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>0： 其他</li><li>-10002： 企业信息不正确，无法查询</li></ul>
 * @method void setOperatingStatus(string $OperatingStatus) 设置<p>经营状态</p><p>枚举值：</p><ul><li>1： 开业（在营）</li><li>2： 迁出</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>0： 其他</li><li>-10002： 企业信息不正确，无法查询</li></ul>
 * @method string getOperatingPeriod() 获取<p>营业期限：一般包括营业开始时间和结束时间</p><p>参数格式：yyyy-MM-dd/yyyy-MM-dd</p><p>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>企业信息不正确，无法查询，将返回：-10002</p>
 * @method void setOperatingPeriod(string $OperatingPeriod) 设置<p>营业期限：一般包括营业开始时间和结束时间</p><p>参数格式：yyyy-MM-dd/yyyy-MM-dd</p><p>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>企业信息不正确，无法查询，将返回：-10002</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyBizLicenseEnterprise4Response extends AbstractModel
{
    /**
     * @var integer <p>请求状态</p><p>枚举值：</p><ul><li>0： 成功，计费</li><li>1： 系统异常，不计费</li></ul>
     */
    public $StatusCode;

    /**
     * @var integer <p>验证结果<br>1：四要素完全匹配<br>0：四要素不完全匹配<br>仅StatusCode为0时返回</p>
     */
    public $VerifyResult;

    /**
     * @var boolean <p>统一社会信用代码是否一致<br>仅StatusCode为0时返回</p>
     */
    public $IsCreditCodeConsistent;

    /**
     * @var boolean <p>企业名称是否一致<br>仅StatusCode为0时返回</p>
     */
    public $IsEntNameConsistent;

    /**
     * @var boolean <p>法人代表是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
     */
    public $IsLrNameConsistent;

    /**
     * @var boolean <p>注册登记证件号码是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
     */
    public $IsIdNumConsistent;

    /**
     * @var string <p>经营状态</p><p>枚举值：</p><ul><li>1： 开业（在营）</li><li>2： 迁出</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>0： 其他</li><li>-10002： 企业信息不正确，无法查询</li></ul>
     */
    public $OperatingStatus;

    /**
     * @var string <p>营业期限：一般包括营业开始时间和结束时间</p><p>参数格式：yyyy-MM-dd/yyyy-MM-dd</p><p>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>企业信息不正确，无法查询，将返回：-10002</p>
     */
    public $OperatingPeriod;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StatusCode <p>请求状态</p><p>枚举值：</p><ul><li>0： 成功，计费</li><li>1： 系统异常，不计费</li></ul>
     * @param integer $VerifyResult <p>验证结果<br>1：四要素完全匹配<br>0：四要素不完全匹配<br>仅StatusCode为0时返回</p>
     * @param boolean $IsCreditCodeConsistent <p>统一社会信用代码是否一致<br>仅StatusCode为0时返回</p>
     * @param boolean $IsEntNameConsistent <p>企业名称是否一致<br>仅StatusCode为0时返回</p>
     * @param boolean $IsLrNameConsistent <p>法人代表是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
     * @param boolean $IsIdNumConsistent <p>注册登记证件号码是否一致<br>仅StatusCode为0时返回，企业名称与统一社会信用代码均未查得时，固定返回false</p>
     * @param string $OperatingStatus <p>经营状态</p><p>枚举值：</p><ul><li>1： 开业（在营）</li><li>2： 迁出</li><li>3： 注销</li><li>4： 吊销</li><li>5： 撤销</li><li>6： 停业</li><li>0： 其他</li><li>-10002： 企业信息不正确，无法查询</li></ul>
     * @param string $OperatingPeriod <p>营业期限：一般包括营业开始时间和结束时间</p><p>参数格式：yyyy-MM-dd/yyyy-MM-dd</p><p>无固定期限的格式为：yyyy-MM-dd/<br>部分企业历史数据可能为空，将返回：/<br>企业信息不正确，无法查询，将返回：-10002</p>
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

        if (array_key_exists("IsCreditCodeConsistent",$param) and $param["IsCreditCodeConsistent"] !== null) {
            $this->IsCreditCodeConsistent = $param["IsCreditCodeConsistent"];
        }

        if (array_key_exists("IsEntNameConsistent",$param) and $param["IsEntNameConsistent"] !== null) {
            $this->IsEntNameConsistent = $param["IsEntNameConsistent"];
        }

        if (array_key_exists("IsLrNameConsistent",$param) and $param["IsLrNameConsistent"] !== null) {
            $this->IsLrNameConsistent = $param["IsLrNameConsistent"];
        }

        if (array_key_exists("IsIdNumConsistent",$param) and $param["IsIdNumConsistent"] !== null) {
            $this->IsIdNumConsistent = $param["IsIdNumConsistent"];
        }

        if (array_key_exists("OperatingStatus",$param) and $param["OperatingStatus"] !== null) {
            $this->OperatingStatus = $param["OperatingStatus"];
        }

        if (array_key_exists("OperatingPeriod",$param) and $param["OperatingPeriod"] !== null) {
            $this->OperatingPeriod = $param["OperatingPeriod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
