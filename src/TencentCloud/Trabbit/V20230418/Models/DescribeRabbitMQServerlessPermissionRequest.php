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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessPermission请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例id
 * @method void setInstanceId(string $InstanceId) 设置集群实例id
 * @method string getUser() 获取用户名，用于查询过滤，不传则查询全部
 * @method void setUser(string $User) 设置用户名，用于查询过滤，不传则查询全部
 * @method string getVirtualHost() 获取vhost名，用于查询过滤，不传则查询全部
 * @method void setVirtualHost(string $VirtualHost) 设置vhost名，用于查询过滤，不传则查询全部
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 */
class DescribeRabbitMQServerlessPermissionRequest extends AbstractModel
{
    /**
     * @var string 集群实例id
     */
    public $InstanceId;

    /**
     * @var string 用户名，用于查询过滤，不传则查询全部
     */
    public $User;

    /**
     * @var string vhost名，用于查询过滤，不传则查询全部
     */
    public $VirtualHost;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群实例id
     * @param string $User 用户名，用于查询过滤，不传则查询全部
     * @param string $VirtualHost vhost名，用于查询过滤，不传则查询全部
     * @param integer $Offset 分页Offset
     * @param integer $Limit 分页Limit
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
