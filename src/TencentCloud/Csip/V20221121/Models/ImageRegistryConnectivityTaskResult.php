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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库联通性任务结果
 *
 * @method string getConnDetectMessage() 获取<p>检查结果</p>
 * @method void setConnDetectMessage(string $ConnDetectMessage) 设置<p>检查结果</p>
 * @method string getConnDetectStatus() 获取<p>检查状态</p>
 * @method void setConnDetectStatus(string $ConnDetectStatus) 设置<p>检查状态</p>
 * @method string getFailReason() 获取<p>失败原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p>
 * @method string getQuuid() 获取<p>主机Quuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机Quuid</p>
 * @method string getSolution() 获取<p>排查解决方案</p>
 * @method void setSolution(string $Solution) 设置<p>排查解决方案</p>
 * @method string getUuid() 获取<p>主机Uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机Uuid</p>
 */
class ImageRegistryConnectivityTaskResult extends AbstractModel
{
    /**
     * @var string <p>检查结果</p>
     */
    public $ConnDetectMessage;

    /**
     * @var string <p>检查状态</p>
     */
    public $ConnDetectStatus;

    /**
     * @var string <p>失败原因</p>
     */
    public $FailReason;

    /**
     * @var string <p>主机Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>排查解决方案</p>
     */
    public $Solution;

    /**
     * @var string <p>主机Uuid</p>
     */
    public $Uuid;

    /**
     * @param string $ConnDetectMessage <p>检查结果</p>
     * @param string $ConnDetectStatus <p>检查状态</p>
     * @param string $FailReason <p>失败原因</p>
     * @param string $Quuid <p>主机Quuid</p>
     * @param string $Solution <p>排查解决方案</p>
     * @param string $Uuid <p>主机Uuid</p>
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
        if (array_key_exists("ConnDetectMessage",$param) and $param["ConnDetectMessage"] !== null) {
            $this->ConnDetectMessage = $param["ConnDetectMessage"];
        }

        if (array_key_exists("ConnDetectStatus",$param) and $param["ConnDetectStatus"] !== null) {
            $this->ConnDetectStatus = $param["ConnDetectStatus"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
