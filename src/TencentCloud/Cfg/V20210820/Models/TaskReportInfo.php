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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 演练报告状态信息
 *
 * @method integer getStage() 获取0--未开始，1--正在导出，2--导出成功，3--导出失败
 * @method void setStage(integer $Stage) 设置0--未开始，1--正在导出，2--导出成功，3--导出失败
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpirationTime() 获取有效期截止时间
 * @method void setExpirationTime(string $ExpirationTime) 设置有效期截止时间
 * @method boolean getExpired() 获取是否有效
 * @method void setExpired(boolean $Expired) 设置是否有效
 * @method string getCosUrl() 获取演练报告cos文件地址
 * @method void setCosUrl(string $CosUrl) 设置演练报告cos文件地址
 * @method string getLog() 获取演练报告导出日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置演练报告导出日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getArchiveStage() 获取0--未开始，1--正在归档，2--归档成功，3--归档失败
 * @method void setArchiveStage(integer $ArchiveStage) 设置0--未开始，1--正在归档，2--归档成功，3--归档失败
 * @method string getArchiveTime() 获取归档时间
 * @method void setArchiveTime(string $ArchiveTime) 设置归档时间
 * @method string getArchiveUuid() 获取归档ID
 * @method void setArchiveUuid(string $ArchiveUuid) 设置归档ID
 */
class TaskReportInfo extends AbstractModel
{
    /**
     * @var integer 0--未开始，1--正在导出，2--导出成功，3--导出失败
     */
    public $Stage;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 有效期截止时间
     */
    public $ExpirationTime;

    /**
     * @var boolean 是否有效
     */
    public $Expired;

    /**
     * @var string 演练报告cos文件地址
     */
    public $CosUrl;

    /**
     * @var string 演练报告导出日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @var integer 0--未开始，1--正在归档，2--归档成功，3--归档失败
     */
    public $ArchiveStage;

    /**
     * @var string 归档时间
     */
    public $ArchiveTime;

    /**
     * @var string 归档ID
     */
    public $ArchiveUuid;

    /**
     * @param integer $Stage 0--未开始，1--正在导出，2--导出成功，3--导出失败
     * @param string $CreateTime 创建时间
     * @param string $ExpirationTime 有效期截止时间
     * @param boolean $Expired 是否有效
     * @param string $CosUrl 演练报告cos文件地址
     * @param string $Log 演练报告导出日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ArchiveStage 0--未开始，1--正在归档，2--归档成功，3--归档失败
     * @param string $ArchiveTime 归档时间
     * @param string $ArchiveUuid 归档ID
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("ArchiveStage",$param) and $param["ArchiveStage"] !== null) {
            $this->ArchiveStage = $param["ArchiveStage"];
        }

        if (array_key_exists("ArchiveTime",$param) and $param["ArchiveTime"] !== null) {
            $this->ArchiveTime = $param["ArchiveTime"];
        }

        if (array_key_exists("ArchiveUuid",$param) and $param["ArchiveUuid"] !== null) {
            $this->ArchiveUuid = $param["ArchiveUuid"];
        }
    }
}
