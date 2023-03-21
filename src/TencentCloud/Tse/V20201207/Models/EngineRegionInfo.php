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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎地域配置详情
 *
 * @method string getEngineRegion() 获取引擎节点所在地域
 * @method void setEngineRegion(string $EngineRegion) 设置引擎节点所在地域
 * @method integer getReplica() 获取此地域节点分配数量
 * @method void setReplica(integer $Replica) 设置此地域节点分配数量
 * @method array getVpcInfos() 获取集群网络信息
 * @method void setVpcInfos(array $VpcInfos) 设置集群网络信息
 */
class EngineRegionInfo extends AbstractModel
{
    /**
     * @var string 引擎节点所在地域
     */
    public $EngineRegion;

    /**
     * @var integer 此地域节点分配数量
     */
    public $Replica;

    /**
     * @var array 集群网络信息
     */
    public $VpcInfos;

    /**
     * @param string $EngineRegion 引擎节点所在地域
     * @param integer $Replica 此地域节点分配数量
     * @param array $VpcInfos 集群网络信息
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
        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("VpcInfos",$param) and $param["VpcInfos"] !== null) {
            $this->VpcInfos = [];
            foreach ($param["VpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfos, $obj);
            }
        }
    }
}
