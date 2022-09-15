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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlySecMiniAppReportUrl请求参数结构体
 *
 * @method string getTaskID() 获取任务id
 * @method void setTaskID(string $TaskID) 设置任务id
 * @method string getMiniAppID() 获取小程序appid
 * @method void setMiniAppID(string $MiniAppID) 设置小程序appid
 * @method integer getMode() 获取诊断方式 1:基础诊断，2:深度诊断
 * @method void setMode(integer $Mode) 设置诊断方式 1:基础诊断，2:深度诊断
 * @method integer getReportType() 获取诊断报告类型 0:基础诊断报告，1:总裁版诊断报告，2:诊断报告json结果
 * @method void setReportType(integer $ReportType) 设置诊断报告类型 0:基础诊断报告，1:总裁版诊断报告，2:诊断报告json结果
 */
class DescribeFlySecMiniAppReportUrlRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskID;

    /**
     * @var string 小程序appid
     */
    public $MiniAppID;

    /**
     * @var integer 诊断方式 1:基础诊断，2:深度诊断
     */
    public $Mode;

    /**
     * @var integer 诊断报告类型 0:基础诊断报告，1:总裁版诊断报告，2:诊断报告json结果
     */
    public $ReportType;

    /**
     * @param string $TaskID 任务id
     * @param string $MiniAppID 小程序appid
     * @param integer $Mode 诊断方式 1:基础诊断，2:深度诊断
     * @param integer $ReportType 诊断报告类型 0:基础诊断报告，1:总裁版诊断报告，2:诊断报告json结果
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("MiniAppID",$param) and $param["MiniAppID"] !== null) {
            $this->MiniAppID = $param["MiniAppID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }
    }
}
