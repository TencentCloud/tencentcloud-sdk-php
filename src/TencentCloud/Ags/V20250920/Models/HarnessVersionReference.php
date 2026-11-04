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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产版本支持的 Harness 引擎与具体版本。HarnessEngine 和 HarnessEngineVersion 原样使用 DescribeHarnessEngineList 返回的选项，两个字段共同确定兼容性。
 *
 * @method string getHarnessEngine() 获取<p>Harness 引擎标识，原样使用 DescribeHarnessEngineList 返回的 HarnessEngine，例如 pi。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或范围表达式。与同一对象的 HarnessEngineVersion 共同标识支持的版本。</p>
 * @method void setHarnessEngine(string $HarnessEngine) 设置<p>Harness 引擎标识，原样使用 DescribeHarnessEngineList 返回的 HarnessEngine，例如 pi。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或范围表达式。与同一对象的 HarnessEngineVersion 共同标识支持的版本。</p>
 * @method string getHarnessEngineVersion() 获取<p>Harness 引擎的具体版本，原样使用 DescribeHarnessEngineList 返回的 HarnessEngineVersion，例如 1.3.0。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或版本范围。必须与同一个对象的 HarnessEngine 精确匹配；不能只比较版本号，也不自行拼接标识。</p>
 * @method void setHarnessEngineVersion(string $HarnessEngineVersion) 设置<p>Harness 引擎的具体版本，原样使用 DescribeHarnessEngineList 返回的 HarnessEngineVersion，例如 1.3.0。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或版本范围。必须与同一个对象的 HarnessEngine 精确匹配；不能只比较版本号，也不自行拼接标识。</p>
 */
class HarnessVersionReference extends AbstractModel
{
    /**
     * @var string <p>Harness 引擎标识，原样使用 DescribeHarnessEngineList 返回的 HarnessEngine，例如 pi。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或范围表达式。与同一对象的 HarnessEngineVersion 共同标识支持的版本。</p>
     */
    public $HarnessEngine;

    /**
     * @var string <p>Harness 引擎的具体版本，原样使用 DescribeHarnessEngineList 返回的 HarnessEngineVersion，例如 1.3.0。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或版本范围。必须与同一个对象的 HarnessEngine 精确匹配；不能只比较版本号，也不自行拼接标识。</p>
     */
    public $HarnessEngineVersion;

    /**
     * @param string $HarnessEngine <p>Harness 引擎标识，原样使用 DescribeHarnessEngineList 返回的 HarnessEngine，例如 pi。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或范围表达式。与同一对象的 HarnessEngineVersion 共同标识支持的版本。</p>
     * @param string $HarnessEngineVersion <p>Harness 引擎的具体版本，原样使用 DescribeHarnessEngineList 返回的 HarnessEngineVersion，例如 1.3.0。</p><p>参数格式：必填，1 至 128 字符，区分大小写，不含空白、通配符或版本范围。必须与同一个对象的 HarnessEngine 精确匹配；不能只比较版本号，也不自行拼接标识。</p>
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
        if (array_key_exists("HarnessEngine",$param) and $param["HarnessEngine"] !== null) {
            $this->HarnessEngine = $param["HarnessEngine"];
        }

        if (array_key_exists("HarnessEngineVersion",$param) and $param["HarnessEngineVersion"] !== null) {
            $this->HarnessEngineVersion = $param["HarnessEngineVersion"];
        }
    }
}
