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
 * CreateRocketMQRole请求参数结构体
 *
 * @method string getRoleName() 获取角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
 * @method void setRoleName(string $RoleName) 设置角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
 * @method string getClusterId() 获取必填字段，集群Id
 * @method void setClusterId(string $ClusterId) 设置必填字段，集群Id
 * @method string getRemark() 获取备注说明，长度必须大等于0且小等于128。
 * @method void setRemark(string $Remark) 设置备注说明，长度必须大等于0且小等于128。
 * @method string getPermType() 获取角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）
 * @method void setPermType(string $PermType) 设置角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）
 */
class CreateRocketMQRoleRequest extends AbstractModel
{
    /**
     * @var string 角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
     */
    public $RoleName;

    /**
     * @var string 必填字段，集群Id
     */
    public $ClusterId;

    /**
     * @var string 备注说明，长度必须大等于0且小等于128。
     */
    public $Remark;

    /**
     * @var string 角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）
     */
    public $PermType;

    /**
     * @param string $RoleName 角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
     * @param string $ClusterId 必填字段，集群Id
     * @param string $Remark 备注说明，长度必须大等于0且小等于128。
     * @param string $PermType 角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }
    }
}
