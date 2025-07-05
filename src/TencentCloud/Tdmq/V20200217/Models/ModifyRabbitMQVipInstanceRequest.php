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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQVipInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getClusterName() 获取集群名称，不填则不修改。非空字符串时必须 3-64 个字符，只能包含数字、字母、“-”和“_”
 * @method void setClusterName(string $ClusterName) 设置集群名称，不填则不修改。非空字符串时必须 3-64 个字符，只能包含数字、字母、“-”和“_”
 * @method string getRemark() 获取备注，不填则不修改
 * @method void setRemark(string $Remark) 设置备注，不填则不修改
 * @method boolean getEnableDeletionProtection() 获取是否开启删除保护，不填则不修改
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否开启删除保护，不填则不修改
 */
class ModifyRabbitMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 集群名称，不填则不修改。非空字符串时必须 3-64 个字符，只能包含数字、字母、“-”和“_”
     */
    public $ClusterName;

    /**
     * @var string 备注，不填则不修改
     */
    public $Remark;

    /**
     * @var boolean 是否开启删除保护，不填则不修改
     */
    public $EnableDeletionProtection;

    /**
     * @param string $InstanceId 实例Id
     * @param string $ClusterName 集群名称，不填则不修改。非空字符串时必须 3-64 个字符，只能包含数字、字母、“-”和“_”
     * @param string $Remark 备注，不填则不修改
     * @param boolean $EnableDeletionProtection 是否开启删除保护，不填则不修改
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

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
