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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件存储
 *
 * @method integer getStorageType() 获取存储类型
 * @method void setStorageType(integer $StorageType) 设置存储类型
 * @method string getStoragePath() 获取存储路径
 * @method void setStoragePath(string $StoragePath) 设置存储路径
 * @method string getContent() 获取文件内容
 * @method void setContent(string $Content) 设置文件内容
 */
class FileStorage extends AbstractModel
{
    /**
     * @var integer 存储类型
     */
    public $StorageType;

    /**
     * @var string 存储路径
     */
    public $StoragePath;

    /**
     * @var string 文件内容
     */
    public $Content;

    /**
     * @param integer $StorageType 存储类型
     * @param string $StoragePath 存储路径
     * @param string $Content 文件内容
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

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
