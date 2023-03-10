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
 * 电商行为
 *
 * @method string getUserId() 获取用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method void setUserId(string $UserId) 设置用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
 * @method string getGoodsId() 获取商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度
 * @method void setGoodsId(string $GoodsId) 设置商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度
 * @method string getBehaviorType() 获取行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> ●  order - 下单<br/> ●  buy - 购买成功<br/> ●  addcart - 加入购物车<br/>   
不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
 * @method void setBehaviorType(string $BehaviorType) 设置行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> ●  order - 下单<br/> ●  buy - 购买成功<br/> ●  addcart - 加入购物车<br/>   
不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
 * @method string getBehaviorValue() 获取行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”<br/> ●  order - 下单，固定填1<br/> ●  buy - 购买成功，固定填1<br/> ●  addcart - 加入购物车，固定填1
 * @method void setBehaviorValue(string $BehaviorValue) 设置行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”<br/> ●  order - 下单，固定填1<br/> ●  buy - 购买成功，固定填1<br/> ●  addcart - 加入购物车，固定填1
 * @method integer getBehaviorTimestamp() 获取行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
 * @method void setBehaviorTimestamp(integer $BehaviorTimestamp) 设置行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
 * @method string getSceneId() 获取行为发生的场景ID，在控制台创建场景后获取
 * @method void setSceneId(string $SceneId) 设置行为发生的场景ID，在控制台创建场景后获取
 * @method string getSource() 获取算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
 * @method void setSource(string $Source) 设置算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
 * @method string getPage() 获取标识行为发生在app内哪个页面，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如首页，发现页，用户中心等
<b>用作上下文特征，刻画不同场景用户行为分布的差异</b>
 * @method void setPage(string $Page) 设置标识行为发生在app内哪个页面，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如首页，发现页，用户中心等
<b>用作上下文特征，刻画不同场景用户行为分布的差异</b>
 * @method string getModule() 获取标识行为发生在页面的哪一区块，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如横幅、广告位、猜你喜欢等
<b>用作上下文特征，刻画不同模块用户行为分布的差异</b>
 * @method void setModule(string $Module) 设置标识行为发生在页面的哪一区块，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如横幅、广告位、猜你喜欢等
<b>用作上下文特征，刻画不同模块用户行为分布的差异</b>
 * @method string getGoodsTraceId() 获取推荐追踪ID，使用推荐结果中返回的GoodsTraceId填入。 
注意：如果和推荐结果中的GoodsTraceId不同，会影响行为特征归因，影响推荐算法效果。<b>强烈建议</b>
 * @method void setGoodsTraceId(string $GoodsTraceId) 设置推荐追踪ID，使用推荐结果中返回的GoodsTraceId填入。 
注意：如果和推荐结果中的GoodsTraceId不同，会影响行为特征归因，影响推荐算法效果。<b>强烈建议</b>
 * @method string getReferrerGoodsId() 获取相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
 * @method void setReferrerGoodsId(string $ReferrerGoodsId) 设置相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
 * @method integer getOrderGoodsCnt() 获取订单商品购买个数，当behaviorType=order，buy或addcart时有值，<b>用作特征</b>
 * @method void setOrderGoodsCnt(integer $OrderGoodsCnt) 设置订单商品购买个数，当behaviorType=order，buy或addcart时有值，<b>用作特征</b>
 * @method float getOrderAmount() 获取订单总金额，当behaviorType=order或buy时有值（单位：元，统一货币体系，如统一为RMB，美元等），<b>用作特征</b>
 * @method void setOrderAmount(float $OrderAmount) 设置订单总金额，当behaviorType=order或buy时有值（单位：元，统一货币体系，如统一为RMB，美元等），<b>用作特征</b>
 * @method array getUserIdList() 获取用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method void setUserIdList(array $UserIdList) 设置用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
 * @method UserPortraitInfo getUserPortraitInfo() 获取行为发生时用户基础特征信息，<b>用作特征</b>
 * @method void setUserPortraitInfo(UserPortraitInfo $UserPortraitInfo) 设置行为发生时用户基础特征信息，<b>用作特征</b>
 * @method integer getPosition() 获取标识行为发生在模块内的具体位置，如1、2、...
<b>用作上下文特征，刻画不同位置用户行为分布的差异</b>
 * @method void setPosition(integer $Position) 设置标识行为发生在模块内的具体位置，如1、2、...
<b>用作上下文特征，刻画不同位置用户行为分布的差异</b>
 * @method string getExtension() 获取json字符串，<b>用于行为数据的扩展</b>
 * @method void setExtension(string $Extension) 设置json字符串，<b>用于行为数据的扩展</b>
 */
class GoodsBehaviorInfo extends AbstractModel
{
    /**
     * @var string 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     */
    public $UserId;

    /**
     * @var string 商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度
     */
    public $GoodsId;

    /**
     * @var string 行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> ●  order - 下单<br/> ●  buy - 购买成功<br/> ●  addcart - 加入购物车<br/>   
不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
     */
    public $BehaviorType;

    /**
     * @var string 行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”<br/> ●  order - 下单，固定填1<br/> ●  buy - 购买成功，固定填1<br/> ●  addcart - 加入购物车，固定填1
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
     * @var string 算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
     */
    public $Source;

    /**
     * @var string 标识行为发生在app内哪个页面，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如首页，发现页，用户中心等
<b>用作上下文特征，刻画不同场景用户行为分布的差异</b>
     */
    public $Page;

    /**
     * @var string 标识行为发生在页面的哪一区块，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如横幅、广告位、猜你喜欢等
<b>用作上下文特征，刻画不同模块用户行为分布的差异</b>
     */
    public $Module;

    /**
     * @var string 推荐追踪ID，使用推荐结果中返回的GoodsTraceId填入。 
注意：如果和推荐结果中的GoodsTraceId不同，会影响行为特征归因，影响推荐算法效果。<b>强烈建议</b>
     */
    public $GoodsTraceId;

    /**
     * @var string 相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
     */
    public $ReferrerGoodsId;

    /**
     * @var integer 订单商品购买个数，当behaviorType=order，buy或addcart时有值，<b>用作特征</b>
     */
    public $OrderGoodsCnt;

    /**
     * @var float 订单总金额，当behaviorType=order或buy时有值（单位：元，统一货币体系，如统一为RMB，美元等），<b>用作特征</b>
     */
    public $OrderAmount;

    /**
     * @var array 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     */
    public $UserIdList;

    /**
     * @var UserPortraitInfo 行为发生时用户基础特征信息，<b>用作特征</b>
     */
    public $UserPortraitInfo;

    /**
     * @var integer 标识行为发生在模块内的具体位置，如1、2、...
<b>用作上下文特征，刻画不同位置用户行为分布的差异</b>
     */
    public $Position;

    /**
     * @var string json字符串，<b>用于行为数据的扩展</b>
     */
    public $Extension;

    /**
     * @param string $UserId 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识
     * @param string $GoodsId 商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度
     * @param string $BehaviorType 行为类型：<br> ● expose - 曝光，<b>必须</b><br> ● click - 点击，<b>必须</b><br/>  ● stay - 详情页停留时长，<b>强烈建议</b><br/>  ● videoover - 视频播放时长，<b>强烈建议</b><br/> ●  like - 点赞&喜欢，<b>正效果</b><br/> ● collect - 收藏，<b>正效果</b><br/> ●  share - 转发&分享，<b>正效果</b><br/> ● reward - 打赏，<b>正效果</b><br/> ● unlike - 踩&不喜欢，<b>负效果</b><br/> ●  comment - 评论<br/> ●  order - 下单<br/> ●  buy - 购买成功<br/> ●  addcart - 加入购物车<br/>   
不支持的行为类型，可以映射到未被使用的其他行为类型。如实际业务数据中有私信行为，没有收藏行为，可以将私信行为映射到收藏行为
     * @param string $BehaviorValue 行为类型对应的行为值：<br/> ● expose - 曝光，固定填1<br/> ● click - 点击，固定填1<br/>  ● stay - 详情页停留时长，填停留秒数，取值[1-86400]<br/>  ● videoover - 视频播放时长，填播放结束的秒数，取值[1-86400]<br/> ●  like - 点赞&喜欢，固定填1<br/> ● collect - 收藏，固定填1<br/> ●  share - 转发&分享，固定填1<br/> ● reward - 打赏，填打赏金额，没有则填1<br/> ● unlike - 踩&不喜欢，填不喜欢的原因，没有则填1<br/> ●  comment - 评论，填评论内容，如“上海加油”<br/> ●  order - 下单，固定填1<br/> ●  buy - 购买成功，固定填1<br/> ●  addcart - 加入购物车，固定填1
     * @param integer $BehaviorTimestamp 行为发生的时间戳： 秒级时间戳，尽量实时上报，最长不超过半小时否则会影响推荐结果的准确性
     * @param string $SceneId 行为发生的场景ID，在控制台创建场景后获取
     * @param string $Source 算法来源： <br>● business 业务自己的算法对照组<br/> ● tencent 腾讯算法<br/> ● other 其他算法<br/>默认为tencent，区分行为来源于哪个算法，<b>用于Poc阶段的效果对比验证</b>
     * @param string $Page 标识行为发生在app内哪个页面，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如首页，发现页，用户中心等
<b>用作上下文特征，刻画不同场景用户行为分布的差异</b>
     * @param string $Module 标识行为发生在页面的哪一区块，取值客户自定，可以是明文或id，建议传明文便于理解、分析，如横幅、广告位、猜你喜欢等
<b>用作上下文特征，刻画不同模块用户行为分布的差异</b>
     * @param string $GoodsTraceId 推荐追踪ID，使用推荐结果中返回的GoodsTraceId填入。 
注意：如果和推荐结果中的GoodsTraceId不同，会影响行为特征归因，影响推荐算法效果。<b>强烈建议</b>
     * @param string $ReferrerGoodsId 相关推荐场景点击进入详情页的内容id，该字段用来注明行为发生于哪个内容的详情页推荐中，<b>相关推荐场景强烈建议</b>
     * @param integer $OrderGoodsCnt 订单商品购买个数，当behaviorType=order，buy或addcart时有值，<b>用作特征</b>
     * @param float $OrderAmount 订单总金额，当behaviorType=order或buy时有值（单位：元，统一货币体系，如统一为RMB，美元等），<b>用作特征</b>
     * @param array $UserIdList 用户设备ID数组，可传入用户的多个类型ID，详见UserIdInfo结构体，建议补齐，<b>用于构建用户画像信息</b>
     * @param UserPortraitInfo $UserPortraitInfo 行为发生时用户基础特征信息，<b>用作特征</b>
     * @param integer $Position 标识行为发生在模块内的具体位置，如1、2、...
<b>用作上下文特征，刻画不同位置用户行为分布的差异</b>
     * @param string $Extension json字符串，<b>用于行为数据的扩展</b>
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

        if (array_key_exists("GoodsId",$param) and $param["GoodsId"] !== null) {
            $this->GoodsId = $param["GoodsId"];
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GoodsTraceId",$param) and $param["GoodsTraceId"] !== null) {
            $this->GoodsTraceId = $param["GoodsTraceId"];
        }

        if (array_key_exists("ReferrerGoodsId",$param) and $param["ReferrerGoodsId"] !== null) {
            $this->ReferrerGoodsId = $param["ReferrerGoodsId"];
        }

        if (array_key_exists("OrderGoodsCnt",$param) and $param["OrderGoodsCnt"] !== null) {
            $this->OrderGoodsCnt = $param["OrderGoodsCnt"];
        }

        if (array_key_exists("OrderAmount",$param) and $param["OrderAmount"] !== null) {
            $this->OrderAmount = $param["OrderAmount"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new StrUserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("UserPortraitInfo",$param) and $param["UserPortraitInfo"] !== null) {
            $this->UserPortraitInfo = new UserPortraitInfo();
            $this->UserPortraitInfo->deserialize($param["UserPortraitInfo"]);
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
