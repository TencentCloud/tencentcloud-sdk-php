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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据表列信息。
 *
 * @method string getName() 获取<p>列名称，不区分大小写，最大支持25个字符。</p>
 * @method void setName(string $Name) 设置<p>列名称，不区分大小写，最大支持25个字符。</p>
 * @method string getType() 获取<p>string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array|map|struct|uniontype</p>
 * @method void setType(string $Type) 设置<p>string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array|map|struct|uniontype</p>
 * @method string getComment() 获取<p>对该类的注释。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>对该类的注释。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrecision() 获取<p>表示整个 numeric 的长度</p>
 * @method void setPrecision(integer $Precision) 设置<p>表示整个 numeric 的长度</p>
 * @method integer getScale() 获取<p>表示小数部分的长度</p>
 * @method void setScale(integer $Scale) 设置<p>表示小数部分的长度</p>
 * @method string getNullable() 获取<p>是否为null</p>
 * @method void setNullable(string $Nullable) 设置<p>是否为null</p>
 * @method integer getPosition() 获取<p>字段位置，小的在前</p>
 * @method void setPosition(integer $Position) 设置<p>字段位置，小的在前</p>
 * @method string getCreateTime() 获取<p>字段创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>字段创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getModifiedTime() 获取<p>字段修改时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>字段修改时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method boolean getIsPartition() 获取<p>是否为分区字段</p>
 * @method void setIsPartition(boolean $IsPartition) 设置<p>是否为分区字段</p>
 * @method DataMaskStrategyInfo getDataMaskStrategyInfo() 获取<p>数据脱敏策略信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataMaskStrategyInfo(DataMaskStrategyInfo $DataMaskStrategyInfo) 设置<p>数据脱敏策略信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeText() 获取<p>数据字段说明</p>
 * @method void setTypeText(string $TypeText) 设置<p>数据字段说明</p>
 */
class Column extends AbstractModel
{
    /**
     * @var string <p>列名称，不区分大小写，最大支持25个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array|map|struct|uniontype</p>
     */
    public $Type;

    /**
     * @var string <p>对该类的注释。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var integer <p>表示整个 numeric 的长度</p>
     */
    public $Precision;

    /**
     * @var integer <p>表示小数部分的长度</p>
     */
    public $Scale;

    /**
     * @var string <p>是否为null</p>
     */
    public $Nullable;

    /**
     * @var integer <p>字段位置，小的在前</p>
     */
    public $Position;

    /**
     * @var string <p>字段创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>字段修改时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ModifiedTime;

    /**
     * @var boolean <p>是否为分区字段</p>
     */
    public $IsPartition;

    /**
     * @var DataMaskStrategyInfo <p>数据脱敏策略信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataMaskStrategyInfo;

    /**
     * @var string <p>数据字段说明</p>
     */
    public $TypeText;

    /**
     * @param string $Name <p>列名称，不区分大小写，最大支持25个字符。</p>
     * @param string $Type <p>string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array|map|struct|uniontype</p>
     * @param string $Comment <p>对该类的注释。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Precision <p>表示整个 numeric 的长度</p>
     * @param integer $Scale <p>表示小数部分的长度</p>
     * @param string $Nullable <p>是否为null</p>
     * @param integer $Position <p>字段位置，小的在前</p>
     * @param string $CreateTime <p>字段创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $ModifiedTime <p>字段修改时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param boolean $IsPartition <p>是否为分区字段</p>
     * @param DataMaskStrategyInfo $DataMaskStrategyInfo <p>数据脱敏策略信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeText <p>数据字段说明</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Nullable",$param) and $param["Nullable"] !== null) {
            $this->Nullable = $param["Nullable"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }

        if (array_key_exists("DataMaskStrategyInfo",$param) and $param["DataMaskStrategyInfo"] !== null) {
            $this->DataMaskStrategyInfo = new DataMaskStrategyInfo();
            $this->DataMaskStrategyInfo->deserialize($param["DataMaskStrategyInfo"]);
        }

        if (array_key_exists("TypeText",$param) and $param["TypeText"] !== null) {
            $this->TypeText = $param["TypeText"];
        }
    }
}
