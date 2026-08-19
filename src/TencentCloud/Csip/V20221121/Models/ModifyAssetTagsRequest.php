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
 * ModifyAssetTags请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getAssetRIDs() 获取资产RID列表
 * @method void setAssetRIDs(array $AssetRIDs) 设置资产RID列表
 * @method array getTagIDs() 获取标签ID列表
 * @method void setTagIDs(array $TagIDs) 设置标签ID列表
 * @method string getOperationType() 获取操作类型
 * @method void setOperationType(string $OperationType) 设置操作类型
 */
class ModifyAssetTagsRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array 资产RID列表
     */
    public $AssetRIDs;

    /**
     * @var array 标签ID列表
     */
    public $TagIDs;

    /**
     * @var string 操作类型
     */
    public $OperationType;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $AssetRIDs 资产RID列表
     * @param array $TagIDs 标签ID列表
     * @param string $OperationType 操作类型
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

        if (array_key_exists("AssetRIDs",$param) and $param["AssetRIDs"] !== null) {
            $this->AssetRIDs = $param["AssetRIDs"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
