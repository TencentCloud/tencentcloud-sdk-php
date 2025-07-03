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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGroupsSTD请求参数结构体
 *
 * @method string getInstanceId() 获取集群名称
 * @method void setInstanceId(string $InstanceId) 设置集群名称
 * @method array getGroups() 获取批量用户组信息
 * @method void setGroups(array $Groups) 设置批量用户组信息
 */
class CreateGroupsSTDRequest extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $InstanceId;

    /**
     * @var array 批量用户组信息
     */
    public $Groups;

    /**
     * @param string $InstanceId 集群名称
     * @param array $Groups 批量用户组信息
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

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }
    }
}
