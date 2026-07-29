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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudAppCosInfo返回参数结构体
 *
 * @method string getUploadUrl() 获取上传url
 * @method void setUploadUrl(string $UploadUrl) 设置上传url
 * @method array getUploadHeaders() 获取上传header
 * @method void setUploadHeaders(array $UploadHeaders) 设置上传header
 * @method string getDownloadUrl() 获取下载链接
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载链接
 * @method array getDownloadHeaders() 获取下载Httpheader
 * @method void setDownloadHeaders(array $DownloadHeaders) 设置下载Httpheader
 * @method string getUnixTimestamp() 获取时间戳
 * @method void setUnixTimestamp(string $UnixTimestamp) 设置时间戳
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudAppCosInfoResponse extends AbstractModel
{
    /**
     * @var string 上传url
     */
    public $UploadUrl;

    /**
     * @var array 上传header
     */
    public $UploadHeaders;

    /**
     * @var string 下载链接
     */
    public $DownloadUrl;

    /**
     * @var array 下载Httpheader
     */
    public $DownloadHeaders;

    /**
     * @var string 时间戳
     */
    public $UnixTimestamp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UploadUrl 上传url
     * @param array $UploadHeaders 上传header
     * @param string $DownloadUrl 下载链接
     * @param array $DownloadHeaders 下载Httpheader
     * @param string $UnixTimestamp 时间戳
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
        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("UploadHeaders",$param) and $param["UploadHeaders"] !== null) {
            $this->UploadHeaders = [];
            foreach ($param["UploadHeaders"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->UploadHeaders, $obj);
            }
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("DownloadHeaders",$param) and $param["DownloadHeaders"] !== null) {
            $this->DownloadHeaders = [];
            foreach ($param["DownloadHeaders"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->DownloadHeaders, $obj);
            }
        }

        if (array_key_exists("UnixTimestamp",$param) and $param["UnixTimestamp"] !== null) {
            $this->UnixTimestamp = $param["UnixTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
