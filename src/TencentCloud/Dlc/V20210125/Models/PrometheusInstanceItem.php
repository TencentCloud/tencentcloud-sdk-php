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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 实例概览
 *
 * @method string getInstanceId() 获取<p>Prometheus 实例 ID，例如 prom-xxxxxxxx</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Prometheus 实例 ID，例如 prom-xxxxxxxx</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getVpcId() 获取<p>所属 VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>所属 VPC ID</p>
 * @method string getSubnetId() 获取<p>所属子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>所属子网 ID</p>
 * @method integer getInstanceStatus() 获取<p>实例状态：1=创建中, 2=运行中, 3=异常, 4=重启中, 5=销毁中, 6=已停机, 7=已删除, 8=欠费停服中, 9=欠费已停服</p>
 * @method void setInstanceStatus(integer $InstanceStatus) 设置<p>实例状态：1=创建中, 2=运行中, 3=异常, 4=重启中, 5=销毁中, 6=已停机, 7=已删除, 8=欠费停服中, 9=欠费已停服</p>
 * @method boolean getSameVpcWithTke() 获取<p>是否与 TKE 集群同 VPC；true 会被前置排序</p>
 * @method void setSameVpcWithTke(boolean $SameVpcWithTke) 设置<p>是否与 TKE 集群同 VPC；true 会被前置排序</p>
 */
class PrometheusInstanceItem extends AbstractModel
{
    /**
     * @var string <p>Prometheus 实例 ID，例如 prom-xxxxxxxx</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>所属 VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>所属子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例状态：1=创建中, 2=运行中, 3=异常, 4=重启中, 5=销毁中, 6=已停机, 7=已删除, 8=欠费停服中, 9=欠费已停服</p>
     */
    public $InstanceStatus;

    /**
     * @var boolean <p>是否与 TKE 集群同 VPC；true 会被前置排序</p>
     */
    public $SameVpcWithTke;

    /**
     * @param string $InstanceId <p>Prometheus 实例 ID，例如 prom-xxxxxxxx</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $VpcId <p>所属 VPC ID</p>
     * @param string $SubnetId <p>所属子网 ID</p>
     * @param integer $InstanceStatus <p>实例状态：1=创建中, 2=运行中, 3=异常, 4=重启中, 5=销毁中, 6=已停机, 7=已删除, 8=欠费停服中, 9=欠费已停服</p>
     * @param boolean $SameVpcWithTke <p>是否与 TKE 集群同 VPC；true 会被前置排序</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SameVpcWithTke",$param) and $param["SameVpcWithTke"] !== null) {
            $this->SameVpcWithTke = $param["SameVpcWithTke"];
        }
    }
}
