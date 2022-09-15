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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProVersionInfo返回参数结构体
 *
 * @method string getStartTime() 获取专业版开始时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置专业版开始时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取专业版结束时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置专业版结束时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoresCnt() 获取需购买的机器核数
 * @method void setCoresCnt(integer $CoresCnt) 设置需购买的机器核数
 * @method integer getMaxPostPayCoresCnt() 获取弹性计费上限
 * @method void setMaxPostPayCoresCnt(integer $MaxPostPayCoresCnt) 设置弹性计费上限
 * @method string getResourceId() 获取资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyStatus() 获取购买状态
待购: Pending
已购: Normal
隔离: Isolate
 * @method void setBuyStatus(string $BuyStatus) 设置购买状态
待购: Pending
已购: Normal
隔离: Isolate
 * @method boolean getIsPurchased() 获取是否曾经购买过(false:未曾 true:曾经购买过)
 * @method void setIsPurchased(boolean $IsPurchased) 设置是否曾经购买过(false:未曾 true:曾经购买过)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProVersionInfoResponse extends AbstractModel
{
    /**
     * @var string 专业版开始时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 专业版结束时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 需购买的机器核数
     */
    public $CoresCnt;

    /**
     * @var integer 弹性计费上限
     */
    public $MaxPostPayCoresCnt;

    /**
     * @var string 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 购买状态
待购: Pending
已购: Normal
隔离: Isolate
     */
    public $BuyStatus;

    /**
     * @var boolean 是否曾经购买过(false:未曾 true:曾经购买过)
     */
    public $IsPurchased;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StartTime 专业版开始时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 专业版结束时间，补充购买时才不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoresCnt 需购买的机器核数
     * @param integer $MaxPostPayCoresCnt 弹性计费上限
     * @param string $ResourceId 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyStatus 购买状态
待购: Pending
已购: Normal
隔离: Isolate
     * @param boolean $IsPurchased 是否曾经购买过(false:未曾 true:曾经购买过)
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("MaxPostPayCoresCnt",$param) and $param["MaxPostPayCoresCnt"] !== null) {
            $this->MaxPostPayCoresCnt = $param["MaxPostPayCoresCnt"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("IsPurchased",$param) and $param["IsPurchased"] !== null) {
            $this->IsPurchased = $param["IsPurchased"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
