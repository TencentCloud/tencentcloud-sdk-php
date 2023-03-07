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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineDetectOverview返回参数结构体
 *
 * @method integer getHostCount() 获取检测服务器数
 * @method void setHostCount(integer $HostCount) 设置检测服务器数
 * @method integer getItemCount() 获取检测项
 * @method void setItemCount(integer $ItemCount) 设置检测项
 * @method integer getPolicyCount() 获取检测策略项
 * @method void setPolicyCount(integer $PolicyCount) 设置检测策略项
 * @method integer getPassRate() 获取通过率*100%
 * @method void setPassRate(integer $PassRate) 设置通过率*100%
 * @method integer getLatestPassCount() 获取最近一次检测通过个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestPassCount(integer $LatestPassCount) 设置最近一次检测通过个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLatestNotPassCount() 获取最近一次检测未通过个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestNotPassCount(integer $LatestNotPassCount) 设置最近一次检测未通过个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineDetectOverviewResponse extends AbstractModel
{
    /**
     * @var integer 检测服务器数
     */
    public $HostCount;

    /**
     * @var integer 检测项
     */
    public $ItemCount;

    /**
     * @var integer 检测策略项
     */
    public $PolicyCount;

    /**
     * @var integer 通过率*100%
     */
    public $PassRate;

    /**
     * @var integer 最近一次检测通过个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestPassCount;

    /**
     * @var integer 最近一次检测未通过个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestNotPassCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HostCount 检测服务器数
     * @param integer $ItemCount 检测项
     * @param integer $PolicyCount 检测策略项
     * @param integer $PassRate 通过率*100%
     * @param integer $LatestPassCount 最近一次检测通过个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LatestNotPassCount 最近一次检测未通过个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("PolicyCount",$param) and $param["PolicyCount"] !== null) {
            $this->PolicyCount = $param["PolicyCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("LatestPassCount",$param) and $param["LatestPassCount"] !== null) {
            $this->LatestPassCount = $param["LatestPassCount"];
        }

        if (array_key_exists("LatestNotPassCount",$param) and $param["LatestNotPassCount"] !== null) {
            $this->LatestNotPassCount = $param["LatestNotPassCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
