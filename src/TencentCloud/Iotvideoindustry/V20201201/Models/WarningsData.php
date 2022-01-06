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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警列表出参
 *
 * @method integer getId() 获取唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarnChannel() 获取告警通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnChannel(string $WarnChannel) 设置告警通道
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarnLevel() 获取告警级别 1: "一级警情", 2: "二级警情", 3: "三级警情", 4: "四级警情",
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnLevel(integer $WarnLevel) 设置告警级别 1: "一级警情", 2: "二级警情", 3: "三级警情", 4: "四级警情",
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarnLevelName() 获取告警级别名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnLevelName(string $WarnLevelName) 设置告警级别名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarnMode() 获取告警方式 2 设备报警 5 视频报警 6 设备故障报警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnMode(integer $WarnMode) 设置告警方式 2 设备报警 5 视频报警 6 设备故障报警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarnModeName() 获取告警方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnModeName(string $WarnModeName) 设置告警方式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarnType() 获取告警类型  2: {
			Name: "设备报警",
			WarnType: map[int]string{
				1: "视频丢失报警",
				2: "设备防拆报警",
				3: "存储设备磁盘满报警",
				4: "设备高温报警",
				5: "设备低温报警",
			},
		},
		5: {
			Name: "视频报警",
			WarnType: map[int]string{
				1:  "人工视频报警",
				2:  "运动目标检测报警",
				3:  "遗留物检测报警",
				4:  "物体移除检测报警",
				5:  "绊线检测报警",
				6:  "入侵检测报警",
				7:  "逆行检测报警",
				8:  "徘徊检测报警",
				9:  "流量统计报警",
				10: "密度检测报警",
				11: "视频异常检测报警",
				12: "快速移动报警",
			},
		},
		6: {
			Name: "设备故障报警",
			WarnType: map[int]string{
				1: "存储设备磁盘故障报警",
				2: "存储设备风扇故障报警",
			},
		}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnType(integer $WarnType) 设置告警类型  2: {
			Name: "设备报警",
			WarnType: map[int]string{
				1: "视频丢失报警",
				2: "设备防拆报警",
				3: "存储设备磁盘满报警",
				4: "设备高温报警",
				5: "设备低温报警",
			},
		},
		5: {
			Name: "视频报警",
			WarnType: map[int]string{
				1:  "人工视频报警",
				2:  "运动目标检测报警",
				3:  "遗留物检测报警",
				4:  "物体移除检测报警",
				5:  "绊线检测报警",
				6:  "入侵检测报警",
				7:  "逆行检测报警",
				8:  "徘徊检测报警",
				9:  "流量统计报警",
				10: "密度检测报警",
				11: "视频异常检测报警",
				12: "快速移动报警",
			},
		},
		6: {
			Name: "设备故障报警",
			WarnType: map[int]string{
				1: "存储设备磁盘故障报警",
				2: "存储设备风扇故障报警",
			},
		}
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDel() 获取是否删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDel(integer $Del) 设置是否删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class WarningsData extends AbstractModel
{
    /**
     * @var integer 唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 告警通道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnChannel;

    /**
     * @var integer 告警级别 1: "一级警情", 2: "二级警情", 3: "三级警情", 4: "四级警情",
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnLevel;

    /**
     * @var string 告警级别名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnLevelName;

    /**
     * @var integer 告警方式 2 设备报警 5 视频报警 6 设备故障报警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnMode;

    /**
     * @var string 告警方式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnModeName;

    /**
     * @var integer 告警类型  2: {
			Name: "设备报警",
			WarnType: map[int]string{
				1: "视频丢失报警",
				2: "设备防拆报警",
				3: "存储设备磁盘满报警",
				4: "设备高温报警",
				5: "设备低温报警",
			},
		},
		5: {
			Name: "视频报警",
			WarnType: map[int]string{
				1:  "人工视频报警",
				2:  "运动目标检测报警",
				3:  "遗留物检测报警",
				4:  "物体移除检测报警",
				5:  "绊线检测报警",
				6:  "入侵检测报警",
				7:  "逆行检测报警",
				8:  "徘徊检测报警",
				9:  "流量统计报警",
				10: "密度检测报警",
				11: "视频异常检测报警",
				12: "快速移动报警",
			},
		},
		6: {
			Name: "设备故障报警",
			WarnType: map[int]string{
				1: "存储设备磁盘故障报警",
				2: "存储设备风扇故障报警",
			},
		}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnType;

    /**
     * @var integer 是否删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Del;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Id 唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarnChannel 告警通道
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarnLevel 告警级别 1: "一级警情", 2: "二级警情", 3: "三级警情", 4: "四级警情",
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarnLevelName 告警级别名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarnMode 告警方式 2 设备报警 5 视频报警 6 设备故障报警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarnModeName 告警方式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarnType 告警类型  2: {
			Name: "设备报警",
			WarnType: map[int]string{
				1: "视频丢失报警",
				2: "设备防拆报警",
				3: "存储设备磁盘满报警",
				4: "设备高温报警",
				5: "设备低温报警",
			},
		},
		5: {
			Name: "视频报警",
			WarnType: map[int]string{
				1:  "人工视频报警",
				2:  "运动目标检测报警",
				3:  "遗留物检测报警",
				4:  "物体移除检测报警",
				5:  "绊线检测报警",
				6:  "入侵检测报警",
				7:  "逆行检测报警",
				8:  "徘徊检测报警",
				9:  "流量统计报警",
				10: "密度检测报警",
				11: "视频异常检测报警",
				12: "快速移动报警",
			},
		},
		6: {
			Name: "设备故障报警",
			WarnType: map[int]string{
				1: "存储设备磁盘故障报警",
				2: "存储设备风扇故障报警",
			},
		}
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Del 是否删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("WarnChannel",$param) and $param["WarnChannel"] !== null) {
            $this->WarnChannel = $param["WarnChannel"];
        }

        if (array_key_exists("WarnLevel",$param) and $param["WarnLevel"] !== null) {
            $this->WarnLevel = $param["WarnLevel"];
        }

        if (array_key_exists("WarnLevelName",$param) and $param["WarnLevelName"] !== null) {
            $this->WarnLevelName = $param["WarnLevelName"];
        }

        if (array_key_exists("WarnMode",$param) and $param["WarnMode"] !== null) {
            $this->WarnMode = $param["WarnMode"];
        }

        if (array_key_exists("WarnModeName",$param) and $param["WarnModeName"] !== null) {
            $this->WarnModeName = $param["WarnModeName"];
        }

        if (array_key_exists("WarnType",$param) and $param["WarnType"] !== null) {
            $this->WarnType = $param["WarnType"];
        }

        if (array_key_exists("Del",$param) and $param["Del"] !== null) {
            $this->Del = $param["Del"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
