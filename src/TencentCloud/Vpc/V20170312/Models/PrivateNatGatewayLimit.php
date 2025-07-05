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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可创建的私网网关配额数量
 *
 * @method string getUniqVpcId() 获取私有网络唯一`ID`。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络唯一`ID`。
 * @method integer getTotalLimit() 获取Vpc下总计可创建私网网关数量。
 * @method void setTotalLimit(integer $TotalLimit) 设置Vpc下总计可创建私网网关数量。
 * @method integer getAvailable() 获取可创建私网网关数量。
 * @method void setAvailable(integer $Available) 设置可创建私网网关数量。
 */
class PrivateNatGatewayLimit extends AbstractModel
{
    /**
     * @var string 私有网络唯一`ID`。
     */
    public $UniqVpcId;

    /**
     * @var integer Vpc下总计可创建私网网关数量。
     */
    public $TotalLimit;

    /**
     * @var integer 可创建私网网关数量。
     */
    public $Available;

    /**
     * @param string $UniqVpcId 私有网络唯一`ID`。
     * @param integer $TotalLimit Vpc下总计可创建私网网关数量。
     * @param integer $Available 可创建私网网关数量。
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("TotalLimit",$param) and $param["TotalLimit"] !== null) {
            $this->TotalLimit = $param["TotalLimit"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}
