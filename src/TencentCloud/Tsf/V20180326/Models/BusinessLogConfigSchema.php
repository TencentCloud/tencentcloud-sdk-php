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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志配置解析规则
 *
 * @method integer getSchemaType() 获取解析规则类型
 * @method void setSchemaType(integer $SchemaType) 设置解析规则类型
 * @method string getSchemaContent() 获取解析规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaContent(string $SchemaContent) 设置解析规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaDateFormat() 获取解析规则时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaDateFormat(string $SchemaDateFormat) 设置解析规则时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaMultilinePattern() 获取解析规则对应的多行匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaMultilinePattern(string $SchemaMultilinePattern) 设置解析规则对应的多行匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaCreateTime() 获取解析规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaCreateTime(string $SchemaCreateTime) 设置解析规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaPatternLayout() 获取用户填写的解析规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaPatternLayout(string $SchemaPatternLayout) 设置用户填写的解析规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class BusinessLogConfigSchema extends AbstractModel
{
    /**
     * @var integer 解析规则类型
     */
    public $SchemaType;

    /**
     * @var string 解析规则内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaContent;

    /**
     * @var string 解析规则时间格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaDateFormat;

    /**
     * @var string 解析规则对应的多行匹配规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaMultilinePattern;

    /**
     * @var string 解析规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaCreateTime;

    /**
     * @var string 用户填写的解析规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaPatternLayout;

    /**
     * @param integer $SchemaType 解析规则类型
     * @param string $SchemaContent 解析规则内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaDateFormat 解析规则时间格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaMultilinePattern 解析规则对应的多行匹配规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaCreateTime 解析规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaPatternLayout 用户填写的解析规则
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
        if (array_key_exists("SchemaType",$param) and $param["SchemaType"] !== null) {
            $this->SchemaType = $param["SchemaType"];
        }

        if (array_key_exists("SchemaContent",$param) and $param["SchemaContent"] !== null) {
            $this->SchemaContent = $param["SchemaContent"];
        }

        if (array_key_exists("SchemaDateFormat",$param) and $param["SchemaDateFormat"] !== null) {
            $this->SchemaDateFormat = $param["SchemaDateFormat"];
        }

        if (array_key_exists("SchemaMultilinePattern",$param) and $param["SchemaMultilinePattern"] !== null) {
            $this->SchemaMultilinePattern = $param["SchemaMultilinePattern"];
        }

        if (array_key_exists("SchemaCreateTime",$param) and $param["SchemaCreateTime"] !== null) {
            $this->SchemaCreateTime = $param["SchemaCreateTime"];
        }

        if (array_key_exists("SchemaPatternLayout",$param) and $param["SchemaPatternLayout"] !== null) {
            $this->SchemaPatternLayout = $param["SchemaPatternLayout"];
        }
    }
}
