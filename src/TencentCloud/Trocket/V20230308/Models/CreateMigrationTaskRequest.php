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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMigrationTask请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method integer getType() 获取0 - 未指定（存量）
1 - 元数据导入
 * @method void setType(integer $Type) 设置0 - 未指定（存量）
1 - 元数据导入
 * @method array getTopics() 获取待导入的消费组列表
 * @method void setTopics(array $Topics) 设置待导入的消费组列表
 * @method array getGroups() 获取待导入的消费组列表
 * @method void setGroups(array $Groups) 设置待导入的消费组列表
 * @method array getRoles() 获取待导入的角色列表
 * @method void setRoles(array $Roles) 设置待导入的角色列表
 */
class CreateMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var integer 0 - 未指定（存量）
1 - 元数据导入
     */
    public $Type;

    /**
     * @var array 待导入的消费组列表
     */
    public $Topics;

    /**
     * @var array 待导入的消费组列表
     */
    public $Groups;

    /**
     * @var array 待导入的角色列表
     */
    public $Roles;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param integer $Type 0 - 未指定（存量）
1 - 元数据导入
     * @param array $Topics 待导入的消费组列表
     * @param array $Groups 待导入的消费组列表
     * @param array $Roles 待导入的角色列表
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new TopicItem();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new ConsumeGroupItem();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleItem();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }
    }
}
