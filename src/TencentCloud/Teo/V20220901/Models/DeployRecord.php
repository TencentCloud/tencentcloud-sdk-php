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
 * 配置组版本发布记录详情。
 *
 * @method array getConfigGroupVersionInfos() 获取发布版本的详细信息。
 * @method void setConfigGroupVersionInfos(array $ConfigGroupVersionInfos) 设置发布版本的详细信息。
 * @method string getDeployTime() 获取发布时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setDeployTime(string $DeployTime) 设置发布时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getStatus() 获取发布状态，取值有：
<li> deploying ：发布中；</li>
<li>failure ：发布失败；</li>
<li>success： 发布成功。</li>
 * @method void setStatus(string $Status) 设置发布状态，取值有：
<li> deploying ：发布中；</li>
<li>failure ：发布失败；</li>
<li>success： 发布成功。</li>
 * @method string getMessage() 获取发布结果信息。
 * @method void setMessage(string $Message) 设置发布结果信息。
 * @method string getRecordId() 获取发布记录 ID。
 * @method void setRecordId(string $RecordId) 设置发布记录 ID。
 * @method string getDescription() 获取变更说明。
 * @method void setDescription(string $Description) 设置变更说明。
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var array 发布版本的详细信息。
     */
    public $ConfigGroupVersionInfos;

    /**
     * @var string 发布时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $DeployTime;

    /**
     * @var string 发布状态，取值有：
<li> deploying ：发布中；</li>
<li>failure ：发布失败；</li>
<li>success： 发布成功。</li>
     */
    public $Status;

    /**
     * @var string 发布结果信息。
     */
    public $Message;

    /**
     * @var string 发布记录 ID。
     */
    public $RecordId;

    /**
     * @var string 变更说明。
     */
    public $Description;

    /**
     * @param array $ConfigGroupVersionInfos 发布版本的详细信息。
     * @param string $DeployTime 发布时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $Status 发布状态，取值有：
<li> deploying ：发布中；</li>
<li>failure ：发布失败；</li>
<li>success： 发布成功。</li>
     * @param string $Message 发布结果信息。
     * @param string $RecordId 发布记录 ID。
     * @param string $Description 变更说明。
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
        if (array_key_exists("ConfigGroupVersionInfos",$param) and $param["ConfigGroupVersionInfos"] !== null) {
            $this->ConfigGroupVersionInfos = [];
            foreach ($param["ConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->ConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
