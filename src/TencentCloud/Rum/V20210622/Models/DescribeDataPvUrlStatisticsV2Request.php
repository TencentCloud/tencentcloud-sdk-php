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
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method string getType() 获取<p>allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等</p>
 * @method void setType(string $Type) 设置<p>allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getID() 获取<p>项目ID</p>
 * @method void setID(integer $ID) 设置<p>项目ID</p>
 * @method string getExtSecond() 获取<p>自定义2</p>
 * @method void setExtSecond(string $ExtSecond) 设置<p>自定义2</p>
 * @method string getEngine() 获取<p>浏览器引擎</p>
 * @method void setEngine(string $Engine) 设置<p>浏览器引擎</p>
 * @method string getIsp() 获取<p>运营商</p>
 * @method void setIsp(string $Isp) 设置<p>运营商</p>
 * @method string getFrom() 获取<p>来源页面， 可多选，用 “,” 隔开的 String</p>
 * @method void setFrom(string $From) 设置<p>来源页面， 可多选，用 “,” 隔开的 String</p>
 * @method string getLevel() 获取<p>日志等级</p>
 * @method void setLevel(string $Level) 设置<p>日志等级</p>
 * @method string getBrand() 获取<p>品牌</p>
 * @method void setBrand(string $Brand) 设置<p>品牌</p>
 * @method string getArea() 获取<p>地区</p>
 * @method void setArea(string $Area) 设置<p>地区</p>
 * @method string getVersionNum() 获取<p>版本</p>
 * @method void setVersionNum(string $VersionNum) 设置<p>版本</p>
 * @method string getPlatform() 获取<p>平台</p>
 * @method void setPlatform(string $Platform) 设置<p>平台</p>
 * @method string getExtThird() 获取<p>自定义3</p>
 * @method void setExtThird(string $ExtThird) 设置<p>自定义3</p>
 * @method string getExtFirst() 获取<p>自定义1</p>
 * @method void setExtFirst(string $ExtFirst) 设置<p>自定义1</p>
 * @method string getNetType() 获取<p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知</p>
 * @method string getDevice() 获取<p>机型</p>
 * @method void setDevice(string $Device) 设置<p>机型</p>
 * @method string getIsAbroad() 获取<p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
 * @method void setIsAbroad(string $IsAbroad) 设置<p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
 * @method string getOs() 获取<p>操作系统</p>
 * @method void setOs(string $Os) 设置<p>操作系统</p>
 * @method string getBrowser() 获取<p>浏览器</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器</p>
 * @method string getEnv() 获取<p>环境</p>
 * @method void setEnv(string $Env) 设置<p>环境</p>
 * @method integer getGroupByType() 获取<p>group by 参数值枚举1:1m  2:5m  3:30m  4:1h<br> 5:1d</p>
 * @method void setGroupByType(integer $GroupByType) 设置<p>group by 参数值枚举1:1m  2:5m  3:30m  4:1h<br> 5:1d</p>
 * @method integer getIsNewData() 获取<p>1: 查询智研<br>0: 走旧逻辑，已下线，勿使用</p>
 * @method void setIsNewData(integer $IsNewData) 设置<p>1: 查询智研<br>0: 走旧逻辑，已下线，勿使用</p>
 * @method string getExtFourth() 获取<p>自定义4</p>
 * @method void setExtFourth(string $ExtFourth) 设置<p>自定义4</p>
 * @method string getExtFifth() 获取<p>自定义5</p>
 * @method void setExtFifth(string $ExtFifth) 设置<p>自定义5</p>
 * @method string getExtSixth() 获取<p>自定义6</p>
 * @method void setExtSixth(string $ExtSixth) 设置<p>自定义6</p>
 * @method string getExtSeventh() 获取<p>自定义7</p>
 * @method void setExtSeventh(string $ExtSeventh) 设置<p>自定义7</p>
 * @method string getExtEighth() 获取<p>自定义8</p>
 * @method void setExtEighth(string $ExtEighth) 设置<p>自定义8</p>
 * @method string getExtNinth() 获取<p>自定义9</p>
 * @method void setExtNinth(string $ExtNinth) 设置<p>自定义9</p>
 * @method string getExtTenth() 获取<p>自定义10</p>
 * @method void setExtTenth(string $ExtTenth) 设置<p>自定义10</p>
 * @method string getGranularity() 获取<p>时间段</p>
 * @method void setGranularity(string $Granularity) 设置<p>时间段</p>
 */
class DescribeDataPvUrlStatisticsV2Request extends AbstractModel
{
    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等</p>
     */
    public $Type;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ID;

    /**
     * @var string <p>自定义2</p>
     */
    public $ExtSecond;

    /**
     * @var string <p>浏览器引擎</p>
     */
    public $Engine;

    /**
     * @var string <p>运营商</p>
     */
    public $Isp;

    /**
     * @var string <p>来源页面， 可多选，用 “,” 隔开的 String</p>
     */
    public $From;

    /**
     * @var string <p>日志等级</p>
     */
    public $Level;

    /**
     * @var string <p>品牌</p>
     */
    public $Brand;

    /**
     * @var string <p>地区</p>
     */
    public $Area;

    /**
     * @var string <p>版本</p>
     */
    public $VersionNum;

    /**
     * @var string <p>平台</p>
     */
    public $Platform;

    /**
     * @var string <p>自定义3</p>
     */
    public $ExtThird;

    /**
     * @var string <p>自定义1</p>
     */
    public $ExtFirst;

    /**
     * @var string <p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知</p>
     */
    public $NetType;

    /**
     * @var string <p>机型</p>
     */
    public $Device;

    /**
     * @var string <p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
     */
    public $IsAbroad;

    /**
     * @var string <p>操作系统</p>
     */
    public $Os;

    /**
     * @var string <p>浏览器</p>
     */
    public $Browser;

    /**
     * @var string <p>环境</p>
     */
    public $Env;

    /**
     * @var integer <p>group by 参数值枚举1:1m  2:5m  3:30m  4:1h<br> 5:1d</p>
     */
    public $GroupByType;

    /**
     * @var integer <p>1: 查询智研<br>0: 走旧逻辑，已下线，勿使用</p>
     */
    public $IsNewData;

    /**
     * @var string <p>自定义4</p>
     */
    public $ExtFourth;

    /**
     * @var string <p>自定义5</p>
     */
    public $ExtFifth;

    /**
     * @var string <p>自定义6</p>
     */
    public $ExtSixth;

    /**
     * @var string <p>自定义7</p>
     */
    public $ExtSeventh;

    /**
     * @var string <p>自定义8</p>
     */
    public $ExtEighth;

    /**
     * @var string <p>自定义9</p>
     */
    public $ExtNinth;

    /**
     * @var string <p>自定义10</p>
     */
    public $ExtTenth;

    /**
     * @var string <p>时间段</p>
     */
    public $Granularity;

    /**
     * @param integer $StartTime <p>开始时间</p>
     * @param string $Type <p>allcount：性能视图，day：14天数据，vp：性能，ckuv：uv，ckpv：pv，condition：条件列表，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $ID <p>项目ID</p>
     * @param string $ExtSecond <p>自定义2</p>
     * @param string $Engine <p>浏览器引擎</p>
     * @param string $Isp <p>运营商</p>
     * @param string $From <p>来源页面， 可多选，用 “,” 隔开的 String</p>
     * @param string $Level <p>日志等级</p>
     * @param string $Brand <p>品牌</p>
     * @param string $Area <p>地区</p>
     * @param string $VersionNum <p>版本</p>
     * @param string $Platform <p>平台</p>
     * @param string $ExtThird <p>自定义3</p>
     * @param string $ExtFirst <p>自定义1</p>
     * @param string $NetType <p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知</p>
     * @param string $Device <p>机型</p>
     * @param string $IsAbroad <p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
     * @param string $Os <p>操作系统</p>
     * @param string $Browser <p>浏览器</p>
     * @param string $Env <p>环境</p>
     * @param integer $GroupByType <p>group by 参数值枚举1:1m  2:5m  3:30m  4:1h<br> 5:1d</p>
     * @param integer $IsNewData <p>1: 查询智研<br>0: 走旧逻辑，已下线，勿使用</p>
     * @param string $ExtFourth <p>自定义4</p>
     * @param string $ExtFifth <p>自定义5</p>
     * @param string $ExtSixth <p>自定义6</p>
     * @param string $ExtSeventh <p>自定义7</p>
     * @param string $ExtEighth <p>自定义8</p>
     * @param string $ExtNinth <p>自定义9</p>
     * @param string $ExtTenth <p>自定义10</p>
     * @param string $Granularity <p>时间段</p>
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
