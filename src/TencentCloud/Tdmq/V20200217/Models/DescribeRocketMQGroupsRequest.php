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
 * DescribeRocketMQGroups请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method string getFilterTopic() 获取主题名称，输入此参数可查询该主题下所有的订阅组
 * @method void setFilterTopic(string $FilterTopic) 设置主题名称，输入此参数可查询该主题下所有的订阅组
 * @method string getFilterGroup() 获取按消费组名称查询消费组，支持模糊查询
 * @method void setFilterGroup(string $FilterGroup) 设置按消费组名称查询消费组，支持模糊查询
 * @method string getSortedBy() 获取按照指定字段排序，可选值为tps，accumulative
 * @method void setSortedBy(string $SortedBy) 设置按照指定字段排序，可选值为tps，accumulative
 * @method string getSortOrder() 获取按升序或降序排列，可选值为asc，desc
 * @method void setSortOrder(string $SortOrder) 设置按升序或降序排列，可选值为asc，desc
 * @method string getFilterOneGroup() 获取订阅组名称，指定此参数后将只返回该订阅组信息
 * @method void setFilterOneGroup(string $FilterOneGroup) 设置订阅组名称，指定此参数后将只返回该订阅组信息
 * @method array getTypes() 获取group类型
 * @method void setTypes(array $Types) 设置group类型
 */
class DescribeRocketMQGroupsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间
     */
    public $NamespaceId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制条数
     */
    public $Limit;

    /**
     * @var string 主题名称，输入此参数可查询该主题下所有的订阅组
     */
    public $FilterTopic;

    /**
     * @var string 按消费组名称查询消费组，支持模糊查询
     */
    public $FilterGroup;

    /**
     * @var string 按照指定字段排序，可选值为tps，accumulative
     */
    public $SortedBy;

    /**
     * @var string 按升序或降序排列，可选值为asc，desc
     */
    public $SortOrder;

    /**
     * @var string 订阅组名称，指定此参数后将只返回该订阅组信息
     */
    public $FilterOneGroup;

    /**
     * @var array group类型
     */
    public $Types;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制条数
     * @param string $FilterTopic 主题名称，输入此参数可查询该主题下所有的订阅组
     * @param string $FilterGroup 按消费组名称查询消费组，支持模糊查询
     * @param string $SortedBy 按照指定字段排序，可选值为tps，accumulative
     * @param string $SortOrder 按升序或降序排列，可选值为asc，desc
     * @param string $FilterOneGroup 订阅组名称，指定此参数后将只返回该订阅组信息
     * @param array $Types group类型
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterTopic",$param) and $param["FilterTopic"] !== null) {
            $this->FilterTopic = $param["FilterTopic"];
        }

        if (array_key_exists("FilterGroup",$param) and $param["FilterGroup"] !== null) {
            $this->FilterGroup = $param["FilterGroup"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("FilterOneGroup",$param) and $param["FilterOneGroup"] !== null) {
            $this->FilterOneGroup = $param["FilterOneGroup"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
