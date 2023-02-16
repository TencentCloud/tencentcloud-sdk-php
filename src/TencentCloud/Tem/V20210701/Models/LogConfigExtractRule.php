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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志采集的导出规则配置
 *
 * @method string getBeginningRegex() 获取首行正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginningRegex(string $BeginningRegex) 设置首行正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeys() 获取提取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置提取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterKeys() 获取过滤键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterKeys(array $FilterKeys) 设置过滤键
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterRegex() 获取过滤值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterRegex(array $FilterRegex) 设置过滤值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogRegex() 获取日志正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRegex(string $LogRegex) 设置日志正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeKey() 获取时间字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeKey(string $TimeKey) 设置时间字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFormat() 获取时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFormat(string $TimeFormat) 设置时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnMatchUpload() 获取是否上传解析失败日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchUpload(string $UnMatchUpload) 设置是否上传解析失败日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnMatchedKey() 获取解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchedKey(string $UnMatchedKey) 设置解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBacktracking() 获取tracking
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBacktracking(string $Backtracking) 设置tracking
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelimiter() 获取分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelimiter(string $Delimiter) 设置分隔符
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogConfigExtractRule extends AbstractModel
{
    /**
     * @var string 首行正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginningRegex;

    /**
     * @var array 提取结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var array 过滤键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterKeys;

    /**
     * @var array 过滤值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterRegex;

    /**
     * @var string 日志正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRegex;

    /**
     * @var string 时间字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeKey;

    /**
     * @var string 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFormat;

    /**
     * @var string 是否上传解析失败日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchUpload;

    /**
     * @var string 解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchedKey;

    /**
     * @var string tracking
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Backtracking;

    /**
     * @var string 分隔符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delimiter;

    /**
     * @param string $BeginningRegex 首行正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keys 提取结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterKeys 过滤键
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterRegex 过滤值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogRegex 日志正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeKey 时间字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFormat 时间格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnMatchUpload 是否上传解析失败日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnMatchedKey 解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Backtracking tracking
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Delimiter 分隔符
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
        if (array_key_exists("BeginningRegex",$param) and $param["BeginningRegex"] !== null) {
            $this->BeginningRegex = $param["BeginningRegex"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("FilterKeys",$param) and $param["FilterKeys"] !== null) {
            $this->FilterKeys = $param["FilterKeys"];
        }

        if (array_key_exists("FilterRegex",$param) and $param["FilterRegex"] !== null) {
            $this->FilterRegex = $param["FilterRegex"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("UnMatchUpload",$param) and $param["UnMatchUpload"] !== null) {
            $this->UnMatchUpload = $param["UnMatchUpload"];
        }

        if (array_key_exists("UnMatchedKey",$param) and $param["UnMatchedKey"] !== null) {
            $this->UnMatchedKey = $param["UnMatchedKey"];
        }

        if (array_key_exists("Backtracking",$param) and $param["Backtracking"] !== null) {
            $this->Backtracking = $param["Backtracking"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }
    }
}
