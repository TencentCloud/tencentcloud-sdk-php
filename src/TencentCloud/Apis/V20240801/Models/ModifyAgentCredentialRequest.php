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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentCredential请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>certify id</p>
 * @method void setID(string $ID) 设置<p>certify id</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method AgentCredentialContentDTO getContent() 获取<p>具体内容</p>
 * @method void setContent(AgentCredentialContentDTO $Content) 设置<p>具体内容</p>
 */
class ModifyAgentCredentialRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>certify id</p>
     */
    public $ID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var AgentCredentialContentDTO <p>具体内容</p>
     */
    public $Content;

    /**
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>certify id</p>
     * @param string $Name <p>名称</p>
     * @param string $Type <p>类型</p>
     * @param AgentCredentialContentDTO $Content <p>具体内容</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new AgentCredentialContentDTO();
            $this->Content->deserialize($param["Content"]);
        }
    }
}
