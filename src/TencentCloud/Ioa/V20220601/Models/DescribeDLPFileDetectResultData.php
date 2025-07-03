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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询文件检测结果响应数据
 *
 * @method string getFileMd5() 获取提交任务时的文件md5
 * @method void setFileMd5(string $FileMd5) 设置提交任务时的文件md5
 * @method string getFileName() 获取提交任务时的文件名
 * @method void setFileName(string $FileName) 设置提交任务时的文件名
 * @method string getStatus() 获取状态：等待检测->正在检测->检测失败/检测成功。或任务不存在
 * @method void setStatus(string $Status) 设置状态：等待检测->正在检测->检测失败/检测成功。或任务不存在
 * @method string getDetectResult() 获取文件检测结果，json字符串。
 * @method void setDetectResult(string $DetectResult) 设置文件检测结果，json字符串。
 */
class DescribeDLPFileDetectResultData extends AbstractModel
{
    /**
     * @var string 提交任务时的文件md5
     */
    public $FileMd5;

    /**
     * @var string 提交任务时的文件名
     */
    public $FileName;

    /**
     * @var string 状态：等待检测->正在检测->检测失败/检测成功。或任务不存在
     */
    public $Status;

    /**
     * @var string 文件检测结果，json字符串。
     */
    public $DetectResult;

    /**
     * @param string $FileMd5 提交任务时的文件md5
     * @param string $FileName 提交任务时的文件名
     * @param string $Status 状态：等待检测->正在检测->检测失败/检测成功。或任务不存在
     * @param string $DetectResult 文件检测结果，json字符串。
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
        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DetectResult",$param) and $param["DetectResult"] !== null) {
            $this->DetectResult = $param["DetectResult"];
        }
    }
}
