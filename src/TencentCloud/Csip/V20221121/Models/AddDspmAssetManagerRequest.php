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
 * AddDspmAssetManager请求参数结构体
 *
 * @method array getIdentifyIds() 获取管理员uin
 * @method void setIdentifyIds(array $IdentifyIds) 设置管理员uin
 * @method array getAssetId() 获取资产id
 * @method void setAssetId(array $AssetId) 设置资产id
 */
class AddDspmAssetManagerRequest extends AbstractModel
{
    /**
     * @var array 管理员uin
     */
    public $IdentifyIds;

    /**
     * @var array 资产id
     */
    public $AssetId;

    /**
     * @param array $IdentifyIds 管理员uin
     * @param array $AssetId 资产id
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
        if (array_key_exists("IdentifyIds",$param) and $param["IdentifyIds"] !== null) {
            $this->IdentifyIds = $param["IdentifyIds"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }
    }
}
