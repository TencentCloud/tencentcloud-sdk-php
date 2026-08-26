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
 * 访问密钥告警规则白名单
 *
 * @method integer getID() 获取白名单ID
 * @method void setID(integer $ID) 设置白名单ID
 * @method string getName() 获取白名单策略名称
 * @method void setName(string $Name) 设置白名单策略名称
 * @method array getAKList() 获取ak加白列表
 * @method void setAKList(array $AKList) 设置ak加白列表
 * @method array getIPList() 获取ip加白列表
 * @method void setIPList(array $IPList) 设置ip加白列表
 * @method array getIPTypeList() 获取ip类型列表 IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注) 4:局域网（未备注）5:局域网（已备注）
 * @method void setIPTypeList(array $IPTypeList) 设置ip类型列表 IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注) 4:局域网（未备注）5:局域网（已备注）
 * @method array getActionList() 获取接口加白列表
 * @method void setActionList(array $ActionList) 设置接口加白列表
 * @method integer getCallType() 获取调用方式加白
0 全部调用方式
1 控制台
2 API
-1 不存在
 * @method void setCallType(integer $CallType) 设置调用方式加白
0 全部调用方式
1 控制台
2 API
-1 不存在
 * @method array getErrorCodeList() 获取错误码白名单（其他错误码待补充）
0 成功

 * @method void setErrorCodeList(array $ErrorCodeList) 设置错误码白名单（其他错误码待补充）
0 成功

 * @method string getRemark() 获取策略内容/描述
 * @method void setRemark(string $Remark) 设置策略内容/描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getAkImportType() 获取ak输入类型 
0:从现有选择
1:手动输入
2:临时密钥
3:长期密钥
4:全部密钥
-1:无
 * @method void setAkImportType(integer $AkImportType) 设置ak输入类型 
0:从现有选择
1:手动输入
2:临时密钥
3:长期密钥
4:全部密钥
-1:无
 * @method integer getAppID() 获取主账号AppID
 * @method void setAppID(integer $AppID) 设置主账号AppID
 * @method string getUin() 获取所属主账号uin
 * @method void setUin(string $Uin) 设置所属主账号uin
 * @method string getNickname() 获取所属主账号 昵称
 * @method void setNickname(string $Nickname) 设置所属主账号 昵称
 * @method boolean getNeedDealPastAlarm() 获取是否处理过去的告警
 * @method void setNeedDealPastAlarm(boolean $NeedDealPastAlarm) 设置是否处理过去的告警
 * @method integer getDealStatus() 获取处理状态
0 处理完成
1 正在处理
 * @method void setDealStatus(integer $DealStatus) 设置处理状态
0 处理完成
1 正在处理
 * @method integer getActionType() 获取接口选择
0:自定义输入
1:产品+接口形式交互选择
2:全部接口
 * @method void setActionType(integer $ActionType) 设置接口选择
0:自定义输入
1:产品+接口形式交互选择
2:全部接口
 * @method array getAlarmPolicyID() 获取绑定策略id列表，为空代表全局生效
 * @method void setAlarmPolicyID(array $AlarmPolicyID) 设置绑定策略id列表，为空代表全局生效
 */
class AccessKeyWhiteList extends AbstractModel
{
    /**
     * @var integer 白名单ID
     */
    public $ID;

    /**
     * @var string 白名单策略名称
     */
    public $Name;

    /**
     * @var array ak加白列表
     */
    public $AKList;

    /**
     * @var array ip加白列表
     */
    public $IPList;

    /**
     * @var array ip类型列表 IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注) 4:局域网（未备注）5:局域网（已备注）
     */
    public $IPTypeList;

    /**
     * @var array 接口加白列表
     */
    public $ActionList;

    /**
     * @var integer 调用方式加白
0 全部调用方式
1 控制台
2 API
-1 不存在
     */
    public $CallType;

    /**
     * @var array 错误码白名单（其他错误码待补充）
0 成功

     */
    public $ErrorCodeList;

    /**
     * @var string 策略内容/描述
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer ak输入类型 
0:从现有选择
1:手动输入
2:临时密钥
3:长期密钥
4:全部密钥
-1:无
     */
    public $AkImportType;

    /**
     * @var integer 主账号AppID
     */
    public $AppID;

    /**
     * @var string 所属主账号uin
     */
    public $Uin;

    /**
     * @var string 所属主账号 昵称
     */
    public $Nickname;

    /**
     * @var boolean 是否处理过去的告警
     */
    public $NeedDealPastAlarm;

    /**
     * @var integer 处理状态
0 处理完成
1 正在处理
     */
    public $DealStatus;

    /**
     * @var integer 接口选择
0:自定义输入
1:产品+接口形式交互选择
2:全部接口
     */
    public $ActionType;

    /**
     * @var array 绑定策略id列表，为空代表全局生效
     */
    public $AlarmPolicyID;

    /**
     * @param integer $ID 白名单ID
     * @param string $Name 白名单策略名称
     * @param array $AKList ak加白列表
     * @param array $IPList ip加白列表
     * @param array $IPTypeList ip类型列表 IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注) 4:局域网（未备注）5:局域网（已备注）
     * @param array $ActionList 接口加白列表
     * @param integer $CallType 调用方式加白
0 全部调用方式
1 控制台
2 API
-1 不存在
     * @param array $ErrorCodeList 错误码白名单（其他错误码待补充）
0 成功

     * @param string $Remark 策略内容/描述
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $AkImportType ak输入类型 
0:从现有选择
1:手动输入
2:临时密钥
3:长期密钥
4:全部密钥
-1:无
     * @param integer $AppID 主账号AppID
     * @param string $Uin 所属主账号uin
     * @param string $Nickname 所属主账号 昵称
     * @param boolean $NeedDealPastAlarm 是否处理过去的告警
     * @param integer $DealStatus 处理状态
0 处理完成
1 正在处理
     * @param integer $ActionType 接口选择
0:自定义输入
1:产品+接口形式交互选择
2:全部接口
     * @param array $AlarmPolicyID 绑定策略id列表，为空代表全局生效
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

        if (array_key_exists("AKList",$param) and $param["AKList"] !== null) {
            $this->AKList = $param["AKList"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }

        if (array_key_exists("IPTypeList",$param) and $param["IPTypeList"] !== null) {
            $this->IPTypeList = $param["IPTypeList"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("ErrorCodeList",$param) and $param["ErrorCodeList"] !== null) {
            $this->ErrorCodeList = $param["ErrorCodeList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AkImportType",$param) and $param["AkImportType"] !== null) {
            $this->AkImportType = $param["AkImportType"];
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

        if (array_key_exists("NeedDealPastAlarm",$param) and $param["NeedDealPastAlarm"] !== null) {
            $this->NeedDealPastAlarm = $param["NeedDealPastAlarm"];
        }

        if (array_key_exists("DealStatus",$param) and $param["DealStatus"] !== null) {
            $this->DealStatus = $param["DealStatus"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("AlarmPolicyID",$param) and $param["AlarmPolicyID"] !== null) {
            $this->AlarmPolicyID = $param["AlarmPolicyID"];
        }
    }
}
