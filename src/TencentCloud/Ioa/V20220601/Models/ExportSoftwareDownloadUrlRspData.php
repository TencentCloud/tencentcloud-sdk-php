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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务响应数据
 *
 * @method string getDownloadURL() 获取下载的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadURL(string $DownloadURL) 设置下载的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskId() 获取超过一定时间走异步任务
 * @method void setTaskId(integer $TaskId) 设置超过一定时间走异步任务
 */
class ExportSoftwareDownloadUrlRspData extends AbstractModel
{
    /**
     * @var string 下载的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadURL;

    /**
     * @var integer 超过一定时间走异步任务
     */
    public $TaskId;

    /**
     * @param string $DownloadURL 下载的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskId 超过一定时间走异步任务
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
        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
