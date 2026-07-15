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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PhoneVerificationCUCC返回参数结构体
 *
 * @method string getResult() 获取<p>认证结果码，收费情况如下。</p><ul><li>收费结果码：</li><li>0: 认证通过。</li><li>-4: 信息不一致（手机号已实名，但姓名和身份证号与实名信息不一致）。</li><li>-不收费结果码：</li><li>-6: 手机号码不合法。</li><li>-7: 身份证号码有误。</li><li>-8: 姓名校验不通过。</li><li>-9: 没有记录。</li><li>-11: 验证中心服务繁忙。</li><li>-13：该号段不支持验证</li></ul>
 * @method void setResult(string $Result) 设置<p>认证结果码，收费情况如下。</p><ul><li>收费结果码：</li><li>0: 认证通过。</li><li>-4: 信息不一致（手机号已实名，但姓名和身份证号与实名信息不一致）。</li><li>-不收费结果码：</li><li>-6: 手机号码不合法。</li><li>-7: 身份证号码有误。</li><li>-8: 姓名校验不通过。</li><li>-9: 没有记录。</li><li>-11: 验证中心服务繁忙。</li><li>-13：该号段不支持验证</li></ul>
 * @method string getIsp() 获取<p>运营商名称。</p><ul><li>取值范围为[&quot;移动&quot;,&quot;联通&quot;,&quot;电信&quot;,&quot;&quot;]。</li></ul>
 * @method void setIsp(string $Isp) 设置<p>运营商名称。</p><ul><li>取值范围为[&quot;移动&quot;,&quot;联通&quot;,&quot;电信&quot;,&quot;&quot;]。</li></ul>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class PhoneVerificationCUCCResponse extends AbstractModel
{
    /**
     * @var string <p>认证结果码，收费情况如下。</p><ul><li>收费结果码：</li><li>0: 认证通过。</li><li>-4: 信息不一致（手机号已实名，但姓名和身份证号与实名信息不一致）。</li><li>-不收费结果码：</li><li>-6: 手机号码不合法。</li><li>-7: 身份证号码有误。</li><li>-8: 姓名校验不通过。</li><li>-9: 没有记录。</li><li>-11: 验证中心服务繁忙。</li><li>-13：该号段不支持验证</li></ul>
     */
    public $Result;

    /**
     * @var string <p>运营商名称。</p><ul><li>取值范围为[&quot;移动&quot;,&quot;联通&quot;,&quot;电信&quot;,&quot;&quot;]。</li></ul>
     */
    public $Isp;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result <p>认证结果码，收费情况如下。</p><ul><li>收费结果码：</li><li>0: 认证通过。</li><li>-4: 信息不一致（手机号已实名，但姓名和身份证号与实名信息不一致）。</li><li>-不收费结果码：</li><li>-6: 手机号码不合法。</li><li>-7: 身份证号码有误。</li><li>-8: 姓名校验不通过。</li><li>-9: 没有记录。</li><li>-11: 验证中心服务繁忙。</li><li>-13：该号段不支持验证</li></ul>
     * @param string $Isp <p>运营商名称。</p><ul><li>取值范围为[&quot;移动&quot;,&quot;联通&quot;,&quot;电信&quot;,&quot;&quot;]。</li></ul>
     * @param string $Description <p>业务结果描述。</p>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
