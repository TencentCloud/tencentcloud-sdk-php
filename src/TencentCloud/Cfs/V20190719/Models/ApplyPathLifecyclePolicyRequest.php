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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyPathLifecyclePolicy请求参数结构体
 *
 * @method string getLifecyclePolicyID() 获取生命周期管理策略ID
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) 设置生命周期管理策略ID
 * @method array getPaths() 获取生命周期管理策略关联目录的绝对路径列表
 * @method void setPaths(array $Paths) 设置生命周期管理策略关联目录的绝对路径列表
 */
class ApplyPathLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string 生命周期管理策略ID
     */
    public $LifecyclePolicyID;

    /**
     * @var array 生命周期管理策略关联目录的绝对路径列表
     */
    public $Paths;

    /**
     * @param string $LifecyclePolicyID 生命周期管理策略ID
     * @param array $Paths 生命周期管理策略关联目录的绝对路径列表
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
        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = [];
            foreach ($param["Paths"] as $key => $value){
                $obj = new PathInfo();
                $obj->deserialize($value);
                array_push($this->Paths, $obj);
            }
        }
    }
}
