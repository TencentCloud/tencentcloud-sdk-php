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
 * @method string getRoleName() 获取<p>角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。</p>
 * @method string getClusterId() 获取<p>必填字段，集群Id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>必填字段，集群Id</p>
 * @method string getRemark() 获取<p>备注说明，长度必须大等于0且小等于128。</p>
 * @method void setRemark(string $Remark) 设置<p>备注说明，长度必须大等于0且小等于128。</p>
 * @method string getPermType() 获取<p>角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）</p>
 * @method void setPermType(string $PermType) 设置<p>角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）</p>
 * @method string getRoleGenerateMode() 获取<p>AK、SK的生成方式，AUTO：后端自动生成，MANUAL：用户手动输入</p>
 * @method void setRoleGenerateMode(string $RoleGenerateMode) 设置<p>AK、SK的生成方式，AUTO：后端自动生成，MANUAL：用户手动输入</p>
 * @method string getAccessKey() 获取<p>选择MANUAL模式下，需要手动输入AK值</p>
 * @method void setAccessKey(string $AccessKey) 设置<p>选择MANUAL模式下，需要手动输入AK值</p>
 * @method string getSecretKey() 获取<p>选择MANUAL模式下，需要手动输入SK值</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>选择MANUAL模式下，需要手动输入SK值</p>
 */
class CreateRocketMQRoleRequest extends AbstractModel
{
    /**
     * @var string <p>角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。</p>
     */
    public $RoleName;

    /**
     * @var string <p>必填字段，集群Id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>备注说明，长度必须大等于0且小等于128。</p>
     */
    public $Remark;

    /**
     * @var string <p>角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）</p>
     */
    public $PermType;

    /**
     * @var string <p>AK、SK的生成方式，AUTO：后端自动生成，MANUAL：用户手动输入</p>
     */
    public $RoleGenerateMode;

    /**
     * @var string <p>选择MANUAL模式下，需要手动输入AK值</p>
     */
    public $AccessKey;

    /**
     * @var string <p>选择MANUAL模式下，需要手动输入SK值</p>
     */
    public $SecretKey;

    /**
     * @param string $RoleName <p>角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。</p>
     * @param string $ClusterId <p>必填字段，集群Id</p>
     * @param string $Remark <p>备注说明，长度必须大等于0且小等于128。</p>
     * @param string $PermType <p>角色授权类型（集群：Cluster; 主题或消费组：TopicAndGroup）</p>
     * @param string $RoleGenerateMode <p>AK、SK的生成方式，AUTO：后端自动生成，MANUAL：用户手动输入</p>
     * @param string $AccessKey <p>选择MANUAL模式下，需要手动输入AK值</p>
     * @param string $SecretKey <p>选择MANUAL模式下，需要手动输入SK值</p>
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

        if (array_key_exists("RoleGenerateMode",$param) and $param["RoleGenerateMode"] !== null) {
            $this->RoleGenerateMode = $param["RoleGenerateMode"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
