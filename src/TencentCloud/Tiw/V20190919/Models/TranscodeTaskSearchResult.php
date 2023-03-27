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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码任务搜索结果
 *
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getTaskId() 获取任务唯一ID
 * @method void setTaskId(string $TaskId) 设置任务唯一ID
 * @method string getStatus() 获取任务的当前状态
- QUEUED: 正在排队等待转换
- PROCESSING: 转换中
- FINISHED: 转换完成
 * @method void setStatus(string $Status) 设置任务的当前状态
- QUEUED: 正在排队等待转换
- PROCESSING: 转换中
- FINISHED: 转换完成
 * @method string getOriginalFilename() 获取转码文件原始名称
 * @method void setOriginalFilename(string $OriginalFilename) 设置转码文件原始名称
 * @method integer getSdkAppId() 获取用户应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置用户应用SdkAppId
 * @method TranscodeTaskResult getResult() 获取转码任务结果
 * @method void setResult(TranscodeTaskResult $Result) 设置转码任务结果
 * @method boolean getIsStatic() 获取是否静态转码
 * @method void setIsStatic(boolean $IsStatic) 设置是否静态转码
 */
class TranscodeTaskSearchResult extends AbstractModel
{
    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务唯一ID
     */
    public $TaskId;

    /**
     * @var string 任务的当前状态
- QUEUED: 正在排队等待转换
- PROCESSING: 转换中
- FINISHED: 转换完成
     */
    public $Status;

    /**
     * @var string 转码文件原始名称
     */
    public $OriginalFilename;

    /**
     * @var integer 用户应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var TranscodeTaskResult 转码任务结果
     */
    public $Result;

    /**
     * @var boolean 是否静态转码
     */
    public $IsStatic;

    /**
     * @param string $CreateTime 任务创建时间
     * @param string $TaskId 任务唯一ID
     * @param string $Status 任务的当前状态
- QUEUED: 正在排队等待转换
- PROCESSING: 转换中
- FINISHED: 转换完成
     * @param string $OriginalFilename 转码文件原始名称
     * @param integer $SdkAppId 用户应用SdkAppId
     * @param TranscodeTaskResult $Result 转码任务结果
     * @param boolean $IsStatic 是否静态转码
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalFilename",$param) and $param["OriginalFilename"] !== null) {
            $this->OriginalFilename = $param["OriginalFilename"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new TranscodeTaskResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("IsStatic",$param) and $param["IsStatic"] !== null) {
            $this->IsStatic = $param["IsStatic"];
        }
    }
}
