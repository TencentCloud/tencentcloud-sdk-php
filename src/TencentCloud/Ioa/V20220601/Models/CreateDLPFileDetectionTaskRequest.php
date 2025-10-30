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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDLPFileDetectionTask请求参数结构体
 *
 * @method string getUrl() 获取文件下载链接，要求公网可访问，GET方式访问后为文件
 * @method void setUrl(string $Url) 设置文件下载链接，要求公网可访问，GET方式访问后为文件
 * @method string getFileName() 获取文件名，带后缀
 * @method void setFileName(string $FileName) 设置文件名，带后缀
 * @method string getFileMd5() 获取 文件md5，传入相同md5会直接使用之前缓存的结果。

> 请注意：不同文件使用相同md5送检，会命中缓存得到旧的检测结果
 * @method void setFileMd5(string $FileMd5) 设置 文件md5，传入相同md5会直接使用之前缓存的结果。

> 请注意：不同文件使用相同md5送检，会命中缓存得到旧的检测结果
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配
 * @method string getCallBackUrl() 获取回调地址，暂时未使用
 * @method void setCallBackUrl(string $CallBackUrl) 设置回调地址，暂时未使用
 */
class CreateDLPFileDetectionTaskRequest extends AbstractModel
{
    /**
     * @var string 文件下载链接，要求公网可访问，GET方式访问后为文件
     */
    public $Url;

    /**
     * @var string 文件名，带后缀
     */
    public $FileName;

    /**
     * @var string  文件md5，传入相同md5会直接使用之前缓存的结果。

> 请注意：不同文件使用相同md5送检，会命中缓存得到旧的检测结果
     */
    public $FileMd5;

    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配
     */
    public $DomainInstanceId;

    /**
     * @var string 回调地址，暂时未使用
     */
    public $CallBackUrl;

    /**
     * @param string $Url 文件下载链接，要求公网可访问，GET方式访问后为文件
     * @param string $FileName 文件名，带后缀
     * @param string $FileMd5  文件md5，传入相同md5会直接使用之前缓存的结果。

> 请注意：不同文件使用相同md5送检，会命中缓存得到旧的检测结果
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配
     * @param string $CallBackUrl 回调地址，暂时未使用
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("CallBackUrl",$param) and $param["CallBackUrl"] !== null) {
            $this->CallBackUrl = $param["CallBackUrl"];
        }
    }
}
