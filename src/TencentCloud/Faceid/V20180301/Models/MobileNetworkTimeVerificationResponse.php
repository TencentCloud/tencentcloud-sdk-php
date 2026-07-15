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
 * MobileNetworkTimeVerification返回参数结构体
 *
 * @method string getResult() 获取<p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>-0: 成功。<br>-2: 手机号不存在<br>-3: 手机号存在，但无法查询到在网时长。</p></li><li><p>不收费结果码：<br>-1: 手机号格式不正确。<br>-4: 验证中心服务繁忙。<br>-5：认证次数超过当日限制，请次日重试。<br>-13：该号段不支持验证</p></li></ul>
 * @method void setResult(string $Result) 设置<p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>-0: 成功。<br>-2: 手机号不存在<br>-3: 手机号存在，但无法查询到在网时长。</p></li><li><p>不收费结果码：<br>-1: 手机号格式不正确。<br>-4: 验证中心服务繁忙。<br>-5：认证次数超过当日限制，请次日重试。<br>-13：该号段不支持验证</p></li></ul>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method string getRange() 获取<p>在网时长区间。</p><ul><li>格式为[a,b)，表示在网时长在a个月以上，b个月以下。</li><li>若b为+时表示没有上限。</li></ul>
 * @method void setRange(string $Range) 设置<p>在网时长区间。</p><ul><li>格式为[a,b)，表示在网时长在a个月以上，b个月以下。</li><li>若b为+时表示没有上限。</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class MobileNetworkTimeVerificationResponse extends AbstractModel
{
    /**
     * @var string <p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>-0: 成功。<br>-2: 手机号不存在<br>-3: 手机号存在，但无法查询到在网时长。</p></li><li><p>不收费结果码：<br>-1: 手机号格式不正确。<br>-4: 验证中心服务繁忙。<br>-5：认证次数超过当日限制，请次日重试。<br>-13：该号段不支持验证</p></li></ul>
     */
    public $Result;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var string <p>在网时长区间。</p><ul><li>格式为[a,b)，表示在网时长在a个月以上，b个月以下。</li><li>若b为+时表示没有上限。</li></ul>
     */
    public $Range;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result <p>认证结果码，收费情况如下。</p><ul><li><p>收费结果码：<br>-0: 成功。<br>-2: 手机号不存在<br>-3: 手机号存在，但无法查询到在网时长。</p></li><li><p>不收费结果码：<br>-1: 手机号格式不正确。<br>-4: 验证中心服务繁忙。<br>-5：认证次数超过当日限制，请次日重试。<br>-13：该号段不支持验证</p></li></ul>
     * @param string $Description <p>业务结果描述。</p>
     * @param string $Range <p>在网时长区间。</p><ul><li>格式为[a,b)，表示在网时长在a个月以上，b个月以下。</li><li>若b为+时表示没有上限。</li></ul>
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

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
