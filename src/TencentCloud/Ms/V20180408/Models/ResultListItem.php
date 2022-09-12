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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APK检测服务参数返回具体信息
 *
 * @method string getBanner() 获取banner广告软件标记，分别为-1-不确定，0-否，1-是
 * @method void setBanner(string $Banner) 设置banner广告软件标记，分别为-1-不确定，0-否，1-是
 * @method string getBoutiqueRecommand() 获取精品推荐列表广告标记，分别为-1-不确定，0-否，1-是
 * @method void setBoutiqueRecommand(string $BoutiqueRecommand) 设置精品推荐列表广告标记，分别为-1-不确定，0-否，1-是
 * @method string getFloatWindows() 获取悬浮窗图标广告标记,分别为-1-不确定，0-否，1-是
 * @method void setFloatWindows(string $FloatWindows) 设置悬浮窗图标广告标记,分别为-1-不确定，0-否，1-是
 * @method string getIntegralWall() 获取积分墙广告软件标记，分别为 -1 -不确定，0-否，1-是
 * @method void setIntegralWall(string $IntegralWall) 设置积分墙广告软件标记，分别为 -1 -不确定，0-否，1-是
 * @method string getMd5() 获取安装包的md5
 * @method void setMd5(string $Md5) 设置安装包的md5
 * @method string getNotifyBar() 获取通知栏广告软件标记，分别为-1-不确定，0-否，1-是
 * @method void setNotifyBar(string $NotifyBar) 设置通知栏广告软件标记，分别为-1-不确定，0-否，1-是
 * @method string getOfficial() 获取1表示官方，0表示非官方
 * @method void setOfficial(string $Official) 设置1表示官方，0表示非官方
 * @method array getPluginList() 获取广告插件结果列表
 * @method void setPluginList(array $PluginList) 设置广告插件结果列表
 * @method array getOptPluginList() 获取非广告插件结果列表(SDK、风险插件等)
 * @method void setOptPluginList(array $OptPluginList) 设置非广告插件结果列表(SDK、风险插件等)
 * @method string getSafeType() 获取数字类型，分别为0-未知， 1-安全软件，2-风险软件，3-病毒软件
 * @method void setSafeType(string $SafeType) 设置数字类型，分别为0-未知， 1-安全软件，2-风险软件，3-病毒软件
 * @method string getSid() 获取Session id，合作方可以用来区分回调数据，需要唯一。
 * @method void setSid(string $Sid) 设置Session id，合作方可以用来区分回调数据，需要唯一。
 * @method string getSoftName() 获取安装包名称
 * @method void setSoftName(string $SoftName) 设置安装包名称
 * @method string getSpot() 获取插播广告软件标记，取值：-1 不确定，0否， 1 是
 * @method void setSpot(string $Spot) 设置插播广告软件标记，取值：-1 不确定，0否， 1 是
 * @method string getVirusName() 获取病毒名称，utf8编码
 * @method void setVirusName(string $VirusName) 设置病毒名称，utf8编码
 * @method string getVirusDesc() 获取病毒描述，utf8编码
 * @method void setVirusDesc(string $VirusDesc) 设置病毒描述，utf8编码
 * @method string getRepackageStatus() 获取二次打包状态：0-表示默认；1-表示二次
 * @method void setRepackageStatus(string $RepackageStatus) 设置二次打包状态：0-表示默认；1-表示二次
 * @method string getErrno() 获取应用错误码：0、1-表示正常；                  

2表示System Error(engine analysis error).

3表示App analysis error, please confirm it.

4表示App have not cert, please confirm it.

5表示App size is zero, please confirm it.

6表示App have not package name, please confirm it.

7表示App build time is empty, please confirm it.

8表示App have not valid cert, please confirm it.

99表示Other error.

1000表示App downloadlink download fail, please confirm it.

1001表示APP md5 different between real md5, please confirm it.

1002表示App md5 uncollect, please offer downloadlink.
 * @method void setErrno(string $Errno) 设置应用错误码：0、1-表示正常；                  

2表示System Error(engine analysis error).

3表示App analysis error, please confirm it.

4表示App have not cert, please confirm it.

5表示App size is zero, please confirm it.

6表示App have not package name, please confirm it.

7表示App build time is empty, please confirm it.

8表示App have not valid cert, please confirm it.

99表示Other error.

1000表示App downloadlink download fail, please confirm it.

1001表示APP md5 different between real md5, please confirm it.

1002表示App md5 uncollect, please offer downloadlink.
 * @method string getErrMsg() 获取对应errno的错误信息描述
 * @method void setErrMsg(string $ErrMsg) 设置对应errno的错误信息描述
 */
class ResultListItem extends AbstractModel
{
    /**
     * @var string banner广告软件标记，分别为-1-不确定，0-否，1-是
     */
    public $Banner;

    /**
     * @var string 精品推荐列表广告标记，分别为-1-不确定，0-否，1-是
     */
    public $BoutiqueRecommand;

    /**
     * @var string 悬浮窗图标广告标记,分别为-1-不确定，0-否，1-是
     */
    public $FloatWindows;

    /**
     * @var string 积分墙广告软件标记，分别为 -1 -不确定，0-否，1-是
     */
    public $IntegralWall;

    /**
     * @var string 安装包的md5
     */
    public $Md5;

    /**
     * @var string 通知栏广告软件标记，分别为-1-不确定，0-否，1-是
     */
    public $NotifyBar;

    /**
     * @var string 1表示官方，0表示非官方
     */
    public $Official;

    /**
     * @var array 广告插件结果列表
     */
    public $PluginList;

    /**
     * @var array 非广告插件结果列表(SDK、风险插件等)
     */
    public $OptPluginList;

    /**
     * @var string 数字类型，分别为0-未知， 1-安全软件，2-风险软件，3-病毒软件
     */
    public $SafeType;

    /**
     * @var string Session id，合作方可以用来区分回调数据，需要唯一。
     */
    public $Sid;

    /**
     * @var string 安装包名称
     */
    public $SoftName;

    /**
     * @var string 插播广告软件标记，取值：-1 不确定，0否， 1 是
     */
    public $Spot;

    /**
     * @var string 病毒名称，utf8编码
     */
    public $VirusName;

    /**
     * @var string 病毒描述，utf8编码
     */
    public $VirusDesc;

    /**
     * @var string 二次打包状态：0-表示默认；1-表示二次
     */
    public $RepackageStatus;

    /**
     * @var string 应用错误码：0、1-表示正常；                  

2表示System Error(engine analysis error).

3表示App analysis error, please confirm it.

4表示App have not cert, please confirm it.

5表示App size is zero, please confirm it.

6表示App have not package name, please confirm it.

7表示App build time is empty, please confirm it.

8表示App have not valid cert, please confirm it.

99表示Other error.

1000表示App downloadlink download fail, please confirm it.

1001表示APP md5 different between real md5, please confirm it.

1002表示App md5 uncollect, please offer downloadlink.
     */
    public $Errno;

    /**
     * @var string 对应errno的错误信息描述
     */
    public $ErrMsg;

    /**
     * @param string $Banner banner广告软件标记，分别为-1-不确定，0-否，1-是
     * @param string $BoutiqueRecommand 精品推荐列表广告标记，分别为-1-不确定，0-否，1-是
     * @param string $FloatWindows 悬浮窗图标广告标记,分别为-1-不确定，0-否，1-是
     * @param string $IntegralWall 积分墙广告软件标记，分别为 -1 -不确定，0-否，1-是
     * @param string $Md5 安装包的md5
     * @param string $NotifyBar 通知栏广告软件标记，分别为-1-不确定，0-否，1-是
     * @param string $Official 1表示官方，0表示非官方
     * @param array $PluginList 广告插件结果列表
     * @param array $OptPluginList 非广告插件结果列表(SDK、风险插件等)
     * @param string $SafeType 数字类型，分别为0-未知， 1-安全软件，2-风险软件，3-病毒软件
     * @param string $Sid Session id，合作方可以用来区分回调数据，需要唯一。
     * @param string $SoftName 安装包名称
     * @param string $Spot 插播广告软件标记，取值：-1 不确定，0否， 1 是
     * @param string $VirusName 病毒名称，utf8编码
     * @param string $VirusDesc 病毒描述，utf8编码
     * @param string $RepackageStatus 二次打包状态：0-表示默认；1-表示二次
     * @param string $Errno 应用错误码：0、1-表示正常；                  

2表示System Error(engine analysis error).

3表示App analysis error, please confirm it.

4表示App have not cert, please confirm it.

5表示App size is zero, please confirm it.

6表示App have not package name, please confirm it.

7表示App build time is empty, please confirm it.

8表示App have not valid cert, please confirm it.

99表示Other error.

1000表示App downloadlink download fail, please confirm it.

1001表示APP md5 different between real md5, please confirm it.

1002表示App md5 uncollect, please offer downloadlink.
     * @param string $ErrMsg 对应errno的错误信息描述
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
        if (array_key_exists("Banner",$param) and $param["Banner"] !== null) {
            $this->Banner = $param["Banner"];
        }

        if (array_key_exists("BoutiqueRecommand",$param) and $param["BoutiqueRecommand"] !== null) {
            $this->BoutiqueRecommand = $param["BoutiqueRecommand"];
        }

        if (array_key_exists("FloatWindows",$param) and $param["FloatWindows"] !== null) {
            $this->FloatWindows = $param["FloatWindows"];
        }

        if (array_key_exists("IntegralWall",$param) and $param["IntegralWall"] !== null) {
            $this->IntegralWall = $param["IntegralWall"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("NotifyBar",$param) and $param["NotifyBar"] !== null) {
            $this->NotifyBar = $param["NotifyBar"];
        }

        if (array_key_exists("Official",$param) and $param["Official"] !== null) {
            $this->Official = $param["Official"];
        }

        if (array_key_exists("PluginList",$param) and $param["PluginList"] !== null) {
            $this->PluginList = [];
            foreach ($param["PluginList"] as $key => $value){
                $obj = new PluginListItem();
                $obj->deserialize($value);
                array_push($this->PluginList, $obj);
            }
        }

        if (array_key_exists("OptPluginList",$param) and $param["OptPluginList"] !== null) {
            $this->OptPluginList = [];
            foreach ($param["OptPluginList"] as $key => $value){
                $obj = new OptPluginListItem();
                $obj->deserialize($value);
                array_push($this->OptPluginList, $obj);
            }
        }

        if (array_key_exists("SafeType",$param) and $param["SafeType"] !== null) {
            $this->SafeType = $param["SafeType"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("SoftName",$param) and $param["SoftName"] !== null) {
            $this->SoftName = $param["SoftName"];
        }

        if (array_key_exists("Spot",$param) and $param["Spot"] !== null) {
            $this->Spot = $param["Spot"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("VirusDesc",$param) and $param["VirusDesc"] !== null) {
            $this->VirusDesc = $param["VirusDesc"];
        }

        if (array_key_exists("RepackageStatus",$param) and $param["RepackageStatus"] !== null) {
            $this->RepackageStatus = $param["RepackageStatus"];
        }

        if (array_key_exists("Errno",$param) and $param["Errno"] !== null) {
            $this->Errno = $param["Errno"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
