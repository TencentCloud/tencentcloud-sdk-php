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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理任务概览。
 *
 * @method string getTaskId() 获取<p>图片处理任务TaskId。</p>
 * @method void setTaskId(string $TaskId) 设置<p>图片处理任务TaskId。</p>
 * @method string getStatus() 获取<p>任务状态。</p><p>枚举值：</p><ul><li>FINISH： 任务结束</li><li>PROCESSING： 任务处理中</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态。</p><p>枚举值：</p><ul><li>FINISH： 任务结束</li><li>PROCESSING： 任务处理中</li></ul>
 * @method string getInput() 获取<p>输入文件。</p>
 * @method void setInput(string $Input) 设置<p>输入文件。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getBeginProcessTime() 获取<p>开始处理时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置<p>开始处理时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getFinishTime() 获取<p>结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
 * @method boolean getSubTaskHasFailed() 获取<p>子任务失败标识。</p>
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) 设置<p>子任务失败标识。</p>
 */
class ImageTaskInfo extends AbstractModel
{
    /**
     * @var string <p>图片处理任务TaskId。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态。</p><p>枚举值：</p><ul><li>FINISH： 任务结束</li><li>PROCESSING： 任务处理中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>输入文件。</p>
     */
    public $Input;

    /**
     * @var string <p>创建时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $CreateTime;

    /**
     * @var string <p>开始处理时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $FinishTime;

    /**
     * @var boolean <p>子任务失败标识。</p>
     */
    public $SubTaskHasFailed;

    /**
     * @param string $TaskId <p>图片处理任务TaskId。</p>
     * @param string $Status <p>任务状态。</p><p>枚举值：</p><ul><li>FINISH： 任务结束</li><li>PROCESSING： 任务处理中</li></ul>
     * @param string $Input <p>输入文件。</p>
     * @param string $CreateTime <p>创建时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $BeginProcessTime <p>开始处理时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $FinishTime <p>结束时间。</p><p>参数格式：YYYY-MM-DDThh:mm:ssZ</p>
     * @param boolean $SubTaskHasFailed <p>子任务失败标识。</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }
    }
}
