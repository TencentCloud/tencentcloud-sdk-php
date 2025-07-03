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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyExtendedService返回参数结构体
 *
 * @method string getOperateUrl() 获取操作跳转链接
<ul><li><strong>链接有效期：</strong> 跳转链接的有效期为24小时。</li>
<li><strong>没有返回链接的情形：</strong> 如果在操作时没有返回跳转链接，说明此次操作无需进行跳转，服务将会直接被开通或关闭。</li>
<li><strong>返回链接的情形：</strong> 当操作类型为<b>OPEN（开通服务）</b>，并且扩展服务类型为<b>AUTO_SIGN（ 企业自动签署）</b>、<b>DOWNLOAD_FLOW（授权渠道下载合同）</b>时，系统将返回一个操作链接。收到操作链接后，贵方需主动联系超级管理员（超管）或法人。<font color="red"><b>由超管或法人点击链接</b></font>，以完成服务的开通操作。</li>
</ul>


 * @method void setOperateUrl(string $OperateUrl) 设置操作跳转链接
<ul><li><strong>链接有效期：</strong> 跳转链接的有效期为24小时。</li>
<li><strong>没有返回链接的情形：</strong> 如果在操作时没有返回跳转链接，说明此次操作无需进行跳转，服务将会直接被开通或关闭。</li>
<li><strong>返回链接的情形：</strong> 当操作类型为<b>OPEN（开通服务）</b>，并且扩展服务类型为<b>AUTO_SIGN（ 企业自动签署）</b>、<b>DOWNLOAD_FLOW（授权渠道下载合同）</b>时，系统将返回一个操作链接。收到操作链接后，贵方需主动联系超级管理员（超管）或法人。<font color="red"><b>由超管或法人点击链接</b></font>，以完成服务的开通操作。</li>
</ul>


 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyExtendedServiceResponse extends AbstractModel
{
    /**
     * @var string 操作跳转链接
<ul><li><strong>链接有效期：</strong> 跳转链接的有效期为24小时。</li>
<li><strong>没有返回链接的情形：</strong> 如果在操作时没有返回跳转链接，说明此次操作无需进行跳转，服务将会直接被开通或关闭。</li>
<li><strong>返回链接的情形：</strong> 当操作类型为<b>OPEN（开通服务）</b>，并且扩展服务类型为<b>AUTO_SIGN（ 企业自动签署）</b>、<b>DOWNLOAD_FLOW（授权渠道下载合同）</b>时，系统将返回一个操作链接。收到操作链接后，贵方需主动联系超级管理员（超管）或法人。<font color="red"><b>由超管或法人点击链接</b></font>，以完成服务的开通操作。</li>
</ul>


     */
    public $OperateUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OperateUrl 操作跳转链接
<ul><li><strong>链接有效期：</strong> 跳转链接的有效期为24小时。</li>
<li><strong>没有返回链接的情形：</strong> 如果在操作时没有返回跳转链接，说明此次操作无需进行跳转，服务将会直接被开通或关闭。</li>
<li><strong>返回链接的情形：</strong> 当操作类型为<b>OPEN（开通服务）</b>，并且扩展服务类型为<b>AUTO_SIGN（ 企业自动签署）</b>、<b>DOWNLOAD_FLOW（授权渠道下载合同）</b>时，系统将返回一个操作链接。收到操作链接后，贵方需主动联系超级管理员（超管）或法人。<font color="red"><b>由超管或法人点击链接</b></font>，以完成服务的开通操作。</li>
</ul>


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
        if (array_key_exists("OperateUrl",$param) and $param["OperateUrl"] !== null) {
            $this->OperateUrl = $param["OperateUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
