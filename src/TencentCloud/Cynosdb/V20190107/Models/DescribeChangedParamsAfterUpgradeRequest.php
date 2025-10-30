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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChangedParamsAfterUpgrade请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method integer getDstCpu() 获取变配后的CPU
 * @method void setDstCpu(integer $DstCpu) 设置变配后的CPU
 * @method integer getDstMem() 获取变配后的MEM，单位G
 * @method void setDstMem(integer $DstMem) 设置变配后的MEM，单位G
 */
class DescribeChangedParamsAfterUpgradeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var integer 变配后的CPU
     */
    public $DstCpu;

    /**
     * @var integer 变配后的MEM，单位G
     */
    public $DstMem;

    /**
     * @param string $InstanceId 集群ID
     * @param integer $DstCpu 变配后的CPU
     * @param integer $DstMem 变配后的MEM，单位G
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstCpu",$param) and $param["DstCpu"] !== null) {
            $this->DstCpu = $param["DstCpu"];
        }

        if (array_key_exists("DstMem",$param) and $param["DstMem"] !== null) {
            $this->DstMem = $param["DstMem"];
        }
    }
}
