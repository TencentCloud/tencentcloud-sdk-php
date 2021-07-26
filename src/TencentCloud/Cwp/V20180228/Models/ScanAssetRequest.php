<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanAsset请求参数结构体
 *
 * @method array getAssetTypeIds() 获取资产指纹类型id列表
 * @method void setAssetTypeIds(array $AssetTypeIds) 设置资产指纹类型id列表
 * @method array getQuuids() 获取Quuid列表
 * @method void setQuuids(array $Quuids) 设置Quuid列表
 */
class ScanAssetRequest extends AbstractModel
{
    /**
     * @var array 资产指纹类型id列表
     */
    public $AssetTypeIds;

    /**
     * @var array Quuid列表
     */
    public $Quuids;

    /**
     * @param array $AssetTypeIds 资产指纹类型id列表
     * @param array $Quuids Quuid列表
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
        if (array_key_exists("AssetTypeIds",$param) and $param["AssetTypeIds"] !== null) {
            $this->AssetTypeIds = $param["AssetTypeIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
