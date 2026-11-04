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
 * @method integer getTotalProtectedCount() 获取<p>受保护资源总数</p>
 * @method void setTotalProtectedCount(integer $TotalProtectedCount) 设置<p>受保护资源总数</p>
 * @method integer getTotalResourceCount() 获取<p>总资源数</p>
 * @method void setTotalResourceCount(integer $TotalResourceCount) 设置<p>总资源数</p>
 * @method ResourceProtectStat getCvm() 获取<p>CVM整机备份受保护统计</p>
 * @method void setCvm(ResourceProtectStat $Cvm) 设置<p>CVM整机备份受保护统计</p>
 * @method ResourceProtectStat getCFS() 获取<p>CVM文件备份受保护统计</p>
 * @method void setCFS(ResourceProtectStat $CFS) 设置<p>CVM文件备份受保护统计</p>
 * @method ResourceProtectStat getCFSAgent() 获取<p>CFS文件备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSAgent(ResourceProtectStat $CFSAgent) 设置<p>CFS文件备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceProtectStat getCOSAgent() 获取<p>COS备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSAgent(ResourceProtectStat $COSAgent) 设置<p>COS备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectedResourceOverview extends AbstractModel
{
    /**
     * @var integer <p>受保护资源总数</p>
     */
    public $TotalProtectedCount;

    /**
     * @var integer <p>总资源数</p>
     */
    public $TotalResourceCount;

    /**
     * @var ResourceProtectStat <p>CVM整机备份受保护统计</p>
     */
    public $Cvm;

    /**
     * @var ResourceProtectStat <p>CVM文件备份受保护统计</p>
     */
    public $CFS;

    /**
     * @var ResourceProtectStat <p>CFS文件备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSAgent;

    /**
     * @var ResourceProtectStat <p>COS备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSAgent;

    /**
     * @param integer $TotalProtectedCount <p>受保护资源总数</p>
     * @param integer $TotalResourceCount <p>总资源数</p>
     * @param ResourceProtectStat $Cvm <p>CVM整机备份受保护统计</p>
     * @param ResourceProtectStat $CFS <p>CVM文件备份受保护统计</p>
     * @param ResourceProtectStat $CFSAgent <p>CFS文件备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceProtectStat $COSAgent <p>COS备份受保护统计</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CFSAgent",$param) and $param["CFSAgent"] !== null) {
            $this->CFSAgent = new ResourceProtectStat();
            $this->CFSAgent->deserialize($param["CFSAgent"]);
        }

        if (array_key_exists("COSAgent",$param) and $param["COSAgent"] !== null) {
            $this->COSAgent = new ResourceProtectStat();
            $this->COSAgent->deserialize($param["COSAgent"]);
        }
    }
}
