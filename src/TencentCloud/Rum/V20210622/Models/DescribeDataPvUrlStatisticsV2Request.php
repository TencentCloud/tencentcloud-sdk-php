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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataPvUrlStatisticsV2请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getType() 获取allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等
 * @method void setType(string $Type) 设置allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 * @method string getExtSecond() 获取自定义2
 * @method void setExtSecond(string $ExtSecond) 设置自定义2
 * @method string getEngine() 获取浏览器引擎
 * @method void setEngine(string $Engine) 设置浏览器引擎
 * @method string getIsp() 获取运营商
 * @method void setIsp(string $Isp) 设置运营商
 * @method string getFrom() 获取来源页面
 * @method void setFrom(string $From) 设置来源页面
 * @method string getLevel() 获取日志等级
 * @method void setLevel(string $Level) 设置日志等级
 * @method string getBrand() 获取品牌
 * @method void setBrand(string $Brand) 设置品牌
 * @method string getArea() 获取地区
 * @method void setArea(string $Area) 设置地区
 * @method string getVersionNum() 获取版本
 * @method void setVersionNum(string $VersionNum) 设置版本
 * @method string getPlatform() 获取平台
 * @method void setPlatform(string $Platform) 设置平台
 * @method string getExtThird() 获取自定义3
 * @method void setExtThird(string $ExtThird) 设置自定义3
 * @method string getExtFirst() 获取自定义1
 * @method void setExtFirst(string $ExtFirst) 设置自定义1
 * @method string getNetType() 获取网络类型
 * @method void setNetType(string $NetType) 设置网络类型
 * @method string getDevice() 获取机型
 * @method void setDevice(string $Device) 设置机型
 * @method string getIsAbroad() 获取显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。
 * @method void setIsAbroad(string $IsAbroad) 设置显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。
 * @method string getOs() 获取操作系统
 * @method void setOs(string $Os) 设置操作系统
 * @method string getBrowser() 获取浏览器
 * @method void setBrowser(string $Browser) 设置浏览器
 * @method string getEnv() 获取环境
 * @method void setEnv(string $Env) 设置环境
 * @method integer getGroupByType() 获取group by 参数值枚举1:1m  2:5m  3:30m  4:1h 
 5:1d
 * @method void setGroupByType(integer $GroupByType) 设置group by 参数值枚举1:1m  2:5m  3:30m  4:1h 
 5:1d
 * @method integer getIsNewData() 获取1: 查询智研
0: 走旧逻辑，已下线，勿使用
 * @method void setIsNewData(integer $IsNewData) 设置1: 查询智研
0: 走旧逻辑，已下线，勿使用
 * @method string getExtFourth() 获取自定义4
 * @method void setExtFourth(string $ExtFourth) 设置自定义4
 * @method string getExtFifth() 获取自定义5
 * @method void setExtFifth(string $ExtFifth) 设置自定义5
 * @method string getExtSixth() 获取自定义6
 * @method void setExtSixth(string $ExtSixth) 设置自定义6
 * @method string getExtSeventh() 获取自定义7
 * @method void setExtSeventh(string $ExtSeventh) 设置自定义7
 * @method string getExtEighth() 获取自定义8
 * @method void setExtEighth(string $ExtEighth) 设置自定义8
 * @method string getExtNinth() 获取自定义9
 * @method void setExtNinth(string $ExtNinth) 设置自定义9
 * @method string getExtTenth() 获取自定义10
 * @method void setExtTenth(string $ExtTenth) 设置自定义10
 * @method string getGranularity() 获取时间段
 * @method void setGranularity(string $Granularity) 设置时间段
 */
class DescribeDataPvUrlStatisticsV2Request extends AbstractModel
{
    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等
     */
    public $Type;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @var string 自定义2
     */
    public $ExtSecond;

    /**
     * @var string 浏览器引擎
     */
    public $Engine;

    /**
     * @var string 运营商
     */
    public $Isp;

    /**
     * @var string 来源页面
     */
    public $From;

    /**
     * @var string 日志等级
     */
    public $Level;

    /**
     * @var string 品牌
     */
    public $Brand;

    /**
     * @var string 地区
     */
    public $Area;

    /**
     * @var string 版本
     */
    public $VersionNum;

    /**
     * @var string 平台
     */
    public $Platform;

    /**
     * @var string 自定义3
     */
    public $ExtThird;

    /**
     * @var string 自定义1
     */
    public $ExtFirst;

    /**
     * @var string 网络类型
     */
    public $NetType;

    /**
     * @var string 机型
     */
    public $Device;

    /**
     * @var string 显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。
     */
    public $IsAbroad;

    /**
     * @var string 操作系统
     */
    public $Os;

    /**
     * @var string 浏览器
     */
    public $Browser;

    /**
     * @var string 环境
     */
    public $Env;

    /**
     * @var integer group by 参数值枚举1:1m  2:5m  3:30m  4:1h 
 5:1d
     */
    public $GroupByType;

    /**
     * @var integer 1: 查询智研
0: 走旧逻辑，已下线，勿使用
     */
    public $IsNewData;

    /**
     * @var string 自定义4
     */
    public $ExtFourth;

    /**
     * @var string 自定义5
     */
    public $ExtFifth;

    /**
     * @var string 自定义6
     */
    public $ExtSixth;

    /**
     * @var string 自定义7
     */
    public $ExtSeventh;

    /**
     * @var string 自定义8
     */
    public $ExtEighth;

    /**
     * @var string 自定义9
     */
    public $ExtNinth;

    /**
     * @var string 自定义10
     */
    public $ExtTenth;

    /**
     * @var string 时间段
     */
    public $Granularity;

    /**
     * @param integer $StartTime 开始时间
     * @param string $Type allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等
     * @param integer $EndTime 结束时间
     * @param integer $ID 项目ID
     * @param string $ExtSecond 自定义2
     * @param string $Engine 浏览器引擎
     * @param string $Isp 运营商
     * @param string $From 来源页面
     * @param string $Level 日志等级
     * @param string $Brand 品牌
     * @param string $Area 地区
     * @param string $VersionNum 版本
     * @param string $Platform 平台
     * @param string $ExtThird 自定义3
     * @param string $ExtFirst 自定义1
     * @param string $NetType 网络类型
     * @param string $Device 机型
     * @param string $IsAbroad 显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。
     * @param string $Os 操作系统
     * @param string $Browser 浏览器
     * @param string $Env 环境
     * @param integer $GroupByType group by 参数值枚举1:1m  2:5m  3:30m  4:1h 
 5:1d
     * @param integer $IsNewData 1: 查询智研
0: 走旧逻辑，已下线，勿使用
     * @param string $ExtFourth 自定义4
     * @param string $ExtFifth 自定义5
     * @param string $ExtSixth 自定义6
     * @param string $ExtSeventh 自定义7
     * @param string $ExtEighth 自定义8
     * @param string $ExtNinth 自定义9
     * @param string $ExtTenth 自定义10
     * @param string $Granularity 时间段
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ExtSecond",$param) and $param["ExtSecond"] !== null) {
            $this->ExtSecond = $param["ExtSecond"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ExtThird",$param) and $param["ExtThird"] !== null) {
            $this->ExtThird = $param["ExtThird"];
        }

        if (array_key_exists("ExtFirst",$param) and $param["ExtFirst"] !== null) {
            $this->ExtFirst = $param["ExtFirst"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("IsAbroad",$param) and $param["IsAbroad"] !== null) {
            $this->IsAbroad = $param["IsAbroad"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = $param["Browser"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("GroupByType",$param) and $param["GroupByType"] !== null) {
            $this->GroupByType = $param["GroupByType"];
        }

        if (array_key_exists("IsNewData",$param) and $param["IsNewData"] !== null) {
            $this->IsNewData = $param["IsNewData"];
        }

        if (array_key_exists("ExtFourth",$param) and $param["ExtFourth"] !== null) {
            $this->ExtFourth = $param["ExtFourth"];
        }

        if (array_key_exists("ExtFifth",$param) and $param["ExtFifth"] !== null) {
            $this->ExtFifth = $param["ExtFifth"];
        }

        if (array_key_exists("ExtSixth",$param) and $param["ExtSixth"] !== null) {
            $this->ExtSixth = $param["ExtSixth"];
        }

        if (array_key_exists("ExtSeventh",$param) and $param["ExtSeventh"] !== null) {
            $this->ExtSeventh = $param["ExtSeventh"];
        }

        if (array_key_exists("ExtEighth",$param) and $param["ExtEighth"] !== null) {
            $this->ExtEighth = $param["ExtEighth"];
        }

        if (array_key_exists("ExtNinth",$param) and $param["ExtNinth"] !== null) {
            $this->ExtNinth = $param["ExtNinth"];
        }

        if (array_key_exists("ExtTenth",$param) and $param["ExtTenth"] !== null) {
            $this->ExtTenth = $param["ExtTenth"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
