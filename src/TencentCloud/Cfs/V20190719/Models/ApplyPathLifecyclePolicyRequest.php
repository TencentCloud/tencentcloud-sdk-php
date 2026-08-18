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
 * @method string getLifecyclePolicyID() 获取<p>生命周期管理策略ID</p>
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) 设置<p>生命周期管理策略ID</p>
 * @method array getPaths() 获取<p>生命周期管理策略所关联的目录路径列表，每个路径必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。</p><p>示例：</p><ul><li>若挂载的是CFS根目录 /，需关联挂载路径下的 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需关联挂载路径下的 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul>
 * @method void setPaths(array $Paths) 设置<p>生命周期管理策略所关联的目录路径列表，每个路径必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。</p><p>示例：</p><ul><li>若挂载的是CFS根目录 /，需关联挂载路径下的 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需关联挂载路径下的 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul>
 */
class ApplyPathLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>生命周期管理策略ID</p>
     */
    public $LifecyclePolicyID;

    /**
     * @var array <p>生命周期管理策略所关联的目录路径列表，每个路径必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。</p><p>示例：</p><ul><li>若挂载的是CFS根目录 /，需关联挂载路径下的 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需关联挂载路径下的 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul>
     */
    public $Paths;

    /**
     * @param string $LifecyclePolicyID <p>生命周期管理策略ID</p>
     * @param array $Paths <p>生命周期管理策略所关联的目录路径列表，每个路径必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。</p><p>示例：</p><ul><li>若挂载的是CFS根目录 /，需关联挂载路径下的 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需关联挂载路径下的 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul>
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
