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
 * DescribeRabbitMQUser请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getSearchUser() 获取用户名检索，支持前缀匹配，后缀匹配
 * @method void setSearchUser(string $SearchUser) 设置用户名检索，支持前缀匹配，后缀匹配
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method string getUser() 获取用户名，精确查询
 * @method void setUser(string $User) 设置用户名，精确查询
 * @method array getTags() 获取用户标签，根据标签过滤列表
 * @method void setTags(array $Tags) 设置用户标签，根据标签过滤列表
 */
class DescribeRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 用户名检索，支持前缀匹配，后缀匹配
     */
    public $SearchUser;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var string 用户名，精确查询
     */
    public $User;

    /**
     * @var array 用户标签，根据标签过滤列表
     */
    public $Tags;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $SearchUser 用户名检索，支持前缀匹配，后缀匹配
     * @param integer $Offset 分页Offset
     * @param integer $Limit 分页Limit
     * @param string $User 用户名，精确查询
     * @param array $Tags 用户标签，根据标签过滤列表
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

        if (array_key_exists("SearchUser",$param) and $param["SearchUser"] !== null) {
            $this->SearchUser = $param["SearchUser"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
