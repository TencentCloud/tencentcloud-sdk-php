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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRole请求参数结构体
 *
 * @method string getRoleName() 获取角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
 * @method void setRoleName(string $RoleName) 设置角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
 * @method string getClusterId() 获取必填字段，集群Id
 * @method void setClusterId(string $ClusterId) 设置必填字段，集群Id
 * @method string getRemark() 获取备注说明，长度必须大等于0且小等于128。
 * @method void setRemark(string $Remark) 设置备注说明，长度必须大等于0且小等于128。
 * @method array getEnvironmentRoleSets() 获取批量绑定名字空间信息
 * @method void setEnvironmentRoleSets(array $EnvironmentRoleSets) 设置批量绑定名字空间信息
 * @method boolean getUnbindAllEnvironment() 获取全部解绑名字空间，设置为 true
 * @method void setUnbindAllEnvironment(boolean $UnbindAllEnvironment) 设置全部解绑名字空间，设置为 true
 */
class ModifyRoleRequest extends AbstractModel
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
     * @var array 批量绑定名字空间信息
     */
    public $EnvironmentRoleSets;

    /**
     * @var boolean 全部解绑名字空间，设置为 true
     */
    public $UnbindAllEnvironment;

    /**
     * @param string $RoleName 角色名称，不支持中字以及除了短线和下划线外的特殊字符且长度必须大于0且小等于32。
     * @param string $ClusterId 必填字段，集群Id
     * @param string $Remark 备注说明，长度必须大等于0且小等于128。
     * @param array $EnvironmentRoleSets 批量绑定名字空间信息
     * @param boolean $UnbindAllEnvironment 全部解绑名字空间，设置为 true
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

        if (array_key_exists("EnvironmentRoleSets",$param) and $param["EnvironmentRoleSets"] !== null) {
            $this->EnvironmentRoleSets = [];
            foreach ($param["EnvironmentRoleSets"] as $key => $value){
                $obj = new EnvironmentRoleSet();
                $obj->deserialize($value);
                array_push($this->EnvironmentRoleSets, $obj);
            }
        }

        if (array_key_exists("UnbindAllEnvironment",$param) and $param["UnbindAllEnvironment"] !== null) {
            $this->UnbindAllEnvironment = $param["UnbindAllEnvironment"];
        }
    }
}
