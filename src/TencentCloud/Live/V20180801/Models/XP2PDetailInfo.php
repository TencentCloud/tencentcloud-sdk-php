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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 央视P2P流信息。
 *
 * @method integer getCdnBytes() 获取CDN流量。
 * @method void setCdnBytes(integer $CdnBytes) 设置CDN流量。
 * @method integer getP2pBytes() 获取P2P流量。
 * @method void setP2pBytes(integer $P2pBytes) 设置P2P流量。
 * @method integer getStuckPeople() 获取卡播人数。
 * @method void setStuckPeople(integer $StuckPeople) 设置卡播人数。
 * @method integer getStuckTimes() 获取卡播次数。
 * @method void setStuckTimes(integer $StuckTimes) 设置卡播次数。
 * @method integer getOnlinePeople() 获取在线人数。
 * @method void setOnlinePeople(integer $OnlinePeople) 设置在线人数。
 * @method integer getRequest() 获取起播请求次数
 * @method void setRequest(integer $Request) 设置起播请求次数
 * @method integer getRequestSuccess() 获取起播成功次数
 * @method void setRequestSuccess(integer $RequestSuccess) 设置起播成功次数
 * @method string getTime() 获取时间，一分钟粒度，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。。
 * @method void setTime(string $Time) 设置时间，一分钟粒度，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。。
 * @method string getType() 获取类型，分live和vod两种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，分live和vod两种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamName() 获取流ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamName(string $StreamName) 设置流ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取AppId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置AppId。
注意：此字段可能返回 null，表示取不到有效值。
 */
class XP2PDetailInfo extends AbstractModel
{
    /**
     * @var integer CDN流量。
     */
    public $CdnBytes;

    /**
     * @var integer P2P流量。
     */
    public $P2pBytes;

    /**
     * @var integer 卡播人数。
     */
    public $StuckPeople;

    /**
     * @var integer 卡播次数。
     */
    public $StuckTimes;

    /**
     * @var integer 在线人数。
     */
    public $OnlinePeople;

    /**
     * @var integer 起播请求次数
     */
    public $Request;

    /**
     * @var integer 起播成功次数
     */
    public $RequestSuccess;

    /**
     * @var string 时间，一分钟粒度，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。。
     */
    public $Time;

    /**
     * @var string 类型，分live和vod两种。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 流ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamName;

    /**
     * @var string AppId。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param integer $CdnBytes CDN流量。
     * @param integer $P2pBytes P2P流量。
     * @param integer $StuckPeople 卡播人数。
     * @param integer $StuckTimes 卡播次数。
     * @param integer $OnlinePeople 在线人数。
     * @param integer $Request 起播请求次数
     * @param integer $RequestSuccess 起播成功次数
     * @param string $Time 时间，一分钟粒度，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。。
     * @param string $Type 类型，分live和vod两种。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamName 流ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId AppId。
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
        if (array_key_exists("CdnBytes",$param) and $param["CdnBytes"] !== null) {
            $this->CdnBytes = $param["CdnBytes"];
        }

        if (array_key_exists("P2pBytes",$param) and $param["P2pBytes"] !== null) {
            $this->P2pBytes = $param["P2pBytes"];
        }

        if (array_key_exists("StuckPeople",$param) and $param["StuckPeople"] !== null) {
            $this->StuckPeople = $param["StuckPeople"];
        }

        if (array_key_exists("StuckTimes",$param) and $param["StuckTimes"] !== null) {
            $this->StuckTimes = $param["StuckTimes"];
        }

        if (array_key_exists("OnlinePeople",$param) and $param["OnlinePeople"] !== null) {
            $this->OnlinePeople = $param["OnlinePeople"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("RequestSuccess",$param) and $param["RequestSuccess"] !== null) {
            $this->RequestSuccess = $param["RequestSuccess"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
