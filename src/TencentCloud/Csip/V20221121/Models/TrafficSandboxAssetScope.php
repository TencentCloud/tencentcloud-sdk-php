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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量沙箱生效资产元素
 *
 * @method string getInstanceId() 获取实例 ID，仅主机资产填写
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，仅主机资产填写
 * @method string getContainerId() 获取容器 ID，仅容器资产类型时填写
 * @method void setContainerId(string $ContainerId) 设置容器 ID，仅容器资产类型时填写
 */
class TrafficSandboxAssetScope extends AbstractModel
{
    /**
     * @var string 实例 ID，仅主机资产填写
     */
    public $InstanceId;

    /**
     * @var string 容器 ID，仅容器资产类型时填写
     */
    public $ContainerId;

    /**
     * @param string $InstanceId 实例 ID，仅主机资产填写
     * @param string $ContainerId 容器 ID，仅容器资产类型时填写
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

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }
    }
}
