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
 * 电商物料内容
 *
 * @method string getGoodsId() 获取商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度。建议限制在128字符以内
 * @method void setGoodsId(string $GoodsId) 设置商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度。建议限制在128字符以内
 * @method string getGoodsType() 获取商品物料展示类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决方案）
 * @method void setGoodsType(string $GoodsType) 设置商品物料展示类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决方案）
 * @method integer getStatus() 获取商品状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
 * @method void setStatus(integer $Status) 设置商品状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
 * @method integer getPublishTimestamp() 获取商品生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
 * @method void setPublishTimestamp(integer $PublishTimestamp) 设置商品生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
 * @method integer getExpireTimestamp() 获取商品过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，<b>用作特征</b>，过期则不会被推荐，<b>强烈建议</b>
 * @method void setExpireTimestamp(integer $ExpireTimestamp) 设置商品过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，<b>用作特征</b>，过期则不会被推荐，<b>强烈建议</b>
 * @method string getSpuId() 获取spu((Standard Product Unit))维度id，商品聚合信息的最小单位，<b>强烈建议</b>
 * @method void setSpuId(string $SpuId) 设置spu((Standard Product Unit))维度id，商品聚合信息的最小单位，<b>强烈建议</b>
 * @method integer getCategoryLevel() 获取类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
 * @method void setCategoryLevel(integer $CategoryLevel) 设置类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
 * @method string getCategoryPath() 获取类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“女装:裙子:半身裙”。<b>用于物料池管理，强烈建议</b>
 * @method void setCategoryPath(string $CategoryPath) 设置类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“女装:裙子:半身裙”。<b>用于物料池管理，强烈建议</b>
 * @method string getTitle() 获取商品标题，<b>主要用于语义分析</b>，<b>强烈建议</b>
 * @method void setTitle(string $Title) 设置商品标题，<b>主要用于语义分析</b>，<b>强烈建议</b>
 * @method string getTags() 获取商品标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method void setTags(string $Tags) 设置商品标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method string getBrand() 获取商品对应的品牌，取值用户自定义，可以是品牌id或品牌明文，<b>用作特征以及打散/过滤规则，强烈建议</b>
 * @method void setBrand(string $Brand) 设置商品对应的品牌，取值用户自定义，可以是品牌id或品牌明文，<b>用作特征以及打散/过滤规则，强烈建议</b>
 * @method string getShopId() 获取商品所属店铺ID，取值客户自定义，<b>用作特征，强烈建议</b>
 * @method void setShopId(string $ShopId) 设置商品所属店铺ID，取值客户自定义，<b>用作特征，强烈建议</b>
 * @method float getOrgPrice() 获取商品原始价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
 * @method void setOrgPrice(float $OrgPrice) 设置商品原始价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
 * @method float getCurPrice() 获取商品当前价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
 * @method void setCurPrice(float $CurPrice) 设置商品当前价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
 * @method string getSourceId() 获取商品来源类型，客户自定义，<b>用于物料池管理</b>
 * @method void setSourceId(string $SourceId) 设置商品来源类型，客户自定义，<b>用于物料池管理</b>
 * @method string getContent() 获取商品正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
 * @method void setContent(string $Content) 设置商品正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
 * @method string getContentUrl() 获取商品正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
 * @method void setContentUrl(string $ContentUrl) 设置商品正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
 * @method array getPicUrlList() 获取商品封面url，不超过10个，<b>用作特征</b>
 * @method void setPicUrlList(array $PicUrlList) 设置商品封面url，不超过10个，<b>用作特征</b>
 * @method string getCountry() 获取卖家所在国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method void setCountry(string $Country) 设置卖家所在国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method string getProvince() 获取卖家所在省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method void setProvince(string $Province) 设置卖家所在省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method string getCity() 获取卖家所在城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method void setCity(string $City) 设置卖家所在城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method integer getFreeShipping() 获取商品是否包邮；1:包邮；2:不包邮；3:满足条件包邮，<b>用作特征</b>
 * @method void setFreeShipping(integer $FreeShipping) 设置商品是否包邮；1:包邮；2:不包邮；3:满足条件包邮，<b>用作特征</b>
 * @method float getShippingPrice() 获取商品邮费（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征</b>
 * @method void setShippingPrice(float $ShippingPrice) 设置商品邮费（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征</b>
 * @method integer getPraiseCnt() 获取商品累计好评次数，<b>用作特征</b>
 * @method void setPraiseCnt(integer $PraiseCnt) 设置商品累计好评次数，<b>用作特征</b>
 * @method integer getCommentCnt() 获取商品累计评论次数，<b>用作特征</b>
 * @method void setCommentCnt(integer $CommentCnt) 设置商品累计评论次数，<b>用作特征</b>
 * @method integer getShareCnt() 获取商品累计分享次数，<b>用作特征</b>
 * @method void setShareCnt(integer $ShareCnt) 设置商品累计分享次数，<b>用作特征</b>
 * @method integer getCollectCnt() 获取商品累计收藏次数，<b>用作特征</b>
 * @method void setCollectCnt(integer $CollectCnt) 设置商品累计收藏次数，<b>用作特征</b>
 * @method integer getOrderCnt() 获取商品累积成交次数，<b>用作特征</b>
 * @method void setOrderCnt(integer $OrderCnt) 设置商品累积成交次数，<b>用作特征</b>
 * @method float getScore() 获取商品平均客户评分，取值范围用户自定，<b>用作特征</b>
 * @method void setScore(float $Score) 设置商品平均客户评分，取值范围用户自定，<b>用作特征</b>
 * @method string getExtension() 获取json字符串，<b>用于物料池管理的自定义扩展</b>
 * @method void setExtension(string $Extension) 设置json字符串，<b>用于物料池管理的自定义扩展</b>
 */
class GoodsInfo extends AbstractModel
{
    /**
     * @var string 商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度。建议限制在128字符以内
     */
    public $GoodsId;

    /**
     * @var string 商品物料展示类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决方案）
     */
    public $GoodsType;

    /**
     * @var integer 商品状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
     */
    public $Status;

    /**
     * @var integer 商品生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
     */
    public $PublishTimestamp;

    /**
     * @var integer 商品过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，<b>用作特征</b>，过期则不会被推荐，<b>强烈建议</b>
     */
    public $ExpireTimestamp;

    /**
     * @var string spu((Standard Product Unit))维度id，商品聚合信息的最小单位，<b>强烈建议</b>
     */
    public $SpuId;

    /**
     * @var integer 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
     */
    public $CategoryLevel;

    /**
     * @var string 类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“女装:裙子:半身裙”。<b>用于物料池管理，强烈建议</b>
     */
    public $CategoryPath;

    /**
     * @var string 商品标题，<b>主要用于语义分析</b>，<b>强烈建议</b>
     */
    public $Title;

    /**
     * @var string 商品标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     */
    public $Tags;

    /**
     * @var string 商品对应的品牌，取值用户自定义，可以是品牌id或品牌明文，<b>用作特征以及打散/过滤规则，强烈建议</b>
     */
    public $Brand;

    /**
     * @var string 商品所属店铺ID，取值客户自定义，<b>用作特征，强烈建议</b>
     */
    public $ShopId;

    /**
     * @var float 商品原始价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
     */
    public $OrgPrice;

    /**
     * @var float 商品当前价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
     */
    public $CurPrice;

    /**
     * @var string 商品来源类型，客户自定义，<b>用于物料池管理</b>
     */
    public $SourceId;

    /**
     * @var string 商品正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
     */
    public $Content;

    /**
     * @var string 商品正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
     */
    public $ContentUrl;

    /**
     * @var array 商品封面url，不超过10个，<b>用作特征</b>
     */
    public $PicUrlList;

    /**
     * @var string 卖家所在国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     */
    public $Country;

    /**
     * @var string 卖家所在省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     */
    public $Province;

    /**
     * @var string 卖家所在城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     */
    public $City;

    /**
     * @var integer 商品是否包邮；1:包邮；2:不包邮；3:满足条件包邮，<b>用作特征</b>
     */
    public $FreeShipping;

    /**
     * @var float 商品邮费（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征</b>
     */
    public $ShippingPrice;

    /**
     * @var integer 商品累计好评次数，<b>用作特征</b>
     */
    public $PraiseCnt;

    /**
     * @var integer 商品累计评论次数，<b>用作特征</b>
     */
    public $CommentCnt;

    /**
     * @var integer 商品累计分享次数，<b>用作特征</b>
     */
    public $ShareCnt;

    /**
     * @var integer 商品累计收藏次数，<b>用作特征</b>
     */
    public $CollectCnt;

    /**
     * @var integer 商品累积成交次数，<b>用作特征</b>
     */
    public $OrderCnt;

    /**
     * @var float 商品平均客户评分，取值范围用户自定，<b>用作特征</b>
     */
    public $Score;

    /**
     * @var string json字符串，<b>用于物料池管理的自定义扩展</b>
     */
    public $Extension;

    /**
     * @param string $GoodsId 商品唯一ID，skuId或spuId，客户根据需求自行决定商品主键粒度。建议限制在128字符以内
     * @param string $GoodsType 商品物料展示类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决方案）
     * @param integer $Status 商品状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
     * @param integer $PublishTimestamp 商品生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
     * @param integer $ExpireTimestamp 商品过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，<b>用作特征</b>，过期则不会被推荐，<b>强烈建议</b>
     * @param string $SpuId spu((Standard Product Unit))维度id，商品聚合信息的最小单位，<b>强烈建议</b>
     * @param integer $CategoryLevel 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
     * @param string $CategoryPath 类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“女装:裙子:半身裙”。<b>用于物料池管理，强烈建议</b>
     * @param string $Title 商品标题，<b>主要用于语义分析</b>，<b>强烈建议</b>
     * @param string $Tags 商品标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     * @param string $Brand 商品对应的品牌，取值用户自定义，可以是品牌id或品牌明文，<b>用作特征以及打散/过滤规则，强烈建议</b>
     * @param string $ShopId 商品所属店铺ID，取值客户自定义，<b>用作特征，强烈建议</b>
     * @param float $OrgPrice 商品原始价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
     * @param float $CurPrice 商品当前价格（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征，强烈建议</b>
     * @param string $SourceId 商品来源类型，客户自定义，<b>用于物料池管理</b>
     * @param string $Content 商品正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
     * @param string $ContentUrl 商品正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
     * @param array $PicUrlList 商品封面url，不超过10个，<b>用作特征</b>
     * @param string $Country 卖家所在国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     * @param string $Province 卖家所在省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     * @param string $City 卖家所在城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     * @param integer $FreeShipping 商品是否包邮；1:包邮；2:不包邮；3:满足条件包邮，<b>用作特征</b>
     * @param float $ShippingPrice 商品邮费（单位：元，统一货币体系，如统一为RMB或美元等），<b>用作特征</b>
     * @param integer $PraiseCnt 商品累计好评次数，<b>用作特征</b>
     * @param integer $CommentCnt 商品累计评论次数，<b>用作特征</b>
     * @param integer $ShareCnt 商品累计分享次数，<b>用作特征</b>
     * @param integer $CollectCnt 商品累计收藏次数，<b>用作特征</b>
     * @param integer $OrderCnt 商品累积成交次数，<b>用作特征</b>
     * @param float $Score 商品平均客户评分，取值范围用户自定，<b>用作特征</b>
     * @param string $Extension json字符串，<b>用于物料池管理的自定义扩展</b>
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
        if (array_key_exists("GoodsId",$param) and $param["GoodsId"] !== null) {
            $this->GoodsId = $param["GoodsId"];
        }

        if (array_key_exists("GoodsType",$param) and $param["GoodsType"] !== null) {
            $this->GoodsType = $param["GoodsType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublishTimestamp",$param) and $param["PublishTimestamp"] !== null) {
            $this->PublishTimestamp = $param["PublishTimestamp"];
        }

        if (array_key_exists("ExpireTimestamp",$param) and $param["ExpireTimestamp"] !== null) {
            $this->ExpireTimestamp = $param["ExpireTimestamp"];
        }

        if (array_key_exists("SpuId",$param) and $param["SpuId"] !== null) {
            $this->SpuId = $param["SpuId"];
        }

        if (array_key_exists("CategoryLevel",$param) and $param["CategoryLevel"] !== null) {
            $this->CategoryLevel = $param["CategoryLevel"];
        }

        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = $param["CategoryPath"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("OrgPrice",$param) and $param["OrgPrice"] !== null) {
            $this->OrgPrice = $param["OrgPrice"];
        }

        if (array_key_exists("CurPrice",$param) and $param["CurPrice"] !== null) {
            $this->CurPrice = $param["CurPrice"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentUrl",$param) and $param["ContentUrl"] !== null) {
            $this->ContentUrl = $param["ContentUrl"];
        }

        if (array_key_exists("PicUrlList",$param) and $param["PicUrlList"] !== null) {
            $this->PicUrlList = $param["PicUrlList"];
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

        if (array_key_exists("FreeShipping",$param) and $param["FreeShipping"] !== null) {
            $this->FreeShipping = $param["FreeShipping"];
        }

        if (array_key_exists("ShippingPrice",$param) and $param["ShippingPrice"] !== null) {
            $this->ShippingPrice = $param["ShippingPrice"];
        }

        if (array_key_exists("PraiseCnt",$param) and $param["PraiseCnt"] !== null) {
            $this->PraiseCnt = $param["PraiseCnt"];
        }

        if (array_key_exists("CommentCnt",$param) and $param["CommentCnt"] !== null) {
            $this->CommentCnt = $param["CommentCnt"];
        }

        if (array_key_exists("ShareCnt",$param) and $param["ShareCnt"] !== null) {
            $this->ShareCnt = $param["ShareCnt"];
        }

        if (array_key_exists("CollectCnt",$param) and $param["CollectCnt"] !== null) {
            $this->CollectCnt = $param["CollectCnt"];
        }

        if (array_key_exists("OrderCnt",$param) and $param["OrderCnt"] !== null) {
            $this->OrderCnt = $param["OrderCnt"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
