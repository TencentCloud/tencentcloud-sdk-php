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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户规则白名单
 *
 * @method integer getWhiteRuleId() 获取白名单的id
 * @method void setWhiteRuleId(integer $WhiteRuleId) 设置白名单的id
 * @method string getSignatureId() 获取规则id
 * @method void setSignatureId(string $SignatureId) 设置规则id
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getMatchField() 获取匹配域
 * @method void setMatchField(string $MatchField) 设置匹配域
 * @method string getMatchParams() 获取匹配参数
 * @method void setMatchParams(string $MatchParams) 设置匹配参数
 * @method string getMatchMethod() 获取匹配方法
 * @method void setMatchMethod(string $MatchMethod) 设置匹配方法
 * @method string getMatchContent() 获取匹配内容
 * @method void setMatchContent(string $MatchContent) 设置匹配内容
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method array getSignatureIds() 获取规则ID列表
 * @method void setSignatureIds(array $SignatureIds) 设置规则ID列表
 * @method array getTypeIds() 获取大类规则ID列表
 * @method void setTypeIds(array $TypeIds) 设置大类规则ID列表
 * @method string getTypeId() 获取大类规则ID
 * @method void setTypeId(string $TypeId) 设置大类规则ID
 * @method integer getMode() 获取0:按照特定规则ID加白, 1:按照规则类型加白
 * @method void setMode(integer $Mode) 设置0:按照特定规则ID加白, 1:按照规则类型加白
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method array getMatchInfo() 获取匹配规则列表
 * @method void setMatchInfo(array $MatchInfo) 设置匹配规则列表
 * @method string getMatchInfoStr() 获取MatchInfo字符串
 * @method void setMatchInfoStr(string $MatchInfoStr) 设置MatchInfo字符串
 */
class UserWhiteRule extends AbstractModel
{
    /**
     * @var integer 白名单的id
     */
    public $WhiteRuleId;

    /**
     * @var string 规则id
     */
    public $SignatureId;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 匹配域
     */
    public $MatchField;

    /**
     * @var string 匹配参数
     */
    public $MatchParams;

    /**
     * @var string 匹配方法
     */
    public $MatchMethod;

    /**
     * @var string 匹配内容
     */
    public $MatchContent;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var array 规则ID列表
     */
    public $SignatureIds;

    /**
     * @var array 大类规则ID列表
     */
    public $TypeIds;

    /**
     * @var string 大类规则ID
     */
    public $TypeId;

    /**
     * @var integer 0:按照特定规则ID加白, 1:按照规则类型加白
     */
    public $Mode;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var array 匹配规则列表
     */
    public $MatchInfo;

    /**
     * @var string MatchInfo字符串
     */
    public $MatchInfoStr;

    /**
     * @param integer $WhiteRuleId 白名单的id
     * @param string $SignatureId 规则id
     * @param integer $Status 状态
     * @param string $MatchField 匹配域
     * @param string $MatchParams 匹配参数
     * @param string $MatchMethod 匹配方法
     * @param string $MatchContent 匹配内容
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param array $SignatureIds 规则ID列表
     * @param array $TypeIds 大类规则ID列表
     * @param string $TypeId 大类规则ID
     * @param integer $Mode 0:按照特定规则ID加白, 1:按照规则类型加白
     * @param string $Name 规则名
     * @param array $MatchInfo 匹配规则列表
     * @param string $MatchInfoStr MatchInfo字符串
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
        if (array_key_exists("WhiteRuleId",$param) and $param["WhiteRuleId"] !== null) {
            $this->WhiteRuleId = $param["WhiteRuleId"];
        }

        if (array_key_exists("SignatureId",$param) and $param["SignatureId"] !== null) {
            $this->SignatureId = $param["SignatureId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MatchField",$param) and $param["MatchField"] !== null) {
            $this->MatchField = $param["MatchField"];
        }

        if (array_key_exists("MatchParams",$param) and $param["MatchParams"] !== null) {
            $this->MatchParams = $param["MatchParams"];
        }

        if (array_key_exists("MatchMethod",$param) and $param["MatchMethod"] !== null) {
            $this->MatchMethod = $param["MatchMethod"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SignatureIds",$param) and $param["SignatureIds"] !== null) {
            $this->SignatureIds = $param["SignatureIds"];
        }

        if (array_key_exists("TypeIds",$param) and $param["TypeIds"] !== null) {
            $this->TypeIds = $param["TypeIds"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MatchInfo",$param) and $param["MatchInfo"] !== null) {
            $this->MatchInfo = [];
            foreach ($param["MatchInfo"] as $key => $value){
                $obj = new UserWhiteRuleItem();
                $obj->deserialize($value);
                array_push($this->MatchInfo, $obj);
            }
        }

        if (array_key_exists("MatchInfoStr",$param) and $param["MatchInfoStr"] !== null) {
            $this->MatchInfoStr = $param["MatchInfoStr"];
        }
    }
}
