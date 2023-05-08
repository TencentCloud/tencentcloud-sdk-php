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
 * 告警字段
 *
 * @method string getAlertTime() 获取标准时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertTime(string $AlertTime) 设置标准时间格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlertId() 获取唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertId(string $AlertId) 设置唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetPrivateIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetPrivateIp(array $AssetPrivateIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlertName() 获取名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertName(string $AlertName) 设置名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取告警级别  0:未知 1:低危 2:中危 3:高危 4:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置告警级别  0:未知 1:低危 2:中危 3:高危 4:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackChain() 获取攻击字段1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackChain(string $AttackChain) 设置攻击字段1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackId() 获取攻击字段2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackId(string $AttackId) 设置攻击字段2
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConcerns() 获取关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcerns(array $Concerns) 设置关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAction() 获取1：已防御，0,2：仅检测(0:告警类 1:拦截类 2:放行类 )
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(integer $Action) 设置1：已防御，0,2：仅检测(0:告警类 1:拦截类 2:放行类 )
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackResult() 获取0/空：未知，1：未成功，2：成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackResult(integer $AttackResult) 设置0/空：未知，1：未成功，2：成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventStatus() 获取//调查状态  0/空：未启用，1：调查中，2：完成调查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventStatus(integer $EventStatus) 设置//调查状态  0/空：未启用，1：调查中，2：完成调查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取//关联事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置//关联事件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取//处置状态  0：未关闭，1：已关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置//处置状态  0：未关闭，1：已关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcernMaliciousCount() 获取恶意实体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcernMaliciousCount(integer $ConcernMaliciousCount) 设置恶意实体
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcernVictimCount() 获取受害者实体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcernVictimCount(integer $ConcernVictimCount) 设置受害者实体
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVictimAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetType(string $VictimAssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubType() 获取告警子类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubType(string $SubType) 设置告警子类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackName() 获取攻击技术名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackName(string $AttackName) 设置攻击技术名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetPublicIp() 获取外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetPublicIp(array $AssetPublicIp) 设置外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackTactic() 获取攻击战术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackTactic(string $AttackTactic) 设置攻击战术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVictimAssetSub() 获取资产子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetSub(string $VictimAssetSub) 设置资产子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVictimAssetVpc() 获取资产vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetVpc(string $VictimAssetVpc) 设置资产vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestamp() 获取时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetGroupName() 获取资产组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetGroupName(array $AssetGroupName) 设置资产组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetProjectName() 获取资产项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetProjectName(string $AssetProjectName) 设置资产项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVictimAssetContent() 获取失陷资产内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetContent(array $VictimAssetContent) 设置失陷资产内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWrongReportStatus() 获取错误报告状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrongReportStatus(integer $WrongReportStatus) 设置错误报告状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWrongReportConditionId() 获取错误报告Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrongReportConditionId(integer $WrongReportConditionId) 设置错误报告Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertType extends AbstractModel
{
    /**
     * @var string 标准时间格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertTime;

    /**
     * @var string 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertId;

    /**
     * @var string 资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var array 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetPrivateIp;

    /**
     * @var string 名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertName;

    /**
     * @var integer 告警级别  0:未知 1:低危 2:中危 3:高危 4:严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 攻击字段1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackChain;

    /**
     * @var string 攻击字段2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackId;

    /**
     * @var array 关注点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Concerns;

    /**
     * @var integer 1：已防御，0,2：仅检测(0:告警类 1:拦截类 2:放行类 )
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var integer 0/空：未知，1：未成功，2：成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackResult;

    /**
     * @var integer //调查状态  0/空：未启用，1：调查中，2：完成调查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventStatus;

    /**
     * @var string //关联事件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var integer //处置状态  0：未关闭，1：已关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 资产名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var integer 恶意实体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcernMaliciousCount;

    /**
     * @var integer 受害者实体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcernVictimCount;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetType;

    /**
     * @var string 告警子类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubType;

    /**
     * @var string 攻击技术名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackName;

    /**
     * @var array 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetPublicIp;

    /**
     * @var string 攻击战术名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackTactic;

    /**
     * @var string 资产子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetSub;

    /**
     * @var string 资产vpc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetVpc;

    /**
     * @var string 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var array 资产组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetGroupName;

    /**
     * @var string 资产项目名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetProjectName;

    /**
     * @var array 失陷资产内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetContent;

    /**
     * @var integer 错误报告状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrongReportStatus;

    /**
     * @var integer 错误报告Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrongReportConditionId;

    /**
     * @param string $AlertTime 标准时间格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlertId 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId 资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetPrivateIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlertName 名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 告警级别  0:未知 1:低危 2:中危 3:高危 4:严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackChain 攻击字段1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackId 攻击字段2
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Concerns 关注点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Action 1：已防御，0,2：仅检测(0:告警类 1:拦截类 2:放行类 )
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackResult 0/空：未知，1：未成功，2：成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventStatus //调查状态  0/空：未启用，1：调查中，2：完成调查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId //关联事件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status //处置状态  0：未关闭，1：已关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConcernMaliciousCount 恶意实体
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConcernVictimCount 受害者实体
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VictimAssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubType 告警子类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackName 攻击技术名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetPublicIp 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackTactic 攻击战术名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VictimAssetSub 资产子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VictimAssetVpc 资产vpc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timestamp 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetGroupName 资产组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetProjectName 资产项目名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VictimAssetContent 失陷资产内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WrongReportStatus 错误报告状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WrongReportConditionId 错误报告Id
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AlertTime",$param) and $param["AlertTime"] !== null) {
            $this->AlertTime = $param["AlertTime"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetPrivateIp",$param) and $param["AssetPrivateIp"] !== null) {
            $this->AssetPrivateIp = $param["AssetPrivateIp"];
        }

        if (array_key_exists("AlertName",$param) and $param["AlertName"] !== null) {
            $this->AlertName = $param["AlertName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AttackChain",$param) and $param["AttackChain"] !== null) {
            $this->AttackChain = $param["AttackChain"];
        }

        if (array_key_exists("AttackId",$param) and $param["AttackId"] !== null) {
            $this->AttackId = $param["AttackId"];
        }

        if (array_key_exists("Concerns",$param) and $param["Concerns"] !== null) {
            $this->Concerns = [];
            foreach ($param["Concerns"] as $key => $value){
                $obj = new ConcernInfo();
                $obj->deserialize($value);
                array_push($this->Concerns, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("AttackResult",$param) and $param["AttackResult"] !== null) {
            $this->AttackResult = $param["AttackResult"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("ConcernMaliciousCount",$param) and $param["ConcernMaliciousCount"] !== null) {
            $this->ConcernMaliciousCount = $param["ConcernMaliciousCount"];
        }

        if (array_key_exists("ConcernVictimCount",$param) and $param["ConcernVictimCount"] !== null) {
            $this->ConcernVictimCount = $param["ConcernVictimCount"];
        }

        if (array_key_exists("VictimAssetType",$param) and $param["VictimAssetType"] !== null) {
            $this->VictimAssetType = $param["VictimAssetType"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("AttackName",$param) and $param["AttackName"] !== null) {
            $this->AttackName = $param["AttackName"];
        }

        if (array_key_exists("AssetPublicIp",$param) and $param["AssetPublicIp"] !== null) {
            $this->AssetPublicIp = $param["AssetPublicIp"];
        }

        if (array_key_exists("AttackTactic",$param) and $param["AttackTactic"] !== null) {
            $this->AttackTactic = $param["AttackTactic"];
        }

        if (array_key_exists("VictimAssetSub",$param) and $param["VictimAssetSub"] !== null) {
            $this->VictimAssetSub = $param["VictimAssetSub"];
        }

        if (array_key_exists("VictimAssetVpc",$param) and $param["VictimAssetVpc"] !== null) {
            $this->VictimAssetVpc = $param["VictimAssetVpc"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("AssetGroupName",$param) and $param["AssetGroupName"] !== null) {
            $this->AssetGroupName = $param["AssetGroupName"];
        }

        if (array_key_exists("AssetProjectName",$param) and $param["AssetProjectName"] !== null) {
            $this->AssetProjectName = $param["AssetProjectName"];
        }

        if (array_key_exists("VictimAssetContent",$param) and $param["VictimAssetContent"] !== null) {
            $this->VictimAssetContent = $param["VictimAssetContent"];
        }

        if (array_key_exists("WrongReportStatus",$param) and $param["WrongReportStatus"] !== null) {
            $this->WrongReportStatus = $param["WrongReportStatus"];
        }

        if (array_key_exists("WrongReportConditionId",$param) and $param["WrongReportConditionId"] !== null) {
            $this->WrongReportConditionId = $param["WrongReportConditionId"];
        }
    }
}
