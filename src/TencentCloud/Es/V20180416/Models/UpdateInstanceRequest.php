<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取要操作的实例ID
 * @method void setInstanceId(string $InstanceId) 设置要操作的实例ID
 * @method string getInstanceName() 获取修改后的实例名称
 * @method void setInstanceName(string $InstanceName) 设置修改后的实例名称
 * @method integer getNodeNum() 获取横向扩缩容后的节点个数
 * @method void setNodeNum(integer $NodeNum) 设置横向扩缩容后的节点个数
 * @method string getEsConfig() 获取修改后的配置项
 * @method void setEsConfig(string $EsConfig) 设置修改后的配置项
 * @method string getPassword() 获取重置后的用户密码
 * @method void setPassword(string $Password) 设置重置后的用户密码
 * @method string getEsAcl() 获取修改后的访问控制列表
 * @method void setEsAcl(string $EsAcl) 设置修改后的访问控制列表
 */

/**
 *UpdateInstance请求参数结构体
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 要操作的实例ID
     */
    public $InstanceId;

    /**
     * @var string 修改后的实例名称
     */
    public $InstanceName;

    /**
     * @var integer 横向扩缩容后的节点个数
     */
    public $NodeNum;

    /**
     * @var string 修改后的配置项
     */
    public $EsConfig;

    /**
     * @var string 重置后的用户密码
     */
    public $Password;

    /**
     * @var string 修改后的访问控制列表
     */
    public $EsAcl;
    /**
     * @param string $InstanceId 要操作的实例ID
     * @param string $InstanceName 修改后的实例名称
     * @param integer $NodeNum 横向扩缩容后的节点个数
     * @param string $EsConfig 修改后的配置项
     * @param string $Password 重置后的用户密码
     * @param string $EsAcl 修改后的访问控制列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = $param["EsAcl"];
        }
    }
}
