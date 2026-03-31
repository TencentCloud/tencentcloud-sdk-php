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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例公网路由IP白名单列表对象
 *
 * @method string getCidrBlock() 获取<p>放通IP或网段</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>放通IP或网段</p>
 * @method string getPolicyDescription() 获取<p>描述</p>
 * @method void setPolicyDescription(string $PolicyDescription) 设置<p>描述</p>
 */
class IpWhitelistDTO extends AbstractModel
{
    /**
     * @var string <p>放通IP或网段</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>描述</p>
     */
    public $PolicyDescription;

    /**
     * @param string $CidrBlock <p>放通IP或网段</p>
     * @param string $PolicyDescription <p>描述</p>
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
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }
    }
}
