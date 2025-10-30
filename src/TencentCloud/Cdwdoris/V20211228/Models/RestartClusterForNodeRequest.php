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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartClusterForNode请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，例如cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群ID，例如cdwch-xxxx
 * @method string getConfigName() 获取配置文件名称
 * @method void setConfigName(string $ConfigName) 设置配置文件名称
 * @method integer getBatchSize() 获取每次重启的批次
 * @method void setBatchSize(integer $BatchSize) 设置每次重启的批次
 * @method array getNodeList() 获取重启节点
 * @method void setNodeList(array $NodeList) 设置重启节点
 * @method boolean getRollingRestart() 获取false表示非滚动重启，true表示滚动重启
 * @method void setRollingRestart(boolean $RollingRestart) 设置false表示非滚动重启，true表示滚动重启
 */
class RestartClusterForNodeRequest extends AbstractModel
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
     * @var integer 每次重启的批次
     */
    public $BatchSize;

    /**
     * @var array 重启节点
     */
    public $NodeList;

    /**
     * @var boolean false表示非滚动重启，true表示滚动重启
     */
    public $RollingRestart;

    /**
     * @param string $InstanceId 集群ID，例如cdwch-xxxx
     * @param string $ConfigName 配置文件名称
     * @param integer $BatchSize 每次重启的批次
     * @param array $NodeList 重启节点
     * @param boolean $RollingRestart false表示非滚动重启，true表示滚动重启
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

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            $this->RollingRestart = $param["RollingRestart"];
        }
    }
}
