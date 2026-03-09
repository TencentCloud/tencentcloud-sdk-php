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
 * @method string getClsField() 获取<p>cls日志中的字段名</p>
 * @method void setClsField(string $ClsField) 设置<p>cls日志中的字段名</p>
 * @method string getDlcField() 获取<p>dlc表的列名</p>
 * @method void setDlcField(string $DlcField) 设置<p>dlc表的列名</p>
 * @method string getDlcFieldType() 获取<p>请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></p><p>枚举值：</p><ul><li>int|string|array等： 请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
 * @method void setDlcFieldType(string $DlcFieldType) 设置<p>请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></p><p>枚举值：</p><ul><li>int|string|array等： 请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
 */
class DlcPartitionInfo extends AbstractModel
{
    /**
     * @var string <p>cls日志中的字段名</p>
     */
    public $ClsField;

    /**
     * @var string <p>dlc表的列名</p>
     */
    public $DlcField;

    /**
     * @var string <p>请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></p><p>枚举值：</p><ul><li>int|string|array等： 请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
     */
    public $DlcFieldType;

    /**
     * @param string $ClsField <p>cls日志中的字段名</p>
     * @param string $DlcField <p>dlc表的列名</p>
     * @param string $DlcFieldType <p>请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></p><p>枚举值：</p><ul><li>int|string|array等： 请参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
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
