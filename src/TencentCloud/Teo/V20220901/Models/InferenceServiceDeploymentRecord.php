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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务部署历史记录。
 *
 * @method string getRecordId() 获取部署记录 ID。
 * @method void setRecordId(string $RecordId) 设置部署记录 ID。
 * @method string getOperation() 获取部署操作类型，取值：
<li>create：创建；</li>
<li>update：更新；</li>
<li>resume：启用；</li>
<li>stop：停用。</li>
 * @method void setOperation(string $Operation) 设置部署操作类型，取值：
<li>create：创建；</li>
<li>update：更新；</li>
<li>resume：启用；</li>
<li>stop：停用。</li>
 * @method string getStatus() 获取部署状态，取值：
<li>processing：部署中；</li>
<li>succeeded：部署成功；</li>
<li>failed：部署失败。</li>
 * @method void setStatus(string $Status) 设置部署状态，取值：
<li>processing：部署中；</li>
<li>succeeded：部署成功；</li>
<li>failed：部署失败。</li>
 * @method integer getDuration() 获取部署时长，单位：秒。
 * @method void setDuration(integer $Duration) 设置部署时长，单位：秒。
 * @method InferenceServiceConfig getInferenceServiceConfig() 获取本次推理服务部署的配置。
 * @method void setInferenceServiceConfig(InferenceServiceConfig $InferenceServiceConfig) 设置本次推理服务部署的配置。
 * @method string getCreateTime() 获取部署发起时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置部署发起时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getActiveStatus() 获取该部署配置是否是当前生效配置，取值：
<li> active：当前生效配置；</li>
<li> inactive：历史版本或异常版本配置。</li>
 * @method void setActiveStatus(string $ActiveStatus) 设置该部署配置是否是当前生效配置，取值：
<li> active：当前生效配置；</li>
<li> inactive：历史版本或异常版本配置。</li>
 */
class InferenceServiceDeploymentRecord extends AbstractModel
{
    /**
     * @var string 部署记录 ID。
     */
    public $RecordId;

    /**
     * @var string 部署操作类型，取值：
<li>create：创建；</li>
<li>update：更新；</li>
<li>resume：启用；</li>
<li>stop：停用。</li>
     */
    public $Operation;

    /**
     * @var string 部署状态，取值：
<li>processing：部署中；</li>
<li>succeeded：部署成功；</li>
<li>failed：部署失败。</li>
     */
    public $Status;

    /**
     * @var integer 部署时长，单位：秒。
     */
    public $Duration;

    /**
     * @var InferenceServiceConfig 本次推理服务部署的配置。
     */
    public $InferenceServiceConfig;

    /**
     * @var string 部署发起时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 该部署配置是否是当前生效配置，取值：
<li> active：当前生效配置；</li>
<li> inactive：历史版本或异常版本配置。</li>
     */
    public $ActiveStatus;

    /**
     * @param string $RecordId 部署记录 ID。
     * @param string $Operation 部署操作类型，取值：
<li>create：创建；</li>
<li>update：更新；</li>
<li>resume：启用；</li>
<li>stop：停用。</li>
     * @param string $Status 部署状态，取值：
<li>processing：部署中；</li>
<li>succeeded：部署成功；</li>
<li>failed：部署失败。</li>
     * @param integer $Duration 部署时长，单位：秒。
     * @param InferenceServiceConfig $InferenceServiceConfig 本次推理服务部署的配置。
     * @param string $CreateTime 部署发起时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $ActiveStatus 该部署配置是否是当前生效配置，取值：
<li> active：当前生效配置；</li>
<li> inactive：历史版本或异常版本配置。</li>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("InferenceServiceConfig",$param) and $param["InferenceServiceConfig"] !== null) {
            $this->InferenceServiceConfig = new InferenceServiceConfig();
            $this->InferenceServiceConfig->deserialize($param["InferenceServiceConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }
    }
}
