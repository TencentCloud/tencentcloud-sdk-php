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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云服务器主机名（HostName）的相关设置
 *
 * @method string getHostName() 获取云服务器的主机名。
<li> 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li> 其他类型（Linux 等）实例：字符长度为[2, 42]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。不允许为纯数字。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置云服务器的主机名。
<li> 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li> 其他类型（Linux 等）实例：字符长度为[2, 42]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。不允许为纯数字。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostNameStyle() 获取云服务器主机名的风格，取值范围包括 ORIGINAL 和  UNIQUE，默认为 ORIGINAL。
<li> ORIGINAL，AS 直接将入参中所填的 HostName 传递给 CVM，CVM 可能会对 HostName 追加序列号，伸缩组中实例的 HostName 会出现冲突的情况。</li> 
<li> UNIQUE，入参所填的 HostName 相当于主机名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 HostName 可以保证唯一。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostNameStyle(string $HostNameStyle) 设置云服务器主机名的风格，取值范围包括 ORIGINAL 和  UNIQUE，默认为 ORIGINAL。
<li> ORIGINAL，AS 直接将入参中所填的 HostName 传递给 CVM，CVM 可能会对 HostName 追加序列号，伸缩组中实例的 HostName 会出现冲突的情况。</li> 
<li> UNIQUE，入参所填的 HostName 相当于主机名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 HostName 可以保证唯一。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostNameSuffix() 获取云服务器的主机名后缀。
<li> 点号（.）和短横线（-）不能作为 HostNameSuffix 的尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li>其他类型（Linux 等）实例：字符长度为[1, 39]，且与 HostName 的长度和不能超过 41，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostNameSuffix(string $HostNameSuffix) 设置云服务器的主机名后缀。
<li> 点号（.）和短横线（-）不能作为 HostNameSuffix 的尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li>其他类型（Linux 等）实例：字符长度为[1, 39]，且与 HostName 的长度和不能超过 41，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li> 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostNameDelimiter() 获取云服务器的主机名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接主机名，递增序号，后缀。假设主机名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
 * @method void setHostNameDelimiter(string $HostNameDelimiter) 设置云服务器的主机名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接主机名，递增序号，后缀。假设主机名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
 */
class HostNameSettings extends AbstractModel
{
    /**
     * @var string 云服务器的主机名。
<li> 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li> 其他类型（Linux 等）实例：字符长度为[2, 42]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。不允许为纯数字。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 云服务器主机名的风格，取值范围包括 ORIGINAL 和  UNIQUE，默认为 ORIGINAL。
<li> ORIGINAL，AS 直接将入参中所填的 HostName 传递给 CVM，CVM 可能会对 HostName 追加序列号，伸缩组中实例的 HostName 会出现冲突的情况。</li> 
<li> UNIQUE，入参所填的 HostName 相当于主机名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 HostName 可以保证唯一。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostNameStyle;

    /**
     * @var string 云服务器的主机名后缀。
<li> 点号（.）和短横线（-）不能作为 HostNameSuffix 的尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li>其他类型（Linux 等）实例：字符长度为[1, 39]，且与 HostName 的长度和不能超过 41，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostNameSuffix;

    /**
     * @var string 云服务器的主机名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接主机名，递增序号，后缀。假设主机名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
     */
    public $HostNameDelimiter;

    /**
     * @param string $HostName 云服务器的主机名。
<li> 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li> 其他类型（Linux 等）实例：字符长度为[2, 42]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。不允许为纯数字。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostNameStyle 云服务器主机名的风格，取值范围包括 ORIGINAL 和  UNIQUE，默认为 ORIGINAL。
<li> ORIGINAL，AS 直接将入参中所填的 HostName 传递给 CVM，CVM 可能会对 HostName 追加序列号，伸缩组中实例的 HostName 会出现冲突的情况。</li> 
<li> UNIQUE，入参所填的 HostName 相当于主机名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 HostName 可以保证唯一。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostNameSuffix 云服务器的主机名后缀。
<li> 点号（.）和短横线（-）不能作为 HostNameSuffix 的尾字符，不能连续使用。</li> 
<li> 不支持 Windows 实例。</li> 
<li>其他类型（Linux 等）实例：字符长度为[1, 39]，且与 HostName 的长度和不能超过 41，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li> 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostNameDelimiter 云服务器的主机名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接主机名，递增序号，后缀。假设主机名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostNameStyle",$param) and $param["HostNameStyle"] !== null) {
            $this->HostNameStyle = $param["HostNameStyle"];
        }

        if (array_key_exists("HostNameSuffix",$param) and $param["HostNameSuffix"] !== null) {
            $this->HostNameSuffix = $param["HostNameSuffix"];
        }

        if (array_key_exists("HostNameDelimiter",$param) and $param["HostNameDelimiter"] !== null) {
            $this->HostNameDelimiter = $param["HostNameDelimiter"];
        }
    }
}
