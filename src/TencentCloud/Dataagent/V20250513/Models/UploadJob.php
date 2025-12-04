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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上传任务
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getJobId() 获取任务id
 * @method void setJobId(string $JobId) 设置任务id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getKnowledgeBaseId() 获取知识库id
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库id
 * @method string getUin() 获取uin
 * @method void setUin(string $Uin) 设置uin
 * @method string getSubUin() 获取subuin
 * @method void setSubUin(string $SubUin) 设置subuin
 * @method string getStatus() 获取Pending、FileUploading、
FileParsing、
Success、
Failed 
	
 * @method void setStatus(string $Status) 设置Pending、FileUploading、
FileParsing、
Success、
Failed 
	
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getUpdateTime() 获取任务更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 */
class UploadJob extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 任务id
     */
    public $JobId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 知识库id
     */
    public $KnowledgeBaseId;

    /**
     * @var string uin
     */
    public $Uin;

    /**
     * @var string subuin
     */
    public $SubUin;

    /**
     * @var string Pending、FileUploading、
FileParsing、
Success、
Failed 
	
     */
    public $Status;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间
     */
    public $UpdateTime;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @param integer $Id id
     * @param string $JobId 任务id
     * @param string $InstanceId 实例id
     * @param string $KnowledgeBaseId 知识库id
     * @param string $Uin uin
     * @param string $SubUin subuin
     * @param string $Status Pending、FileUploading、
FileParsing、
Success、
Failed 
	
     * @param string $CreateTime 任务创建时间
     * @param string $UpdateTime 任务更新时间
     * @param string $Message 错误信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
