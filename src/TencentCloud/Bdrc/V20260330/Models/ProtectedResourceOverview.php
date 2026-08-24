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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受保护资源概览
 *
 * @method integer getTotalProtectedCount() 获取受保护资源总数
 * @method void setTotalProtectedCount(integer $TotalProtectedCount) 设置受保护资源总数
 * @method integer getTotalResourceCount() 获取总资源数
 * @method void setTotalResourceCount(integer $TotalResourceCount) 设置总资源数
 * @method ResourceProtectStat getCvm() 获取CVM 受保护统计
 * @method void setCvm(ResourceProtectStat $Cvm) 设置CVM 受保护统计
 * @method ResourceProtectStat getCFS() 获取CFS 受保护统计
 * @method void setCFS(ResourceProtectStat $CFS) 设置CFS 受保护统计
 */
class ProtectedResourceOverview extends AbstractModel
{
    /**
     * @var integer 受保护资源总数
     */
    public $TotalProtectedCount;

    /**
     * @var integer 总资源数
     */
    public $TotalResourceCount;

    /**
     * @var ResourceProtectStat CVM 受保护统计
     */
    public $Cvm;

    /**
     * @var ResourceProtectStat CFS 受保护统计
     */
    public $CFS;

    /**
     * @param integer $TotalProtectedCount 受保护资源总数
     * @param integer $TotalResourceCount 总资源数
     * @param ResourceProtectStat $Cvm CVM 受保护统计
     * @param ResourceProtectStat $CFS CFS 受保护统计
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
        if (array_key_exists("TotalProtectedCount",$param) and $param["TotalProtectedCount"] !== null) {
            $this->TotalProtectedCount = $param["TotalProtectedCount"];
        }

        if (array_key_exists("TotalResourceCount",$param) and $param["TotalResourceCount"] !== null) {
            $this->TotalResourceCount = $param["TotalResourceCount"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = new ResourceProtectStat();
            $this->Cvm->deserialize($param["Cvm"]);
        }

        if (array_key_exists("CFS",$param) and $param["CFS"] !== null) {
            $this->CFS = new ResourceProtectStat();
            $this->CFS->deserialize($param["CFS"]);
        }
    }
}
