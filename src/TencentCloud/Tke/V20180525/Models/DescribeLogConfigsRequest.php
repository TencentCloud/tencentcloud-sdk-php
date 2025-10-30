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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogConfigs请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterType() 获取当前集群类型支持tke、eks。默认为tke
 * @method void setClusterType(string $ClusterType) 设置当前集群类型支持tke、eks。默认为tke
 * @method string getLogConfigNames() 获取按照采集规则名称查找，多个采集规则使用 "," 分隔。
 * @method void setLogConfigNames(string $LogConfigNames) 设置按照采集规则名称查找，多个采集规则使用 "," 分隔。
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method integer getLimit() 获取最大输出条数，默认20，最大为100
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20，最大为100
 */
class DescribeLogConfigsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 当前集群类型支持tke、eks。默认为tke
     */
    public $ClusterType;

    /**
     * @var string 按照采集规则名称查找，多个采集规则使用 "," 分隔。
     */
    public $LogConfigNames;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认20，最大为100
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterType 当前集群类型支持tke、eks。默认为tke
     * @param string $LogConfigNames 按照采集规则名称查找，多个采集规则使用 "," 分隔。
     * @param integer $Offset 偏移量,默认0
     * @param integer $Limit 最大输出条数，默认20，最大为100
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("LogConfigNames",$param) and $param["LogConfigNames"] !== null) {
            $this->LogConfigNames = $param["LogConfigNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
