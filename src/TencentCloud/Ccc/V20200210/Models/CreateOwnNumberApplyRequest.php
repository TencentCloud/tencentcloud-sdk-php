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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOwnNumberApply请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getSipTrunkId() 获取SIP通道ID
 * @method void setSipTrunkId(integer $SipTrunkId) 设置SIP通道ID
 * @method array getDetailList() 获取线路相关参数
 * @method void setDetailList(array $DetailList) 设置线路相关参数
 * @method string getPrefix() 获取送号前缀
 * @method void setPrefix(string $Prefix) 设置送号前缀
 * @method string getMobileNddPrefix() 获取国内长途手机前缀码
 * @method void setMobileNddPrefix(string $MobileNddPrefix) 设置国内长途手机前缀码
 * @method boolean getLocalNumberTrimAC() 获取同市固话去掉区号
 * @method void setLocalNumberTrimAC(boolean $LocalNumberTrimAC) 设置同市固话去掉区号
 */
class CreateOwnNumberApplyRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer SIP通道ID
     */
    public $SipTrunkId;

    /**
     * @var array 线路相关参数
     */
    public $DetailList;

    /**
     * @var string 送号前缀
     */
    public $Prefix;

    /**
     * @var string 国内长途手机前缀码
     */
    public $MobileNddPrefix;

    /**
     * @var boolean 同市固话去掉区号
     */
    public $LocalNumberTrimAC;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $SipTrunkId SIP通道ID
     * @param array $DetailList 线路相关参数
     * @param string $Prefix 送号前缀
     * @param string $MobileNddPrefix 国内长途手机前缀码
     * @param boolean $LocalNumberTrimAC 同市固话去掉区号
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SipTrunkId",$param) and $param["SipTrunkId"] !== null) {
            $this->SipTrunkId = $param["SipTrunkId"];
        }

        if (array_key_exists("DetailList",$param) and $param["DetailList"] !== null) {
            $this->DetailList = [];
            foreach ($param["DetailList"] as $key => $value){
                $obj = new OwnNumberApplyDetailItem();
                $obj->deserialize($value);
                array_push($this->DetailList, $obj);
            }
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("MobileNddPrefix",$param) and $param["MobileNddPrefix"] !== null) {
            $this->MobileNddPrefix = $param["MobileNddPrefix"];
        }

        if (array_key_exists("LocalNumberTrimAC",$param) and $param["LocalNumberTrimAC"] !== null) {
            $this->LocalNumberTrimAC = $param["LocalNumberTrimAC"];
        }
    }
}
