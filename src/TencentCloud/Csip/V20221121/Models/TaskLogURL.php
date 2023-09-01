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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报告pdf下载的临时链接
 *
 * @method string getURL() 获取报告下载临时链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置报告下载临时链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogId() 获取任务报告id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(string $LogId) 设置任务报告id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLogName() 获取任务报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLogName(string $TaskLogName) 设置任务报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置APP ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskLogURL extends AbstractModel
{
    /**
     * @var string 报告下载临时链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @var string 任务报告id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @var string 任务报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLogName;

    /**
     * @var string APP ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $URL 报告下载临时链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogId 任务报告id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLogName 任务报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId APP ID
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskLogName",$param) and $param["TaskLogName"] !== null) {
            $this->TaskLogName = $param["TaskLogName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
