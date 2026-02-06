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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 挂载存储配置
 *
 * @method CosStorageSource getCos() 获取对象存储桶配置
 * @method void setCos(CosStorageSource $Cos) 设置对象存储桶配置
 * @method ImageStorageSource getImage() 获取镜像卷配置
 * @method void setImage(ImageStorageSource $Image) 设置镜像卷配置
 * @method CfsStorageSource getCfs() 获取文件存储配置
 * @method void setCfs(CfsStorageSource $Cfs) 设置文件存储配置
 */
class StorageSource extends AbstractModel
{
    /**
     * @var CosStorageSource 对象存储桶配置
     */
    public $Cos;

    /**
     * @var ImageStorageSource 镜像卷配置
     */
    public $Image;

    /**
     * @var CfsStorageSource 文件存储配置
     */
    public $Cfs;

    /**
     * @param CosStorageSource $Cos 对象存储桶配置
     * @param ImageStorageSource $Image 镜像卷配置
     * @param CfsStorageSource $Cfs 文件存储配置
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
        if (array_key_exists("Cos",$param) and $param["Cos"] !== null) {
            $this->Cos = new CosStorageSource();
            $this->Cos->deserialize($param["Cos"]);
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageStorageSource();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Cfs",$param) and $param["Cfs"] !== null) {
            $this->Cfs = new CfsStorageSource();
            $this->Cfs->deserialize($param["Cfs"]);
        }
    }
}
