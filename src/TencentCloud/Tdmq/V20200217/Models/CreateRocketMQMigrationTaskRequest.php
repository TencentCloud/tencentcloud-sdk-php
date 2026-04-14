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
 * CreateRocketMQMigrationTask请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getType() 获取<p>任务类型：<br>0，集群迁移<br>1，导入到指定命名空间</p>
 * @method void setType(integer $Type) 设置<p>任务类型：<br>0，集群迁移<br>1，导入到指定命名空间</p>
 * @method array getTopics() 获取<p>待导入的主题列表</p>
 * @method void setTopics(array $Topics) 设置<p>待导入的主题列表</p>
 * @method array getGroups() 获取<p>待导入的消费组列表</p>
 * @method void setGroups(array $Groups) 设置<p>待导入的消费组列表</p>
 * @method array getRoles() 获取<p>待导入的角色列表</p>
 * @method void setRoles(array $Roles) 设置<p>待导入的角色列表</p>
 * @method string getNamespace() 获取<p>指定导入的命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>指定导入的命名空间</p>
 */
class CreateRocketMQMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>任务类型：<br>0，集群迁移<br>1，导入到指定命名空间</p>
     */
    public $Type;

    /**
     * @var array <p>待导入的主题列表</p>
     */
    public $Topics;

    /**
     * @var array <p>待导入的消费组列表</p>
     */
    public $Groups;

    /**
     * @var array <p>待导入的角色列表</p>
     */
    public $Roles;

    /**
     * @var string <p>指定导入的命名空间</p>
     */
    public $Namespace;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $Type <p>任务类型：<br>0，集群迁移<br>1，导入到指定命名空间</p>
     * @param array $Topics <p>待导入的主题列表</p>
     * @param array $Groups <p>待导入的消费组列表</p>
     * @param array $Roles <p>待导入的角色列表</p>
     * @param string $Namespace <p>指定导入的命名空间</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new RocketMQTopicConfig();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new RocketMQGroupConfig();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RocketMQRoleConfig();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
