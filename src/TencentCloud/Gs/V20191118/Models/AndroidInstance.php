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
 * @method string getAndroidInstanceId() 获取<p>实例 ID</p>
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置<p>实例 ID</p>
 * @method string getAndroidInstanceRegion() 获取<p>实例所在区域</p>
 * @method void setAndroidInstanceRegion(string $AndroidInstanceRegion) 设置<p>实例所在区域</p>
 * @method string getAndroidInstanceZone() 获取<p>实例可用区</p>
 * @method void setAndroidInstanceZone(string $AndroidInstanceZone) 设置<p>实例可用区</p>
 * @method string getState() 获取<p>实例状态：INITIALIZING，NORMAL，PROCESSING</p>
 * @method void setState(string $State) 设置<p>实例状态：INITIALIZING，NORMAL，PROCESSING</p>
 * @method string getAndroidInstanceType() 获取<p>实例规格</p>
 * @method void setAndroidInstanceType(string $AndroidInstanceType) 设置<p>实例规格</p>
 * @method string getAndroidInstanceImageId() 获取<p>实例镜像 ID</p>
 * @method void setAndroidInstanceImageId(string $AndroidInstanceImageId) 设置<p>实例镜像 ID</p>
 * @method integer getWidth() 获取<p>分辨率宽度</p>
 * @method void setWidth(integer $Width) 设置<p>分辨率宽度</p>
 * @method integer getHeight() 获取<p>分辨率高度</p>
 * @method void setHeight(integer $Height) 设置<p>分辨率高度</p>
 * @method integer getDPI() 获取<p>每英寸像素点。</p>
 * @method void setDPI(integer $DPI) 设置<p>每英寸像素点。</p>
 * @method integer getFPS() 获取<p>帧率</p>
 * @method void setFPS(integer $FPS) 设置<p>帧率</p>
 * @method string getHostSerialNumber() 获取<p>宿主机 ID</p>
 * @method void setHostSerialNumber(string $HostSerialNumber) 设置<p>宿主机 ID</p>
 * @method string getAndroidInstanceGroupId() 获取<p>分组 ID</p>
 * @method void setAndroidInstanceGroupId(string $AndroidInstanceGroupId) 设置<p>分组 ID</p>
 * @method array getAndroidInstanceLabels() 获取<p>标签列表</p>
 * @method void setAndroidInstanceLabels(array $AndroidInstanceLabels) 设置<p>标签列表</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getPrivateIP() 获取<p>内网 IP</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网 IP</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getHostServerSerialNumber() 获取<p>机箱 ID</p>
 * @method void setHostServerSerialNumber(string $HostServerSerialNumber) 设置<p>机箱 ID</p>
 * @method string getServiceStatus() 获取<p>服务状态。<br>IDLE：未连接<br>ESTABLISHED：连接中</p>
 * @method void setServiceStatus(string $ServiceStatus) 设置<p>服务状态。<br>IDLE：未连接<br>ESTABLISHED：连接中</p>
 * @method string getAndroidInstanceModel() 获取<p>安卓实例型号。<br>YS1：默认值，基础型云手机<br>GC0、GC1、GC2：三种性能型云手机</p>
 * @method void setAndroidInstanceModel(string $AndroidInstanceModel) 设置<p>安卓实例型号。<br>YS1：默认值，基础型云手机<br>GC0、GC1、GC2：三种性能型云手机</p>
 */
class AndroidInstance extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $AndroidInstanceId;

    /**
     * @var string <p>实例所在区域</p>
     */
    public $AndroidInstanceRegion;

    /**
     * @var string <p>实例可用区</p>
     */
    public $AndroidInstanceZone;

    /**
     * @var string <p>实例状态：INITIALIZING，NORMAL，PROCESSING</p>
     */
    public $State;

    /**
     * @var string <p>实例规格</p>
     */
    public $AndroidInstanceType;

    /**
     * @var string <p>实例镜像 ID</p>
     */
    public $AndroidInstanceImageId;

    /**
     * @var integer <p>分辨率宽度</p>
     */
    public $Width;

    /**
     * @var integer <p>分辨率高度</p>
     */
    public $Height;

    /**
     * @var integer <p>每英寸像素点。</p>
     */
    public $DPI;

    /**
     * @var integer <p>帧率</p>
     */
    public $FPS;

    /**
     * @var string <p>宿主机 ID</p>
     */
    public $HostSerialNumber;

    /**
     * @var string <p>分组 ID</p>
     */
    public $AndroidInstanceGroupId;

    /**
     * @var array <p>标签列表</p>
     */
    public $AndroidInstanceLabels;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>内网 IP</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>机箱 ID</p>
     */
    public $HostServerSerialNumber;

    /**
     * @var string <p>服务状态。<br>IDLE：未连接<br>ESTABLISHED：连接中</p>
     */
    public $ServiceStatus;

    /**
     * @var string <p>安卓实例型号。<br>YS1：默认值，基础型云手机<br>GC0、GC1、GC2：三种性能型云手机</p>
     */
    public $AndroidInstanceModel;

    /**
     * @param string $AndroidInstanceId <p>实例 ID</p>
     * @param string $AndroidInstanceRegion <p>实例所在区域</p>
     * @param string $AndroidInstanceZone <p>实例可用区</p>
     * @param string $State <p>实例状态：INITIALIZING，NORMAL，PROCESSING</p>
     * @param string $AndroidInstanceType <p>实例规格</p>
     * @param string $AndroidInstanceImageId <p>实例镜像 ID</p>
     * @param integer $Width <p>分辨率宽度</p>
     * @param integer $Height <p>分辨率高度</p>
     * @param integer $DPI <p>每英寸像素点。</p>
     * @param integer $FPS <p>帧率</p>
     * @param string $HostSerialNumber <p>宿主机 ID</p>
     * @param string $AndroidInstanceGroupId <p>分组 ID</p>
     * @param array $AndroidInstanceLabels <p>标签列表</p>
     * @param string $Name <p>名称</p>
     * @param string $UserId <p>用户ID</p>
     * @param string $PrivateIP <p>内网 IP</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $HostServerSerialNumber <p>机箱 ID</p>
     * @param string $ServiceStatus <p>服务状态。<br>IDLE：未连接<br>ESTABLISHED：连接中</p>
     * @param string $AndroidInstanceModel <p>安卓实例型号。<br>YS1：默认值，基础型云手机<br>GC0、GC1、GC2：三种性能型云手机</p>
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

        if (array_key_exists("DPI",$param) and $param["DPI"] !== null) {
            $this->DPI = $param["DPI"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
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

        if (array_key_exists("AndroidInstanceModel",$param) and $param["AndroidInstanceModel"] !== null) {
            $this->AndroidInstanceModel = $param["AndroidInstanceModel"];
        }
    }
}
