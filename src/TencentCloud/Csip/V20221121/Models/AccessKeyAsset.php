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
 * 访问密钥资产信息
 *
 * @method integer getID() 获取AK 的id
 * @method void setID(integer $ID) 设置AK 的id
 * @method string getName() 获取AK名称
 * @method void setName(string $Name) 设置AK名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getAppID() 获取账号所属APPID
 * @method void setAppID(integer $AppID) 设置账号所属APPID
 * @method string getUin() 获取所属主账号Uin
 * @method void setUin(string $Uin) 设置所属主账号Uin
 * @method string getNickname() 获取主账号昵称
 * @method void setNickname(string $Nickname) 设置主账号昵称
 * @method string getSubUin() 获取所属子账号Uin
 * @method void setSubUin(string $SubUin) 设置所属子账号Uin
 * @method string getSubNickname() 获取所属子账号昵称
 * @method void setSubNickname(string $SubNickname) 设置所属子账号昵称
 * @method integer getType() 获取0 主账号AK
1 子账号AK
2 临时密钥
 * @method void setType(integer $Type) 设置0 主账号AK
1 子账号AK
2 临时密钥
 * @method integer getAdvice() 获取安全建议 枚举
0 正常
1 立即处理
2 建议加固
 * @method void setAdvice(integer $Advice) 设置安全建议 枚举
0 正常
1 立即处理
2 建议加固
 * @method array getAccessKeyAlarmList() 获取告警信息列表
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) 设置告警信息列表
 * @method array getAccessKeyRiskList() 获取风险信息列表
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) 设置风险信息列表
 * @method integer getIPCount() 获取源IP数量
 * @method void setIPCount(integer $IPCount) 设置源IP数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getLastAccessTime() 获取最近访问时间
 * @method void setLastAccessTime(string $LastAccessTime) 设置最近访问时间
 * @method integer getStatus() 获取AK状态 
0:禁用
1:已启用
2:已删除(已在cam侧删除，安全中心仍然存留之前的记录)
 * @method void setStatus(integer $Status) 设置AK状态 
0:禁用
1:已启用
2:已删除(已在cam侧删除，安全中心仍然存留之前的记录)
 * @method integer getCheckStatus() 获取0 表示已检测
1 表示检测中
 * @method void setCheckStatus(integer $CheckStatus) 设置0 表示已检测
1 表示检测中
 */
class AccessKeyAsset extends AbstractModel
{
    /**
     * @var integer AK 的id
     */
    public $ID;

    /**
     * @var string AK名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 账号所属APPID
     */
    public $AppID;

    /**
     * @var string 所属主账号Uin
     */
    public $Uin;

    /**
     * @var string 主账号昵称
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
     * @var integer 0 主账号AK
1 子账号AK
2 临时密钥
     */
    public $Type;

    /**
     * @var integer 安全建议 枚举
0 正常
1 立即处理
2 建议加固
     */
    public $Advice;

    /**
     * @var array 告警信息列表
     */
    public $AccessKeyAlarmList;

    /**
     * @var array 风险信息列表
     */
    public $AccessKeyRiskList;

    /**
     * @var integer 源IP数量
     */
    public $IPCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最近访问时间
     */
    public $LastAccessTime;

    /**
     * @var integer AK状态 
0:禁用
1:已启用
2:已删除(已在cam侧删除，安全中心仍然存留之前的记录)
     */
    public $Status;

    /**
     * @var integer 0 表示已检测
1 表示检测中
     */
    public $CheckStatus;

    /**
     * @param integer $ID AK 的id
     * @param string $Name AK名称
     * @param string $Remark 备注
     * @param integer $AppID 账号所属APPID
     * @param string $Uin 所属主账号Uin
     * @param string $Nickname 主账号昵称
     * @param string $SubUin 所属子账号Uin
     * @param string $SubNickname 所属子账号昵称
     * @param integer $Type 0 主账号AK
1 子账号AK
2 临时密钥
     * @param integer $Advice 安全建议 枚举
0 正常
1 立即处理
2 建议加固
     * @param array $AccessKeyAlarmList 告警信息列表
     * @param array $AccessKeyRiskList 风险信息列表
     * @param integer $IPCount 源IP数量
     * @param string $CreateTime 创建时间
     * @param string $LastAccessTime 最近访问时间
     * @param integer $Status AK状态 
0:禁用
1:已启用
2:已删除(已在cam侧删除，安全中心仍然存留之前的记录)
     * @param integer $CheckStatus 0 表示已检测
1 表示检测中
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
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

        if (array_key_exists("Advice",$param) and $param["Advice"] !== null) {
            $this->Advice = $param["Advice"];
        }

        if (array_key_exists("AccessKeyAlarmList",$param) and $param["AccessKeyAlarmList"] !== null) {
            $this->AccessKeyAlarmList = [];
            foreach ($param["AccessKeyAlarmList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmList, $obj);
            }
        }

        if (array_key_exists("AccessKeyRiskList",$param) and $param["AccessKeyRiskList"] !== null) {
            $this->AccessKeyRiskList = [];
            foreach ($param["AccessKeyRiskList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyRiskList, $obj);
            }
        }

        if (array_key_exists("IPCount",$param) and $param["IPCount"] !== null) {
            $this->IPCount = $param["IPCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }
    }
}
