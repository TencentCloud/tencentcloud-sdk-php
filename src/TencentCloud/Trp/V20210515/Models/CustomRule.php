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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 码规则
 *
 * @method string getCustomId() 获取码规则ID
 * @method void setCustomId(string $CustomId) 设置码规则ID
 * @method string getName() 获取码规则名
 * @method void setName(string $Name) 设置码规则名
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method integer getCodeLength() 获取码ID长度
 * @method void setCodeLength(integer $CodeLength) 设置码ID长度
 * @method integer getStatus() 获取规则状态
 * @method void setStatus(integer $Status) 设置规则状态
 * @method array getCodeParts() 获取码段配置
 * @method void setCodeParts(array $CodeParts) 设置码段配置
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string 码规则ID
     */
    public $CustomId;

    /**
     * @var string 码规则名
     */
    public $Name;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var integer 码ID长度
     */
    public $CodeLength;

    /**
     * @var integer 规则状态
     */
    public $Status;

    /**
     * @var array 码段配置
     */
    public $CodeParts;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $CustomId 码规则ID
     * @param string $Name 码规则名
     * @param integer $CorpId 企业ID
     * @param string $MerchantId 商户ID
     * @param integer $CodeLength 码ID长度
     * @param integer $Status 规则状态
     * @param array $CodeParts 码段配置
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("CodeLength",$param) and $param["CodeLength"] !== null) {
            $this->CodeLength = $param["CodeLength"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CodeParts",$param) and $param["CodeParts"] !== null) {
            $this->CodeParts = [];
            foreach ($param["CodeParts"] as $key => $value){
                $obj = new CodePart();
                $obj->deserialize($value);
                array_push($this->CodeParts, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
