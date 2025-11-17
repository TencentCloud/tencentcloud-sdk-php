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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例权重
 *
 * @method string getInstanceName() 获取实例名称，创建集群中InstanceInitInfo.InstanceName所指定名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称，创建集群中InstanceInitInfo.InstanceName所指定名称
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 */
class InstanceNameWeight extends AbstractModel
{
    /**
     * @var string 实例名称，创建集群中InstanceInitInfo.InstanceName所指定名称
     */
    public $InstanceName;

    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @param string $InstanceName 实例名称，创建集群中InstanceInitInfo.InstanceName所指定名称
     * @param integer $Weight 权重
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
