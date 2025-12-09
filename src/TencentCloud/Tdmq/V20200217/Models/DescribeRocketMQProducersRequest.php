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
 * DescribeRocketMQProducers请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) 设置主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getTopic() 获取主题名
 * @method void setTopic(string $Topic) 设置主题名
 * @method integer getOffset() 获取分页offset
 * @method void setOffset(integer $Offset) 设置分页offset
 * @method integer getLimit() 获取分页limit
 * @method void setLimit(integer $Limit) 设置分页limit
 * @method array getFilters() 获取过滤查询条件列表，支持以下过滤参数：

- ClientId：生产者客户端ID
- ClientIp：生产者客户端IP
 * @method void setFilters(array $Filters) 设置过滤查询条件列表，支持以下过滤参数：

- ClientId：生产者客户端ID
- ClientIp：生产者客户端IP
 */
class DescribeRocketMQProducersRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $NamespaceId;

    /**
     * @var string 主题名
     */
    public $Topic;

    /**
     * @var integer 分页offset
     */
    public $Offset;

    /**
     * @var integer 分页limit
     */
    public $Limit;

    /**
     * @var array 过滤查询条件列表，支持以下过滤参数：

- ClientId：生产者客户端ID
- ClientIp：生产者客户端IP
     */
    public $Filters;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 主题所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $Topic 主题名
     * @param integer $Offset 分页offset
     * @param integer $Limit 分页limit
     * @param array $Filters 过滤查询条件列表，支持以下过滤参数：

- ClientId：生产者客户端ID
- ClientIp：生产者客户端IP
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
