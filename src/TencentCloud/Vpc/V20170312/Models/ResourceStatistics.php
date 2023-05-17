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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源统计信息
 *
 * @method string getVpcId() 获取Vpc实例ID，例如：vpc-f1xjkw1b。
 * @method void setVpcId(string $VpcId) 设置Vpc实例ID，例如：vpc-f1xjkw1b。
 * @method string getSubnetId() 获取子网实例ID，例如：subnet-bthucmmy。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID，例如：subnet-bthucmmy。
 * @method integer getIp() 获取当前已使用的IP总数。
 * @method void setIp(integer $Ip) 设置当前已使用的IP总数。
 * @method array getResourceStatisticsItemSet() 获取资源统计信息。
 * @method void setResourceStatisticsItemSet(array $ResourceStatisticsItemSet) 设置资源统计信息。
 */
class ResourceStatistics extends AbstractModel
{
    /**
     * @var string Vpc实例ID，例如：vpc-f1xjkw1b。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID，例如：subnet-bthucmmy。
     */
    public $SubnetId;

    /**
     * @var integer 当前已使用的IP总数。
     */
    public $Ip;

    /**
     * @var array 资源统计信息。
     */
    public $ResourceStatisticsItemSet;

    /**
     * @param string $VpcId Vpc实例ID，例如：vpc-f1xjkw1b。
     * @param string $SubnetId 子网实例ID，例如：subnet-bthucmmy。
     * @param integer $Ip 当前已使用的IP总数。
     * @param array $ResourceStatisticsItemSet 资源统计信息。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ResourceStatisticsItemSet",$param) and $param["ResourceStatisticsItemSet"] !== null) {
            $this->ResourceStatisticsItemSet = [];
            foreach ($param["ResourceStatisticsItemSet"] as $key => $value){
                $obj = new ResourceStatisticsItem();
                $obj->deserialize($value);
                array_push($this->ResourceStatisticsItemSet, $obj);
            }
        }
    }
}
