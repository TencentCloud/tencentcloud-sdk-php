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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询类型
 *
 * @method string getVpcId() 获取vpc的字符串id，只支持字符串id。
可以通过 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) 接口查询。
 * @method void setVpcId(string $VpcId) 设置vpc的字符串id，只支持字符串id。
可以通过 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) 接口查询。
 * @method string getPrivateIp() 获取需要查询后端的内网 IP，可以是 CVM 和弹性网卡。
可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
 * @method void setPrivateIp(string $PrivateIp) 设置需要查询后端的内网 IP，可以是 CVM 和弹性网卡。
可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
 */
class LbRsItem extends AbstractModel
{
    /**
     * @var string vpc的字符串id，只支持字符串id。
可以通过 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) 接口查询。
     */
    public $VpcId;

    /**
     * @var string 需要查询后端的内网 IP，可以是 CVM 和弹性网卡。
可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
     */
    public $PrivateIp;

    /**
     * @param string $VpcId vpc的字符串id，只支持字符串id。
可以通过 [DescribeVpcs](https://cloud.tencent.com/document/api/215/15778) 接口查询。
     * @param string $PrivateIp 需要查询后端的内网 IP，可以是 CVM 和弹性网卡。
可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }
    }
}
