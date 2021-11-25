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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * master节点缩容参数
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getNodeRole() 获取缩容的实例角色：MASTER,ETCD,MASTER_ETCD
 * @method void setNodeRole(string $NodeRole) 设置缩容的实例角色：MASTER,ETCD,MASTER_ETCD
 * @method string getInstanceDeleteMode() 获取实例的保留模式
 * @method void setInstanceDeleteMode(string $InstanceDeleteMode) 设置实例的保留模式
 */
class ScaleInMaster extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 缩容的实例角色：MASTER,ETCD,MASTER_ETCD
     */
    public $NodeRole;

    /**
     * @var string 实例的保留模式
     */
    public $InstanceDeleteMode;

    /**
     * @param string $InstanceId 实例ID
     * @param string $NodeRole 缩容的实例角色：MASTER,ETCD,MASTER_ETCD
     * @param string $InstanceDeleteMode 实例的保留模式
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

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("InstanceDeleteMode",$param) and $param["InstanceDeleteMode"] !== null) {
            $this->InstanceDeleteMode = $param["InstanceDeleteMode"];
        }
    }
}
