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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线导出任务
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getDataLength() 获取日志总数
 * @method void setDataLength(integer $DataLength) 设置日志总数
 * @method integer getStatus() 获取任务状态，0等待下载，1下载中，2下载完成，3下载失败，4文件过期
 * @method void setStatus(integer $Status) 设置任务状态，0等待下载，1下载中，2下载完成，3下载失败，4文件过期
 * @method string getExpireTime() 获取文件过期时间
 * @method void setExpireTime(string $ExpireTime) 设置文件过期时间
 * @method float getProgress() 获取下载进度
 * @method void setProgress(float $Progress) 设置下载进度
 * @method string getErrorInfo() 获取导出失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorInfo(string $ErrorInfo) 设置导出失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseUserCos() 获取是否使用Cos
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseUserCos(integer $UseUserCos) 设置是否使用Cos
注意：此字段可能返回 null，表示取不到有效值。
 */
class OfflineExportTask extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 日志总数
     */
    public $DataLength;

    /**
     * @var integer 任务状态，0等待下载，1下载中，2下载完成，3下载失败，4文件过期
     */
    public $Status;

    /**
     * @var string 文件过期时间
     */
    public $ExpireTime;

    /**
     * @var float 下载进度
     */
    public $Progress;

    /**
     * @var string 导出失败信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorInfo;

    /**
     * @var integer 是否使用Cos
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseUserCos;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param string $CreateTime 创建时间
     * @param integer $DataLength 日志总数
     * @param integer $Status 任务状态，0等待下载，1下载中，2下载完成，3下载失败，4文件过期
     * @param string $ExpireTime 文件过期时间
     * @param float $Progress 下载进度
     * @param string $ErrorInfo 导出失败信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseUserCos 是否使用Cos
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DataLength",$param) and $param["DataLength"] !== null) {
            $this->DataLength = $param["DataLength"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("UseUserCos",$param) and $param["UseUserCos"] !== null) {
            $this->UseUserCos = $param["UseUserCos"];
        }
    }
}
