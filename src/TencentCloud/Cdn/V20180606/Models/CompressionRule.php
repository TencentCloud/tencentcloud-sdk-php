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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能压缩规则配置
 *
 * @method boolean getCompress() 获取true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompress(boolean $Compress) 设置true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinLength() 获取触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinLength(integer $MinLength) 设置触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxLength() 获取触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxLength(integer $MaxLength) 设置触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlgorithms() 获取文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithms(array $Algorithms) 设置文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileExtensions() 获取根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExtensions(array $FileExtensions) 设置根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
contentType：指定Content-Type头为特定值时生效
当指定了此字段时，FileExtensions字段不生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
contentType：指定Content-Type头为特定值时生效
当指定了此字段时，FileExtensions字段不生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRulePaths() 获取CacheType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
contentType 时填充 text/html
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePaths(array $RulePaths) 设置CacheType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
contentType 时填充 text/html
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompressionRule extends AbstractModel
{
    /**
     * @var boolean true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compress;

    /**
     * @var integer 触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinLength;

    /**
     * @var integer 触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxLength;

    /**
     * @var array 文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Algorithms;

    /**
     * @var array 根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExtensions;

    /**
     * @var string 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
contentType：指定Content-Type头为特定值时生效
当指定了此字段时，FileExtensions字段不生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var array CacheType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
contentType 时填充 text/html
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePaths;

    /**
     * @param boolean $Compress true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinLength 触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxLength 触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Algorithms 文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileExtensions 根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
contentType：指定Content-Type头为特定值时生效
当指定了此字段时，FileExtensions字段不生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RulePaths CacheType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
contentType 时填充 text/html
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
        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("Algorithms",$param) and $param["Algorithms"] !== null) {
            $this->Algorithms = $param["Algorithms"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
