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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachDataMaskPolicy请求参数结构体
 *
 * @method array getDataMaskStrategyPolicySet() 获取要绑定的数据脱敏策略权限对象集合
 * @method void setDataMaskStrategyPolicySet(array $DataMaskStrategyPolicySet) 设置要绑定的数据脱敏策略权限对象集合
 */
class AttachDataMaskPolicyRequest extends AbstractModel
{
    /**
     * @var array 要绑定的数据脱敏策略权限对象集合
     */
    public $DataMaskStrategyPolicySet;

    /**
     * @param array $DataMaskStrategyPolicySet 要绑定的数据脱敏策略权限对象集合
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
        if (array_key_exists("DataMaskStrategyPolicySet",$param) and $param["DataMaskStrategyPolicySet"] !== null) {
            $this->DataMaskStrategyPolicySet = [];
            foreach ($param["DataMaskStrategyPolicySet"] as $key => $value){
                $obj = new DataMaskStrategyPolicy();
                $obj->deserialize($value);
                array_push($this->DataMaskStrategyPolicySet, $obj);
            }
        }
    }
}
