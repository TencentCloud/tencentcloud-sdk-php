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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGovernanceInstances请求参数结构体
 *
 * @method string getInstanceId() 获取<p>tse实例id。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>tse实例id。</p>
 * @method array getGovernanceInstances() 获取<p>服务实例信息。</p>
 * @method void setGovernanceInstances(array $GovernanceInstances) 设置<p>服务实例信息。</p>
 */
class ModifyGovernanceInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>tse实例id。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>服务实例信息。</p>
     */
    public $GovernanceInstances;

    /**
     * @param string $InstanceId <p>tse实例id。</p>
     * @param array $GovernanceInstances <p>服务实例信息。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GovernanceInstances",$param) and $param["GovernanceInstances"] !== null) {
            $this->GovernanceInstances = [];
            foreach ($param["GovernanceInstances"] as $key => $value){
                $obj = new GovernanceInstanceUpdate();
                $obj->deserialize($value);
                array_push($this->GovernanceInstances, $obj);
            }
        }
    }
}
