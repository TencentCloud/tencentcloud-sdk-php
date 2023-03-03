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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadRestriction返回参数结构体
 *
 * @method string getLimitType() 获取下载备份文件的网络限制类型：

- NoLimit：不限制，腾讯云内外网均可以下载备份文件。
-  LimitOnlyIntranet：仅腾讯云自动分配的内网地址可下载备份文件。
- Customize：指用户自定义的私有网络可下载备份文件。
 * @method void setLimitType(string $LimitType) 设置下载备份文件的网络限制类型：

- NoLimit：不限制，腾讯云内外网均可以下载备份文件。
-  LimitOnlyIntranet：仅腾讯云自动分配的内网地址可下载备份文件。
- Customize：指用户自定义的私有网络可下载备份文件。
 * @method string getVpcComparisonSymbol() 获取该参数仅支持输入 In，表示自定义的**LimitVpc**可以下载备份文件。
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) 设置该参数仅支持输入 In，表示自定义的**LimitVpc**可以下载备份文件。
 * @method string getIpComparisonSymbol() 获取标识自定义的 LimitIp 地址是否可下载备份文件。

- In: 自定义的 IP 地址可以下载。
- NotIn: 自定义的 IP 不可以下载。
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) 设置标识自定义的 LimitIp 地址是否可下载备份文件。

- In: 自定义的 IP 地址可以下载。
- NotIn: 自定义的 IP 不可以下载。
 * @method array getLimitVpc() 获取自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
 * @method void setLimitVpc(array $LimitVpc) 设置自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
 * @method array getLimitIp() 获取自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
 * @method void setLimitIp(array $LimitIp) 设置自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupDownloadRestrictionResponse extends AbstractModel
{
    /**
     * @var string 下载备份文件的网络限制类型：

- NoLimit：不限制，腾讯云内外网均可以下载备份文件。
-  LimitOnlyIntranet：仅腾讯云自动分配的内网地址可下载备份文件。
- Customize：指用户自定义的私有网络可下载备份文件。
     */
    public $LimitType;

    /**
     * @var string 该参数仅支持输入 In，表示自定义的**LimitVpc**可以下载备份文件。
     */
    public $VpcComparisonSymbol;

    /**
     * @var string 标识自定义的 LimitIp 地址是否可下载备份文件。

- In: 自定义的 IP 地址可以下载。
- NotIn: 自定义的 IP 不可以下载。
     */
    public $IpComparisonSymbol;

    /**
     * @var array 自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
     */
    public $LimitVpc;

    /**
     * @var array 自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
     */
    public $LimitIp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LimitType 下载备份文件的网络限制类型：

- NoLimit：不限制，腾讯云内外网均可以下载备份文件。
-  LimitOnlyIntranet：仅腾讯云自动分配的内网地址可下载备份文件。
- Customize：指用户自定义的私有网络可下载备份文件。
     * @param string $VpcComparisonSymbol 该参数仅支持输入 In，表示自定义的**LimitVpc**可以下载备份文件。
     * @param string $IpComparisonSymbol 标识自定义的 LimitIp 地址是否可下载备份文件。

- In: 自定义的 IP 地址可以下载。
- NotIn: 自定义的 IP 不可以下载。
     * @param array $LimitVpc 自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
     * @param array $LimitIp 自定义的可下载备份文件的 VPC ID。当参数**LimitType**为**Customize **时，显示该参数。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("VpcComparisonSymbol",$param) and $param["VpcComparisonSymbol"] !== null) {
            $this->VpcComparisonSymbol = $param["VpcComparisonSymbol"];
        }

        if (array_key_exists("IpComparisonSymbol",$param) and $param["IpComparisonSymbol"] !== null) {
            $this->IpComparisonSymbol = $param["IpComparisonSymbol"];
        }

        if (array_key_exists("LimitVpc",$param) and $param["LimitVpc"] !== null) {
            $this->LimitVpc = [];
            foreach ($param["LimitVpc"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpc, $obj);
            }
        }

        if (array_key_exists("LimitIp",$param) and $param["LimitIp"] !== null) {
            $this->LimitIp = $param["LimitIp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
