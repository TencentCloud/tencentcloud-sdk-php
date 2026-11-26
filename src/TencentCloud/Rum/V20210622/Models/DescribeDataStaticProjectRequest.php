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
 * DescribeDataStaticProject请求参数结构体
 *
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method string getType() 获取<p>allcount：性能视图，day：14天数据，condition：条件列表，area：请求速度分布，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等</p>
 * @method void setType(string $Type) 设置<p>allcount：性能视图，day：14天数据，condition：条件列表，area：请求速度分布，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等</p>
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
 * @method string getFrom() 获取<p>来源页面</p>
 * @method void setFrom(string $From) 设置<p>来源页面</p>
 * @method string getLevel() 获取<p>日志等级（1表示白名单日志，2表示一般日志，4表示错误日志，8表示Promise 错误，16表示Ajax 请求异常，32表示JS 加载异常，64表示图片加载异常，128表示css 加载异常，256表示console.error，512表示音视频资源异常，1024表示retcode 异常，2048表示aegis report，4096表示PV日志，8192表示自定义事件，16384表示小程序 页面不存在，32768表示websocket错误，65536表示js bridge错误）</p>
 * @method void setLevel(string $Level) 设置<p>日志等级（1表示白名单日志，2表示一般日志，4表示错误日志，8表示Promise 错误，16表示Ajax 请求异常，32表示JS 加载异常，64表示图片加载异常，128表示css 加载异常，256表示console.error，512表示音视频资源异常，1024表示retcode 异常，2048表示aegis report，4096表示PV日志，8192表示自定义事件，16384表示小程序 页面不存在，32768表示websocket错误，65536表示js bridge错误）</p>
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
 * @method string getNetType() 获取<p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知。</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知。</p>
 * @method string getDevice() 获取<p>机型</p>
 * @method void setDevice(string $Device) 设置<p>机型</p>
 * @method string getIsAbroad() 获取<p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
 * @method void setIsAbroad(string $IsAbroad) 设置<p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
 * @method string getOs() 获取<p>操作系统</p>
 * @method void setOs(string $Os) 设置<p>操作系统</p>
 * @method string getBrowser() 获取<p>浏览器</p>
 * @method void setBrowser(string $Browser) 设置<p>浏览器</p>
 * @method string getCostType() 获取<p>耗时口径：&quot;50&quot;/&quot;75&quot;/&quot;90&quot;/&quot;95&quot;/&quot;99&quot;/&quot;99.5&quot; 分别表示 TP50/TP75/TP90/TP95/TP99/TP99.5（percentile2）；&quot;avg&quot; 表示均值（avg）。</p>
 * @method void setCostType(string $CostType) 设置<p>耗时口径：&quot;50&quot;/&quot;75&quot;/&quot;90&quot;/&quot;95&quot;/&quot;99&quot;/&quot;99.5&quot; 分别表示 TP50/TP75/TP90/TP95/TP99/TP99.5（percentile2）；&quot;avg&quot; 表示均值（avg）。</p>
 * @method array getUrl() 获取<p>来源</p>
 * @method void setUrl(array $Url) 设置<p>来源</p>
 * @method string getEnv() 获取<p>环境</p>
 * @method void setEnv(string $Env) 设置<p>环境</p>
 */
class DescribeDataStaticProjectRequest extends AbstractModel
{
    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>allcount：性能视图，day：14天数据，condition：条件列表，area：请求速度分布，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等</p>
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
     * @var string <p>来源页面</p>
     */
    public $From;

    /**
     * @var string <p>日志等级（1表示白名单日志，2表示一般日志，4表示错误日志，8表示Promise 错误，16表示Ajax 请求异常，32表示JS 加载异常，64表示图片加载异常，128表示css 加载异常，256表示console.error，512表示音视频资源异常，1024表示retcode 异常，2048表示aegis report，4096表示PV日志，8192表示自定义事件，16384表示小程序 页面不存在，32768表示websocket错误，65536表示js bridge错误）</p>
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
     * @var string <p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知。</p>
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
     * @var string <p>耗时口径：&quot;50&quot;/&quot;75&quot;/&quot;90&quot;/&quot;95&quot;/&quot;99&quot;/&quot;99.5&quot; 分别表示 TP50/TP75/TP90/TP95/TP99/TP99.5（percentile2）；&quot;avg&quot; 表示均值（avg）。</p>
     */
    public $CostType;

    /**
     * @var array <p>来源</p>
     */
    public $Url;

    /**
     * @var string <p>环境</p>
     */
    public $Env;

    /**
     * @param integer $StartTime <p>开始时间</p>
     * @param string $Type <p>allcount：性能视图，day：14天数据，condition：条件列表，area：请求速度分布，nettype/version/platform/isp/region/device/browser/ext1/ext2/ext3/ret/status/from/url/env/：网络平台视图/Version视图/设备视图/ISP视图/地区视图/浏览器视图/ext1视图等等</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $ID <p>项目ID</p>
     * @param string $ExtSecond <p>自定义2</p>
     * @param string $Engine <p>浏览器引擎</p>
     * @param string $Isp <p>运营商</p>
     * @param string $From <p>来源页面</p>
     * @param string $Level <p>日志等级（1表示白名单日志，2表示一般日志，4表示错误日志，8表示Promise 错误，16表示Ajax 请求异常，32表示JS 加载异常，64表示图片加载异常，128表示css 加载异常，256表示console.error，512表示音视频资源异常，1024表示retcode 异常，2048表示aegis report，4096表示PV日志，8192表示自定义事件，16384表示小程序 页面不存在，32768表示websocket错误，65536表示js bridge错误）</p>
     * @param string $Brand <p>品牌</p>
     * @param string $Area <p>地区</p>
     * @param string $VersionNum <p>版本</p>
     * @param string $Platform <p>平台</p>
     * @param string $ExtThird <p>自定义3</p>
     * @param string $ExtFirst <p>自定义1</p>
     * @param string $NetType <p>网络类型（1,2,3,4,5,100），1表示WIFI, 2表示2G, 3表示3G, 4表示4G, 5表示5G, 6表示6G, 100表示未知。</p>
     * @param string $Device <p>机型</p>
     * @param string $IsAbroad <p>显示是否海外,1表示海外，0表示非海外；默认值为空，查询所有。</p>
     * @param string $Os <p>操作系统</p>
     * @param string $Browser <p>浏览器</p>
     * @param string $CostType <p>耗时口径：&quot;50&quot;/&quot;75&quot;/&quot;90&quot;/&quot;95&quot;/&quot;99&quot;/&quot;99.5&quot; 分别表示 TP50/TP75/TP90/TP95/TP99/TP99.5（percentile2）；&quot;avg&quot; 表示均值（avg）。</p>
     * @param array $Url <p>来源</p>
     * @param string $Env <p>环境</p>
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

        if (array_key_exists("CostType",$param) and $param["CostType"] !== null) {
            $this->CostType = $param["CostType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
