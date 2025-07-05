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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleUpInstance请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getSpecName() 获取节点规格
 * @method void setSpecName(string $SpecName) 设置节点规格
 * @method string getType() 获取角色（MASTER/CORE），MASTER 对应 FE，CORE对应BE
 * @method void setType(string $Type) 设置角色（MASTER/CORE），MASTER 对应 FE，CORE对应BE
 * @method boolean getCheckAuth() 获取前端鉴权使用，后端API调用传false，传true不会执行变配
 * @method void setCheckAuth(boolean $CheckAuth) 设置前端鉴权使用，后端API调用传false，传true不会执行变配
 * @method boolean getRollingRestart() 获取是否滚动重启
 * @method void setRollingRestart(boolean $RollingRestart) 设置是否滚动重启
 */
class ScaleUpInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 节点规格
     */
    public $SpecName;

    /**
     * @var string 角色（MASTER/CORE），MASTER 对应 FE，CORE对应BE
     */
    public $Type;

    /**
     * @var boolean 前端鉴权使用，后端API调用传false，传true不会执行变配
     */
    public $CheckAuth;

    /**
     * @var boolean 是否滚动重启
     */
    public $RollingRestart;

    /**
     * @param string $InstanceId 集群ID
     * @param string $SpecName 节点规格
     * @param string $Type 角色（MASTER/CORE），MASTER 对应 FE，CORE对应BE
     * @param boolean $CheckAuth 前端鉴权使用，后端API调用传false，传true不会执行变配
     * @param boolean $RollingRestart 是否滚动重启
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

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CheckAuth",$param) and $param["CheckAuth"] !== null) {
            $this->CheckAuth = $param["CheckAuth"];
        }

        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            $this->RollingRestart = $param["RollingRestart"];
        }
    }
}
