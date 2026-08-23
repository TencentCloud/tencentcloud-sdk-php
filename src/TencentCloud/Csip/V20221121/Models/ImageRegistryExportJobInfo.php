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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库扫描子任务信息
 *
 * @method string getJobID() 获取<p>导出任务id</p>
 * @method void setJobID(string $JobID) 设置<p>导出任务id</p>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>SUCCESS： 任务成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>SUCCESS： 任务成功</li></ul>
 * @method integer getOwnerAppId() 获取<p>任务所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>任务所属账号appid</p>
 * @method string getExportType() 获取<p>导出类型</p>
 * @method void setExportType(string $ExportType) 设置<p>导出类型</p>
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method string getExportCreateTime() 获取<p>导出时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setExportCreateTime(string $ExportCreateTime) 设置<p>导出时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 */
class ImageRegistryExportJobInfo extends AbstractModel
{
    /**
     * @var string <p>导出任务id</p>
     */
    public $JobID;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>SUCCESS： 任务成功</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>任务所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>导出类型</p>
     */
    public $ExportType;

    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var string <p>导出时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ExportCreateTime;

    /**
     * @param string $JobID <p>导出任务id</p>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>SUCCESS： 任务成功</li></ul>
     * @param integer $OwnerAppId <p>任务所属账号appid</p>
     * @param string $ExportType <p>导出类型</p>
     * @param string $Name <p>任务名</p>
     * @param string $ExportCreateTime <p>导出时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExportCreateTime",$param) and $param["ExportCreateTime"] !== null) {
            $this->ExportCreateTime = $param["ExportCreateTime"];
        }
    }
}
