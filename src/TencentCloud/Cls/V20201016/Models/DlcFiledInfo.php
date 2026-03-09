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
 * 数据湖计算服务（Data Lake Compute，简称DLC）数据字段配置信息
 *
 * @method string getClsField() 获取<p>cls日志中的字段名</p>
 * @method void setClsField(string $ClsField) 设置<p>cls日志中的字段名</p>
 * @method string getDlcField() 获取<p>数据湖计算服务表的列名</p>
 * @method void setDlcField(string $DlcField) 设置<p>数据湖计算服务表的列名</p>
 * @method string getDlcFieldType() 获取<p>数据湖计算服务字段类型</p><p>枚举值：</p><ul><li>int|string|struct等： 参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
 * @method void setDlcFieldType(string $DlcFieldType) 设置<p>数据湖计算服务字段类型</p><p>枚举值：</p><ul><li>int|string|struct等： 参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
 * @method string getFillField() 获取<p>解析失败填充字段</p>
 * @method void setFillField(string $FillField) 设置<p>解析失败填充字段</p>
 * @method boolean getDisable() 获取<p>是否禁用</p>
 * @method void setDisable(boolean $Disable) 设置<p>是否禁用</p>
 */
class DlcFiledInfo extends AbstractModel
{
    /**
     * @var string <p>cls日志中的字段名</p>
     */
    public $ClsField;

    /**
     * @var string <p>数据湖计算服务表的列名</p>
     */
    public $DlcField;

    /**
     * @var string <p>数据湖计算服务字段类型</p><p>枚举值：</p><ul><li>int|string|struct等： 参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
     */
    public $DlcFieldType;

    /**
     * @var string <p>解析失败填充字段</p>
     */
    public $FillField;

    /**
     * @var boolean <p>是否禁用</p>
     */
    public $Disable;

    /**
     * @param string $ClsField <p>cls日志中的字段名</p>
     * @param string $DlcField <p>数据湖计算服务表的列名</p>
     * @param string $DlcFieldType <p>数据湖计算服务字段类型</p><p>枚举值：</p><ul><li>int|string|struct等： 参考 <a href="https://cloud.tencent.com/document/product/1342/53778#Column">DLC  cloumn中的Type 定义 </a></li></ul>
     * @param string $FillField <p>解析失败填充字段</p>
     * @param boolean $Disable <p>是否禁用</p>
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

        if (array_key_exists("FillField",$param) and $param["FillField"] !== null) {
            $this->FillField = $param["FillField"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }
    }
}
