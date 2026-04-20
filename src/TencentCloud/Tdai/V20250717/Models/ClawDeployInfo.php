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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * databaseClaw实例部署详情
 *
 * @method string getUserVpcId() 获取<p>无</p>
 * @method void setUserVpcId(string $UserVpcId) 设置<p>无</p>
 * @method string getUserSubnetId() 获取<p>无</p>
 * @method void setUserSubnetId(string $UserSubnetId) 设置<p>无</p>
 * @method string getUserVpcRegion() 获取<p>无</p>
 * @method void setUserVpcRegion(string $UserVpcRegion) 设置<p>无</p>
 */
class ClawDeployInfo extends AbstractModel
{
    /**
     * @var string <p>无</p>
     */
    public $UserVpcId;

    /**
     * @var string <p>无</p>
     */
    public $UserSubnetId;

    /**
     * @var string <p>无</p>
     */
    public $UserVpcRegion;

    /**
     * @param string $UserVpcId <p>无</p>
     * @param string $UserSubnetId <p>无</p>
     * @param string $UserVpcRegion <p>无</p>
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
        if (array_key_exists("UserVpcId",$param) and $param["UserVpcId"] !== null) {
            $this->UserVpcId = $param["UserVpcId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("UserVpcRegion",$param) and $param["UserVpcRegion"] !== null) {
            $this->UserVpcRegion = $param["UserVpcRegion"];
        }
    }
}
