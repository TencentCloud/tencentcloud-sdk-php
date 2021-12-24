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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitsCloud请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取limit值
 * @method void setLimit(integer $Limit) 设置limit值
 * @method string getNamePattern() 获取集群名称模糊匹配
 * @method void setNamePattern(string $NamePattern) 设置集群名称模糊匹配
 * @method string getOrder() 获取排序，ASC/DESC(默认)
 * @method void setOrder(string $Order) 设置排序，ASC/DESC(默认)
 */
class DescribeEdgeUnitsCloudRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer limit值
     */
    public $Limit;

    /**
     * @var string 集群名称模糊匹配
     */
    public $NamePattern;

    /**
     * @var string 排序，ASC/DESC(默认)
     */
    public $Order;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit limit值
     * @param string $NamePattern 集群名称模糊匹配
     * @param string $Order 排序，ASC/DESC(默认)
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

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
