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
 * ModifySecLogJoinObjects请求参数结构体
 *
 * @method string getLogType() 获取日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method void setLogType(string $LogType) 设置日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method array getBindList() 获取绑定主机quuid列表
 * @method void setBindList(array $BindList) 设置绑定主机quuid列表
 * @method array getUnBindList() 获取待解绑主机quuid列表
 * @method void setUnBindList(array $UnBindList) 设置待解绑主机quuid列表
 */
class ModifySecLogJoinObjectsRequest extends AbstractModel
{
    /**
     * @var string 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     */
    public $LogType;

    /**
     * @var array 绑定主机quuid列表
     */
    public $BindList;

    /**
     * @var array 待解绑主机quuid列表
     */
    public $UnBindList;

    /**
     * @param string $LogType 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     * @param array $BindList 绑定主机quuid列表
     * @param array $UnBindList 待解绑主机quuid列表
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

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = $param["BindList"];
        }

        if (array_key_exists("UnBindList",$param) and $param["UnBindList"] !== null) {
            $this->UnBindList = $param["UnBindList"];
        }
    }
}
