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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘信息
 *
 * @method string getDashboardId() 获取仪表盘id
 * @method void setDashboardId(string $DashboardId) 设置仪表盘id
 * @method string getDashboardName() 获取仪表盘名字
 * @method void setDashboardName(string $DashboardName) 设置仪表盘名字
 * @method string getData() 获取仪表盘数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(string $Data) 设置仪表盘数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建仪表盘的时间
 * @method void setCreateTime(string $CreateTime) 设置创建仪表盘的时间
 * @method integer getAssumerUin() 获取AssumerUin非空则表示创建该日志主题的服务方Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssumerUin(integer $AssumerUin) 设置AssumerUin非空则表示创建该日志主题的服务方Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取RoleName非空则表示创建该日志主题的服务方使用的角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置RoleName非空则表示创建该日志主题的服务方使用的角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssumerName() 获取AssumerName非空则表示创建该日志主题的服务方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssumerName(string $AssumerName) 设置AssumerName非空则表示创建该日志主题的服务方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDashboardRegion() 获取仪表盘所在地域： 为了兼容老的地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardRegion(string $DashboardRegion) 设置仪表盘所在地域： 为了兼容老的地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取修改仪表盘的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置修改仪表盘的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDashboardTopicInfos() 获取仪表盘对应的topic相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardTopicInfos(array $DashboardTopicInfos) 设置仪表盘对应的topic相关信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DashboardInfo extends AbstractModel
{
    /**
     * @var string 仪表盘id
     */
    public $DashboardId;

    /**
     * @var string 仪表盘名字
     */
    public $DashboardName;

    /**
     * @var string 仪表盘数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 创建仪表盘的时间
     */
    public $CreateTime;

    /**
     * @var integer AssumerUin非空则表示创建该日志主题的服务方Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssumerUin;

    /**
     * @var string RoleName非空则表示创建该日志主题的服务方使用的角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var string AssumerName非空则表示创建该日志主题的服务方名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssumerName;

    /**
     * @var array 日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 仪表盘所在地域： 为了兼容老的地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardRegion;

    /**
     * @var string 修改仪表盘的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 仪表盘对应的topic相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardTopicInfos;

    /**
     * @param string $DashboardId 仪表盘id
     * @param string $DashboardName 仪表盘名字
     * @param string $Data 仪表盘数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建仪表盘的时间
     * @param integer $AssumerUin AssumerUin非空则表示创建该日志主题的服务方Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName RoleName非空则表示创建该日志主题的服务方使用的角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssumerName AssumerName非空则表示创建该日志主题的服务方名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DashboardRegion 仪表盘所在地域： 为了兼容老的地域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 修改仪表盘的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DashboardTopicInfos 仪表盘对应的topic相关信息
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("DashboardName",$param) and $param["DashboardName"] !== null) {
            $this->DashboardName = $param["DashboardName"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssumerUin",$param) and $param["AssumerUin"] !== null) {
            $this->AssumerUin = $param["AssumerUin"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DashboardRegion",$param) and $param["DashboardRegion"] !== null) {
            $this->DashboardRegion = $param["DashboardRegion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DashboardTopicInfos",$param) and $param["DashboardTopicInfos"] !== null) {
            $this->DashboardTopicInfos = [];
            foreach ($param["DashboardTopicInfos"] as $key => $value){
                $obj = new DashboardTopicInfo();
                $obj->deserialize($value);
                array_push($this->DashboardTopicInfos, $obj);
            }
        }
    }
}
