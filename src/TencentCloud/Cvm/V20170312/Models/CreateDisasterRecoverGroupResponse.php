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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisasterRecoverGroup返回参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取<p>分散置放群组ID列表。</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>分散置放群组ID列表。</p>
 * @method string getType() 获取<p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
 * @method void setType(string $Type) 设置<p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
 * @method string getName() 获取<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method void setName(string $Name) 设置<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method integer getCvmQuotaTotal() 获取<p>置放群组内可容纳的云服务器数量。</p>
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置<p>置放群组内可容纳的云服务器数量。</p>
 * @method integer getCurrentNum() 获取<p>置放群组内已有的云服务器数量。</p>
 * @method void setCurrentNum(integer $CurrentNum) 设置<p>置放群组内已有的云服务器数量。</p>
 * @method string getCreateTime() 获取<p>分散置放群组创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>分散置放群组创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
 * @method string getStrategy() 获取<p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，默认是分散置放群组。</p>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，默认是分散置放群组。</p>
 * @method integer getPartitionCount() 获取<p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时，才有该值(分区置放群组功能灰度中)。</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时，才有该值(分区置放群组功能灰度中)。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDisasterRecoverGroupResponse extends AbstractModel
{
    /**
     * @var string <p>分散置放群组ID列表。</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string <p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
     */
    public $Type;

    /**
     * @var string <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     */
    public $Name;

    /**
     * @var integer <p>置放群组内可容纳的云服务器数量。</p>
     */
    public $CvmQuotaTotal;

    /**
     * @var integer <p>置放群组内已有的云服务器数量。</p>
     */
    public $CurrentNum;

    /**
     * @var string <p>分散置放群组创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，默认是分散置放群组。</p>
     */
    public $Strategy;

    /**
     * @var integer <p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时，才有该值(分区置放群组功能灰度中)。</p>
     */
    public $PartitionCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DisasterRecoverGroupId <p>分散置放群组ID列表。</p>
     * @param string $Type <p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
     * @param string $Name <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     * @param integer $CvmQuotaTotal <p>置放群组内可容纳的云服务器数量。</p>
     * @param integer $CurrentNum <p>置放群组内已有的云服务器数量。</p>
     * @param string $CreateTime <p>分散置放群组创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
     * @param string $Strategy <p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，默认是分散置放群组。</p>
     * @param integer $PartitionCount <p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时，才有该值(分区置放群组功能灰度中)。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
