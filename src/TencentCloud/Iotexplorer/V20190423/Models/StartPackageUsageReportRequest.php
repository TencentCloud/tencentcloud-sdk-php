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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartPackageUsageReport请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名</p>
 * @method string getResourceId() 获取<p>预付费 resourceId（ncs- 前缀，必填）</p>
 * @method void setResourceId(string $ResourceId) 设置<p>预付费 resourceId（ncs- 前缀，必填）</p>
 * @method integer getChannelId() 获取<p>通道 ID（无通道填 0）</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID（无通道填 0）</p>
 * @method string getOperator() 获取<p>操作者</p>
 * @method void setOperator(string $Operator) 设置<p>操作者</p>
 * @method string getRemark() 获取<p>备注（可选）</p>
 * @method void setRemark(string $Remark) 设置<p>备注（可选）</p>
 */
class StartPackageUsageReportRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名</p>
     */
    public $DeviceName;

    /**
     * @var string <p>预付费 resourceId（ncs- 前缀，必填）</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>通道 ID（无通道填 0）</p>
     */
    public $ChannelId;

    /**
     * @var string <p>操作者</p>
     */
    public $Operator;

    /**
     * @var string <p>备注（可选）</p>
     */
    public $Remark;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名</p>
     * @param string $ResourceId <p>预付费 resourceId（ncs- 前缀，必填）</p>
     * @param integer $ChannelId <p>通道 ID（无通道填 0）</p>
     * @param string $Operator <p>操作者</p>
     * @param string $Remark <p>备注（可选）</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
