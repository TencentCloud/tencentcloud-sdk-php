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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出文件
 *
 * @method string getFileName() 获取<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadUrl() 获取<p>下载地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>下载地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取<p>进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置<p>进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishTime() 获取<p>完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAsyncRequestId() 获取<p>req</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置<p>req</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExportFile extends AbstractModel
{
    /**
     * @var string <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>下载地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var string <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var integer <p>进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string <p>完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var integer <p>req</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncRequestId;

    /**
     * @param string $FileName <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadUrl <p>下载地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress <p>进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishTime <p>完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AsyncRequestId <p>req</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }
    }
}
