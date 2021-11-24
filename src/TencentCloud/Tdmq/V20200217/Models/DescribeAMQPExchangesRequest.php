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
 * DescribeAMQPExchanges请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制数
 * @method void setLimit(integer $Limit) 设置查询限制数
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost ID
 * @method void setVHostId(string $VHostId) 设置Vhost ID
 * @method array getFilterType() 获取按路由类型过滤查询结果，可选择Direct, Fanout, Topic
 * @method void setFilterType(array $FilterType) 设置按路由类型过滤查询结果，可选择Direct, Fanout, Topic
 * @method string getFilterName() 获取按exchange名称搜索，支持模糊查询
 * @method void setFilterName(string $FilterName) 设置按exchange名称搜索，支持模糊查询
 * @method boolean getFilterInternal() 获取过滤查询内部或者外部exchange
 * @method void setFilterInternal(boolean $FilterInternal) 设置过滤查询内部或者外部exchange
 */
class DescribeAMQPExchangesRequest extends AbstractModel
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
     * @var string Vhost ID
     */
    public $VHostId;

    /**
     * @var array 按路由类型过滤查询结果，可选择Direct, Fanout, Topic
     */
    public $FilterType;

    /**
     * @var string 按exchange名称搜索，支持模糊查询
     */
    public $FilterName;

    /**
     * @var boolean 过滤查询内部或者外部exchange
     */
    public $FilterInternal;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制数
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost ID
     * @param array $FilterType 按路由类型过滤查询结果，可选择Direct, Fanout, Topic
     * @param string $FilterName 按exchange名称搜索，支持模糊查询
     * @param boolean $FilterInternal 过滤查询内部或者外部exchange
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

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterInternal",$param) and $param["FilterInternal"] !== null) {
            $this->FilterInternal = $param["FilterInternal"];
        }
    }
}
