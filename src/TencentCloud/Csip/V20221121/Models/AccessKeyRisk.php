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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问密钥风险记录
 *
 * @method string getName() 获取风险名称
 * @method void setName(string $Name) 设置风险名称
 * @method integer getLevel() 获取风险等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
 * @method void setLevel(integer $Level) 设置风险等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
 * @method integer getID() 获取风险记录ID
 * @method void setID(integer $ID) 设置风险记录ID
 * @method integer getRiskRuleID() 获取风险规则ID
 * @method void setRiskRuleID(integer $RiskRuleID) 设置风险规则ID
 * @method integer getRiskType() 获取风险类型
0-配置风险
 * @method void setRiskType(integer $RiskType) 设置风险类型
0-配置风险
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method integer getAccessKeyID() 获取访问密钥ID
 * @method void setAccessKeyID(integer $AccessKeyID) 设置访问密钥ID
 * @method string getAccessKeyRemark() 获取访问密钥备注
 * @method void setAccessKeyRemark(string $AccessKeyRemark) 设置访问密钥备注
 * @method string getRiskTime() 获取风险检出时间
 * @method void setRiskTime(string $RiskTime) 设置风险检出时间
 * @method integer getStatus() 获取风险状态
0-未处理 2-已忽略 3-已收敛
 * @method void setStatus(integer $Status) 设置风险状态
0-未处理 2-已忽略 3-已收敛
 * @method array getTag() 获取风险标签
 * @method void setTag(array $Tag) 设置风险标签
 * @method string getEvidence() 获取风险证据
 * @method void setEvidence(string $Evidence) 设置风险证据
 * @method string getDescription() 获取风险描述
 * @method void setDescription(string $Description) 设置风险描述
 * @method string getUin() 获取所属主账号Uin
 * @method void setUin(string $Uin) 设置所属主账号Uin
 * @method string getNickname() 获取所属主账号昵称
 * @method void setNickname(string $Nickname) 设置所属主账号昵称
 * @method string getSubUin() 获取所属子账号Uin
 * @method void setSubUin(string $SubUin) 设置所属子账号Uin
 * @method string getSubNickname() 获取所属子账号昵称
 * @method void setSubNickname(string $SubNickname) 设置所属子账号昵称
 * @method integer getType() 获取账号类型
0 主账号AK 1子账号AK
2 临时密钥
 * @method void setType(integer $Type) 设置账号类型
0 主账号AK 1子账号AK
2 临时密钥
 * @method integer getCheckStatus() 获取检测状态
0表示 已检测
1表示 检测中
 * @method void setCheckStatus(integer $CheckStatus) 设置检测状态
0表示 已检测
1表示 检测中
 * @method integer getAppID() 获取所属appid
 * @method void setAppID(integer $AppID) 设置所属appid
 * @method string getQueryParam() 获取对应风险的查询参数
 * @method void setQueryParam(string $QueryParam) 设置对应风险的查询参数
 * @method integer getCloudType() 获取云类型 0-腾讯云 4-阿里云
 * @method void setCloudType(integer $CloudType) 设置云类型 0-腾讯云 4-阿里云
 * @method array getRelatedAK() 获取相关的AK列表，包含AK名和AK备注
 * @method void setRelatedAK(array $RelatedAK) 设置相关的AK列表，包含AK名和AK备注
 */
class AccessKeyRisk extends AbstractModel
{
    /**
     * @var string 风险名称
     */
    public $Name;

    /**
     * @var integer 风险等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
     */
    public $Level;

    /**
     * @var integer 风险记录ID
     */
    public $ID;

    /**
     * @var integer 风险规则ID
     */
    public $RiskRuleID;

    /**
     * @var integer 风险类型
0-配置风险
     */
    public $RiskType;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var integer 访问密钥ID
     */
    public $AccessKeyID;

    /**
     * @var string 访问密钥备注
     */
    public $AccessKeyRemark;

    /**
     * @var string 风险检出时间
     */
    public $RiskTime;

    /**
     * @var integer 风险状态
0-未处理 2-已忽略 3-已收敛
     */
    public $Status;

    /**
     * @var array 风险标签
     */
    public $Tag;

    /**
     * @var string 风险证据
     */
    public $Evidence;

    /**
     * @var string 风险描述
     */
    public $Description;

    /**
     * @var string 所属主账号Uin
     */
    public $Uin;

    /**
     * @var string 所属主账号昵称
     */
    public $Nickname;

    /**
     * @var string 所属子账号Uin
     */
    public $SubUin;

    /**
     * @var string 所属子账号昵称
     */
    public $SubNickname;

    /**
     * @var integer 账号类型
0 主账号AK 1子账号AK
2 临时密钥
     */
    public $Type;

    /**
     * @var integer 检测状态
0表示 已检测
1表示 检测中
     */
    public $CheckStatus;

    /**
     * @var integer 所属appid
     */
    public $AppID;

    /**
     * @var string 对应风险的查询参数
     */
    public $QueryParam;

    /**
     * @var integer 云类型 0-腾讯云 4-阿里云
     */
    public $CloudType;

    /**
     * @var array 相关的AK列表，包含AK名和AK备注
     */
    public $RelatedAK;

    /**
     * @param string $Name 风险名称
     * @param integer $Level 风险等级
0-无效 1-提示 2-低危 3-中危 4-高危 5-严重
     * @param integer $ID 风险记录ID
     * @param integer $RiskRuleID 风险规则ID
     * @param integer $RiskType 风险类型
0-配置风险
     * @param string $AccessKey 访问密钥
     * @param integer $AccessKeyID 访问密钥ID
     * @param string $AccessKeyRemark 访问密钥备注
     * @param string $RiskTime 风险检出时间
     * @param integer $Status 风险状态
0-未处理 2-已忽略 3-已收敛
     * @param array $Tag 风险标签
     * @param string $Evidence 风险证据
     * @param string $Description 风险描述
     * @param string $Uin 所属主账号Uin
     * @param string $Nickname 所属主账号昵称
     * @param string $SubUin 所属子账号Uin
     * @param string $SubNickname 所属子账号昵称
     * @param integer $Type 账号类型
0 主账号AK 1子账号AK
2 临时密钥
     * @param integer $CheckStatus 检测状态
0表示 已检测
1表示 检测中
     * @param integer $AppID 所属appid
     * @param string $QueryParam 对应风险的查询参数
     * @param integer $CloudType 云类型 0-腾讯云 4-阿里云
     * @param array $RelatedAK 相关的AK列表，包含AK名和AK备注
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RiskRuleID",$param) and $param["RiskRuleID"] !== null) {
            $this->RiskRuleID = $param["RiskRuleID"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("RiskTime",$param) and $param["RiskTime"] !== null) {
            $this->RiskTime = $param["RiskTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("QueryParam",$param) and $param["QueryParam"] !== null) {
            $this->QueryParam = $param["QueryParam"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("RelatedAK",$param) and $param["RelatedAK"] !== null) {
            $this->RelatedAK = [];
            foreach ($param["RelatedAK"] as $key => $value){
                $obj = new AKInfo();
                $obj->deserialize($value);
                array_push($this->RelatedAK, $obj);
            }
        }
    }
}
