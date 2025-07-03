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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC子网信息
 *
 * @method string getCidrId() 获取子网Id
 * @method void setCidrId(string $CidrId) 设置子网Id
 * @method string getCidrAddr() 获取子网网段
 * @method void setCidrAddr(string $CidrAddr) 设置子网网段
 */
class VpcCidrBlock extends AbstractModel
{
    /**
     * @var string 子网Id
     */
    public $CidrId;

    /**
     * @var string 子网网段
     */
    public $CidrAddr;

    /**
     * @param string $CidrId 子网Id
     * @param string $CidrAddr 子网网段
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
        if (array_key_exists("CidrId",$param) and $param["CidrId"] !== null) {
            $this->CidrId = $param["CidrId"];
        }

        if (array_key_exists("CidrAddr",$param) and $param["CidrAddr"] !== null) {
            $this->CidrAddr = $param["CidrAddr"];
        }
    }
}
