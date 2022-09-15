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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行为数据
 *
 * @method string getItemId() 获取内容唯一ID，如 2824324234
 * @method void setItemId(string $ItemId) 设置内容唯一ID，如 2824324234
 * @method integer getBehaviorType() 获取行为类型
 * @method void setBehaviorType(integer $BehaviorType) 设置行为类型
 * @method string getBehaviorValue() 获取行为值
 * @method void setBehaviorValue(string $BehaviorValue) 设置行为值
 * @method integer getBehaviorTimestamp() 获取行为时间戳： 秒级时间戳（默认为当前时间）,不能延迟太久，尽量实时上报，否则会影响推荐结果的准确性。
 * @method void setBehaviorTimestamp(integer $BehaviorTimestamp) 设置行为时间戳： 秒级时间戳（默认为当前时间）,不能延迟太久，尽量实时上报，否则会影响推荐结果的准确性。
 * @method string getSceneId() 获取场景id，在控制台创建场景后获取。
 * @method void setSceneId(string $SceneId) 设置场景id，在控制台创建场景后获取。
 * @method array getUserIdList() 获取用户id列表
 * @method void setUserIdList(array $UserIdList) 设置用户id列表
 * @method string getRecTraceId() 获取会话id，使用获取推荐结果中返回的RecTraceId填入。<br>注意：如果和在线推荐请求中的traceId不同，会影响行为特征归因，影响推荐算法效果
 * @method void setRecTraceId(string $RecTraceId) 设置会话id，使用获取推荐结果中返回的RecTraceId填入。<br>注意：如果和在线推荐请求中的traceId不同，会影响行为特征归因，影响推荐算法效果
 * @method string getSource() 获取算法来源：用来区分行为来源于哪个算法。值为**business，tencent，other** 三者之一<br>● business 表示业务自己的算法对照组<br>● tencent 为腾讯算法<br>● other 为其他算法
 * @method void setSource(string $Source) 设置算法来源：用来区分行为来源于哪个算法。值为**business，tencent，other** 三者之一<br>● business 表示业务自己的算法对照组<br>● tencent 为腾讯算法<br>● other 为其他算法
 * @method integer getItemType() 获取物料类型
 * @method void setItemType(integer $ItemType) 设置物料类型
 * @method string getAppId() 获取微信开放平台上查看appId
 * @method void setAppId(string $AppId) 设置微信开放平台上查看appId
 * @method integer getVideoPlayDuration() 获取回传video_over事件的时候，回传的用户播放视频的总时长（真正播放的，拖动不算，单位为秒）
 * @method void setVideoPlayDuration(integer $VideoPlayDuration) 设置回传video_over事件的时候，回传的用户播放视频的总时长（真正播放的，拖动不算，单位为秒）
 * @method string getReferrerItemId() 获取来源物料内容：用来标识在指定内容页面产生的行为，如需要统计用户在A内容详情页里，对推荐内容B点击等行为，则ReferrerItemId代表内容A，ItemId代表内容B
 * @method void setReferrerItemId(string $ReferrerItemId) 设置来源物料内容：用来标识在指定内容页面产生的行为，如需要统计用户在A内容详情页里，对推荐内容B点击等行为，则ReferrerItemId代表内容A，ItemId代表内容B
 * @method string getCountry() 获取国家，统一用简写，比如中国则填写CN
 * @method void setCountry(string $Country) 设置国家，统一用简写，比如中国则填写CN
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getDistrict() 获取区县
 * @method void setDistrict(string $District) 设置区县
 * @method string getIP() 获取客户端ip
 * @method void setIP(string $IP) 设置客户端ip
 * @method string getNetwork() 获取客户端网络类型
 * @method void setNetwork(string $Network) 设置客户端网络类型
 * @method string getPlatform() 获取客户端平台，ios/android/h5
 * @method void setPlatform(string $Platform) 设置客户端平台，ios/android/h5
 * @method string getAppVersion() 获取客户端app版本
 * @method void setAppVersion(string $AppVersion) 设置客户端app版本
 * @method string getOsVersion() 获取操作系统版本
 * @method void setOsVersion(string $OsVersion) 设置操作系统版本
 * @method string getDeviceModel() 获取机型
 * @method void setDeviceModel(string $DeviceModel) 设置机型
 * @method string getExtension() 获取json字符串，用于行为数据的扩展
 * @method void setExtension(string $Extension) 设置json字符串，用于行为数据的扩展
 */
class DocBehavior extends AbstractModel
{
    /**
     * @var string 内容唯一ID，如 2824324234
     */
    public $ItemId;

    /**
     * @var integer 行为类型
     */
    public $BehaviorType;

    /**
     * @var string 行为值
     */
    public $BehaviorValue;

    /**
     * @var integer 行为时间戳： 秒级时间戳（默认为当前时间）,不能延迟太久，尽量实时上报，否则会影响推荐结果的准确性。
     */
    public $BehaviorTimestamp;

    /**
     * @var string 场景id，在控制台创建场景后获取。
     */
    public $SceneId;

    /**
     * @var array 用户id列表
     */
    public $UserIdList;

    /**
     * @var string 会话id，使用获取推荐结果中返回的RecTraceId填入。<br>注意：如果和在线推荐请求中的traceId不同，会影响行为特征归因，影响推荐算法效果
     */
    public $RecTraceId;

    /**
     * @var string 算法来源：用来区分行为来源于哪个算法。值为**business，tencent，other** 三者之一<br>● business 表示业务自己的算法对照组<br>● tencent 为腾讯算法<br>● other 为其他算法
     */
    public $Source;

    /**
     * @var integer 物料类型
     */
    public $ItemType;

    /**
     * @var string 微信开放平台上查看appId
     */
    public $AppId;

    /**
     * @var integer 回传video_over事件的时候，回传的用户播放视频的总时长（真正播放的，拖动不算，单位为秒）
     */
    public $VideoPlayDuration;

    /**
     * @var string 来源物料内容：用来标识在指定内容页面产生的行为，如需要统计用户在A内容详情页里，对推荐内容B点击等行为，则ReferrerItemId代表内容A，ItemId代表内容B
     */
    public $ReferrerItemId;

    /**
     * @var string 国家，统一用简写，比如中国则填写CN
     */
    public $Country;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 区县
     */
    public $District;

    /**
     * @var string 客户端ip
     */
    public $IP;

    /**
     * @var string 客户端网络类型
     */
    public $Network;

    /**
     * @var string 客户端平台，ios/android/h5
     */
    public $Platform;

    /**
     * @var string 客户端app版本
     */
    public $AppVersion;

    /**
     * @var string 操作系统版本
     */
    public $OsVersion;

    /**
     * @var string 机型
     */
    public $DeviceModel;

    /**
     * @var string json字符串，用于行为数据的扩展
     */
    public $Extension;

    /**
     * @param string $ItemId 内容唯一ID，如 2824324234
     * @param integer $BehaviorType 行为类型
     * @param string $BehaviorValue 行为值
     * @param integer $BehaviorTimestamp 行为时间戳： 秒级时间戳（默认为当前时间）,不能延迟太久，尽量实时上报，否则会影响推荐结果的准确性。
     * @param string $SceneId 场景id，在控制台创建场景后获取。
     * @param array $UserIdList 用户id列表
     * @param string $RecTraceId 会话id，使用获取推荐结果中返回的RecTraceId填入。<br>注意：如果和在线推荐请求中的traceId不同，会影响行为特征归因，影响推荐算法效果
     * @param string $Source 算法来源：用来区分行为来源于哪个算法。值为**business，tencent，other** 三者之一<br>● business 表示业务自己的算法对照组<br>● tencent 为腾讯算法<br>● other 为其他算法
     * @param integer $ItemType 物料类型
     * @param string $AppId 微信开放平台上查看appId
     * @param integer $VideoPlayDuration 回传video_over事件的时候，回传的用户播放视频的总时长（真正播放的，拖动不算，单位为秒）
     * @param string $ReferrerItemId 来源物料内容：用来标识在指定内容页面产生的行为，如需要统计用户在A内容详情页里，对推荐内容B点击等行为，则ReferrerItemId代表内容A，ItemId代表内容B
     * @param string $Country 国家，统一用简写，比如中国则填写CN
     * @param string $Province 省
     * @param string $City 城市
     * @param string $District 区县
     * @param string $IP 客户端ip
     * @param string $Network 客户端网络类型
     * @param string $Platform 客户端平台，ios/android/h5
     * @param string $AppVersion 客户端app版本
     * @param string $OsVersion 操作系统版本
     * @param string $DeviceModel 机型
     * @param string $Extension json字符串，用于行为数据的扩展
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("BehaviorType",$param) and $param["BehaviorType"] !== null) {
            $this->BehaviorType = $param["BehaviorType"];
        }

        if (array_key_exists("BehaviorValue",$param) and $param["BehaviorValue"] !== null) {
            $this->BehaviorValue = $param["BehaviorValue"];
        }

        if (array_key_exists("BehaviorTimestamp",$param) and $param["BehaviorTimestamp"] !== null) {
            $this->BehaviorTimestamp = $param["BehaviorTimestamp"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new UserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("RecTraceId",$param) and $param["RecTraceId"] !== null) {
            $this->RecTraceId = $param["RecTraceId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VideoPlayDuration",$param) and $param["VideoPlayDuration"] !== null) {
            $this->VideoPlayDuration = $param["VideoPlayDuration"];
        }

        if (array_key_exists("ReferrerItemId",$param) and $param["ReferrerItemId"] !== null) {
            $this->ReferrerItemId = $param["ReferrerItemId"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("DeviceModel",$param) and $param["DeviceModel"] !== null) {
            $this->DeviceModel = $param["DeviceModel"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
