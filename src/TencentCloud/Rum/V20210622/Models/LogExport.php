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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志导出记录
 *
 * @method string getCosPath() 获取日志导出路径
 * @method void setCosPath(string $CosPath) 设置日志导出路径
 * @method integer getCount() 获取日志导出数量
 * @method void setCount(integer $Count) 设置日志导出数量
 * @method string getCreateTime() 获取日志导出任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置日志导出任务创建时间
 * @method string getExportID() 获取日志导出任务ID
 * @method void setExportID(string $ExportID) 设置日志导出任务ID
 * @method string getFileName() 获取日志导出文件名
 * @method void setFileName(string $FileName) 设置日志导出文件名
 * @method integer getFileSize() 获取日志文件大小
 * @method void setFileSize(integer $FileSize) 设置日志文件大小
 * @method string getFormat() 获取日志导出格式
 * @method void setFormat(string $Format) 设置日志导出格式
 * @method string getOrder() 获取日志导出时间排序
 * @method void setOrder(string $Order) 设置日志导出时间排序
 * @method string getQuery() 获取日志导出查询语句
 * @method void setQuery(string $Query) 设置日志导出查询语句
 * @method string getStartTime() 获取日志导出起始时间
 * @method void setStartTime(string $StartTime) 设置日志导出起始时间
 * @method string getEndTime() 获取日志导出结束时间
 * @method void setEndTime(string $EndTime) 设置日志导出结束时间
 * @method string getStatus() 获取日志下载状态。Queuing:导出正在排队中，Processing:导出正在进行中，Complete:导出完成，Failed:导出失败，Expired:日志导出已过期（三天有效期）。
 * @method void setStatus(string $Status) 设置日志下载状态。Queuing:导出正在排队中，Processing:导出正在进行中，Complete:导出完成，Failed:导出失败，Expired:日志导出已过期（三天有效期）。
 */
class LogExport extends AbstractModel
{
    /**
     * @var string 日志导出路径
     */
    public $CosPath;

    /**
     * @var integer 日志导出数量
     */
    public $Count;

    /**
     * @var string 日志导出任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 日志导出任务ID
     */
    public $ExportID;

    /**
     * @var string 日志导出文件名
     */
    public $FileName;

    /**
     * @var integer 日志文件大小
     */
    public $FileSize;

    /**
     * @var string 日志导出格式
     */
    public $Format;

    /**
     * @var string 日志导出时间排序
     */
    public $Order;

    /**
     * @var string 日志导出查询语句
     */
    public $Query;

    /**
     * @var string 日志导出起始时间
     */
    public $StartTime;

    /**
     * @var string 日志导出结束时间
     */
    public $EndTime;

    /**
     * @var string 日志下载状态。Queuing:导出正在排队中，Processing:导出正在进行中，Complete:导出完成，Failed:导出失败，Expired:日志导出已过期（三天有效期）。
     */
    public $Status;

    /**
     * @param string $CosPath 日志导出路径
     * @param integer $Count 日志导出数量
     * @param string $CreateTime 日志导出任务创建时间
     * @param string $ExportID 日志导出任务ID
     * @param string $FileName 日志导出文件名
     * @param integer $FileSize 日志文件大小
     * @param string $Format 日志导出格式
     * @param string $Order 日志导出时间排序
     * @param string $Query 日志导出查询语句
     * @param string $StartTime 日志导出起始时间
     * @param string $EndTime 日志导出结束时间
     * @param string $Status 日志下载状态。Queuing:导出正在排队中，Processing:导出正在进行中，Complete:导出完成，Failed:导出失败，Expired:日志导出已过期（三天有效期）。
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
        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExportID",$param) and $param["ExportID"] !== null) {
            $this->ExportID = $param["ExportID"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
