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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHealthCheckPolicyBindings请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method array getFilter() 获取·  HealthCheckPolicyName
    按照【健康检测规则名称】进行过滤。
    类型：String
    必选：否
 * @method void setFilter(array $Filter) 设置·  HealthCheckPolicyName
    按照【健康检测规则名称】进行过滤。
    类型：String
    必选：否
 * @method integer getLimit() 获取最大输出条数，默认20，最大为100
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20，最大为100
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 */
class DescribeHealthCheckPolicyBindingsRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var array ·  HealthCheckPolicyName
    按照【健康检测规则名称】进行过滤。
    类型：String
    必选：否
     */
    public $Filter;

    /**
     * @var integer 最大输出条数，默认20，最大为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @param string $ClusterId 集群 ID
     * @param array $Filter ·  HealthCheckPolicyName
    按照【健康检测规则名称】进行过滤。
    类型：String
    必选：否
     * @param integer $Limit 最大输出条数，默认20，最大为100
     * @param integer $Offset 偏移量，默认0
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
