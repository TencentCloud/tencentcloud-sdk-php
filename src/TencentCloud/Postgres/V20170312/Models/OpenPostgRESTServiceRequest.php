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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenPostgRESTService请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID</p>
 * @method boolean getEnableWanNet() 获取<p>是否开启外网</p>
 * @method void setEnableWanNet(boolean $EnableWanNet) 设置<p>是否开启外网</p>
 * @method array getRestConfig() 获取<p>PostgREST服务参数</p>
 * @method void setRestConfig(array $RestConfig) 设置<p>PostgREST服务参数</p>
 * @method string getVpcId() 获取<p>VPC</p><p>参数格式：私有网络ID，形如vpc-e6w23k31。非必选，不传默认使用实例的vpc</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC</p><p>参数格式：私有网络ID，形如vpc-e6w23k31。非必选，不传默认使用实例的vpc</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如subnet-51lcif9y。非必选，不传则使用实例的子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如subnet-51lcif9y。非必选，不传则使用实例的子网</p>
 */
class OpenPostgRESTServiceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $DBInstanceId;

    /**
     * @var boolean <p>是否开启外网</p>
     */
    public $EnableWanNet;

    /**
     * @var array <p>PostgREST服务参数</p>
     */
    public $RestConfig;

    /**
     * @var string <p>VPC</p><p>参数格式：私有网络ID，形如vpc-e6w23k31。非必选，不传默认使用实例的vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如subnet-51lcif9y。非必选，不传则使用实例的子网</p>
     */
    public $SubnetId;

    /**
     * @param string $DBInstanceId <p>实例ID</p>
     * @param boolean $EnableWanNet <p>是否开启外网</p>
     * @param array $RestConfig <p>PostgREST服务参数</p>
     * @param string $VpcId <p>VPC</p><p>参数格式：私有网络ID，形如vpc-e6w23k31。非必选，不传默认使用实例的vpc</p>
     * @param string $SubnetId <p>私有网络子网ID，形如subnet-51lcif9y。非必选，不传则使用实例的子网</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("EnableWanNet",$param) and $param["EnableWanNet"] !== null) {
            $this->EnableWanNet = $param["EnableWanNet"];
        }

        if (array_key_exists("RestConfig",$param) and $param["RestConfig"] !== null) {
            $this->RestConfig = [];
            foreach ($param["RestConfig"] as $key => $value){
                $obj = new ParamEntry();
                $obj->deserialize($value);
                array_push($this->RestConfig, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
