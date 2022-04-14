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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCloudChannelData返回参数结构体
 *
 * @method string getOutOrderNo() 获取外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutOrderNo(string $OutOrderNo) 设置外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelOrderId() 获取渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalChannelDataType() 获取第三方渠道数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalChannelDataType(string $ExternalChannelDataType) 设置第三方渠道数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannel() 获取渠道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannel(string $Channel) 设置渠道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExternalChannelDataList() 获取第三方渠道数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalChannelDataList(array $ExternalChannelDataList) 设置第三方渠道数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAppId() 获取子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAppId(string $SubAppId) 设置子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryCloudChannelDataResponse extends AbstractModel
{
    /**
     * @var string 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutOrderNo;

    /**
     * @var string 渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOrderId;

    /**
     * @var string 第三方渠道数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalChannelDataType;

    /**
     * @var string 渠道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Channel;

    /**
     * @var array 第三方渠道数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalChannelDataList;

    /**
     * @var string 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAppId;

    /**
     * @var string 米大师分配的支付主MidasAppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OutOrderNo 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelOrderId 渠道订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalChannelDataType 第三方渠道数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Channel 渠道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExternalChannelDataList 第三方渠道数据列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAppId 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 米大师分配的支付主MidasAppId
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
        if (array_key_exists("OutOrderNo",$param) and $param["OutOrderNo"] !== null) {
            $this->OutOrderNo = $param["OutOrderNo"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("ExternalChannelDataType",$param) and $param["ExternalChannelDataType"] !== null) {
            $this->ExternalChannelDataType = $param["ExternalChannelDataType"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("ExternalChannelDataList",$param) and $param["ExternalChannelDataList"] !== null) {
            $this->ExternalChannelDataList = [];
            foreach ($param["ExternalChannelDataList"] as $key => $value){
                $obj = new CloudExternalChannelData();
                $obj->deserialize($value);
                array_push($this->ExternalChannelDataList, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
