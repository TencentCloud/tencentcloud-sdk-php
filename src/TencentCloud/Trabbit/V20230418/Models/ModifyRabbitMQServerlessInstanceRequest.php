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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQServerlessInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getClusterName() 获取集群名
 * @method void setClusterName(string $ClusterName) 设置集群名
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method boolean getTraceFlag() 获取是否开启trace
 * @method void setTraceFlag(boolean $TraceFlag) 设置是否开启trace
 */
class ModifyRabbitMQServerlessInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 集群名
     */
    public $ClusterName;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var boolean 是否开启trace
     */
    public $TraceFlag;

    /**
     * @param string $InstanceId 实例id
     * @param string $ClusterName 集群名
     * @param string $Remark 备注信息
     * @param boolean $TraceFlag 是否开启trace
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }
    }
}
