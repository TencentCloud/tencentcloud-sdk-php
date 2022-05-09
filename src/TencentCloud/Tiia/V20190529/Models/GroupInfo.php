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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图库信息。
 *
 * @method string getGroupId() 获取图库Id。
 * @method void setGroupId(string $GroupId) 设置图库Id。
 * @method string getGroupName() 获取图库名称。
 * @method void setGroupName(string $GroupName) 设置图库名称。
 * @method string getBrief() 获取图库简介。
 * @method void setBrief(string $Brief) 设置图库简介。
 * @method integer getMaxCapacity() 获取图库容量。
 * @method void setMaxCapacity(integer $MaxCapacity) 设置图库容量。
 * @method integer getMaxQps() 获取该库的访问限频 。
 * @method void setMaxQps(integer $MaxQps) 设置该库的访问限频 。
 * @method integer getGroupType() 获取图库类型，对应不同服务类型，默认为1。建议手动调整为4～6，1～3为历史版本，不推荐。
参数值：
4：在自建图库中搜索相同原图，可支持裁剪、翻转、调色、加水印后的图片搜索，适用于图片版权保护、原图查询等场景。
5：在自建图库中搜索相同或相似的商品图片，适用于商品分类、检索、推荐等电商场景。
6：在自建图片库中搜索与输入图片高度相似的图片，适用于相似图案、logo、纹理等图像元素的搜索。
 * @method void setGroupType(integer $GroupType) 设置图库类型，对应不同服务类型，默认为1。建议手动调整为4～6，1～3为历史版本，不推荐。
参数值：
4：在自建图库中搜索相同原图，可支持裁剪、翻转、调色、加水印后的图片搜索，适用于图片版权保护、原图查询等场景。
5：在自建图库中搜索相同或相似的商品图片，适用于商品分类、检索、推荐等电商场景。
6：在自建图片库中搜索与输入图片高度相似的图片，适用于相似图案、logo、纹理等图像元素的搜索。
 * @method integer getPicCount() 获取图库图片数量。
 * @method void setPicCount(integer $PicCount) 设置图库图片数量。
 * @method string getCreateTime() 获取图库创建时间。
 * @method void setCreateTime(string $CreateTime) 设置图库创建时间。
 * @method string getUpdateTime() 获取图库更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置图库更新时间。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 图库Id。
     */
    public $GroupId;

    /**
     * @var string 图库名称。
     */
    public $GroupName;

    /**
     * @var string 图库简介。
     */
    public $Brief;

    /**
     * @var integer 图库容量。
     */
    public $MaxCapacity;

    /**
     * @var integer 该库的访问限频 。
     */
    public $MaxQps;

    /**
     * @var integer 图库类型，对应不同服务类型，默认为1。建议手动调整为4～6，1～3为历史版本，不推荐。
参数值：
4：在自建图库中搜索相同原图，可支持裁剪、翻转、调色、加水印后的图片搜索，适用于图片版权保护、原图查询等场景。
5：在自建图库中搜索相同或相似的商品图片，适用于商品分类、检索、推荐等电商场景。
6：在自建图片库中搜索与输入图片高度相似的图片，适用于相似图案、logo、纹理等图像元素的搜索。
     */
    public $GroupType;

    /**
     * @var integer 图库图片数量。
     */
    public $PicCount;

    /**
     * @var string 图库创建时间。
     */
    public $CreateTime;

    /**
     * @var string 图库更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $GroupId 图库Id。
     * @param string $GroupName 图库名称。
     * @param string $Brief 图库简介。
     * @param integer $MaxCapacity 图库容量。
     * @param integer $MaxQps 该库的访问限频 。
     * @param integer $GroupType 图库类型，对应不同服务类型，默认为1。建议手动调整为4～6，1～3为历史版本，不推荐。
参数值：
4：在自建图库中搜索相同原图，可支持裁剪、翻转、调色、加水印后的图片搜索，适用于图片版权保护、原图查询等场景。
5：在自建图库中搜索相同或相似的商品图片，适用于商品分类、检索、推荐等电商场景。
6：在自建图片库中搜索与输入图片高度相似的图片，适用于相似图案、logo、纹理等图像元素的搜索。
     * @param integer $PicCount 图库图片数量。
     * @param string $CreateTime 图库创建时间。
     * @param string $UpdateTime 图库更新时间。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }

        if (array_key_exists("MaxCapacity",$param) and $param["MaxCapacity"] !== null) {
            $this->MaxCapacity = $param["MaxCapacity"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("PicCount",$param) and $param["PicCount"] !== null) {
            $this->PicCount = $param["PicCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
