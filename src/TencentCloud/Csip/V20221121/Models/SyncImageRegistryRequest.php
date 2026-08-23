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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncImageRegistry请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method boolean getAll() 获取<p>是否同步全部仓库</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setAll(boolean $All) 设置<p>是否同步全部仓库</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method array getRegistryIds() 获取<p>待同步的镜像仓库Id列表</p>
 * @method void setRegistryIds(array $RegistryIds) 设置<p>待同步的镜像仓库Id列表</p>
 */
class SyncImageRegistryRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>是否同步全部仓库</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $All;

    /**
     * @var array <p>待同步的镜像仓库Id列表</p>
     */
    public $RegistryIds;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param boolean $All <p>是否同步全部仓库</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param array $RegistryIds <p>待同步的镜像仓库Id列表</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("RegistryIds",$param) and $param["RegistryIds"] !== null) {
            $this->RegistryIds = $param["RegistryIds"];
        }
    }
}
