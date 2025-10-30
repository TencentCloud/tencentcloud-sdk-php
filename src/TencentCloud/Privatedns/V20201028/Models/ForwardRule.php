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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发规则详情
 *
 * @method string getDomain() 获取私有域名
 * @method void setDomain(string $Domain) 设置私有域名
 * @method string getRuleName() 获取转发规则名称
 * @method void setRuleName(string $RuleName) 设置转发规则名称
 * @method string getRuleId() 获取规则id
 * @method void setRuleId(string $RuleId) 设置规则id
 * @method string getRuleType() 获取转发规则类型：云上到云下DOWN、云下到云上DOWN
 * @method void setRuleType(string $RuleType) 设置转发规则类型：云上到云下DOWN、云下到云上DOWN
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getEndPointName() 获取终端节点名称
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称
 * @method string getEndPointId() 获取终端节点ID
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID
 * @method array getForwardAddress() 获取转发地址
 * @method void setForwardAddress(array $ForwardAddress) 设置转发地址
 * @method array getVpcSet() 获取私有域绑定的vpc列表
 * @method void setVpcSet(array $VpcSet) 设置私有域绑定的vpc列表
 * @method string getZoneId() 获取绑定的私有域ID
 * @method void setZoneId(string $ZoneId) 设置绑定的私有域ID
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class ForwardRule extends AbstractModel
{
    /**
     * @var string 私有域名
     */
    public $Domain;

    /**
     * @var string 转发规则名称
     */
    public $RuleName;

    /**
     * @var string 规则id
     */
    public $RuleId;

    /**
     * @var string 转发规则类型：云上到云下DOWN、云下到云上DOWN
     */
    public $RuleType;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 终端节点名称
     */
    public $EndPointName;

    /**
     * @var string 终端节点ID
     */
    public $EndPointId;

    /**
     * @var array 转发地址
     */
    public $ForwardAddress;

    /**
     * @var array 私有域绑定的vpc列表
     */
    public $VpcSet;

    /**
     * @var string 绑定的私有域ID
     */
    public $ZoneId;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $Domain 私有域名
     * @param string $RuleName 转发规则名称
     * @param string $RuleId 规则id
     * @param string $RuleType 转发规则类型：云上到云下DOWN、云下到云上DOWN
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $EndPointName 终端节点名称
     * @param string $EndPointId 终端节点ID
     * @param array $ForwardAddress 转发地址
     * @param array $VpcSet 私有域绑定的vpc列表
     * @param string $ZoneId 绑定的私有域ID
     * @param array $Tags 标签
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
