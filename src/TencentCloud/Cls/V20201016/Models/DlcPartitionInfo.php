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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据湖计算服务（Data Lake Compute，简称DLC）数据分区配置
 *
 * @method string getClsField() 获取cls日志中的字段名
 * @method void setClsField(string $ClsField) 设置cls日志中的字段名
 * @method string getDlcField() 获取dlc表的列名
 * @method void setDlcField(string $DlcField) 设置dlc表的列名
 * @method string getDlcFieldType() 获取dlc字段类型
 * @method void setDlcFieldType(string $DlcFieldType) 设置dlc字段类型
 */
class DlcPartitionInfo extends AbstractModel
{
    /**
     * @var string cls日志中的字段名
     */
    public $ClsField;

    /**
     * @var string dlc表的列名
     */
    public $DlcField;

    /**
     * @var string dlc字段类型
     */
    public $DlcFieldType;

    /**
     * @param string $ClsField cls日志中的字段名
     * @param string $DlcField dlc表的列名
     * @param string $DlcFieldType dlc字段类型
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
        if (array_key_exists("ClsField",$param) and $param["ClsField"] !== null) {
            $this->ClsField = $param["ClsField"];
        }

        if (array_key_exists("DlcField",$param) and $param["DlcField"] !== null) {
            $this->DlcField = $param["DlcField"];
        }

        if (array_key_exists("DlcFieldType",$param) and $param["DlcFieldType"] !== null) {
            $this->DlcFieldType = $param["DlcFieldType"];
        }
    }
}
