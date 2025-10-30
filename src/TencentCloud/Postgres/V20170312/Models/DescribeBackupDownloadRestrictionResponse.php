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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadRestriction返回参数结构体
 *
 * @method string getRestrictionType() 获取备份文件下载限制类型，NONE 无限制，内外网都可以下载；INTRANET 只允许内网下载；CUSTOMIZE 自定义限制下载的vpc或ip。
 * @method void setRestrictionType(string $RestrictionType) 设置备份文件下载限制类型，NONE 无限制，内外网都可以下载；INTRANET 只允许内网下载；CUSTOMIZE 自定义限制下载的vpc或ip。
 * @method string getVpcRestrictionEffect() 获取vpc限制效力，ALLOW 允许；DENY 拒绝。
 * @method void setVpcRestrictionEffect(string $VpcRestrictionEffect) 设置vpc限制效力，ALLOW 允许；DENY 拒绝。
 * @method array getVpcIdSet() 获取允许或拒绝下载备份文件的vpcId列表。
 * @method void setVpcIdSet(array $VpcIdSet) 设置允许或拒绝下载备份文件的vpcId列表。
 * @method string getIpRestrictionEffect() 获取ip限制效力，ALLOW 允许；DENY 拒绝。
 * @method void setIpRestrictionEffect(string $IpRestrictionEffect) 设置ip限制效力，ALLOW 允许；DENY 拒绝。
 * @method array getIpSet() 获取允许或拒绝下载备份文件的ip列表。
 * @method void setIpSet(array $IpSet) 设置允许或拒绝下载备份文件的ip列表。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupDownloadRestrictionResponse extends AbstractModel
{
    /**
     * @var string 备份文件下载限制类型，NONE 无限制，内外网都可以下载；INTRANET 只允许内网下载；CUSTOMIZE 自定义限制下载的vpc或ip。
     */
    public $RestrictionType;

    /**
     * @var string vpc限制效力，ALLOW 允许；DENY 拒绝。
     */
    public $VpcRestrictionEffect;

    /**
     * @var array 允许或拒绝下载备份文件的vpcId列表。
     */
    public $VpcIdSet;

    /**
     * @var string ip限制效力，ALLOW 允许；DENY 拒绝。
     */
    public $IpRestrictionEffect;

    /**
     * @var array 允许或拒绝下载备份文件的ip列表。
     */
    public $IpSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RestrictionType 备份文件下载限制类型，NONE 无限制，内外网都可以下载；INTRANET 只允许内网下载；CUSTOMIZE 自定义限制下载的vpc或ip。
     * @param string $VpcRestrictionEffect vpc限制效力，ALLOW 允许；DENY 拒绝。
     * @param array $VpcIdSet 允许或拒绝下载备份文件的vpcId列表。
     * @param string $IpRestrictionEffect ip限制效力，ALLOW 允许；DENY 拒绝。
     * @param array $IpSet 允许或拒绝下载备份文件的ip列表。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RestrictionType",$param) and $param["RestrictionType"] !== null) {
            $this->RestrictionType = $param["RestrictionType"];
        }

        if (array_key_exists("VpcRestrictionEffect",$param) and $param["VpcRestrictionEffect"] !== null) {
            $this->VpcRestrictionEffect = $param["VpcRestrictionEffect"];
        }

        if (array_key_exists("VpcIdSet",$param) and $param["VpcIdSet"] !== null) {
            $this->VpcIdSet = $param["VpcIdSet"];
        }

        if (array_key_exists("IpRestrictionEffect",$param) and $param["IpRestrictionEffect"] !== null) {
            $this->IpRestrictionEffect = $param["IpRestrictionEffect"];
        }

        if (array_key_exists("IpSet",$param) and $param["IpSet"] !== null) {
            $this->IpSet = $param["IpSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
