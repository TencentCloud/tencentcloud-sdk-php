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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyYarnQueueV2请求参数结构体
 *
 * @method string getInstanceId() 获取集群Id
 * @method void setInstanceId(string $InstanceId) 设置集群Id
 * @method string getScheduler() 获取调度器类型。可选值：

1. capacity
2. fair
 * @method void setScheduler(string $Scheduler) 设置调度器类型。可选值：

1. capacity
2. fair
 * @method array getConfigModifyInfoList() 获取资源池数据
 * @method void setConfigModifyInfoList(array $ConfigModifyInfoList) 设置资源池数据
 */
class ModifyYarnQueueV2Request extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $InstanceId;

    /**
     * @var string 调度器类型。可选值：

1. capacity
2. fair
     */
    public $Scheduler;

    /**
     * @var array 资源池数据
     */
    public $ConfigModifyInfoList;

    /**
     * @param string $InstanceId 集群Id
     * @param string $Scheduler 调度器类型。可选值：

1. capacity
2. fair
     * @param array $ConfigModifyInfoList 资源池数据
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

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ConfigModifyInfoList",$param) and $param["ConfigModifyInfoList"] !== null) {
            $this->ConfigModifyInfoList = [];
            foreach ($param["ConfigModifyInfoList"] as $key => $value){
                $obj = new ConfigModifyInfoV2();
                $obj->deserialize($value);
                array_push($this->ConfigModifyInfoList, $obj);
            }
        }
    }
}
