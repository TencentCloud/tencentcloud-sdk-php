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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多可用区VPC
 *
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method integer getAppId() 获取<p>用户AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId</p>
 * @method string getOwnerUin() 获取<p>用户UIN</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>用户UIN</p>
 */
class SlaveVpcDescriptions extends AbstractModel
{
    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>用户AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $OwnerUin;

    /**
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param integer $AppId <p>用户AppId</p>
     * @param string $OwnerUin <p>用户UIN</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
