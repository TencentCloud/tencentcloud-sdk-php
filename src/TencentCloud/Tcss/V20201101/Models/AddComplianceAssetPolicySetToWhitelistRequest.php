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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddComplianceAssetPolicySetToWhitelist请求参数结构体
 *
 * @method array getAssetPolicySetList() 获取资产ID+检查项IDs. 列表
 * @method void setAssetPolicySetList(array $AssetPolicySetList) 设置资产ID+检查项IDs. 列表
 */
class AddComplianceAssetPolicySetToWhitelistRequest extends AbstractModel
{
    /**
     * @var array 资产ID+检查项IDs. 列表
     */
    public $AssetPolicySetList;

    /**
     * @param array $AssetPolicySetList 资产ID+检查项IDs. 列表
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
        if (array_key_exists("AssetPolicySetList",$param) and $param["AssetPolicySetList"] !== null) {
            $this->AssetPolicySetList = [];
            foreach ($param["AssetPolicySetList"] as $key => $value){
                $obj = new ComplianceAssetPolicySetItem();
                $obj->deserialize($value);
                array_push($this->AssetPolicySetList, $obj);
            }
        }
    }
}
