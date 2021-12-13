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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 取回视频任务信息
 *
 * @method string getFileId() 获取文件ID。
 * @method void setFileId(string $FileId) 设置文件ID。
 * @method string getOriginalStorageClass() 获取文件原始存储类型。
 * @method void setOriginalStorageClass(string $OriginalStorageClass) 设置文件原始存储类型。
 * @method string getTargetStorageClass() 获取文件目标存储类型。对于临时取回，目标存储类型与原始存储类型相同。
 * @method void setTargetStorageClass(string $TargetStorageClass) 设置文件目标存储类型。对于临时取回，目标存储类型与原始存储类型相同。
 * @method string getRestoreTier() 获取取回模式，取值：
<li>Expedited：极速模式</li>
<li>Standard：标准模式</li>
<li>Bulk：批量模式</li>
 * @method void setRestoreTier(string $RestoreTier) 设置取回模式，取值：
<li>Expedited：极速模式</li>
<li>Standard：标准模式</li>
<li>Bulk：批量模式</li>
 * @method integer getRestoreDay() 获取临时取回副本有效期，单位：天。对于永久取回，取值为0。
 * @method void setRestoreDay(integer $RestoreDay) 设置临时取回副本有效期，单位：天。对于永久取回，取值为0。
 * @method integer getStatus() 获取该字段已废弃。
 * @method void setStatus(integer $Status) 设置该字段已废弃。
 * @method string getMessage() 获取该字段已废弃。
 * @method void setMessage(string $Message) 设置该字段已废弃。
 */
class RestoreMediaTask extends AbstractModel
{
    /**
     * @var string 文件ID。
     */
    public $FileId;

    /**
     * @var string 文件原始存储类型。
     */
    public $OriginalStorageClass;

    /**
     * @var string 文件目标存储类型。对于临时取回，目标存储类型与原始存储类型相同。
     */
    public $TargetStorageClass;

    /**
     * @var string 取回模式，取值：
<li>Expedited：极速模式</li>
<li>Standard：标准模式</li>
<li>Bulk：批量模式</li>
     */
    public $RestoreTier;

    /**
     * @var integer 临时取回副本有效期，单位：天。对于永久取回，取值为0。
     */
    public $RestoreDay;

    /**
     * @var integer 该字段已废弃。
     */
    public $Status;

    /**
     * @var string 该字段已废弃。
     */
    public $Message;

    /**
     * @param string $FileId 文件ID。
     * @param string $OriginalStorageClass 文件原始存储类型。
     * @param string $TargetStorageClass 文件目标存储类型。对于临时取回，目标存储类型与原始存储类型相同。
     * @param string $RestoreTier 取回模式，取值：
<li>Expedited：极速模式</li>
<li>Standard：标准模式</li>
<li>Bulk：批量模式</li>
     * @param integer $RestoreDay 临时取回副本有效期，单位：天。对于永久取回，取值为0。
     * @param integer $Status 该字段已废弃。
     * @param string $Message 该字段已废弃。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("OriginalStorageClass",$param) and $param["OriginalStorageClass"] !== null) {
            $this->OriginalStorageClass = $param["OriginalStorageClass"];
        }

        if (array_key_exists("TargetStorageClass",$param) and $param["TargetStorageClass"] !== null) {
            $this->TargetStorageClass = $param["TargetStorageClass"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }

        if (array_key_exists("RestoreDay",$param) and $param["RestoreDay"] !== null) {
            $this->RestoreDay = $param["RestoreDay"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
