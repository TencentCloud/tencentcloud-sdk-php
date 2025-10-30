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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWhiteListOrder请求参数结构体
 *
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 * @method integer getLicenseNum() 获取授权数量,最小为1 最大99999
 * @method void setLicenseNum(integer $LicenseNum) 设置授权数量,最小为1 最大99999
 * @method integer getDeadline() 获取到期时间,最小为1
 * @method void setDeadline(integer $Deadline) 设置到期时间,最小为1
 * @method string getRuleName() 获取规则名称,大资产中心:asset_center
 * @method void setRuleName(string $RuleName) 设置规则名称,大资产中心:asset_center
 * @method integer getSourceType() 获取订单类型, 1 试用 2 赠送 3 体验 4 SSL-证书赠送 5 cvm赠送
 * @method void setSourceType(integer $SourceType) 设置订单类型, 1 试用 2 赠送 3 体验 4 SSL-证书赠送 5 cvm赠送
 * @method integer getRegionId() 获取地域, 1 广州 9新加坡, 默认为 1. 非必要情况不要选9
 * @method void setRegionId(integer $RegionId) 设置地域, 1 广州 9新加坡, 默认为 1. 非必要情况不要选9
 * @method string getExtraParam() 获取额外参数,json字符串,包含ResourceId 资源ID,LicenseType 授权类型
 * @method void setExtraParam(string $ExtraParam) 设置额外参数,json字符串,包含ResourceId 资源ID,LicenseType 授权类型
 */
class CreateWhiteListOrderRequest extends AbstractModel
{
    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @var integer 授权数量,最小为1 最大99999
     */
    public $LicenseNum;

    /**
     * @var integer 到期时间,最小为1
     */
    public $Deadline;

    /**
     * @var string 规则名称,大资产中心:asset_center
     */
    public $RuleName;

    /**
     * @var integer 订单类型, 1 试用 2 赠送 3 体验 4 SSL-证书赠送 5 cvm赠送
     */
    public $SourceType;

    /**
     * @var integer 地域, 1 广州 9新加坡, 默认为 1. 非必要情况不要选9
     */
    public $RegionId;

    /**
     * @var string 额外参数,json字符串,包含ResourceId 资源ID,LicenseType 授权类型
     */
    public $ExtraParam;

    /**
     * @param integer $LicenseType 授权类型
     * @param integer $LicenseNum 授权数量,最小为1 最大99999
     * @param integer $Deadline 到期时间,最小为1
     * @param string $RuleName 规则名称,大资产中心:asset_center
     * @param integer $SourceType 订单类型, 1 试用 2 赠送 3 体验 4 SSL-证书赠送 5 cvm赠送
     * @param integer $RegionId 地域, 1 广州 9新加坡, 默认为 1. 非必要情况不要选9
     * @param string $ExtraParam 额外参数,json字符串,包含ResourceId 资源ID,LicenseType 授权类型
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
        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }
    }
}
