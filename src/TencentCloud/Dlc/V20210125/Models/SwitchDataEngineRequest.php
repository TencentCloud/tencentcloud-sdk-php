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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDataEngine请求参数结构体
 *
 * @method string getDataEngineName() 获取主集群名称
 * @method void setDataEngineName(string $DataEngineName) 设置主集群名称
 * @method boolean getStartStandbyCluster() 获取是否开启备集群
 * @method void setStartStandbyCluster(boolean $StartStandbyCluster) 设置是否开启备集群
 */
class SwitchDataEngineRequest extends AbstractModel
{
    /**
     * @var string 主集群名称
     */
    public $DataEngineName;

    /**
     * @var boolean 是否开启备集群
     */
    public $StartStandbyCluster;

    /**
     * @param string $DataEngineName 主集群名称
     * @param boolean $StartStandbyCluster 是否开启备集群
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("StartStandbyCluster",$param) and $param["StartStandbyCluster"] !== null) {
            $this->StartStandbyCluster = $param["StartStandbyCluster"];
        }
    }
}
