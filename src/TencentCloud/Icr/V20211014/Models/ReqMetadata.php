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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 请求的Metadata
 *
 * @method string getChannelID() 获取渠道
 * @method void setChannelID(string $ChannelID) 设置渠道
 * @method string getBusinessName() 获取无
 * @method void setBusinessName(string $BusinessName) 设置无
 * @method string getGUID() 获取无
 * @method void setGUID(string $GUID) 设置无
 * @method string getAppKey() 获取无
 * @method void setAppKey(string $AppKey) 设置无
 * @method ReqMetadataLBS getLBS() 获取位置定位服务
 * @method void setLBS(ReqMetadataLBS $LBS) 设置位置定位服务
 * @method array getVagrants() 获取透传字段
 * @method void setVagrants(array $Vagrants) 设置透传字段
 */
class ReqMetadata extends AbstractModel
{
    /**
     * @var string 渠道
     */
    public $ChannelID;

    /**
     * @var string 无
     */
    public $BusinessName;

    /**
     * @var string 无
     */
    public $GUID;

    /**
     * @var string 无
     */
    public $AppKey;

    /**
     * @var ReqMetadataLBS 位置定位服务
     */
    public $LBS;

    /**
     * @var array 透传字段
     */
    public $Vagrants;

    /**
     * @param string $ChannelID 渠道
     * @param string $BusinessName 无
     * @param string $GUID 无
     * @param string $AppKey 无
     * @param ReqMetadataLBS $LBS 位置定位服务
     * @param array $Vagrants 透传字段
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
        if (array_key_exists("ChannelID",$param) and $param["ChannelID"] !== null) {
            $this->ChannelID = $param["ChannelID"];
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("GUID",$param) and $param["GUID"] !== null) {
            $this->GUID = $param["GUID"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("LBS",$param) and $param["LBS"] !== null) {
            $this->LBS = new ReqMetadataLBS();
            $this->LBS->deserialize($param["LBS"]);
        }

        if (array_key_exists("Vagrants",$param) and $param["Vagrants"] !== null) {
            $this->Vagrants = [];
            foreach ($param["Vagrants"] as $key => $value){
                $obj = new ReqMetadataVagrant();
                $obj->deserialize($value);
                array_push($this->Vagrants, $obj);
            }
        }
    }
}
