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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyUpload返回参数结构体
 *
 * @method string getStorageBucket() 获取<p>存储桶，用于上传接口 URL 的 bucket_name。</p>
 * @method void setStorageBucket(string $StorageBucket) 设置<p>存储桶，用于上传接口 URL 的 bucket_name。</p>
 * @method string getStorageRegion() 获取<p>存储园区，用于上传接口 Host 的 Region。</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>存储园区，用于上传接口 Host 的 Region。</p>
 * @method string getVodSessionKey() 获取<p>点播会话，用于确认上传接口的参数 VodSessionKey。</p>
 * @method void setVodSessionKey(string $VodSessionKey) 设置<p>点播会话，用于确认上传接口的参数 VodSessionKey。</p>
 * @method string getMediaStoragePath() 获取<p>媒体存储路径，用于上传接口存储媒体的对象键（Key）。</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置<p>媒体存储路径，用于上传接口存储媒体的对象键（Key）。</p>
 * @method string getCoverStoragePath() 获取<p>封面存储路径，用于上传接口存储封面的对象键（Key）。</p>
 * @method void setCoverStoragePath(string $CoverStoragePath) 设置<p>封面存储路径，用于上传接口存储封面的对象键（Key）。</p>
 * @method TempCertificate getTempCertificate() 获取<p>临时凭证，用于上传接口的权限验证。</p>
 * @method void setTempCertificate(TempCertificate $TempCertificate) 设置<p>临时凭证，用于上传接口的权限验证。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ApplyUploadResponse extends AbstractModel
{
    /**
     * @var string <p>存储桶，用于上传接口 URL 的 bucket_name。</p>
     */
    public $StorageBucket;

    /**
     * @var string <p>存储园区，用于上传接口 Host 的 Region。</p>
     */
    public $StorageRegion;

    /**
     * @var string <p>点播会话，用于确认上传接口的参数 VodSessionKey。</p>
     */
    public $VodSessionKey;

    /**
     * @var string <p>媒体存储路径，用于上传接口存储媒体的对象键（Key）。</p>
     */
    public $MediaStoragePath;

    /**
     * @var string <p>封面存储路径，用于上传接口存储封面的对象键（Key）。</p>
     */
    public $CoverStoragePath;

    /**
     * @var TempCertificate <p>临时凭证，用于上传接口的权限验证。</p>
     */
    public $TempCertificate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StorageBucket <p>存储桶，用于上传接口 URL 的 bucket_name。</p>
     * @param string $StorageRegion <p>存储园区，用于上传接口 Host 的 Region。</p>
     * @param string $VodSessionKey <p>点播会话，用于确认上传接口的参数 VodSessionKey。</p>
     * @param string $MediaStoragePath <p>媒体存储路径，用于上传接口存储媒体的对象键（Key）。</p>
     * @param string $CoverStoragePath <p>封面存储路径，用于上传接口存储封面的对象键（Key）。</p>
     * @param TempCertificate $TempCertificate <p>临时凭证，用于上传接口的权限验证。</p>
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
        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("VodSessionKey",$param) and $param["VodSessionKey"] !== null) {
            $this->VodSessionKey = $param["VodSessionKey"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("CoverStoragePath",$param) and $param["CoverStoragePath"] !== null) {
            $this->CoverStoragePath = $param["CoverStoragePath"];
        }

        if (array_key_exists("TempCertificate",$param) and $param["TempCertificate"] !== null) {
            $this->TempCertificate = new TempCertificate();
            $this->TempCertificate->deserialize($param["TempCertificate"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
