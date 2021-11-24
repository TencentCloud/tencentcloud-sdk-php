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
 * DescribeAMQPRouteRelations请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制数
 * @method void setLimit(integer $Limit) 设置查询限制数
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost名称
 * @method void setVHostId(string $VHostId) 设置Vhost名称
 * @method string getFilterSourceExchange() 获取按源exchange名称过滤查询结果，支持模糊查询
 * @method void setFilterSourceExchange(string $FilterSourceExchange) 设置按源exchange名称过滤查询结果，支持模糊查询
 * @method string getFilterDestType() 获取按绑定的目标类型过滤查询结果，可选值:Exchange、Queue
 * @method void setFilterDestType(string $FilterDestType) 设置按绑定的目标类型过滤查询结果，可选值:Exchange、Queue
 * @method string getFilterDestValue() 获取按目标名称过滤查询结果，支持模糊查询
 * @method void setFilterDestValue(string $FilterDestValue) 设置按目标名称过滤查询结果，支持模糊查询
 */
class DescribeAMQPRouteRelationsRequest extends AbstractModel
{
    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询限制数
     */
    public $Limit;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Vhost名称
     */
    public $VHostId;

    /**
     * @var string 按源exchange名称过滤查询结果，支持模糊查询
     */
    public $FilterSourceExchange;

    /**
     * @var string 按绑定的目标类型过滤查询结果，可选值:Exchange、Queue
     */
    public $FilterDestType;

    /**
     * @var string 按目标名称过滤查询结果，支持模糊查询
     */
    public $FilterDestValue;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制数
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost名称
     * @param string $FilterSourceExchange 按源exchange名称过滤查询结果，支持模糊查询
     * @param string $FilterDestType 按绑定的目标类型过滤查询结果，可选值:Exchange、Queue
     * @param string $FilterDestValue 按目标名称过滤查询结果，支持模糊查询
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("FilterSourceExchange",$param) and $param["FilterSourceExchange"] !== null) {
            $this->FilterSourceExchange = $param["FilterSourceExchange"];
        }

        if (array_key_exists("FilterDestType",$param) and $param["FilterDestType"] !== null) {
            $this->FilterDestType = $param["FilterDestType"];
        }

        if (array_key_exists("FilterDestValue",$param) and $param["FilterDestValue"] !== null) {
            $this->FilterDestValue = $param["FilterDestValue"];
        }
    }
}
