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
 * DescribeGoodsRecommend请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，在控制台获取
 * @method void setInstanceId(string $InstanceId) 设置实例ID，在控制台获取
 * @method string getSceneId() 获取场景ID，在控制台创建场景后获取
 * @method void setSceneId(string $SceneId) 设置场景ID，在控制台创建场景后获取
 * @method string getUserId() 获取用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识，需和行为数据上报接口中的UserId一致，否则影响特征关联
 * @method void setUserId(string $UserId) 设置用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识，需和行为数据上报接口中的UserId一致，否则影响特征关联
 * @method array getUserIdList() 获取用户设备ID数组，可传入用户的多个类型ID，用于关联画像信息
 * @method void setUserIdList(array $UserIdList) 设置用户设备ID数组，可传入用户的多个类型ID，用于关联画像信息
 * @method integer getGoodsCnt() 获取推荐返回数量，默认10个，最多支持50个的内容返回。如果有更多数量要求，<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决
 * @method void setGoodsCnt(integer $GoodsCnt) 设置推荐返回数量，默认10个，最多支持50个的内容返回。如果有更多数量要求，<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决
 * @method string getCurrentGoodsId() 获取当场景是相关推荐时该值必填，场景是非相关推荐时该值无效
 * @method void setCurrentGoodsId(string $CurrentGoodsId) 设置当场景是相关推荐时该值必填，场景是非相关推荐时该值无效
 * @method UserPortraitInfo getUserPortraitInfo() 获取用户的实时特征信息，用作特征
 * @method void setUserPortraitInfo(UserPortraitInfo $UserPortraitInfo) 设置用户的实时特征信息，用作特征
 * @method array getBlackGoodsList() 获取本次请求针对该用户需要过滤的物品列表(不超过100个)
 * @method void setBlackGoodsList(array $BlackGoodsList) 设置本次请求针对该用户需要过滤的物品列表(不超过100个)
 * @method string getExtension() 获取json字符串，扩展字段
 * @method void setExtension(string $Extension) 设置json字符串，扩展字段
 */
class DescribeGoodsRecommendRequest extends AbstractModel
{
    /**
     * @var string 实例ID，在控制台获取
     */
    public $InstanceId;

    /**
     * @var string 场景ID，在控制台创建场景后获取
     */
    public $SceneId;

    /**
     * @var string 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识，需和行为数据上报接口中的UserId一致，否则影响特征关联
     */
    public $UserId;

    /**
     * @var array 用户设备ID数组，可传入用户的多个类型ID，用于关联画像信息
     */
    public $UserIdList;

    /**
     * @var integer 推荐返回数量，默认10个，最多支持50个的内容返回。如果有更多数量要求，<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决
     */
    public $GoodsCnt;

    /**
     * @var string 当场景是相关推荐时该值必填，场景是非相关推荐时该值无效
     */
    public $CurrentGoodsId;

    /**
     * @var UserPortraitInfo 用户的实时特征信息，用作特征
     */
    public $UserPortraitInfo;

    /**
     * @var array 本次请求针对该用户需要过滤的物品列表(不超过100个)
     */
    public $BlackGoodsList;

    /**
     * @var string json字符串，扩展字段
     */
    public $Extension;

    /**
     * @param string $InstanceId 实例ID，在控制台获取
     * @param string $SceneId 场景ID，在控制台创建场景后获取
     * @param string $UserId 用户唯一ID，客户自定义用户ID，作为一个用户的唯一标识，需和行为数据上报接口中的UserId一致，否则影响特征关联
     * @param array $UserIdList 用户设备ID数组，可传入用户的多个类型ID，用于关联画像信息
     * @param integer $GoodsCnt 推荐返回数量，默认10个，最多支持50个的内容返回。如果有更多数量要求，<a href="https://console.cloud.tencent.com/workorder/category" target="_blank">提单</a>沟通解决
     * @param string $CurrentGoodsId 当场景是相关推荐时该值必填，场景是非相关推荐时该值无效
     * @param UserPortraitInfo $UserPortraitInfo 用户的实时特征信息，用作特征
     * @param array $BlackGoodsList 本次请求针对该用户需要过滤的物品列表(不超过100个)
     * @param string $Extension json字符串，扩展字段
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new StrUserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("GoodsCnt",$param) and $param["GoodsCnt"] !== null) {
            $this->GoodsCnt = $param["GoodsCnt"];
        }

        if (array_key_exists("CurrentGoodsId",$param) and $param["CurrentGoodsId"] !== null) {
            $this->CurrentGoodsId = $param["CurrentGoodsId"];
        }

        if (array_key_exists("UserPortraitInfo",$param) and $param["UserPortraitInfo"] !== null) {
            $this->UserPortraitInfo = new UserPortraitInfo();
            $this->UserPortraitInfo->deserialize($param["UserPortraitInfo"]);
        }

        if (array_key_exists("BlackGoodsList",$param) and $param["BlackGoodsList"] !== null) {
            $this->BlackGoodsList = $param["BlackGoodsList"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
