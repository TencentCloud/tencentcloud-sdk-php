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
 * 推荐物料信息
 *
 * @method string getItemId() 获取内容唯一id
 * @method void setItemId(string $ItemId) 设置内容唯一id
 * @method integer getItemType() 获取内容类型
 * @method void setItemType(integer $ItemType) 设置内容类型
 * @method integer getStatus() 获取内容状态：1 - 上架， 2 - 下架
 * @method void setStatus(integer $Status) 设置内容状态：1 - 上架， 2 - 下架
 * @method integer getPublishTimestamp() 获取内容生成时间，秒级时间戳（1639624786），需大于0
 * @method void setPublishTimestamp(integer $PublishTimestamp) 设置内容生成时间，秒级时间戳（1639624786），需大于0
 * @method integer getSourceId() 获取物料来源ID
 * @method void setSourceId(integer $SourceId) 设置物料来源ID
 * @method string getTitle() 获取标题名称
 * @method void setTitle(string $Title) 设置标题名称
 * @method string getContent() 获取内容正文
 * @method void setContent(string $Content) 设置内容正文
 * @method string getAuthor() 获取作者
 * @method void setAuthor(string $Author) 设置作者
 * @method string getAuthorId() 获取作者id
 * @method void setAuthorId(string $AuthorId) 设置作者id
 * @method string getKeyword() 获取标签关键词，多个用英文分号分割
 * @method void setKeyword(string $Keyword) 设置标签关键词，多个用英文分号分割
 * @method string getDesc() 获取内容物料描述：物料的描述信息，推荐系统会对内容的描述信息，使用否LP技术，进行分词、提取关键词，作为news的特征使用。
 * @method void setDesc(string $Desc) 设置内容物料描述：物料的描述信息，推荐系统会对内容的描述信息，使用否LP技术，进行分词、提取关键词，作为news的特征使用。
 * @method array getPicUrlList() 获取图片url
 * @method void setPicUrlList(array $PicUrlList) 设置图片url
 * @method array getVideoUrlList() 获取视频url
 * @method void setVideoUrlList(array $VideoUrlList) 设置视频url
 * @method integer getVideoDuration() 获取视频时长，时间秒
 * @method void setVideoDuration(integer $VideoDuration) 设置视频时长，时间秒
 * @method integer getCategoryLevel() 获取类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配
 * @method void setCategoryLevel(integer $CategoryLevel) 设置类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配
 * @method string getCategoryPath() 获取类目路径，一级二级三级等依次用英文冒号联接，如体育：“足球:巴塞罗那”
 * @method void setCategoryPath(string $CategoryPath) 设置类目路径，一级二级三级等依次用英文冒号联接，如体育：“足球:巴塞罗那”
 * @method string getCountry() 获取国家，统一用简写，比如中国则填写CN
 * @method void setCountry(string $Country) 设置国家，统一用简写，比如中国则填写CN
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getDistrict() 获取区县
 * @method void setDistrict(string $District) 设置区县
 * @method integer getExpireTimestamp() 获取内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年
 * @method void setExpireTimestamp(integer $ExpireTimestamp) 设置内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年
 * @method string getTopic() 获取所属话题
 * @method void setTopic(string $Topic) 设置所属话题
 * @method integer getAuthorFans() 获取作者粉丝数
 * @method void setAuthorFans(integer $AuthorFans) 设置作者粉丝数
 * @method string getAuthorLevel() 获取作者评级
 * @method void setAuthorLevel(string $AuthorLevel) 设置作者评级
 * @method integer getCollectCnt() 获取内容累计收藏次数
 * @method void setCollectCnt(integer $CollectCnt) 设置内容累计收藏次数
 * @method integer getPraiseCnt() 获取内容累积点赞次数
 * @method void setPraiseCnt(integer $PraiseCnt) 设置内容累积点赞次数
 * @method integer getCommentCnt() 获取内容累计评论次数
 * @method void setCommentCnt(integer $CommentCnt) 设置内容累计评论次数
 * @method integer getShareCnt() 获取内容累计分享次数
 * @method void setShareCnt(integer $ShareCnt) 设置内容累计分享次数
 * @method integer getRewardCnt() 获取内容累积打赏数
 * @method void setRewardCnt(integer $RewardCnt) 设置内容累积打赏数
 * @method float getScore() 获取内容质量评分，类似豆瓣电影的评分，这里为100分制，比如97分，满分100分，最低0分，范围外的将会被拦截
 * @method void setScore(float $Score) 设置内容质量评分，类似豆瓣电影的评分，这里为100分制，比如97分，满分100分，最低0分，范围外的将会被拦截
 * @method array getPoolIdList() 获取内容池id，用于分内容池召回，一个内容支持指定一个或多个内容池， 内容池id不建议使用0（0表示不区分内容池）
 * @method void setPoolIdList(array $PoolIdList) 设置内容池id，用于分内容池召回，一个内容支持指定一个或多个内容池， 内容池id不建议使用0（0表示不区分内容池）
 * @method array getTagInfoList() 获取描述用户标签
 * @method void setTagInfoList(array $TagInfoList) 设置描述用户标签
 * @method string getExtension() 获取json字符串，用于物料数据的扩展
 * @method void setExtension(string $Extension) 设置json字符串，用于物料数据的扩展
 */
class DocItem extends AbstractModel
{
    /**
     * @var string 内容唯一id
     */
    public $ItemId;

    /**
     * @var integer 内容类型
     */
    public $ItemType;

    /**
     * @var integer 内容状态：1 - 上架， 2 - 下架
     */
    public $Status;

    /**
     * @var integer 内容生成时间，秒级时间戳（1639624786），需大于0
     */
    public $PublishTimestamp;

    /**
     * @var integer 物料来源ID
     */
    public $SourceId;

    /**
     * @var string 标题名称
     */
    public $Title;

    /**
     * @var string 内容正文
     */
    public $Content;

    /**
     * @var string 作者
     */
    public $Author;

    /**
     * @var string 作者id
     */
    public $AuthorId;

    /**
     * @var string 标签关键词，多个用英文分号分割
     */
    public $Keyword;

    /**
     * @var string 内容物料描述：物料的描述信息，推荐系统会对内容的描述信息，使用否LP技术，进行分词、提取关键词，作为news的特征使用。
     */
    public $Desc;

    /**
     * @var array 图片url
     */
    public $PicUrlList;

    /**
     * @var array 视频url
     */
    public $VideoUrlList;

    /**
     * @var integer 视频时长，时间秒
     */
    public $VideoDuration;

    /**
     * @var integer 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配
     */
    public $CategoryLevel;

    /**
     * @var string 类目路径，一级二级三级等依次用英文冒号联接，如体育：“足球:巴塞罗那”
     */
    public $CategoryPath;

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
     * @var integer 内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年
     */
    public $ExpireTimestamp;

    /**
     * @var string 所属话题
     */
    public $Topic;

    /**
     * @var integer 作者粉丝数
     */
    public $AuthorFans;

    /**
     * @var string 作者评级
     */
    public $AuthorLevel;

    /**
     * @var integer 内容累计收藏次数
     */
    public $CollectCnt;

    /**
     * @var integer 内容累积点赞次数
     */
    public $PraiseCnt;

    /**
     * @var integer 内容累计评论次数
     */
    public $CommentCnt;

    /**
     * @var integer 内容累计分享次数
     */
    public $ShareCnt;

    /**
     * @var integer 内容累积打赏数
     */
    public $RewardCnt;

    /**
     * @var float 内容质量评分，类似豆瓣电影的评分，这里为100分制，比如97分，满分100分，最低0分，范围外的将会被拦截
     */
    public $Score;

    /**
     * @var array 内容池id，用于分内容池召回，一个内容支持指定一个或多个内容池， 内容池id不建议使用0（0表示不区分内容池）
     */
    public $PoolIdList;

    /**
     * @var array 描述用户标签
     */
    public $TagInfoList;

    /**
     * @var string json字符串，用于物料数据的扩展
     */
    public $Extension;

    /**
     * @param string $ItemId 内容唯一id
     * @param integer $ItemType 内容类型
     * @param integer $Status 内容状态：1 - 上架， 2 - 下架
     * @param integer $PublishTimestamp 内容生成时间，秒级时间戳（1639624786），需大于0
     * @param integer $SourceId 物料来源ID
     * @param string $Title 标题名称
     * @param string $Content 内容正文
     * @param string $Author 作者
     * @param string $AuthorId 作者id
     * @param string $Keyword 标签关键词，多个用英文分号分割
     * @param string $Desc 内容物料描述：物料的描述信息，推荐系统会对内容的描述信息，使用否LP技术，进行分词、提取关键词，作为news的特征使用。
     * @param array $PicUrlList 图片url
     * @param array $VideoUrlList 视频url
     * @param integer $VideoDuration 视频时长，时间秒
     * @param integer $CategoryLevel 类目层级数，例如3级类目，则填3，和CategoryPath字段的类数据匹配
     * @param string $CategoryPath 类目路径，一级二级三级等依次用英文冒号联接，如体育：“足球:巴塞罗那”
     * @param string $Country 国家，统一用简写，比如中国则填写CN
     * @param string $Province 省
     * @param string $City 城市
     * @param string $District 区县
     * @param integer $ExpireTimestamp 内容过期时间，秒级时间戳（1639624786），如未填，则默认PublishTimestamp往后延一年
     * @param string $Topic 所属话题
     * @param integer $AuthorFans 作者粉丝数
     * @param string $AuthorLevel 作者评级
     * @param integer $CollectCnt 内容累计收藏次数
     * @param integer $PraiseCnt 内容累积点赞次数
     * @param integer $CommentCnt 内容累计评论次数
     * @param integer $ShareCnt 内容累计分享次数
     * @param integer $RewardCnt 内容累积打赏数
     * @param float $Score 内容质量评分，类似豆瓣电影的评分，这里为100分制，比如97分，满分100分，最低0分，范围外的将会被拦截
     * @param array $PoolIdList 内容池id，用于分内容池召回，一个内容支持指定一个或多个内容池， 内容池id不建议使用0（0表示不区分内容池）
     * @param array $TagInfoList 描述用户标签
     * @param string $Extension json字符串，用于物料数据的扩展
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

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("AuthorId",$param) and $param["AuthorId"] !== null) {
            $this->AuthorId = $param["AuthorId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("PicUrlList",$param) and $param["PicUrlList"] !== null) {
            $this->PicUrlList = $param["PicUrlList"];
        }

        if (array_key_exists("VideoUrlList",$param) and $param["VideoUrlList"] !== null) {
            $this->VideoUrlList = $param["VideoUrlList"];
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("CategoryLevel",$param) and $param["CategoryLevel"] !== null) {
            $this->CategoryLevel = $param["CategoryLevel"];
        }

        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = $param["CategoryPath"];
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

        if (array_key_exists("ExpireTimestamp",$param) and $param["ExpireTimestamp"] !== null) {
            $this->ExpireTimestamp = $param["ExpireTimestamp"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
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

        if (array_key_exists("PoolIdList",$param) and $param["PoolIdList"] !== null) {
            $this->PoolIdList = $param["PoolIdList"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
