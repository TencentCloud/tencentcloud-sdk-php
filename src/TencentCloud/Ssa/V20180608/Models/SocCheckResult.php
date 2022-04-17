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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云安全配置检测结果
 *
 * @method string getCheckId() 获取检查项的uuid
 * @method void setCheckId(string $CheckId) 设置检查项的uuid
 * @method string getName() 获取配置要求
 * @method void setName(string $Name) 设置配置要求
 * @method string getType() 获取检查项的类型
 * @method void setType(string $Type) 设置检查项的类型
 * @method string getAssetType() 获取检查对象
 * @method void setAssetType(string $AssetType) 设置检查对象
 * @method string getPloyName() 获取策略名
 * @method void setPloyName(string $PloyName) 设置策略名
 * @method integer getPloyId() 获取策略id
 * @method void setPloyId(integer $PloyId) 设置策略id
 * @method string getResult() 获取正常,低危,中危,高危
 * @method void setResult(string $Result) 设置正常,低危,中危,高危
 * @method integer getFailAssetNum() 获取不符合数
 * @method void setFailAssetNum(integer $FailAssetNum) 设置不符合数
 * @method integer getTotalAssetNum() 获取总数
 * @method void setTotalAssetNum(integer $TotalAssetNum) 设置总数
 * @method string getDealUrl() 获取处置建议url链接
 * @method void setDealUrl(string $DealUrl) 设置处置建议url链接
 */
class SocCheckResult extends AbstractModel
{
    /**
     * @var string 检查项的uuid
     */
    public $CheckId;

    /**
     * @var string 配置要求
     */
    public $Name;

    /**
     * @var string 检查项的类型
     */
    public $Type;

    /**
     * @var string 检查对象
     */
    public $AssetType;

    /**
     * @var string 策略名
     */
    public $PloyName;

    /**
     * @var integer 策略id
     */
    public $PloyId;

    /**
     * @var string 正常,低危,中危,高危
     */
    public $Result;

    /**
     * @var integer 不符合数
     */
    public $FailAssetNum;

    /**
     * @var integer 总数
     */
    public $TotalAssetNum;

    /**
     * @var string 处置建议url链接
     */
    public $DealUrl;

    /**
     * @param string $CheckId 检查项的uuid
     * @param string $Name 配置要求
     * @param string $Type 检查项的类型
     * @param string $AssetType 检查对象
     * @param string $PloyName 策略名
     * @param integer $PloyId 策略id
     * @param string $Result 正常,低危,中危,高危
     * @param integer $FailAssetNum 不符合数
     * @param integer $TotalAssetNum 总数
     * @param string $DealUrl 处置建议url链接
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
        if (array_key_exists("CheckId",$param) and $param["CheckId"] !== null) {
            $this->CheckId = $param["CheckId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PloyName",$param) and $param["PloyName"] !== null) {
            $this->PloyName = $param["PloyName"];
        }

        if (array_key_exists("PloyId",$param) and $param["PloyId"] !== null) {
            $this->PloyId = $param["PloyId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("FailAssetNum",$param) and $param["FailAssetNum"] !== null) {
            $this->FailAssetNum = $param["FailAssetNum"];
        }

        if (array_key_exists("TotalAssetNum",$param) and $param["TotalAssetNum"] !== null) {
            $this->TotalAssetNum = $param["TotalAssetNum"];
        }

        if (array_key_exists("DealUrl",$param) and $param["DealUrl"] !== null) {
            $this->DealUrl = $param["DealUrl"];
        }
    }
}
