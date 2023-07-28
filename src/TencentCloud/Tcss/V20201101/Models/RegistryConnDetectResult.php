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
 * 镜像仓库联通性检测结果
 *
 * @method string getQuuid() 获取联通性检测的主机quuid 或者 backend
 * @method void setQuuid(string $Quuid) 设置联通性检测的主机quuid 或者 backend
 * @method string getUuid() 获取联通性检测的主机uuid 或者 backend
 * @method void setUuid(string $Uuid) 设置联通性检测的主机uuid 或者 backend
 * @method string getConnDetectStatus() 获取检测结果状态
 * @method void setConnDetectStatus(string $ConnDetectStatus) 设置检测结果状态
 * @method string getConnDetectMessage() 获取检测结果信息
 * @method void setConnDetectMessage(string $ConnDetectMessage) 设置检测结果信息
 * @method string getSolution() 获取失败的解决方案
 * @method void setSolution(string $Solution) 设置失败的解决方案
 * @method string getFailReason() 获取失败原因
 * @method void setFailReason(string $FailReason) 设置失败原因
 */
class RegistryConnDetectResult extends AbstractModel
{
    /**
     * @var string 联通性检测的主机quuid 或者 backend
     */
    public $Quuid;

    /**
     * @var string 联通性检测的主机uuid 或者 backend
     */
    public $Uuid;

    /**
     * @var string 检测结果状态
     */
    public $ConnDetectStatus;

    /**
     * @var string 检测结果信息
     */
    public $ConnDetectMessage;

    /**
     * @var string 失败的解决方案
     */
    public $Solution;

    /**
     * @var string 失败原因
     */
    public $FailReason;

    /**
     * @param string $Quuid 联通性检测的主机quuid 或者 backend
     * @param string $Uuid 联通性检测的主机uuid 或者 backend
     * @param string $ConnDetectStatus 检测结果状态
     * @param string $ConnDetectMessage 检测结果信息
     * @param string $Solution 失败的解决方案
     * @param string $FailReason 失败原因
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("ConnDetectStatus",$param) and $param["ConnDetectStatus"] !== null) {
            $this->ConnDetectStatus = $param["ConnDetectStatus"];
        }

        if (array_key_exists("ConnDetectMessage",$param) and $param["ConnDetectMessage"] !== null) {
            $this->ConnDetectMessage = $param["ConnDetectMessage"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
