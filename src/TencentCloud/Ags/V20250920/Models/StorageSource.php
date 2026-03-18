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
 * @method CosStorageSource getCos() 获取<p>对象存储桶配置</p>
 * @method void setCos(CosStorageSource $Cos) 设置<p>对象存储桶配置</p>
 * @method ImageStorageSource getImage() 获取<p>镜像卷配置</p>
 * @method void setImage(ImageStorageSource $Image) 设置<p>镜像卷配置</p>
 * @method CfsStorageSource getCfs() 获取<p>文件存储配置</p>
 * @method void setCfs(CfsStorageSource $Cfs) 设置<p>文件存储配置</p>
 */
class StorageSource extends AbstractModel
{
    /**
     * @var CosStorageSource <p>对象存储桶配置</p>
     */
    public $Cos;

    /**
     * @var ImageStorageSource <p>镜像卷配置</p>
     */
    public $Image;

    /**
     * @var CfsStorageSource <p>文件存储配置</p>
     */
    public $Cfs;

    /**
     * @param CosStorageSource $Cos <p>对象存储桶配置</p>
     * @param ImageStorageSource $Image <p>镜像卷配置</p>
     * @param CfsStorageSource $Cfs <p>文件存储配置</p>
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
