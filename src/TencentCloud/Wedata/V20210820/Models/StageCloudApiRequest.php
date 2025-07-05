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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 无
 *
 * @method string getClusterId() 获取无
 * @method void setClusterId(string $ClusterId) 设置无
 * @method string getStageId() 获取无
 * @method void setStageId(string $StageId) 设置无
 * @method string getJobId() 获取无
 * @method void setJobId(string $JobId) 设置无
 * @method string getStageName() 获取无
 * @method void setStageName(string $StageName) 设置无
 * @method string getType() 获取无
 * @method void setType(string $Type) 设置无
 * @method string getMode() 获取无
 * @method void setMode(string $Mode) 设置无
 * @method string getVersion() 获取无
 * @method void setVersion(string $Version) 设置无
 * @method string getQueue() 获取无
 * @method void setQueue(string $Queue) 设置无
 * @method string getContent() 获取无
 * @method void setContent(string $Content) 设置无
 * @method array getParameters() 获取无
 * @method void setParameters(array $Parameters) 设置无
 * @method string getDescription() 获取无
 * @method void setDescription(string $Description) 设置无
 * @method string getProjectId() 获取无
 * @method void setProjectId(string $ProjectId) 设置无
 * @method string getJobType() 获取无
 * @method void setJobType(string $JobType) 设置无
 * @method string getWorkFlowId() 获取无
 * @method void setWorkFlowId(string $WorkFlowId) 设置无
 */
class StageCloudApiRequest extends AbstractModel
{
    /**
     * @var string 无
     */
    public $ClusterId;

    /**
     * @var string 无
     */
    public $StageId;

    /**
     * @var string 无
     */
    public $JobId;

    /**
     * @var string 无
     */
    public $StageName;

    /**
     * @var string 无
     */
    public $Type;

    /**
     * @var string 无
     */
    public $Mode;

    /**
     * @var string 无
     */
    public $Version;

    /**
     * @var string 无
     */
    public $Queue;

    /**
     * @var string 无
     */
    public $Content;

    /**
     * @var array 无
     */
    public $Parameters;

    /**
     * @var string 无
     */
    public $Description;

    /**
     * @var string 无
     */
    public $ProjectId;

    /**
     * @var string 无
     */
    public $JobType;

    /**
     * @var string 无
     */
    public $WorkFlowId;

    /**
     * @param string $ClusterId 无
     * @param string $StageId 无
     * @param string $JobId 无
     * @param string $StageName 无
     * @param string $Type 无
     * @param string $Mode 无
     * @param string $Version 无
     * @param string $Queue 无
     * @param string $Content 无
     * @param array $Parameters 无
     * @param string $Description 无
     * @param string $ProjectId 无
     * @param string $JobType 无
     * @param string $WorkFlowId 无
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StageId",$param) and $param["StageId"] !== null) {
            $this->StageId = $param["StageId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StageName",$param) and $param["StageName"] !== null) {
            $this->StageName = $param["StageName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }
    }
}
