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
namespace TencentCloud\Irp\V20220805\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息流行为
 *
 * @method string getUserId() 获取用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method void setUserId(string $UserId) 设置用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method string getItemId() 获取内容唯一id
 * @method void setItemId(string $ItemId) 设置内容唯一id
 * @method string getBehaviorType() 获取行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> 不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
 * @method void setBehaviorType(string $BehaviorType) 设置行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> 不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
 * @method string getBehaviorValue() 获取行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”
 * @method void setBehaviorValue(string $BehaviorValue) 设置行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”
 * @method integer getBehaviorTimestamp() 获取行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
 * @method void setBehaviorTimestamp(integer $BehaviorTimestamp) 设置行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
 * @method string getSceneId() 获取行为发生的场景ID，在控制台创建场景后获取
 * @method void setSceneId(string $SceneId) 设置行为发生的场景ID，在控制台创建场景后获取
 * @method string getItemTraceId() 获取推荐追踪ID，使用推荐结果中返回的ItemTraceId填入。 
注意：如果和推荐结果中的ItemTraceId不同，会影响行为特征归因，影响推荐算法效果
 * @method void setItemTraceId(string $ItemTraceId) 设置推荐追踪ID，使用推荐结果中返回的ItemTraceId填入。 
注意：如果和推荐结果中的ItemTraceId不同，会影响行为特征归因，影响推荐算法效果
 * @method string getItemType() 获取内容类型，跟内容上报类型一致，用于效果分析，不做内容校验，<b>强烈建议</b>
 * @method void setItemType(string $ItemType) 设置内容类型，跟内容上报类型一致，用于效果分析，不做内容校验，<b>强烈建议</b>
 * @method string getReferrerItemId() 获取相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
 * @method void setReferrerItemId(string $ReferrerItemId) 设置相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
 * @method array getUserIdList() 获取用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method void setUserIdList(array $UserIdList) 设置用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method string getSource() 获取算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
 * @method void setSource(string $Source) 设置算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
 * @method string getCountry() 获取行为发生时的国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method void setCountry(string $Country) 设置行为发生时的国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method string getProvince() 获取行为发生时的省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method void setProvince(string $Province) 设置行为发生时的省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method string getCity() 获取行为发生时的城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method void setCity(string $City) 设置行为发生时的城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method string getIP() 获取行为发生时的客户端ip，<b>用作特征</b>
 * @method void setIP(string $IP) 设置行为发生时的客户端ip，<b>用作特征</b>
 * @method string getNetwork() 获取行为发生时的客户端网络类型，<b>用作特征</b>
 * @method void setNetwork(string $Network) 设置行为发生时的客户端网络类型，<b>用作特征</b>
 * @method string getPlatform() 获取行为发生时的客户端平台，ios/android/h5，<b>用作特征</b>
 * @method void setPlatform(string $Platform) 设置行为发生时的客户端平台，ios/android/h5，<b>用作特征</b>
 * @method string getAppVersion() 获取行为发生时的客户端app版本，<b>用作特征</b>
 * @method void setAppVersion(string $AppVersion) 设置行为发生时的客户端app版本，<b>用作特征</b>
 * @method string getOsVersion() 获取行为发生时的操作系统版本，<b>用作特征</b>
 * @method void setOsVersion(string $OsVersion) 设置行为发生时的操作系统版本，<b>用作特征</b>
 * @method string getDeviceModel() 获取行为发生时的机型，<b>用作特征</b>
 * @method void setDeviceModel(string $DeviceModel) 设置行为发生时的机型，<b>用作特征</b>
 * @method string getExtension() 获取json字符串，<b>用于行为数据的扩展</b>，需要base64加密
 * @method void setExtension(string $Extension) 设置json字符串，<b>用于行为数据的扩展</b>，需要base64加密
 */
class FeedBehaviorInfo extends AbstractModel
{
    /**
     * @var string 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     */
    public $UserId;

    /**
     * @var string 内容唯一id
     */
    public $ItemId;

    /**
     * @var string 行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> 不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
     */
    public $BehaviorType;

    /**
     * @var string 行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”
     */
    public $BehaviorValue;

    /**
     * @var integer 行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
     */
    public $BehaviorTimestamp;

    /**
     * @var string 行为发生的场景ID，在控制台创建场景后获取
     */
    public $SceneId;

    /**
     * @var string 推荐追踪ID，使用推荐结果中返回的ItemTraceId填入。 
注意：如果和推荐结果中的ItemTraceId不同，会影响行为特征归因，影响推荐算法效果
     */
    public $ItemTraceId;

    /**
     * @var string 内容类型，跟内容上报类型一致，用于效果分析，不做内容校验，<b>强烈建议</b>
     */
    public $ItemType;

    /**
     * @var string 相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
     */
    public $ReferrerItemId;

    /**
     * @var array 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     */
    public $UserIdList;

    /**
     * @var string 算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
     */
    public $Source;

    /**
     * @var string 行为发生时的国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     */
    public $Country;

    /**
     * @var string 行为发生时的省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     */
    public $Province;

    /**
     * @var string 行为发生时的城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     */
    public $City;

    /**
     * @var string 行为发生时的客户端ip，<b>用作特征</b>
     */
    public $IP;

    /**
     * @var string 行为发生时的客户端网络类型，<b>用作特征</b>
     */
    public $Network;

    /**
     * @var string 行为发生时的客户端平台，ios/android/h5，<b>用作特征</b>
     */
    public $Platform;

    /**
     * @var string 行为发生时的客户端app版本，<b>用作特征</b>
     */
    public $AppVersion;

    /**
     * @var string 行为发生时的操作系统版本，<b>用作特征</b>
     */
    public $OsVersion;

    /**
     * @var string 行为发生时的机型，<b>用作特征</b>
     */
    public $DeviceModel;

    /**
     * @var string json字符串，<b>用于行为数据的扩展</b>，需要base64加密
     */
    public $Extension;

    /**
     * @param string $UserId 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     * @param string $ItemId 内容唯一id
     * @param string $BehaviorType 行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> 不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
     * @param string $BehaviorValue 行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”
     * @param integer $BehaviorTimestamp 行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
     * @param string $SceneId 行为发生的场景ID，在控制台创建场景后获取
     * @param string $ItemTraceId 推荐追踪ID，使用推荐结果中返回的ItemTraceId填入。 
注意：如果和推荐结果中的ItemTraceId不同，会影响行为特征归因，影响推荐算法效果
     * @param string $ItemType 内容类型，跟内容上报类型一致，用于效果分析，不做内容校验，<b>强烈建议</b>
     * @param string $ReferrerItemId 相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
     * @param array $UserIdList 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     * @param string $Source 算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
     * @param string $Country 行为发生时的国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     * @param string $Province 行为发生时的省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     * @param string $City 行为发生时的城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     * @param string $IP 行为发生时的客户端ip，<b>用作特征</b>
     * @param string $Network 行为发生时的客户端网络类型，<b>用作特征</b>
     * @param string $Platform 行为发生时的客户端平台，ios/android/h5，<b>用作特征</b>
     * @param string $AppVersion 行为发生时的客户端app版本，<b>用作特征</b>
     * @param string $OsVersion 行为发生时的操作系统版本，<b>用作特征</b>
     * @param string $DeviceModel 行为发生时的机型，<b>用作特征</b>
     * @param string $Extension json字符串，<b>用于行为数据的扩展</b>，需要base64加密
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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

        if (array_key_exists("ItemTraceId",$param) and $param["ItemTraceId"] !== null) {
            $this->ItemTraceId = $param["ItemTraceId"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("ReferrerItemId",$param) and $param["ReferrerItemId"] !== null) {
            $this->ReferrerItemId = $param["ReferrerItemId"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new UserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
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
