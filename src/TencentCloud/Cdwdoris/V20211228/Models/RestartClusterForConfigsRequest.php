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
 * RestartClusterForConfigs请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，例如cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群ID，例如cdwch-xxxx
 * @method string getConfigName() 获取配置文件名称
 * @method void setConfigName(string $ConfigName) 设置配置文件名称
 * @method string getOperationType() 获取grace_restart为优雅滚动重启 不填默认立刻重启
 * @method void setOperationType(string $OperationType) 设置grace_restart为优雅滚动重启 不填默认立刻重启
 */
class RestartClusterForConfigsRequest extends AbstractModel
{
    /**
     * @var string 集群ID，例如cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var string 配置文件名称
     */
    public $ConfigName;

    /**
     * @var string grace_restart为优雅滚动重启 不填默认立刻重启
     */
    public $OperationType;

    /**
     * @param string $InstanceId 集群ID，例如cdwch-xxxx
     * @param string $ConfigName 配置文件名称
     * @param string $OperationType grace_restart为优雅滚动重启 不填默认立刻重启
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

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
