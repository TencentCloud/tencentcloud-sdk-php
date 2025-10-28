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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跟踪集存储信息
 *
 * @method string getStorageType() 获取存储类型（目前支持 cos、cls）
 * @method void setStorageType(string $StorageType) 设置存储类型（目前支持 cos、cls）
 * @method string getStorageRegion() 获取存储所在地域
 * @method void setStorageRegion(string $StorageRegion) 设置存储所在地域
 * @method string getStorageName() 获取存储名称(cos：存储名称为用户自定义的存储桶名称，不包含"-APPID"，仅支持小写字母、数字以及中划线"-"的组合，不能超过50字符，且不支持中划线"-"开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符)
 * @method void setStorageName(string $StorageName) 设置存储名称(cos：存储名称为用户自定义的存储桶名称，不包含"-APPID"，仅支持小写字母、数字以及中划线"-"的组合，不能超过50字符，且不支持中划线"-"开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符)
 * @method string getStoragePrefix() 获取存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符
 * @method void setStoragePrefix(string $StoragePrefix) 设置存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符
 * @method string getStorageAccountId() 获取被指定存储用户ID
 * @method void setStorageAccountId(string $StorageAccountId) 设置被指定存储用户ID
 * @method string getStorageAppId() 获取被指定存储用户appid
 * @method void setStorageAppId(string $StorageAppId) 设置被指定存储用户appid
 * @method integer getCompress() 获取是否压缩。
1:压缩  2:不压缩
 * @method void setCompress(integer $Compress) 设置是否压缩。
1:压缩  2:不压缩
 */
class Storage extends AbstractModel
{
    /**
     * @var string 存储类型（目前支持 cos、cls）
     */
    public $StorageType;

    /**
     * @var string 存储所在地域
     */
    public $StorageRegion;

    /**
     * @var string 存储名称(cos：存储名称为用户自定义的存储桶名称，不包含"-APPID"，仅支持小写字母、数字以及中划线"-"的组合，不能超过50字符，且不支持中划线"-"开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符)
     */
    public $StorageName;

    /**
     * @var string 存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符
     */
    public $StoragePrefix;

    /**
     * @var string 被指定存储用户ID
     */
    public $StorageAccountId;

    /**
     * @var string 被指定存储用户appid
     */
    public $StorageAppId;

    /**
     * @var integer 是否压缩。
1:压缩  2:不压缩
     */
    public $Compress;

    /**
     * @param string $StorageType 存储类型（目前支持 cos、cls）
     * @param string $StorageRegion 存储所在地域
     * @param string $StorageName 存储名称(cos：存储名称为用户自定义的存储桶名称，不包含"-APPID"，仅支持小写字母、数字以及中划线"-"的组合，不能超过50字符，且不支持中划线"-"开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符)
     * @param string $StoragePrefix 存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符
     * @param string $StorageAccountId 被指定存储用户ID
     * @param string $StorageAppId 被指定存储用户appid
     * @param integer $Compress 是否压缩。
1:压缩  2:不压缩
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("StoragePrefix",$param) and $param["StoragePrefix"] !== null) {
            $this->StoragePrefix = $param["StoragePrefix"];
        }

        if (array_key_exists("StorageAccountId",$param) and $param["StorageAccountId"] !== null) {
            $this->StorageAccountId = $param["StorageAccountId"];
        }

        if (array_key_exists("StorageAppId",$param) and $param["StorageAppId"] !== null) {
            $this->StorageAppId = $param["StorageAppId"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }
    }
}
