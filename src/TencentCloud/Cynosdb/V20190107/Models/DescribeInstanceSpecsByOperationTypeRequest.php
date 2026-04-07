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
 * DescribeInstanceSpecsByOperationType请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getOperationType() 获取操作类型
addROInstance：新增RO实例
modifyInstance：变配
 * @method void setOperationType(string $OperationType) 设置操作类型
addROInstance：新增RO实例
modifyInstance：变配
 * @method string getInstanceId() 获取实例ID，查询变配规格时必传
 * @method void setInstanceId(string $InstanceId) 设置实例ID，查询变配规格时必传
 * @method string getDeviceType() 获取实例机器类型
 * @method void setDeviceType(string $DeviceType) 设置实例机器类型
 */
class DescribeInstanceSpecsByOperationTypeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 操作类型
addROInstance：新增RO实例
modifyInstance：变配
     */
    public $OperationType;

    /**
     * @var string 实例ID，查询变配规格时必传
     */
    public $InstanceId;

    /**
     * @var string 实例机器类型
     */
    public $DeviceType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $OperationType 操作类型
addROInstance：新增RO实例
modifyInstance：变配
     * @param string $InstanceId 实例ID，查询变配规格时必传
     * @param string $DeviceType 实例机器类型
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
