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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessConnection请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id	
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id	
 * @method string getVirtualHost() 获取vhost名
 * @method void setVirtualHost(string $VirtualHost) 设置vhost名
 * @method string getSortElement() 获取按哪个字段排序，支持：channel(channel数),incoming_bytes(入流量大小),outgoing_bytes(出流量大小)
 * @method void setSortElement(string $SortElement) 设置按哪个字段排序，支持：channel(channel数),incoming_bytes(入流量大小),outgoing_bytes(出流量大小)
 * @method string getSortType() 获取排序方式：ASC,DESC
 * @method void setSortType(string $SortType) 设置排序方式：ASC,DESC
 * @method integer getOffset() 获取分页参数，从第几条数据开始
 * @method void setOffset(integer $Offset) 设置分页参数，从第几条数据开始
 * @method integer getLimit() 获取一页大小
 * @method void setLimit(integer $Limit) 设置一页大小
 * @method string getName() 获取连接名模糊搜索
 * @method void setName(string $Name) 设置连接名模糊搜索
 */
class DescribeRabbitMQServerlessConnectionRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id	
     */
    public $InstanceId;

    /**
     * @var string vhost名
     */
    public $VirtualHost;

    /**
     * @var string 按哪个字段排序，支持：channel(channel数),incoming_bytes(入流量大小),outgoing_bytes(出流量大小)
     */
    public $SortElement;

    /**
     * @var string 排序方式：ASC,DESC
     */
    public $SortType;

    /**
     * @var integer 分页参数，从第几条数据开始
     */
    public $Offset;

    /**
     * @var integer 一页大小
     */
    public $Limit;

    /**
     * @var string 连接名模糊搜索
     */
    public $Name;

    /**
     * @param string $InstanceId 集群实例Id	
     * @param string $VirtualHost vhost名
     * @param string $SortElement 按哪个字段排序，支持：channel(channel数),incoming_bytes(入流量大小),outgoing_bytes(出流量大小)
     * @param string $SortType 排序方式：ASC,DESC
     * @param integer $Offset 分页参数，从第几条数据开始
     * @param integer $Limit 一页大小
     * @param string $Name 连接名模糊搜索
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
