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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网描述信息
 *
 * @method string getVpcId() 获取私有网络 ID
 * @method void setVpcId(string $VpcId) 设置私有网络 ID
 * @method string getSubnetId() 获取子网 ID
 * @method void setSubnetId(string $SubnetId) 设置子网 ID
 * @method string getCcnId() 获取云联网 ID，如 ccn-rahigzjd
 * @method void setCcnId(string $CcnId) 设置云联网 ID，如 ccn-rahigzjd
 */
class CCN extends AbstractModel
{
    /**
     * @var string 私有网络 ID
     */
    public $VpcId;

    /**
     * @var string 子网 ID
     */
    public $SubnetId;

    /**
     * @var string 云联网 ID，如 ccn-rahigzjd
     */
    public $CcnId;

    /**
     * @param string $VpcId 私有网络 ID
     * @param string $SubnetId 子网 ID
     * @param string $CcnId 云联网 ID，如 ccn-rahigzjd
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }
    }
}
