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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParam请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIds() 获取实例ID
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID
 * @method array getClusterParamList() 获取集群参数列表，例如 [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
 * @method void setClusterParamList(array $ClusterParamList) 设置集群参数列表，例如 [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
 * @method array getInstanceParamList() 获取实例参数列表，例如[{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
 * @method void setInstanceParamList(array $InstanceParamList) 设置实例参数列表，例如[{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
 * @method string getIsInMaintainPeriod() 获取yes：在运维时间窗内修改，no：立即执行（默认值）
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置yes：在运维时间窗内修改，no：立即执行（默认值）
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 实例ID
     */
    public $InstanceIds;

    /**
     * @var array 集群参数列表，例如 [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
     */
    public $ClusterParamList;

    /**
     * @var array 实例参数列表，例如[{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
     */
    public $InstanceParamList;

    /**
     * @var string yes：在运维时间窗内修改，no：立即执行（默认值）
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIds 实例ID
     * @param array $ClusterParamList 集群参数列表，例如 [{           "CurrentValue":"2",        "ParamName":"auto_increment_increment"}]
     * @param array $InstanceParamList 实例参数列表，例如[{           "CurrentValue":"2",        "ParamName":"innodb_stats_transient_sample_pages"}]
     * @param string $IsInMaintainPeriod yes：在运维时间窗内修改，no：立即执行（默认值）
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClusterParamList",$param) and $param["ClusterParamList"] !== null) {
            $this->ClusterParamList = [];
            foreach ($param["ClusterParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParamList, $obj);
            }
        }

        if (array_key_exists("InstanceParamList",$param) and $param["InstanceParamList"] !== null) {
            $this->InstanceParamList = [];
            foreach ($param["InstanceParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParamList, $obj);
            }
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
