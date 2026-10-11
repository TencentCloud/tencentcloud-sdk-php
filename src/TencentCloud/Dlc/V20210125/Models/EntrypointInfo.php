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
 * 入站作业入口（Entrypoint）.
 *
 * @method string getStatement() 获取<p>SQL 语句文本，须为 Base64 编码的 UTF-8 文本。仅 SPARK_SQL 模式可传且必填（解码后 ≤1MB）；SPARK_BATCH 模式禁止传。</p>
 * @method void setStatement(string $Statement) 设置<p>SQL 语句文本，须为 Base64 编码的 UTF-8 文本。仅 SPARK_SQL 模式可传且必填（解码后 ≤1MB）；SPARK_BATCH 模式禁止传。</p>
 * @method string getEntryFile() 获取<p>作业文件路径（JAR/Python），须匹配配置的路径前缀白名单。以 .py 结尾判定为 Python 入口（EntryPoint 禁传），否则为 JAR 入口（EntryPoint 必填）。</p>
 * @method void setEntryFile(string $EntryFile) 设置<p>作业文件路径（JAR/Python），须匹配配置的路径前缀白名单。以 .py 结尾判定为 Python 入口（EntryPoint 禁传），否则为 JAR 入口（EntryPoint 必填）。</p>
 * @method string getEntryPoint() 获取<p>入口类名（main class 全限定名）。JAR 入口（EntryFile 非 .py 结尾）必填；Python 入口（.py 结尾）禁传；SPARK_SQL 模式禁止传。</p>
 * @method void setEntryPoint(string $EntryPoint) 设置<p>入口类名（main class 全限定名）。JAR 入口（EntryFile 非 .py 结尾）必填；Python 入口（.py 结尾）禁传；SPARK_SQL 模式禁止传。</p>
 * @method string getMainArgs() 获取<p>主方法参数列表（JSON 数组字符串），仅 SPARK_BATCH 模式可传；SPARK_SQL 模式禁止传。</p>
 * @method void setMainArgs(string $MainArgs) 设置<p>主方法参数列表（JSON 数组字符串），仅 SPARK_BATCH 模式可传；SPARK_SQL 模式禁止传。</p>
 */
class EntrypointInfo extends AbstractModel
{
    /**
     * @var string <p>SQL 语句文本，须为 Base64 编码的 UTF-8 文本。仅 SPARK_SQL 模式可传且必填（解码后 ≤1MB）；SPARK_BATCH 模式禁止传。</p>
     */
    public $Statement;

    /**
     * @var string <p>作业文件路径（JAR/Python），须匹配配置的路径前缀白名单。以 .py 结尾判定为 Python 入口（EntryPoint 禁传），否则为 JAR 入口（EntryPoint 必填）。</p>
     */
    public $EntryFile;

    /**
     * @var string <p>入口类名（main class 全限定名）。JAR 入口（EntryFile 非 .py 结尾）必填；Python 入口（.py 结尾）禁传；SPARK_SQL 模式禁止传。</p>
     */
    public $EntryPoint;

    /**
     * @var string <p>主方法参数列表（JSON 数组字符串），仅 SPARK_BATCH 模式可传；SPARK_SQL 模式禁止传。</p>
     */
    public $MainArgs;

    /**
     * @param string $Statement <p>SQL 语句文本，须为 Base64 编码的 UTF-8 文本。仅 SPARK_SQL 模式可传且必填（解码后 ≤1MB）；SPARK_BATCH 模式禁止传。</p>
     * @param string $EntryFile <p>作业文件路径（JAR/Python），须匹配配置的路径前缀白名单。以 .py 结尾判定为 Python 入口（EntryPoint 禁传），否则为 JAR 入口（EntryPoint 必填）。</p>
     * @param string $EntryPoint <p>入口类名（main class 全限定名）。JAR 入口（EntryFile 非 .py 结尾）必填；Python 入口（.py 结尾）禁传；SPARK_SQL 模式禁止传。</p>
     * @param string $MainArgs <p>主方法参数列表（JSON 数组字符串），仅 SPARK_BATCH 模式可传；SPARK_SQL 模式禁止传。</p>
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
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("EntryFile",$param) and $param["EntryFile"] !== null) {
            $this->EntryFile = $param["EntryFile"];
        }

        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            $this->EntryPoint = $param["EntryPoint"];
        }

        if (array_key_exists("MainArgs",$param) and $param["MainArgs"] !== null) {
            $this->MainArgs = $param["MainArgs"];
        }
    }
}
