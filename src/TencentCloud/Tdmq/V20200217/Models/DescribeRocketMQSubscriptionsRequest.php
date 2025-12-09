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
 * DescribeRocketMQSubscriptions请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespace() 获取消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespace(string $Namespace) 设置消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getGroup() 获取消费组名称
 * @method void setGroup(string $Group) 设置消费组名称
 * @method integer getOffset() 获取查询起始位置
 * @method void setOffset(integer $Offset) 设置查询起始位置
 * @method integer getLimit() 获取查询限制条数
 * @method void setLimit(integer $Limit) 设置查询限制条数
 */
class DescribeRocketMQSubscriptionsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $Namespace;

    /**
     * @var string 消费组名称
     */
    public $Group;

    /**
     * @var integer 查询起始位置
     */
    public $Offset;

    /**
     * @var integer 查询限制条数
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Namespace 消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $Group 消费组名称
     * @param integer $Offset 查询起始位置
     * @param integer $Limit 查询限制条数
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
