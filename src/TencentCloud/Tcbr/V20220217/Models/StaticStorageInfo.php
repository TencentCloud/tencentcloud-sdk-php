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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 静态CDN资源信息
 *
 * @method string getStaticDomain() 获取静态CDN域名
 * @method void setStaticDomain(string $StaticDomain) 设置静态CDN域名
 * @method string getDefaultDirName() 获取静态CDN默认文件夹，当前为根目录
 * @method void setDefaultDirName(string $DefaultDirName) 设置静态CDN默认文件夹，当前为根目录
 * @method string getStatus() 获取资源状态(process/online/offline/init)
 * @method void setStatus(string $Status) 设置资源状态(process/online/offline/init)
 * @method string getRegion() 获取cos所属区域
 * @method void setRegion(string $Region) 设置cos所属区域
 * @method string getBucket() 获取bucket信息
 * @method void setBucket(string $Bucket) 设置bucket信息
 */
class StaticStorageInfo extends AbstractModel
{
    /**
     * @var string 静态CDN域名
     */
    public $StaticDomain;

    /**
     * @var string 静态CDN默认文件夹，当前为根目录
     */
    public $DefaultDirName;

    /**
     * @var string 资源状态(process/online/offline/init)
     */
    public $Status;

    /**
     * @var string cos所属区域
     */
    public $Region;

    /**
     * @var string bucket信息
     */
    public $Bucket;

    /**
     * @param string $StaticDomain 静态CDN域名
     * @param string $DefaultDirName 静态CDN默认文件夹，当前为根目录
     * @param string $Status 资源状态(process/online/offline/init)
     * @param string $Region cos所属区域
     * @param string $Bucket bucket信息
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
    }
}
