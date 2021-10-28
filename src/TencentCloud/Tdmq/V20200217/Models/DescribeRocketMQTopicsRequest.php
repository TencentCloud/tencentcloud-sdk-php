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
 * DescribeRocketMQTopics请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制数
 * @method void setLimit(integer $Limit) 设置查询限制数
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间
 * @method array getFilterType() 获取按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Transaction
 * @method void setFilterType(array $FilterType) 设置按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Transaction
 * @method string getFilterName() 获取按主题名称搜索，支持模糊查询
 * @method void setFilterName(string $FilterName) 设置按主题名称搜索，支持模糊查询
 */
class DescribeRocketMQTopicsRequest extends AbstractModel
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
     * @var string 命名空间
     */
    public $NamespaceId;

    /**
     * @var array 按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Transaction
     */
    public $FilterType;

    /**
     * @var string 按主题名称搜索，支持模糊查询
     */
    public $FilterName;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制数
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间
     * @param array $FilterType 按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Transaction
     * @param string $FilterName 按主题名称搜索，支持模糊查询
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }
    }
}
