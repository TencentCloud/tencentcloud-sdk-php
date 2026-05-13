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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm ip 统计数
 *
 * @method integer getIpCount() 获取访问Ip个数
 * @method void setIpCount(integer $IpCount) 设置访问Ip个数
 * @method integer getUnmarkedPublicIpCount() 获取未打标公网Ip个数
 * @method void setUnmarkedPublicIpCount(integer $UnmarkedPublicIpCount) 设置未打标公网Ip个数
 * @method integer getPrivateIpCount() 获取内网Ip个数
 * @method void setPrivateIpCount(integer $PrivateIpCount) 设置内网Ip个数
 */
class DspmIpCount extends AbstractModel
{
    /**
     * @var integer 访问Ip个数
     */
    public $IpCount;

    /**
     * @var integer 未打标公网Ip个数
     */
    public $UnmarkedPublicIpCount;

    /**
     * @var integer 内网Ip个数
     */
    public $PrivateIpCount;

    /**
     * @param integer $IpCount 访问Ip个数
     * @param integer $UnmarkedPublicIpCount 未打标公网Ip个数
     * @param integer $PrivateIpCount 内网Ip个数
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
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("UnmarkedPublicIpCount",$param) and $param["UnmarkedPublicIpCount"] !== null) {
            $this->UnmarkedPublicIpCount = $param["UnmarkedPublicIpCount"];
        }

        if (array_key_exists("PrivateIpCount",$param) and $param["PrivateIpCount"] !== null) {
            $this->PrivateIpCount = $param["PrivateIpCount"];
        }
    }
}
