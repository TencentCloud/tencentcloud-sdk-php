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
 * ModifyAssetTagsByAssetInfo请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getAssets() 获取<p>资产列表</p>
 * @method void setAssets(array $Assets) 设置<p>资产列表</p>
 * @method array getTagIDs() 获取<p>标签ID列表</p>
 * @method void setTagIDs(array $TagIDs) 设置<p>标签ID列表</p>
 * @method string getOperationType() 获取<p>操作类型</p>
 * @method void setOperationType(string $OperationType) 设置<p>操作类型</p>
 */
class ModifyAssetTagsByAssetInfoRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>资产列表</p>
     */
    public $Assets;

    /**
     * @var array <p>标签ID列表</p>
     */
    public $TagIDs;

    /**
     * @var string <p>操作类型</p>
     */
    public $OperationType;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Assets <p>资产列表</p>
     * @param array $TagIDs <p>标签ID列表</p>
     * @param string $OperationType <p>操作类型</p>
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

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new AssetTagModifyAssetItem();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
