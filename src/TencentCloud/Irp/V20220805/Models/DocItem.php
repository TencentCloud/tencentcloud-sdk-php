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
 * 信息流内容
 *
 * @method string getItemId() 获取内容唯一id，建议限制在128字符以内
 * @method void setItemId(string $ItemId) 设置内容唯一id，建议限制在128字符以内
 * @method string getItemType() 获取内容类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请登录控制台进入对应项目，在<b>物料管理->物料类型管理</b>中添加）
 * @method void setItemType(string $ItemType) 设置内容类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请登录控制台进入对应项目，在<b>物料管理->物料类型管理</b>中添加）
 * @method integer getStatus() 获取内容状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
 * @method void setStatus(integer $Status) 设置内容状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
 * @method integer getPublishTimestamp() 获取内容生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
 * @method void setPublishTimestamp(integer $PublishTimestamp) 设置内容生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
 * @method integer getExpireTimestamp() 获取内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，用作特征，过期则不会被推荐，<b>强烈建议</b>
 * @method void setExpireTimestamp(integer $ExpireTimestamp) 设置内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，用作特征，过期则不会被推荐，<b>强烈建议</b>
 * @method integer getCategoryLevel() 获取类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
 * @method void setCategoryLevel(integer $CategoryLevel) 设置类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
 * @method string getCategoryPath() 获取类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“足球:巴塞罗那”。<b>用于物料池管理，强烈建议</b>
 * @method void setCategoryPath(string $CategoryPath) 设置类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“足球:巴塞罗那”。<b>用于物料池管理，强烈建议</b>
 * @method string getTags() 获取内容标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method void setTags(string $Tags) 设置内容标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
 * @method string getAuthor() 获取作者名，需保证作者名唯一，若有重名需要加编号区分。<b>用于召回过滤、规则打散，强烈建议</b>
 * @method void setAuthor(string $Author) 设置作者名，需保证作者名唯一，若有重名需要加编号区分。<b>用于召回过滤、规则打散，强烈建议</b>
 * @method string getSourceId() 获取内容来源类型，客户自定义，<b>用于物料池管理</b>
 * @method void setSourceId(string $SourceId) 设置内容来源类型，客户自定义，<b>用于物料池管理</b>
 * @method string getTitle() 获取内容标题，<b>主要用于语义分析</b>
 * @method void setTitle(string $Title) 设置内容标题，<b>主要用于语义分析</b>
 * @method string getContent() 获取正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
 * @method void setContent(string $Content) 设置正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
 * @method string getContentUrl() 获取正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
 * @method void setContentUrl(string $ContentUrl) 设置正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
 * @method integer getVideoDuration() 获取视频时长，时间秒，大于等于0，小于 3600 * 10。<b>视频内容必填，其它内容非必填，用作特征</b>
 * @method void setVideoDuration(integer $VideoDuration) 设置视频时长，时间秒，大于等于0，小于 3600 * 10。<b>视频内容必填，其它内容非必填，用作特征</b>
 * @method string getCountry() 获取国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method void setCountry(string $Country) 设置国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
 * @method string getProvince() 获取省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method void setProvince(string $Province) 设置省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
 * @method string getCity() 获取城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method void setCity(string $City) 设置城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
 * @method integer getAuthorFans() 获取作者粉丝数，<b>用作特征</b>
 * @method void setAuthorFans(integer $AuthorFans) 设置作者粉丝数，<b>用作特征</b>
 * @method string getAuthorLevel() 获取作者评级，<b>用作特征</b>
 * @method void setAuthorLevel(string $AuthorLevel) 设置作者评级，<b>用作特征</b>
 * @method integer getCollectCnt() 获取内容累计收藏次数，<b>用作特征</b>
 * @method void setCollectCnt(integer $CollectCnt) 设置内容累计收藏次数，<b>用作特征</b>
 * @method integer getPraiseCnt() 获取内容累积点赞次数，<b>用作特征</b>
 * @method void setPraiseCnt(integer $PraiseCnt) 设置内容累积点赞次数，<b>用作特征</b>
 * @method integer getCommentCnt() 获取内容累计评论次数，<b>用作特征</b>
 * @method void setCommentCnt(integer $CommentCnt) 设置内容累计评论次数，<b>用作特征</b>
 * @method integer getShareCnt() 获取内容累计分享次数，<b>用作特征</b>
 * @method void setShareCnt(integer $ShareCnt) 设置内容累计分享次数，<b>用作特征</b>
 * @method integer getRewardCnt() 获取内容累积打赏数，<b>用作特征</b>
 * @method void setRewardCnt(integer $RewardCnt) 设置内容累积打赏数，<b>用作特征</b>
 * @method float getScore() 获取内容质量评分，<b>用作特征</b>
 * @method void setScore(float $Score) 设置内容质量评分，<b>用作特征</b>
 * @method string getExtension() 获取json字符串，<b>用于物料池管理的自定义扩展</b>，需要base64加密
 * @method void setExtension(string $Extension) 设置json字符串，<b>用于物料池管理的自定义扩展</b>，需要base64加密
 */
class DocItem extends AbstractModel
{
    /**
     * @var string 内容唯一id，建议限制在128字符以内
     */
    public $ItemId;

    /**
     * @var string 内容类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请登录控制台进入对应项目，在<b>物料管理->物料类型管理</b>中添加）
     */
    public $ItemType;

    /**
     * @var integer 内容状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
     */
    public $Status;

    /**
     * @var integer 内容生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
     */
    public $PublishTimestamp;

    /**
     * @var integer 内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，用作特征，过期则不会被推荐，<b>强烈建议</b>
     */
    public $ExpireTimestamp;

    /**
     * @var integer 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
     */
    public $CategoryLevel;

    /**
     * @var string 类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“足球:巴塞罗那”。<b>用于物料池管理，强烈建议</b>
     */
    public $CategoryPath;

    /**
     * @var string 内容标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     */
    public $Tags;

    /**
     * @var string 作者名，需保证作者名唯一，若有重名需要加编号区分。<b>用于召回过滤、规则打散，强烈建议</b>
     */
    public $Author;

    /**
     * @var string 内容来源类型，客户自定义，<b>用于物料池管理</b>
     */
    public $SourceId;

    /**
     * @var string 内容标题，<b>主要用于语义分析</b>
     */
    public $Title;

    /**
     * @var string 正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
     */
    public $Content;

    /**
     * @var string 正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
     */
    public $ContentUrl;

    /**
     * @var integer 视频时长，时间秒，大于等于0，小于 3600 * 10。<b>视频内容必填，其它内容非必填，用作特征</b>
     */
    public $VideoDuration;

    /**
     * @var string 国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     */
    public $Country;

    /**
     * @var string 省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     */
    public $Province;

    /**
     * @var string 城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     */
    public $City;

    /**
     * @var integer 作者粉丝数，<b>用作特征</b>
     */
    public $AuthorFans;

    /**
     * @var string 作者评级，<b>用作特征</b>
     */
    public $AuthorLevel;

    /**
     * @var integer 内容累计收藏次数，<b>用作特征</b>
     */
    public $CollectCnt;

    /**
     * @var integer 内容累积点赞次数，<b>用作特征</b>
     */
    public $PraiseCnt;

    /**
     * @var integer 内容累计评论次数，<b>用作特征</b>
     */
    public $CommentCnt;

    /**
     * @var integer 内容累计分享次数，<b>用作特征</b>
     */
    public $ShareCnt;

    /**
     * @var integer 内容累积打赏数，<b>用作特征</b>
     */
    public $RewardCnt;

    /**
     * @var float 内容质量评分，<b>用作特征</b>
     */
    public $Score;

    /**
     * @var string json字符串，<b>用于物料池管理的自定义扩展</b>，需要base64加密
     */
    public $Extension;

    /**
     * @param string $ItemId 内容唯一id，建议限制在128字符以内
     * @param string $ItemType 内容类型：<br/>● article -图文<br>● text -纯文本<br/>● video -视频<br/>● short_video -时长15秒以内的视频<br/>● mini_video -竖屏视频<br/>● image -纯图片<br/>（如当前类型不满足，请登录控制台进入对应项目，在<b>物料管理->物料类型管理</b>中添加）
     * @param integer $Status 内容状态：
● 1 - 上架 
● 2 - 下架 
Status=2的内容不会在推荐结果中出现 
需要下架内容时，把Status的值修改为2即可
     * @param integer $PublishTimestamp 内容生成时间，秒级时间戳（1639624786），需大于0，<b>用作特征和物料管理</b>
     * @param integer $ExpireTimestamp 内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年，用作特征，过期则不会被推荐，<b>强烈建议</b>
     * @param integer $CategoryLevel 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配，<b>强烈建议</b>
     * @param string $CategoryPath 类目路径，一级二级三级等依次用英文冒号联接，和CategoryLevel字段值匹配，如体育：“足球:巴塞罗那”。<b>用于物料池管理，强烈建议</b>
     * @param string $Tags 内容标签，多个标签用英文冒号联接，<b>用作特征，强烈建议</b>
     * @param string $Author 作者名，需保证作者名唯一，若有重名需要加编号区分。<b>用于召回过滤、规则打散，强烈建议</b>
     * @param string $SourceId 内容来源类型，客户自定义，<b>用于物料池管理</b>
     * @param string $Title 内容标题，<b>主要用于语义分析</b>
     * @param string $Content 正文关键片段，建议控制在500字符以内，<b>主要用于语义分析</b>
     * @param string $ContentUrl 正文详情，主要用于语义分析，当内容过大时建议用ContentUrl传递，<b>与Content可二选一</b>
     * @param integer $VideoDuration 视频时长，时间秒，大于等于0，小于 3600 * 10。<b>视频内容必填，其它内容非必填，用作特征</b>
     * @param string $Country 国家，ISO 3166-1 alpha-2编码，参考<a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">ISO 3166-1 alpha-2</a>，中国：“CN”，<b>用作特征</b>
     * @param string $Province 省份，ISO 3166-2行政区编码，如中国参考<a href="https://zh.wikipedia.org/wiki/ISO_3166-2:CN" target="_blank">ISO_3166-2:CN</a>，广东省：“CN-GD”，<b>用作特征</b>
     * @param string $City 城市地区，统一用国家最新标准地区行政编码，如：<a href="https://www.mca.gov.cn/article/sj/xzqh/2020/" target="_blank">2020年行政区编码</a>，其他国家统一用国际公认城市简称或者城市编码，<b>用作特征</b>
     * @param integer $AuthorFans 作者粉丝数，<b>用作特征</b>
     * @param string $AuthorLevel 作者评级，<b>用作特征</b>
     * @param integer $CollectCnt 内容累计收藏次数，<b>用作特征</b>
     * @param integer $PraiseCnt 内容累积点赞次数，<b>用作特征</b>
     * @param integer $CommentCnt 内容累计评论次数，<b>用作特征</b>
     * @param integer $ShareCnt 内容累计分享次数，<b>用作特征</b>
     * @param integer $RewardCnt 内容累积打赏数，<b>用作特征</b>
     * @param float $Score 内容质量评分，<b>用作特征</b>
     * @param string $Extension json字符串，<b>用于物料池管理的自定义扩展</b>，需要base64加密
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

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
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

        if (array_key_exists("CategoryLevel",$param) and $param["CategoryLevel"] !== null) {
            $this->CategoryLevel = $param["CategoryLevel"];
        }

        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = $param["CategoryPath"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentUrl",$param) and $param["ContentUrl"] !== null) {
            $this->ContentUrl = $param["ContentUrl"];
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
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

        if (array_key_exists("AuthorFans",$param) and $param["AuthorFans"] !== null) {
            $this->AuthorFans = $param["AuthorFans"];
        }

        if (array_key_exists("AuthorLevel",$param) and $param["AuthorLevel"] !== null) {
            $this->AuthorLevel = $param["AuthorLevel"];
        }

        if (array_key_exists("CollectCnt",$param) and $param["CollectCnt"] !== null) {
            $this->CollectCnt = $param["CollectCnt"];
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

        if (array_key_exists("RewardCnt",$param) and $param["RewardCnt"] !== null) {
            $this->RewardCnt = $param["RewardCnt"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
