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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSkillPackageUploadURL返回参数结构体
 *
 * @method CloudRecordVersion getVersion() 获取<p>Version 详情（Revision 不变）。</p>
 * @method void setVersion(CloudRecordVersion $Version) 设置<p>Version 详情（Revision 不变）。</p>
 * @method string getUploadURL() 获取<p>新的 COS PUT 预签名 URL。</p>
 * @method void setUploadURL(string $UploadURL) 设置<p>新的 COS PUT 预签名 URL。</p>
 * @method string getContentStatus() 获取<p>重试后的内容状态。</p>
 * @method void setContentStatus(string $ContentStatus) 设置<p>重试后的内容状态。</p>
 * @method string getExpireTime() 获取<p>UploadURL 过期时间。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>UploadURL 过期时间。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetSkillPackageUploadURLResponse extends AbstractModel
{
    /**
     * @var CloudRecordVersion <p>Version 详情（Revision 不变）。</p>
     */
    public $Version;

    /**
     * @var string <p>新的 COS PUT 预签名 URL。</p>
     */
    public $UploadURL;

    /**
     * @var string <p>重试后的内容状态。</p>
     */
    public $ContentStatus;

    /**
     * @var string <p>UploadURL 过期时间。</p>
     */
    public $ExpireTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CloudRecordVersion $Version <p>Version 详情（Revision 不变）。</p>
     * @param string $UploadURL <p>新的 COS PUT 预签名 URL。</p>
     * @param string $ContentStatus <p>重试后的内容状态。</p>
     * @param string $ExpireTime <p>UploadURL 过期时间。</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new CloudRecordVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("UploadURL",$param) and $param["UploadURL"] !== null) {
            $this->UploadURL = $param["UploadURL"];
        }

        if (array_key_exists("ContentStatus",$param) and $param["ContentStatus"] !== null) {
            $this->ContentStatus = $param["ContentStatus"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
