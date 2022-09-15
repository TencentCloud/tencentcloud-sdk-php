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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceName请求参数结构体
 *
 * @method string getInstanceId() 获取独享集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置独享集群实例Id
 * @method string getInstanceName() 获取独享集群实例名称
 * @method void setInstanceName(string $InstanceName) 设置独享集群实例名称
 */
class ModifyInstanceNameRequest extends AbstractModel
{
    /**
     * @var string 独享集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 独享集群实例名称
     */
    public $InstanceName;

    /**
     * @param string $InstanceId 独享集群实例Id
     * @param string $InstanceName 独享集群实例名称
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
