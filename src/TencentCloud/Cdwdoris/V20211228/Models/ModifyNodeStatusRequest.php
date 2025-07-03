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
 * ModifyNodeStatus请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，例如cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群ID，例如cdwch-xxxx
 * @method array getNodeInfos() 获取节点信息
 * @method void setNodeInfos(array $NodeInfos) 设置节点信息
 * @method string getOperationCode() 获取节点操作
 * @method void setOperationCode(string $OperationCode) 设置节点操作
 * @method string getRestartTimeOut() 获取超时时间（秒）
 * @method void setRestartTimeOut(string $RestartTimeOut) 设置超时时间（秒）
 */
class ModifyNodeStatusRequest extends AbstractModel
{
    /**
     * @var string 集群ID，例如cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var array 节点信息
     */
    public $NodeInfos;

    /**
     * @var string 节点操作
     */
    public $OperationCode;

    /**
     * @var string 超时时间（秒）
     */
    public $RestartTimeOut;

    /**
     * @param string $InstanceId 集群ID，例如cdwch-xxxx
     * @param array $NodeInfos 节点信息
     * @param string $OperationCode 节点操作
     * @param string $RestartTimeOut 超时时间（秒）
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

        if (array_key_exists("NodeInfos",$param) and $param["NodeInfos"] !== null) {
            $this->NodeInfos = [];
            foreach ($param["NodeInfos"] as $key => $value){
                $obj = new NodeInfos();
                $obj->deserialize($value);
                array_push($this->NodeInfos, $obj);
            }
        }

        if (array_key_exists("OperationCode",$param) and $param["OperationCode"] !== null) {
            $this->OperationCode = $param["OperationCode"];
        }

        if (array_key_exists("RestartTimeOut",$param) and $param["RestartTimeOut"] !== null) {
            $this->RestartTimeOut = $param["RestartTimeOut"];
        }
    }
}
