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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogJoinState请求参数结构体
 *
 * @method string getLogType() 获取日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method void setLogType(string $LogType) 设置日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method boolean getState() 获取状态(true:开 false:关)
 * @method void setState(boolean $State) 设置状态(true:开 false:关)
 */
class ModifySecLogJoinStateRequest extends AbstractModel
{
    /**
     * @var string 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     */
    public $LogType;

    /**
     * @var boolean 状态(true:开 false:关)
     */
    public $State;

    /**
     * @param string $LogType 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     * @param boolean $State 状态(true:开 false:关)
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
