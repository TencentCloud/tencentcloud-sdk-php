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
 * postgresql可选参数
 *
 * @method string getPGSpec() 获取<p>规格</p>
 * @method void setPGSpec(string $PGSpec) 设置<p>规格</p>
 * @method integer getPGStorage() 获取<p>磁盘大小</p><p>单位：GB</p>
 * @method void setPGStorage(integer $PGStorage) 设置<p>磁盘大小</p><p>单位：GB</p>
 * @method string getTenantType() 获取<p>实例类型（独享/共享）</p><p>参数格式：SHARED：共享，DEDICATED：独享； 仅满足要求的套餐支持独享；仅有独享pg支持指定pg参数（如规格、磁盘）</p>
 * @method void setTenantType(string $TenantType) 设置<p>实例类型（独享/共享）</p><p>参数格式：SHARED：共享，DEDICATED：独享； 仅满足要求的套餐支持独享；仅有独享pg支持指定pg参数（如规格、磁盘）</p>
 */
class PGConfig extends AbstractModel
{
    /**
     * @var string <p>规格</p>
     */
    public $PGSpec;

    /**
     * @var integer <p>磁盘大小</p><p>单位：GB</p>
     */
    public $PGStorage;

    /**
     * @var string <p>实例类型（独享/共享）</p><p>参数格式：SHARED：共享，DEDICATED：独享； 仅满足要求的套餐支持独享；仅有独享pg支持指定pg参数（如规格、磁盘）</p>
     */
    public $TenantType;

    /**
     * @param string $PGSpec <p>规格</p>
     * @param integer $PGStorage <p>磁盘大小</p><p>单位：GB</p>
     * @param string $TenantType <p>实例类型（独享/共享）</p><p>参数格式：SHARED：共享，DEDICATED：独享； 仅满足要求的套餐支持独享；仅有独享pg支持指定pg参数（如规格、磁盘）</p>
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
        if (array_key_exists("PGSpec",$param) and $param["PGSpec"] !== null) {
            $this->PGSpec = $param["PGSpec"];
        }

        if (array_key_exists("PGStorage",$param) and $param["PGStorage"] !== null) {
            $this->PGStorage = $param["PGStorage"];
        }

        if (array_key_exists("TenantType",$param) and $param["TenantType"] !== null) {
            $this->TenantType = $param["TenantType"];
        }
    }
}
