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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全量备份进度
 *
 * @method integer getSchemaProgress() 获取结构备份进度，取值范围为 0 - 100，单位：百分比。
 * @method void setSchemaProgress(integer $SchemaProgress) 设置结构备份进度，取值范围为 0 - 100，单位：百分比。
 * @method integer getDataProgress() 获取数据备份进度，取值范围为 0 - 100，单位：百分比。
 * @method void setDataProgress(integer $DataProgress) 设置数据备份进度，取值范围为 0 - 100，单位：百分比。
 */
class FullBackupProgress extends AbstractModel
{
    /**
     * @var integer 结构备份进度，取值范围为 0 - 100，单位：百分比。
     */
    public $SchemaProgress;

    /**
     * @var integer 数据备份进度，取值范围为 0 - 100，单位：百分比。
     */
    public $DataProgress;

    /**
     * @param integer $SchemaProgress 结构备份进度，取值范围为 0 - 100，单位：百分比。
     * @param integer $DataProgress 数据备份进度，取值范围为 0 - 100，单位：百分比。
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
        if (array_key_exists("SchemaProgress",$param) and $param["SchemaProgress"] !== null) {
            $this->SchemaProgress = $param["SchemaProgress"];
        }

        if (array_key_exists("DataProgress",$param) and $param["DataProgress"] !== null) {
            $this->DataProgress = $param["DataProgress"];
        }
    }
}
