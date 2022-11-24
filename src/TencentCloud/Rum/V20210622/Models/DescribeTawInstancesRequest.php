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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTawInstances请求参数结构体
 *
 * @method array getChargeStatuses() 获取计费状态
 * @method void setChargeStatuses(array $ChargeStatuses) 设置计费状态
 * @method array getChargeTypes() 获取计费类型
 * @method void setChargeTypes(array $ChargeTypes) 设置计费类型
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method array getAreaIds() 获取片区Id
 * @method void setAreaIds(array $AreaIds) 设置片区Id
 * @method array getInstanceStatuses() 获取实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=销毁中，8=已销毁), 该参数已废弃，请在Filters内注明
 * @method void setInstanceStatuses(array $InstanceStatuses) 设置实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=销毁中，8=已销毁), 该参数已废弃，请在Filters内注明
 * @method array getInstanceIds() 获取实例Id, 该参数已废弃，请在Filters内注明
 * @method void setInstanceIds(array $InstanceIds) 设置实例Id, 该参数已废弃，请在Filters内注明
 * @method array getFilters() 获取过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
 * @method void setFilters(array $Filters) 设置过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
 * @method integer getIsDemo() 获取该参数已废弃，demo模式请在Filters内注明
 * @method void setIsDemo(integer $IsDemo) 设置该参数已废弃，demo模式请在Filters内注明
 */
class DescribeTawInstancesRequest extends AbstractModel
{
    /**
     * @var array 计费状态
     */
    public $ChargeStatuses;

    /**
     * @var array 计费类型
     */
    public $ChargeTypes;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var array 片区Id
     */
    public $AreaIds;

    /**
     * @var array 实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=销毁中，8=已销毁), 该参数已废弃，请在Filters内注明
     */
    public $InstanceStatuses;

    /**
     * @var array 实例Id, 该参数已废弃，请在Filters内注明
     */
    public $InstanceIds;

    /**
     * @var array 过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
     */
    public $Filters;

    /**
     * @var integer 该参数已废弃，demo模式请在Filters内注明
     */
    public $IsDemo;

    /**
     * @param array $ChargeStatuses 计费状态
     * @param array $ChargeTypes 计费类型
     * @param integer $Limit 分页Limit
     * @param integer $Offset 分页Offset
     * @param array $AreaIds 片区Id
     * @param array $InstanceStatuses 实例状态(1=创建中，2=运行中，3=异常，4=重启中，5=停止中，6=已停止，7=销毁中，8=已销毁), 该参数已废弃，请在Filters内注明
     * @param array $InstanceIds 实例Id, 该参数已废弃，请在Filters内注明
     * @param array $Filters 过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
     * @param integer $IsDemo 该参数已废弃，demo模式请在Filters内注明
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
        if (array_key_exists("ChargeStatuses",$param) and $param["ChargeStatuses"] !== null) {
            $this->ChargeStatuses = $param["ChargeStatuses"];
        }

        if (array_key_exists("ChargeTypes",$param) and $param["ChargeTypes"] !== null) {
            $this->ChargeTypes = $param["ChargeTypes"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AreaIds",$param) and $param["AreaIds"] !== null) {
            $this->AreaIds = $param["AreaIds"];
        }

        if (array_key_exists("InstanceStatuses",$param) and $param["InstanceStatuses"] !== null) {
            $this->InstanceStatuses = $param["InstanceStatuses"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}
