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
 * StorageInfo 资源信息
 *
 * @method string getRegion() 获取<p>资源所属地域。<br>当前支持ap-shanghai</p>
 * @method void setRegion(string $Region) 设置<p>资源所属地域。<br>当前支持ap-shanghai</p>
 * @method string getBucket() 获取<p>桶名，存储资源的唯一标识</p>
 * @method void setBucket(string $Bucket) 设置<p>桶名，存储资源的唯一标识</p>
 * @method string getCdnDomain() 获取<p>cdn 域名</p>
 * @method void setCdnDomain(string $CdnDomain) 设置<p>cdn 域名</p>
 * @method string getAppId() 获取<p>资源所属用户的腾讯云appId</p>
 * @method void setAppId(string $AppId) 设置<p>资源所属用户的腾讯云appId</p>
 * @method ExternalStorage getExternalStorage() 获取<p>外部存储介质相关信息。</p>
 * @method void setExternalStorage(ExternalStorage $ExternalStorage) 设置<p>外部存储介质相关信息。</p>
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string <p>资源所属地域。<br>当前支持ap-shanghai</p>
     */
    public $Region;

    /**
     * @var string <p>桶名，存储资源的唯一标识</p>
     */
    public $Bucket;

    /**
     * @var string <p>cdn 域名</p>
     */
    public $CdnDomain;

    /**
     * @var string <p>资源所属用户的腾讯云appId</p>
     */
    public $AppId;

    /**
     * @var ExternalStorage <p>外部存储介质相关信息。</p>
     */
    public $ExternalStorage;

    /**
     * @param string $Region <p>资源所属地域。<br>当前支持ap-shanghai</p>
     * @param string $Bucket <p>桶名，存储资源的唯一标识</p>
     * @param string $CdnDomain <p>cdn 域名</p>
     * @param string $AppId <p>资源所属用户的腾讯云appId</p>
     * @param ExternalStorage $ExternalStorage <p>外部存储介质相关信息。</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("CdnDomain",$param) and $param["CdnDomain"] !== null) {
            $this->CdnDomain = $param["CdnDomain"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ExternalStorage",$param) and $param["ExternalStorage"] !== null) {
            $this->ExternalStorage = new ExternalStorage();
            $this->ExternalStorage->deserialize($param["ExternalStorage"]);
        }
    }
}
