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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetDetailDataExportResult请求参数结构体
 *
 * @method integer getExportTaskId() 获取导出任务id
 * @method void setExportTaskId(integer $ExportTaskId) 设置导出任务id
 * @method string getDspaId() 获取DSPA实例Id，格式“dspa-xxxxxxxx”
 * @method void setDspaId(string $DspaId) 设置DSPA实例Id，格式“dspa-xxxxxxxx”
 */
class DescribeAssetDetailDataExportResultRequest extends AbstractModel
{
    /**
     * @var integer 导出任务id
     */
    public $ExportTaskId;

    /**
     * @var string DSPA实例Id，格式“dspa-xxxxxxxx”
     */
    public $DspaId;

    /**
     * @param integer $ExportTaskId 导出任务id
     * @param string $DspaId DSPA实例Id，格式“dspa-xxxxxxxx”
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
        if (array_key_exists("ExportTaskId",$param) and $param["ExportTaskId"] !== null) {
            $this->ExportTaskId = $param["ExportTaskId"];
        }

        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }
    }
}
