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
 * @method string getStorageType() 获取<p>存储类型（目前支持 cos、cls、ckafka）</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型（目前支持 cos、cls、ckafka）</p>
 * @method string getStorageRegion() 获取<p>存储所在地域</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>存储所在地域</p>
 * @method string getStorageName() 获取<p>存储名称(cos：存储名称为用户自定义的存储桶名称，不包含&quot;-APPID&quot;，仅支持小写字母、数字以及中划线&quot;-&quot;的组合，不能超过50字符，且不支持中划线&quot;-&quot;开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符； ckafka： ckafka实例ID/topic. 举例：ckafka-xxxxxx/tencent_test_audit_log)</p>
 * @method void setStorageName(string $StorageName) 设置<p>存储名称(cos：存储名称为用户自定义的存储桶名称，不包含&quot;-APPID&quot;，仅支持小写字母、数字以及中划线&quot;-&quot;的组合，不能超过50字符，且不支持中划线&quot;-&quot;开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符； ckafka： ckafka实例ID/topic. 举例：ckafka-xxxxxx/tencent_test_audit_log)</p>
 * @method string getStoragePrefix() 获取<p>存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符</p>
 * @method void setStoragePrefix(string $StoragePrefix) 设置<p>存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符</p>
 * @method string getStorageAccountId() 获取<p>被指定存储用户ID</p>
 * @method void setStorageAccountId(string $StorageAccountId) 设置<p>被指定存储用户ID</p>
 * @method string getStorageAppId() 获取<p>被指定存储用户appid</p>
 * @method void setStorageAppId(string $StorageAppId) 设置<p>被指定存储用户appid</p>
 * @method integer getCompress() 获取<p>是否压缩。<br>1:压缩  2:不压缩</p>
 * @method void setCompress(integer $Compress) 设置<p>是否压缩。<br>1:压缩  2:不压缩</p>
 */
class Storage extends AbstractModel
{
    /**
     * @var string <p>存储类型（目前支持 cos、cls、ckafka）</p>
     */
    public $StorageType;

    /**
     * @var string <p>存储所在地域</p>
     */
    public $StorageRegion;

    /**
     * @var string <p>存储名称(cos：存储名称为用户自定义的存储桶名称，不包含&quot;-APPID&quot;，仅支持小写字母、数字以及中划线&quot;-&quot;的组合，不能超过50字符，且不支持中划线&quot;-&quot;开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符； ckafka： ckafka实例ID/topic. 举例：ckafka-xxxxxx/tencent_test_audit_log)</p>
     */
    public $StorageName;

    /**
     * @var string <p>存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符</p>
     */
    public $StoragePrefix;

    /**
     * @var string <p>被指定存储用户ID</p>
     */
    public $StorageAccountId;

    /**
     * @var string <p>被指定存储用户appid</p>
     */
    public $StorageAppId;

    /**
     * @var integer <p>是否压缩。<br>1:压缩  2:不压缩</p>
     */
    public $Compress;

    /**
     * @param string $StorageType <p>存储类型（目前支持 cos、cls、ckafka）</p>
     * @param string $StorageRegion <p>存储所在地域</p>
     * @param string $StorageName <p>存储名称(cos：存储名称为用户自定义的存储桶名称，不包含&quot;-APPID&quot;，仅支持小写字母、数字以及中划线&quot;-&quot;的组合，不能超过50字符，且不支持中划线&quot;-&quot;开头或结尾； cls：存储名称为日志主题id，字符长度为1-50个字符； ckafka： ckafka实例ID/topic. 举例：ckafka-xxxxxx/tencent_test_audit_log)</p>
     * @param string $StoragePrefix <p>存储目录前缀，cos日志文件前缀仅支持字母和数字的组合，3-40个字符</p>
     * @param string $StorageAccountId <p>被指定存储用户ID</p>
     * @param string $StorageAppId <p>被指定存储用户appid</p>
     * @param integer $Compress <p>是否压缩。<br>1:压缩  2:不压缩</p>
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
