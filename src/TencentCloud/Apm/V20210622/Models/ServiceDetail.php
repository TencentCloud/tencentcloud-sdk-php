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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用详细信息
 *
 * @method string getServiceID() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceKey() 获取业务系统ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置业务系统ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUIN() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUIN(string $CreateUIN) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDescription() 获取应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDescription(string $ServiceDescription) 设置应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取业务系统名称
 * @method void setInstanceName(string $InstanceName) 设置业务系统名称
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var string 业务系统ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var integer 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUIN;

    /**
     * @var string 应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDescription;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 业务系统名称
     */
    public $InstanceName;

    /**
     * @param string $ServiceID 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceKey 业务系统ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUIN 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 应用名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDescription 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 业务系统名称
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CreateUIN",$param) and $param["CreateUIN"] !== null) {
            $this->CreateUIN = $param["CreateUIN"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
