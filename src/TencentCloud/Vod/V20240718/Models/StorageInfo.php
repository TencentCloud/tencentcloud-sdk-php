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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专业版应用的存储信息。
 *
 * @method string getBucketId() 获取存储桶 ID。
 * @method void setBucketId(string $BucketId) 设置存储桶 ID。
 * @method string getStorageName() 获取存储名称。
 * @method void setStorageName(string $StorageName) 设置存储名称。
 * @method string getStorageRegion() 获取存储所在区域。
 * @method void setStorageRegion(string $StorageRegion) 设置存储所在区域。
 * @method string getInternetAccessDomainStatus() 获取存储公网源站访问域名的状态，取值有：
<li>ONLINE：已生效；</li>
<li>DEPLOYING： 部署中。</li>
 * @method void setInternetAccessDomainStatus(string $InternetAccessDomainStatus) 设置存储公网源站访问域名的状态，取值有：
<li>ONLINE：已生效；</li>
<li>DEPLOYING： 部署中。</li>
 * @method string getInternetAccessDomain() 获取存储公网源站访问域名。
 * @method void setInternetAccessDomain(string $InternetAccessDomain) 设置存储公网源站访问域名。
 * @method string getCreateTime() 获取存储的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置存储的创建时间。
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string 存储桶 ID。
     */
    public $BucketId;

    /**
     * @var string 存储名称。
     */
    public $StorageName;

    /**
     * @var string 存储所在区域。
     */
    public $StorageRegion;

    /**
     * @var string 存储公网源站访问域名的状态，取值有：
<li>ONLINE：已生效；</li>
<li>DEPLOYING： 部署中。</li>
     */
    public $InternetAccessDomainStatus;

    /**
     * @var string 存储公网源站访问域名。
     */
    public $InternetAccessDomain;

    /**
     * @var string 存储的创建时间。
     */
    public $CreateTime;

    /**
     * @param string $BucketId 存储桶 ID。
     * @param string $StorageName 存储名称。
     * @param string $StorageRegion 存储所在区域。
     * @param string $InternetAccessDomainStatus 存储公网源站访问域名的状态，取值有：
<li>ONLINE：已生效；</li>
<li>DEPLOYING： 部署中。</li>
     * @param string $InternetAccessDomain 存储公网源站访问域名。
     * @param string $CreateTime 存储的创建时间。
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
        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("InternetAccessDomainStatus",$param) and $param["InternetAccessDomainStatus"] !== null) {
            $this->InternetAccessDomainStatus = $param["InternetAccessDomainStatus"];
        }

        if (array_key_exists("InternetAccessDomain",$param) and $param["InternetAccessDomain"] !== null) {
            $this->InternetAccessDomain = $param["InternetAccessDomain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
