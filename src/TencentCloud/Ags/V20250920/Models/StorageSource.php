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
 */
class StorageSource extends AbstractModel
{
    /**
     * @var CosStorageSource 对象存储桶配置
     */
    public $Cos;

    /**
     * @param CosStorageSource $Cos 对象存储桶配置
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
    }
}
