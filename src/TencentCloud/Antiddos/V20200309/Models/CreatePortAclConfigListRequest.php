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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePortAclConfigList请求参数结构体
 *
 * @method array getInstanceIdList() 获取资源实例ID列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置资源实例ID列表
 * @method AclConfig getAclConfig() 获取端口acl策略
 * @method void setAclConfig(AclConfig $AclConfig) 设置端口acl策略
 */
class CreatePortAclConfigListRequest extends AbstractModel
{
    /**
     * @var array 资源实例ID列表
     */
    public $InstanceIdList;

    /**
     * @var AclConfig 端口acl策略
     */
    public $AclConfig;

    /**
     * @param array $InstanceIdList 资源实例ID列表
     * @param AclConfig $AclConfig 端口acl策略
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
        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("AclConfig",$param) and $param["AclConfig"] !== null) {
            $this->AclConfig = new AclConfig();
            $this->AclConfig->deserialize($param["AclConfig"]);
        }
    }
}
