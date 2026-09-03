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
 * 任务信息
 *
 * @method string getJobId() 获取<p>任务 ID</p>
 * @method void setJobId(string $JobId) 设置<p>任务 ID</p>
 * @method integer getJobType() 获取<p>任务类型：1 单视频，2 批量</p><p>枚举值：</p><ul><li>1： 单视频</li><li>2： 批量</li></ul>
 * @method void setJobType(integer $JobType) 设置<p>任务类型：1 单视频，2 批量</p><p>枚举值：</p><ul><li>1： 单视频</li><li>2： 批量</li></ul>
 * @method integer getAnnotationType() 获取<p>标注模式：3 精标注</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
 * @method void setAnnotationType(integer $AnnotationType) 设置<p>标注模式：3 精标注</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
 * @method integer getStatus() 获取<p>任务状态：1 处理中，2 异常，3 成功</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>任务状态：1 处理中，2 异常，3 成功</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
 * @method integer getIngestStatus() 获取<p>文件列举状态：0 列举中，1 全部加载，2 超过数量上限截断（仅批量任务）</p><p>枚举值：</p><ul><li>0： 列举中</li><li>1： 全部加载</li><li>2： 超过数量上限截断（仅批量任务）</li></ul>
 * @method void setIngestStatus(integer $IngestStatus) 设置<p>文件列举状态：0 列举中，1 全部加载，2 超过数量上限截断（仅批量任务）</p><p>枚举值：</p><ul><li>0： 列举中</li><li>1： 全部加载</li><li>2： 超过数量上限截断（仅批量任务）</li></ul>
 * @method string getInputPath() 获取<p>输入路径（S3源为桶名/对象路径：批量任务为目录前缀，单文件为文件完整路径；HTTP源为完整URL）</p>
 * @method void setInputPath(string $InputPath) 设置<p>输入路径（S3源为桶名/对象路径：批量任务为目录前缀，单文件为文件完整路径；HTTP源为完整URL）</p>
 * @method integer getTotalNumber() 获取<p>处理项总数</p>
 * @method void setTotalNumber(integer $TotalNumber) 设置<p>处理项总数</p>
 * @method string getCreateTime() 获取<p>创建时间，Unix 时间戳（秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，Unix 时间戳（秒）</p>
 * @method string getFinishTime() 获取<p>完成时间，Unix 时间戳（秒），未完成为 0</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间，Unix 时间戳（秒），未完成为 0</p>
 */
class Job extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>任务类型：1 单视频，2 批量</p><p>枚举值：</p><ul><li>1： 单视频</li><li>2： 批量</li></ul>
     */
    public $JobType;

    /**
     * @var integer <p>标注模式：3 精标注</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
     */
    public $AnnotationType;

    /**
     * @var integer <p>任务状态：1 处理中，2 异常，3 成功</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>文件列举状态：0 列举中，1 全部加载，2 超过数量上限截断（仅批量任务）</p><p>枚举值：</p><ul><li>0： 列举中</li><li>1： 全部加载</li><li>2： 超过数量上限截断（仅批量任务）</li></ul>
     */
    public $IngestStatus;

    /**
     * @var string <p>输入路径（S3源为桶名/对象路径：批量任务为目录前缀，单文件为文件完整路径；HTTP源为完整URL）</p>
     */
    public $InputPath;

    /**
     * @var integer <p>处理项总数</p>
     */
    public $TotalNumber;

    /**
     * @var string <p>创建时间，Unix 时间戳（秒）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>完成时间，Unix 时间戳（秒），未完成为 0</p>
     */
    public $FinishTime;

    /**
     * @param string $JobId <p>任务 ID</p>
     * @param integer $JobType <p>任务类型：1 单视频，2 批量</p><p>枚举值：</p><ul><li>1： 单视频</li><li>2： 批量</li></ul>
     * @param integer $AnnotationType <p>标注模式：3 精标注</p><p>枚举值：</p><ul><li>3： 精标注</li></ul>
     * @param integer $Status <p>任务状态：1 处理中，2 异常，3 成功</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
     * @param integer $IngestStatus <p>文件列举状态：0 列举中，1 全部加载，2 超过数量上限截断（仅批量任务）</p><p>枚举值：</p><ul><li>0： 列举中</li><li>1： 全部加载</li><li>2： 超过数量上限截断（仅批量任务）</li></ul>
     * @param string $InputPath <p>输入路径（S3源为桶名/对象路径：批量任务为目录前缀，单文件为文件完整路径；HTTP源为完整URL）</p>
     * @param integer $TotalNumber <p>处理项总数</p>
     * @param string $CreateTime <p>创建时间，Unix 时间戳（秒）</p>
     * @param string $FinishTime <p>完成时间，Unix 时间戳（秒），未完成为 0</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("AnnotationType",$param) and $param["AnnotationType"] !== null) {
            $this->AnnotationType = $param["AnnotationType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IngestStatus",$param) and $param["IngestStatus"] !== null) {
            $this->IngestStatus = $param["IngestStatus"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }

        if (array_key_exists("TotalNumber",$param) and $param["TotalNumber"] !== null) {
            $this->TotalNumber = $param["TotalNumber"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
