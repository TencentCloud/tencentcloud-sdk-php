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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 处理项信息
 *
 * @method string getTaskId() 获取<p>处理项 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>处理项 ID</p>
 * @method string getFileName() 获取<p>视频文件名</p>
 * @method void setFileName(string $FileName) 设置<p>视频文件名</p>
 * @method integer getStatus() 获取<p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 * @method string getInputPath() 获取<p>视频完整路径（S3源为桶名/文件key；HTTP源为完整URL）</p>
 * @method void setInputPath(string $InputPath) 设置<p>视频完整路径（S3源为桶名/文件key；HTTP源为完整URL）</p>
 * @method string getErrorMsg() 获取<p>失败原因，成功为空</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>失败原因，成功为空</p>
 * @method string getCreateTime() 获取<p>创建时间，Unix 时间戳（秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，Unix 时间戳（秒）</p>
 * @method string getFinishTime() 获取<p>完成时间，Unix 时间戳（秒），进行中为 0</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间，Unix 时间戳（秒），进行中为 0</p>
 */
class Task extends AbstractModel
{
    /**
     * @var string <p>处理项 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>视频文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
     */
    public $Status;

    /**
     * @var string <p>视频完整路径（S3源为桶名/文件key；HTTP源为完整URL）</p>
     */
    public $InputPath;

    /**
     * @var string <p>失败原因，成功为空</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>创建时间，Unix 时间戳（秒）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>完成时间，Unix 时间戳（秒），进行中为 0</p>
     */
    public $FinishTime;

    /**
     * @param string $TaskId <p>处理项 ID</p>
     * @param string $FileName <p>视频文件名</p>
     * @param integer $Status <p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
     * @param string $InputPath <p>视频完整路径（S3源为桶名/文件key；HTTP源为完整URL）</p>
     * @param string $ErrorMsg <p>失败原因，成功为空</p>
     * @param string $CreateTime <p>创建时间，Unix 时间戳（秒）</p>
     * @param string $FinishTime <p>完成时间，Unix 时间戳（秒），进行中为 0</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
