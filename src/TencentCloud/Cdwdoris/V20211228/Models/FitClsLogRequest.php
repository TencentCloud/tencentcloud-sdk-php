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
 * FitClsLog请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID，例如cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群ID，例如cdwch-xxxx
 * @method string getClsLogSetId() 获取cls日志集ID
 * @method void setClsLogSetId(string $ClsLogSetId) 设置cls日志集ID
 * @method string getLogType() 获取日志的类型，es还是cls_topic
 * @method void setLogType(string $LogType) 设置日志的类型，es还是cls_topic
 */
class FitClsLogRequest extends AbstractModel
{
    /**
     * @var string 集群ID，例如cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var string cls日志集ID
     */
    public $ClsLogSetId;

    /**
     * @var string 日志的类型，es还是cls_topic
     */
    public $LogType;

    /**
     * @param string $InstanceId 集群ID，例如cdwch-xxxx
     * @param string $ClsLogSetId cls日志集ID
     * @param string $LogType 日志的类型，es还是cls_topic
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

        if (array_key_exists("ClsLogSetId",$param) and $param["ClsLogSetId"] !== null) {
            $this->ClsLogSetId = $param["ClsLogSetId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
