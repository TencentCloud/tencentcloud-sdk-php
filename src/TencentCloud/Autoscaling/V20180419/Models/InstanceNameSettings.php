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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云服务器实例名称（InstanceName）的相关设置
 *
 * @method string getInstanceName() 获取云服务器的实例名。字符长度为[2, 108]。
 * @method void setInstanceName(string $InstanceName) 设置云服务器的实例名。字符长度为[2, 108]。
 * @method string getInstanceNameStyle() 获取云服务器实例名的风格，取值范围包括 ORIGINAL 和 UNIQUE，默认为 ORIGINAL。

ORIGINAL，AS 直接将入参中所填的 InstanceName 传递给 CVM，CVM 可能会对 InstanceName 追加序列号，伸缩组中实例的 InstanceName 会出现冲突的情况。

UNIQUE，入参所填的 InstanceName 相当于实例名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 InstanceName 可以保证唯一。
 * @method void setInstanceNameStyle(string $InstanceNameStyle) 设置云服务器实例名的风格，取值范围包括 ORIGINAL 和 UNIQUE，默认为 ORIGINAL。

ORIGINAL，AS 直接将入参中所填的 InstanceName 传递给 CVM，CVM 可能会对 InstanceName 追加序列号，伸缩组中实例的 InstanceName 会出现冲突的情况。

UNIQUE，入参所填的 InstanceName 相当于实例名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 InstanceName 可以保证唯一。
 * @method string getInstanceNameSuffix() 获取云服务器实例名后缀。字符长度为[1,105]，且与 InstanceName 的长度和不能超过107。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNameSuffix(string $InstanceNameSuffix) 设置云服务器实例名后缀。字符长度为[1,105]，且与 InstanceName 的长度和不能超过107。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceNameDelimiter() 获取云服务器的实例名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接实例名，递增序号，后缀。假设实例名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
 * @method void setInstanceNameDelimiter(string $InstanceNameDelimiter) 设置云服务器的实例名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接实例名，递增序号，后缀。假设实例名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
 */
class InstanceNameSettings extends AbstractModel
{
    /**
     * @var string 云服务器的实例名。字符长度为[2, 108]。
     */
    public $InstanceName;

    /**
     * @var string 云服务器实例名的风格，取值范围包括 ORIGINAL 和 UNIQUE，默认为 ORIGINAL。

ORIGINAL，AS 直接将入参中所填的 InstanceName 传递给 CVM，CVM 可能会对 InstanceName 追加序列号，伸缩组中实例的 InstanceName 会出现冲突的情况。

UNIQUE，入参所填的 InstanceName 相当于实例名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 InstanceName 可以保证唯一。
     */
    public $InstanceNameStyle;

    /**
     * @var string 云服务器实例名后缀。字符长度为[1,105]，且与 InstanceName 的长度和不能超过107。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNameSuffix;

    /**
     * @var string 云服务器的实例名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接实例名，递增序号，后缀。假设实例名为 testGpu4090 ，递增序号为 0007，后缀为 server：
- 分隔符为英文点号（.），最终拼接为 testGpu4090.007.server
- 分隔符为短横线（-），最终拼接为 testGpu4090-007-server
- 分隔符为空字符串，最终拼接为 testGpu4090007server
     */
    public $InstanceNameDelimiter;

    /**
     * @param string $InstanceName 云服务器的实例名。字符长度为[2, 108]。
     * @param string $InstanceNameStyle 云服务器实例名的风格，取值范围包括 ORIGINAL 和 UNIQUE，默认为 ORIGINAL。

ORIGINAL，AS 直接将入参中所填的 InstanceName 传递给 CVM，CVM 可能会对 InstanceName 追加序列号，伸缩组中实例的 InstanceName 会出现冲突的情况。

UNIQUE，入参所填的 InstanceName 相当于实例名前缀，AS 和 CVM 会对其进行拓展，伸缩组中实例的 InstanceName 可以保证唯一。
     * @param string $InstanceNameSuffix 云服务器实例名后缀。字符长度为[1,105]，且与 InstanceName 的长度和不能超过107。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceNameDelimiter 云服务器的实例名分隔符。默认的分隔符是点号（.），可选短横线（-）或空字符串。
分隔符用于拼接实例名，递增序号，后缀。假设实例名为 testGpu4090 ，递增序号为 0007，后缀为 server：
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceNameStyle",$param) and $param["InstanceNameStyle"] !== null) {
            $this->InstanceNameStyle = $param["InstanceNameStyle"];
        }

        if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
            $this->InstanceNameSuffix = $param["InstanceNameSuffix"];
        }

        if (array_key_exists("InstanceNameDelimiter",$param) and $param["InstanceNameDelimiter"] !== null) {
            $this->InstanceNameDelimiter = $param["InstanceNameDelimiter"];
        }
    }
}
