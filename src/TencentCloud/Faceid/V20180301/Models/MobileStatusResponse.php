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
 * MobileStatus返回参数结构体
 *
 * @method string getResult() 获取<p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>0：成功。</p></li><li><p>不收费结果码：<br>-1：未查询到结果。<br>-2：手机号格式不正确。<br>-3：验证中心服务繁忙。<br>-4：认证次数超过当日限制，请次日重试。</p></li></ul>
 * @method void setResult(string $Result) 设置<p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>0：成功。</p></li><li><p>不收费结果码：<br>-1：未查询到结果。<br>-2：手机号格式不正确。<br>-3：验证中心服务繁忙。<br>-4：认证次数超过当日限制，请次日重试。</p></li></ul>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method integer getStatusCode() 获取<p>状态码。- 取值范围：0：正常。1：停机。2：销号。4：不在网。5：在网但不可用 。99：未知状态。</p>
 * @method void setStatusCode(integer $StatusCode) 设置<p>状态码。- 取值范围：0：正常。1：停机。2：销号。4：不在网。5：在网但不可用 。99：未知状态。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class MobileStatusResponse extends AbstractModel
{
    /**
     * @var string <p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>0：成功。</p></li><li><p>不收费结果码：<br>-1：未查询到结果。<br>-2：手机号格式不正确。<br>-3：验证中心服务繁忙。<br>-4：认证次数超过当日限制，请次日重试。</p></li></ul>
     */
    public $Result;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>状态码。- 取值范围：0：正常。1：停机。2：销号。4：不在网。5：在网但不可用 。99：未知状态。</p>
     */
    public $StatusCode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result <p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>0：成功。</p></li><li><p>不收费结果码：<br>-1：未查询到结果。<br>-2：手机号格式不正确。<br>-3：验证中心服务繁忙。<br>-4：认证次数超过当日限制，请次日重试。</p></li></ul>
     * @param string $Description <p>业务结果描述。</p>
     * @param integer $StatusCode <p>状态码。- 取值范围：0：正常。1：停机。2：销号。4：不在网。5：在网但不可用 。99：未知状态。</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
