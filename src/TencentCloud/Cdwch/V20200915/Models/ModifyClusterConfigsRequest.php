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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterConfigs请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，例如cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群ID，例如cdwch-xxxx
 * @method array getModifyConfContext() 获取配置文件修改信息
 * @method void setModifyConfContext(array $ModifyConfContext) 设置配置文件修改信息
 * @method string getRemark() 获取修改原因
 * @method void setRemark(string $Remark) 设置修改原因
 */
class ModifyClusterConfigsRequest extends AbstractModel
{
    /**
     * @var string 集群ID，例如cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var array 配置文件修改信息
     */
    public $ModifyConfContext;

    /**
     * @var string 修改原因
     */
    public $Remark;

    /**
     * @param string $InstanceId 集群ID，例如cdwch-xxxx
     * @param array $ModifyConfContext 配置文件修改信息
     * @param string $Remark 修改原因
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

        if (array_key_exists("ModifyConfContext",$param) and $param["ModifyConfContext"] !== null) {
            $this->ModifyConfContext = [];
            foreach ($param["ModifyConfContext"] as $key => $value){
                $obj = new ConfigSubmitContext();
                $obj->deserialize($value);
                array_push($this->ModifyConfContext, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
