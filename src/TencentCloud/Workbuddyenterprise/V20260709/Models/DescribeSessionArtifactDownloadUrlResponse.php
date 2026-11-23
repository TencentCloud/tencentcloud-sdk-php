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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionArtifactDownloadUrl返回参数结构体
 *
 * @method string getDownloadUrl() 获取<p>产物下载地址</p>
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>产物下载地址</p>
 * @method string getExpiredTime() 获取<p>产物过期时间</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>产物过期时间</p>
 * @method string getFileName() 获取<p>产物对应文件名</p>
 * @method void setFileName(string $FileName) 设置<p>产物对应文件名</p>
 * @method integer getFileSizeBytes() 获取<p>产物文件大小</p>
 * @method void setFileSizeBytes(integer $FileSizeBytes) 设置<p>产物文件大小</p>
 * @method string getFileSha256() 获取<p>文件摘要</p>
 * @method void setFileSha256(string $FileSha256) 设置<p>文件摘要</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSessionArtifactDownloadUrlResponse extends AbstractModel
{
    /**
     * @var string <p>产物下载地址</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>产物过期时间</p>
     */
    public $ExpiredTime;

    /**
     * @var string <p>产物对应文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>产物文件大小</p>
     */
    public $FileSizeBytes;

    /**
     * @var string <p>文件摘要</p>
     */
    public $FileSha256;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DownloadUrl <p>产物下载地址</p>
     * @param string $ExpiredTime <p>产物过期时间</p>
     * @param string $FileName <p>产物对应文件名</p>
     * @param integer $FileSizeBytes <p>产物文件大小</p>
     * @param string $FileSha256 <p>文件摘要</p>
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSizeBytes",$param) and $param["FileSizeBytes"] !== null) {
            $this->FileSizeBytes = $param["FileSizeBytes"];
        }

        if (array_key_exists("FileSha256",$param) and $param["FileSha256"] !== null) {
            $this->FileSha256 = $param["FileSha256"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
