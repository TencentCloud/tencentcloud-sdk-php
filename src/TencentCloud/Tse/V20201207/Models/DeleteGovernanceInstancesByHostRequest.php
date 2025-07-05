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
 * DeleteGovernanceInstancesByHost请求参数结构体
 *
 * @method string getInstanceId() 获取tse实例id。
 * @method void setInstanceId(string $InstanceId) 设置tse实例id。
 * @method array getGovernanceInstances() 获取要删除的服务实例信息。
 * @method void setGovernanceInstances(array $GovernanceInstances) 设置要删除的服务实例信息。
 */
class DeleteGovernanceInstancesByHostRequest extends AbstractModel
{
    /**
     * @var string tse实例id。
     */
    public $InstanceId;

    /**
     * @var array 要删除的服务实例信息。
     */
    public $GovernanceInstances;

    /**
     * @param string $InstanceId tse实例id。
     * @param array $GovernanceInstances 要删除的服务实例信息。
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
