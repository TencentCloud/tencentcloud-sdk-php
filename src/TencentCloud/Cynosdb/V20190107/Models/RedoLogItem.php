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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redo日志详情
 *
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小
 * @method void setFileSize(integer $FileSize) 设置文件大小
 * @method string getBackupTime() 获取备份时间
 * @method void setBackupTime(string $BackupTime) 设置备份时间
 * @method integer getRedoLogId() 获取redoLogId
 * @method void setRedoLogId(integer $RedoLogId) 设置redoLogId
 * @method array getRedoCrossRegions() 获取跨地域信息
 * @method void setRedoCrossRegions(array $RedoCrossRegions) 设置跨地域信息
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getFinishTime() 获取完成时间
 * @method void setFinishTime(string $FinishTime) 设置完成时间
 */
class RedoLogItem extends AbstractModel
{
    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小
     */
    public $FileSize;

    /**
     * @var string 备份时间
     */
    public $BackupTime;

    /**
     * @var integer redoLogId
     */
    public $RedoLogId;

    /**
     * @var array 跨地域信息
     */
    public $RedoCrossRegions;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 完成时间
     */
    public $FinishTime;

    /**
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小
     * @param string $BackupTime 备份时间
     * @param integer $RedoLogId redoLogId
     * @param array $RedoCrossRegions 跨地域信息
     * @param string $Status 状态
     * @param string $StartTime 开始时间
     * @param string $FinishTime 完成时间
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("RedoLogId",$param) and $param["RedoLogId"] !== null) {
            $this->RedoLogId = $param["RedoLogId"];
        }

        if (array_key_exists("RedoCrossRegions",$param) and $param["RedoCrossRegions"] !== null) {
            $this->RedoCrossRegions = [];
            foreach ($param["RedoCrossRegions"] as $key => $value){
                $obj = new BackupRegionAndIds();
                $obj->deserialize($value);
                array_push($this->RedoCrossRegions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
