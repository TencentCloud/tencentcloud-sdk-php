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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警信息
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getId() 获取告警ID
 * @method void setId(string $Id) 设置告警ID
 * @method string getStatus() 获取告警状态
 * @method void setStatus(string $Status) 设置告警状态
 * @method integer getTime() 获取告警时间
 * @method void setTime(integer $Time) 设置告警时间
 * @method string getType() 获取告警业务类型
 * @method void setType(string $Type) 设置告警业务类型
 * @method string getTypeName() 获取告警业务类型名称
 * @method void setTypeName(string $TypeName) 设置告警业务类型名称
 * @method string getSubType() 获取子告警类型
 * @method void setSubType(string $SubType) 设置子告警类型
 * @method string getSubTypeName() 获取子告警类型名称
 * @method void setSubTypeName(string $SubTypeName) 设置子告警类型名称
 * @method integer getLevel() 获取告警级别id
 * @method void setLevel(integer $Level) 设置告警级别id
 * @method string getLevelName() 获取告警级别名称
 * @method void setLevelName(string $LevelName) 设置告警级别名称
 * @method integer getAppId() 获取上报应用appid
 * @method void setAppId(integer $AppId) 设置上报应用appid
 * @method string getWID() 获取设备wid
 * @method void setWID(string $WID) 设置设备wid
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getPosition() 获取空间位置
 * @method void setPosition(string $Position) 设置空间位置
 * @method ReportImg getReportImg() 获取上报图片
 * @method void setReportImg(ReportImg $ReportImg) 设置上报图片
 * @method string getDesc() 获取告警描述
 * @method void setDesc(string $Desc) 设置告警描述
 * @method array getHandlePersonSet() 获取处理人
 * @method void setHandlePersonSet(array $HandlePersonSet) 设置处理人
 * @method array getHandleRecordSet() 获取处理记录
 * @method void setHandleRecordSet(array $HandleRecordSet) 设置处理记录
 * @method string getExtend() 获取扩展信息
 * @method void setExtend(string $Extend) 设置扩展信息
 * @method string getExtendOne() 获取应用扩展字段1
 * @method void setExtendOne(string $ExtendOne) 设置应用扩展字段1
 * @method string getExtendTwo() 获取应用扩展字段2
 * @method void setExtendTwo(string $ExtendTwo) 设置应用扩展字段2
 * @method string getEcho() 获取应用透传字段,有效字段为x-json后的字段
 * @method void setEcho(string $Echo) 设置应用透传字段,有效字段为x-json后的字段
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 告警ID
     */
    public $Id;

    /**
     * @var string 告警状态
     */
    public $Status;

    /**
     * @var integer 告警时间
     */
    public $Time;

    /**
     * @var string 告警业务类型
     */
    public $Type;

    /**
     * @var string 告警业务类型名称
     */
    public $TypeName;

    /**
     * @var string 子告警类型
     */
    public $SubType;

    /**
     * @var string 子告警类型名称
     */
    public $SubTypeName;

    /**
     * @var integer 告警级别id
     */
    public $Level;

    /**
     * @var string 告警级别名称
     */
    public $LevelName;

    /**
     * @var integer 上报应用appid
     */
    public $AppId;

    /**
     * @var string 设备wid
     */
    public $WID;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 空间位置
     */
    public $Position;

    /**
     * @var ReportImg 上报图片
     */
    public $ReportImg;

    /**
     * @var string 告警描述
     */
    public $Desc;

    /**
     * @var array 处理人
     */
    public $HandlePersonSet;

    /**
     * @var array 处理记录
     */
    public $HandleRecordSet;

    /**
     * @var string 扩展信息
     */
    public $Extend;

    /**
     * @var string 应用扩展字段1
     */
    public $ExtendOne;

    /**
     * @var string 应用扩展字段2
     */
    public $ExtendTwo;

    /**
     * @var string 应用透传字段,有效字段为x-json后的字段
     */
    public $Echo;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param string $Id 告警ID
     * @param string $Status 告警状态
     * @param integer $Time 告警时间
     * @param string $Type 告警业务类型
     * @param string $TypeName 告警业务类型名称
     * @param string $SubType 子告警类型
     * @param string $SubTypeName 子告警类型名称
     * @param integer $Level 告警级别id
     * @param string $LevelName 告警级别名称
     * @param integer $AppId 上报应用appid
     * @param string $WID 设备wid
     * @param string $DeviceName 设备名称
     * @param string $Position 空间位置
     * @param ReportImg $ReportImg 上报图片
     * @param string $Desc 告警描述
     * @param array $HandlePersonSet 处理人
     * @param array $HandleRecordSet 处理记录
     * @param string $Extend 扩展信息
     * @param string $ExtendOne 应用扩展字段1
     * @param string $ExtendTwo 应用扩展字段2
     * @param string $Echo 应用透传字段,有效字段为x-json后的字段
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("SubTypeName",$param) and $param["SubTypeName"] !== null) {
            $this->SubTypeName = $param["SubTypeName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("ReportImg",$param) and $param["ReportImg"] !== null) {
            $this->ReportImg = new ReportImg();
            $this->ReportImg->deserialize($param["ReportImg"]);
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("HandlePersonSet",$param) and $param["HandlePersonSet"] !== null) {
            $this->HandlePersonSet = [];
            foreach ($param["HandlePersonSet"] as $key => $value){
                $obj = new HandlerPersonInfo();
                $obj->deserialize($value);
                array_push($this->HandlePersonSet, $obj);
            }
        }

        if (array_key_exists("HandleRecordSet",$param) and $param["HandleRecordSet"] !== null) {
            $this->HandleRecordSet = [];
            foreach ($param["HandleRecordSet"] as $key => $value){
                $obj = new HandleRecordInfo();
                $obj->deserialize($value);
                array_push($this->HandleRecordSet, $obj);
            }
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("ExtendOne",$param) and $param["ExtendOne"] !== null) {
            $this->ExtendOne = $param["ExtendOne"];
        }

        if (array_key_exists("ExtendTwo",$param) and $param["ExtendTwo"] !== null) {
            $this->ExtendTwo = $param["ExtendTwo"];
        }

        if (array_key_exists("Echo",$param) and $param["Echo"] !== null) {
            $this->Echo = $param["Echo"];
        }
    }
}
