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
 * 通用文件来源。FILE 用于 Plugin 原始文件上传，SizeBytes 必填，SHA256 可选；VERSION 仅用于 UpdateRegistryRecord 复用同一 Record 的 READY 文件版本，仅填写 SourceVersionId。与其他来源互斥，不校验插件格式或语义。
 *
 * @method string getType() 获取<p>通用文件来源类型，区分大小写。</p><p>枚举值：</p><ul><li>FILE： 创建 Plugin 文件版本，必须填写 SizeBytes，SHA256 可选；随后通过预签名 PUT 链接上传原始文件。</li><li>VERSION： 仅 UpdateRegistryRecord 支持，复用同一 Skill 或 Plugin Record 的 READY 文件版本，仅填写 SourceVersionId。</li></ul><p>Registry 不做 Plugin 文件内容格式或语义校验，由运行端解析加载。VERSION 不继承来源版本的 Metadata 和 SupportedHarnessVersions。</p>
 * @method void setType(string $Type) 设置<p>通用文件来源类型，区分大小写。</p><p>枚举值：</p><ul><li>FILE： 创建 Plugin 文件版本，必须填写 SizeBytes，SHA256 可选；随后通过预签名 PUT 链接上传原始文件。</li><li>VERSION： 仅 UpdateRegistryRecord 支持，复用同一 Skill 或 Plugin Record 的 READY 文件版本，仅填写 SourceVersionId。</li></ul><p>Registry 不做 Plugin 文件内容格式或语义校验，由运行端解析加载。VERSION 不继承来源版本的 Metadata 和 SupportedHarnessVersions。</p>
 * @method integer getSizeBytes() 获取<p>待上传 Plugin 文件的原始字节数。FILE 时必填，VERSION 时禁止填写。</p><p>取值范围：[1, 54525952]</p><p>单位：字节</p><p>上限 52 MiB，服务端校验实际上传文件的字节数；不推断文件格式。</p>
 * @method void setSizeBytes(integer $SizeBytes) 设置<p>待上传 Plugin 文件的原始字节数。FILE 时必填，VERSION 时禁止填写。</p><p>取值范围：[1, 54525952]</p><p>单位：字节</p><p>上限 52 MiB，服务端校验实际上传文件的字节数；不推断文件格式。</p>
 * @method string getSHA256() 获取<p>期望的文件 SHA-256 摘要。FILE 时可选，VERSION 时禁止填写。</p><p>参数格式：64 位小写十六进制字符串。</p><p>提供时服务端计算实际文件摘要并比对；省略时仍计算摘要并在 READY 版本的 ContentSHA256 中返回。</p>
 * @method void setSHA256(string $SHA256) 设置<p>期望的文件 SHA-256 摘要。FILE 时可选，VERSION 时禁止填写。</p><p>参数格式：64 位小写十六进制字符串。</p><p>提供时服务端计算实际文件摘要并比对；省略时仍计算摘要并在 READY 版本的 ContentSHA256 中返回。</p>
 * @method string getSourceVersionId() 获取<p>用于复用文件内容的来源 Version ID。</p><p>参数格式：rv- 前缀的 Version ID。</p><p>入参限制：VERSION 时必填，FILE 时禁止填写。只能在 UpdateRegistryRecord 中引用同一 Record 下未删除、内容 READY 且存在可用制品的 Skill 或 Plugin 文件版本。</p><p>只复用文件，不继承来源版本的 Metadata 和 SupportedHarnessVersions；不能跨 Record 或跨 Registry 复用。</p>
 * @method void setSourceVersionId(string $SourceVersionId) 设置<p>用于复用文件内容的来源 Version ID。</p><p>参数格式：rv- 前缀的 Version ID。</p><p>入参限制：VERSION 时必填，FILE 时禁止填写。只能在 UpdateRegistryRecord 中引用同一 Record 下未删除、内容 READY 且存在可用制品的 Skill 或 Plugin 文件版本。</p><p>只复用文件，不继承来源版本的 Metadata 和 SupportedHarnessVersions；不能跨 Record 或跨 Registry 复用。</p>
 */
class CloudFileSourceInput extends AbstractModel
{
    /**
     * @var string <p>通用文件来源类型，区分大小写。</p><p>枚举值：</p><ul><li>FILE： 创建 Plugin 文件版本，必须填写 SizeBytes，SHA256 可选；随后通过预签名 PUT 链接上传原始文件。</li><li>VERSION： 仅 UpdateRegistryRecord 支持，复用同一 Skill 或 Plugin Record 的 READY 文件版本，仅填写 SourceVersionId。</li></ul><p>Registry 不做 Plugin 文件内容格式或语义校验，由运行端解析加载。VERSION 不继承来源版本的 Metadata 和 SupportedHarnessVersions。</p>
     */
    public $Type;

    /**
     * @var integer <p>待上传 Plugin 文件的原始字节数。FILE 时必填，VERSION 时禁止填写。</p><p>取值范围：[1, 54525952]</p><p>单位：字节</p><p>上限 52 MiB，服务端校验实际上传文件的字节数；不推断文件格式。</p>
     */
    public $SizeBytes;

    /**
     * @var string <p>期望的文件 SHA-256 摘要。FILE 时可选，VERSION 时禁止填写。</p><p>参数格式：64 位小写十六进制字符串。</p><p>提供时服务端计算实际文件摘要并比对；省略时仍计算摘要并在 READY 版本的 ContentSHA256 中返回。</p>
     */
    public $SHA256;

    /**
     * @var string <p>用于复用文件内容的来源 Version ID。</p><p>参数格式：rv- 前缀的 Version ID。</p><p>入参限制：VERSION 时必填，FILE 时禁止填写。只能在 UpdateRegistryRecord 中引用同一 Record 下未删除、内容 READY 且存在可用制品的 Skill 或 Plugin 文件版本。</p><p>只复用文件，不继承来源版本的 Metadata 和 SupportedHarnessVersions；不能跨 Record 或跨 Registry 复用。</p>
     */
    public $SourceVersionId;

    /**
     * @param string $Type <p>通用文件来源类型，区分大小写。</p><p>枚举值：</p><ul><li>FILE： 创建 Plugin 文件版本，必须填写 SizeBytes，SHA256 可选；随后通过预签名 PUT 链接上传原始文件。</li><li>VERSION： 仅 UpdateRegistryRecord 支持，复用同一 Skill 或 Plugin Record 的 READY 文件版本，仅填写 SourceVersionId。</li></ul><p>Registry 不做 Plugin 文件内容格式或语义校验，由运行端解析加载。VERSION 不继承来源版本的 Metadata 和 SupportedHarnessVersions。</p>
     * @param integer $SizeBytes <p>待上传 Plugin 文件的原始字节数。FILE 时必填，VERSION 时禁止填写。</p><p>取值范围：[1, 54525952]</p><p>单位：字节</p><p>上限 52 MiB，服务端校验实际上传文件的字节数；不推断文件格式。</p>
     * @param string $SHA256 <p>期望的文件 SHA-256 摘要。FILE 时可选，VERSION 时禁止填写。</p><p>参数格式：64 位小写十六进制字符串。</p><p>提供时服务端计算实际文件摘要并比对；省略时仍计算摘要并在 READY 版本的 ContentSHA256 中返回。</p>
     * @param string $SourceVersionId <p>用于复用文件内容的来源 Version ID。</p><p>参数格式：rv- 前缀的 Version ID。</p><p>入参限制：VERSION 时必填，FILE 时禁止填写。只能在 UpdateRegistryRecord 中引用同一 Record 下未删除、内容 READY 且存在可用制品的 Skill 或 Plugin 文件版本。</p><p>只复用文件，不继承来源版本的 Metadata 和 SupportedHarnessVersions；不能跨 Record 或跨 Registry 复用。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SizeBytes",$param) and $param["SizeBytes"] !== null) {
            $this->SizeBytes = $param["SizeBytes"];
        }

        if (array_key_exists("SHA256",$param) and $param["SHA256"] !== null) {
            $this->SHA256 = $param["SHA256"];
        }

        if (array_key_exists("SourceVersionId",$param) and $param["SourceVersionId"] !== null) {
            $this->SourceVersionId = $param["SourceVersionId"];
        }
    }
}
