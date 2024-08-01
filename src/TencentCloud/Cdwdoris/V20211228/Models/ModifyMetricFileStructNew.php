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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * doris监控指标关注（取消关注）功能入参
 *
 * @method string getInstanceType() 获取集群类型
 * @method void setInstanceType(string $InstanceType) 设置集群类型
 * @method string getMetricType() 获取指标类型
 * @method void setMetricType(string $MetricType) 设置指标类型
 * @method string getName() 获取指标英文名
 * @method void setName(string $Name) 设置指标英文名
 * @method integer getIfAttention() 获取1：关注
0：取消关注
 * @method void setIfAttention(integer $IfAttention) 设置1：关注
0：取消关注
 */
class ModifyMetricFileStructNew extends AbstractModel
{
    /**
     * @var string 集群类型
     */
    public $InstanceType;

    /**
     * @var string 指标类型
     */
    public $MetricType;

    /**
     * @var string 指标英文名
     */
    public $Name;

    /**
     * @var integer 1：关注
0：取消关注
     */
    public $IfAttention;

    /**
     * @param string $InstanceType 集群类型
     * @param string $MetricType 指标类型
     * @param string $Name 指标英文名
     * @param integer $IfAttention 1：关注
0：取消关注
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IfAttention",$param) and $param["IfAttention"] !== null) {
            $this->IfAttention = $param["IfAttention"];
        }
    }
}
