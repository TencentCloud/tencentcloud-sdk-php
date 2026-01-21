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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例信息
 *
 * @method string getAndroidInstanceId() 获取实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置实例 ID
 * @method string getAndroidInstanceRegion() 获取实例所在区域
 * @method void setAndroidInstanceRegion(string $AndroidInstanceRegion) 设置实例所在区域
 * @method string getAndroidInstanceZone() 获取实例可用区
 * @method void setAndroidInstanceZone(string $AndroidInstanceZone) 设置实例可用区
 * @method string getState() 获取实例状态：INITIALIZING，NORMAL，PROCESSING
 * @method void setState(string $State) 设置实例状态：INITIALIZING，NORMAL，PROCESSING
 * @method string getAndroidInstanceType() 获取实例规格
 * @method void setAndroidInstanceType(string $AndroidInstanceType) 设置实例规格
 * @method string getAndroidInstanceImageId() 获取实例镜像 ID
 * @method void setAndroidInstanceImageId(string $AndroidInstanceImageId) 设置实例镜像 ID
 * @method integer getWidth() 获取分辨率宽度
 * @method void setWidth(integer $Width) 设置分辨率宽度
 * @method integer getHeight() 获取分辨率高度
 * @method void setHeight(integer $Height) 设置分辨率高度
 * @method string getHostSerialNumber() 获取宿主机 ID
 * @method void setHostSerialNumber(string $HostSerialNumber) 设置宿主机 ID
 * @method string getAndroidInstanceGroupId() 获取分组 ID
 * @method void setAndroidInstanceGroupId(string $AndroidInstanceGroupId) 设置分组 ID
 * @method array getAndroidInstanceLabels() 获取标签列表
 * @method void setAndroidInstanceLabels(array $AndroidInstanceLabels) 设置标签列表
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getPrivateIP() 获取内网 IP
 * @method void setPrivateIP(string $PrivateIP) 设置内网 IP
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getHostServerSerialNumber() 获取机箱 ID
 * @method void setHostServerSerialNumber(string $HostServerSerialNumber) 设置机箱 ID
 * @method string getServiceStatus() 获取服务状态。
IDLE：未连接
ESTABLISHED：连接中
 * @method void setServiceStatus(string $ServiceStatus) 设置服务状态。
IDLE：未连接
ESTABLISHED：连接中
 */
class AndroidInstance extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 实例所在区域
     */
    public $AndroidInstanceRegion;

    /**
     * @var string 实例可用区
     */
    public $AndroidInstanceZone;

    /**
     * @var string 实例状态：INITIALIZING，NORMAL，PROCESSING
     */
    public $State;

    /**
     * @var string 实例规格
     */
    public $AndroidInstanceType;

    /**
     * @var string 实例镜像 ID
     */
    public $AndroidInstanceImageId;

    /**
     * @var integer 分辨率宽度
     */
    public $Width;

    /**
     * @var integer 分辨率高度
     */
    public $Height;

    /**
     * @var string 宿主机 ID
     */
    public $HostSerialNumber;

    /**
     * @var string 分组 ID
     */
    public $AndroidInstanceGroupId;

    /**
     * @var array 标签列表
     */
    public $AndroidInstanceLabels;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 内网 IP
     */
    public $PrivateIP;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 机箱 ID
     */
    public $HostServerSerialNumber;

    /**
     * @var string 服务状态。
IDLE：未连接
ESTABLISHED：连接中
     */
    public $ServiceStatus;

    /**
     * @param string $AndroidInstanceId 实例 ID
     * @param string $AndroidInstanceRegion 实例所在区域
     * @param string $AndroidInstanceZone 实例可用区
     * @param string $State 实例状态：INITIALIZING，NORMAL，PROCESSING
     * @param string $AndroidInstanceType 实例规格
     * @param string $AndroidInstanceImageId 实例镜像 ID
     * @param integer $Width 分辨率宽度
     * @param integer $Height 分辨率高度
     * @param string $HostSerialNumber 宿主机 ID
     * @param string $AndroidInstanceGroupId 分组 ID
     * @param array $AndroidInstanceLabels 标签列表
     * @param string $Name 名称
     * @param string $UserId 用户ID
     * @param string $PrivateIP 内网 IP
     * @param string $CreateTime 创建时间
     * @param string $HostServerSerialNumber 机箱 ID
     * @param string $ServiceStatus 服务状态。
IDLE：未连接
ESTABLISHED：连接中
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
        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("AndroidInstanceRegion",$param) and $param["AndroidInstanceRegion"] !== null) {
            $this->AndroidInstanceRegion = $param["AndroidInstanceRegion"];
        }

        if (array_key_exists("AndroidInstanceZone",$param) and $param["AndroidInstanceZone"] !== null) {
            $this->AndroidInstanceZone = $param["AndroidInstanceZone"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AndroidInstanceType",$param) and $param["AndroidInstanceType"] !== null) {
            $this->AndroidInstanceType = $param["AndroidInstanceType"];
        }

        if (array_key_exists("AndroidInstanceImageId",$param) and $param["AndroidInstanceImageId"] !== null) {
            $this->AndroidInstanceImageId = $param["AndroidInstanceImageId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("HostSerialNumber",$param) and $param["HostSerialNumber"] !== null) {
            $this->HostSerialNumber = $param["HostSerialNumber"];
        }

        if (array_key_exists("AndroidInstanceGroupId",$param) and $param["AndroidInstanceGroupId"] !== null) {
            $this->AndroidInstanceGroupId = $param["AndroidInstanceGroupId"];
        }

        if (array_key_exists("AndroidInstanceLabels",$param) and $param["AndroidInstanceLabels"] !== null) {
            $this->AndroidInstanceLabels = [];
            foreach ($param["AndroidInstanceLabels"] as $key => $value){
                $obj = new AndroidInstanceLabel();
                $obj->deserialize($value);
                array_push($this->AndroidInstanceLabels, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("HostServerSerialNumber",$param) and $param["HostServerSerialNumber"] !== null) {
            $this->HostServerSerialNumber = $param["HostServerSerialNumber"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }
    }
}
