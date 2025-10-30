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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云服务器类型机器数量
 *
 * @method integer getCloudFrom() 获取云服务器类型
 * @method void setCloudFrom(integer $CloudFrom) 设置云服务器类型
 * @method integer getMachineCnt() 获取机器数量
 * @method void setMachineCnt(integer $MachineCnt) 设置机器数量
 */
class CloudFromCnt extends AbstractModel
{
    /**
     * @var integer 云服务器类型
     */
    public $CloudFrom;

    /**
     * @var integer 机器数量
     */
    public $MachineCnt;

    /**
     * @param integer $CloudFrom 云服务器类型
     * @param integer $MachineCnt 机器数量
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
        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = $param["CloudFrom"];
        }

        if (array_key_exists("MachineCnt",$param) and $param["MachineCnt"] !== null) {
            $this->MachineCnt = $param["MachineCnt"];
        }
    }
}
