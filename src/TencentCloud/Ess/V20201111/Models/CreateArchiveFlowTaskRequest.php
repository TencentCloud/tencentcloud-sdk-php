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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateArchiveFlowTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getArchiveFlows() 获取<p>归档合同列表，一次最多支持50个合同</p>
 * @method void setArchiveFlows(array $ArchiveFlows) 设置<p>归档合同列表，一次最多支持50个合同</p>
 */
class CreateArchiveFlowTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>归档合同列表，一次最多支持50个合同</p>
     */
    public $ArchiveFlows;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $ArchiveFlows <p>归档合同列表，一次最多支持50个合同</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ArchiveFlows",$param) and $param["ArchiveFlows"] !== null) {
            $this->ArchiveFlows = [];
            foreach ($param["ArchiveFlows"] as $key => $value){
                $obj = new CreateArchiveFlow();
                $obj->deserialize($value);
                array_push($this->ArchiveFlows, $obj);
            }
        }
    }
}
