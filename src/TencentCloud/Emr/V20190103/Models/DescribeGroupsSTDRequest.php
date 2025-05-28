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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupsSTD请求参数结构体
 *
 * @method string getInstanceId() 获取集群名称
 * @method void setInstanceId(string $InstanceId) 设置集群名称
 * @method array getFilters() 获取描述键值对过滤器，用于条件过滤查询
 * @method void setFilters(array $Filters) 设置描述键值对过滤器，用于条件过滤查询
 * @method Order getOrderFields() 获取描述排序，用于排序
 * @method void setOrderFields(Order $OrderFields) 设置描述排序，用于排序
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 */
class DescribeGroupsSTDRequest extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $InstanceId;

    /**
     * @var array 描述键值对过滤器，用于条件过滤查询
     */
    public $Filters;

    /**
     * @var Order 描述排序，用于排序
     */
    public $OrderFields;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @param string $InstanceId 集群名称
     * @param array $Filters 描述键值对过滤器，用于条件过滤查询
     * @param Order $OrderFields 描述排序，用于排序
     * @param integer $Limit 返回数量
     * @param integer $Offset 分页参数
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = new Order();
            $this->OrderFields->deserialize($param["OrderFields"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
