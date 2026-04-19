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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheusMultiTenantInstancePostPayMode请求参数结构体
 *
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getVpcId() 获取<p>VPC ID(可通过 vpc:DescribeVpcs 接口获取，与实例同地域)</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID(可通过 vpc:DescribeVpcs 接口获取，与实例同地域)</p>
 * @method string getSubnetId() 获取<p>子网 ID(可通过 vpc:DescribeSubnets 接口获取)</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID(可通过 vpc:DescribeSubnets 接口获取)</p>
 * @method integer getDataRetentionTime() 获取<p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置<p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
 * @method string getZone() 获取<p>可用区(与子网同可用区)</p>
 * @method void setZone(string $Zone) 设置<p>可用区(与子网同可用区)</p>
 * @method array getTagSpecification() 获取<p>实例的标签</p>
 * @method void setTagSpecification(array $TagSpecification) 设置<p>实例的标签</p>
 * @method string getGrafanaInstanceId() 获取<p>需要关联的 Grafana 实例</p>
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) 设置<p>需要关联的 Grafana 实例</p>
 * @method array getInstanceAttributes() 获取<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 * @method void setInstanceAttributes(array $InstanceAttributes) 设置<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
 */
class CreatePrometheusMultiTenantInstancePostPayModeRequest extends AbstractModel
{
    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>VPC ID(可通过 vpc:DescribeVpcs 接口获取，与实例同地域)</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID(可通过 vpc:DescribeSubnets 接口获取)</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
     */
    public $DataRetentionTime;

    /**
     * @var string <p>可用区(与子网同可用区)</p>
     */
    public $Zone;

    /**
     * @var array <p>实例的标签</p>
     */
    public $TagSpecification;

    /**
     * @var string <p>需要关联的 Grafana 实例</p>
     */
    public $GrafanaInstanceId;

    /**
     * @var array <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
     */
    public $InstanceAttributes;

    /**
     * @param string $InstanceName <p>实例名</p>
     * @param string $VpcId <p>VPC ID(可通过 vpc:DescribeVpcs 接口获取，与实例同地域)</p>
     * @param string $SubnetId <p>子网 ID(可通过 vpc:DescribeSubnets 接口获取)</p>
     * @param integer $DataRetentionTime <p>数据存储时间（单位天），限制值为15, 30, 45, 90, 180, 365, 730之一</p>
     * @param string $Zone <p>可用区(与子网同可用区)</p>
     * @param array $TagSpecification <p>实例的标签</p>
     * @param string $GrafanaInstanceId <p>需要关联的 Grafana 实例</p>
     * @param array $InstanceAttributes <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }

        if (array_key_exists("InstanceAttributes",$param) and $param["InstanceAttributes"] !== null) {
            $this->InstanceAttributes = [];
            foreach ($param["InstanceAttributes"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->InstanceAttributes, $obj);
            }
        }
    }
}
