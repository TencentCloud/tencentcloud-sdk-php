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
 * 静态CDN资源信息
 *
 * @method string getStaticDomain() 获取<p>静态CDN域名</p>
 * @method void setStaticDomain(string $StaticDomain) 设置<p>静态CDN域名</p>
 * @method string getDefaultDirName() 获取<p>静态CDN默认文件夹，当前为根目录</p>
 * @method void setDefaultDirName(string $DefaultDirName) 设置<p>静态CDN默认文件夹，当前为根目录</p>
 * @method string getStatus() 获取<p>资源状态(process/online/offline/init)</p>
 * @method void setStatus(string $Status) 设置<p>资源状态(process/online/offline/init)</p>
 * @method string getRegion() 获取<p>cos所属区域</p>
 * @method void setRegion(string $Region) 设置<p>cos所属区域</p>
 * @method string getBucket() 获取<p>bucket信息</p>
 * @method void setBucket(string $Bucket) 设置<p>bucket信息</p>
 * @method integer getAccessExpire() 获取<p>到期时间（秒级时间戳）</p>
 * @method void setAccessExpire(integer $AccessExpire) 设置<p>到期时间（秒级时间戳）</p>
 * @method ExternalStorage getExternalStorage() 获取<p>外部存储。</p>
 * @method void setExternalStorage(ExternalStorage $ExternalStorage) 设置<p>外部存储。</p>
 */
class StaticStorageInfo extends AbstractModel
{
    /**
     * @var string <p>静态CDN域名</p>
     */
    public $StaticDomain;

    /**
     * @var string <p>静态CDN默认文件夹，当前为根目录</p>
     */
    public $DefaultDirName;

    /**
     * @var string <p>资源状态(process/online/offline/init)</p>
     */
    public $Status;

    /**
     * @var string <p>cos所属区域</p>
     */
    public $Region;

    /**
     * @var string <p>bucket信息</p>
     */
    public $Bucket;

    /**
     * @var integer <p>到期时间（秒级时间戳）</p>
     */
    public $AccessExpire;

    /**
     * @var ExternalStorage <p>外部存储。</p>
     */
    public $ExternalStorage;

    /**
     * @param string $StaticDomain <p>静态CDN域名</p>
     * @param string $DefaultDirName <p>静态CDN默认文件夹，当前为根目录</p>
     * @param string $Status <p>资源状态(process/online/offline/init)</p>
     * @param string $Region <p>cos所属区域</p>
     * @param string $Bucket <p>bucket信息</p>
     * @param integer $AccessExpire <p>到期时间（秒级时间戳）</p>
     * @param ExternalStorage $ExternalStorage <p>外部存储。</p>
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
        if (array_key_exists("StaticDomain",$param) and $param["StaticDomain"] !== null) {
            $this->StaticDomain = $param["StaticDomain"];
        }

        if (array_key_exists("DefaultDirName",$param) and $param["DefaultDirName"] !== null) {
            $this->DefaultDirName = $param["DefaultDirName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessExpire",$param) and $param["AccessExpire"] !== null) {
            $this->AccessExpire = $param["AccessExpire"];
        }

        if (array_key_exists("ExternalStorage",$param) and $param["ExternalStorage"] !== null) {
            $this->ExternalStorage = new ExternalStorage();
            $this->ExternalStorage->deserialize($param["ExternalStorage"]);
        }
    }
}
