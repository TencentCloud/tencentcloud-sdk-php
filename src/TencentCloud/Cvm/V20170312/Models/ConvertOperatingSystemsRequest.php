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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConvertOperatingSystems请求参数结构体
 *
 * @method array getInstanceIds() 获取执行操作系统转换的实例 ID。
可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。
仅支持操作系统为 CentOS 7、CentOS 8 的实例执行转换。
 * @method void setInstanceIds(array $InstanceIds) 设置执行操作系统转换的实例 ID。
可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。
仅支持操作系统为 CentOS 7、CentOS 8 的实例执行转换。
 * @method boolean getMinimalConversion() 获取是否最小规模转换。
默认值：false
 * @method void setMinimalConversion(boolean $MinimalConversion) 设置是否最小规模转换。
默认值：false
 * @method boolean getDryRun() 获取是否只预检。
默认值：false
 * @method void setDryRun(boolean $DryRun) 设置是否只预检。
默认值：false
 * @method string getTargetOSType() 获取转换的目标操作系统类型。仅支持 TencentOS。
默认值：TencentOS
 * @method void setTargetOSType(string $TargetOSType) 设置转换的目标操作系统类型。仅支持 TencentOS。
默认值：TencentOS
 */
class ConvertOperatingSystemsRequest extends AbstractModel
{
    /**
     * @var array 执行操作系统转换的实例 ID。
可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。
仅支持操作系统为 CentOS 7、CentOS 8 的实例执行转换。
     */
    public $InstanceIds;

    /**
     * @var boolean 是否最小规模转换。
默认值：false
     */
    public $MinimalConversion;

    /**
     * @var boolean 是否只预检。
默认值：false
     */
    public $DryRun;

    /**
     * @var string 转换的目标操作系统类型。仅支持 TencentOS。
默认值：TencentOS
     */
    public $TargetOSType;

    /**
     * @param array $InstanceIds 执行操作系统转换的实例 ID。
可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。
仅支持操作系统为 CentOS 7、CentOS 8 的实例执行转换。
     * @param boolean $MinimalConversion 是否最小规模转换。
默认值：false
     * @param boolean $DryRun 是否只预检。
默认值：false
     * @param string $TargetOSType 转换的目标操作系统类型。仅支持 TencentOS。
默认值：TencentOS
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("MinimalConversion",$param) and $param["MinimalConversion"] !== null) {
            $this->MinimalConversion = $param["MinimalConversion"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("TargetOSType",$param) and $param["TargetOSType"] !== null) {
            $this->TargetOSType = $param["TargetOSType"];
        }
    }
}
