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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAndroidInstanceBackupFiles请求参数结构体
 *
 * @method array getObjectKeys() 获取文件对象键列表
 * @method void setObjectKeys(array $ObjectKeys) 设置文件对象键列表
 * @method string getStorageType() 获取存储服务器类型，如 COS、S3。注意：使用 COS 和 S3 都将占用外网带宽。
 * @method void setStorageType(string $StorageType) 设置存储服务器类型，如 COS、S3。注意：使用 COS 和 S3 都将占用外网带宽。
 * @method COSOptions getCOSOptions() 获取COS协议选项
 * @method void setCOSOptions(COSOptions $COSOptions) 设置COS协议选项
 * @method S3Options getS3Options() 获取S3存储协议选项
 * @method void setS3Options(S3Options $S3Options) 设置S3存储协议选项
 * @method string getAndroidInstanceZone() 获取安卓实例可用区。StorageType 为 S3 时，需要填写该字段；StorageType 为 COS 时，不需要填写该字段
 * @method void setAndroidInstanceZone(string $AndroidInstanceZone) 设置安卓实例可用区。StorageType 为 S3 时，需要填写该字段；StorageType 为 COS 时，不需要填写该字段
 */
class DeleteAndroidInstanceBackupFilesRequest extends AbstractModel
{
    /**
     * @var array 文件对象键列表
     */
    public $ObjectKeys;

    /**
     * @var string 存储服务器类型，如 COS、S3。注意：使用 COS 和 S3 都将占用外网带宽。
     */
    public $StorageType;

    /**
     * @var COSOptions COS协议选项
     */
    public $COSOptions;

    /**
     * @var S3Options S3存储协议选项
     */
    public $S3Options;

    /**
     * @var string 安卓实例可用区。StorageType 为 S3 时，需要填写该字段；StorageType 为 COS 时，不需要填写该字段
     */
    public $AndroidInstanceZone;

    /**
     * @param array $ObjectKeys 文件对象键列表
     * @param string $StorageType 存储服务器类型，如 COS、S3。注意：使用 COS 和 S3 都将占用外网带宽。
     * @param COSOptions $COSOptions COS协议选项
     * @param S3Options $S3Options S3存储协议选项
     * @param string $AndroidInstanceZone 安卓实例可用区。StorageType 为 S3 时，需要填写该字段；StorageType 为 COS 时，不需要填写该字段
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
        if (array_key_exists("ObjectKeys",$param) and $param["ObjectKeys"] !== null) {
            $this->ObjectKeys = $param["ObjectKeys"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("COSOptions",$param) and $param["COSOptions"] !== null) {
            $this->COSOptions = new COSOptions();
            $this->COSOptions->deserialize($param["COSOptions"]);
        }

        if (array_key_exists("S3Options",$param) and $param["S3Options"] !== null) {
            $this->S3Options = new S3Options();
            $this->S3Options->deserialize($param["S3Options"]);
        }

        if (array_key_exists("AndroidInstanceZone",$param) and $param["AndroidInstanceZone"] !== null) {
            $this->AndroidInstanceZone = $param["AndroidInstanceZone"];
        }
    }
}
