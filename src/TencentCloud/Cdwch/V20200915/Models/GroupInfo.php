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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群分组信息描述
 *
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getShardName() 获取分片变量名称
 * @method void setShardName(string $ShardName) 设置分片变量名称
 * @method string getReplicaName() 获取副本变量名称
 * @method void setReplicaName(string $ReplicaName) 设置副本变量名称
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 分片变量名称
     */
    public $ShardName;

    /**
     * @var string 副本变量名称
     */
    public $ReplicaName;

    /**
     * @param string $GroupName 分组名称
     * @param string $ShardName 分片变量名称
     * @param string $ReplicaName 副本变量名称
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ShardName",$param) and $param["ShardName"] !== null) {
            $this->ShardName = $param["ShardName"];
        }

        if (array_key_exists("ReplicaName",$param) and $param["ReplicaName"] !== null) {
            $this->ReplicaName = $param["ReplicaName"];
        }
    }
}
