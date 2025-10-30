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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRouteTableSelectionPolicies请求参数结构体
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method array getSelectionPolicies() 获取选择策略信息集合，表示需要按照当前的策略来修改。
 * @method void setSelectionPolicies(array $SelectionPolicies) 设置选择策略信息集合，表示需要按照当前的策略来修改。
 */
class ModifyRouteTableSelectionPoliciesRequest extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var array 选择策略信息集合，表示需要按照当前的策略来修改。
     */
    public $SelectionPolicies;

    /**
     * @param string $CcnId 云联网ID。
     * @param array $SelectionPolicies 选择策略信息集合，表示需要按照当前的策略来修改。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("SelectionPolicies",$param) and $param["SelectionPolicies"] !== null) {
            $this->SelectionPolicies = [];
            foreach ($param["SelectionPolicies"] as $key => $value){
                $obj = new CcnRouteTableSelectPolicy();
                $obj->deserialize($value);
                array_push($this->SelectionPolicies, $obj);
            }
        }
    }
}
